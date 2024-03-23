const hamburgerElement = document.querySelector('.jsHamburger');
if (hamburgerElement) {
  const navigationElement = document.querySelector('.jsNavigation');
  hamburgerElement.addEventListener('click', () => {
    navigationElement.classList.toggle('nav__navigation--active');
    hamburgerElement.classList.toggle('active');
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
document.addEventListener('DOMContentLoaded', function () {
  const homeOffert = document.querySelector('.jsHomeOffert');
  if (homeOffert) {
    const slidesCount = homeOffert.querySelector('.splide__slide');
    const homeOffertSlider = new Splide('.jsHomeOffert', {
      gap: 16,
      arrows: false,
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
});
