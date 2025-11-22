const navbar = document.querySelector('.navbar');
const logoLight = document.querySelector('.logo-light');
const logoDark = document.querySelector('.logo-dark');
const burger = document.querySelector('.burger');
const mobileMenu = document.querySelector('.mobile-menu');


const lightModeOn = (event) => { //функция изменения navbar на светлый вместе с логотипом
  navbar.classList.add('navbar-light');
  logoDark.style.display = 'block';
  logoLight.style.display = 'none';
};

const lightModeOff = (event) => { //функция изменения navbar на исходный вместе с логотипом
  navbar.classList.remove('navbar-light');
  logoDark.style.display = 'none';
  logoLight.style.display = 'block';
};

const openMenu = (event) => { //функция открывания меню
  mobileMenu.classList.add('is-open'); //вешает класс is-open
  burger.classList.add('burger-close');
  document.body.style.overflow = 'hidden'; //запрещаем прокрутку сайта под меню
  lightModeOn();
};

const closeMenu = (event) => { //функция закрытия меню
  mobileMenu.classList.remove('is-open'); //убирает класс is-open
  burger.classList.remove('burger-close');
  document.body.style.overflow = ''; //разрешает прокрутку сайта под меню
  lightModeOff();
};

window.addEventListener('scroll', () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
});

burger.addEventListener('click', (event) => {
  mobileMenu.classList.contains('is-open') ? closeMenu() : openMenu();
  //если меню открыто "?" закрыть меню, иначе ":" открыть меню
});

/* const swiper1 = new Swiper('.header .swiper' */
const featuresSlider = new Swiper('.features-slider', {
  speed: 400,
  autoHeight: true,
  slidesPerView: 1,
  navigation: {
    nextEl: ".header .slider-button-next",
    prevEl: ".header .slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 4,
    },
    // when window width is >= 1241px
    1241: {
      slidesPerView: 5,
    }
  },
});

/* const swiper2 = new Swiper('.steps .swiper' */
const stepsSlider = new Swiper('.steps-slider', {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: ".steps .slider-button-next",
    prevEl: ".steps .slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 485px
    485: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    // when window width is >= 1241px
    1241: {
      slidesPerView: 4,
      spaceBetween: 30,
    }
  },
});


const blogSlider = new Swiper('.blog-slider', {
  speed: 400,
  slidesPerView: 1,
  spaceBetween: 30,
  navigation: {
    nextEl: ".blog .slider-button-next",
    prevEl: ".blog .slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 769px
    769: {
      slidesPerView: 2,
    },
  },
});



/* улучшенный скрипт для закрытия модального окна */
const modal = document.querySelector(".modal");
const modalСontent = document.querySelector(".modal-content");

/* если куда-либо в документе будет клик */
document.addEventListener("click", (event) => {
  /* покажить путь к элементу куда мы кликнули, включает ли он в себя modalСontent*/
  
  /* если мы кликнули */
  if (
    event.target.dataset.toggle == "modal" || /* в элемент у которого стоит атрибут data-toggle="modal" или  */
    event.target.parentNode.dataset.toggle == "modal" || /* у родительского элемента(parentNode) тоже стоит атрибут data-toggle="modal" или */
    !event.composedPath().includes(modalСontent) &&  /* если в пути (composedPath() куда кликнули нет(!) элемента modalСontent) и*/
    modal.classList.contains("is-open") /* мод.окно содержит класс is-open */
  ) { /* то */
      event.preventDefault(); /*  отменяет действие по умолчанию */
      modal.classList.toggle("is-open"); /* модальному окну перключаем класс is-open туда-сюда */
    }
});
document.addEventListener("keyup", (event) => {
  /* если нажали кнопку Escape и мод.окно содержит класс is-open*/
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
  }
});
