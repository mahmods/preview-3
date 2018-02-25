const nav = $('#navbar-example');
const navTop = nav.height();

function stickyNavigation() {

  if (window.scrollY >= navTop) {
    // nav offsetHeight = height of nav
    document.body.style.paddingTop = navTop + 'px';
    nav.addClass('fixed-nav');
  } else {
    document.body.style.paddingTop = 0;
    nav.removeClass('fixed-nav');
  }
}

window.addEventListener('scroll', stickyNavigation);

$(document).ready(function () {
    $(".dropdown").each(function() {
        var self = this;
        $(this).siblings("a").mouseenter(function() {
            $(self).show();
            $(self).addClass("dropdown-toggled");
        });
        $(this).siblings("a").mouseleave(function() {
          $(self).removeClass("dropdown-toggled");
          $(self).hide();
        });
    });
    var wow = new WOW().init();

    $('.header-slider').slick({
        slidesToShow: 1,
        loop: true,
        dots: true,
        arrows: false,
        responsive: [
            {
              breakpoint: 768,
              settings: {
                
              }
            },
          ]
    });
    $('.blog-slider').slick({
        slidesToShow: 3,
        arrows: false,
        responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1
              }
            }
          ]
    });
    $(window).on("click", function(e) {
            if ($("#main-navbar").hasClass('on')) {
                $("#main-navbar").toggleClass('on');
                $("#main-navbar").toggleClass('off');
        }
    });
    $(".navbar-toggler").on("click", function(e) {
        event.stopPropagation();
        if ($("#main-navbar").hasClass('on') || $("#main-navbar").hasClass('off')) {
            $("#main-navbar").toggleClass('on');
            $("#main-navbar").toggleClass('off');
          }
          else {
            $("#main-navbar").addClass('on');
          }
    });
});