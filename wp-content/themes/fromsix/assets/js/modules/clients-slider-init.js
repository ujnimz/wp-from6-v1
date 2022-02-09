import Glide from "@glidejs/glide/dist/glide";

const MOBILE_ITEMS_COUNT = 6;
const DESKTOP_ITEMS_COUNT = 15;
if (typeof clients_list !== 'undefined') {
  const clients = clients_list; // get from global variable. See - page-about-us.php

  if (clients) {
    const slider = document.querySelector(".clients__slider");

    if (slider) {
      let track = slider.querySelector(".glide__track");
      if (clients.length > 0) {
        let slides = document.createElement("UL");
        slides.classList.add("clients__slides", "glide__slides");

        let slide_items_count = MOBILE_ITEMS_COUNT;
        if (document.documentElement.clientWidth > 767) {
          slide_items_count = DESKTOP_ITEMS_COUNT;
        }
        let slide;

        for (let i = 0; i < Math.ceil(clients.length / slide_items_count); i++) {
          slide = document.createElement("LI");
          slide.classList.add("glide__slide");

          let clients_list = document.createElement("UL");
          clients_list.classList.add("clients__list");

          for (let j = i * slide_items_count; j < (i * slide_items_count + slide_items_count); j++) {
            if (clients[j]) {
              let client = document.createElement("LI");
              client.classList.add("clients__item");
              let client_image = document.createElement("IMG");
              client_image.classList.add("clients__image");
              client_image.src = clients[j].logo.sizes.large;
              client.appendChild(client_image);
              clients_list.appendChild(client);
            }
          }
          slide.appendChild(clients_list);
          slides.appendChild(slide);
        }

        track.appendChild(slides);
      }

      new Glide(slider, {
        type: "carousel",
        autoplay: 5000,
        gap: 0,
        touchAngle: 30,
        direction: document.body.classList.contains("rtl") ? "rtl" : "ltr",
      }).mount();
    }
  }
}
