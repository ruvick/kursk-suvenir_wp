// JS ===================================================================
var ua = window.navigator.userAgent;
var msie = ua.indexOf("MSIE ");
var isMobile = { Android: function () { return navigator.userAgent.match(/Android/i); }, BlackBerry: function () { return navigator.userAgent.match(/BlackBerry/i); }, iOS: function () { return navigator.userAgent.match(/iPhone|iPad|iPod/i); }, Opera: function () { return navigator.userAgent.match(/Opera Mini/i); }, Windows: function () { return navigator.userAgent.match(/IEMobile/i); }, any: function () { return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows()); } };
function isIE() {
  ua = navigator.userAgent;
  var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;
  return is_ie;
}
if (isIE()) {
  document.querySelector('html').classList.add('ie');
}
if (isMobile.any()) {
  document.querySelector('html').classList.add('_touch');
}

// Получить цифры из строки
//parseInt(itemContactpagePhone.replace(/[^\d]/g, ''))

function testWebP(callback) {
  var webP = new Image();
  webP.onload = webP.onerror = function () {
    callback(webP.height == 2);
  };
  webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}
testWebP(function (support) {
  if (support === true) {
    document.querySelector('html').classList.add('_webp');
  } else {
    document.querySelector('html').classList.add('_no-webp');
  }
});

function ibg() {
  if (isIE()) {
    let ibg = document.querySelectorAll("._ibg");
    for (var i = 0; i < ibg.length; i++) {
      if (ibg[i].querySelector('img') && ibg[i].querySelector('img').getAttribute('src') != null) {
        ibg[i].style.backgroundImage = 'url(' + ibg[i].querySelector('img').getAttribute('src') + ')';
      }
    }
  }
}
ibg();

window.addEventListener("load", function () {
  if (document.querySelector('.wrapper')) {
    setTimeout(function () {
      document.querySelector('.wrapper').classList.add('_loaded');
    }, 0);
  }
});

let unlock = true;
//=================

const iconMenuOpen = document.querySelector(".menu-side-open");
const iconMenuClose = document.querySelector(".menu-side-close");
const iconMenuOpenMob = document.querySelector(".menu-side-open-mob");
const body = document.querySelector("body");
const menuSide = document.querySelector(".menu-side");
const msNuarBlk = document.querySelector(".menu-side-nuar_blk");
const filterMob = document.querySelector(".catalog-sec__sidebar-filter-block-mob");
const sidebarBody = document.querySelector(".catalog-sec__sidebar-body");

//BURGER
if (iconMenuOpen) {
  iconMenuOpen.addEventListener("click", function () {
    body.classList.add("_lock");
    menuSide.classList.add("active");
    msNuarBlk.classList.add("active");
  });
}

if (iconMenuClose) {
  iconMenuClose.addEventListener("click", function () {
    body.classList.remove("_lock");
    menuSide.classList.remove("active");
    msNuarBlk.classList.remove("active");
  });
}

if (iconMenuOpenMob) {
  iconMenuOpenMob.addEventListener("click", function () {
    body.classList.add("_lock");
    menuSide.classList.add("active");
    msNuarBlk.classList.add("active");
  });
}

if (filterMob) {
  filterMob.addEventListener("click", function () {
    sidebarBody.classList.toggle("active");
  });
}

// Закрытие моб меню при клике на якорную ссылку
// if (menuListItemElems) {
//   menuListItemElems.addEventListener("click", function () {
//     iconMenu.classList.toggle("active");
//     body.classList.toggle("_lock");
//     menuBody.classList.toggle("active");
//   });
// }

// Закрытие моб меню при клике вне области меню 
// window.addEventListener('click', e => { // при клике в любом месте окна браузера
//   const target = e.target // находим элемент, на котором был клик
//   if (!target.closest('.icon-menu') && !target.closest('.mob-menu') && !target.closest('.header__mob-search-btn') && !target.closest('.header__search-mob') && !target.closest('._popup-link') && !target.closest('.popup')) { // если этот элемент или его родительские элементы не окно навигации и не кнопка
//     iconMenu.classList.remove('active') // то закрываем окно навигации, удаляя активный класс
//     menuBody.classList.remove('active')
//     body.classList.remove('_lock')
//     headsearch.classList.remove('_active')
//   }
// })

//ActionsOnHash
if (location.hash) {
  const hsh = location.hash.replace('#', '');
  if (document.querySelector('.popup_' + hsh)) {
    popup_open(hsh);
  } else if (document.querySelector('div.' + hsh)) {
    _goto(document.querySelector('.' + hsh), 500, '');
  }
}
//=================

