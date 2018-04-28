$(document).ready(function(){

  $(window).scroll(function(){

    var scrolling = $(this).scrollTop()

    $('.cliff-front-left, .cliff-front-right').css({
     'transform' : 'translate(0px, '+ scrolling * 0.5 +'px)'
    });
    $('.head-header').css({
     'transform' : 'translate(0px, '+ scrolling * 0.65 +'px)'
    });

    if(scrolling > $('.gallery-box').offset().top) {
      $('.gallery-box .gallery-item').each(function(){

        $('.gallery-box .gallery-item').addClass('appear');

      });
    }

  });

});
