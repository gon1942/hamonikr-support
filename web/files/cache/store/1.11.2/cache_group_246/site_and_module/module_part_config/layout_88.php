<?php
if(!defined('__XE__')) { exit(); }
return 'O:8:"stdClass":1:{s:13:"header_script";s:2311:"<script src="https://lab.alexcican.com/set_cookies/cookie.js" type="text/javascript" ></script>
<script>
jQuery(document).ready(function(){
  var uanaVigatorOs = navigator.userAgent;
  console.log(uanaVigatorOs);

  // 로그인 체크 - css 
  if($.cookie("xe_logged") != undefined) { 
    jQuery(".can_see_at_login").css("display", "inline-block");
    jQuery(".can_see_at_not_login").css("display", "none"); 
  } 

  // 앱체크
  var url = new URL(location.href);
  if(url.searchParams.get("support") != null) {
    jQuery.cookie(\'sval\', url.searchParams.get("support"), { expires: 2147483647, path: \'/\'});
    jQuery.cookie(\'spck\', url.searchParams.get("spck"), { expires: 2147483647, path: \'/\'});
  }

    jQuery(\'.header.main .logo-itema\').attr(\'onclick\', "location.href=\'/?support=HamoniKR-ME_Support\'");

  // 앱 웹 접속에 따른 css 변경
  if(jQuery.cookie(\'sval\') == \'HamoniKR-ME_Support\'){
    // 앱
    // 링크변경
    var applinkurl = "location.href=\'/?support=HamoniKR-ME_Support\'";
    var idx_bt = jQuery(\'.btsbtn.default_btn\');

    jQuery(\'#hkrme-logo\').attr(\'onclick\', applinkurl);
    jQuery(\'.header.main .logo-itema\').attr(\'onclick\', applinkurl);

    for(var i=0; i < idx_bt.length ;++i){
      if(idx_bt.eq(i).attr(\'onclick\') == "location.href=\'/\'") idx_bt.eq(i).attr(\'onclick\', applinkurl);
    }

    // css
    jQuery(\'.can_see_web\').css(\'display\', \'none\');
    jQuery(\'#content_community_btn\').css(\'display\', \'none\');
  }else{
    //웹
    jQuery(\'#license_div\').css(\'display\', \'block\');
    jQuery(\'#noapp\').css(\'display\', \'block\');
  }


  // 모든페이지
//  jQuery(\'.header_wrap\').remove();
  jQuery(\'footer\').remove();

  // 라이선스 구매
  jQuery(\'.list_header\').remove();
  jQuery(\'#itemlist .small.light.nuribtn\').remove();
  jQuery(\'#itemlist .search\').remove();
  
  // 라이선스 구매 - 결제버튼
  jQuery(\'#itemlist .btsbtn.default_btn\').text(\'결제\').attr(\'onclick\', \'\');


  function add_item(callback) {
    setTimeout(callback, 800, addItemsToCart(164));
  }

  jQuery(\'#itemlist .btsbtn.default_btn\').on(\'click\', function(){
    add_item(function(){window.location.href=\'cart\';});
  });


  // 장바구니
//  jQuery(\'#cartitems .menuTab\').remove();
});
</script>";}';