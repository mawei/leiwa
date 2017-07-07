<!DOCTYPE html>
<html class="  ext-strict">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta name="renderer" content="webkit">
	<title></title>
	<link rel="stylesheet" href="static/css/bootstrap.min.css">
	<link rel="stylesheet" href="static/css/init.css">
	<link rel="stylesheet" href="static/css/main.css">
	<script type="text/javascript" src="static/js/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="static/js/bootstrap.min.js"></script>
</head>

<body style="background: #ebeaea;">
	<div class="head ny_head">
	                <?php echo template('public','head')?>
		<!--head start-->
		<!--#include file="inc/head.htm" -->
		<!--head end-->
		<div class="head_b">
			我型我造
		</div>
	</div>
	<div class="about_tl">
		<p class="about_tl_t">
			DO YOUR OWN STYLE
		</p>
		<div class="about_menu">
			<a href="mystyle">潮流发型</a>
			<a href="mystyle2">未来发型趋势</a>
			<a href="mystyle3">魔发秀</a>
			<a href="mystyle4" class="ahover">达人秀场</a>
		</div>
	</div>
	<div class="my_style4_ban">
		达人秀场
	</div>
	<div class="container style_4">
		<div class="wall">
			<?php foreach($showgrouds as $k=>$v):?>
			<?php if($k%2 == 0):?>
			<div class="wall-column">
				<?php if (count($showgrouds) > $k): ?>
				<div class="article" id="">
					<a href="#" class=" style_4_main">
						<p class="style_4_1">
							<span class="eng color_red"><?=$showgrouds[$k]['name']?></span>的晒单
						</p>
						<img src="images/<?=$showgrouds[$k]['image']?>">
						<div class="style_4_2">
							<?=$showgrouds[$k]['content']?>
							<p class="style_4_2_date">
							<?=$showgrouds[$k]['date']?>
							</p>
						</div>
					</a>
				</div>
				<?php endif; ?>

				<?php if (count($showgrouds) > $k + 1): ?>
				<div class="article" id="">
					<a href="#" class=" style_4_main">
						<p class="style_4_1">
							<span class="eng color_red"><?=$showgrouds[$k+1]['name']?></span>的晒单
						</p>
						<img src="images/<?=$showgrouds[$k]['image']?>">
						<div class="style_4_2">
							<?=$showgrouds[$k+1]['content']?>
							<p class="style_4_2_date">
							<?=$showgrouds[$k+1]['date']?>
							</p>
						</div>
					</a>
				</div>
				<?php endif; ?>

			</div>
			<?php endif; ?>
			<?php endforeach;?>

			
		</div>
		<a href="javascript:;" class="topbtn"></a>
	</div>
	                <?php echo template('public','footer')?>

	<!--footer start-->
	<!--#include file="inc/footer.htm" -->
	<!--footer end-->
	<script type="text/javascript" src="static/js/main.js"></script>
	<script type="text/javascript" src="static/js/jaliswall.js"></script>
	<script type="text/javascript">
		$(function () {
			$('.wall').jaliswall({ item: '.article' });
		});
	</script>


</body>

</html>