let button = document.querySelector("#button");
let burgerCon = document.querySelector("#burger-con");

function burgerMenu() {
    burgerCon.classList.toggle("slide-toggle");
    button.classList.toggle("expanded");
};

button.addEventListener("click", burgerMenu, false);