//BodyLock
function body_lock(delay) {
  let body = document.querySelector("body");
  if (body.classList.contains('_lock')) {
    body_lock_remove(delay);
  } else {
    body_lock_add(delay);
  }
}
function body_lock_remove(delay) {
  let body = document.querySelector("body");
  if (unlock) {
    let lock_padding = document.querySelectorAll("._lp");
    setTimeout(() => {
      for (let index = 0; index < lock_padding.length; index++) {
        const el = lock_padding[index];
        el.style.paddingRight = '0px';
      }
      body.style.paddingRight = '0px';
      body.classList.remove("_lock");
    }, delay);

    unlock = false;
    setTimeout(function () {
      unlock = true;
    }, delay);
  }
}
function body_lock_add(delay) {
  let body = document.querySelector("body");
  if (unlock) {
    let lock_padding = document.querySelectorAll("._lp");
    for (let index = 0; index < lock_padding.length; index++) {
      const el = lock_padding[index];
      el.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
    }
    body.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
    body.classList.add("_lock");

    unlock = false;
    setTimeout(function () {
      unlock = true;
    }, delay);
  }
}
//=================

// LettersAnimation
let title = document.querySelectorAll('._letter-animation');
if (title) {
  for (let index = 0; index < title.length; index++) {
    let el = title[index];
    let txt = el.innerHTML;
    let txt_words = txt.replace('  ', ' ').split(' ');
    let new_title = '';
    for (let index = 0; index < txt_words.length; index++) {
      let txt_word = txt_words[index];
      let len = txt_word.length;
      new_title = new_title + '<p>';
      for (let index = 0; index < len; index++) {
        let it = txt_word.substr(index, 1);
        if (it == ' ') {
          it = '&nbsp;';
        }
        new_title = new_title + '<span>' + it + '</span>';
      }
      el.innerHTML = new_title;
      new_title = new_title + '&nbsp;</p>';
    }
  }
}
//=================

//Tabs
let tabs = document.querySelectorAll("._tabs");
for (let index = 0; index < tabs.length; index++) {
  let tab = tabs[index];
  let tabs_items = tab.querySelectorAll("._tabs-item");
  let tabs_blocks = tab.querySelectorAll("._tabs-block");
  for (let index = 0; index < tabs_items.length; index++) {
    let tabs_item = tabs_items[index];
    tabs_item.addEventListener("click", function (e) {
      for (let index = 0; index < tabs_items.length; index++) {
        let tabs_item = tabs_items[index];
        tabs_item.classList.remove('_active');
        tabs_blocks[index].classList.remove('_active');
      }
      tabs_item.classList.add('_active');
      tabs_blocks[index].classList.add('_active');
      e.preventDefault();
    });
  }
}
//=================

/*
Для родителя слойлеров пишем атрибут data-spollers
Для заголовков слойлеров пишем атрибут data-spoller
Если нужно включать\выключать работу спойлеров на разных размерах экранов
пишем параметры ширины и типа брейкпоинта.
Например: 
data-spollers="992,max" - спойлеры будут работать только на экранах меньше или равно 992px
data-spollers="768,min" - спойлеры будут работать только на экранах больше или равно 768px

Если нужно что бы в блоке открывался болько один слойлер добавляем атрибут data-one-spoller
*/

// SPOLLERS
const spollersArray = document.querySelectorAll('[data-spollers]');
if (spollersArray.length > 0) {
  // Получение обычных слойлеров
  const spollersRegular = Array.from(spollersArray).filter(function (item, index, self) {
    return !item.dataset.spollers.split(",")[0];
  });
  // Инициализация обычных слойлеров
  if (spollersRegular.length > 0) {
    initSpollers(spollersRegular);
  }

  // Получение слойлеров с медиа запросами
  const spollersMedia = Array.from(spollersArray).filter(function (item, index, self) {
    return item.dataset.spollers.split(",")[0];
  });

  // Инициализация слойлеров с медиа запросами
  if (spollersMedia.length > 0) {
    const breakpointsArray = [];
    spollersMedia.forEach(item => {
      const params = item.dataset.spollers;
      const breakpoint = {};
      const paramsArray = params.split(",");
      breakpoint.value = paramsArray[0];
      breakpoint.type = paramsArray[1] ? paramsArray[1].trim() : "max";
      breakpoint.item = item;
      breakpointsArray.push(breakpoint);
    });

    // Получаем уникальные брейкпоинты
    let mediaQueries = breakpointsArray.map(function (item) {
      return '(' + item.type + "-width: " + item.value + "px)," + item.value + ',' + item.type;
    });
    mediaQueries = mediaQueries.filter(function (item, index, self) {
      return self.indexOf(item) === index;
    });

    // Работаем с каждым брейкпоинтом
    mediaQueries.forEach(breakpoint => {
      const paramsArray = breakpoint.split(",");
      const mediaBreakpoint = paramsArray[1];
      const mediaType = paramsArray[2];
      const matchMedia = window.matchMedia(paramsArray[0]);

      // Объекты с нужными условиями
      const spollersArray = breakpointsArray.filter(function (item) {
        if (item.value === mediaBreakpoint && item.type === mediaType) {
          return true;
        }
      });
      // Событие
      matchMedia.addListener(function () {
        initSpollers(spollersArray, matchMedia);
      });
      initSpollers(spollersArray, matchMedia);
    });
  }
  // Инициализация
  function initSpollers(spollersArray, matchMedia = false) {
    spollersArray.forEach(spollersBlock => {
      spollersBlock = matchMedia ? spollersBlock.item : spollersBlock;
      if (matchMedia.matches || !matchMedia) {
        spollersBlock.classList.add('_init');
        initSpollerBody(spollersBlock);
        spollersBlock.addEventListener("click", setSpollerAction);
      } else {
        spollersBlock.classList.remove('_init');
        initSpollerBody(spollersBlock, false);
        spollersBlock.removeEventListener("click", setSpollerAction);
      }
    });
  }
  // Работа с контентом
  function initSpollerBody(spollersBlock, hideSpollerBody = true) {
    const spollerTitles = spollersBlock.querySelectorAll('[data-spoller]');
    if (spollerTitles.length > 0) {
      spollerTitles.forEach(spollerTitle => {
        if (hideSpollerBody) {
          spollerTitle.removeAttribute('tabindex');
          if (!spollerTitle.classList.contains('_active')) {
            spollerTitle.nextElementSibling.hidden = true;
          }
        } else {
          spollerTitle.setAttribute('tabindex', '-1');
          spollerTitle.nextElementSibling.hidden = false;
        }
      });
    }
  }
  function setSpollerAction(e) {
    const el = e.target;
    if (el.hasAttribute('data-spoller') || el.closest('[data-spoller]')) {
      const spollerTitle = el.hasAttribute('data-spoller') ? el : el.closest('[data-spoller]');
      const spollersBlock = spollerTitle.closest('[data-spollers]');
      const oneSpoller = spollersBlock.hasAttribute('data-one-spoller') ? true : false;
      if (!spollersBlock.querySelectorAll('._slide').length) {
        if (oneSpoller && !spollerTitle.classList.contains('_active')) {
          hideSpollersBody(spollersBlock);
        }
        spollerTitle.classList.toggle('_active');
        _slideToggle(spollerTitle.nextElementSibling, 500);
      }
      e.preventDefault();
    }
  }
  function hideSpollersBody(spollersBlock) {
    const spollerActiveTitle = spollersBlock.querySelector('[data-spoller]._active');
    if (spollerActiveTitle) {
      spollerActiveTitle.classList.remove('_active');
      _slideUp(spollerActiveTitle.nextElementSibling, 500);
    }
  }
}
//=================

