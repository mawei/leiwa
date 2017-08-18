<!DOCTYPE html>
<!-- saved from url=(0043) -->
<html class="  ext-strict">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">

	<meta name="format-detection" content="telephone=no">
	<meta name="renderer" content="webkit">
	<title><?=$mytitle?></title>
	<link rel="stylesheet" href="<?=base_url();?>/static/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url();?>/static/css/init.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>/static/css/jquery.ad-gallery.css">
	<link rel="stylesheet" href="<?=base_url();?>/static/css/main.css">
	<script   src="https://code.jquery.com/jquery-1.12.4.js"   integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="   crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?=base_url();?>/static/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>/static/js/jquery.ad-gallery.js"></script>
	<script type="text/javascript" src="<?=base_url();?>/static/js/zzsc.js"></script>
	<script type="text/javascript" src="<?=base_url();?>/static/js/jquery.flexslider-min.js"></script>
	
</head>

<body style="background: #ebeaea;">
	<div class="head ny_head">
	<?php echo template('public','head')?>
		<!--head start-->
		<!--#include file="inc/head.htm" -->
		<!--head end-->
		<div class="head_b">
			造型产品
		</div>
	</div>
	<div class="about_tl">
		<p class="about_tl_t">
			PROFESSIONAL STYLING PRODUCTS
		</p>
		<div class="about_menu">
			<a href="<?=base_url()?>prolist/1/1" <?php if ($type == 1): ?>class="ahover""<?php endif; ?>>卷发棒</a>
			<a href="<?=base_url()?>prolist/2/1" <?php if ($type == 2): ?>class="ahover""<?php endif; ?>>电吹风</a>
			<a href="<?=base_url()?>prolist/3/1" <?php if ($type == 3): ?>class="ahover""<?php endif; ?>>理发器</a>
			<a href="<?=base_url()?>prolist/4/1" <?php if ($type == 4): ?>class="ahover""<?php endif; ?>>美容健康系列</a>
		</div>
	</div>
	<div class="pro3_one">
		<img src="<?=base_url();?>/images/<?=$product['big_image']?>">
		<!-- <div class="pro3_one_main">
			<div class="container clearfix">
				<div class="right pro3_one_main_rt">
					<p class="pro3_one_main1">换型 百变 随我便</p>
					<p class="eng pro3_one_main2">Everchanging </p>
					百变造型器
				</div>
			</div>
		</div> -->
	</div>
	<div class="pro3_two">
			<p class="pro3_two1"  style="padding-left:0px">
				<?=$product['style']?>
			</p>
			<p class="pro3_two2" style="padding-left:0px"  >
				<span style="padding-left:0px"><?=$product['name']?></span>
			</p>
			<p class="pro3_two3"  style="padding-left:0px">
				<span class="eg" style="padding-left:0px">
				<?=$product['info']?>
				</span>
			</p>
	</div>
	<div class="pro3_three" >
		<div id="gallery" class="ad-gallery">
			<div class="ad-image-wrapper">
				<div class="ad-image" style="width: 52vw; height: 30vw; top: 0px; left: 0px;">
				<!-- <img src="<?=base_url();?>/static/images/pro4_03.jpg" width="52vw" height="30vw"> -->
				</div>
				<div class="ad-next">
					<div class="ad-next-image" style="opacity: 0.7;"></div>
				</div>
				<div class="ad-prev">
					<div class="ad-prev-image" style="opacity: 0.7;"></div>
				</div>
			</div>
			<div class="ad-controls">
				<p class="ad-info">1 / 14</p>
				<div class="ad-slideshow-controls ad-slideshow-running"><span class="ad-slideshow-start">Start</span><span class="ad-slideshow-stop">Stop</span><span class="ad-slideshow-countdown">(1)</span></div>
			</div>
			<?php if ($product['info_video'] != ""): ?>
			<div class="ad-nav pro3_video pro3_main" src="<?=base_url();?>/video/<?=$product['info_video']?>">
				<img src="<?=base_url();?>/images/<?=$product['info_image']?>">
			</div>
			<?php endif; ?>
			<div class="ad-nav pro3_photo_list">
				<div class="ad-back" style="opacity: 0.6;"></div>
				<div class="ad-thumbs">
					<ul class="ad-thumb-list" style="width: 1148px;">
						<?php foreach($images as $k=>$v):?>
						<li>
							<a href="<?=base_url();?>/images/<?=$v['image']?>" class="ad-thumb<?=$k?> <?php if ($k == 0): ?>ad-active<?php endif; ?>">
							<img src="<?=base_url();?>/images/<?=str_replace(".", "_thumb.", $v['image'])?>" class="image<?=$k?>" style="opacity: <?php if ($k == 0): ?>1<?php endif; ?><?php if ($k != 0): ?>0.7<?php endif; ?>;">
							</a>
						</li>

						<?php endforeach;?>
<!-- 						<li>
							<a href="<?=base_url();?>/static/images/pro4_03.jpg" class="ad-thumb1">
							<img src="<?=base_url();?>/static/images/pro4_033.jpg" class="image1" style="opacity: 0.7;">
							</a>
						</li>
						<li>
							<a href="<?=base_url();?>/static/images/pro4_03.jpg" class="ad-thumb2">
							<img src="<?=base_url();?>/static/images/pro4_033.jpg" class="image2" style="opacity: 0.7;">
							</a>
						</li>
						
						<li>
							<a href="<?=base_url();?>/static/images/pro4_03.jpg" class="ad-thumb8">
<img src="<?=base_url();?>/static/images/pro4_033.jpg" class="image8" style="opacity: 0.7;">
</a>
						</li>
						<li>
							<a href="<?=base_url();?>/static/images/pro4_03.jpg" class="ad-thumb9">
