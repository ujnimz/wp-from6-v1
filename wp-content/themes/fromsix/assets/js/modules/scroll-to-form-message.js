import {scrollToTarget} from "./scroll-to-anchor";
const message = document.querySelector(".footer__send-status");
if (message) {
  scrollToTarget(message, 150);
}
