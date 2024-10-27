const header = document.querySelector('header');

let ultimoScroll = 0;

window.addEventListener('scroll', () => {
let scrollCorrente = window.pageYOffset || document.documentElement.scrollTop;
if (scrollCorrente > ultimoScroll) {
    header.classList.add('active');
} else {
    header.classList.remove('active');
};
ultimoScroll = scrollCorrente;
});


const openNav = document.querySelector('.openNav');
const closeNav = document.querySelector('.closeNav');
const menu = document.querySelector('.menu');


openNav.addEventListener('click', () => {
menu.classList.add('active');
});

closeNav.addEventListener('click', () => {
    menu.classList.remove('active');
});