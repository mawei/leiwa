<!DOCTYPE html>
<html class="  ext-strict">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta name="renderer" content="webkit">
	<meta name="baidu-site-verification" content="ovrGnvoVMb" />
	<title><?=$mytitle?></title>
	<meta name="keywords" content="雷瓦资讯，卷发棒，卷发器，直板夹，直发器，个人护理，卷发棒品牌，雷瓦卷发棒，雷瓦吹风机"/>
	<meta name="description" content="雷瓦私人小家电新闻资讯"/>

	<link rel="stylesheet" href="<?=base_url();?>/static/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url();?>/static/css/init.css">
	<link rel="stylesheet" href="<?=base_url();?>/static/css/main.css">
	<script   src="https://code.jquery.com/jquery-1.12.4.js"   integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="   crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?=base_url();?>/static/js/bootstrap.min.js"></script>
</head>

<body style="background: #ebeaea;">
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
<!-- 		<div class="about_menu">
			<a href="<?=base_url()?>news/company" <?php if ($newstype == 'company'): ?>class="ahover"<?php endif; ?>>公司新闻</a>
			<a href="<?=base_url()?>news/product" <?php if ($newstype != 'company'): ?>class="ahover"<?php endif; ?>>产品新闻</a>
		</div> -->
	</div>
	<div class="about_ban">
		<img src="<?=base_url();?>/static/images/news_02.png">
	</div>
	<div class="news_tl">
		</a>
        <?php foreach($allyears as $v):?>
		<!-- <a href="<?=base_url()?>news/<?=$newstype;?>/<?=$v['years'];?>/1" <?php if ($years == $v['years']): ?>class="ahover"<?php endif; ?>><?=$v['years']?></a> -->
		<a href="<?=base_url()?>news/<?=$v['years'];?>/1" <?php if ($years == $v['years']): ?>class="ahover"<?php endif; ?>><?=$v['years']?></a>
		<?php endforeach;?>

			</div>
	<div class="news_b">
		<div class="news_bmain active">
			<ul>
				<?php foreach($news as $k=>$v):?>
				<?php if ($k%2 == 0): ?>
				<li>
					<a class="clearfix">
						<div class="news_bmain_lf  style4_img_main" id="<?=$v['news_id']?>">
							<img src="<?=base_url();?>images/<?=$v['image']?>">
						</div>
						<div class="news_bmain_rt style4_img_main" id="<?=$v['news_id']?>">
							<p class="news_bmain_rttl">
								<?=$v['title']?>
							</p>
							<div class="news_bmian_text style4_img_main" id="<?=$v['news_id']?>">
								<?=$v['memo']?>
							</div>
							<p class="news_bmian_a style4_img_main" id="<?=$v['news_id']?>">
								more &gt;
							</p>
						</div>
					</a>
				</li>
				<?php elseif ($k%2 == 1): ?>
				<li>
					<a class="clearfix">
						<div class="news_bmain_lf style4_img_main" id="<?=$v['news_id']?>">
							<img src="<?=base_url();?>images/<?=$v['image']?>">
						</div>
						<div class="news_bmain_rt style4_img_main" id="<?=$v['news_id']?>">
							<p class="news_bmain_rttl">
								<?=$v['title']?>
							</p>
							<div class="news_bmian_text style4_img_main" id="<?=$v['news_id']?>">
								<p><?=$v['memo']?></p>
							</div>
							<p class="news_bmian_a style4_img_main" id="<?=$v['news_id']?>">
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
					<!-- <a href="<?=base_url()?>news/<?=$newstype;?>/<?=$v['years'];?>/<?=$page-1?>"> -->
					<a href="<?=base_url()?>news/<?=$v['years'];?>/<?=$page-1?>">
							&lt;
	    				</a>
					<input id="pageinput" type="text" value="<?=$page?>">
					<span>/<?=$maxpage?></span>
					<a id="submit" style="background: #000000;color: #fff;">
	    					GO
	    				</a>
					<!-- <a href="<?=base_url()?>news/<?=$newstype;?>/<?=$v['years'];?>/<?=$page+1?>"> -->
					<a href="<?=base_url()?>news/<?=$v['years'];?>/<?=$page+1?>">
	    					&gt;
	    				</a>
				</div>
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
	<div class="bg"></div>
	<div class="alert_main_bg">
		<div class="alert_main detail box-detail">
			<div class="wd1200">
				<div class="wd900">
					<em class="cha"></em>
					<a href="#top-detail" ><div class="upload"></div></a>
					<div class="box-detail-ct">
						<div class="detail-cont"  style="color: white">
							<p id="top-detail" class="top-detail" ></p>
							<p style="margin: 0; color: red;" id="createtime"></p>
							<p id="content"></p>
						</div>
					</div>
				</div>
			</div>



		</div>
	</div>

</body>
<script type="text/javascript">
	$("#submit").click(function(){
		// self.location="<?=base_url()?>news/<?=$newstype;?>/<?=$v['years'];?>/" + $("#pageinput").val(); 
		self.location="<?=base_url()?>news/<?=$v['years'];?>/" + $("#pageinput").val(); 
	});

	$('.style4_img_main').click(function () {
	  	$.ajax({
		  url: "<?=base_url()?>newsdetail/"+$(this).attr('id'),
		  dataType: "json",
		}).done(function(news) {
			$("#top-detail").html(news.title);
			$("#createtime").html(news.createtime);
			$("#content").html(news.content);
		});

        $(".bg").show();
        $(".alert_main").show();
    });
    $('.cha').click(function () {
        $(".bg").hide();
        $(".alert_main").hide();
    });
</script>

<script type="text/javascript" src="<?=base_url()?>/static/js/main.js"></script>
<script>
    var heightLeft= $(".news_bmain_lf").height();
    var heightRight= $(".news_bmain_rt").height();

    if(heightLeft<heightRight){
        $(".news_bmain_lf").height(heightRight);
	}

    var detailCont= $(".detail-cont").height();


	$(".upload").click(function () {
		$(".detail-cont").addClass('donghua');
    })
</script>

</html>