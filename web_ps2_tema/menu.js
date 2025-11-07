const hamburger = document.getElementById('hamburger');
const nav = document.querySelector('nav');
const closeMenu = document.getElementById('close-menu');

// Abrir menú
hamburger.addEventListener('click', () => {
  hamburger.classList.add('active');
  nav.classList.add('active');
  document.body.classList.add('menu-open');
});

// Cerrar menú (X)
closeMenu.addEventListener('click', () => {
  hamburger.classList.remove('active');
  nav.classList.remove('active');
  document.body.classList.remove('menu-open');
});
