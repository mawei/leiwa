<!DOCTYPE html>
<!-- saved from url=(0043) -->
<html class="  ext-strict">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">

	<meta name="format-detection" content="telephone=no">
	<title></title>
	<link rel="stylesheet" href="<?=base_url();?>/static/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url();?>/static/css/init.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>/static/css/jquery.ad-gallery.css">
	<link rel="stylesheet" href="<?=base_url();?>/static/css/main.css">
	<script type="text/javascript" src="<?=base_url();?>/static/js/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="<?=base_url();?>/static/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>/static/js/jquery.ad-gallery.js"></script>
	<script type="text/javascript" src="<?=base_url();?>/static/js/zzsc.js"></script>
	<script type="text/javascript" src="<?=base_url();?>/static/js/jquery.flexslider-min.js"></script>
</head>

<body style="background: #ebeaea;" class=" ext-webkit ext-chrome ext-mac">
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
			<a href="<?=base_url()?>prolist/1/1" <?php if ($type == 1): ?>class="ahover""<?php endif; ?>>01卷直发器</a>
			<a href="<?=base_url()?>prolist/2/1" <?php if ($type == 2): ?>class="ahover""<?php endif; ?>>02电吹风</a>
			<a href="<?=base_url()?>prolist/3/1" <?php if ($type == 3): ?>class="ahover""<?php endif; ?>>03理发器</a>
			<a href="<?=base_url()?>prolist/4/1" <?php if ($type == 4): ?>class="ahover""<?php endif; ?>>04美容健康系列</a>
		</div>
	</div>
	<div class="pro3_one">
		<img src="<?=base_url();?>/static/images/pro3_02.jpg">
		<div class="pro3_one_main">
			<div class="container clearfix">
				<div class="right pro3_one_main_rt">
					<p class="pro3_one_main1">换型 百变 随我便</p>
					<p class="eng pro3_one_main2">Everchanging </p>
					百变造型器
				</div>
			</div>
		</div>
	</div>
	<div class="pro3_two">
		<div class="container">
			<p class="pro3_two1 eng">
				<?=$product['style']?>
			</p>
			<p class="pro3_two2 ">
				<span class="eng"><?=$product['name']?></span>
			</p>
			<p class="pro3_two3">
				<?=$product['info']?>
			</p>
		</div>
	</div>
	<div class="pro3_three">
		<div id="gallery" class="ad-gallery">
			<div class="ad-image-wrapper">
				<div class="ad-image" style="width: 997px; height: 581px; top: 0px; left: 0px;"><img src="<?=base_url();?>/static/images/pro4_03.jpg" width="997" height="581"></div><img class="ad-loader" src="<?=base_url();?>/static/images/loader.gif"
				 style="display: none;">
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
			<div class="ad-nav">
				<div class="ad-back" style="opacity: 0.6;"></div>
				<div class="ad-thumbs">
					<ul class="ad-thumb-list" style="width: 1148px;">
						<li>
							<a href="<?=base_url();?>/static/images/pro4_03.jpg" class="ad-thumb0 ad-active">
							<img src="<?=base_url();?>/static/images/pro4_033.jpg" class="image0" style="opacity: 1;">
							</a>
						</li>
						<li>
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
							<a href="<?=base_url();?>/static/images/pro4_03.jpg" class="ad-thumb3">
							<img src="<?=base_url();?>/static/images/pro4_033.jpg" class="image3" style="opacity: 0.7;">
							</a>
						</li>
						<li>
							<a href="<?=base_url();?>/static/images/pro4_03.jpg" class="ad-thumb4">
							<img src="<?=base_url();?>/static/images/pro4_033.jpg" class="image4" style="opacity: 0.7;">
							</a>
						</li>
						<li>
							<a href="<?=base_url();?>/static/images/pro4_03.jpg" class="ad-thumb5">
							<img src="<?=base_url();?>/static/images/pro4_033.jpg" class="image5" style="opacity: 0.7;">
							</a>
						</li>
						<li>
							<a href="<?=base_url();?>/static/images/pro4_03.jpg" class="ad-thumb6">
							<img src="<?=base_url();?>/static/images/pro4_033.jpg" class="image6" style="opacity: 0.7;">
							</a>
						</li>
						<li>
							<a href="<?=base_url();?>/static/images/pro4_03.jpg" class="ad-thumb7">
							<img src="<?=base_url();?>/static/images/pro4_033.jpg" class="image7" style="opacity: 0.7;">
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
							<a href="<?=base_url();?>/static/images/pro4_03.jpg" class="ad-thumb10">
