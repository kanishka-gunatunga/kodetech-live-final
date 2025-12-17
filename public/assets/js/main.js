"use strict";

// ::::: GLobal Javascript ::::
// ================================Animate Interaction on Scroll ==================================
JOS.init({
  // disable: false, // Disable JOS gloabaly | Values :  'true', 'false'
  // debugMode: true, // Enable JOS debug mode | Values :  'true', 'false'
  passive: false, // Set the passive option for the scroll event listener | Values :  'true', 'false'

  once: true, // Disable JOS after first animation | Values :  'true', 'false' || Int : 0-1000
  animation: "fade-up", // JOS global animation type | Values :  'fade', 'slide', 'zoom', 'flip', 'fade-right', 'fade-left', 'fade-up', 'fade-down', 'zoom-in-right', 'zoom-in-left', 'zoom-in-up', 'zoom-in-down', 'zoom-out-right', 'zoom-out-left', 'zoom-out-up', 'zoom-out-down', 'flip-right', 'flip-left', 'flip-up', 'flip-down, spin, revolve, stretch, "my-custom-animation"
  // animationInverse: "static", // Set the animation type for the element when it is scrolled out of view | Values :  'fade', 'slide', 'zoom', 'flip', 'fade-right', 'fade-left', 'fade-up', 'fade-down', 'zoom-in-right', 'zoom-in-left', 'zoom-in-up', 'zoom-in-down', 'zoom-out-right', 'zoom-out-left', 'zoom-out-up', 'zoom-out-down', 'flip-right', 'flip-left', 'flip-up', 'flip-down, spin, revolve, stretch, "my-custom-animation"
  timingFunction: "ease", // JOS global timing function | Values :  'ease', 'ease-in', 'ease-out', 'ease-in-out', 'linear', 'step-start', 'step-end', 'steps()', 'cubic-bezier()', 'my-custom-timing-function'
  //mirror : false, // Set whether the element should animate back when scrolled out of view | Values :  'true', 'false'
  threshold: 0, // Set gloabal the threshold for the element to be visible | Values :  0-1
  delay: 0.5, // Set global the delay for the animation to start | Values :  0,1,2,3,4,5
  duration: 0.7, // Set global the duration for the animation playback | Values :  flota : 0-1 & int : 0,1,2,3,4,5

  // startVisible: "true", // Set whether the element should animate when the page is loaded | Values :  'true', 'false' || MS : 0-10000
  scrollDirection: "down", // Set the scroll direction for the element to be visible | Values :  'up', 'down', 'none'
  //scrollProgressDisable: true // disable or enable scroll callback function | Values :  'true', 'false'
  // intersectionRatio: 0.4, // Set the intersection ratio between which the element should be visible | Values :  0-1 (automaticaly set)
  // rootMargin_top: "0%", // Set by which percent the element should animate out (Recommended value between 10% to -30%)
  // rootMargin_bottom: "-50%", // Set by which percent the element should animate out (Recommended value between -10% to -60%)
  rootMargin: "0% 0% 15% 0%", // Set the root margin for the element to be visible | Values :  _% _% _% _%  (automaticaly set)
});

// ======================================== Accordion ======================================
let accordions = document.querySelectorAll(".accordion-item");
accordions.forEach((item) => {
  let label = item.querySelector(".accordion-header");
  label.addEventListener("click", () => {
    accordions.forEach((accordionItem) => {
      accordionItem.classList.remove("active");
    });
    item.classList.toggle("active");
  });
});

//:::::::::::::::::::::::::::::::::::::::::: Template JavaScript ::::::::::::::::::::::::::::::::::

// ========================TF-1 : Brand Slider================================
var brandSlider = new Swiper(".brand-slider", {
  slidesPerView: 2,
  spaceBetween: 10,
  speed: 1200,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
    },
    992: {
      slidesPerView: 4,
    },
    1200: {
      slidesPerView: 5,
    },
  },
});

// ========================TF-2 : Brand Slider================================
var brandSlider = new Swiper(".brand-slider-2", {
  slidesPerView: 2,
  spaceBetween: 90,
  speed: 1200,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
    },
    992: {
      slidesPerView: 4,
    },
    1200: {
      slidesPerView: 5,
    },
    1400: {
      slidesPerView: 6,
    },
  },
});

// ========================TF-1 : Testimonial Slider custom================================
var brandSlider = new Swiper(".testimonial-slider-custom1", {
  slidesPerView: 1,
  spaceBetween: 40,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  speed: 1200,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  breakpoints: {
    768: {
      slidesPerView: 1,
    },
    992: {
      slidesPerView: 3,
    },
    1200: {
      slidesPerView: 3,
    },
  },
});

// ========================TF-1 : Testimonial Slider custom================================
var brandSlider = new Swiper(".case-study-slider-custom1", {
  slidesPerView: 1,
  spaceBetween: 10,
  speed: 1200,
  // autoplay: {
  //   delay: 4000,
  //   disableOnInteraction: false,
  // },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    768: {
      slidesPerView: 1,
    },
    992: {
      slidesPerView: 1,
    },
    1200: {
      slidesPerView: 1,
    },
  },
});