//Gallery
let gallery = document.querySelectorAll('._gallery');
if (gallery) {
  gallery_init();
}
function gallery_init() {
  for (let index = 0; index < gallery.length; index++) {
    const el = gallery[index];
    lightGallery(el, {
      counter: false,
      selector: 'a',
      download: false
    });
  }
}
//=================

//SearchInList
function search_in_list(input) {
  let ul = input.parentNode.querySelector('ul')
  let li = ul.querySelectorAll('li');
  let filter = input.value.toUpperCase();

  for (i = 0; i < li.length; i++) {
    let el = li[i];
    let item = el;
    txtValue = item.textContent || item.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      el.style.display = "";
    } else {
      el.style.display = "none";
    }
  }
}
//=================

//DigiFormat
function digi(str) {
  var r = str.toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 ");
  return r;
}
//=================

//DiGiAnimate
function digi_animate(digi_animate) {
  if (digi_animate.length > 0) {
    for (let index = 0; index < digi_animate.length; index++) {
      const el = digi_animate[index];
      const el_to = parseInt(el.innerHTML.replace(' ', ''));
      if (!el.classList.contains('_done')) {
        digi_animate_value(el, 0, el_to, 1500);
      }
    }
  }
}
function digi_animate_value(el, start, end, duration) {
  var obj = el;
  var range = end - start;
  // no timer shorter than 50ms (not really visible any way)
  var minTimer = 50;
  // calc step time to show all interediate values
  var stepTime = Math.abs(Math.floor(duration / range));

  // never go below minTimer
  stepTime = Math.max(stepTime, minTimer);

  // get current time and calculate desired end time
  var startTime = new Date().getTime();
  var endTime = startTime + duration;
  var timer;

  function run() {
    var now = new Date().getTime();
    var remaining = Math.max((endTime - now) / duration, 0);
    var value = Math.round(end - (remaining * range));
    obj.innerHTML = digi(value);
    if (value == end) {
      clearInterval(timer);
    }
  }

  timer = setInterval(run, stepTime);
  run();

  el.classList.add('_done');
}
//=================

