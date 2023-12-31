// import { greet } from './greetingfromjon.js';

(() => {
    // greet('Professors')

    gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

//hamburger menu    
    let button = document.querySelector("#button");
    let burgerCon = document.querySelector("#burger-con");

    function burgerMenu() {
        burgerCon.classList.toggle("slide-toggle");
        button.classList.toggle("expanded");
    };

    button.addEventListener("click", burgerMenu, false);

//header animation
    gsap.from("#burger-con", {opacity:0, duration:2.5, delay:0.5, x:-400, ease:"expo.out"});
    gsap.from(".jon", {opacity:0, scale:5, duration:2.5, delay:0.5, y:200, ease:"expo.out"});

//hero image animation
    const mobileIs = window.innerWidth < 768;

    if (mobileIs) {
    const mobileTl = gsap.timeline().from("#m-profile", { opacity: 0, ease:"expo.out" })

    ScrollTrigger.create({
        animation: mobileTl,
        trigger: "#main-header",
        start: "top+=10% top",
        endTrigger: "#mobile",
        end: "center bottom-=50%",
        scrub: true,
        pin: false,
        pinSpacing: false,
        markers: false,
        anticipatePin: 1
    });
    } else {
    const mobileElements = document.querySelectorAll("#m-profile, #mobile");
    mobileElements.forEach(element => element.remove());

    const desktopTl = gsap.timeline().from("#profile", { opacity: 0, ease:"expo.out" });

    ScrollTrigger.create({
        animation: desktopTl,
        trigger: "#main-header",
        start: "top+=10% top",
        endTrigger: "#desktop-tablet",
        end: "center bottom-=50%",
        scrub: true,
        pin: false,
        pinSpacing: false,
        markers: false,
        anticipatePin: 1
    });
    }

//Project section
    gsap.to(".swing", {
        keyframes: [
          { rotate: 0 },
          { rotate: -15, offset: 0.33 },
          { rotate: 15, offset: 0.66 },
          { rotate: 0 }
        ],
        ease: "none",
        scrollTrigger: {
          trigger: ".swing-trigger",
          start: "top center",
          end: "bottom top",
          markers: false,
          scrub: 1,
        },
    });

//Movie section
    const player = new Plyr('video');
    
//Project Page - Image
    const tl = gsap.timeline();
    tl.from(".top-image", {xPercent: -200, opacity: 0.5})
  
    ScrollTrigger.create({
      animation: tl,
      trigger: ".scroll-trigger-2",
      start: "top top+=20%",
      endTrigger: ".image-overlapping",
      end: "bottom bottom-=30%",
      scrub: true,
      pin: false,
      pinSpacing: false,
      markers: true,
      anticipatePin: 1
    });

})();

