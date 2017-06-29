<!DOCTYPE html>
<html class="  ext-strict">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<title></title>
	<link rel="stylesheet" href="<?=SITE_URL;?>/static/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=SITE_URL;?>/static/css/init.css">
	<link rel="stylesheet" href="<?=SITE_URL;?>/static/css/main.css">
	<script type="text/javascript" src="<?=SITE_URL;?>/static/js/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="<?=SITE_URL;?>/static/js/bootstrap.min.js"></script>
</head>

<body style="background: #ebeaea;" class=" ext-webkit ext-chrome ext-mac">
	<div class="head ny_head">
	        <?php echo template('public','head')?>

		<!--head start-->
		<!--#include file="inc/head.htm" -->
		<!--head end-->
		<div class="head_b">
			雷瓦资讯
		</div>
	</div>
	<div class="about_tl">
		<p class="about_tl_t">
			RIWA NEWS
		</p>
		<div class="about_menu">
			<a href="<?=SITE_URL?>news/company" <?php if ($newstype == 'company'): ?>class="ahover"<?php endif; ?>>公司新闻</a>
			<a href="<?=SITE_URL?>news/product" <?php if ($newstype != 'company'): ?>class="ahover"<?php endif; ?>>产品新闻</a>
		</div>
	</div>
	<div class="about_ban">
		<img src="<?=SITE_URL;?>/static/images/news_02.png">
	</div>
	<div class="news_tl">
		</a>
        <?php foreach($allyears as $v):?>
		<a href="<?=SITE_URL?>news/<?=$newstype;?>/<?=$v['years'];?>/1" <?php if ($years == $v['years']): ?>class="ahover"<?php endif; ?>><?=$v['years']?></a>
		<?php endforeach;?>

			</div>
	<div class="news_b container">
		<div class="news_bmain active">
			<ul>
				<?php foreach($news as $k=>$v):?>
				<?php if ($k%2 == 0): ?>
				<li>
					<a href="news.html#" class="clearfix">
						<div class="col-md-4 col-sm-4 col-xs-12 news_bmain_lf">
							<img src="images/<?=$v['image']?>">
						</div>
						<div class="col-md-8 col-sm-8 col-xs-12 news_bmain_rt">
							<p class="news_bmain_rttl">
								<?=$v['title']?>
							</p>
							<div class="news_bmian_text">
								<?=$v['memo']?>
							</div>
							<p class="news_bmian_a">
								more &gt;
							</p>
						</div>
					</a>
				</li>
				<?php elseif ($k%2 == 1): ?>
				<li>
					<a href="news.html#" class="clearfix">
						<div class="col-md-4 col-sm-4 col-xs-12 news_bmain_lf">
							<img src="<?=SITE_URL;?>/static/images/news_09.png">
						</div>
						<div class="col-md-8 col-sm-8 col-xs-12 news_bmain_rt">
							<p class="news_bmain_rttl">
								<?=$v['title']?>
							</p>
							<div class="news_bmian_text">
								<?=$v['memo']?>
							</div>
							<p class="news_bmian_a">
								more &gt;
							</p>
						</div>
					</a>
				</li>
				<?php endif; ?>
				<?php endforeach;?>

				
			</ul>
			<div class="page clearfix">
				<div class="right">
					<a href="<?=SITE_URL?>news/<?=$newstype;?>/<?=$v['years'];?>/<?=$page-1?>">
							&lt;
	    				</a>
					<input id="pageinput" type="text" value="<?=$page?>">
					<span>/<?=$maxpage?></span>
					<a id="submit" style="background: #000000;color: #fff;">
	    					GO
	    				</a>
					<a href="<?=SITE_URL?>news/<?=$newstype;?>/<?=$v['years'];?>/<?=$page+1?>">
	    					&gt;
	    				</a>
				</div>
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