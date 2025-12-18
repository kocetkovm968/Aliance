const navbar = document.querySelector('.navbar');
const logoLight = document.querySelector('.logo-light');
const logoDark = document.querySelector('.logo-dark');


const burger = document.querySelector('.burger');
const mobileMenu = document.querySelector('.mobile-menu');


// Получаем тип страницы
const pageType = navbar.getAttribute('data-page-type') || '';


const screenWidth = window.innerWidth;//переменная отслеживающая ширину окна браузера
const isFront = document.body.classList.contains('front-page');//переменная для проверки находимся на главной странице или нет


// Функции переключения цветов у burger
const setBurgerColorWhite = () => {
  //если открыта первая страница а не остальные
  if (!pageType.includes('other-pages')) {
    //добавляем класс для изменения цвета линий burgera
    burger.classList.add('burger-dark');
  }
};

const resetBurgerColor = () => {
  //если открыта первая страница а не остальные
  if (!pageType.includes('other-pages')) {
    //удаляем класс для изменения цвета линий burgera
    burger.classList.remove('burger-dark');
  }
};


//Функция изменения navbar на светлый
const lightModeOn = (event) => {
  //если открыта первая страница а не остальные
  if (!pageType.includes('other-pages')) {
    navbar.classList.add('navbar-light');
  }
};

//Функция изменения navbar на исходный
const lightModeOff = (event) => {
  //если открыта первая страница а не остальные
  if (!pageType.includes('other-pages')) {
    navbar.classList.remove('navbar-light');
  }
  
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
  setBurgerColorWhite(); // Меняем цвет, если страница главная
};

//Функция закрытия меню
const closeMenu = (event) => {
  mobileMenu.classList.remove('is-open'); //убирает класс is-open
  burger.classList.remove('burger-close');
  document.body.style.overflow = ''; //разрешает прокрутку сайта под меню
  lightModeOff();
  resetBurgerColor(); // Возвращаем цвет, если страница главная
};


/* //обработчик, отслеживающий прокрутку на странице
window.addEventListener('scroll', () => {
  // если scroll > 1px, то меняется высота Navbar, если нет, то исходная высота
  this.scrollY > 1 ? changeNavHeight("4.625rem") : changeNavHeight("5.875rem");
  // если находимся на главной странице, то сделай Navbar светлым
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
}); */


// Обработчик прокрутки страницы на разных размерах экрана
window.addEventListener('scroll', () => {
  // const screenWidth = window.innerWidth;
  if (this.scrollY > 1) { // Скролл больше 1px
    if (screenWidth <= 375) {
      changeNavHeight("4rem"); // Для маленьких экранов
    } else {
      changeNavHeight("4.625rem"); // Для больших экранов
    }
  } else {
    if (screenWidth <= 375) {
      changeNavHeight("5.6667rem"); // Восстановление исходной высоты на малых экранах
    } else {
      changeNavHeight("5.875rem"); // Восстановление исходной высоты на больших экранах
    }
  }
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
  slidesPerView: 1,
  navigation: {
    nextEl: ".features .slider-button-next",
    prevEl: ".features .slider-button-prev",
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
  loop: true,
  navigation: {
    nextEl: ".blog .slider-button-next",
    prevEl: ".blog .slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 993px
    993: {
      slidesPerView: 2,
    },
  },
});



/* скрипт дл открытия(закрытия модальных окон) */
let currentModal; //текущее модальное окно
let modalСontent; //содержимое мод.окна
let alertModal = document.querySelector('#alert-modal');//мод.окно с предупреждением

/* все переключатели, которые вызывают мод.окно */
const modalButtons = document.querySelectorAll("[data-toggle=modal]");
modalButtons.forEach((button) => {
  /* клик по переключателю*/
  button.addEventListener("click", (event) => { 
    event.preventDefault(); /*  отменяет действие по умолчанию */
    /* определяем текущее открытое мод.окно */
    currentModal = document.querySelector(button.dataset.target);
    /* открываем текущее мод.окно */
    currentModal.classList.toggle("is-open");
    /* назначаем контент текущего мод.окна */
    modalСontent = currentModal.querySelector(".modal-content");
    /* отслеживаем клик по окну и пустым областям */
    currentModal.addEventListener("click", (event) => {
      /* если в пути (composedPath()) куда кликнули нет(!) элемента modalСontent) */
      if (!event.composedPath().includes(modalСontent)) {
        /* то закрываем окно */
        currentModal.classList.remove("is-open");
      }
    });
  });
});
/* ловим событие нажатия на кнопки клавиатуры */
document.addEventListener("keyup", (event) => {
  /* если нажали кнопку Escape и текущее мод.окно содержит класс is-open*/
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
    /* закрываем текущее мод.окно */
    currentModal.classList.toggle("is-open");
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

      //функция которая незаметно дял пользователя возьмет данные из formData и отправит на URL
      const ajaxSend = (formData) => {
        //возьми атрибут этой формы и будет тот самый URL
        fetch(thisForm.getAttribute('action'), {
          //со следующими опциями
          method: thisForm.getAttribute('method'),//метод которой указан в этой форме
          body: formData, //укажи в теле запроса все то что содержится в этой форме
        }).then((Response) => { //тогда получи ответ
          if(Response.ok) {//если с ответом все ок
            thisForm.reset();//очисти форму
            currentModal.classList.remove("is-open");//закрой текущее мод.окно
            alertModal.classList.add("is-open");//открой мод.окно alert
            currentModal = alertModal;//переопределяем что тек.мод окно это alert
            /* назначаем контент текущего мод.окна */
            modalСontent = currentModal.querySelector(".modal-content");
            /* отслеживаем клик по окну и пустым областям */
            currentModal.addEventListener("click", (event) => {
              /* если в пути (composedPath()) куда кликнули нет(!) элемента modalСontent) */
              if (!event.composedPath().includes(modalСontent)) {
                /* то закрываем окно */
                currentModal.classList.remove("is-open");
              }
            });
          } else {
            alert(Response.statusText);
          }
        });
      };
      ajaxSend(formData);//вызываем функцию с параметрами formData
    });
});



//Макска для номера телефона
/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});
