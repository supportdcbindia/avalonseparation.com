<section class="footer newFooter">
    <div class="container container-2xl">
        <div class="footer_border">
            <div class="footer_wrapper">
                <div class="footer-socialmedia">
                    <a href="/" class="footer_brand"><img src="assets/images/Logo-png-header.png" class="footer_brand-logo"></a>
                    <div class="px-footer-widget px-footer-col-1 FooterDropImg">
                        <h4 class="px-footer-widget-title">Get In Touch</h4>
                        <div class="px-footer-widget-social FooterDektopNone">
                            <a href="#!"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#!"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#!"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#!"><i class="fa-brands fa-x-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="footer_content">
                    <div class="footer_block">
                        <h4 class="px-footer-widget-title-sm pre mb-25">Head Office</h4>
                        <ul>
                            <li><a href="#!">Shed NO-59/1, Block No-574, <br> Tp-110, Nr.Shradhha Estate Hathijan, <br> Ta. Ahmedabad, Dist. Ahmedabad-382445</a></li>
                        </ul>
                    </div>
                    <div class="footer_block">
                        <h4 class="px-footer-widget-title-sm pre mb-25">Contacts</h4>
                        <ul>
                            <li><a href="tel:+919974698010">+91 99746 98010</a> <br> <a href="tel:+918238093522">+91 82380 93522</a></li>
                            <li><a href="mailto:info@avalonseparaion.com">info@avalonseparation.com</a> <br>
                                <a href="mailto:avalonseparation@gmail.com">avalonseparation@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="px-footer-widget px-footer-col-2 pb-40">
                        <h4 class="px-footer-widget-title-sm pre mb-25">Our Products</h4>
                        <div class="px-footer-widget-menu">
                            <ul>
                                <li><a href="avalon-screw-dehydrator.php">Avalon Screw Dehydrator</a></li>
                                <li><a href="poly-prepartion-dosing-system.php">Poly Prepartion Dosing System</a></li>
                                <li><a href="multiplet-screw-press-machine.php">Multiplet Screw Press Machine</a></li>
                                <li><a href="avalon-disk-separator.php">Avalon Disk Separator (ADS)</a></li>
                                <li><a href="cationic-polyelectrolyte-powder.php">Cationic Polyelectrolyte Powder</a></li>
                                <li><a href="industrial-sludge-dryer.php">Industrial Sludge Dryer</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer_block FooterDektopNone">
                        <h4 class="px-footer-widget-title-sm pre mb-25">Quick Links</h4>
                        <ul>
                            <li><a href="about-us.php">About</a></li>
                            <li><a href="our-products.php">Products</a></li>
                            <li><a href="application.php">Application</a></li>
                            <li><a href="contact-us.php">Contact</a></li>
                            <li><a href="our-clients.php">Our Clients</a></li>
                            <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="footer-mask-relative">
                <div class="footer_ohhpotato-wrapper">
                    <img src="assets/images/logo-footer-white.png" loading="lazy" alt="hedline-image" class="footer-image">
                    <img src="https://dcbwebsite.in/akshar-copack-new-one/assets/img/footer-mob.webp" loading="lazy" alt="hedline-image" class="footer-image mobile-view">
                </div>
                <div class="secondary-image">
                    <div class="mask_image" style="--x: 62.047244094488185%; --y: 31.812223496640996%;"></div>
                </div>

            </div>

            <div class="FooterBottom FooterMobileNone">
                <div class="footer_block">
                    <ul>
                        <li><a href="about-us.php">About</a></li>
                        <li><a href="our-products.php">Products</a></li>
                        <li><a href="application.php">Application</a></li>
                        <li><a href="contact-us.php">Contact</a></li>
                        <li><a href="our-clients.php">Our Clients</a></li>
                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copyright-wrapper">
        <div class="footer-copyright-center-2">© Copyright <?php echo (date("Y")) ?> Avalon Separation. All Rights Reserved.</div>
        <div class="socialMedia FooterMobileNone">
            <div class="px-footer-widget-social">
                <a href="#!"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#!"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#!"><i class="fa-brands fa-instagram"></i></a>
                <a href="#!"><i class="fa-brands fa-x-twitter"></i></a>
            </div>
        </div>
    </div>
</section>
</div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
<script src="assets/js/plugin.js"></script>
<script>
    // Safely register only the plugins that exist
    (function() {
        if (window.gsap) {
            const toRegister = [];
            if (window.ScrollTrigger) toRegister.push(ScrollTrigger);
            if (window.ScrollSmoother) toRegister.push(ScrollSmoother);
            if (window.ScrollToPlugin) toRegister.push(ScrollToPlugin);
            if (window.SplitText) toRegister.push(SplitText);
            if (toRegister.length) gsap.registerPlugin(...toRegister);
        }
    })();

    // Smooth scrolling wrapper (only if plugin present & elements exist)
    if (window.ScrollSmoother && document.querySelector('#smooth-wrapper') && document.querySelector('#smooth-content')) {
        ScrollSmoother.create({
            smooth: 1.35,
            effects: true,
            smoothTouch: 0.1,
            ignoreMobileResize: false
        });
    }

    // Utility: animate a heading (SplitText if available, else fade/slide the whole h2)
