$(document).ready(function () {
    $('.dropdown-submenu a.test').on("click", function (e) {
        if ($(this).next('ul').css('display') == 'block') {
            $(this).next('ul').css('display', 'none');
        } else {
            $('.dropdown-submenu a').next('ul').css('display', 'none');
            $(this).next('ul').css('display', 'block');
        }
        e.stopPropagation();
        e.preventDefault();
    });
    document.getElementById('banner-video').play();
});

$(function () {
    var header = $('#header');
    var topBanner = $('.top-banner')
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            header.addClass('header-transition');
        } else {
            header.removeClass('header-transition');
        }
    });
})

$('.our-clients-slider').owlCarousel({
    loop: false,
    margin: 0,
    nav: false,
    dots: true,
    items: 1,
})
$(document).ready(function () {
    new WOW().init();
})


$(function () {
    var inputs = $('.input');
    var paras = $('.description-flex-container').find('.container-structure');
    inputs.click(function () {
        var t = $(this),
            ind = t.index(),
            matchedPara = paras.eq(ind);

        t.add(matchedPara).addClass('active');
        inputs.not(t).add(paras.not(matchedPara)).removeClass('active');
    });
});

(function () {
    var words = [
        'Lorem',
        'Lorem Ipsum'
    ], i = 0;
    setInterval(function () {
        $('#changingword').fadeOut(function () {
            $(this).html(words[i = (i + 1) % words.length]).fadeIn();
        });
    }, 4000);

})();
$('.technology-nav li').bind('click',function (e) {
    var curId = $(e.currentTarget).attr('id');
    var curContainer = curId+'-container';
    $('.technology-nav li').removeClass('active-tech-nav');
    $('#'+curId).addClass('active-tech-nav');
    $('.tech-nav-container').addClass('hide-nav-cntr');
    $('#'+curContainer).removeClass('hide-nav-cntr');
})
$(".js-modal-btn").modalVideo();
