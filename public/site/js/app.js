// get color from localStorage
let myColorStore = localStorage.getItem("main-color");
if (myColorStore !== "") {
    document.documentElement.style.setProperty(
        "--main-dark-color",
        myColorStore
    );
}

$(() => {
    // show colors pallete
    $(".params-icon").on("click", function () {
        $(".flat-colors").toggleClass("active");
    });

    // options main color
    let FlatColors = [...$(".flat-color")];
    FlatColors.forEach((color) => {
        $(color).on("click", function () {
            let hexColor = $(this).data("color");
            $(":root").css("--main-dark-color", hexColor);
            localStorage.setItem("main-color", hexColor);
            $(".flat-colors").removeClass("active");
        });
    });

    // global variables
    const nav = $(".navigation");
    const $window = $(window);

    // nice scroll
    $("body").niceScroll({
        cursorcolor: $("body").data("color"),
        zindex: 99,
        cursorwidth: 8,
        cursorfixedheight: 100,
        cursorborder: "none",
        autohidemode: false,
    });

    // add some padding to body
    $("body").css("padding-top", nav.height());

    // fade out spinner page
    setTimeout(() => {
        $("#spinner").fadeOut("slow");
    }, 600);

    // slide to about us
    const slideToAbout = $(".slide-bottom");
    slideToAbout.on("click", () => {
        const aboutUsOffset =
            $(".section-about-us").offset().top - (nav.height() - 10);

        $("html,body").animate({ scrollTop: aboutUsOffset }, 700);
    });

    // btn to top
    const btn_top = $(".scroll-top");
    function checkWindowTop() {
        if ($window.scrollTop() > 500) {
            btn_top.css({ bottom: "60px" });
        } else {
            btn_top.css({ bottom: "-60px" });
        }
    }
    checkWindowTop();

    $window.on("scroll", () => {
        checkWindowTop();
    });

    $(".scroll-top,.home").on("click", (e) => {
        e.preventDefault();
        $("html,body").animate({ scrollTop: 0 }, 1000);
    });

    // navigation
    const navLinks = [...$(".nav-item")];
    navLinks.forEach((el) => {
        const link = $(el);
        link.on("click", (e) => {
            let OffsetTop = $(link.data("class")).offset().top - 83;
            e.preventDefault();
            $("html,body").animate(
                {
                    scrollTop: OffsetTop,
                },
                1000
            );
            // hide navigation after click in nav-link
            if ($(window).outerWidth() < 992) {
                setTimeout(() => {
                    $(".navbar-toggler").click();
                }, 700);
            }
        });
    });

    $window.on("scroll", () => {
        navLinks.forEach((el) => {
            const link = $(el);
            const classOfsset = $(link.data("class")).offset().top - 85;

            if ($window.scrollTop() >= classOfsset) {
                link.addClass("active").siblings("li").removeClass("active");
            }
        });
    });

    // swiper slider init
    const swiper = new Swiper(".slider-content", {
        // Optional parameters
        direction: "vertical",
        loop: true,
        speed: 1200,

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });

    // init height of slider content
    $(".slider-content").css({
        height: $window.height() - $(".navigation").outerHeight() * 2,
        width: $window.outerWidth() - 50,
        left: 30,
    });

    // change form label position
    const formControls = [...$(".form-control")];
    function focusIn1($el) {
        $el.prev(".form-label").animate(
            {
                top: "2px",
                left: "8px",
            },
            200
        );
    }
    function focusOut1($el) {
        $el.prev(".form-label").animate(
            {
                top: "20px",
                left: "20px",
            },
            200
        );
        if ($el.val() !== "") {
            $el.prev(".form-label").animate(
                {
                    top: "2px",
                    left: "8px",
                },
                200
            );
        }
    }
    formControls.forEach((el) => {
        const $this = $(el);

        if ($this.prop("id") == "phone") {
            focusIn1($this);
        } else {
            $this
                .on("focusin", () => focusIn1($this))
                .on("focusout", () => focusOut1($this));
        }
    });

    // mixitup
    var mixer = mixitup("#mixin");
    let mixinLinks = [...$(".control-link")];

    mixinLinks.forEach((el) => {
        const $this = $(el);
        $this.on("click", () => {
            $this
                .addClass("active")
                .parent()
                .siblings()
                .find("span")
                .removeClass("active");
        });
    });

    // contact me button
    $("#go-form,#go-form-1,#go-form-nav").on("click", (e) => {
        e.preventDefault();
        $("html,body").animate(
            {
                scrollTop: $("form").offset().top - (nav.height() + 30),
            },
            1000
        );
        $("form #name").focus();
    });
    // portfolio  button
    $("#btn-portfolio").on("click", (e) => {
        e.preventDefault();
        $("html,body").animate(
            {
                scrollTop:
                    $(".section-portfolio").offset().top - (nav.height() - 10),
            },
            1000
        );
    });

    // letters effects/
    // Wrap every letter in a span
    const textWrapper = [...$(".ml2")];
    textWrapper.forEach((element) => {
        element.innerHTML = element.textContent.replace(
            /\S/g,
            "<span class='letter'>$&</span>"
        );
    });

    anime
        .timeline({ loop: true })
        .add({
            targets: ".ml2 .letter",
            scale: [4, 1],
            opacity: [0, 1],
            translateZ: 0,
            easing: "easeOutExpo",
            duration: 950,
            delay: (el, i) => 70 * i,
        })
        .add({
            targets: ".ml2",
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000,
        });

    // element scroll effect
    let sr = ScrollReveal({ reset: true });
    sr.reveal(".about-image img,.skil-item img,.project-item img", {
        origin: "left",
        duration: 300,
        distance: "50px",
        easing: "linear",
        interval: 600,
        rotate: {
            x: 180,
            y: 180,
            z: 180,
        },
        scale: 1.4,
        mobile: false,
        afterReveal(el) {
            ScrollReveal().clean(el);
        },
    });

    // toggle navigation bar
    $(".navbar-toggler").on("click", function () {
        $("#nav-collapse").slideToggle(500);
        $(this)
            .toggleClass("border-main")
            .find("span")
            .toggleClass("text-main");
    });

    // mousse enter and out
    let borderAnimate = (element, from, to) => {
        $(element)
            .css(from, "auto")
            .animate(
                {
                    [to]: 0,
                },
                300
            );
    };
    const $aboutImgSlashes = [...$(".slashes span")];
    const $aboutImg = $(".about-image img");
    $aboutImg
        .on("mouseenter", function () {
            // scale image
            $(this).css("transform", "scale(1.03)");

            // change border slashes position
            $aboutImgSlashes.forEach((slash, index) => {
                if (index == 0 || index == 1) {
                    borderAnimate(slash, "top", "bottom");
                }
                if (index == 2 || index == 3) {
                    borderAnimate(slash, "bottom", "top");
                }
            });
        })
        .on("mouseout", function () {
            // scale image to normal
            $(this).css("transform", "scale(1)");

            // return border slashes to normal position
            $aboutImgSlashes.forEach((slash, index) => {
                if (index == 0 || index == 1) {
                    borderAnimate(slash, "bottom", "top");
                }
                if (index == 2 || index == 3) {
                    borderAnimate(slash, "top", "bottom");
                }
            });
        });
});
