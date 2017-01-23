function getParameterByName(a) {
    a = a.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var b = new RegExp("[\\?&]" + a + "=([^&#]*)"),
        c = b.exec(location.search);
    return null === c ? "" : decodeURIComponent(c[1].replace(/\+/g, " "))
}

function add2delay(a, b, c, d, e) {
    $.ajax({
        type: "POST",
        url: "/bitrix/templates/bim1/include/delay.php",
        data: "p_id=" + a + "&pp_id=" + b + "&p=" + c + "&name=" + d + "&dpu=" + e,
        success: function(a) {
            $(".message-success").css("display", "block"), $("#buttons-prod-detail span").addClass("act"), $(".message-success").html(a), $(".cart ").on("change", function() {
                console.log("1232131")
            })
        }
    })
}









$(".addToBasketButton").each(function(a) {
    $(this).click(function() {
        this.blur();
        var a = $(this).attr("href").match(/\?.*$/);
        return $.ajax({
            type: "GET",
            url: "/add2basket.php" + a.valueOf(),
            success: function(a) {}
        }), !1
    })
}), $(window).load(function() {
	

	
	
	
    var a = parseInt($.cookie("visit") || 0) + 1;
    $.cookie("visit", a), 1 == a || $("#head-block div.infopanel").css("display", "none"), $cartval = $(".bx-basket-block a .cart").html(), $cartval >= 10 && $(".bx-basket-block a .cart").css("padding", "10px 8px 5px 1px"), $(".fancybox-media").fancybox({
        fitToView: !0,
        openEffect: "none",
        closeEffect: "none",
        helpers: {
            media: {}
        }
    }), $("#slider").slick({
        arrows: !0,
        dots: !0,
        dotsClass: "dots",
        autoplay: !0,
        autoplaySpeed: 6e3,
        mobileFirst: !0,
        arrows: !1,
        respondTo: "slider",
        adaptiveHeight: !0
    }), $(".mob-slider").slick({
        autoplay: !0,
        autoplaySpeed: 4e3,
        arrows: !1
    }), $("ul.top-menu").superfish({
        popUpSelector: "ul,.sf-mega",
        autoArrows: !0
    })
}), $(document).ready(function() {
    var a = "";
    $(".scroll").on("click touchstart", function(b) {
        if (a != this.hash) {
            b.preventDefault();
            var c = 0;
            c = $(this.hash).offset().top > $(document).height() - $(window).height() ? $(document).height() - $(window).height() : $(this.hash).offset().top, $("html,body").animate({
                scrollTop: c
            }, 1e3, "swing"), a = this.hash
        }
    }), $conth = $("#content").height(), $toph = $("#logo-menu-user").height(), $bxP = $("#bx-panel").css("height"), $("#head-block .top-menu li ul.list-unstyled").css("top", $toph - 35), console.info($toph), $(".infopanel p i").click(function() {
        $(".infopanel").css("display", "none")
    }), $(".search-btn").click(function() {
        $(".search-inpt").toggleClass("showsearch animated"), $(".search-inpt").focus()
    }), $('b:contains("CloudPayment")').css({
        fontSize: "33px",
        fontFamily: "CoreRhino65Bold",
        color: "#699feb"
    }), (new WOW).init(), $("#rec-slider").slick({
        slidesToShow: 4,
        slidesToScroll: 2,
        arrows: !0,
        prevArrow: '<button type="button" class="arrow-prev visible-lg visible-md"><i class="fa fa-angle-left"></button>',
        nextArrow: '<button type="button" class="arrow-next visible-lg visible-md"><i class="fa fa-angle-right"></button>'
    }), $('#moms-about-slider li a').magnificPopup({
        type: 'inline',
        removalDelay: 300,
		preloader: true,
        mainClass: 'mfp-with-zoom',
		  gallery: {
    enabled: true 
  },
		
		zoom: {
    enabled: true, 

    duration: 3000,
    easing: 'ease-in-out', 
    opener: function(openerElement) {
        return openerElement.is('a') ? openerElement : openerElement.find('a');
    }
  }
		
		
		
		
		
    }), $("#moms-about-slider").slick({
        infinite: !0,
        slidesToShow: 6,
        slidesToScroll: 2,
        arrows: !0,
        prevArrow: '<button type="button" class="arrow-prev visible-lg visible-md"><i class="fa fa-angle-left"></button>',
        nextArrow: '<button type="button" class="arrow-next visible-lg visible-md"><i class="fa fa-angle-right"></button>'
    }), $("#press-about-slider").slick({
        infinite: !0,
        slidesToShow: 6,
        slidesToScroll: 2,
        autoplay: !0,
        arrows: !0,
        prevArrow: '<button type="button" class="arrow-prev visible-lg visible-md"><i class="fa fa-angle-left"></button>',
        nextArrow: '<button type="button" class="arrow-next visible-lg visible-md"><i class="fa fa-angle-right"></button>'
    }), $(function() {
        $(window).scroll(function() {
            $(this).scrollTop() > 1080 ? $("#toTop").fadeIn() : $("#toTop").fadeOut()
        }), $("#toTop").click(function() {
            $("body,html").animate({
                scrollTop: 0
            }, 800)
        })
    }), $(".favorite_check").click(function(a) {
        a.preventDefault();
        var b = $(this);
        $.get("/personal/favoriteajax.php", {
            elid: b.data("id")
        }, function(a) {
            switch (a) {
                case "done":
                    var c = "Товар успешно добавлен в избранное";
                    b.addClass("checked");
                    break;
                case "deleted":
                    var c = "Товар успешно удален из избранного";
                    b.removeClass("checked");
                    break;
                case "fail":
                    var c = "Вы не авторизованы, либо Ваш запрос некорректен";
                    b.removeClass("checked")
            }
            $("#favorit_label").html(c).fadeIn().delay(5e3).fadeOut()
        })
    })
});