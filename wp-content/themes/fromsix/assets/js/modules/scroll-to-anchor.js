let scrollTo = document.getElementsByClassName('scroll-to');
let speed = 0.3;
let start;
let indent;
let scrolling = 0;

export const scrollToTarget = (target, indentDiff = 0) => {
  if (target) {
    indent = target.getBoundingClientRect().top;
    if (indentDiff !== 0) {
      indent -= indentDiff;
    }

    start = null;
    requestAnimationFrame(step);
  }
};

/**
 * @param {number} time
 */
export const step = (time) => {
  if (start === null) {
    start = time;
  }
  let progress = time - start;
  let position = (indent < 0 ? Math.max(scrolling - progress / speed, scrolling + indent) : Math.min(scrolling + progress / speed, scrolling + indent));
  window.scrollTo(0, position);
  if (position !== scrolling + indent) {
    requestAnimationFrame(step);
  }
};

/**
 * Получения элемента (цели) для прокрутки
 * @param {Element} element
 * @returns {Element|boolean}
 */
const getTarget = (element) => {
  let target = element.getAttribute('data-target');
  return document.getElementById(target);
};

if (scrollTo.length) {
  for (let i = 0; i < scrollTo.length; i++) {
    // Если конечная точка прокрутки отсутствует на странице - кнопка будет скрыта
    if (!getTarget(scrollTo[i])) {
      scrollTo[i].style.display = 'none';
    }

    scrollTo[i].addEventListener('click', function (event) {
      event.preventDefault();
      scrolling = window.pageYOffset;
      let targetElement = getTarget(this);

      scrollToTarget(targetElement);
    }, false);
  }
}
