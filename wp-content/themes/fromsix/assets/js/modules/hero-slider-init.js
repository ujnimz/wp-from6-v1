import Glide from "@glidejs/glide";
let hero_slider = document.querySelector(".hero__slider");

if (hero_slider) {
  new Glide(hero_slider, {
    type: "slider",
    autoplay: 5000,
    gap: 0,
    touchAngle: 30,
    direction: document.body.classList.contains("rtl") ? "rtl" : "ltr",
  }).mount();
}
