

let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header.navbar');

menu.onclick = () =>{

    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');

};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};


var swiper = new swiper(".home-slider", {
  slidesPerView: 1,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 5,
      spaceBetween: 50,
    },
  },
});




var swiper = new swiper(" .home-slider", {
    direction: "horizontal",
    loop:true,
    navigation: {
      prevEl: ".swiper-button-prev",
      nextEl: ".swiper-button-next",
    },
});

/*this shld give me a responsive breakpoint effect as shown in demo de swiper*/
var swiper = new swiper(" .reviews-slider", {
    
    loop:true,
    spaceBetween: 20,
    autoHeight: true,
    grabcursor: true,
    breakpoints: {
        640: {
          slidesPerView: 1,
          
        },
        768: {
          slidesPerView: 2,
          
        },
        1024: {
          slidesPerView: 3,
          
        },
    },
});
