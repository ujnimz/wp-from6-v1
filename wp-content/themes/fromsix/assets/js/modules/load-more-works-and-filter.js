import {scrollToTarget} from "./scroll-to-anchor";
const MAX_ITEMS_COUNT = 100;
const button = document.querySelector("#more-works");
const FILTER = document.querySelector(".filter");
const preloader = document.querySelector(".works__preloader");

function getCoords(elem) { // кроме IE8-
  var box = elem.getBoundingClientRect();
  console.log(box);

  return {
    top: box.top + pageYOffset,
    left: box.left + pageXOffset,
    bottom: box.top + pageYOffset + box.height
  };

}

if (FILTER) {

  const grid = document.querySelector('.works__list');
  const iso_options = {
    itemSelector: '.works__item',
    layoutMode: 'fitRows'
  };
  let iso = new Isotope( grid, iso_options);

  let hash = window.location.hash;
  const filter_buttons = document.querySelectorAll(".filter__button");

  if (hash) {
    const filter = `.${hash.substring(1)}`;
    removeCssClass(filter_buttons, "filter__button--active");
    filter_buttons.forEach((item) => {
      if (item.getAttribute("data-filter-for") === filter) {
        item.classList.add("filter__button--active");
      }
    });
    iso.arrange({ filter: filter });
    scrollToTarget(document.querySelector(".works"), 150);
  }

  FILTER.addEventListener("click", (evt) => {
    if (evt.target.hasAttribute("data-filter-for")) {
      const filter = evt.target.getAttribute("data-filter-for");
      removeCssClass(filter_buttons, "filter__button--active");
      evt.target.classList.add("filter__button--active");
      window.location.hash = filter.substring(1);
      iso.arrange({ filter: filter });
    }
  });

  if (button) {
    const posts_per_page = button.getAttribute("data-per-page");
    const current_lang_id = button.getAttribute("data-language");
    const list = document.querySelector(".works__list");
    let total_items_count = 0;
    let current_page = 1;
    let work_types = {};

    fetch(`/wp-json/wp/v2/works/?language=${current_lang_id}&per_page=${MAX_ITEMS_COUNT}`)
      .then((response) => {
        return response.json();
      })
      .then((data) => {
        total_items_count = data.length;
        if (document.querySelectorAll(".works__item").length === total_items_count) {
          button.disabled = true;
        }
      });

    fetch(`/wp-json/wp/v2/work-type/?language=${current_lang_id}`)
      .then((response) => {
        return response.json();
      })
      .then((data) => {
        data.forEach((term) => {
          work_types[term.id] = term.slug;
        });
      });

    button.addEventListener("click", (evt) => {
      preloader.classList.add("works__preloader--active");
      current_page++;
      fetch(`/wp-json/wp/v2/works/?language=${current_lang_id}&per_page=${posts_per_page}&page=${current_page}&order=asc`)
        .then((response) => {
          return response.json();
        })
        .then((data) => {
          console.log(data);
          if (data.length > 0) {
            const template = document.querySelector("#work-template");
            let list_fragment = document.createDocumentFragment();

            data.forEach((item, index, arr) => {
              let list_item = template.content.cloneNode(true);
              let list_item_link = list_item.querySelector(".works__link");
              let list_item_info = list_item.querySelector(".works__information");
              list_item.children[0].id = item.id;
              item['work-type'].forEach((type_id) => {
                list_item.children[0].classList.add(work_types[type_id]);
              });
              list_item.children[0].style.backgroundImage = `url(${item.acf.hero_image.url})`;
              list_item_link.href = item.link;
              list_item_info.children[0].textContent = item.title.rendered;
              list_item_info.children[1].textContent = item.acf.description;

              let tags_item = list_item_info.children[2].querySelector(".works__tag");
              list_item_info.children[2].innerHTML = '';
              if (item.acf.tags) {
                item.acf.tags.forEach((tag) => {
                  let temp_tag = tags_item.cloneNode(true);
                  temp_tag.textContent = tag;
                  list_item_info.children[2].appendChild(temp_tag);
                });
              }

              list_fragment.appendChild(list_item);
            });

            let grid_coord = getCoords(grid);
            list.appendChild(list_fragment);
            iso.destroy();
            iso = new Isotope( grid, iso_options);
            window.scrollTo(0, grid_coord.bottom);

            if (document.querySelectorAll(".works__item").length === total_items_count) {
              button.disabled = true;
            }

            preloader.classList.remove("works__preloader--active");
          }
        });
    });
  }
}

/**
 *
 * @param {array} list
 * @param {string} className
 */
function removeCssClass(list, className) {
  for (let i = 0; i < list.length; i++) {
    list[i].classList.remove(className);
  }
}
