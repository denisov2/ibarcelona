/* animation scroll */
$(".anim_top").animated("fadeInUp")
$(".anim_down").animated("fadeInDown")
$(".anim_left").animated("fadeInLeft");
$(".anim_right").animated("fadeInRight")
$(".text_anime").animated("rubberBand")
$(".bounce").animated("bounce"); 
$(".rollin").animated("rollIn");
$("h6").animated("rollIn");
$(".scheme_circle").animated("zoomInUp");
$(".zoomInUp").animated("zoomInUp");
/*mob_menu*/
$(".menu_mob").click(function () {
    $(".menu_mob").toggleClass("active_drop_men");
    $(".mob_drop_men").slideToggle()
})
/* mob menu article*/
$(".menu_mob_articles").click(function () {
    $(".menu_mob_articles").toggleClass("active_men_articles");
    $(".art_menu").slideToggle(300)
})
/* open header tab*/
$(".open_header_tab").click(function () {
    $(".header_search").show(500);
})
/*header tab*/
$(".header_btn_block").hover(function () {
    $(".header_btn_block").removeClass("active_head_btn");
    $(this).addClass("active_head_btn");
    $(".header_tab_container").css("display", "none");
    $(".header_tab_container").eq($(this).index()).css("display", "flex");
})
$(window).click(function (event) {
    if ($(event.target).parents().hasClass("header_tab")) { return; }
    $(".header_tab_container").hide(400)
})
/* focus input*/
$(".focus_input_block").focus(function () {
    $(".block_location").show(400);
})
$(window).click(function (event) {
    if ($(event.target).parent().hasClass("block_location") || $(event.target).parent().hasClass("location_cbx_block")) { }
    else if (!$(event.target).hasClass("focus_input_block") && !$(event.target).closest("div").hasClass("checkbox")) {
        $(".block_location").hide(300);
    }
})
/* range area */
$(function () {
    $("#slider").slider({
        range: true,
        min: 0,
        max: 14999,
        values: [0, 14999],
        slide: function (event, ui) {
            $("#price_min").val(ui.values[0]);
            $("#price_max").val(ui.values[1]);
        }
    });
});

$(".price_input").keyup(function () {
    this.value = this.value.replace(/[^0-9\.]/g, '');
});
$(".price_input").bind("keyup", changePrice);

function changePrice() {
    var min = $("#price_min").val();
    var max = $("#price_max").val();
    $("#slider").data('uiSlider').values([min, max])
}
/* range cost */
$(function () {
    $("#slider_cost").slider({
        range: true,
        min: 0,
        max: 999999,
        values: [0, 999999],
        slide: function (event, ui) {
            $("#price_min_cost").val(ui.values[0]);
            $("#price_max_cost").val(ui.values[1]);
        }
    });
});

$(".price_input_cost").keyup(function () {
    this.value = this.value.replace(/[^0-9\.]/g, '');
});
$(".price_input_cost").bind("keyup", changePrice);

function changePrice() {
    var min = $("#price_min_cost").val();
    var max = $("#price_max_cost").val();
    $("#slider_cost").data('uiSlider').values([min, max])
}
/*open_detail*/
$(".open_detail").click(function () {
    $(".detail_container").show(300);
    $(".property_types").css("margin-top", "450px");
})
/*selection slider*/
var swiper = new Swiper('.swiper-container_selection', {
    nextButton: '.left_pag_selection',
    prevButton: '.right_pag_selection',
    slidesPerView: 4,
    paginationClickable: true,
    spaceBetween: 30,
    simulateTouch: false,
    loop: true,
    breakpoints: {
        991: {
            spaceBetween: 20,
        },
        767: {
            slidesPerView: 1,
        }
    }
});
/* offer slider*/
function slider() {
    var swiper = new Swiper('.swiper-container_offer-1', {
        nextButton: '.arr_offers_slider_right-1',
        prevButton: '.arr_offers_slider_left-1',
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 30,
        simulateTouch: false,
        loop: true,
        breakpoints: {
            991: {
                spaceBetween: 15,
            },
            767: {
                slidesPerView: 1,
            }
        }
    });
}
slider();
/* tab slider*/
$(".top_btn_block").click(function () {
    $(".top_btn_block").removeClass("top_btn_block_active");
    $(this).addClass("top_btn_block_active");
    $(".offers_slider").css("display", "none");
    $(".offers_slider").eq($(this).index()).css("display", "block");
    slider();
})
/*articles slider*/
var swiper = new Swiper('.articles_slider', {
    nextButton: '.art_right',
    prevButton: '.art_left',
    slidesPerView: 3,
    loop: true,
    paginationClickable: true,
    simulateTouch: false,
    spaceBetween: 30,
    breakpoints: {
        991: {
            spaceBetween: 15,
        },
        767: {
            slidesPerView: 1,
        }
    }
});
/* new slider*/
var swiper = new Swiper('.news_slider', {
    nextButton: '.new_arr_left',
    prevButton: '.new_arr_right',
    slidesPerView: 2,
    loop: true,
    paginationClickable: true,
    spaceBetween: 75,
    simulateTouch: false,
    breakpoints: {
        991: {
            spaceBetween: 25,
        },
        767: {
            slidesPerView: 1,
        }
    }
});
/*  slider flat  */

