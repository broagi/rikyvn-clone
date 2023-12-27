$.fn.viewAnimation = function () {
    var elementTop = $(this).offset().top + 150;
    var elementBottom = elementTop + $(this).outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + ($(window).height() + 150);
    return elementBottom > viewportTop && elementTop < viewportBottom;
};

function onScroll() {
    var items = $(".i-item");
    $(items).each(function (index, element) {
        if ($(element).viewAnimation()) {
            $(element).addClass("show-item");
        }
    });
}
onScroll();
$(document).ready(function () {
    if (!$(".loadlogo").hasClass("loader")) {
        $(".loadlogo").stop().animate({ opacity: 1 }, 300, "linear");
        $(".loadlogo").addClass("loader");
    }

    setTimeout(function () {
        $(".mask").addClass("show finish");
        $(".loadlogo").stop().animate({ opacity: 0 }, 300, "linear");
        $(".loadlogo").remove();
    }, 1200);

    $(document).bind("scroll", function () {
        onScroll();
        var windscroll = $(document).scrollTop();
        if (windscroll >= 70) {
            $(".welcome-header").addClass("show");
        } else {
            $(".welcome-header").removeClass("show");
        }
    });

    $(".slider-picture").slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: true,
        dots: false,
        infinite: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });

    $(".toogle-a").click(function () {
        $(".menu").toggleClass("show");
        $(".bg-menu").toggleClass("active");
        $(this).toggleClass("active");
    });
    $(".menu li a").click(function () {
        $(".menu").removeClass("show");
        $(".toogle-a").removeClass("active");
        $(".bg-menu").removeClass("active");
    });
    $(".bg-menu").click(function () {
        $(".menu").removeClass("show");
        $(".toogle-a").removeClass("active");
        $(this).removeClass("active");
    });
    $('.menu a[href^="#"]').on("click", function (e) {
        e.preventDefault();
        var target = this.hash;
        $target = $(target);
        $("html, body")
            .stop()
            .animate(
                {
                    scrollTop: $target.offset().top, //no need of parseInt here
                },
                900,
                "swing",
                function () {
                    window.location.hash = target;
                }
            );
    });

    $("#file-upload").change(function (e) {
        // console.log(e.target.files[0]);
        $("#file-upload-name").html(e.target.files[0].name);
    });

    $("#cover-upload").change(function (e) {
        // console.log(e.target.files[0]);
        $("#cover-upload-name").html(e.target.files[0].name);
    });

    $("#contact-form").submit((e) => {
        e.preventDefault();
        fetch("/api/contact", {
            method: "POST",
            body: JSON.stringify({
                name: $("#contact-form input[name=fullname")[0].value,
                phone_number: $("#contact-form input[name=phone_number")[0]
                    .value,
                description: $("#contact-form input[name=description")[0].value,
            }),
            headers: {
                Accept: "application/json",
                "Content-Type": "application/json",
            },
        })
            .then((res) => res.json())
            .then((res) => {
                if (res.status === 200) {
                    // Toastify({
                    //     text: "Gửi thành công.",
                    //     duration: 5000,
                    //     // destination: "https://github.com/apvarun/toastify-js",
                    //     newWindow: true,
                    //     close: true,
                    //     gravity: "top", // `top` or `bottom`
                    //     position: "right", // `left`, `center` or `right`
                    //     stopOnFocus: true, // Prevents dismissing of toast on hover
                    //     style: {
                    //         background:
                    //             "linear-gradient(to right, #00b09b, #96c93d)",
                    //     },
                    //     onClick: function () {}, // Callback after click
                    // }).showToast();
                    $('#success_tic').modal('toggle');
                    $("#contact-form")[0].reset();
                    return;
                }

                throw new Error();
            })
            .catch(() => {
                Toastify({
                    text: "Gửi thất bại.",
                    duration: 5000,
                    // destination: "https://github.com/apvarun/toastify-js",
                    newWindow: true,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "right", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        background:
                            "linear-gradient(to right, #00b09b, #96c93d)",
                    },
                    onClick: function () {}, // Callback after click
                }).showToast();
                $("#contact-form")[0].reset();
            });
        return false;
    });

    $(".slider-pic").slick({
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                },
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true,
                    arrows: false,
                },
            },
        ],
    });

    $(".slider-for").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: ".slider-nav",
    });
    $(".slider-nav").slick({
        slidesToShow: 8,
        slidesToScroll: 1,
        asNavFor: ".slider-for",
        centerMode: true,
        focusOnSelect: true,
        variableWidth: true,
        infinite: true
    });
    $(".close-popup").click(function () {
        $(".popup-album").removeClass("show");
        $(".popup-album-video").removeClass("show");

        // $(".popup-album-video video").each(function () {
        //     $(this).get(0).pause();
        // });
        $('.popup-album-video .slider-for iframe').each(function() {
          const src = this.src;
          this.src= src;
        })
    });

    $(".item-picture-video").click(function () {
        $(".popup-album-video").addClass("show");
        $(".popup-album-video .slider-for").slick(
            "slickGoTo",
            $(this).data("id")
        );
        $(".popup-album-video .slider-for").resize();
        $(".popup-album-video .slider-for").slick("setDimensions");
        $(".popup-album-video .slider-for").slick("setPosition");
        $(".popup-album-video .slider-nav").slick("setPosition");
    });

    $(".popup-album-video .slider-for").on("afterChange", () => {
        // $(".popup-album-video .slick-active").find("video").get(0).play();
        // $(".popup-album-video video").each(function () {
        //     $(this).get(0).pause();
        // });
        $('.popup-album-video .slider-for iframe').each(function() {
          const src = this.src;
          this.src= src;
        })
    });

    $(".item-picture-photo").click(function () {
        $(".popup-album-photo").addClass("show");
        $(".popup-album-photo .slider-for").slick(
            "slickGoTo",
            $(this).data("id")
        );
        $(".popup-album-photo .slider-for").resize();
        $(".popup-album-photo .slider-for").slick("setDimensions");
        $(".popup-album-photo .slider-for").slick("setPosition");
        $(".popup-album-photo .slider-nav").slick("setPosition");
    });

});
