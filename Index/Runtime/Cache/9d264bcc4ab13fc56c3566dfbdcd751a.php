<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>海外购</title>
    <link type="text/css" rel="stylesheet" href="https://cdn.bootcss.com/normalize/6.0.0/normalize.min.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/libs/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/sidebar.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/home.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/footer.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/header.css" />
    <script type="text/javascript" src="__ROOT__/Index/Common/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/slideshow.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/accesories.css" />
    <script type="text/javascript" src="__ROOT__/Index/Common/js/slideshow.js"></script>


</head>

<body>
    <!-- 头部 -->
    <div>
        <header>
    <!-- 头部 -->
    <div class="container-fluid" title="top">
        <div class="container" title="top_logo">
            <div class="top_logo_fled">
                <a href="#">微乐美瞳网</a>
            </div>
            <div class="top_logo_rled">
                <span>Hi~[
                        <a href="#">请登录</a>
                        ][
                        <a href="#">免费注册</a>
                        ]
                    </span>
                <!-- 购物车 -->
                <a href="#" title="che">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                </a>
                <a href="#" class="top_logo_rled_add">购物车</a>
                <a href="#" class="top_logo_rled_add" title="red">0</a>
                <!-- 下箭头 -->
                <a href="#">
                    <i class="glyphicon glyphicon-menu-down"></i>
                </a>
                <a href="#" class="top_logo_rled_add">我的订单</a>
                <a href="#" class="top_logo_rled_add">我的收藏</a>
                <a href="#" class="top_logo_rled_add">领取优惠券</a>
                <a href="#" class="top_logo_rled_add">订单查询</a>
                <!-- 消息 -->
                <a href="#">
                    <i class="glyphicon glyphicon-envelope"></i>
                </a>
                <a href="#" class="top_logo_rled_add">消息</a>
                <a href="#" class="top_logo_rled_add">收藏微乐</a>
            </div>
        </div>
    </div>
    <!-- 搜索部分 -->
    <div class="container-fluid" title="center">
        <div class="container" title="center_input">
            <a class="center_input_logo" href="#">
                <img src="__ROOT__/Index/Common/img/logo_02.png" alt="LOGO">
            </a>
            <div class="center_input_form">
                <input type="text" placeholder="请输出商品">
                <a href="#">
                    <img src="__ROOT__/Index/Common/img/search_01.png" alt="搜索">
                </a>
                <!-- 推荐 -->
                <div class="center_input_tuijian">热门搜索：
                    <a href="#">OLIVI</a>|
                    <a href="#">轻瞳</a>|
                    <a href="#">硅水凝胶</a>|
                    <a href="#">活动</a>|
                </div>
            </div>
            <div class="center_input_News">
                <span>NEWS:</span>
                <div class="center_input_News_conten">
                    <a title="fl" href="#">VVVLEHK</a>
                    <a title="rl" href="#">微信客服</a>
                </div>
            </div>

        </div>
    </div>
    <!-- 导航部分 -->
    <div class="container-fluid" title="bootm">
        <div class="container" title="bootm_navie">
            <a href="#" class="bootm_naviea_hove" title="red">
                <p class="naviea_hove" title="bg">HOME</p>
                <p class="naviea_hove" title="ms">首页</p>
            </a>
            <a href="#" class="bootm_naviea_hove">
                <p class="naviea_hove" title="bg">LENS</p>
                <p class="naviea_hove" title="ms">美瞳</p>
            </a>
            <a href="#" class="bootm_naviea_hove">
                <p class="naviea_hove" title="bg">EYE DROPS</p>
                <p class="naviea_hove" title="ms">海外购</p>
            </a>
            <a href="#" class="bootm_naviea_hove">
                <p class="naviea_hove" title="bg">PARTS</p>
                <p class="naviea_hove" title="ms">超级配件</p>
            </a>
            <a href="#" class="bootm_naviea_hove">
                <p class="naviea_hove" title="bg">NEW</p>
                <p class="naviea_hove" title="ms">新品</p>
            </a>
            <a href="#" class="bootm_naviea_hove">
                <p class="naviea_hove" title="bg">HOT</p>
                <p class="naviea_hove" title="ms">热销宝贝</p>
            </a>
        </div>
    </div>
</header>
<script>
    $(".bootm_naviea_hove").each(function(i) {
        $(this).click(function() {
            $(this).css("color", "red");
            $(".bootm_naviea_hove" + ":gt(" + i + ")").css("color", "#000");
            $(".bootm_naviea_hove" + ":lt(" + i + ")").css("color", "#000");
        });

    });
</script>
    </div>
    <!-- 轮播图 -->
    <div>
        <div class="lunbo" id="lunbo">
    <ul id="lunboUl" class="lunboUl">
        <li><a href="##"><img src="__ROOT__/Index/Common/img/img_lens/lens_imgs01.jpg" alt="" /></a></li>
        <li><a href="##"><img src="__ROOT__/Index/Common/img/img_lens/lens_imgs02.jpg" alt="" /></a></li>
        <li><a href="##"><img src="__ROOT__/Index/Common/img/img_lens/lens_imgs01.jpg" alt="" /></a></li>
    </ul>	
        <ol id="lunboOl">
            <li class="actBtn"></li>
            <li></li>
        </ol>
    <a href="##" id="rightBtn"></a>
    <a href="##" id="leftBtn"></a>
