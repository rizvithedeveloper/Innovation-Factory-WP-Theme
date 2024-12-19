/*--- ## HEADER NAVBAR ## ---*/
// document.addEventListener("DOMContentLoaded", function () {
//   document.querySelectorAll(".navbar .nav-item.dropdown").forEach((item) => {
//     let el_dropdown_menu = item.querySelector(".dropdown-menu");
//     // let el_dropdown_btn = item.querySelector(".dropdown-btn");
//     let el_dropdown_btn = item.querySelector(".dropdown-toggle");

//     let eventName = "click";

//     if (window.screen.width > 991) {
//       eventName = "mouseenter";
//     }

//     el_dropdown_btn.addEventListener(eventName, function (e) {
//       e.stopPropagation(); // Prevent the click from propagating to the document

//       // Close all other dropdowns
//       document
//         .querySelectorAll(".navbar .nav-item.dropdown")
//         .forEach((otherItem) => {
//           if (otherItem !== item) {
//             otherItem.querySelector(".dropdown-menu").classList.remove("show");
//             otherItem.querySelector(".dropdown-btn").classList.remove("show");
//           }
//         });

//       // Toggle the current dropdown
//       el_dropdown_menu.classList.toggle("show");
//       el_dropdown_btn.classList.toggle("show");
//     });

//     // Close dropdown if clicked outside
//     document.addEventListener("click", function (event) {
//       if (!item.contains(event.target)) {
//         el_dropdown_menu.classList.remove("show");
//         el_dropdown_btn.classList.remove("show");
//       }
//     });
//   });
// });

document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".navbar .nav-item.dropdown").forEach((item) => {
    let el_dropdown_menu = item.querySelector(".dropdown-menu");
    let el_dropdown_btn = item.querySelector(".dropdown-toggle");

    if (window.screen.width > 991) {
      // For devices larger than 991px, use hover
      item.addEventListener("mouseenter", function () {
        // Close all other dropdowns
        document
          .querySelectorAll(".navbar .nav-item.dropdown")
          .forEach((otherItem) => {
            if (otherItem !== item) {
              otherItem
                .querySelector(".dropdown-menu")
                .classList.remove("show");
              otherItem
                .querySelector(".dropdown-toggle")
                .classList.remove("show");
            }
          });

        // Show current dropdown
        el_dropdown_menu.classList.add("show");
        el_dropdown_btn.classList.add("show");
      });

      // Only hide dropdown when mouse leaves the parent `nav-item.dropdown`
      item.addEventListener("mouseleave", function (e) {
        // Check if mouse is leaving to an area outside the dropdown and menu
        if (!item.contains(e.relatedTarget)) {
          el_dropdown_menu.classList.remove("show");
          el_dropdown_btn.classList.remove("show");
        }
      });
    } else {
      // For smaller devices, use click
      el_dropdown_btn.addEventListener("click", function (e) {
        e.stopPropagation(); // Prevent the click from propagating to the document

        // Close all other dropdowns
        document
          .querySelectorAll(".navbar .nav-item.dropdown")
          .forEach((otherItem) => {
            if (otherItem !== item) {
              otherItem
                .querySelector(".dropdown-menu")
                .classList.remove("show");
              otherItem
                .querySelector(".dropdown-toggle")
                .classList.remove("show");
            }
          });

        // Toggle the current dropdown
        el_dropdown_menu.classList.toggle("show");
        el_dropdown_btn.classList.toggle("show");
      });
    }

    // Close dropdown if clicked outside
    document.addEventListener("click", function (event) {
      if (!item.contains(event.target)) {
        el_dropdown_menu.classList.remove("show");
        el_dropdown_btn.classList.remove("show");
      }
    });
  });
});

window.addEventListener("scroll", function () {
  const header = document.querySelector("header");
  let scrollTop = window.scrollY;
  if (scrollTop > 70) {
    header.classList.add("fixed");
  } else {
    header.classList.remove("fixed");
  }
});

/*--- ## ANIMATE ON SCROLL ## ---*/
AOS.init({
  once: true,
});

function scrollToUp() {
  window.scrollTo(0, 0);
}

/*--- ## BANNER SLIDER ## ---*/
$("#heroSlider").slick({
  slidesToShow: 1,
  dots: true,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
  infinite: true,
  draggable: false,
  autoplay: true,
  autoplaySpeed: 4000,
  pauseOnHover: false,
});

$("#heroSlider")
  .on("beforeChange", function () {
    $("#heroSlider .aos-init").removeClass("aos-animate");
  })
  .on("afterChange", function (event, slick, currentSlide) {
    $("#heroSlider .aos-init").addClass("aos-animate");
  });

const sliders = document.querySelectorAll("#heroSlider");
sliders.forEach((slider) => {
  slider.addEventListener("touchstart", (e) => {}, { passive: true });
  slider.addEventListener("touchmove", (e) => {}, { passive: true });
  slider.addEventListener("wheel", (e) => {}, { passive: true });
});

function toggleCardTextShow(target) {
  // Find the closest '.card-box' (parent container)
  let cardBox = target.closest(".card-box");

  // If '.card-box' exists, find the '.section-text' within it
  if (cardBox) {
    let textBox = cardBox.querySelector(".section-text");

    if (textBox) {
      // Toggle the 'hide' class to show or hide the text
      textBox.classList.toggle("hide");
      if (target.innerText.includes("More")) {
        target.innerText = "Show Less";
      } else {
        target.innerText = "Show More";
      }
    } else {
      console.error("No .section-text found within .card-box");
    }
  } else {
    console.error("No .card-box found as a parent container");
  }
}

document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("staticBackdrop");
  const iframe = modal.querySelector("iframe");
  const originalSrc = iframe.src;

  // Autoplay the video on modal open
  modal.addEventListener("show.bs.modal", function () {
    iframe.src = originalSrc + "&autoplay=1";
  });

  // Reset the iframe when modal is closed
  modal.addEventListener("hidden.bs.modal", function () {
    iframe.src = originalSrc;
  });
});
