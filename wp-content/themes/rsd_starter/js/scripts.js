/* --------------------------------- */
/* Header style on scroll */
/* --------------------------------- */

let headerEl = document.querySelector('.main-header');
let target = document.querySelector('.top-pos-reference');

function handleObserverIntersection(entries) {
  if ( !entries[0].isIntersecting ) {
    headerEl.classList.add('main-header--white');
  } else {
    headerEl.classList.remove('main-header--white');
  }
}

let observer = new window.IntersectionObserver(handleObserverIntersection);
observer.observe(target);



/* --------------------------------- */
/* Mobile menu */
/* --------------------------------- */

const showMobileMenu = document.querySelector('.mobile-menu-container__button--open');
const hideMobileMenu = document.querySelector('.mobile-menu-container__button--close');
const menuContainer = document.querySelector('.mobile-menu-container');
const overlayElement = document.querySelector('.body-overlay');

const closeMenu = () => {
  menuContainer.setAttribute('aria-expanded', 'false');
  menuContainer.setAttribute('aria-hidden', 'true');
  
  menuContainer.animate([
    {transform: 'translate(100%)'},
  ], {
    duration: 300,
    fill: 'forwards'
  });

  const hideElement = () => {
    return new Promise((resolve) => {
      overlayElement.animate([
        {opacity: '0'},
      ], {
        duration: 300,
        fill: 'forwards'
      });
      setTimeout(resolve, 350);
    });
  }

  hideElement().then(() => { overlayElement.style.display = 'none'; });
}

let openMenu = () => {
  menuContainer.setAttribute('aria-expanded', 'true');
  menuContainer.setAttribute('aria-hidden', 'false');
  overlayElement.style.display = 'block';

  menuContainer.animate([
    {transform: 'translate(0)'},
  ], {
    duration: 300,
    fill: 'forwards'
  });

  overlayElement.animate([
    {opacity: '100'},
  ], {
    duration: 300,
    fill: 'forwards'
  });
}

function initMobileMenu(e) {
  e.preventDefault();
  if (menuContainer.getAttribute('aria-expanded') === 'true' ) {
    closeMenu();
  } else {
    openMenu();
  }
}

// Close menu on Escape
document.addEventListener('keyup', (e) => {
  if ( e.key === "Escape" ) closeMenu();
});

// Close menu on clicking out of it
overlayElement.addEventListener('click', closeMenu);
hideMobileMenu.addEventListener('click', closeMenu);
showMobileMenu.addEventListener('click', initMobileMenu);