<!DOCTYPE html>
<html class="  ext-strict">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta name="renderer" content="webkit">
	<meta name="baidu-site-verification" content="ovrGnvoVMb" />
	<title><?=$mytitle?></title>
	<meta name="keywords" content="造型产品，卷发棒，卷发器，直板夹，直发器，个人护理，卷发棒品牌，雷瓦卷发棒，雷瓦吹风机"/>
	<meta name="description" content="雷瓦百变造型产品中心，涵盖烫发器，电吹风，理发器及个护系列四大主营品类，满足不同选择"/>

	<link rel="stylesheet" href="<?=base_url();?>/static/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url();?>/static/css/init.css">
	<link rel="stylesheet" href="<?=base_url();?>/static/css/main.css">
	<script type="text/javascript" src="<?=base_url();?>/static/js/jquery.js"></script>
	<script   src="https://code.jquery.com/jquery-1.12.4.js"   integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="   crossorigin="anonymous"></script>
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
			<a href="<?=base_url()?>prolist/1/1">卷发棒</a>
			<a href="<?=base_url()?>prolist/2/1">电吹风</a>
			<a href="<?=base_url()?>prolist/3/1">理发器</a>
			<a href="<?=base_url()?>prolist/4/1">美容健康系列</a>
		</div>
	</div>
	<div class="pro1_one">
		<div class="block_home_slider">
			<div id="home_slider" class="flexslider">

				<div class="flex-viewport" style="overflow: hidden; position: relative;">
					<ul class="slides" style="width: 1000%;">
						<?php foreach($images as $v):?>
						<li class="clone" style="width: 1280px; float: left; display: block;">
							<div class="pro_one_nr">
						        <a href="<?=$v['content']?>" target="blank">
								<img src="<?=base_url();?>/images/<?=$v['image']?>">
								</a>
							</div>
						</li>
						<?php endforeach;?>