// ======================== tech slider ============================
// var categorySlider = new Swiper(".techStack-category-slider", {
//   slidesPerView: 4,
//   spaceBetween: 10,
//   breakpoints: {
//     768: { slidesPerView: 2 },
//     992: { slidesPerView: 3 },
//     1200: { slidesPerView: 4 },
//   },
//   navigation: {
//     nextEl: ".category-next",
//     prevEl: ".category-prev",
//   },
// });

// var sliders = {};
// document.querySelectorAll(".techStack-image-slider").forEach(slider => {
//   let category = slider.getAttribute("data-category");
//   sliders[category] = new Swiper(slider, {
//     slidesPerView: 1,
//     spaceBetween: 10,
//     loop: true, 
//     autoplay: {
//       delay: 3000,
//       disableOnInteraction: false,
//     },
//     pagination: {
//       el: ".swiper-pagination",
//       clickable: true,
//     },
//     navigation: {
//       nextEl: ".swiper-button-next",
//       prevEl: ".swiper-button-prev",
//     },
//   });
// });

// function showTechStackSlider(category) {
//   document.querySelectorAll(".techStack-image-slider").forEach(slider => {
//     if (slider.getAttribute("data-category") === category) {
//       slider.classList.remove("hidden");
//     } else {
//       slider.classList.add("hidden");
//     }
//   });
// }

// showTechStackSlider("web");

// document.querySelectorAll(".techStack-category-slider .swiper-slide").forEach(slide => {
//   slide.addEventListener("click", function () {
//     let selectedCategory = this.getAttribute("data-category");
//     showTechStackSlider(selectedCategory);
//   });
// });

var categorySlider = new Swiper(".techStack-new-category-slider", {
  slidesPerView: 1,
  spaceBetween: 20,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

var categorySlider = new Swiper(".techStack-category-slider", {
  slidesPerView: 1,
  spaceBetween: 20,
  breakpoints: {
    576: { slidesPerView: 1 },
    768: { slidesPerView: 2 },
    992: { slidesPerView: 3 },
    1200: { slidesPerView: 4 },
  },
  navigation: {
    nextEl: ".category-next",
    prevEl: ".category-prev",
  },
});

var sliders = {};
document.querySelectorAll(".techStack-image-slider").forEach(slider => {
  let category = slider.getAttribute("data-category");
  sliders[category] = new Swiper(slider, {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true, 
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});

function showTechStackSlider(category) {
  document.querySelectorAll(".techStack-image-slider").forEach(slider => {
    if (slider.getAttribute("data-category") === category) {
      slider.classList.remove("hidden");
    } else {
      slider.classList.add("hidden");
    }
  });

  document.querySelectorAll(".techStack-category-slider .swiper-slide").forEach(slide => {
    slide.classList.remove("active");
  });

  let selectedSlide = document.querySelector(`.techStack-category-slider .swiper-slide[data-category="${category}"]`);
  if (selectedSlide) {
    selectedSlide.classList.add("active");
  }
}

showTechStackSlider("web");

document.querySelectorAll(".techStack-category-slider .swiper-slide").forEach(slide => {
  slide.addEventListener("click", function () {
    let selectedCategory = this.getAttribute("data-category");
    showTechStackSlider(selectedCategory);
  });
});

// ======================== tech slider ============================








// ========================TF-1 : Testimonial Slider custom================================
var brandSlider = new Swiper(".partners-slider-custom1", {
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  speed: 1200,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  breakpoints: {
    768: {
      slidesPerView: 1,
    },
    992: {
      slidesPerView: 1,
    },
    1200: {
      slidesPerView: 1,
    },
  },
});

// ========================TF-3 : Testimonial Slider================================
var testimonialOne = new Swiper(".testimonial-one", {
  navigation: {
    nextEl: ".slider-nav-btn-next",
    prevEl: ".slider-nav-btn-prev",
  },
});

// Get all tab buttons and content sections
const tabButtons = document.querySelectorAll(".tab-button");
const tabContents = document.querySelectorAll(".tab-content");

// Add click event listeners to tab buttons
tabButtons.forEach((button) => {
  button.addEventListener("click", () => {
    // Remove 'active' class from all tab buttons and hide all tab content
    tabButtons.forEach((btn) => {
      btn.classList.remove("active");
    });
    tabContents.forEach((content) => {
      content.classList.add("hidden");
    });

    // Get the data-tab attribute of the clicked button
    const tabId = button.getAttribute("data-tab");
    const correspondingTab = document.getElementById(tabId);

    // Add 'active' class to the clicked button and show the corresponding tab content
    button.classList.add("active");
    correspondingTab.classList.remove("hidden");
  });
});

// ========================TF-1 : Testimonial Slider================================
const testimonialSlider = new Swiper('.testimonial-slider', {
  // Optional parameters
  slidesPerView: 1,
  loop: true,
  spaceBetween: 30,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

// JS Toggle Button
function toggleSwitch() {
  var month = document.querySelectorAll(".month");
  var annual = document.querySelectorAll(".annual");
  for (var i = 0; i < month.length; i++) {
    if (document.getElementById("toggle").checked == true) {
      month[i].classList.add("hidden");
      annual[i].classList.remove("hidden");
    } else {
      month[i].classList.remove("hidden");
      annual[i].classList.add("hidden");
    }
  }
}

// Sticky Menu
window.addEventListener('scroll', function() {
  let header = document.querySelector('header');
  header.classList.toggle('scrolling', window.scrollY > 0);
});
