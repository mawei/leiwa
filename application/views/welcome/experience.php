<!DOCTYPE html>
<html class="  ext-strict">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title></title>
    <link rel="stylesheet" href="<?=base_url();?>/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/static/css/init.css">
    <link rel="stylesheet" href="<?=base_url();?>/static/css/main.css">
    <script type="text/javascript" src="<?=base_url();?>/static/js/jquery-1.7.2.js"></script>
    <script type="text/javascript" src="<?=base_url();?>/static/js/bootstrap.min.js"></script>
</head>

<body style="background: #ebeaea;" class=" ext-webkit ext-chrome ext-mac">
    <div class="head ny_head">
            <?php echo template('public','head')?>

        <!--head start-->
        <!--#include file="inc/head.htm" -->
        <!--head end-->
        <div class="head_b">
            贴心体验
        </div>
    </div>
    <div class="about_tl">
        <p class="about_tl_t">
            EXPERIENCE OF CARING
        </p>
        <div class="about_menu">
            <a href="experience" class="ahover">常见问题</a>
            <a href="experience2">星级服务</a>
        </div>
    </div>
    <div class="about_ban">
        <img src="<?=base_url();?>/static/images/questionban_02.jpg">
    </div>
    <div class="e1_main">
        <div class="index_four_line ex_line">
            <span>
卷直发器类
</span>
        </div>
        <ul class="container wenda_ul">
            <?php foreach($questions['卷直发器'] as $k=>$v):?>
            <li class="col-md-6 col-sm-6 col-xs-12">
                <div class="wenda_main">
                    <div class="wen">
                        <?=$questions['卷直发器'][$k]['title']?>
                    </div>
                    <div class="da">
                        <?=$questions['卷直发器'][$k]['content']?>
                    </div>
                </div>
            </li>
            <?php endforeach;?>
        </ul>
        <div class="index_four_line ex_line">
            <span>
电吹风类
</span>
        </div>
        <ul class="container wenda_ul">
            <?php foreach($questions['电吹风'] as $k=>$v):?>
            <li class="col-md-6 col-sm-6 col-xs-12">
                <div class="wenda_main">
                    <div class="wen">
                        <?=$questions['电吹风'][$k]['title']?>
                    </div>
                    <div class="da">
                        <?=$questions['电吹风'][$k]['content']?>
                    </div>
                </div>
            </li>
            <?php endforeach;?>
        </ul>
        <div class="index_four_line ex_line">
            <span>
            剃毛器类
            </span>
        </div>
        <ul class="container wenda_ul">
<?php foreach($questions['理发器'] as $k=>$v):?>
            <li class="col-md-6 col-sm-6 col-xs-12">
                <div class="wenda_main">
                    <div class="wen">
                        <?=$questions['理发器'][$k]['title']?>
                    </div>
                    <div class="da">
                        <?=$questions['理发器'][$k]['content']?>
                    </div>
                </div>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
            <?php echo template('public','footer')?>

    <!--footer start-->
    <!--#include file="inc/footer.htm" -->
    <!--footer end-->

</body>

</html>