function plusSlides(n, el) {
    var currentSlide = parseInt($(el).parent().find(".current-slide").val());
    showSlides($(el).parent().find(".current-slide").val(currentSlide += n), el);
}

function showSlides(n, el) {

    var slides = $(el).parent().find(".container_img_slider").children();
    var slideCountSpan = $(el).parent().find(".clider_photo_count span");
    var currentSlide = $(el).parent().find(".current-slide");
    if (parseInt(n.val()) > slides.length) { currentSlide.val(1) }
    if (parseInt(n.val()) < 1) { currentSlide.val(slides.length)}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[currentSlide.val() - 1].style.display = "block";
    slideCountSpan.text(currentSlide.val());
}
/* wrap tab 1/3*/
$(".btn_wrap_1").click(function () {
    $(".btn_wrap_2").removeClass("active_svg");
    $(".btn_wrap_1").addClass("active_svg");
    $(".flat_tab_container").removeClass("tab_wrap_3");
})
$(".btn_wrap_2").click(function () {
    $(".btn_wrap_1").removeClass("active_svg");
    $(".btn_wrap_2").addClass("active_svg");
    $(".flat_tab_container").addClass("tab_wrap_3");
})
/* map hover*/
$('.map_header_right').hover(
    function () {
        $(".form_map").css("background-color", "rgba(0, 0, 0, 0.4)");
        $(".oficial_present").css("display", "none");
    },
    function () {
        $(".form_map").css("background", "none");
        $(".oficial_present").css("display", "block");
    });
/*apartaments slider bottom*/
var swiper = new Swiper('.swiper-container_apartaments', {
    nextButton: '.apart_arr_left',
    prevButton: '.apart_arr_right',
    loop: true,
    slidesPerView: 5,
    paginationClickable: true,
    spaceBetween: 15,
    simulateTouch: false,
    breakpoints: {
        1199: {
            slidesPerView: 4
        },
        991: {
            slidesPerView: 3
        },

    }
});
$(".apr_sl_block").click(function () {
    $(".display_img").attr("src", $(this).children("img").attr("src"));
})
/* inform slider*/
var swiper = new Swiper('.inform_swiper', {
    nextButton: '.inf_arr_left',
    prevButton: '.inf_arr_right',
    loop: true,
    slidesPerView: 5,
    simulateTouch: false,
    paginationClickable: true,
    spaceBetween: 15,
    direction: 'vertical',
        breakpoints: {
        1199: {
            direction: 'horizontal',
            slidesPerView: 3
        },
            991: {
            direction: 'horizontal',
            slidesPerView: 3
        },

    }
});
/* tab object*/
$(".obg_btn_block").click(function () {
    $(".obg_tab_block").css("display", "none");
    $(".obg_tab_block").eq($(this).index()).css("display", "block");
    $(".obg_btn_block").removeClass("obg_btn_block_active")
    $(".obg_btn_block").eq($(this).index()).addClass("obg_btn_block_active")
})
/* slider input */
var swiper = new Swiper('.swiper_canc', {
    loop: true,
    paginationClickable: true,
    nextButton: '.arrow_canc_right',
    prevButton: '.arrow_canc_left',
    simulateTouch: false
});