
const header = document.querySelector('header');
const headerLogo = document.querySelector('.header-logo');
const navBar = document.querySelector('.menu-main-menu-container');

const sectionOne = document.querySelector('.fp-banner');

const sectionOneOptions = {
    rootMargin: "-100px 0px 0px 0px"

};

const sectionOneObserver = new IntersectionObserver(function (
  entries,
  sectionOneObserver
) {
  entries.forEach(entry => {

    if (!entry.isIntersecting) {
      header.classList.add('nav-scrolled');
      headerLogo.classList.add('header-logo-green');
      navBar.classList.add('nav-bar-green');

    } else {
      header.classList.remove('nav-scrolled');
      headerLogo.classList.remove('header-logo-green');
      navBar.classList.remove('nav-bar-green');
    }
  });
},
sectionOneOptions);

sectionOneObserver.observe(sectionOne);


