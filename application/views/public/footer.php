  <div class="footer">
        <a href="javascript:;" class="topbtn"></a>

        <div class="footer1">
                <div class="footer1_1">
                    <img src="<?=base_url();?>/static/images/index_37.jpg" alt="雷瓦造型小家电_美·如此简单">
                </div>
                <div class="footer1_2">
                    <img src="<?=base_url();?>/static/images/weixin.png">
                    <p>官方微信</p>
                </div>

                <div class="footer1_3">
                    <img src="<?=base_url();?>/static/images/weibo.png">
                    <p>官方微博</p>
                </div>
        </div>
        <div class="clearfix"></div>
        <div class="footer_2">
            <ul class="clearfix">
                <li>
                    <a href="<?=base_url()?>about">关于雷瓦</a>
                </li>
                <li>
                    <a href="<?=base_url()?>pro">造型产品</a>
                </li>
                <li>
                    <a href="<?=base_url()?>mystyle">我型我造</a>
                </li>
                <li>
                    <a href="<?=base_url()?>experience">贴心体验</a>
                </li>
                <li>
                    <a href="<?=base_url()?>news">雷瓦资讯</a>
                </li>
                <li>
                    <a href="http://style.riwa.com">雷瓦造型</a>
                </li>
                <li>
                    <a href="<?=base_url()?>contactus">联系我们</a>
                </li>
                <li>
                    <a href="https://store.taobao.com/shop/view_shop.htm?spm=a220m.1000862.1000730.2.7c054992Oug8fp&user_number_id=528707031&rn=5f3a8ae8a86b229cfb6abd99daa31d70" target="blank">官方商城</a>
                </li>
            </ul>
        </div>
        <div class="link">
            <!-- <ul class="title clearfix">
                <li>
                    友情链接
                </li>
            </ul> -->
            <ul class="clearfix">
                <?php foreach($links as $v):?>
                <li>
                    <a href="<?=$v['link']?>"><?=$v['name']?></a>
                </li>
                <?php endforeach;?>

            </ul>
        </div>
        <div class="footer_3">
            <p>
                ©2009-2015雷瓦版权所有，并保留所有权利&nbsp;<a href="http://www.miit.gov.cn">沪ICP备13023603号-1</a>
            </p>
            <img src="<?=base_url();?>/static/images/index_45.png">
        </div>
    </div>
    <div style="display:none;"><script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?c09ed52be8f2ab42b1a1c4bbce43abbd";
        var s = document.getElementsByTagName("script")[0]; 
        s.parentNode.insertBefore(hm, s);
    })();
    </script></div>
    <script type="text/javascript" src="<?=base_url();?>static/js/main.js"></script>
