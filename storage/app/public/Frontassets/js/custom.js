/*
[Table of contents]
  1 header-fixed js
  2 menu-icon js 
  3 lazyload js
  4 wow js

*/


/* header-fixed js */

$(window).scroll(function () {
  if ($(this).scrollTop() > 20) {
    $('header').addClass('fixed');
  } else {
    $('header').removeClass('fixed');
  }
});

/* header-fixed js */


/* menu-icon js */

$(".navbar-toggler").click(function () {
  $('html').toggleClass('show-menu');
});

$(".book-next").click(function () {
  $('#booknow .modal-body').addClass('book-review-move');
});

$(".book-back").click(function () {
  $('#booknow .modal-body').removeClass('book-review-move');
});

/* menu-icon js */


/* lazyload js */

$(function () {
  $("img.lazyload").lazyload();
});

/* lazyload js */


/* Product Details Slider js */

$(document).ready(function () {
  $('#slider').ubislider({
    arrowsToggle: true,
    type: 'ecommerce',
    hideArrows: true,
    autoSlideOnLastClick: true,
    modalOnClick: true
  });
});

/* Product Details Slider js */



/* Owl Carousel js */

$('#categories-carousel').owlCarousel({
  loop: true,
  margin: 15,
  nav: true,
  dots: false,
  autoWidth: true,
  navText: ['<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M16 7H3.83L9.42 1.41L8 0L0 8L8 16L9.41 14.59L3.83 9H16V7Z" /></svg>', '<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M8 0L6.59 1.41L12.17 7H0V9H12.17L6.59 14.59L8 16L16 8L8 0Z" /></svg>'],
});

$('#top-rated-fairies-carousel').owlCarousel({
  loop: true,
  margin: 5,
  nav: true,
  dots: false,
  navText: ['<svg viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 20.3334L1.66667 11L11 1.66671" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>', '<svg viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1.66663L10.3333 11L1 20.3333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
  responsive: {
    0: {
      items: 1
    },
    576: {
      items: 2
    },
    768: {
      items: 3
    },
    1200: {
      items: 4
    }
  }
});

$('.profile-shedule-carousel').owlCarousel({
  loop: false,
  margin: 30,
  nav: true,
  dots: false,
  navText: ['<svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 1L0.999999 7L7 13" stroke="#593E98" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>', '<svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L7 7L1 13" stroke="#593E98" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
  mouseDrag: false,
  responsive: {
    0: {
      items: 1
    },
    992: {
      items: 6
    },
    1199: {
      items: 8
    }
  }
});


$('.book-time-carousel').owlCarousel({
  loop: false,
  margin: 30,
  nav: true,
  dots: false,
  navText: ['<svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 1L0.999999 7L7 13" stroke="#593E98" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>', '<svg viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L7 7L1 13" stroke="#593E98" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
  mouseDrag: false,
  responsive: {
    0: {
      items: 1
    },
    576: {
      items: 3
    }
  }
});

/* Owl Carousel js */


/* Owl Carousel js */

// var picker = new Lightpick({
//   field: document.getElementById('datepicker'),
//   inline: true,
//   singleDate: false,
//   selectForward: true,
//   onSelect: function (start, end) {
//     var str = '';
//     str += start ? start.format('Do MMMM YYYY') + ' to ' : '';
//     str += end ? end.format('Do MMMM YYYY') : '...';
//     document.getElementById('result-7').innerHTML = str;
//   }
// });

// new Lightpick({
//   field: document.getElementById('datepicker'),
//   inline: true,
//   onSelect: function (date) {
//     document.getElementById('result-13').innerHTML = date.format('Do MMMM YYYY');
//   }
// });

/* Owl Carousel js */