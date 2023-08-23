import { gsap } from "gsap";

gsap.registerPlugin(ScrollTrigger);

const BlockBannerSliderAnimation = (function () {

    return {
        init: function () {

            gsap.utils.toArray(".banner-inner").forEach(section => {
                const bannerSliderTl = gsap.timeline({
                    scrollTrigger: {
                        scrub: 0.3,
                        // markers: true,
                        //end: "bottom",
                        //trigger: section,
                        //start: 'top top',
                        //start: 'center bottom'
                        //end: '+=1000',
                    }
                })

                bannerSliderTl.to(section, { duration: 2, xPercent: -100 });
            })
        }
    }
}());

BlockBannerSliderAnimation.init();


