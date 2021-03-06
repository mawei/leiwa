<!DOCTYPE html>
<html class="  ext-strict">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta name="baidu-site-verification" content="ovrGnvoVMb" />
    <title><?=$mytitle?></title>
    <meta name="keywords" content="我型我造，卷发棒，卷发器，直板夹，直发器，个人护理，卷发棒品牌，雷瓦卷发棒，雷瓦吹风机"/>
    <meta name="description" content="雷瓦始终专注私人造型领域，为每一个爱美女性提供最方便快捷的造型产品。"/>

    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/init.css">
    <link rel="stylesheet" href="static/css/main.css">
    <script   src="https://code.jquery.com/jquery-1.12.4.js"   integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="   crossorigin="anonymous"></script>
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
            <a href="mystyle3">魔发秀</a>
            <a href="mystyle4">达人秀场</a>
            <a href="mystyle" class="ahover">潮流发型</a>
            <a href="mystyle2">未来发型趋势</a>
        </div>
    </div>
    <div class="my_style_ban">
        <!-- <div class="container">
            <div class="my_ban_main">
                <div class="my_style_big_tl">
                    潮流发型
                </div>
                如果说学会美妆是你接近时尚的基石，学会搭配服装是你走入时尚大门的钥匙，那么拥有漂亮发型就是你挤进时尚界的板砖
                <br>——<br> 把那些跟你穿的差不多的女的都拍下神坛。在这个发型热潮的社会，发型设计的不同，决定着气质与风格的不同，发型可以<br>修饰脸型、可以为服装造型加分、可以传递性格，甚至可以影响人生。
            </div>
        </div> -->
    </div>
    <div class="my_syle_b">
        <div class="mystyle_tl">
            时尚修颜系
        </div>
        <ul class="clearfix mystyle_ul container" style="background: #dedddd;">
            <?php if (count($hairs['时尚修颜系']) > 0): ?>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <img src="images/<?=$hairs['时尚修颜系'][0]['image']?>">
                <em class="huijiao"></em>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6 mystyle_zi">
                <div class="mystyle_zi_text">
                    <p><?=$hairs['时尚修颜系'][0]['title']?></p>
                    <?=$hairs['时尚修颜系'][0]['content']?>
                </div>
            </li>
            <?php endif; ?>
            <?php if (count($hairs['时尚修颜系']) > 1): ?>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <img src="images/<?=$hairs['时尚修颜系'][1]['image']?>">
                <em class="huijiao"></em>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6 mystyle_zi">
                <div class="mystyle_zi_text">
                    <p><?=$hairs['时尚修颜系'][1]['title']?></p>
                    <?=$hairs['时尚修颜系'][1]['content']?>
                </div>
            </li>
            <?php endif; ?>

        </ul>
        <ul class="clearfix mystyle_ul container" style="background: #ffffff;">
            <?php if (count($hairs['时尚修颜系']) > 2): ?>
            <li class="col-md-3 col-sm-3 col-xs-6 mystyle_zi">
                <div class="mystyle_zi_text">
                    <p><?=$hairs['时尚修颜系'][2]['title']?></p>
                    <?=$hairs['时尚修颜系'][2]['content']?>
                </div>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <img src="images/<?=$hairs['时尚修颜系'][2]['image']?>">
                <em class="baijiao"></em>
            </li>
            <?php endif; ?>
            <?php if (count($hairs['时尚修颜系']) > 3): ?>
            <li class="col-md-3 col-sm-3 col-xs-6 mystyle_zi">
                <div class="mystyle_zi_text">
                    <p><?=$hairs['时尚修颜系'][3]['title']?></p>
                    <?=$hairs['时尚修颜系'][3]['content']?>
                </div>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <img src="images/<?=$hairs['时尚修颜系'][3]['image']?>">
                <em class="baijiao"></em>
            </li>
            <?php endif; ?>
        </ul>
        <div class="mystyle_tl">
            清纯减龄系
        </div>
        <ul class="clearfix mystyle_ul container mystyle_ul_red" style="background: #d7001d;">
            <?php if (count($hairs['清纯减龄系']) > 0): ?>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <img src="images/<?=$hairs['清纯减龄系'][0]['image']?>">
                <em class="hjiao"></em>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6 mystyle_zi">
                <div class="mystyle_zi_text">
                    <p><?=$hairs['清纯减龄系'][0]['title']?></p>
                    <?=$hairs['清纯减龄系'][0]['content']?>
                </div>
            </li>
            <?php endif; ?>
            <?php if (count($hairs['清纯减龄系']) > 1): ?>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <img src="images/<?=$hairs['清纯减龄系'][1]['image']?>">
                <em class="hjiao"></em>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6 mystyle_zi">
                
                <div class="mystyle_zi_text">
                    <p><?=$hairs['清纯减龄系'][1]['title']?></p>
                    <?=$hairs['清纯减龄系'][1]['content']?>
                </div>
            </li>
            <?php endif; ?>
        </ul>
        <ul class="clearfix mystyle_ul container" style="background: #fff;">
            <?php if (count($hairs['清纯减龄系']) > 2): ?>
            <li class="col-md-3 col-sm-3 col-xs-6 mystyle_zi">
                
                <div class="mystyle_zi_text">
                    <p><?=$hairs['清纯减龄系'][2]['title']?></p>
                    <?=$hairs['清纯减龄系'][2]['content']?>
                </div>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <img src="images/<?=$hairs['清纯减龄系'][2]['image']?>">
                <em class="baijiao"></em>
            </li>
            <?php endif; ?>
            <?php if (count($hairs['清纯减龄系']) > 3): ?>
            <li class="col-md-3 col-sm-3 col-xs-6 mystyle_zi">
                
                <div class="mystyle_zi_text">
                    <p><?=$hairs['清纯减龄系'][3]['title']?></p>
                    <?=$hairs['清纯减龄系'][3]['content']?>
                </div>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <img src="images/<?=$hairs['清纯减龄系'][3]['image']?>">
                <em class="baijiao"></em>
            </li>
            <?php endif; ?>
        </ul>
        <div class="mystyle_tl">
            职场御姐系
        </div>
        <ul class="clearfix mystyle_ul container" style="background: #dedddd;">
            <?php if (count($hairs['职场御姐系']) > 0): ?>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <img src="images/<?=$hairs['职场御姐系'][0]['image']?>">
                <em class="huijiao"></em>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6 mystyle_zi">
                
                <div class="mystyle_zi_text">
                    <p><?=$hairs['职场御姐系'][0]['title']?></p>
                    <?=$hairs['职场御姐系'][0]['content']?>
                </div>
            </li>
            <?php endif; ?>
            <?php if (count($hairs['职场御姐系']) > 1): ?>

            <li class="col-md-3 col-sm-3 col-xs-6">
                <img src="images/<?=$hairs['职场御姐系'][1]['image']?>">
                <em class="huijiao"></em>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6 mystyle_zi">
                
                <div class="mystyle_zi_text">
                    <p><?=$hairs['职场御姐系'][1]['title']?></p>
                    <?=$hairs['职场御姐系'][1]['content']?>
                </div>
            </li>
            <?php endif; ?>

        </ul>
        <ul class="clearfix mystyle_ul container mystyle_ul_red" style="background: #d7001d;">
            <?php if (count($hairs['职场御姐系']) > 2): ?>
            <li class="col-md-3 col-sm-3 col-xs-6 mystyle_zi">
                
                <div class="mystyle_zi_text">
                    <p><?=$hairs['职场御姐系'][2]['title']?></p>
                    <?=$hairs['职场御姐系'][2]['content']?>
                </div>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <img src="images/<?=$hairs['职场御姐系'][2]['image']?>">
                <em class="hjiaor"></em>
            </li>
            <?php endif; ?>

            <?php if (count($hairs['职场御姐系']) > 3): ?>
            <li class="col-md-3 col-sm-3 col-xs-6 mystyle_zi">
                
                <div class="mystyle_zi_text">
                    <p><?=$hairs['职场御姐系'][3]['title']?></p>
                    <?=$hairs['职场御姐系'][3]['content']?>
                </div>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <img src="images/<?=$hairs['职场御姐系'][3]['image']?>">
                <em class="hjiaor"></em>
            </li>
            <?php endif; ?>

        </ul>
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