//Popups
let popup_link = document.querySelectorAll('._popup-link');
let popups = document.querySelectorAll('.popup');
for (let index = 0; index < popup_link.length; index++) {
  const el = popup_link[index];
  el.addEventListener('click', function (e) {
    if (unlock) {
      let item = el.getAttribute('href').replace('#', '');
      let video = el.getAttribute('data-video');
      popup_open(item, video);
    }
    e.preventDefault();
  })
}
for (let index = 0; index < popups.length; index++) {
  const popup = popups[index];
  popup.addEventListener("click", function (e) {
    if (!e.target.closest('.popup__body')) {
      popup_close(e.target.closest('.popup'));
    }
  });
}
function popup_open(item, video = '') {
  let activePopup = document.querySelectorAll('.popup._active');
  if (activePopup.length > 0) {
    popup_close('', false);
  }
  let curent_popup = document.querySelector('.popup_' + item);
  if (curent_popup && unlock) {
    if (video != '' && video != null) {
      let popup_video = document.querySelector('.popup_video');
      popup_video.querySelector('.popup__video').innerHTML = '<iframe src="https://www.youtube.com/embed/' + video + '?autoplay=1"  allow="autoplay; encrypted-media" allowfullscreen></iframe>';
    }
    if (!document.querySelector('.menu__body._active')) {
      body_lock_add(500);
    }
    curent_popup.classList.add('_active');
    history.pushState('', '', '#' + item);
  }
}
function popup_close(item, bodyUnlock = true) {
  if (unlock) {
    if (!item) {
      for (let index = 0; index < popups.length; index++) {
        const popup = popups[index];
        let video = popup.querySelector('.popup__video');
        if (video) {
          video.innerHTML = '';
        }
        popup.classList.remove('_active');
      }
    } else {
      let video = item.querySelector('.popup__video');
      if (video) {
        video.innerHTML = '';
      }
      item.classList.remove('_active');
    }
    if (!document.querySelector('.menu__body._active') && bodyUnlock) {
      body_lock_remove(500);
    }
    history.pushState('', '', window.location.href.split('#')[0]);
  }
}
let popup_close_icon = document.querySelectorAll('.popup__close,._popup-close');
if (popup_close_icon) {
  for (let index = 0; index < popup_close_icon.length; index++) {
    const el = popup_close_icon[index];
    el.addEventListener('click', function () {
      popup_close(el.closest('.popup'));
    })
  }
}
document.addEventListener('keydown', function (e) {
  if (e.code === 'Escape') {
    popup_close();
  }
});

//=================

//SlideToggle
let _slideUp = (target, duration = 500) => {
  if (!target.classList.contains('_slide')) {
    target.classList.add('_slide');
    target.style.transitionProperty = 'height, margin, padding';
    target.style.transitionDuration = duration + 'ms';
    target.style.height = target.offsetHeight + 'px';
    target.offsetHeight;
    target.style.overflow = 'hidden';
    target.style.height = 0;
    target.style.paddingTop = 0;
    target.style.paddingBottom = 0;
    target.style.marginTop = 0;
    target.style.marginBottom = 0;
    window.setTimeout(() => {
      target.hidden = true;
      target.style.removeProperty('height');
      target.style.removeProperty('padding-top');
      target.style.removeProperty('padding-bottom');
      target.style.removeProperty('margin-top');
      target.style.removeProperty('margin-bottom');
      target.style.removeProperty('overflow');
      target.style.removeProperty('transition-duration');
      target.style.removeProperty('transition-property');
      target.classList.remove('_slide');
    }, duration);
  }
}
let _slideDown = (target, duration = 500) => {
  if (!target.classList.contains('_slide')) {
    target.classList.add('_slide');
    if (target.hidden) {
      target.hidden = false;
    }
    let height = target.offsetHeight;
    target.style.overflow = 'hidden';
    target.style.height = 0;
    target.style.paddingTop = 0;
    target.style.paddingBottom = 0;
    target.style.marginTop = 0;
    target.style.marginBottom = 0;
    target.offsetHeight;
    target.style.transitionProperty = "height, margin, padding";
    target.style.transitionDuration = duration + 'ms';
    target.style.height = height + 'px';
    target.style.removeProperty('padding-top');
    target.style.removeProperty('padding-bottom');
    target.style.removeProperty('margin-top');
    target.style.removeProperty('margin-bottom');
    window.setTimeout(() => {
      target.style.removeProperty('height');
      target.style.removeProperty('overflow');
      target.style.removeProperty('transition-duration');
      target.style.removeProperty('transition-property');
      target.classList.remove('_slide');
    }, duration);
  }
}
let _slideToggle = (target, duration = 500) => {
  if (target.hidden) {
    return _slideDown(target, duration);
  } else {
    return _slideUp(target, duration);
  }
}
//========================================

//Wrap
function _wrap(el, wrapper) {
  el.parentNode.insertBefore(wrapper, el);
  wrapper.appendChild(el);
}
//========================================

//RemoveClasses
function _removeClasses(el, class_name) {
  for (var i = 0; i < el.length; i++) {
    el[i].classList.remove(class_name);
  }
}
//========================================

