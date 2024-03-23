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

  subMenuLinkElement.addEventListener('click', () => {
    subMenuElement.classList.add('nav__submenu--active');
    backElement.classList.add('nav__back--active');
  });

  backArrow.addEventListener('click', () => {
    subMenuElement.classList.remove('nav__submenu--active');
    backElement.classList.remove('nav__back--active');
  });
}

console.log('xd');
