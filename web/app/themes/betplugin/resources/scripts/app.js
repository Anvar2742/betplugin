import domReady from '@roots/sage/client/dom-ready';
import Router from '@scripts/util/Router.js';

import common from '@scripts/routes/common.js';
import home from '@scripts/routes/home.js';
// import then needed Font Awesome functionality
import { library, dom } from '@fortawesome/fontawesome-svg-core';
// import the Facebook and Twitter icons
import * as SolidIcons from '@fortawesome/free-solid-svg-icons';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);

const routes = new Router({
  common,
  home,
});

$(document).ready(() => routes.loadEvents());

// add the imported icons to the library
library.add(
  SolidIcons.faRightToBracket,
  SolidIcons.faBars,
  SolidIcons.faComment,
  SolidIcons.faXmark,
  SolidIcons.faChevronCircleRight,
  SolidIcons.faUsers,
  SolidIcons.faArrowLeft,
  SolidIcons.faArrowRight
);

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();

const closeMenu = document.querySelector('#closeMenu');
const menuBar = document.querySelector('#menuBar');
const sideMenu = document.querySelector('#sideMenu');

const sideChat = document.querySelector('#sideChat');
const openSideChat = document.querySelector('#openSideChat');
const closeSideChat = document.querySelector('#closeSideChat');
const expandMinimizeChat = document.querySelector('#expandMinimizeChat');

menuBar.addEventListener('click', () => {
  sideMenu.classList.add('translate-x-full');
  if (sideChat.classList.contains('-translate-x-full')) {
    sideChat.classList.remove('-translate-x-full');
  }
});

closeMenu.addEventListener('click', () => {
  sideMenu.classList.remove('translate-x-full');
});

openSideChat.addEventListener('click', () => {
  sideChat.classList.add('-translate-x-full');
  if (sideMenu.classList.contains('translate-x-full')) {
    sideMenu.classList.remove('translate-x-full');
  }
});

closeSideChat.addEventListener('click', () => {
  sideChat.classList.remove('-translate-x-full');
});

expandMinimizeChat.addEventListener('click', () => {
  if (sideChat.classList.contains('sm:w-90')) {
    expandMinimizeChat.innerHTML = `
      <i class="fa-solid fa-arrow-right text-light-blue mr-2"></i>
      <span>Minimera</span>
    `;
    sideChat.classList.remove('sm:w-90', 'sm:-right-90');
    sideChat.classList.add('w-180', '-right-180');
  } else {
    expandMinimizeChat.innerHTML = `
      <i class="fa-solid fa-arrow-left text-light-blue mr-2"></i>
      <span>Expandera</span>
    `;
    sideChat.classList.remove('w-180', '-right-180');
    sideChat.classList.add('sm:w-90', 'sm:-right-90');
  }
});
