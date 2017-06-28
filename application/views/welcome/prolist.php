<!DOCTYPE html>
<!-- saved from url=(0043) -->
<html class="  ext-strict">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<title></title>
	<link rel="stylesheet" href="<?echo SITE_URL;?>/static/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?echo SITE_URL;?>/static/css/init.css">
	<link rel="stylesheet" href="<?echo SITE_URL;?>/static/css/main.css">
	<script type="text/javascript" src="<?echo SITE_URL;?>/static/js/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="<?echo SITE_URL;?>/static/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?echo SITE_URL;?>/static/js/jquery.flexslider-min.js"></script>
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
			<a href="<?=SITE_URL?>prolist/1/1" <?php if ($type == 1): ?>class="ahover""<?php endif; ?>>01卷直发器</a>
			<a href="<?=SITE_URL?>prolist/2/1" <?php if ($type == 2): ?>class="ahover""<?php endif; ?>>02电吹风</a>
			<a href="<?=SITE_URL?>prolist/3/1" <?php if ($type == 3): ?>class="ahover""<?php endif; ?>>03理发器</a>
			<a href="<?=SITE_URL?>prolist/4/1" <?php if ($type == 4): ?>class="ahover""<?php endif; ?>>04美容健康系列</a>
		</div>
	</div>
	<div class="pro2_one">
		<img src="<?echo SITE_URL;?>/static/images/pr2.png">
		<div class="pro2_one_main">
			<div class="container">
				<p class="pro2_one_main1">
					<span>01</span>
					<b>卷直发棒</b>
				</p>
				<p class="pro2_one_main2 eng">
					HAIR TOOLS
				</p>
				<p>欢迎光临在线商城购买</p>
				<p class="pro2_one">
					<a href="#">GO TO TMALL</a>
				</p>
			</div>
		</div>
	</div>
	<div class="pro2_ban">
		<div class="pro2_text">
			<p class="eng pro2_ban_tl">
				WHAT’S NEW
			</p>新品推荐
		</div>
		<div class="block_home_slider">
			<div id="home_slider" class="flexslider">

				<div class="flex-viewport" style="overflow: hidden; position: relative;">
					<ul class="slides" style="width: 1000%; margin-left: -2560px;">
						<li class="clone" style="width: 1280px; float: left; display: block;">
							<a href="#">
							<img src="<?echo SITE_URL;?>/static/images/pro2_04.png">
							</a>
						</li>
						<li class="" style="width: 1280px; float: left; display: block;">
							<a href="#">
								<img src="<?echo SITE_URL;?>/static/images/pro2_04.png">
							</a>
						</li>
						<li class="flex-active-slide" style="width: 1280px; float: left; display: block;">
							<a href="#">
								<img src="<?echo SITE_URL;?>/static/images/pro2_04.png">
							</a>
						</li>
						<li style="width: 1280px; float: left; display: block;">
							<a href="#">
								<img src="<?echo SITE_URL;?>/static/images/pro2_04.png">
							</a>
						</li>
						<li class="clone" style="width: 1280px; float: left; display: block;">
							<a href="#">
								<img src="<?echo SITE_URL;?>/static/images/pro2_04.png">
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
						initDelay: 0,
						animationSpeed: 700,
						slideshowSpeed: 3000,
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
	<div class="pro2_three">
		<div class="pro2_three_tl">
			<span class="eng">
HAIR TOOLS
</span>
			<p>卷直发器产品</p>
		</div>
		<ul class="clearfix pro2_three_ul container">
			<?php foreach($products as $k=>$v):?>
			<li class="col-md-4 col-sm-4 col-xs-12">
				<a href="<?=SITE_URL?>prodetail/<?=$type?>/<?=$v['product_id']?>">
				<img src="<?=SITE_URL?>images/<?=$v['image']?>">
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
			
			<li class="col-md-4 col-sm-4 col-xs-12 pro2_last">
				<a href="<?=SITE_URL?>prolist/<?=$type?>/<?=$page+1?>">
					<img src="<?echo SITE_URL;?>/static/images/news_22.png">
				</a>
			</li>
		</ul>
		<div class="page clearfix container">
			<div class="right">
				<a href="<?=SITE_URL?>prolist/<?=$type;?>/<?=$page-1?>">&lt;</a>
				<input  id="pageinput" type="text" value="<?=$page?>">
				<span>/<?=$maxpage?></span>
				<a id="submit" href="#" style="background: #000000;color: #fff;">GO</a>
				<a href="<?=SITE_URL?>prolist/<?=$type;?>/<?=$page+1?>">&gt;</a>
			</div>
		</div>
	</div>

<?php echo template('public','footer')?>

	<!--footer start-->
	<!--#include file="inc/footer.htm" -->
	<!--footer end-->


</body>
<script type="text/javascript">
	$("#submit").click(function(){
		self.location="<?=SITE_URL?>news/<?=$newstype;?>/<?=$v['years'];?>/" + $("#pageinput").val(); 
	});
</script>
</html>