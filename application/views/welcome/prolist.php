<!DOCTYPE html>
<!-- saved from url=(0043) -->
<html class="  ext-strict">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta name="renderer" content="webkit">
	<title></title>
	<link rel="stylesheet" href="<?=base_url();?>/static/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url();?>/static/css/init.css">
	<link rel="stylesheet" href="<?=base_url();?>/static/css/main.css">
	<script type="text/javascript" src="<?=base_url();?>/static/js/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="<?=base_url();?>/static/js/bootstrap.min.js"></script>
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
			<a href="<?=base_url()?>prolist/1/1" <?php if ($type == 1): ?>class="ahover""<?php endif; ?>>01烫发器</a>
			<a href="<?=base_url()?>prolist/2/1" <?php if ($type == 2): ?>class="ahover""<?php endif; ?>>02电吹风</a>
			<a href="<?=base_url()?>prolist/3/1" <?php if ($type == 3): ?>class="ahover""<?php endif; ?>>03理发器</a>
			<a href="<?=base_url()?>prolist/4/1" <?php if ($type == 4): ?>class="ahover""<?php endif; ?>>04美容健康系列</a>
		</div>
	</div>
	<div class="pro2_one">
		<img src="<?=base_url();?>/static/images/pr2.png">
		<div class="pro2_one_main">
			<div class="container">
				<p class="pro2_one_main1">
					<span><?php if ($type == 1): ?>01<?php endif; ?><?php if ($type == 2): ?>02<?php endif; ?><?php if ($type == 3): ?>03<?php endif; ?><?php if ($type == 4): ?>04<?php endif; ?></span>
					<b>
					<?php if ($type == 1): ?>烫发器<?php endif; ?>
					<?php if ($type == 2): ?>电吹风<?php endif; ?>
					<?php if ($type == 3): ?>理发器<?php endif; ?>
					<?php if ($type == 4): ?>美容健康系列<?php endif; ?>
					</b>
				</p>
				<p class="pro2_one_main2" style="padding-left:0px">
					<?php if ($type == 1): ?>HAIR TOOLS<?php endif; ?>
					<?php if ($type == 2): ?>HAIR DRIER<?php endif; ?>
					<?php if ($type == 3): ?>HAIR CLIPPER<?php endif; ?>
					<?php if ($type == 4): ?>BEAUTY HEALTH SERIES<?php endif; ?>
				</p>
				<p style="letter-spacing: 0.4vw">欢迎光临在线商城购买</p>
				<p class="pro2_one">
					<a href="#">GO TO TMALL</a>
				</p>
			</div>
		</div>
	</div>
	<div class="pro2_ban">
		<div class="pro2_text">
			<p class="eng pro2_ban_tl"  style="padding-left:0px">
				WHAT’S NEW
			</p>新品推荐
		</div>
		<div class="block_home_slider">
			<div id="home_slider" class="flexslider">

				<div class="flex-viewport" style="overflow: hidden; position: relative;">
					<ul class="slides" style="width: 1000%; margin-left: -2560px;">
						<li class="clone" style="width: 1280px; float: left; display: block;">
							<a href="#">
							<img src="<?=base_url();?>/static/images/pro2_04.png">
							</a>
						</li>
						<li class="" style="width: 1280px; float: left; display: block;">
							<a href="#">
								<img src="<?=base_url();?>/static/images/pro2_04.png">
							</a>
						</li>
						<li class="flex-active-slide" style="width: 1280px; float: left; display: block;">
							<a href="#">
								<img src="<?=base_url();?>/static/images/pro2_04.png">
							</a>
						</li>
						<li style="width: 1280px; float: left; display: block;">
							<a href="#">
								<img src="<?=base_url();?>/static/images/pro2_04.png">
							</a>
						</li>
						<li class="clone" style="width: 1280px; float: left; display: block;">
							<a href="#">
								<img src="<?=base_url();?>/static/images/pro2_04.png">
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
<div class="pro2_three pro3">
    <div class="pro2_three_tl">
			<span class="eng">
HAIR TOOLS
</span>
			<p class="p1">烫发器产品</p>
		</div>
    <ul class="clearfix pro2_three_ul container pro3_container">
			<?php foreach($products as $k=>$v):?>
			<li class="col-md-4 col-sm-4 col-xs-12  pro-list">
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
			
        	<li class="col-md-4 col-sm-4 col-xs-12  style3_img next ">
				<a href="<?=base_url()?>prolist/<?=$type?>/<?=$page+1?>">
					<img src="<?=base_url();?>/static/images/news_22.png">
				</a>
			</li>
		</ul>
		<div class="page clearfix container">
			<div class="right">
				<a href="<?=base_url()?>prolist/<?=$type;?>/<?=$page-1?>">&lt;</a>
				<input  id="pageinput" type="text" value="<?=$page?>">
				<span>/<?=$maxpage?></span>
				<a id="submit" href="#" style="background: #000000;color: #fff;">GO</a>
				<a href="<?=base_url()?>prolist/<?=$type;?>/<?=$page+1?>">&gt;</a>
			</div>
		</div>
	</div>

    <div class="caitiao container">
        <img src="<?=base_url();?>/static/images/about1_46.png">
    </div>
<?php echo template('public','footer')?>

	<!--footer start-->
	<!--#include file="inc/footer.htm" -->
	<!--footer end-->


</body>
<script type="text/javascript">
	$("#submit").click(function(){
		self.location="<?=base_url()?>news/<?=$newstype;?>/<?=$v['years'];?>/" + $("#pageinput").val(); 
	});
</script>
</html>