//IsHidden
function _is_hidden(el) {
  return (el.offsetParent === null)
}
// ShowMore Beta ========================
let moreBlocks = document.querySelectorAll('._more-block');
if (moreBlocks.length > 0) {
  let wrapper = document.querySelector('.wrapper');
  for (let index = 0; index < moreBlocks.length; index++) {
    const moreBlock = moreBlocks[index];
    let items = moreBlock.querySelectorAll('._more-item');
    if (items.length > 0) {
      let itemsMore = moreBlock.querySelector('._more-link');
      let itemsContent = moreBlock.querySelector('._more-content');
      let itemsView = itemsContent.getAttribute('data-view');
      if (getComputedStyle(itemsContent).getPropertyValue("transition-duration") === '0s') {
        itemsContent.style.cssText = "transition-duration: 1ms";
      }
      itemsMore.addEventListener("click", function (e) {
        if (itemsMore.classList.contains('_active')) {
          setSize();
        } else {
          setSize('start');
        }
        itemsMore.classList.toggle('_active');
        e.preventDefault();
      });

      let isScrollStart;
      function setSize(type) {
        let resultHeight;
        let itemsContentHeight = 0;
        let itemsContentStartHeight = 0;

        for (let index = 0; index < items.length; index++) {
          if (index < itemsView) {
            itemsContentHeight += items[index].offsetHeight;
          }
          itemsContentStartHeight += items[index].offsetHeight;
        }
        resultHeight = (type === 'start') ? itemsContentStartHeight : itemsContentHeight;
        isScrollStart = window.innerWidth - wrapper.offsetWidth;
        itemsContent.style.height = `${resultHeight}px`;
      }

      itemsContent.addEventListener("transitionend", updateSize, false);

      function updateSize() {
        let isScrollEnd = window.innerWidth - wrapper.offsetWidth;
        if (isScrollStart === 0 && isScrollEnd > 0 || isScrollStart > 0 && isScrollEnd === 0) {
          if (itemsMore.classList.contains('_active')) {
            setSize('start');
          } else {
            setSize();
          }
        }
      }
      window.addEventListener("resize", function (e) {
        if (!itemsMore.classList.contains('_active')) {
          setSize();
        } else {
          setSize('start');
        }
      });
      setSize();
    }
  }
}

//==RATING======================================
const ratings = document.querySelectorAll('.rating');
if (ratings.length > 0) {
  initRatings();
}
// Основная функция
function initRatings() {
  let ratingActive, ratingValue;
  // "Бегаем" по всем рейтингам на странице
  for (let index = 0; index < ratings.length; index++) {
    const rating = ratings[index];
    initRating(rating);
  }

  // Инициализируем конкретный рейтинг
  function initRating(rating) {
    initRatingVars(rating);

    setRatingActiveWidth();

    if (rating.classList.contains('rating_set')) {
      setRating(rating);
    }
  }

  // Инициализайция переменных
  function initRatingVars(rating) {
    ratingActive = rating.querySelector('.rating__active');
    ratingValue = rating.querySelector('.rating__value');
  }
  // Изменяем ширину активных звезд
  function setRatingActiveWidth(index = ratingValue.innerHTML) {
    const ratingActiveWidth = index / 0.05;
    ratingActive.style.width = `${ratingActiveWidth}%`;
  }
  // Возможность указать оценку 
  function setRating(rating) {
    const ratingItems = rating.querySelectorAll('.rating__item');
    for (let index = 0; index < ratingItems.length; index++) {
      const ratingItem = ratingItems[index];
      ratingItem.addEventListener("mouseenter", function (e) {
        // Обновление переменных
        initRatingVars(rating);
        // Обновление активных звезд
        setRatingActiveWidth(ratingItem.value);
      });
      ratingItem.addEventListener("mouseleave", function (e) {
        // Обновление активных звезд
        setRatingActiveWidth();
      });
      ratingItem.addEventListener("click", function (e) {
        // Обновление переменных
        initRatingVars(rating);

        if (rating.dataset.ajax) {
          // "Отправить" на сервер
          setRatingValue(ratingItem.value, rating);
        } else {
          // Отобразить указанную оцнку
          ratingValue.innerHTML = index + 1;
          setRatingActiveWidth();
        }
      });
    }
  }

  async function setRatingValue(value, rating) {
    if (!rating.classList.contains('rating_sending')) {
      rating.classList.add('rating_sending');

      // Отправика данных (value) на сервер
      let response = await fetch('rating.json', {
        method: 'GET',

        //body: JSON.stringify({
        //	userRating: value
        //}),
        //headers: {
        //	'content-type': 'application/json'
        //}

      });
      if (response.ok) {
        const result = await response.json();

        // Получаем новый рейтинг
        const newRating = result.newRating;

        // Вывод нового среднего результата
        ratingValue.innerHTML = newRating;

        // Обновление активных звезд
        setRatingActiveWidth();

        rating.classList.remove('rating_sending');
      } else {
        alert("Ошибка");

        rating.classList.remove('rating_sending');
      }
    }
  }
}
//========================================

//Animate
function animate({ timing, draw, duration }) {
  let start = performance.now();
  requestAnimationFrame(function animate(time) {
    // timeFraction изменяется от 0 до 1
    let timeFraction = (time - start) / duration;
    if (timeFraction > 1) timeFraction = 1;

    // вычисление текущего состояния анимации
    let progress = timing(timeFraction);

    draw(progress); // отрисовать её

    if (timeFraction < 1) {
      requestAnimationFrame(animate);
    }

  });
}
function makeEaseOut(timing) {
  return function (timeFraction) {
    return 1 - timing(1 - timeFraction);
  }
}
function makeEaseInOut(timing) {
  return function (timeFraction) {
    if (timeFraction < .5)
      return timing(2 * timeFraction) / 2;
    else
      return (2 - timing(2 * (1 - timeFraction))) / 2;
  }
}
function quad(timeFraction) {
  return Math.pow(timeFraction, 2)
}
function circ(timeFraction) {
  return 1 - Math.sin(Math.acos(timeFraction));
}
/*
animate({
  duration: 1000,
  timing: makeEaseOut(quad),
  draw(progress) {
    window.scroll(0, start_position + 400 * progress);
  }
});*/

