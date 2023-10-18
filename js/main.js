(() => {
    console.log("Arrow iffe called");

    gsap.from("#name", 2, {x:150, y:200, autoAlpha: 0, ease: Bounce.easeOut});

    let button = document.querySelector("#button");
    let burgerCon = document.querySelector("#burger-con");

    function burgerMenu() {
        burgerCon.classList.toggle("slide-toggle");
        button.classList.toggle("expanded");
    };

    button.addEventListener("click", burgerMenu, false);

})();

