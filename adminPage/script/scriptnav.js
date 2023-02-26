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
