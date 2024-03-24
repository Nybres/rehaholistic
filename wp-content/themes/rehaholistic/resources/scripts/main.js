document.addEventListener('DOMContentLoaded', function () {
  const homeOffert = document.querySelector('.jsHomeOffert');
  if (homeOffert) {
    const slidesCount = homeOffert.querySelectorAll('.splide__slide').length;
    const homeOffertSlider = new Splide('.jsHomeOffert', {
      gap: 16,
      arrows: false,
      pagination: false,
      mediaQuery: 'min',
      breakpoints: {
        576: {
          perPage: 2,
        },
        992: {
          perPage: 3,
          drag: slidesCount > 3 ? true : false,
        },
        1400: {
          arrows: slidesCount > 3 ? true : false,
        },
      },
    }).mount();
  }

  const employes = document.querySelector('.jsEmployes');
  if (employes) {
    const slidesCount = employes.querySelectorAll('.splide__slide').length;
    const homeEmployesSlider = new Splide('.jsEmployes', {
      gap: 16,
      pagination: false,
      arrows: false,
      mediaQuery: 'min',
      breakpoints: {
        768: {
          perPage: 2,
          drag: slidesCount > 2 ? true : false,
          padding: slidesCount > 2 ? { right: 48 } : false,
        },
        1200: {
          arrows: slidesCount > 2 ? true : false,
          padding: slidesCount > 2 ? { right: 0 } : false,
        },
      },
    }).mount();
  }

  const handleOverflowBody = (params) => {
    const body = document.querySelector('body');
    if (body.classList.contains('overflow-hidden')) {
      body.classList.remove('overflow-hidden');

      const subMenuElement = document.querySelector('.jsSubMenu');
      const backElement = document.querySelector('.jsBacElement');

      subMenuElement.classList.remove('nav__submenu--active');
      backElement.classList.remove('nav__back--active');
    } else {
      body.classList.add('overflow-hidden');
    }
  };

  //   MENU

  const hamburgerElement = document.querySelector('.jsHamburger');
  if (hamburgerElement) {
    const navigationElement = document.querySelector('.jsNavigation');
    hamburgerElement.addEventListener('click', () => {
      navigationElement.classList.toggle('nav__navigation--active');
      hamburgerElement.classList.toggle('active');
      handleOverflowBody();
    });

    const subMenuLinkElement = document.querySelector('.jsSubMenuLink');
    const subMenuElement = document.querySelector('.jsSubMenu');

    const backElement = document.querySelector('.jsBacElement');
    const backArrow = document.querySelector('.jsBackArrow');

    if (subMenuLinkElement) {
      subMenuLinkElement.addEventListener('click', () => {
        subMenuElement.classList.add('nav__submenu--active');
        backElement.classList.add('nav__back--active');
      });

      backArrow.addEventListener('click', () => {
        subMenuElement.classList.remove('nav__submenu--active');
        backElement.classList.remove('nav__back--active');
      });
    }
  }

  //

  const navbarElement = document.querySelector('.nav');
  let lastScrollTop = 0;
  window.addEventListener('scroll', () => {
    let scrollPosition =
      window.pageYOffset || document.documentElement.scrollTop;

    if (scrollPosition > lastScrollTop) {
      navbarElement.classList.remove('sticky');
    } else {
      navbarElement.classList.add('sticky');
    }

    lastScrollTop = scrollPosition;

    if (scrollPosition > 100) {
      navbarElement.classList.add('scrolled');
    } else {
      navbarElement.classList.remove('scrolled');
    }
  });
});