//Полифилы
(function () {
  // проверяем поддержку
  if (!Element.prototype.closest) {
    // реализуем
    Element.prototype.closest = function (css) {
      var node = this;
      while (node) {
        if (node.matches(css)) return node;
        else node = node.parentElement;
      }
      return null;
    };
  }
})();
(function () {
  // проверяем поддержку
  if (!Element.prototype.matches) {
    // определяем свойство
    Element.prototype.matches = Element.prototype.matchesSelector ||
      Element.prototype.webkitMatchesSelector ||
      Element.prototype.mozMatchesSelector ||
      Element.prototype.msMatchesSelector;
  }
})();
// ============================

//BildSlider
let sliders = document.querySelectorAll('._swiper');
if (sliders) {
  for (let index = 0; index < sliders.length; index++) {
    let slider = sliders[index];
    if (!slider.classList.contains('swiper-bild')) {
      let slider_items = slider.children;
      if (slider_items) {
        for (let index = 0; index < slider_items.length; index++) {
          let el = slider_items[index];
          el.classList.add('swiper-slide');
        }
      }
      let slider_content = slider.innerHTML;
      let slider_wrapper = document.createElement('div');
      slider_wrapper.classList.add('swiper-wrapper');
      slider_wrapper.innerHTML = slider_content;
      slider.innerHTML = '';
      slider.appendChild(slider_wrapper);
      slider.classList.add('swiper-bild');

      if (slider.classList.contains('_swiper_scroll')) {
        let sliderScroll = document.createElement('div');
        sliderScroll.classList.add('swiper-scrollbar');
        slider.appendChild(sliderScroll);
      }
    }
    if (slider.classList.contains('_gallery')) {
      //slider.data('lightGallery').destroy(true);
    }
  }
  sliders_bild_callback();
}

function sliders_bild_callback(params) { }

let sliderScrollItems = document.querySelectorAll('._swiper_scroll');
if (sliderScrollItems.length > 0) {
  for (let index = 0; index < sliderScrollItems.length; index++) {
    const sliderScrollItem = sliderScrollItems[index];
    const sliderScrollBar = sliderScrollItem.querySelector('.swiper-scrollbar');
    const sliderScroll = new Swiper(sliderScrollItem, {
      observer: true,
      observeParents: true,
      direction: 'vertical',
      slidesPerView: 'auto',
      freeMode: true,
      scrollbar: {
        el: sliderScrollBar,
        draggable: true,
        snapOnRelease: false
      },
      mousewheel: {
        releaseOnEdges: true,
      },
    });
    sliderScroll.scrollbar.updateSize();
  }
}

function sliders_bild_callback(params) { }

// Сюда пишем класс нашего слайдера и меняем переменную
let productSl = new Swiper('.cardProductSl', {
  // effect: 'fade',
  // autoplay: {
  // 	delay: 3000,
  // 	disableOnInteraction: false,
  // },

  observer: true,
  observeParents: true,
  slidesPerView: 1,
  spaceBetween: 0,
  autoHeight: true,
  speed: 2000,
  //touchRatio: 0,
  //simulateTouch: false,
  loop: true,
  //preloadImages: false,
  //lazy: true,
  // Dotts
  pagination: {
    el: '.swiper-paggination',
    clickable: true,
  },
  // Arrows
  navigation: {
    nextEl: '.sl-index-button-next',
    prevEl: '.sl-index-button-prev',
  },
  /*
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 0,
      autoHeight: true,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1268: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  },
  */
  on: {
    lazyImageReady: function () {
      ibg();
    },
  }
  // And if we need scrollbar
  //scrollbar: {
  //	el: '.swiper-scrollbar',
  //},
});


//Select
// let selects = document.getElementsByTagName('select');
// if (selects.length > 0) {
//   selects_init(selects);
// }

function selects_init(selects) {
  for (let index = 0; index < selects.length; index++) {
    const select = selects[index];
    select_init(select);
  }
  //select_callback();
  document.addEventListener('click', function (e) {
    selects_close(e);
  });
  document.addEventListener('keydown', function (e) {
    if (e.code === 'Escape') {
      selects_close(e);
    }
  });
}

