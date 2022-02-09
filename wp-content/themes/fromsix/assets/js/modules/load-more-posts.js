const MAX_ITEMS_COUNT = 100;
const button = document.querySelector("#more-posts");
const preloader = document.querySelector(".news__preloader");

if (button) {
  const posts_per_page = button.getAttribute("data-per-page");
  const current_lang_id = button.getAttribute("data-language");
  const list = document.querySelector(".news__list");
  let total_items_count = 0;
  let current_page = 1;

  fetch(`/wp-json/wp/v2/posts/?language=${current_lang_id}&per_page=${MAX_ITEMS_COUNT}`)
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      total_items_count = data.length;
      if (document.querySelectorAll(".news__item").length === total_items_count) {
        button.disabled = true;
      }
    });

  button.addEventListener("click", () => {
    preloader.classList.add("news__preloader--active");
    current_page++;
    fetch(`/wp-json/wp/v2/posts/?language=${current_lang_id}&per_page=${posts_per_page}&page=${current_page}`)
      .then((response) => {
        return response.json();
      })
      .then((data) => {
        if (data.length > 0) {
          const template = document.querySelector("#news-preview-template");
          if (template) {
            let list_fragment = document.createDocumentFragment();

            data.forEach((item, index, arr) => {
              let list_item = template.content.cloneNode(true);
              let list_item_info = list_item.querySelector(".news-preview__information");
              let list_item_cover = list_item.querySelector(".news-preview__cover");
              let list_item_image = list_item.querySelector(".news-preview__image");
              // set item id
              list_item.children[0].id = item.id;

              // set item featured image and link
              if (item.featured_media) {
                fetch(`/wp-json/wp/v2/media/${item.featured_media}`)
                  .then((response) => {
                    return response.json();
                  })
                  .then((data) => {
                    list_item_cover.href = item.link;
                    list_item_image.src = data.source_url;
                    list_item_image.alt = item.title.rendered;
                  });
              } else {
                list_item_info.classList.add("news-preview__information--static");
              }
              // set item title
              list_item_info.querySelector(".news-preview__title").textContent = item.title.rendered;

              // set item publish date
              let post_date = new Date(item.date_gmt);
              post_date = `${post_date.getDate()}/${post_date.getMonth() + 1}/${post_date.getFullYear()}`;
              list_item_info.querySelector(".news-preview__date").textContent = post_date;

              // set item excerpt
              list_item_info.querySelector(".news-preview__excerpt").innerHTML = item.excerpt.rendered;

              // set item link (read more)
              list_item_info.querySelector(".news-preview__link").href = item.link;

              list_fragment.appendChild(list_item);
            });
            list.appendChild(list_fragment);
          }
          if (document.querySelectorAll(".news__item").length === total_items_count) {
            button.disabled = true;
          }
        }
        preloader.classList.remove("news__preloader--active");
      });
  });
}
