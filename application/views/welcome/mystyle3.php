<!DOCTYPE html>
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
            <a href="<?=base_url()?>mystyle">潮流发型</a>
            <a href="<?=base_url()?>mystyle2">未来发型趋势</a>
            <a href="<?=base_url()?>mystyle3" class="ahover">魔发秀</a>
            <a href="<?=base_url()?>mystyle4">达人秀场</a>
        </div>
    </div>
    <div class="my_style_ban" style="background: url(<?=base_url();?>/static/images/mystyle3_02.png) no-repeat center;background-size: cover;color: #ddb191; background-size:100% 21.09vw;">
        <div class="container">
            <div class="my_ban_main" style="color: #ffffff;">
                <p class="my_style_big_tl" style="color: #faf2d4;padding-bottom: 2.1vw;padding-top: 4.4vw">魔发秀</p>
                <p class="my_style_small" style="color: #fffca9;padding-bottom: 0.83vw;">不可思议的10分钟</p>
                <p style="font-size:0.83vw;line-height: 1.6vw">
                    每天10分钟，静静走走，自我反省；每天10分钟，一杯茶一本书，心灵人生；每天10分钟，听音乐听段子，缓解压力；当然每天10分钟，还能完成华丽蜕变。<br> 面对不同的场合，不同的服饰妆容，不同的脸型气质，雷瓦为所有用户提供各种时尚前沿的魔发秀，<br> 在不可思议的10分钟内，每天百变造型，开启美丽新纪元。
                </p>
            </div>
        </div>
    </div>
    <div class="container clearfix style3_main">
        <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 2.6vw;">
            <div class="style3_qhtl clearfix">
                <a href="<?=base_url()?>mystyle3/1" <?php if ($type == 1): ?>class="ahover""<?php endif; ?>>烫发器<em></em></a>
                <a href="<?=base_url()?>mystyle3/2" <?php if ($type == 2): ?>class="ahover""<?php endif; ?>>电吹风<em></em></a>
                <a href="<?=base_url()?>mystyle3/3" <?php if ($type == 3): ?>class="ahover""<?php endif; ?>>理发器<em></em></a>
                <a href="<?=base_url()?>mystyle3/4" <?php if ($type == 4): ?>class="ahover""<?php endif; ?>>美容健康<em></em></a>
            </div>
            <div class="style3_qhmain">
                <div class="style3_qhcon <?php if ($type == 1): ?>active<?php endif; ?>">
                    <p class="style3_qhcon1">
                        HAIR
                    </p>
                    <p class="style3_qhcon2">
                        烫发器
                    </p>
                    <p class="style3_qhcon1">
                        TOOLS
                    </p>
                    <a href="#" class="style3_qhcon3">MORE PRODUCTS</a>
                </div>
                <div class="style3_qhcon <?php if ($type == 2): ?>active<?php endif; ?>">
                    <p class="style3_qhcon1">
                        HAIR
                    </p>
                    <p class="style3_qhcon2">
                        电吹风
                    </p>
                    <p class="style3_qhcon1">
                        DRIER
                    </p>
                    <a href="#" class="style3_qhcon3">MORE PRODUCTS</a>
                </div>
                <div class="style3_qhcon <?php if ($type == 3): ?>active<?php endif; ?>">
                    <p class="style3_qhcon1">
                        HAIR
                    </p>
                    <p class="style3_qhcon2">
                        理发器
                    </p>
                    <p class="style3_qhcon1">
                        CLIPPER
                    </p>
                    <a href="#" class="style3_qhcon3">MORE PRODUCTS</a>
                </div>
                <div class="style3_qhcon <?php if ($type == 4): ?>active<?php endif; ?>">
                    <p class="style3_qhcon1">
                        BEAUTY 
                    </p>
                    <p class="style3_qhcon2">
                        美容
                    </p>
                    <p class="style3_qhcon1">
                        HEALTH SERIES
                    </p>
                    <a href="#" class="style3_qhcon3">MORE PRODUCTS</a>
                </div>
            </div>
        </div>
        <?php foreach($shows as $v):?>

        <div class="col-md-4 col-sm-4 col-xs-12 style3_img">
            <a href="javascript:;" class="style3_img_main">
                <div class="style3_img_main_t">
                    <em class="style3_play"></em>
                    <img src="<?=base_url();?>/static/images/mystyle3_05.jpg">
                </div>
                <div class="style3_img_main_b">
                    <p class="style3_img_main_b1"><?=$v['product']?></p>
                    <p><?=$v['title']?></p>
                </div>
            </a>
        </div>
        <?php endforeach;?>

    </div>

    <?php echo template('public','footer')?>

    <!--footer start-->
    <!--#include file="inc/footer.htm" -->
    <!--footer end-->
    <div class="bg"></div>
    <div class="alert_main">
        <em class="cha"></em>
        <video src="images/3201.mp4" controls="controls" width="100%" height="300">
        </video>
    </div>
    <script type="text/javascript" src="<?=base_url();?>/static/js/main.js"></script>


</body>

</html>