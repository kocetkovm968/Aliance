const navbar = document.querySelector('.navbar');
const logoLight = document.querySelector('.logo-light');
const logoDark = document.querySelector('.logo-dark');
const burger = document.querySelector('.burger');
const mobileMenu = document.querySelector('.mobile-menu');
const isFront = document.body.classList.contains('front-page');//переменная для проверки находимся на главной странице или нет

const modal = document.querySelector(".modal");
const modalСontent = document.querySelector(".modal-content");


//Функция изменения navbar на светлый
const lightModeOn = (event) => {
  navbar.classList.add('navbar-light');
};

//Функция изменения navbar на исходный
const lightModeOff = (event) => {
  navbar.classList.remove('navbar-light');
};

//Функция для изменения высоты Navbar
const changeNavHeight = (height) => {
  // высоту которую передадим для этой фунции станет высотой Navbar
  navbar.style.height = height;
};

//Функция открывания мобильного меню
const openMenu = (event) => {
  mobileMenu.classList.add('is-open'); //вешает класс is-open
  burger.classList.add('burger-close');
  document.body.style.overflow = 'hidden'; //запрещаем прокрутку сайта под мобильным меню
  lightModeOn();
};

//Функция закрытия меню
const closeMenu = (event) => {
  mobileMenu.classList.remove('is-open'); //убирает класс is-open
  burger.classList.remove('burger-close');
  document.body.style.overflow = ''; //разрешает прокрутку сайта под меню
  lightModeOff();
};


//Функция, отслеживающая прокрутку на странице
window.addEventListener('scroll', () => {
  // если scroll > 1px, то меняется высота Navbar, если нет, то исходная высота
  this.scrollY > 1 ? changeNavHeight("4.625rem") : changeNavHeight("5.875rem");
  // если находимся на главной странице, то сделай Navbar светлым
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
});


//функция открытия или закрытия мобильно меню при клике на кнопку "burger"
burger.addEventListener('click', (event) => {
  //если меню открыто "?" закрыть меню, иначе ":" открыть меню
  mobileMenu.classList.contains('is-open') ? closeMenu() : openMenu();
});



/* слайдер на маленьких экранах для блока "features" */
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
    769: {
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



/* слайдер на маленьких экранах для блока "steps" */
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



/* слайдер для блока "blog" */
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
/* если куда-либо в документе будет клик */
document.addEventListener("click", (event) => {
  /* если мы кликнули */
  if (/* условие: */
    event.target.dataset.toggle == "modal" || /* в элемент у которого стоит атрибут data-toggle="modal" или  */
    event.target.parentNode.dataset.toggle == "modal" || /* у родительского элемента(parentNode) тоже стоит атрибут data-toggle="modal" или */
    !event.composedPath().includes(modalСontent) &&  /* если в пути (composedPath()) куда кликнули нет(!) элемента modalСontent) и*/
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


//Валидация формы
const forms = document.querySelectorAll("form");//собираем все формы
forms.forEach((form) => {//перебираем все формы
  // инициализируем библиотеку проверки
  const validation = new JustValidate(form, {
    errorFieldCssClass: 'is-invalid',
  });
  // применить правила к полям формы
  validation
    .addField('[name=username]', [
      {
        rule: 'required',
        errorMessage: 'Укажите имя',
      },
      {
        rule: 'maxLength',
        value: 30,
        errorMessage: 'Максимально 30 символов',
      },
    ])
    .addField('[name=userphone]', [
      {
        rule: 'required',
        errorMessage: 'Укажите телефон',
      },
    ])
    //Проверка пройдена и форма отправлена
    .onSuccess((event) => {
      const thisForm = event.target; //определяем в какой мы форме
      const formData = new FormData(thisForm); //все данные из нашей формы

      //функция которая незаметно дял пользователя возьмет данные из formData и отправит
      const ajaxSend = (formData) => {
        //возьми атрибут этой формы и будет тот самый URL
        fetch(thisForm.getAttribute('action'), {
          //со следующими опциями
          method: thisForm.getAttribute('method'),//метод которой указан в этой форме
          body: formData, //укажи в теле запроса все то что содержится в этой форме
        }).then((Response) => { //тогда получи ответ
          if(Response.ok) {//если с ответом все ок
            thisForm.reset();//очисти форму
            alert('Форма отправлена');
          } else {
            alert(Response.statusText);
          }
        });
      };
      ajaxSend(formData);//вызываем функцию с параметрами formData
    });
});
