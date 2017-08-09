<!DOCTYPE html>
<html class="  ext-strict">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <title><?=$mytitle?></title>
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
            <a href="mystyle">潮流发型</a>
            <a href="mystyle2"  class="ahover">未来发型趋势</a>
        </div>
    </div>
    <div class="my_style_ban" style="background: url(static/images/11_mystyle-02.jpg) no-repeat center;background-size: cover;color: #ddb191;">
        <!-- <div class="container">
            <div class="my_ban_main">
                <div class="my_style_big_tl" style="padding-bottom: 0.82vw;">
                    未来发型趋势
                </div>
                <div class="mystyle2_hengxian">
                </div>
                <br> 每一年，新一季的潮流趋势发布后，衣橱大换血，化妆品护肤品更新换代，发型“洗心革面”一番。<br> 就近几年的造型来看，不难发现，当下流行的发型更趋于简洁大气风范，女性的自信张扬及独立个性被放大， <br> 中长发及短发的各种造型开始逐渐被追捧，成为时尚潮流趋势。
            </div>
        </div> -->
    </div>
    <div class="my_syle_b myst2">
        <ul class="clearfix mystyle_ul container" style="background: #dedddd;">
            <?php if (count($hairs['未来发型趋势']) > 0): ?>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <img src="images/<?=$hairs['未来发型趋势'][0]['image']?>">
                <em class="huijiao"></em>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6 mystyle_zi">
                <span class="qushi">趋势一</span>
                <div class="mystyle_zi_text">
                    <p><?=$hairs['未来发型趋势'][0]['title']?></p>
                    <?=$hairs['未来发型趋势'][0]['content']?>
                </div>
            </li>
            <?php endif; ?>
            <?php if (count($hairs['未来发型趋势']) > 1): ?>

            <li class="col-md-3 col-sm-3 col-xs-6">
                <img src="images/<?=$hairs['未来发型趋势'][1]['image']?>">
                <em class="huijiao"></em>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6 mystyle_zi">
                <span class="qushi">趋势二</span>
                <div class="mystyle_zi_text">
                    <p><?=$hairs['未来发型趋势'][1]['title']?></p>
                    <?=$hairs['未来发型趋势'][1]['content']?>
                </div>
            </li>
            <?php endif; ?>

        </ul>
        <ul class="clearfix mystyle_ul container" style="background: #ffffff;">
            <?php if (count($hairs['未来发型趋势']) > 2): ?>
            <li class="col-md-3 col-sm-3 col-xs-6 mystyle_zi">
                <span class="qushi1">趋势三</span>
                <div class="mystyle_zi_text">
                    <p><?=$hairs['未来发型趋势'][2]['title']?></p>
                    <?=$hairs['未来发型趋势'][2]['content']?>
                </div>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <img src="images/<?=$hairs['未来发型趋势'][2]['image']?>">
                <em class="baijiao"></em>
            </li>
            <?php endif; ?>
            <?php if (count($hairs['未来发型趋势']) > 3): ?>
            <li class="col-md-3 col-sm-3 col-xs-6 mystyle_zi">
                <span class="qushi1">趋势四</span>
                <div class="mystyle_zi_text">
                    <p><?=$hairs['未来发型趋势'][3]['title']?></p>
                    <?=$hairs['未来发型趋势'][3]['content']?>
                </div>
            </li>
            <li class="col-md-3 col-sm-3 col-xs-6">
                <img src="images/<?=$hairs['未来发型趋势'][3]['image']?>">
                <em class="baijiao"></em>
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