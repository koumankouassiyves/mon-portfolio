// =======================
// Menu responsive
// =======================
const nav = document.querySelector('nav');
const menuBtn = document.querySelector('#menu-btn');

menuBtn.addEventListener('click', () => {
  nav.classList.toggle('active');
});

// =======================
// Animations au scroll
// =======================
const scrollElements = document.querySelectorAll('.animate-on-scroll');

const elementInView = (el, offset = 100) => {
  const elementTop = el.getBoundingClientRect().top;
  return elementTop <= (window.innerHeight - offset);
};

const displayScrollElement = (el) => {
  el.classList.add('scrolled');
};

const handleScrollAnimation = () => {
  scrollElements.forEach(el => {
    if(elementInView(el, 150)) {
      displayScrollElement(el);
    }
  });
};

window.addEventListener('scroll', () => {
  handleScrollAnimation();
});

// =======================
// Formulaire validation simple
// =======================
const form = document.querySelector('form');
if(form){
  form.addEventListener('submit', (e) => {
    const name = form.querySelector('[name="name"]').value;
    const email = form.querySelector('[name="email"]').value;
    const message = form.querySelector('[name="message"]').value;
    if(name === '' || email === '' || message === ''){
      e.preventDefault();
      alert('Veuillez remplir tous les champs avant d’envoyer !');
    }
  });
}
