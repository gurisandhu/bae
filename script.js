//                   PLEASE  NOTE 
// 
//to edit this file, you must run Gulp. Because it will compresses the code into new file in compressed folder called script.js. And this file (compressed/script.js) is linked the site. If unable to use gulp or anyother task runner. You can do it manually from online "script minified tools".
// 
//
$(document).ready(function(){

  // ++++++++++++++++++++
  // Banner
  // ++++++++++++++++++++ 
  var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 00,
        autoplay: 2400,
        loop: true
    });


  // ++++++++++++++++++++ 
  // Responsive Menu
  // ++++++++++++++++++++ 
  $('.menu-button-wrapper').click(function(){
    $(this).toggleClass('show');
    $('.responsive-menu').addClass('show');
  });

  // ++++++++++++++++++++
  // Header fixed, reduce size
  // ++++++++++++++++++++
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();

    if (scroll >= 41){
        $('body').addClass('on-scrolled');
    } else {
      $('body').removeClass('on-scrolled');
    }
  });

  // ++++++++++++++++++++
  // Video 
  // ++++++++++++++++++++
  $('.video-button').each(function(){
    $(this).click(function(){
      $(this).parent().parent().parent().find('.video-wrapper').addClass('show');
      var thisVideoIframe = $(this).parent().parent().parent().find('.video-wrapper iframe#video-to-play');
      thisVideoIframe.attr("src", $(thisVideoIframe).attr("src").replace("autoplay=0", "autoplay=1"));
    });
  });

  // ++++++++++++++++++++
  // On click Don't miss newsletter button go to form
  // ++++++++++++++++++++

  $('.dontmiss').click(function(){
    $('html,body').animate({
      scrollTop: $(".subscription").offset().top
    }, 1000);
    // $(this).hide();
  });

});//End of Document ready