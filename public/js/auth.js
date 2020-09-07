$(function() {
  $('.slide').click(function() {
    var $texts = $(this).find('.item_box');
    if($texts.hasClass('open')) {
      $texts.removeClass('open')
      $texts.slideUp();
    } else {
      $texts.addClass('open');
      $texts.slideDown();
    }
  });

  $( '.mail-input' ).keyup(function() {
    if( $(this).val() ) {
       $('.mail_string').addClass('not-empty');
    } else {
       $(this).removeClass('not-empty');
    }
  });

  $( '.password-input').keyup(function() {
    if( $(this).val() ) {
       $('.password_string').addClass('not-empty');
    } else {
       $(this).removeClass('not-empty');
    }
  });

  
})