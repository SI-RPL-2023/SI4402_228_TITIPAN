const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");
const menuToggle = document.querySelector(".menu-toggle input");
const nav = document.querySelector("nav ul");
console.log(window.location.pathname);
if (window.location.pathname == "/sesi/register") {
    container.classList.add("sign-up-mode");
}
sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
});

menuToggle.addEventListener("click", function () {
    nav.classList.toggle("slide");
});
