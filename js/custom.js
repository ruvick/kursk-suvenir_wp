jQuery(document).ready(function ($) {
 // $(".sidebar-catalog .children").slideUp();
  $(".ul-clean .cat-item > a").click(function (e) {
    $(".ul-clean .cat-item > a").removeClass("active");
    if ($(this).siblings(".children").length != 0)
    {
      e.preventDefault();  
      $(this).toggleClass('active');
      $(this).siblings(".children").slideToggle();
    }
  });

  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    autoplay: 4000
  });

  $('.reviews-slider').slick({
    slidesToShow: 1,
    dots: true,
    arrows: true,
    prevArrow: '<div class="slider-arrow slider-arrow-prev"></div>',
    nextArrow: '<div class="slider-arrow slider-arrow-next"></div>',

  });
  $('.main-bnr__slider').slick({
    slidesToShow: 1,
    autoplay: 3000
  });
  $('.mobile-catalog__btn').click(function() {
    // $(this).next().slideToggle();
    $('.mob-catalog').css('bottom', '0');
  });
  if($(window).width() > 1200) {
   // $('.sidebar-catalog').scrollToFixed();
  }

  var page_height = $('#page').height();
  var foot_height = $('.footer').height();
  console.log(foot_height);
  // $('.sidebar-catalog').height(content_height + foot_height);
  
  var inputmask_96e76a5f = {"mask":"+7(999)999-99-99"};
  jQuery("input[type=tel]").inputmask(inputmask_96e76a5f);

  $(".popup-content").click(function(e) {
    e.preventDefault();
    var formid = $(this).data('formid');
    var mailmsg = $(this).data('mailmsg');
    $("#order-modal .uniSendBtn").attr({'data-formid': formid, 'data-mailmsg': mailmsg});
    $("#order-modal").arcticmodal();
  });

// Отправщик в Шапке
    jQuery(".uniSendBtn").click(function(){ 
      var formid = jQuery(this).data("formid");
      var message = jQuery(this).data("mailmsg");
      var phone = $(this).siblings('input[type=tel]').val();
      var name = $(this).siblings('input[name=name]').val();
      
      if ((phone == "")||(phone.indexOf("_")>0)) {
        $(this).siblings('input[type=tel]').css("background-color","#ff91a4")
      } else {
        var  jqXHR = jQuery.post(
          allAjax.ajaxurl,
          {
            action: 'universal_send',    
            nonce: allAjax.nonce,
            formid: formid,
            msg: message,
            name: name,
            tel: phone
          }
          
        );
        
        
        jqXHR.done(function (responce) {
          $('#order-modal').arcticmodal("close");
          jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
          jQuery('#messgeModal').arcticmodal();
          
        });
        
        jqXHR.fail(function (responce) {
          jQuery('#messgeModal #lineIcon').html('');
          jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
          jQuery('#messgeModal').arcticmodal();
        });
      }
    });

// Отправщик в Подвале
    //     jQuery(".ovBtn").click(function(){ 
    //   var formname = jQuery(this).data("phone-modal");
    //   var phone = $(this).siblings('input[type=tel]').val();
      
    //   if ((phone == "")||(phone.indexOf("_")>0)) {
    //     $(this).siblings('input[type=tel]').css("background-color","#ff91a4")
    //   } else {
    //     var  jqXHR = jQuery.post(
    //       allAjax.ajaxurl,
    //       {
    //         action: 'universal_send',    
    //         nonce: allAjax.nonce,
    //         tel: phone
    //       }
          
    //     );
        
        
    //     jqXHR.done(function (responce) {
    //       $('#phone-modal').arcticmodal("close");
    //       jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
    //       jQuery('#messgeModal').arcticmodal();
          
    //     });
        
    //     jqXHR.fail(function (responce) {
    //       jQuery('#messgeModal #lineIcon').html('');
    //       jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
    //       jQuery('#messgeModal').arcticmodal();
    //     });
    //   }
    // });

        
  lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true,
      'albumLabel': ''
    });

  $('.hamburger').click(function() {
    $('.mob-menu').css('bottom', '0');
  });
  $('.close-menu').click(function() {
    $(this).parent().css('bottom', '120%');
  });
  $('.prodcuts-sort select').niceSelect();


  jQuery(".dialog-cb-button__decstop a").click(function(){
    
    headerwin = jQuery(this).data("headerwin"); 
    btn = jQuery(this).data('btn');
    
    jQuery('#phone-modal').arcticmodal();
  });
  // $(".catalog-link").click(function() {
  //   $(".sidebar-catalog").toggleClass('active');
  // });
});
