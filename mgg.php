<?php

/*
Plugin Name: Mã Giảm Giá
Description: Tạo mã giảm giá hoặc ưu đãi dễ dàng, linh hoạt với việc linh hoạt thời gian hết hạn
Author: nguyenvanhieuvn
Author URI: https://nguyenvanhieu.vn
Version: 1.0.0
Text Domain: ma-giam-gia
License: GPLv2 or later
*/

function create_shortcode_coupon($args){
	ob_start(); ?>
	<div class="store-offer-item shadow-box row">
      <div class="store-thumb-link">
          <div class="offer-image">
              <a href=""><img src="<?php echo $args['logo']; ?>" alt="<?php echo $args['title']; ?>" title="<?php echo $args['title']; ?>"></a>
          </div>
      </div>
      <div class="latest-coupon">
          <p class="coupon-title"><a href="<?php echo $args['url']; ?>" target="_blank"><?php echo $args['title']; ?></a></p>
          <div class="coupon-des">
              <?php echo $args['content']; ?>
          </div>
      </div>
      <div class="coupon-detail coupon-button-type">
        <?php if($args['code'] == ""){ ?>
          <a target="_blank" href="<?php echo $args['url']; ?>" class="coupon-deal coupon-button">Xem ngay</a>
        <?php } else {?>
          <a href="#"  onclick="s=prompt('Copy mã bên dưới để sử dụng. Sau khi copy, hệ thống sẽ chuyển bạn đến trang khuyến mãi dùng được mã này','LTKK'); window.open('<?php echo $args['url']; ?>');return false;" class="coupon-button coupon-code" data-aff-url="<?php echo $args['url']; ?>">
            <span class="code-text"><?php echo $args['code']; ?></span>
            <span class="get-code">Lấy mã</span>
          </a>
        <?php } ?>
          <div class="expire-date">Hạn sử dụng: <span class="expire-date-value"><?php echo $args['expire']; ?></span><span title="Ưu đãi đặc biệt" class="coupon-save"><i class="glyphicon glyphicon-star"></i></span></div>
      </div>
  	</div>
  	<!-- Nếu lỗi giao diện thì bỏ comment dòng dưới-->
  	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
	<style>
	  .store-offer-item a{text-decoration:none;color:#337ab7}.store-offer-item a:hover{text-decoration:none;color:#fe495d}@media only screen and (min-width:1000px){.store-offer-item{padding:15px;margin-bottom:15px;display:block;border:1px solid #e8f5fa;margin-left:0;margin-right:0;max-width:700px}}.store-offer-item:after{content:".";display:block;height:0;clear:both;visibility:hidden}@media only screen and (min-width:1000px){.store-offer-item .store-thumb-link{float:left;margin-right:10px}}.store-offer-item .store-thumb-link .offer-image{max-width:126px;line-height:0;margin-bottom:5px;text-align:center}.offer-image a{-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px;display:block}.store-offer-item .offer-image a:hover{border-color:#fe495d}.store-offer-item .offer-image img{width:80%}.store-offer-item .offer-text{display:block;width:100%;height:100px;font-size:42px;line-height:36px;margin:10px 0 0 0;display:table-cell;vertical-align:middle;text-align:center;font-family:'Passion One',cursive}.store-offer-item .store-thumb-link .store-name a{display:inline-block;line-height:1;font-size:13px;color:#1c9ab3;text-align:center;width:100%}.store-offer-item .store-thumb-link .store-name a:hover{color:#fe495d}.store-offer-item .store-thumb-link .store-name a span{overflow:hidden;text-overflow:ellipsis;width:85%;display:block;float:left;white-space:nowrap}.store-offer-item .des-more i,.store-offer-item .store-thumb-link .store-name a i{font-size:9px}.store-offer-item .expire-date-value{font-weight:700;color:#000}@media only screen and (min-width:1000px){.store-offer-item .latest-coupon{max-width:300px;margin-right:20px;margin-right:10px;float:left;width:100%}}.store-offer-item .latest-coupon .coupon-title{font-size:16px;margin-bottom:5px;font-weight:500;margin-top:-2px;line-height:1.5}.store-offer-item .coupon-title a{font-weight:600}.store-offer-item .latest-coupon .coupon-des{font-size:13px;line-height:1.7;position:relative}@media only screen and (min-width:1000px){.store-offer-item .coupon-detail{float:right;margin-top:25px}}.store-offer-item .coupon-button-type .coupon-code,.store-offer-item .coupon-button-type .coupon-deal,.store-offer-item .coupon-button-type .coupon-print{line-height:1;padding:14px 38px;background:#188a16;color:#fff;font-size:16px;font-weight:600;display:inline-block;letter-spacing:1px;text-transform:uppercase;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;margin-bottom:2px;min-width:195px;text-align:center}.store-offer-item .coupon-button-type .coupon-code{color:#444;background:linear-gradient(315deg,rgba(0,0,0,.06) 10%,rgba(0,0,0,0) 15%,rgba(0,0,0,0) 35%,rgba(0,0,0,.06) 40%,rgba(0,0,0,.06) 60%,rgba(0,0,0,0) 65%,rgba(0,0,0,0) 85%,rgba(0,0,0,.06) 90%) repeat scroll 0 0/6px 6px rgba(0,0,0,0);text-align:center;padding:10px 12px;font-size:20px;border:2px solid #ddd;position:relative}.store-offer-item .coupon-button-type .coupon-code .code-text{text-transform:uppercase}.store-offer-item .coupon-button-type .coupon-code .get-code{position:absolute;left:-2px;top:-2px;background:#188a16;color:#fff;font-size:16px;padding:14px 15px 14px 24px;border-top-left-radius:2px;border-bottom-left-radius:2px;transition:all .5s ease}.store-offer-item .coupon-button-type .coupon-code .get-code:after{content:"";display:block;width:0;height:0;border-top:44px solid transparent;border-left:44px solid #188a16;position:absolute;right:-44px;top:0}.store-offer-item .coupon-button-type .coupon-code .get-code:hover{padding-right:5px;transition:all .5s ease}.store-offer-item .coupon-detail .expire-date{font-size:13px;display:block;margin-top:5px;margin-bottom:-2px;color:#888}.store-offer-item .coupon-save{float:right;font-size:15px;margin-right:-4px;margin-top:-2px;color:#999}.store-offer-item .glyphicon-star{color:red}@media only screen and (max-width:1000px){.store-thumb-link{float:none}.offer-image{margin:0 auto}.coupon-des{margin:10px}.latest-coupon{padding-left:15px;padding-right:15px;margin-top:20px;margin-bottom:20px}h2{text-align:center}.store-offer-item{border-bottom:1px dotted #444;padding:20px 0;margin-left:0;margin-right:0}.coupon-save{display:none}}
	</style>
	<script>
		function randomDate(days) {
	      let today = new Date();
	      today.setDate(today.getDate()+days);
	      let dd = today.getDate(); 
	      let mm = today.getMonth() + 1; 
	      let yyyy = today.getFullYear(); 
	      if (dd < 10) { 
	          dd = '0' + dd; 
	      } 
	      if (mm < 10) { 
	          mm = '0' + mm; 
	      } 
	      return dd + '/' + mm + '/' + yyyy; 
	    }
	for(let x of document.getElementsByClassName("code-text")){
          let code = x.innerText
          code = code.substr(code.length - 7);
          if (code.length < 7) code = Math.random().toString(36).substr(2, 7 - code.length).toUpperCase() + code;
          x.innerText = code;
        }
 	// Hide Google Adsense
	for(let x of document.getElementsByClassName("td-adspot-title")){
	  x.style.display = 'none';
	}
	for(let x of document.querySelectorAll("div.td-post-content .adsbygoogle")){
	  x.style.display = 'none';
	}
        for(let x of document.getElementsByClassName("expire-date-value")){
          if (/^[0-9]+$/.test(x.innerText)) {
            let days = parseInt(x.innerText);
            x.innerText = randomDate(days);
          }
        }
	</script>
	<?php
	return ob_get_clean();
}
add_shortcode('sc_coupon', 'create_shortcode_coupon');
