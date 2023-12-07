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

    gsap.from("#burger-con", {opacity:0, duration:2.5, delay:0.5, x:-400, ease:"expo.out"});
    gsap.from(".jon", {opacity:0, scale:5, duration:2.5, delay:0.5, y:200, ease:"expo.out"});


    const isMobile = window.innerWidth < 768;

    if (isMobile) {
    const mobileTl = gsap.timeline().from("#m-profile", { opacity: 0 });
    console.log("Mobile Timeline created");

    ScrollTrigger.create({
        animation: mobileTl,
        trigger: "#mobile",
        start: "top top",
        end: "bottom bottom",
        scrub: true,
        pin: true,
        pinSpacing: false,
        markers: true,
        anticipatePin: 1
    });
    console.log("Mobile ScrollTrigger created");
    } else {
    const mobileElements = document.querySelectorAll("#m-profile, #mobile");
    mobileElements.forEach(element => element.remove());

    const desktopTl = gsap.timeline().from("#profile", { opacity: 0 });
    console.log("Desktop Timeline created");

    ScrollTrigger.create({
        animation: desktopTl,
        trigger: "#desktop-tablet",
        start: "top top",
        end: "bottom bottom",
        scrub: true,
        pin: true,
        pinSpacing: false,
        markers: true,
        anticipatePin: 1
    });
    console.log("Desktop ScrollTrigger created");
    }







})();