</script>

<script>
    gsap.registerPlugin(ScrollTrigger);

    /* =========================
       Heading Animation (H5)
    ========================= */
    function animateHeading(h5) {
        if (!h5) return;

        if (h5.dataset.animated === "1") return;
        h5.dataset.animated = "1";

        if (window.SplitText) {
            const split = new SplitText(h5, {
                type: "chars,words"
            });

            gsap.from(split.chars, {
                scrollTrigger: {
                    trigger: h5,
                    start: "left 80%",
                    once: true
                },
                opacity: 0,
                x: 40,
                duration: 0.9,
                stagger: 0.035,
                ease: "power4.out"
            });
        } else {
            gsap.from(h5, {
                scrollTrigger: {
                    trigger: h5,
                    start: "left 80%",
                    once: true
                },
                opacity: 0,
                x: 40,
                duration: 0.9,
                ease: "power4.out"
            });
        }
    }

    /* =========================
       Description Animation
    ========================= */
    function animateDescription(section) {
        const descItems = section.querySelectorAll(".desc p, .desc .btnGroup");

        gsap.from(descItems, {
            scrollTrigger: {
                trigger: section,
                start: "top 75%",
                once: true
            },
            opacity: 0,
            y: 35,
            duration: 0.8,
            stagger: 0.15,
            ease: "power3.out"
        });
    }

    /* =========================
       Init on Page Load
    ========================= */
    document.querySelectorAll(".secTitle").forEach(section => {
        animateHeading(section.querySelector("h5"));
        animateDescription(section);
    });
</script>


<script>
    gsap.registerPlugin(ScrollTrigger);

    /* =========================
       Heading Animation (H5)
    ========================= */
    function animateHeading(h5) {
        if (!h5) return;

        if (h5.dataset.animated === "1") return;
        h5.dataset.animated = "1";

        if (window.SplitText) {
            const split = new SplitText(h5, {
                type: "chars,words"
            });

            gsap.from(split.chars, {
                scrollTrigger: {
                    trigger: h5,
                    start: "left 80%",
                    once: true
                },
                opacity: 0,
                x: 40,
                duration: 0.9,
                stagger: 0.035,
                ease: "power4.out"
            });
        } else {
            gsap.from(h5, {
                scrollTrigger: {
                    trigger: h5,
                    start: "left 80%",
                    once: true
                },
                opacity: 0,
                x: 40,
                duration: 0.9,
                ease: "power4.out"
            });
        }
    }



    /* =========================
       Init on Page Load
    ========================= */
    document.querySelectorAll(".secBigTitle").forEach(section => {
        animateHeading(section.querySelector("h5"));
    });
</script>

<script>
    gsap.registerPlugin(ScrollTrigger);

    /* =========================
       Heading Animation (H5)
    ========================= */
    function animateHeading(h2) {
        if (!h2) return;

        if (h2.dataset.animated === "1") return;
        h2.dataset.animated = "1";

        if (window.SplitText) {
            const split = new SplitText(h2, {
                type: "chars,words"
            });

            gsap.from(split.chars, {
                scrollTrigger: {
                    trigger: h2,
                    start: "left 80%",
                    once: true
                },
                opacity: 0,
                x: 40,
                duration: 0.9,
                stagger: 0.035,
                ease: "power4.out"
            });
        } else {
            gsap.from(h2, {
                scrollTrigger: {
                    trigger: h2,
                    start: "left 80%",
                    once: true
                },
                opacity: 0,
                x: 40,
                duration: 0.9,
                ease: "power4.out"
            });
        }
    }



    /* =========================
       Init on Page Load
    ========================= */
    document.querySelectorAll(".missionVissionContent").forEach(section => {
        animateHeading(section.querySelector("h2"));
    });
</script>
<script>
    gsap.registerPlugin(ScrollTrigger);

    /* 🔹 Force initial hidden state */
    gsap.set(".OurUspsItem", {
        opacity: 0,
        y: 50
    });

    /* 🔹 Animate on scroll */
    gsap.to(".OurUspsItem", {
        scrollTrigger: {
            trigger: ".OurUspsGrid",
            start: "top 75%",
            once: true
        },
        opacity: 1,
        y: 0,
        duration: 0.8,
        stagger: 0.15,
        ease: "power3.out"
    });
</script>