<img src="<?=base_url();?>/static/images/pro4_033.jpg" class="image9" style="opacity: 0.7;">
</a>
						</li>

						<li>
							<a href="<?=base_url();?>/static/images/pro4_03.jpg" class="ad-thumb13">
							<img src="<?=base_url();?>/static/images/pro4_033.jpg" class="image13" style="opacity: 0.7;">
							</a>
						</li> -->
					</ul>
				</div>
				<div class="ad-forward" style="opacity: 0.6;"></div>
			</div>
		</div>
		<div class="sj_banner container">
			<div class="block_home_slider">
				<div id="home_slider" class="flexslider">

					<div class="flex-viewport" style="overflow: hidden; position: relative;">
						<ul class="slides" style="width: 800%; margin-left: 0px;">
							<li class="clone" style="width: 0px; float: left; display: block;">
								<a href="#">
								<img src="<?=base_url();?>/static/images/pro4_03.jpg">
								</a>
							</li>
							<li class="flex-active-slide" style="width: 0px; float: left; display: block;">
								<a href="#">
								<img src="<?=base_url();?>/static/images/pro4_03.jpg">
								</a>
							</li>
							<li style="width: 0px; float: left; display: block;">
								<a href="#">
								<img src="<?=base_url();?>/static/images/pro4_03.jpg">
								</a>
							</li>
							<li class="clone" style="width: 0px; float: left; display: block;">
								<a href="#">
								<img src="<?=base_url();?>/static/images/pro4_03.jpg">
								</a>
							</li>
						</ul>
					</div>
				</div>
				<script type="text/javascript">
					$(function () {
						$('#home_slider').flexslider({
							animation: 'slide',
							controlNav: true,
							directionNav: false,
							animationLoop: true,
							slideshow: true,
							pauseOnHover: true,
							useCSS: false
						});

					});
				</script>
			</div>
		</div>
	</div>
	<div class="pro3_four">
		<div class="container pro3_four_main">
			<div class="liandiang">
				<p class="pro3_four_tl">
					产品亮点：
				</p>
				<ul>
					<?php foreach($memos as $k=>$v):?>
					<li>
						■&nbsp;<?=$v?>
					</li>
					
					<?php endforeach;?>
				</ul>
			</div>
			<?php if ($product['teach_video'] != ''): ?>
			<div class="shipin">
				<p class="pro3_four_tl">
					视频教程：
				</p>
				<div class="shipin_main prodetail_img_main pro3_main" src="<?=base_url();?>video/<?=$product['teach_video']?>">
					<img src="<?=base_url();?>/images/<?=$product['teach_image']?>">
				</div>
				<p class="pro3_four_text">
					只要10分钟<br> 教你打造自己的时尚发型
				</p>
			</div>
			<?php endif; ?>
			<div class="mai">
				
				<div class="clearfix">
					
					<?php if ($product['tmall'] != ''): ?>
					<div class="mai_main left">
						<p class="pro3_four_tl">
						欢迎进入购买
						</p>
						<a href="<?=$product['tmall']?>" target="blank" >
						<img src="<?=base_url();?>/static/images/pro3_07.jpg">
						</a>
						<p>雷瓦天猫官方旗舰店</p>
						<a href="<?=$product['tmall']?>" target="blank" class="qijian_a">
						点击购买
						</a>
					</div>
					<?php endif; ?>
					<?php if ($product['qr_image'] != ''): ?>
					<div class="mai_main left">
						<p class="pro3_four_tl" style="color: white">  1</p>
						<img src="<?=base_url();?>/images/<?=$product['qr_image']?>">
						<p>
							手机扫一扫<br> 点击购买
						</p>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="index_fourfive_line clearfix">
			<p>
			您还可能会喜欢
			</p>
	</div>
	<div class="por3_five">
		
		<ul class="clearfix pro2_three_ul">
					<?php foreach($allproducts as $k=>$v):?>

			<li class="pro3_more">
				<a href="<?=base_url()?>prodetail/<?=$type?>/<?=$v['product_id']?>">
				<img src="<?=base_url()?>images/<?=$v['image']?>">
				<p class="pro2_three_ul1">
				<?=$v['style']?>
				</p>
				<p class="pro2_three_ul2">
				<?=$v['name']?>
				</p>
				<p class="pro2_three_ul3">
				<?=$v['info']?>
				</p>
				<p class="pro2_three_ul4">
				more &gt;
				</p>
				</a>
			</li>
			<?php endforeach;?>
		</ul>
	</div>
	    <div class="caitiao container">
        <img src="<?=base_url();?>/static/images/about1_46.png">
    </div>
	<?php echo template('public','footer')?>
	<!--footer start-->
	<!--#include file="inc/footer.htm" -->
	<!--footer end-->


	<div class="ad-preloads"><img src="<?=base_url();?>/static/images/pro4_03.jpg"></div>

	<div class="bg"></div>
    <div class="alert_main">
        <em class="cha"></em>
        <video src="" controls="controls" width="100%" height="" id="video">
        </video>
    </div>
</body>

<script type="text/javascript">
    $("#submit").click(function(){
        // self.location="<?=base_url()?>news/<?=$newstype;?>/<?=$v['years'];?>/" + $("#pageinput").val(); 
        self.location="<?=base_url()?>mystyle3/<?=$type?>/" + $("#pageinput").val(); 
    });
    var video = document.getElementById("video"); 

    $('.pro3_main').click(function () {
        $(".bg").show();
        var src = $(this).attr('src');
        $("#video").attr('src',src);
        $(".alert_main").show();
        video.play();
    });
    $('.cha').click(function () {
        $(".bg").hide();
        $(".alert_main").hide();
        video.pause();
    });
    $(document).ready(function(){
    	$(".ad-image").css("top","0");
    });
</script>
</html>