<!-- 
						
						<li class="clone" style="width: 1280px; float: left; display: block;">
							<div class="pro_one_nr">
								<img src="<?=base_url();?>/static/images/pro_02.jpg">
								<div class="pro1_one_main">
										<div class="pro1_one_main_con">
											<p class="pro1_one1">
												聚焦造型小家电
											</p>
											<p>
												雷瓦百变造型产品中心，涵盖
											</p>
											<p class="pro1_one2">
												烫发器、电吹风、理发器、美容健康<br>四大主营品类。
											</p>
											<p class="sj_pro1_one1">
												所有造型产品外观设计时尚简约，色彩活力悦动。雷瓦工<br>程师们从技术到生产工艺，注重每一处细节，精工细琢。<br>
												同时充分考虑用户造型的需求及困难，注重产品实用功能<br>化设计，使百变造型轻松简单，游刃有余。
											</p>
										</div>
								</div>
							</div>
						</li> -->

					</ul>
					<div class="ad-next"></div>
					<div class="ad-prev"></div>
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
	<div class="pro1_two pro-det pro-ct ers1">
		<div class="index_three_tl pro-ers1" style="background: none;">
			<p class="index_three_tl_eng">
				CHOOSE YOUR FAVORITE
			</p>
			<p class="index_three_tl_china">
				聚集造型小家电，涵盖四大主营品类
			</p>
		</div>
		<div class="index_three_t" style="background: none;">
			<ul class="clearfix index_three_ul container">
				<li class="col-md-6 col-sm-6 col-xs-6 index_three_li1">
					<a href="<?=base_url();?>/prolist/1/1">
						<img src="<?=base_url();?>/static/images/products_03.png">
						<div class="index_three_fu index_three_fu10">
						<p class="eng">
						HAIR <br> TOOLS
						</p>
						<p class="index_three_zw">
						烫发器 ▸
						</p>
						<p class="index_three_num">
						01
						</p>
						</div>
					</a>
				</li>
				<li class="col-md-6 col-sm-6 col-xs-6">
					<a href="<?=base_url();?>/prolist/2/1">
						<img src="<?=base_url();?>/static/images/products_05.png">
						<div class="index_three_fu index_three_fu11">
						<p class="eng">
						HAIR <br> DRIER
						</p>
						<p class="index_three_zw">
						电吹风 ▸
						</p>
						<p class="index_three_num">
						02
						</p>
						</div>
					</a>
				</li>
			</ul>
		</div>
		<div class="index_three_b" style="background: none;padding-bottom: 30px">
			<ul class="clearfix index_three_ul container">
				<li class="col-md-6 col-sm-6 col-xs-6">
					<a href="<?=base_url();?>/prolist/3/1">
						<img src="<?=base_url();?>/static/images/products_12.png">
						<div class="index_three_fu index_three_fu13">
							<p class="eng">
							HAIR
							<br> CLIPPER </p>
							<p class="index_three_zw">
							理发器 ▸
							</p>
							<p class="index_three_num">
							03
							</p>
						</div>
					</a>
				</li>
				<li class="col-md-6 col-sm-6 col-xs-6 index_three_li4">
					<a href="<?=base_url();?>/prolist/4/1">
						<img src="<?=base_url();?>/static/images/products_10.png">
						<div class="index_three_fu index_three_fu14">
						<p class="eng">
						BEAUTY HEALTH <br> SERIES <br>
						</p>
						<p class="index_three_zw">
						美容健康系列 ▸
						</p>
						<p class="index_four_num">
						04
						</p>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="pro1_three">
		<img src="<?=base_url();?>/static/images/pro_06.jpg">
		<div class="pro1_three_main">
			<div class="container">
				<div class="pro1_three_tl">
					未来造型产品新趋势
				</div>
				<div class="pro1_three_text">
				<p>经济的增长和人们生活水平的提高，使得普通大众对美的消费需求日益提升，逐渐开始注重个人造型，家用个人造型产品走进大众视野，进入普通人的生活。</p>
				<p>	 如今市场上的造型产品多以单直、单卷或卷直两用为核心功能，家也成为使用造型产品的主要场所。 </p><p>然而随着大众爱美需求不断的提升以及当下生活节奏的加快，造型产品的未来发展将呈现</p>
				<p>简操作、可替换、易携带这三种主要新趋势。</p>
				</div>
			</div>
		</div>
	</div>
	<ul class="container pro1_four clearfix">
		<li class="col-md-4 col-sm-4 col-xs-12">
			<div class="pro1_four_main">
				<img src="<?=base_url();?>/static/images/products_100.png">
				<p class="pro1_four_main_name">
					简操作
				</p>
			</div>
			<div class="pro1_four_main_b">
				<p>
					快速的生活节奏，做任何事都需要争分夺秒，造型也不例<br>外。如何在有限的时间能做出适宜的个人造型，除了造型<br>手法上的熟练外，实用易操作的造型产品必不可少。快速<br>加热与散热、造型时间提醒、符合人体工学的造型手柄等<br>都将是未来产品研发的方向。
				</p>
			</div>
		</li>
		<li class="col-md-4 col-sm-4 col-xs-12">
			<div class="pro1_four_main">
				<img src="<?=base_url();?>/static/images/products_07.png">
				<p class="pro1_four_main_name">
					可替换
				</p>
			</div>
			<div class="pro1_four_main_b" align="center">
				<p>
					对于当下潮男潮女而言，或多或少都有点选择恐惧症。单<br>手柄搭配可替换的多种造型尺寸或满足多种造型需求的的<br>配件，这样一款可以代替市面上大部分的造型产品，免去<br>选择的麻烦及收纳的困难。
				</p>
			</div>
		</li>
		<li class="col-md-4 col-sm-4 col-xs-12">
			<div class="pro1_four_main">
				<img src="<?=base_url();?>/static/images/pro_07.png">
				<p class="pro1_four_main_name">
					易携带
				</p>
			</div>
			<div class="pro1_four_main_b" >
				<p>
					造型产品将不仅限于家用，出差途中、度假旅行中、<br>办公室、随身包、旅行箱等都将是造型产品未来出现<br>的地点与场合。小巧迷你型、USB型、可折叠型、可<br>替换型……方便易携带，让消费者能随身随地根据需<br>要、根据心情变换造型。
				</p>
			</div>
		</li>
	</ul>
	<div class="pro1_five">
		新一年，新一季的潮流趋势
		<p class="color_red">
			发现时下最流行
		</p>
		<a href="<?=base_url();?>mystyle">
MORE
</a>
	</div>
	<div class="caitiao container">
        <img src="<?=base_url();?>/static/images/about1_46.png">
    </div>
	<?php echo template('public','footer')?>

	<!--footer start-->
	<!--#include file="inc/footer.htm" -->
	<!--footer end-->

</body>

</html>