const header = document.querySelector('header');
const headerLogo = document.querySelector('.header-logo');
const navBar = document.querySelector('.menu-main-menu-container');
const searchIcon = document.querySelector('.icon-search');

const sectionOne = document.querySelector('.banner');

const sectionOneOptions = {
  rootMargin: '-100px 0px 0px 0px'
};

const sectionOneObserver = new IntersectionObserver(function(
  entries,
  sectionOneObserver
) {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {
      header.classList.add('nav-scrolled');
      headerLogo.classList.add('header-logo-green');
      navBar.classList.add('nav-bar-green');
      searchIcon.classList.add('icon-search-green');
    } else {
      header.classList.remove('nav-scrolled');
      headerLogo.classList.remove('header-logo-green');
      navBar.classList.remove('nav-bar-green');
      searchIcon.classList.remove('icon-search-green');
    }
  });
},
sectionOneOptions);

sectionOneObserver.observe(sectionOne);