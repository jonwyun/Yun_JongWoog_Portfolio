(() => {
    console.log("Arrow iffe called");

    gsap.from("#name", 3, {x:0, y:150, autoAlpha: 0, ease: Bounce.easeOut});

    let button = document.querySelector("#button");
    let burgerCon = document.querySelector("#burger-con");

    function burgerMenu() {
        burgerCon.classList.toggle("slide-toggle");
        button.classList.toggle("expanded");
    };

    button.addEventListener("click", burgerMenu, false);

})();

