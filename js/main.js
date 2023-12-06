(() => {

    gsap.registerPlugin(ScrollTrigger);
    gsap.registerPlugin(ScrollToPlugin);

    let button = document.querySelector("#button");
    let burgerCon = document.querySelector("#burger-con");

    function burgerMenu() {
        burgerCon.classList.toggle("slide-toggle");
        button.classList.toggle("expanded");
    };

    button.addEventListener("click", burgerMenu, false);

    gsap.from("#burger-con", 1, {opacity:0, delay:0.5, x:-400, ease:"power2.out"});
    gsap.from(".jon", 1, {opacity:0, scale:5, delay:0.5, y:200, ease:"power2.out"});

    gsap.to("#profile", {
        autoAlpha: 1,
        duration: 3,
        scrollTrigger: {
            trigger: "#profile",
            start: "top center",
            end: "bottom center"
            // end: ()=> `+=${document.querySelector("#profile").offsetHeight}`
        }
    })

})();