<img src="<?=base_url();?>/static/images/pro4_033.jpg" class="image10" style="opacity: 0.7;">
</a>
						</li>
						<li>
							<a href="<?=base_url();?>/static/images/pro4_03.jpg" class="ad-thumb11">
<img src="<?=base_url();?>/static/images/pro4_033.jpg" class="image11" style="opacity: 0.7;">
</a>
						</li>
						<li>
							<a href="<?=base_url();?>/static/images/pro4_03.jpg" class="ad-thumb12">
<img src="<?=base_url();?>/static/images/pro4_033.jpg" class="image12" style="opacity: 0.7;">
</a>
						</li>
						<li>
							<a href="<?=base_url();?>/static/images/pro4_03.jpg" class="ad-thumb13">
							<img src="<?=base_url();?>/static/images/pro4_033.jpg" class="image13" style="opacity: 0.7;">
							</a>
						</li>
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
			<div class="col-md-5 col-sm-12 col-xs-12 liandiang">
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
			<div class="col-md-3 col-sm-12 col-xs-12 shipin">
				<p class="pro3_four_tl">
					视频教程：
				</p>
				<div class="shipin_main">
					<img src="<?=base_url();?>/static/images/pro3_05.jpg">
				</div>
				<p class="pro3_four_text">
					只要10分钟<br> 教你打造自己的时尚发型
				</p>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12 mai">
				<p class="pro3_four_tl">
					欢迎进入购买
				</p>
				<div class="clearfix">
					<div class="mai_main left">
						<img src="<?=base_url();?>/static/images/pro3_07.jpg">
						<p>雷瓦天猫官方旗舰店</p>
						<a href="#" class="qijian_a">
了解更多
</a>
					</div>
					<div class="mai_main left">
						<img src="<?=base_url();?>/static/images/pro305.jpg">
						<p>
							手机扫一扫<br> 了解更多详细信息
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="por3_five">
		<div class="index_four_line">
			<span>
您还可能会喜欢
</span>
		</div>
		<ul class="clearfix pro2_three_ul container">
			<li class="col-md-4 col-sm-4 col-xs-12">
				<a href="#">
<img src="<?=base_url();?>/static/images/pro_list_03.jpg">
<p class="pro2_three_ul1">
RC-7506
</p>
<p class="pro2_three_ul2">
Everchanging 百变造型器
</p>
<p class="pro2_three_ul3">
烫卷 / 拉直 / 吹风 多功能美发组合
</p>
<p class="pro2_three_ul4">
more &gt;
</p>
</a>
			</li>
			<li class="col-md-4 col-sm-4 col-xs-12">
				<a href="#">
<img src="<?=base_url();?>/static/images/pro_list_03.jpg">
<p class="pro2_three_ul1">
RC-7506
</p>
<p class="pro2_three_ul2">
Everchanging 百变造型器
</p>
<p class="pro2_three_ul3">
烫卷 / 拉直 / 吹风 多功能美发组合
</p>
<p class="pro2_three_ul4">
more &gt;
</p>
</a>
			</li>
			<li class="col-md-4 col-sm-4 col-xs-12">
				<a href="#">
<img src="<?=base_url();?>/static/images/pro_list_03.jpg">
<p class="pro2_three_ul1">
RC-7506
</p>
<p class="pro2_three_ul2">
Everchanging 百变造型器
</p>
<p class="pro2_three_ul3">
烫卷 / 拉直 / 吹风 多功能美发组合
</p>
<p class="pro2_three_ul4">
more &gt;
</p>
</a>
			</li>
		</ul>
	</div>
	<?php echo template('public','footer')?>
	<!--footer start-->
	<!--#include file="inc/footer.htm" -->
	<!--footer end-->


	<div class="ad-preloads"><img src="<?=base_url();?>/static/images/pro4_03.jpg"></div>
</body>

</html>