// NAVBAR
let navbar = document.querySelector("#navbar");
let dropdown = document.querySelector("#dropdown-menu");

window.addEventListener("scroll", () => {
    if (window.scrollY > 0) {
        navbar.classList.add("nav-scrolled");
        dropdown.classList.add("nav-scrolled");
    } else {
        navbar.classList.remove("nav-scrolled");
        dropdown.classList.remove("nav-scrolled");
    }
});
