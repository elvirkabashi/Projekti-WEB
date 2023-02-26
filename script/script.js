const navrez = document.querySelector(".nav-rez");
const navMenu = document.querySelector(".nav-menu");

navrez.addEventListener("click", () => {
    navrez.classList.toggle("active");
    navMenu.classList.toggle("active");
})

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
    navrez.classList.remove("active");
    navMenu.classList.remove("active");
}))


const slides = document.querySelectorAll('.slide');
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');

let currentSlide = 0;

function showSlide(n) {
  slides[currentSlide].classList.remove('active');
  currentSlide = (n + slides.length) % slides.length;
  slides[currentSlide].classList.add('active');
}

function showPrev() {
  showSlide(currentSlide - 1);
}

function showNext() {
  showSlide(currentSlide + 1);
}

prev.addEventListener('click', showPrev);
next.addEventListener('click', showNext);

showSlide(currentSlide);
setInterval(showNext, 5000);
