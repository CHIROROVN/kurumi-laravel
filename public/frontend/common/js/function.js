jQuery(function() {

//scroll-------------------------------------------------
  jQuery('a[href*=#]').click(function() {		
      var $target = jQuery(this.hash);
      $target = $target.length && $target || jQuery('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        jQuery((navigator.userAgent.indexOf("Opera") != -1) ? document.compatMode == 'BackCompat' ? 'body' : 'html' :'html,body').animate({scrollTop: targetOffset}, 1000);
       return false;
      }

  });
//menu-------------------------------------------------
  jQuery('.menusp').click(function(){
    jQuery('.menu').slideToggle('fast');
  });
//accordion-------------------------------------------------  
jQuery('.acrd-ctrl1').click(function(){
	if(jQuery(this).is('.now')){
      // ＋アイコンに変更
      jQuery(this).removeClass('now');
    }else{
      // −アイコンに変更
      jQuery(this).addClass('now');
    }
    // クリックしたリストの開閉
   jQuery('.acrd-pl1').slideToggle(300);
  });
  
jQuery('.acrd-ctrl2').click(function(){
	if(jQuery(this).is('.now')){
      // ＋アイコンに変更
      jQuery(this).removeClass('now');
    }else{
      // −アイコンに変更
      jQuery(this).addClass('now');
    }
    // クリックしたリストの開閉
   jQuery('.acrd-pl2').slideToggle(300);
  });
});