function selects_close(e) {
  const selects = document.querySelectorAll('.select');
  if (!e.target.closest('.select') && !e.target.classList.contains('_option')) {
    for (let index = 0; index < selects.length; index++) {
      const select = selects[index];
      const select_body_options = select.querySelector('.select__options');
      select.classList.remove('_active');
      _slideUp(select_body_options, 100);
    }
  }
}
function select_init(select) {
  const select_parent = select.parentElement;
  const select_modifikator = select.getAttribute('class');
  const select_selected_option = select.querySelector('option:checked');
  select.setAttribute('data-default', select_selected_option.value);
  select.style.display = 'none';

  select_parent.insertAdjacentHTML('beforeend', '<div class="select select_' + select_modifikator + '"></div>');

  let new_select = select.parentElement.querySelector('.select');
  new_select.appendChild(select);
  select_item(select);
}
function select_item(select) {
  const select_parent = select.parentElement;
  const select_items = select_parent.querySelector('.select__item');
  const select_options = select.querySelectorAll('option');
  const select_selected_option = select.querySelector('option:checked');
  const select_selected_text = select_selected_option.text;
  const select_type = select.getAttribute('data-type');

  if (select_items) {
    select_items.remove();
  }

  let select_type_content = '';
  if (select_type == 'input') {
    select_type_content = '<div class="select__value icon-select-arrow"><input autocomplete="off" type="text" name="form[]" value="' + select_selected_text + '" data-error="Ошибка" data-value="' + select_selected_text + '" class="select__input"></div>';
  } else {
    select_type_content = '<div class="select__value icon-select-arrow"><span>' + select_selected_text + '</span></div>';
  }

  select_parent.insertAdjacentHTML('beforeend',
    '<div class="select__item">' +
    '<div class="select__title">' + select_type_content + '</div>' +
    '<div hidden class="select__options">' + select_get_options(select_options) + '</div>' +
    '</div></div>');

  select_actions(select, select_parent);
}
function select_actions(original, select) {
  const select_item = select.querySelector('.select__item');
  const selectTitle = select.querySelector('.select__title');
  const select_body_options = select.querySelector('.select__options');
  const select_options = select.querySelectorAll('.select__option');
  const select_type = original.getAttribute('data-type');
  const select_input = select.querySelector('.select__input');

  selectTitle.addEventListener('click', function (e) {
    selectItemActions();
  });

  function selectMultiItems() {
    let selectedOptions = select.querySelectorAll('.select__option');
    let originalOptions = original.querySelectorAll('option');
    let selectedOptionsText = [];
    for (let index = 0; index < selectedOptions.length; index++) {
      const selectedOption = selectedOptions[index];
      originalOptions[index].removeAttribute('selected');
      if (selectedOption.classList.contains('_selected')) {
        const selectOptionText = selectedOption.innerHTML;
        selectedOptionsText.push(selectOptionText);
        originalOptions[index].setAttribute('selected', 'selected');
      }
    }
    select.querySelector('.select__value').innerHTML = '<span>' + selectedOptionsText + '</span>';
  }
  function selectItemActions(type) {
    if (!type) {
      let selects = document.querySelectorAll('.select');
      for (let index = 0; index < selects.length; index++) {
        const select = selects[index];
        const select_body_options = select.querySelector('.select__options');
        if (select != select_item.closest('.select')) {
          select.classList.remove('_active');
          _slideUp(select_body_options, 100);
        }
      }
      _slideToggle(select_body_options, 100);
      select.classList.toggle('_active');
    }
  }
  for (let index = 0; index < select_options.length; index++) {
    const select_option = select_options[index];
    const select_option_value = select_option.getAttribute('data-value');
    const select_option_text = select_option.innerHTML;

    if (select_type == 'input') {
      select_input.addEventListener('keyup', select_search);
    } else {
      if (select_option.getAttribute('data-value') == original.value && !original.hasAttribute('multiple')) {
        select_option.style.display = 'none';
      }
    }
    select_option.addEventListener('click', function () {
      for (let index = 0; index < select_options.length; index++) {
        const el = select_options[index];
        el.style.display = 'block';
      }
      if (select_type == 'input') {
        select_input.value = select_option_text;
        original.value = select_option_value;
      } else {
        if (original.hasAttribute('multiple')) {
          select_option.classList.toggle('_selected');
          selectMultiItems();
        } else {
          select.querySelector('.select__value').innerHTML = '<span>' + select_option_text + '</span>';
          original.value = select_option_value;
          select_option.style.display = 'none';
        }
      }
      let type;
      if (original.hasAttribute('multiple')) {
        type = 'multiple';
      }
      selectItemActions(type);
    });
  }
}
function select_get_options(select_options) {
  if (select_options) {
    let select_options_content = '';
    for (let index = 0; index < select_options.length; index++) {
      const select_option = select_options[index];
      const select_option_value = select_option.value;
      if (select_option_value != '') {
        const select_option_text = select_option.innerHTML;
        select_options_content = select_options_content + '<div data-value="' + select_option_value + '" class="select__option">' + select_option_text + '</div>';
      }
    }
    return select_options_content;
  }
}
function select_search(e) {
  let select_block = e.target.closest('.select ').querySelector('.select__options');
  let select_options = e.target.closest('.select ').querySelectorAll('.select__option');
  let select_search_text = e.target.value.toUpperCase();

  for (let i = 0; i < select_options.length; i++) {
    let select_option = select_options[i];
    let select_txt_value = select_option.textContent || select_option.innerText;
    if (select_txt_value.toUpperCase().indexOf(select_search_text) > -1) {
      select_option.style.display = "";
    } else {
      select_option.style.display = "none";
    }
  }
}
function selects_update_all() {
  let selects = document.querySelectorAll('select');
  if (selects) {
    for (let index = 0; index < selects.length; index++) {
      const select = selects[index];
      select_item(select);
    }
  }
}
// JS END ==========================================================================


