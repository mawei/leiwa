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
	<link rel="stylesheet" href="<?=base_url();?>/static/css/main.css">
	<script   src="https://code.jquery.com/jquery-1.12.4.js"   integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="   crossorigin="anonymous"></script>
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
			<a href="<?=base_url()?>prolist/1/1" <?php if ($type == 1): ?>class="ahover""<?php endif; ?>>卷发棒</a>
			<a href="<?=base_url()?>prolist/2/1" <?php if ($type == 2): ?>class="ahover""<?php endif; ?>>电吹风</a>
			<a href="<?=base_url()?>prolist/3/1" <?php if ($type == 3): ?>class="ahover""<?php endif; ?>>理发器</a>
			<a href="<?=base_url()?>prolist/4/1" <?php if ($type == 4): ?>class="ahover""<?php endif; ?>>美容健康系列</a>
		</div>
	</div>
	<div class="pro2_one">
		<a href="<?=$banner[0]['content']?>" ><img src="<?=base_url();?>/images/<?=$banner[0]['image']?>"></a>
		<!-- <img src="<?=base_url();?>/static/images/pr2.gif"> -->
		<!-- <div class="pro2_one_main">
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
					<a href="<?php if ($type == 1): ?>https://riwa.tmall.com/category-266569176.htm?spm=a1z10.1-b-s.w13846666-15137289610.6.3531f079ZiSyGL&search=y&catName=%BE%ED%B7%A2%D4%EC%D0%CD%CF%B5%C1%D0<?php endif; ?>
					<?php if ($type == 2): ?>https://riwa.tmall.com/category-266569174.htm?spm=a1z10.5-b-s.w13846666-15137289610.7.6fc97421sOymne&search=y&catName=%B5%E7%B4%B5%B7%E7%CF%B5%C1%D0<?php endif; ?>
					<?php if ($type == 3): ?>https://riwa.tmall.com/category-300618291.htm?spm=a1z10.5-b-s.w13846666-15137289610.5.8bb15eYfhxvp&search=y&catName=%C0%ED%B7%A2%C6%F7%CF%B5%C1%D0<?php endif; ?>
					<?php if ($type == 4): ?>https://riwa.tmall.com/category-631923967.htm?spm=a1z10.5-b-s.w13846666-15137289610.4.8360978BSYke9&search=y&catName=%C3%C0%C8%DD%BB%A4%C0%ED%CF%B5%C1%D0<?php endif; ?>" target="blank">GO TO TMALL</a>
				</p>
			</div>
		</div> -->
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
					<ul class="slides" style="width: 1000%;">
						<?php foreach($images as $v):?>
						<li class="clone" style="width: 1280px; float: left; display: block;">
							<div class="pro_one_nr">
							<a href="<?=$v['content']?>">
							<img src="<?=base_url();?>/images/<?=$v['image']?>">
							</a>
							</div>
						</li>
						<?php endforeach;?>
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
				<?php if ($type == 1): ?>HAIR TOOLS<?php endif; ?>
				<?php if ($type == 2): ?>HAIR DRIER<?php endif; ?>
				<?php if ($type == 3): ?>HAIR CLIPPER<?php endif; ?>
				<?php if ($type == 4): ?>BEAUTY HEALTH SERIES<?php endif; ?></span>
			<p class="p1">
				<?php if ($type == 1): ?>烫发器产品<?php endif; ?>
				<?php if ($type == 2): ?>电吹风产品<?php endif; ?>
				<?php if ($type == 3): ?>理发器产品<?php endif; ?>
				<?php if ($type == 4): ?>美容健康系列产品<?php endif; ?>
			</p>
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
	        <?php if ($page != $maxpage): ?>

        	<div class="style3_img next" align="center">
	            <a href="<?=base_url()?>prolist/<?=$type?>/<?=$page+1?>">
	                <img src="<?=base_url();?>/static/images/news_22.png">
	            </a>
	        </div>
			<?php endif; ?>

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
		self.location="<?=base_url()?>prolist/<?=$type;?>/" + $("#pageinput").val(); 
	});
</script>
</html>