</div>
    </div>
    <!-- 筛选部分 -->
    <div class="container-fluid" mpod="xia">
        <div class="schon_choice">
            <span>已选条件：</span>
            <a class="vacum_up" href="#">清空筛选条件</a>
            <a class="select" href="#">
                <span class="select_data">乐蹲</span>
                <i class="glyphicon glyphicon-remove"></i>
            </a>

        </div>
        <div class="containerre" title="select_box">
            <div class="machine" title="vary">
                <div class="machine_sort">品牌：</div>
                <span class="mores_sq">
                    <span>展开</span>
                <i class="glyphicon glyphicon-triangle-bottom"></i>
                </span>
                <div class="machine_Kindd" monde="kind">
                    <a class="nolimit" href="#">不限</a>

                    <a class="nolimit_choice" href="#">博士伦</a>
                    <a class="nolimit_choice" href="#">爱尔康</a>
                    <a class="nolimit_choice" href="#">全能</a>
                    <a class="nolimit_choice" href="#">韩国07护理夜</a>
                    <a class="nolimit_choice" href="#">SAUFLON沙福隆</a>
                    <a class="nolimit_choice" href="#">乐敦</a>
                    <a class="nolimit_choice" href="#">参天製薬</a>
                    <a class="nolimit_choice" href="#">千寿製薬</a>
                    <a class="nolimit_choice" href="#">狮王LION</a>
                    <a class="nolimit_choice" href="#">小林製薬</a>
                    <a class="nolimit_choice" href="#">SEED</a>
                    <a class="nolimit_choice" href="#">三菱制药</a>
                    <a class="nolimit_choice" href="#">蓝牌W</a>
                    <a class="nolimit_choice" href="#">Make skip</a>
                    <a class="nolimit_choice" href="#">innoxa</a>

                </div>


            </div>
            <div class="machine">
                <div class="machine_sort">品类：</div>
                <span class="mores_sq">
                    <span>展开</span>
                <i class="glyphicon glyphicon-triangle-bottom"></i>
                </span>
                <div class="machine_Kindd">
                    <a class="nolimit" href="#">不限</a>
                    <a class="nolimit_choice" href="#">护理液</a>
                    <a class="nolimit_choice" href="#">洗眼液</a>
                    <a class="nolimit_choice" href="#">滴眼液</a>
                </div>

            </div>
            <div class="machine">
                <div class="machine_sort">价格：</div>
                <a class="mores_sq" href="#">
                    <span>展开</span>
                    <i class="glyphicon glyphicon-triangle-bottom"></i>
                </a>
                <div class="machine_Kindd">
                    <a class="nolimit" href="#">不限</a>
                    <a class="nolimit_choice" href="#">100元以下</a>
                    <a class="nolimit_choice" href="#">100-200元</a>
                    <a class="nolimit_choice" href="#">200元以上</a>
                </div>

            </div>
            <div class="machine">
                <div class="machine_sort">适用于：</div>
                <span class="mores_sq">
                    <span>展开</span>
                <i class="glyphicon glyphicon-triangle-bottom"></i>
                </span>
                <div class="machine_Kindd">
                    <a class="nolimit" href="#">不限</a>
                    <a class="nolimit_choice" href="#">佩戴隐形眼镜使用</a>
                    <a class="nolimit_choice" href="#">裸眼使用</a>
                </div>

            </div>
            <div class="machine">
                <div class="machine_sort">价格：</div>
                <span class="mores_sq">
                    <span>展开</span>
                <i class="glyphicon glyphicon-triangle-bottom"></i>
                </span>
                <div class="machine_Kindd">
                    <a class="nolimit" href="#">不限</a>

                    <a class="nolimit_choice" href="#">去红血丝</a>
                    <a class="nolimit_choice" href="#">去黄</a>
                    <a class="nolimit_choice" href="#">消除疲劳</a>
                    <a class="nolimit_choice" href="#">炎症治疗</a>
                    <a class="nolimit_choice" href="#">眼睛养护</a>
                    <a class="nolimit_choice" href="#">缓解佩戴隐形不适</a>
                    <a class="nolimit_choice" href="#">营养养护</a>





                </div>

            </div>
        </div>
    </div>

    <!-- 侧边栏 -->
    <div class="sidebar_warp">
    <div class="sidebar">
        <ul class="sidebar_nav">
            <li>
                <i class="profile_icon"></i>
                <span>个人中心</span>
            </li>
            <li class="sbar_cat">
                <i class="sbar_cat_icon"></i>
                <p>购物袋</p>
                <i class="sbar_nub_icon">0</i>
            </li>
            <li>
                <i class="serivce_icon"></i>
                <span class="conact_img"><img src="__ROOT__/Index/Common/img/conact_float.png" alt="联系方式"/></span>
            </li>
            <li>
                <i class="favor_icon"></i>
                <span>我的收藏</span>
            </li>
            <li>
                <i class="history_icon"></i>
                <span>我看过的</span>
            </li>
            <li>
                <i class="qrcode_icon"></i>
                <span class="qrcode"><img src="__ROOT__/Index/Common/img/qrcode.png" alt="微信客服"/></span>
            </li>
            <li class="sbar_btm sbar_top">
                <i class="sbar_top_icon"></i>
                <span>返回顶部</span>
            </li>
            <li class="sbar_btm sbar_close">
                <i class="sbar_close_icon"></i>
                <span>关闭工具栏</span>
            </li>
        </ul>
    </div>
    <div class="sidebar_tool">
        <img src="__ROOT__/Index/Common/img/float_tool.png" alt="tool" />
    </div>
    <div class="sidebar_show">

    </div>
</div>
    <script type="text/javascript" src="__ROOT__/Index/Common/js/sidebar.js"></script>
    <script src="__ROOT__/Index/Common/js/accesories.js"></script>
</body>

</html>