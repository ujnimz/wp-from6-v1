import Glide from "@glidejs/glide";
let testimonials_slider = document.querySelector(".testimonials__slider");
if (testimonials_slider) {
  new Glide(".testimonials__slider", {
    type: "carousel",
    gap: 0,
    touchAngle: 30,
    direction: document.body.classList.contains("rtl") ? "rtl" : "ltr",
  }).mount();
}