// jQuery =========================================================================

jQuery(document).ready(function ($) {
  // $(".sidebar-catalog .children").slideUp();
  $(".ul-clean .cat-item > a").click(function (e) {
    $(".ul-clean .cat-item > a").removeClass("active");
    if ($(this).siblings(".children").length != 0) {
      e.preventDefault();
      $(this).toggleClass('active');
      $(this).siblings(".children").slideToggle();
    }
  });

  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    autoplay: 4000
  });

  $('.reviews-slider').slick({
    slidesToShow: 1,
    dots: true,
    arrows: true,
    prevArrow: '<div class="slider-arrow slider-arrow-prev"></div>',
    nextArrow: '<div class="slider-arrow slider-arrow-next"></div>',

  });
  $('.main-bnr__slider').slick({
    slidesToShow: 1,
    autoplay: 3000
  });
  $('.mobile-catalog__btn').click(function () {
    // $(this).next().slideToggle();
    $('.mob-catalog').css('bottom', '0');
  });
  if ($(window).width() > 1200) {
    // $('.sidebar-catalog').scrollToFixed();
  }

  var page_height = $('#page').height();
  var foot_height = $('.footer').height();
  console.log(foot_height);
  // $('.sidebar-catalog').height(content_height + foot_height);

  var inputmask_96e76a5f = { "mask": "+7(999)999-99-99" };
  jQuery("input[type=tel]").inputmask(inputmask_96e76a5f);

  $(".popup-content").click(function (e) {
    e.preventDefault();
    var formid = $(this).data('formid');
    var mailmsg = $(this).data('mailmsg');
    $("#order-modal .uniSendBtn").attr({ 'data-formid': formid, 'data-mailmsg': mailmsg });
    $("#order-modal").arcticmodal();
  });

  // Отправщик в Шапке
  jQuery(".uniSendBtn").click(function () {
    var formid = jQuery(this).data("formid");
    var message = jQuery(this).data("mailmsg");
    var phone = $(this).siblings('input[type=tel]').val();
    var name = $(this).siblings('input[name=name]').val();

    if ((phone == "") || (phone.indexOf("_") > 0)) {
      $(this).siblings('input[type=tel]').css("background-color", "#ff91a4")
    } else {
      var jqXHR = jQuery.post(
        allAjax.ajaxurl,
        {
          action: 'universal_send',
          nonce: allAjax.nonce,
          formid: formid,
          msg: message,
          name: name,
          tel: phone
        }

      );


      jqXHR.done(function (responce) {
        document.location.href = thencsPage
      });

      jqXHR.fail(function (responce) {
        console.log("Произошла ошибка! Попробуйте позднее.");
      });
    }
  });

  // Отправщик в Подвале
  //     jQuery(".ovBtn").click(function(){ 
  //   var formname = jQuery(this).data("phone-modal");
  //   var phone = $(this).siblings('input[type=tel]').val();

  //   if ((phone == "")||(phone.indexOf("_")>0)) {
  //     $(this).siblings('input[type=tel]').css("background-color","#ff91a4")
  //   } else {
  //     var  jqXHR = jQuery.post(
  //       allAjax.ajaxurl,
  //       {
  //         action: 'universal_send',    
  //         nonce: allAjax.nonce,
  //         tel: phone
  //       }

  //     );


  //     jqXHR.done(function (responce) {
  //       $('#phone-modal').arcticmodal("close");
  //       jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
  //       jQuery('#messgeModal').arcticmodal();

  //     });

  //     jqXHR.fail(function (responce) {
  //       jQuery('#messgeModal #lineIcon').html('');
  //       jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
  //       jQuery('#messgeModal').arcticmodal();
  //     });
  //   }
  // });


  lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true,
    'albumLabel': ''
  });

  // $('.hamburger').click(function () {
  //   $('.menu-side').css('left', '0');
  //   $('.menu-side-nuar_blk').css('display', 'block');
  // });
  // $('.menu-side-close').click(function () {
  //   $(this).parent().css('left', '-110%');
  //   $('.menu-side-nuar_blk').css('display', 'none');
  // });

  $('.prodcuts-sort select').niceSelect();


  // jQuery(".dialog-cb-button__decstop a").click(function () {

  //   headerwin = jQuery(this).data("headerwin");
  //   btn = jQuery(this).data('btn');

  //   jQuery('#phone-modal').arcticmodal();
  // });

  // $(".catalog-link").click(function() {
  //   $(".sidebar-catalog").toggleClass('active');
  // });


  $('.pageContetn img').parent('a').attr("data-lightbox", 'gallery');












});


