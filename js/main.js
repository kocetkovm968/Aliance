const navbar = document.querySelector('.navbar');
const logo = document.querySelector('.logo-svg use');
const burger = document.querySelector('.burger');
const mobileMenu = document.querySelector('.mobile-menu');


const lightModeOn = (event) => { //функция изменения navbar на светлый
  navbar.classList.add('navbar-light');
  logo.href.baseVal = 'img/sprite.svg#logo';
};

const lightModeOff = (event) => { //функция изменения navbar на исходный
  navbar.classList.remove('navbar-light');
  logo.href.baseVal = 'img/sprite.svg#logo-light';
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

