//                   PLEASE  NOTE 
// 
//to edit this file, you must run Gulp. Because it will compresses the code into new file in compressed folder called script.js. And this file (compressed/script.js) is linked the site. If unable to use gulp or anyother task runner. You can do it manually from online "script minified tools".
// 
//
jQuery(document).ready(function(){

  // ++++++++++++++++++++ 
  // Responsive Menu
  // ++++++++++++++++++++ 
  jQuery('.menu-button-wrapper').click(function(){
    jQuery('.responsive-menu').toggleClass('show');
    jQuery(this).toggleClass('show');
  });

  // ++++++++++++++++++++
  // Header fixed, reduce size
  // ++++++++++++++++++++
  jQuery(window).scroll(function(){
    var scroll = jQuery(window).scrollTop();

    if (scroll >= 41){
        jQuery('body').addClass('on-scrolled');
    } else {
      jQuery('body').removeClass('on-scrolled');
    }
  });

  // ++++++++++++++++++++
  // Video 
  // ++++++++++++++++++++
  jQuery('.video-button').each(function(){
    jQuery(this).click(function(){
      jQuery(this).parent().parent().parent().addClass('show-inner-video');
      var thisVideoIframe = jQuery(this).parent().parent().parent().find('.video-wrapper iframe#video-to-play');
      thisVideoIframe.attr("src", thisVideoIframe.attr("src").replace("autoplay=0", "autoplay=1"));
      jQuery(this).parent().parent().parent().parent().addClass('hide');
    });
  });

  jQuery('.hero-video-button').each(function(){
    jQuery(this).click(function(){
      jQuery(this).parent().parent().parent().addClass('hide');
      var thisVideoIframe = jQuery(this).parent().parent().parent().find('.video-wrapper iframe#player');
      // thisVideoIframe.attr("src", jQuery(thisVideoIframe).attr("src").replace("autoplay=0", "autoplay=1"));
    });
  });

  // ++++++++++++++++++++
  // Video play on scroll
  // ++++++++++++++++++++
  var clientHeight = jQuery(window).innerHeight();

  jQuery('.hero-video').each(function(){
      var thisEle = jQuery(this);
      var topPos = thisEle.offset().top;
      var bottomPos = topPos + thisEle.height() + thisEle.height();
      var thisVideoIframe = jQuery('.video-wrapper iframe#player', this);
      jQuery(window).scroll(function(){
        var scrolledHeight = jQuery(window).scrollTop() + clientHeight/1.2;
        if((scrolledHeight > topPos)&&(scrolledHeight < bottomPos)){
          // thisVideoIframe.attr("src", jQuery(thisVideoIframe).attr("src").replace("autoplay=0", "autoplay=1"));
        } else {
          // thisEle.find(thisVideoIframe).attr("src", thisVideoIframe.attr("src").replace("autoplay=1", "autoplay=0"));
        }
      });
  });
  

  // ++++++++++++++++++++
  // On click Don't miss newsletter button go to form
  // ++++++++++++++++++++

  jQuery('.dontmiss').click(function(){
    jQuery('html,body').animate({
      scrollTop: jQuery(".subscription").offset().top
    }, 1000);
    // jQuery(this).hide();
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
    jQuery(flname).addClass('error-input');
    totalError += 1;
  }
  jQuery(flname).change(function(){
    if (flname.value == null || flname.value ==""){
        flname_error = "<li>Name required</li>";
        jQuery(flname).addClass('error-input');
        totalError += 1;
    } else{
      jQuery(flname).removeClass('error-input');
      flname_error = " ";
    }
  });

  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+jQuery/;
  if (email.value == null || email.value ==""){
    email_error = "<li>Email required</li>";
    jQuery(email).addClass('error-input');
    totalError += 1;
  } else if (!email.value.match(mailformat)){
    email_error = "<li>Email invalid</li>";
    jQuery(email).addClass('error-input');
    totalError += 1; 
  }
  jQuery(email).change(function(){
    if (email.value == null || email.value ==""){
      email_error = "<li>Email required</li>";
      jQuery(email).addClass('error-input');
      totalError += 1;
    } else if(!email.value.match(mailformat)){
      email_error = "<li>Email invalid</li>";
      jQuery(email).addClass('error-input');
      totalError += 1; 
    } else{
      jQuery(email).removeClass('error-input');
    }
  });

  if (message.value == null || message.value ==""){
    message_error = "<li>Message required</li>";
    jQuery(message).addClass('error-input');
    totalError += 1;
  }
  jQuery(message).change(function(){
    if (message.value == null || message.value ==""){
        message_error = "<li>Message required</li>";
        jQuery(message).addClass('error-input');
        totalError += 1;
    } else{
      jQuery(message).removeClass('error-input');
      message_error = " ";
    }
  });

  var validation_report = document.getElementById('form-validation');
  // var error_heading = "<li><b class='error-text'>Please check following errors:</b></li>";
  validation_report.innerHTML = '';

  var success_message = "<li>Thank you for your inquiry <b>" + flname.value + "</b>. FLIGHTPATH staff member will contact you shortly.</li>";

  if (totalError > 0){
    jQuery('.form-validation').show();
    jQuery('.form-validation').addClass('error-input');
    jQuery('.form-validation').removeClass('success');
    // jQuery('html, body').animate({
    //   scrollTop: jQuery('.form-validation').offset().top - 66
    // }, 1000);
    
    validation_report.innerHTML += flname_error +  email_error + message_error;
    return false;
  }
    
  jQuery.ajax({
    // var formData = jQuery('form').serialize();
    type: "post",
    url: formUrl,
    data: jQuery('form').serialize(),
    success: function(){
      jQuery('.form-validation').show();
      validation_report.innerHTML += success_message;
      jQuery('.form-validation').removeClass('error-input');
      jQuery('.form-validation').addClass('success');
    }
  });
  return false;
  }//end of contactForm
  