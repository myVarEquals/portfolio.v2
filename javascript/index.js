$(document).ready(function(){

  $(window).scroll(function(){

    var scrolling = $(this).scrollTop()
    console.log(scrolling)
    $('.cliff-front-left, .cliff-front-right').css({
     'transform' : 'translate(0px, '+ scrolling * 0.5 +'px)'
    });
    $('.head-header').css({
     'transform' : 'translate(0px, '+ scrolling * 0.65 +'px)'
    });

    if(scrolling > $('.skills-list').offset().top - 500) {
      $('.skills-list .list').each(function(i){

        setTimeout(function(){
          $('.skills-list .list').eq(i).addClass('skill-appear');
        }, 150 * (i+1));
      })
    }



  });

  $(window).scroll(function(){
    var scrolling = $(this).scrollTop();

    if(scrolling > $('.gallery-box').offset().top - ($(window).height() / 1.6)) {
      console.log($('.gallery-box').offset().top);
      $('.gallery-box .gallery-item:nth-child(-n+3)').each(function(){

        $('.gallery-box .gallery-item:nth-child(-n+3)').addClass('appear-top');

      });
      $('.gallery-box .gallery-item:nth-child(n+4)').each(function(){

        $('.gallery-box .gallery-item:nth-child(n+4)').addClass('appear-bottom');

      });
    }
  });

});
