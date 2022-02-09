jQuery(document).ready(function ($) {
  // Main Menu
  $("body").click(function (event) {
    if ($("#bt-menu").hasClass("bt-menu-open")) {
      if (event.target.id !== "bt-menu") {
        $("#bt-menu").removeClass("bt-menu-open");
      }
    }
  });

  $("#bt-menu-trigger").click(function (e) {
    e.preventDefault();
    $("#bt-menu").toggleClass("bt-menu-open");
    e.stopPropagation();
  });

  // Text change on hover
  var hoverText;
  var originalText;
  $(".hover_text_change").hover(
    function () {
      originalText = $(this).find("p").text();
      hoverText = $(this).find("a").attr("data-hover-text");
      $(this).find("p").text(hoverText).fadeTo(150);
      //alert(hoverText);
    },
    function () {
      $(this).find("p").text(originalText).fadeTo(150);
    },
  );

  // Image change on hover
  $(".hover_image_change").hover(
    function () {
      $(this).stop().animate({"opacity": "0"}, 200);
    },
    function () {
      $(this).stop().animate({"opacity": "1"}, 200);
    },
  );

  // number counter
  $(".count_this").each(function () {
    if (/^\d+$/.test($(this).text())) {
      var text = $(this).text();
      var letter = "";
    } else {
      var letter = $(this)
        .text()
        .match(/\D$/)[0]; /* Store the letter on variable */
      var text = $(this)
        .text()
        .replace(
          /\D$/,
          "",
        ); /* Remove the letter from string so that you can calculate the number of decimal correctly */
      var size = text.split(".")[1] ? text.split(".")[1].length : 0;
    }

    $(this)
      .prop("Counter", 0)
      .animate(
        {
          Counter: text,
        },
        {
          duration: 1000,
          easing: "swing",
          step: function (now) {
            $(this).text(
              parseFloat(now).toFixed(size) + letter,
            ); /* Append the letter here. */
          },
        },
      );
  });

  /* isotope */
  // layout Isotope after each image loads
  var $grid = $(".grid").imagesLoaded(function () {
    $grid = $(".grid").isotope({
      itemSelector: ".grid-item",
      resizable: false,
      layoutMode: "fitRows",
      percentPosition: true,
      fitRows: {
        gutter: ".gutter-sizer",
      },
    });

    // filter items on button click
    $(".filter-button-group").on("click", "li", function () {
      var filterValue = $(this).attr("data-filter");
      //console.log(filterValue);
      $(".grid").isotope({filter: filterValue});
      $(".filter-button-group li").removeClass("active-work");
      $(this).addClass("active-work");
    });
  });

  // Image Cut
  $(".image_cut").each(function () {
    var eleWidth = $(this).height();
    console.log(eleWidth);
    var newWidth = eleWidth - (eleWidth / 100) * 85;
    $(this).attr("style", "--myVar:" + newWidth + "px");
  });

  $(".responsive-3col").slick({
    dots: false,
    infinite: true,
    autoplay: false,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          autoplay: true,
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
          dots: true,
          arrows: false,
        },
      },
      {
        breakpoint: 600,
        settings: {
          autoplay: true,
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
          dots: true,
          arrows: false,
        },
      },
      {
        breakpoint: 480,
        settings: {
          autoplay: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          arrows: false,
        },
      },
    ],
  });

  $(".responsive-4col").slick({
    dots: false,
    infinite: true,
    autoplay: false,
    speed: 500,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          autoplay: true,
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
          dots: true,
          arrows: false,
        },
      },
      {
        breakpoint: 600,
        settings: {
          autoplay: true,
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
          dots: true,
          arrows: false,
        },
      },
      {
        breakpoint: 480,
        settings: {
          autoplay: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          arrows: false,
        },
      },
    ],
  });
});
