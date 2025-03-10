const menuBtn = document.querySelector(".menu-btn");
const primaryNav = document.querySelector(".primary-header__nav");
const overlay = document.getElementById("overlay");
const body = document.querySelector("body");

menuBtn.addEventListener("click", () => {
    const visible = primaryNav.getAttribute("data-visible");

    if (visible === "false") {
        primaryNav.setAttribute("data-visible", true);
        menuBtn.setAttribute("aria-expanded", true);
        overlay.classList.add("active");
        body.style.overflowY = "hidden";
    } else if (visible == "true") {
        primaryNav.setAttribute("data-visible", false);
        menuBtn.setAttribute("aria-expanded", false);
        overlay.classList.remove("active");
        body.style.overflowY = "scroll";
    }
});

overlay.addEventListener("click", () => {
    visible = primaryNav.getAttribute("data-visible");
    primaryNav.setAttribute("data-visible", false);
    menuBtn.setAttribute("aria-expanded", false);
    overlay.classList.remove("active");
    body.style.overflowY = "scroll";
});

const price = document.querySelector(".price-text");
const frequency = document.querySelector(".frequency-text");
const priceMonthly = "24,99";
const priceAnnual = "123,45";

function changePrice() {
    if (document.getElementById("annual").checked) {
        price.innerHTML = priceAnnual;
        frequency.innerHTML = "/ano";
    } else if (document.getElementById("monthly").checked) {
        price.innerHTML = priceMonthly;
        frequency.innerHTML = "/mês";
    }
}

document.getElementById("monthly").addEventListener("change", changePrice);
document.getElementById("annual").addEventListener("change", changePrice);
document.addEventListener("DOMContentLoaded", changePrice);

// price.innerHTML = "Mensal";
// frequency.innerHTML = "/mês";

// function changePrice() {
//     if (document.getElementById("annual").checked) {
//         price.innerHTML = "Anual";
//         frequency.innerHTML = "/ano";
//     } else if (document.getElementById("monthly").checked) {
//         price.innerHTML = "Mensal";
//         frequency.innerHTML = "/mês";
//     }
// }