<script>
    gsap.registerPlugin(ScrollTrigger);

    let device_width = window.innerWidth;

    // const secTitle = document.querySelector(".productSec .secBigTitle");
    // if (secTitle && device_width > 767) {
    //     gsap.to(secTitle, {
    //         scrollTrigger: {
    //             trigger: ".productSec",
    //             start: "top 92px",
    //             end: "+=1900",
    //             pin: true,
    //             pinSpacing: false,
    //             scrub: true,
    //             markers: false,
    //         }
    //     });
    // }
    // SERVICE STACK
    const serviceStack = gsap.utils.toArray(".service-stack");

    if (serviceStack.length > 0 && window.innerWidth > 767) {

        serviceStack.forEach((section) => {

            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: section,
                    pin: true,
                    scrub: 1,
                    start: "top 100px",
                    end: "bottom 100%",
                    endTrigger: ".productGrid",
                    pinSpacing: false,
                    markers: false,
                }
            });

            tl.fromTo(section, {
                scale: 1
            }, {
                scale: 0.8
            });

        });
    }
    // .forEach(item => {
    //     gsap.to(item, {
    //         opacity: 0,
    //         y: 50,
    //         scrollTrigger: {
    //             trigger: item,
    //             scrub: true,
    //             start: "top 100px",
    //             pin: item,
    //             pinSpacing: false,
    //             markers: true,
    //         },
    //     });
    // });
    // }

    //  portfolio panel //
    // gsap.matchMedia().add("(min-width: 1199px)", () => {
    //     let portfolio_panel = document.querySelectorAll('.service-stack')
    //     portfolio_panel.forEach((section, index) => {
    //         gsap.set(portfolio_panel, {
    //             scale: 1,
    //         });
    //         tl.to(section, {
    //             scale: .8,
    //             scrollTrigger: {
    //                 trigger: section,
    //                 pin: true,
    //                 scrub: 1,
    //                 start: 'top 100px',
    //                 end: "bottom 100%",
    //                 endTrigger: '.productGrid',
    //                 pinSpacing: false,
    //                 markers: false,
    //             },
    //         });
    //     });
    // });
</script>
<script>
    // text slider 
    if ('.text-slider-active') {
        var text_slider_active = new Swiper(".text-slider-active", {
            slidesPerView: 'auto',
            loop: true,
            autoplay: true,
            spaceBetween: 0,
            speed: 10000,
            autoplay: {
                delay: 1,
            },
        });
    }
</script>

<script>
    // Lightweight count-up when cards enter the viewport
    (function() {
        const els = document.querySelectorAll('.count');
        const seen = new WeakSet();
        const easeOut = t => 1 - Math.pow(1 - t, 3);

        const obs = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    if (seen.has(el)) return;
                    seen.add(el);

                    const target = +el.dataset.target || 0;
                    const duration = 1400 + Math.random() * 600; // 1.4s–2s
                    const start = performance.now();

                    const tick = now => {
                        const p = Math.min(1, (now - start) / duration);
                        const val = Math.floor(easeOut(p) * target);
                        el.textContent = val.toLocaleString();
                        if (p < 1) requestAnimationFrame(tick);
                    };
                    requestAnimationFrame(tick);
                    obs.unobserve(el);
                }
            });
        }, {
            threshold: 0.25
        });

        els.forEach(el => obs.observe(el));
    })();
</script>

<script>
    const footer = document.querySelector('.footer'); // full footer block
    const maskText = document.querySelector('.mask_image'); // "OHH! POTATO" text

    footer.addEventListener('mousemove', (e) => {
        const footerRect = footer.getBoundingClientRect();
        const maskRect = maskText.getBoundingClientRect();

        // Mouse position relative to footer
        const x = e.clientX - footerRect.left;
        const y = e.clientY - footerRect.top;

        // Convert into percentage relative to footer
        const xPercent = (x / footerRect.width) * 100;
        const yPercent = (y / footerRect.height) * 100;

        // Spotlight will move inside mask_text (even if mouse is outside)
        maskText.style.setProperty('--x', `${xPercent}%`);
        maskText.style.setProperty('--y', `${yPercent}%`);
    });
</script>

<script>
    window.addEventListener("scroll", function() {
        const header = document.querySelector(".customHeader");
        if (window.scrollY > 100) {
            // Adjust scroll value as needed
            header.classList.add("fixed");
        } else {
            header.classList.remove("fixed");
        }
    });
</script>


<script>
    var swiper = new Swiper(".ourApplicationSwiper", {
        loop: true,
        speed: 800,
        spaceBetween: 25,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

        slidesPerView: 4.5,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        effect: 'slide',
        breakpoints: {
            0: {
                slidesPerView: 1.2,
                spaceBetween: 15,
            },
            576: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 25,
            },
            1200: {
                slidesPerView: 4.5,
                spaceBetween: 25,
            }
        },

    });
</script>

<script>
    if ('.clientSwiper') {
        var text_slider_active = new Swiper(".clientSwiper", {
            slidesPerView: 'auto',
            loop: true,
            autoplay: true,
            spaceBetween: 25,
            speed: 10000,
            autoplay: {
                delay: 1,
            },
        });
    }
</script>

<script>
    var typing = new Typed(".TypingText", {
        strings: ["", "Quality.", "Reliability.", "Sustainability."],
        typeSpeed: 200,
        backSpeed: 100,
        loop: true,
    });
</script>