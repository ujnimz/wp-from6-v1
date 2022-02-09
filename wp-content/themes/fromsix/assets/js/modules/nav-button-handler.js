const NAV_BUTTON = document.querySelector(".navigation-button");
const NAVIGATION = document.querySelector(".navigation");
if (NAV_BUTTON && NAVIGATION) {
  const isButtonActive = false;
  NAV_BUTTON.addEventListener("click", (evt) => {
    NAV_BUTTON.classList.toggle("navigation-button--active");
    NAVIGATION.classList.toggle("navigation--active");
  });
}