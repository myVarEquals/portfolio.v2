$(document).ready(function(){

  $("a").on('click', function(event) {

      if (this.hash !== "") {

        event.preventDefault();
        var hash = this.hash;

        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
          window.location.hash = hash;
        });
      }

    });

  $(window).scroll(function(){

    var scrolling = $(this).scrollTop()
    // Parallax Header
    // $('.cliff-front-left, .cliff-front-right').css({
    //  'transform' : 'translate(0px, '+ scrolling * 0.5 +'px)'
    // });
    $('.header-wrapper').css({
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

    if(scrolling > $('.gallery-box').offset().top - ($(window).height() / 1.2)) {
      console.log($(window).height());
      $('.gallery-box .gallery-item:nth-child(-n+3)').each(function(){

        $('.gallery-box .gallery-item:nth-child(-n+3)').addClass('appear-top');

      });
      $('.gallery-box .gallery-item:nth-child(n+4)').each(function(){

        $('.gallery-box .gallery-item:nth-child(n+4)').addClass('appear-bottom');

      });
    }
  });


});
