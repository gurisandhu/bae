//                   PLEASE  NOTE 
// 
//to edit this file, you must run Gulp. Because it will compresses the code into new file in compressed folder called script.js. And this file (compressed/script.js) is linked the site. If unable to use gulp or anyother task runner. You can do it manually from online "script minified tools".
// 
//
$(document).ready(function(){

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
      $(this).parent().parent().parent().addClass('show-inner-video');
      var thisVideoIframe = $(this).parent().parent().parent().find('.video-wrapper iframe#video-to-play');
      thisVideoIframe.attr("src", thisVideoIframe.attr("src").replace("autoplay=0", "autoplay=1"));
      $(this).parent().parent().parent().parent().addClass('hide');
    });
  });

  $('.hero-video-button').each(function(){
    $(this).click(function(){
      $(this).parent().parent().parent().addClass('hide');
      var thisVideoIframe = $(this).parent().parent().parent().find('.video-wrapper iframe#player');
      // thisVideoIframe.attr("src", $(thisVideoIframe).attr("src").replace("autoplay=0", "autoplay=1"));
    });
  });

  // ++++++++++++++++++++
  // Video play on scroll
  // ++++++++++++++++++++
  var clientHeight = $(window).innerHeight();

  $('.hero-video').each(function(){
      var thisEle = $(this);
      var topPos = thisEle.offset().top;
      var bottomPos = topPos + thisEle.height() + thisEle.height();
      var thisVideoIframe = $('.video-wrapper iframe#player', this);
      $(window).scroll(function(){
        var scrolledHeight = $(window).scrollTop() + clientHeight/1.2;
        if((scrolledHeight > topPos)&&(scrolledHeight < bottomPos)){
          // thisVideoIframe.attr("src", $(thisVideoIframe).attr("src").replace("autoplay=0", "autoplay=1"));
        } else {
          // thisEle.find(thisVideoIframe).attr("src", thisVideoIframe.attr("src").replace("autoplay=1", "autoplay=0"));
        }
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

// form validation
  function validateForm(){
    //Variables
    var flname        = document.forms["contactForm"]["flname"];
    var email         = document.forms["contactForm"]["email"];
    var message       = document.forms["contactForm"]["message"];
    var receiverEmail = document.forms["contactForm"]["receiver-email"];
    var siteUrl       = document.forms["contactForm"]["siteurl"];
    var formUrl       = siteUrl.value + "/mailform.php";

    //Error Variables
    var flname_error = "";
    var email_error = "";
    var message_error = "";
    var totalError = 0;

  if (flname.value == null || flname.value ==""){
    flname_error = "<li>Name required</li>";
    $(flname).addClass('error-input');
    totalError += 1;
  }
  $(flname).change(function(){
    if (flname.value == null || flname.value ==""){
        flname_error = "<li>Name required</li>";
        $(flname).addClass('error-input');
        totalError += 1;
    } else{
      $(flname).removeClass('error-input');
      flname_error = " ";
    }
  });

  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (email.value == null || email.value ==""){
    email_error = "<li>Email required</li>";
    $(email).addClass('error-input');
    totalError += 1;
  } else if (!email.value.match(mailformat)){
    email_error = "<li>Email invalid</li>";
    $(email).addClass('error-input');
    totalError += 1; 
  }
  $(email).change(function(){
    if (email.value == null || email.value ==""){
      email_error = "<li>Email required</li>";
      $(email).addClass('error-input');
      totalError += 1;
    } else if(!email.value.match(mailformat)){
      email_error = "<li>Email invalid</li>";
      $(email).addClass('error-input');
      totalError += 1; 
    } else{
      $(email).removeClass('error-input');
    }
  });

  if (message.value == null || message.value ==""){
    message_error = "<li>Message required</li>";
    $(message).addClass('error-input');
    totalError += 1;
  }
  $(message).change(function(){
    if (message.value == null || message.value ==""){
        message_error = "<li>Message required</li>";
        $(message).addClass('error-input');
        totalError += 1;
    } else{
      $(message).removeClass('error-input');
      message_error = " ";
    }
  });

  var validation_report = document.getElementById('form-validation');
  // var error_heading = "<li><b class='error-text'>Please check following errors:</b></li>";
  validation_report.innerHTML = '';

  var success_message = "<li>Thank you for your inquiry <b>" + flname.value + "</b>. FLIGHTPATH staff member will contact you shortly.</li>";

  if (totalError > 0){
    $('.form-validation').show();
    $('.form-validation').addClass('error-input');
    $('.form-validation').removeClass('success');
    // $('html, body').animate({
    //   scrollTop: $('.form-validation').offset().top - 66
    // }, 1000);
    
    validation_report.innerHTML += flname_error +  email_error + message_error;
    return false;
  }
    
  $.ajax({
    // var formData = $('form').serialize();
    type: "post",
    url: formUrl,
    data: $('form').serialize(),
    success: function(){
      $('.form-validation').show();
      validation_report.innerHTML += success_message;
      $('.form-validation').removeClass('error-input');
      $('.form-validation').addClass('success');
    }
  });
  return false;
  }//end of contactForm