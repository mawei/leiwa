<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta name="baidu-site-verification" content="ovrGnvoVMb" />
    <title><?=$mytitle?></title>
    <meta name="keywords" content="雷瓦，卷发棒，卷发器，直板夹，直发器，个人护理，卷发棒品牌，雷瓦卷发棒，雷瓦吹风机"/>
    <meta name="description" content="RIWA雷瓦，轻松私人造型小家电品牌，旨在为每一位用户带去轻松便捷的造型产品，让每位女性都能轻松拥有美丽和时尚的渴望。美，如此简单。"/>

    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/init.css">
    <link rel="stylesheet" href="static/css/main.css">
    <script   src="https://code.jquery.com/jquery-1.12.4.js"   integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="   crossorigin="anonymous"></script>
    <script type="text/javascript" src="static/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>/static/js/jquery.flexslider-min.js"></script>

    
</head>

<body style="background: #ebeaea;">
    <div class="index_banner z-index-2">
        <div class="head index_head">
            <?php echo template('public','head')?>

            <!--head start-->
            <!--#include file="inc/head.htm" -->
            <!--head end-->
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
<!--         <div class="idx_banner_txt">
            <span class="idx_banner_txt_en">
                <small>TO BE BEAUTIFUL<br> </small>
                <span class="idx_banner_txt_en_big">SO SIMPLE<br></span>
            </span>

            <span class="idx_banner_txt_cn">美，如此简单</span>
        </div> -->
        <!-- <img src="static/images/index_01.png" class="index_banner_img"> -->
    </div>
    <div class="container index_two" align="center" style="margin-top: 3vw">
        <div class="index_two_txt">
            为每一位用户，每一位女性带来轻松简单的美丽，<br> 主张 <span class="fontRed">“每个人都可以通过给自己造型的小改变，去大胆创造属于自己的美”</span>。
        </div>
        <img src="static/images/ers_03.png">
        <div class="index_two_bc"></div>
    </div>
    <div class="index_three ers1">
        <img class="esr1img" width="100%" src="static/images/cp_bg.jpg" usemap="#map1501133001" border="0">
        <map id="map" name="map1501133001">
            <area shape="rect" coords="1,277,394,765" title="" href="/prolist/1/1"><area shape="rect" coords="403,278.5,748,810" title="" href="/prolist/2/1"><area target="_blank" shape="rect" coords="399,816,750,1308" title="" href="/prolist/4/1"><area target="_blank" shape="rect" coords="6,770,396,1306" title="" href="/prolist/3/1">
        </map>
        <div class="index_three_tl">
           <img src="static/images/ers_06.png">
            <p class="index_three_tl_eng">
                OUR PRODUCTS
            </p>
            <p class="index_three_tl_china">
                聚集造型小家电，涵盖四大主营品类
            </p>
        </div>
        <div class="index_three_t">
            <ul class="clearfix index_three_ul ">
                <li class="col-md-6 col-sm-6 col-xs-6">
                    <a href="<?=base_url()?>prolist/1/1">
                        <img src="static/images/index_02_03-02.png">
                        <div class="index_three_fu index_three_fu1">
                            <p class="eng"> HAIR <br>TOOLS</p>
                            <p class="index_three_zw">烫发器 ▸</p>
                            <p class="index_three_num"> 01</p>
                        </div>
                    </a>
                    <a href="<?=base_url()?>prolist/3/1">
                        <img src="static/images/index_02_11.png">
                        <div class="index_three_fu index_three_fu3">
                            <p class="eng_fu3">HAIR <br>CLIPPER </p>
                            <p class="index_three_zw_fu3">理发器 ▸</p>
                            <p class="index_three_num_nopadding">03</p>
                        </div>
                    </a>
                </li>
                <li class="col-md-6 col-sm-6 col-xs-6 tow">
                    <a href="<?=base_url()?>prolist/2/1">
                        <img src="static/images/index_02_03.png">
                        <div class="index_three_fu index_three_fu2">
                            <p class="eng">HAIR <br>DRIER</p>
                            <p class="index_three_zw">电吹风 ▸</p>
                            <p class="index_three_num">02</p>
                        </div>
                    </a>
                    <a href="<?=base_url()?>prolist/4/1">
                        <img src="static/images/index_02_14.png">
                        <div class="index_three_fu index_three_fu4">
                            <p class="eng">BEAUTY<br>HEALTH <br>SERIES <br></p>
                            <p class="index_three_zw">美容健康系列 ▸</p>
                            <p class="index_three_num">04</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
       
        <div style="background: #eae9e9;">
            <div class="container index_three_b_bg" style="background: #cecdcd;"></div>
        </div>
    </div>
    <div class="index_four">
        <div class="index_four_tl">
            <p class="index_three_tl_eng2">
                STYLE YOURSELF
            </p>
            <p class="index_three_tl_china2">
                我的私人造型师，百变造型随心变
            </p>
            <div class="index_line">
                <span>
                我型我造
                </span>
            </div>
        </div>
        <div class="container">
            <ul class="index_four_text_ul clearfix">
                <li class="col-md-3 col-sm-3 col-xs-6">
                    <a href="<?=base_url()?>mystyle3">
                        <p class="index_four_text_ul_tl">
                            魔发秀
                        </p>
                        <div class="index_four_text_ul_text" style="border-color: #64a6eb;">
                            <div class="index_four_text_ul_text_nr">
                                #不可思议的10分钟#，10分钟完成华丽蜕变
                            </div>
                        </div>
                    </a>
                </li>               
                <li class="col-md-3 col-sm-3 col-xs-6">
                    <a href="<?=base_url()?>mystyle4">
                        <p class="index_four_text_ul_tl">
                            达人秀场
                        </p>
                        <div class="index_four_text_ul_text" style="border-color: #ce42af;">
                            <div class="index_four_text_ul_text_nr">
                                魔发达人，秀出你的Style
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col-md-3 col-sm-3 col-xs-6">
                    <a href="<?=base_url()?>mystyle">
                        <p class="index_four_text_ul_tl">
                            潮流发型
                        </p>
                        <div class="index_four_text_ul_text" style="border-color: #70a33d;">
                            <div class="index_four_text_ul_text_nr">
                                个性潮流发型，下一个时尚博主就是你
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col-md-3 col-sm-3 col-xs-6">
                    <a href="<?=base_url()?>mystyle2">
                        <p class="index_four_text_ul_tl">
                            未来发型趋势
                        </p>
                        <div class="index_four_text_ul_text" style="border-color: #ead15d;">
                            <div class="index_four_text_ul_text_nr">
                                抓住未来发型趋势，走在时尚前沿
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <ul class="index_fourimg_ul clearfix">
            <li class="col-md-3 col-sm-3 col-xs-6">
                <a href="<?=base_url()?>mystyle3">
                <img src="static/images/index_01_21-08.png">
                <em class="play"></em>
                </a>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <a href="<?=base_url()?>mystyle4">
                <img src="static/images/index_27.png">
                </a>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <a href="<?=base_url()?>mystyle">
                <img src="static/images/index_01_20.png">
                </a>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <a href="<?=base_url()?>mystyle2">
                <img src="static/images/index_01_21.png">
                </a>
            </li>
            
            
        </ul>
        <div class="index_four_more">
            <div class="index_four_more_main ">
                <a href="<?=base_url()?>mystyle3" class="eng">MORE</a>
            </div>
        </div>
    </div>
    <div class="caitiao container">
        <img src="static/images/about1_46.png">
    </div>
    <?php echo template('public','footer')?>

    <!--footer start-->
    <!--#include file="inc/footer.htm" -->
    <!--footer end-->


</body>

</html>