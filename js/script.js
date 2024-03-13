
let menuBtn = document.querySelector("#menu-btn");
let navBar  = document.querySelector(".header .navbar a");
menuBtn.onclick=()=>{
    menuBtn.classList.toggle("fa-times");
}
navBar.onclick=()=>{
  navBar.classList.toggle("active-hover");
}
window.onscroll=()=>{
    menuBtn.classList.remove("fa-times");
    navBar.classList.remove("active");
}

var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

var swiper = new Swiper(".reviews-slider", {
  loop:true,
  spaceBetween: 20,
  autoHeight:true,
  grabCursor:true,
  breakpoints: {
    640: {
      slidesPerView:1,
    },
    768: {
      slidesPerView:2, 
    },
    1024: {
      slidesPerView:3,  
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


let LoadMoreBtn = document.querySelector(".packages .load-more .btn");
let currentItem = 3;
LoadMoreBtn.onclick=()=>{
  let boxes =[...document.querySelectorAll(".packages .box-container .box")];
  for (var i = currentItem; i < currentItem + 3; i++){
    boxes[i].style.display = 'inline-block';
  };
  currentItem += 3;
  if (currentItem >= boxes.length) {
    LoadMoreBtn.style.display = 'none';
  };
};

// let sections = document.querySelectorAll('section');
// let navlinks = document.querySelectorAll('.header .navbar a')

// navlinks.forEach(links=>{
//   navlinks.onclick=()=>{
//     links.classList.remove('active-hover');
//     document.querySelector('.header .navbar a').classList.add('active-hover');
// }
  

// });