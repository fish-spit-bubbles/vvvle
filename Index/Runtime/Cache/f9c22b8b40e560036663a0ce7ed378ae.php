<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME | 首页</title>
    <link type="text/css" rel="stylesheet" href="https://cdn.bootcss.com/normalize/6.0.0/normalize.min.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/libs/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/home.css" />
    <!-- 头部尾部侧边栏CSS -->
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/guard.css" />
    <script type="text/javascript" src="__ROOT__/Index/Common/js/jquery.min.js"></script>
    <script type="text/javascript" src="__ROOT__/Index/Common/js/angular.min.js"></script>
</head>

<body ng-app="myapps" ng-controller="mycontroller">
    <!--首页头部  -->
    <div>
        <header>
    <!-- 头部 -->
    <div class="container-fluid" title="top">
        <div class="container" title="top_logo">
            <div class="top_logo_fled">
                <a href="#">微乐美瞳网</a>
            </div>
            <div class="top_logo_rled">
                <span>Hi~
                        <a ng-cloak ng-show="<?php echo ($judge1); ?>" href="__APP__/Login/login">[请登录]</a>                        
                        <a ng-cloak ng-show="<?php echo ($judge1); ?>" href="__APP__/Register/register">[免费注册]</a>                        
                        <a ng-cloak ng-show="<?php echo ($judge); ?>" ><?php echo ($username); ?>,欢迎回来！</a>
                        <a ng-cloak ng-show="<?php echo ($judge); ?>" href="__APP__/UserCenter/userCenter">[用户中心]</a>                        
                        <a ng-cloak ng-show="<?php echo ($judge); ?>" href="__APP__/Index/loginout">[退出]</a>  
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
            <a href="__APP__/Index/index" class="bootm_naviea_hove" title="<?php echo ($index); ?>">
                <p class="naviea_hove" title="bg">HOME</p>
                <p class="naviea_hove" title="ms">首页</p>
            </a>
            <a href="__APP__/Lens/lens" class="bootm_naviea_hove" title="<?php echo ($lens); ?>">
                <p class="naviea_hove" title="bg">LENS</p>
                <p class="naviea_hove" title="ms">美瞳</p>
            </a>
            <a href="__APP__/Accesories/accesories" class="bootm_naviea_hove" title="<?php echo ($accesories); ?>">
                <p class="naviea_hove" title="bg">EYE DROPS</p>
                <p class="naviea_hove" title="ms">海外购</p>
            </a>
            <a href="__APP__/Parts/parts" class="bootm_naviea_hove" title="<?php echo ($parts); ?>">
                <p class="naviea_hove" title="bg">PARTS</p>
                <p class="naviea_hove" title="ms">超级配件</p>
            </a>
            <a href="__APP__/NewProduct/newProduct" class="bootm_naviea_hove" title="<?php echo ($newProduct); ?>">
                <p class="naviea_hove" title="bg">NEW</p>
                <p class="naviea_hove" title="ms">新品</p>
            </a>
            <a href="__APP__/Hot/hot" class="bootm_naviea_hove" title="<?php echo ($hot); ?>">
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
    <!--首页主体  -->
    <div class="home_page container">
        <div class="home_page_top row clearfix">
            <div class="home_sub_nav">
                <ul class="sub_nav">
                    <li class="sub_nav_item">
                        <a href="#" class="sub_hover"><i class="bg-crow"></i><span>超人气款</span></a>
                        <div class="sub_show clearfix">
                            <div class="show_left">
                                <ul class="show_nav">
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/rq1.png" alt="超人气款">
                                            <span>轻瞳<br />轻芯巧克力</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/rq2.png" alt="超人气款">
                                            <span>OLIVI<br />维也纳巧克力</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/rq3.png" alt="超人气款">
                                            <span>NEO<br />小黑环</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/rq4.png" alt="超人气款">
                                            <span>Bebe<br />琥珀色</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="show_right">
                                <div class="right_up">
                                    <a href="##"><img src="__ROOT__/Index/Common/img/img_home/neo.jpg" alt=""></a>
                                </div>
                                <div class="right_down">
                                    <a href="##"><img src="__ROOT__/Index/Common/img/img_home/OS CHOCOLATE.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sub_nav_item">
                        <a href="#" class="sub_hover"><i class="bg-leaf"></i><span>自然舒适</span></a>
                        <div class="sub_show clearfix">
                            <div class="show_left">
                                <ul class="show_nav">
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/zr1.png" alt="超人气款">
                                            <span>轻瞳<br />茶束棕</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/zr2.png" alt="超人气款">
                                            <span>OLIVI<br />丝滑巧克力</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/zr3.png" alt="超人气款">
                                            <span>NEO<br />三代巧克力</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/zr4.png" alt="超人气款">
                                            <span>Bebe<br />魔术巧克力</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="show_right">
                                <div class="right_up">
                                    <a href="##"><img src="__ROOT__/Index/Common/img/img_home/EOSJZ.jpg" alt=""></a>
                                </div>
                                <div class="right_down">
                                    <a href="##"><img src="__ROOT__/Index/Common/img/img_home/gsnj.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sub_nav_item">
                        <a href="#" class="sub_hover"><i class="bg-hx"></i><span>混血冷艳</span></a>
                        <div class="sub_show clearfix">
                            <div class="show_left">
                                <ul class="show_nav">
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/hx1.png" alt="超人气款">
                                            <span>轻瞳<br />圣洛灰</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/hx2.png" alt="超人气款">
                                            <span>哆米爱<br />花漾四色灰</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/hx3.png" alt="超人气款">
                                            <span>NEO<br />皇后四色灰</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/hx4.png" alt="超人气款">
                                            <span>AeveCon<br />美莎灰</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="show_right">
                                <div class="right_up">
                                    <a href="##"><img src="__ROOT__/Index/Common/img/img_home/bnss.jpg" alt=""></a>
                                </div>
                                <div class="right_down">
                                    <a href="##"><img src="__ROOT__/Index/Common/img/img_home/hxss.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sub_nav_item">
                        <a href="#" class="sub_hover"><i class="bg-xs"></i><span>学生白领</span></a>
                        <div class="sub_show clearfix">
                            <div class="show_left">
                                <ul class="show_nav">
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/xs1.png" alt="超人气款">
                                            <span>轻瞳<br />轻芯巧克力</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/xs2.png" alt="超人气款">
                                            <span>EOS<br />鹿眼巧克力</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/xs3.png" alt="超人气款">
                                            <span>Bescon<br />C7奶茶巧克力</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/xs4.png" alt="超人气款">
                                            <span>芭比爱<br />幻影巧克力</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="show_right">
                                <div class="right_up">
                                    <a href="##"><img src="__ROOT__/Index/Common/img/img_home/dreamcon tx.jpg" alt=""></a>
                                </div>
                                <div class="right_down">
                                    <a href="##"><img src="__ROOT__/Index/Common/img/img_home/neowdjm.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sub_nav_item">
                        <a href="#" class="sub_hover"><i class="bg-tm"></i><span>甜美气质</span></a>
                        <div class="sub_show clearfix">
                            <div class="show_left">
                                <ul class="show_nav">
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/tm1.png" alt="超人气款">
                                            <span>轻瞳<br />玛丽甜黑</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/tm2.png" alt="超人气款">
                                            <span>OLIVI<br />赫本棕</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/tm3.png" alt="超人气款">
                                            <span>7 Modern<br />叶子自然棕</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/tm4.png" alt="超人气款">
                                            <span>EYE-DO<br />金棕</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="show_right">
                                <div class="right_up">
                                    <a href="##"><img src="__ROOT__/Index/Common/img/img_home/geo.jpg" alt=""></a>
                                </div>
                                <div class="right_down">
                                    <a href="##"><img src="__ROOT__/Index/Common/img/img_home/neolx.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sub_nav_item">
                        <a href="#" class="sub_hover"><i class="bg-rp"></i><span>日抛美瞳</span></a>
                        <div class="sub_show clearfix">
                            <div class="show_left">
                                <ul class="show_nav">
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/rp1.png" alt="超人气款">
                                            <span>NEO<br />巧克力30片</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/rp2.png" alt="超人气款">
                                            <span>CaraEyes<br />清新棕5片装</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/rp3.png" alt="超人气款">
                                            <span>可芙蕾<br /> 公主丽棕10片</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/rp4.png" alt="超人气款">
                                            <span>Kiss me<br />日抛10片装</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="show_right">
                                <div class="right_up">
                                    <a href="##"><img src="__ROOT__/Index/Common/img/img_home/neo30.jpg" alt=""></a>
                                </div>
                                <div class="right_down">
                                    <a href="##"><img src="__ROOT__/Index/Common/img/img_home/kfl.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sub_nav_item">
                        <a href="#" class="sub_hover"><i class="bg-qb"></i><span>全部品牌</span></a>
                        <div class="sub_show clearfix sub_show_qb">
                            <div class="show_list_item">
                                <span>A</span>
                                <p><a href="##">AeveCon</a></p>
                                <p><a href="##">安瞳</a></p>
                            </div>
                            <div class="show_list_item">
                                <span>B</span>
                                <p><a href="##">Bescon</a></p>
                                <p><a href="##">Baby color</a></p>
                            </div>
                            <div class="show_list_item">
                                <span>D</span>
                                <p><a href="##">Dreamcon</a></p>
                                <p><a href="##">安瞳</a></p>
                                <p><a href="##">DorisCon</a></p>
                            </div>
                            <div class="show_list_item">
                                <span>E</span>
                                <p><a href="##">Eos</a></p>
                                <p><a href="##">Eye-do</a></p>
                            </div>
                            <div class="show_list_item">
                                <span>G</span>
                                <p><a href="##">Geo</a></p>
                                <p><a href="##">G&G</a></p>
                            </div>
                            <div class="show_list_item">
                                <span>H</span>
                                <p><a href="##">Hancon</a></p>
                            </div>
                            <div class="show_list_item">
                                <span>K</span>
                                <p><a href="##">可芙蕾</a></p>
                            </div>
                            <div class="show_list_item">
                                <span>M</span>
                                <p><a href="##">Mitata</a></p>
                                <p><a href="##">MIMO</a></p>
                                <p><a href="##">Maxlook</a></p>
                            </div>
                            <div class="show_list_item">
                                <span>N</span>
                                <p><a href="##">NEO</a></p>
                                <p><a href="##">7modern</a></p>
                            </div>
                            <div class="show_list_item">
                                <span>O</span>
                                <p><a href="##">OLIVI</a></p>
                            </div>
                            <div class="show_list_item">
                                <span>P</span>
                                <p><a href="##">PREMIUM ONE</a></p>
                            </div>
                            <div class="show_list_item">
                                <span>S</span>
                                <p><a href="##">Sio</a></p>
                                <p><a href="##">Seencon</a></p>
                                <p><a href="##">Super Size</a></p>
                                <p><a href="##">Sweet color</a></p>
                            </div>
                            <div class="show_list_item">
                                <span>T</span>
                                <p><a href="##">TT-LENS</a></p>
                            </div>
                            <div class="show_list_item">
                                <span>V</span>
                                <p><a href="##">Vanilla kiss</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="sub_ad">
                    <img src="__ROOT__/Index/Common/img/img_home/ad_01.jpg" alt="ad">
                </div>
            </div>
            <div class="home_banner">
                <div class="banner_wrap">
                    <ul class="banner_imgs">
                        <li>
                            <a href="##"><img src="__ROOT__/Index/Common/img/img_home/banner4.jpg" alt="" /></a>
                        </li>
                        <li>
                            <a href="##"><img src="__ROOT__/Index/Common/img/img_home/banner2.jpg" alt="" /></a>
                        </li>
                        <li>
                            <a href="##"><img src="__ROOT__/Index/Common/img/img_home/banner3.jpg" alt="" /></a>
                        </li>
                        <li>
                            <a href="##"><img src="__ROOT__/Index/Common/img/img_home/banner1.jpg" alt="" /></a>
                        </li>
                    </ul>
                    <ul class="banner_num">

                    </ul>
                    <div class="banner_btn banner_btn_left">
                    </div>
                    <div class="banner_btn banner_btn_right">
                    </div>
                </div>
            </div>
        </div>
        <div class="home_page_ad">
            <a href="##"><img src="__ROOT__/Index/Common/img/img_home/neo1.jpg" alt="ad"></a>
            <a href="##"><img src="__ROOT__/Index/Common/img/img_home/7modern2.jpg" alt="ad"></a>
            <a href="##"><img src="__ROOT__/Index/Common/img/img_home/dreamcon3.jpg" alt="ad"></a>
        </div>
        <div class="home_salesList">
            <div class="title_01 title_warp">
                <strong>销量排行榜</strong>
                <span>SALES LIST</span>
            </div>
            <div class="home_salesList_content">
                <ul>
                    <li>
                        <a href="##"><img src="__ROOT__/Index/Common/img/img_home/41a.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="##"><img src="__ROOT__/Index/Common/img/img_home/41b.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="##"><img src="__ROOT__/Index/Common/img/img_home/41c.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="##"><img src="__ROOT__/Index/Common/img/img_home/41d.jpg" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="home_day_show">
            <div class="home_day clearfix">
                <div class="day_morning day_warp">
                    <div class="day_title clearfix">
                        <span>上班上学</span>
                        <span>Morning</span>
                    </div>
                    <div class="day_content">
                        <a href="##"><img src="__ROOT__/Index/Common/img/img_home/list_01.jpg" alt=""></a>
                    </div>
                    <ul class="day_warp_ul">
                        <li>
                            <a href="##">
                                <img src="__ROOT__/Index/Common/img/img_home/xs1.png" alt="" />
                                <p>OLIVI轻瞳</p>
                                <p>轻芯巧克力</p>
                            </a>
                        </li>
                        <li>
                            <a href="##">
                                <img src="__ROOT__/Index/Common/img/img_home/xs2.png" alt="" />
                                <p>OLIVI轻瞳</p>
                                <p>轻芯巧克力</p>
                            </a>
                        </li>
                        <li>
                            <a href="##">
                                <img src="__ROOT__/Index/Common/img/img_home/xs3.png" alt="" />
                                <p>OLIVI轻瞳</p>
                                <p>轻芯巧克力</p>
                            </a>
                        </li>
                        <li>
                            <a href="##">
                                <img src="__ROOT__/Index/Common/img/img_home/zr.png" alt="" />
                                <p>OLIVI轻瞳</p>
                                <p>轻芯巧克力</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="day_morning day_warp">
                    <div class="day_title day_title1 clearfix">
                        <span>闺蜜小聚</span>
                        <span>Afternoon</span>
                    </div>
                    <div class="day_content">
                        <a href="##"><img src="__ROOT__/Index/Common/img/img_home/list_02.jpg" alt=""></a>
                    </div>
                    <ul class="day_warp_ul">
                        <li>
                            <a href="##">
                                <img src="__ROOT__/Index/Common/img/img_home/zr1.png" alt="" />
                                <p>OLIVI轻瞳</p>
                                <p>轻芯巧克力</p>
                            </a>
                        </li>
                        <li>
                            <a href="##">
                                <img src="__ROOT__/Index/Common/img/img_home/zr2.png" alt="" />
                                <p>OLIVI轻瞳</p>
                                <p>轻芯巧克力</p>
                            </a>
                        </li>
                        <li>
                            <a href="##">
                                <img src="__ROOT__/Index/Common/img/img_home/zr3.png" alt="" />
                                <p>OLIVI轻瞳</p>
                                <p>轻芯巧克力</p>
                            </a>
                        </li>
                        <li>
                            <a href="##">
                                <img src="__ROOT__/Index/Common/img/img_home/tm.png" alt="" />
                                <p>OLIVI轻瞳</p>
                                <p>轻芯巧克力</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="day_morning day_warp">
                    <div class="day_title day_title2 clearfix">
                        <span>二人世界</span>
                        <span>Evening</span>
                    </div>
                    <div class="day_content">
                        <a href="##"><img src="__ROOT__/Index/Common/img/img_home/list_03.jpg" alt=""></a>
                    </div>
                    <ul class="day_warp_ul">
                        <li>
                            <a href="##">
                                <img src="__ROOT__/Index/Common/img/img_home/tm1.png" alt="" />
                                <p>OLIVI轻瞳</p>
                                <p>轻芯巧克力</p>
                            </a>
                        </li>
                        <li>
                            <a href="##">
                                <img src="__ROOT__/Index/Common/img/img_home/tm2.png" alt="" />
                                <p>OLIVI轻瞳</p>
                                <p>轻芯巧克力</p>
                            </a>
                        </li>
                        <li>
                            <a href="##">
                                <img src="__ROOT__/Index/Common/img/img_home/tm3.png" alt="" />
                                <p>OLIVI轻瞳</p>
                                <p>轻芯巧克力</p>
                            </a>
                        </li>
                        <li>
                            <a href="##">
                                <img src="__ROOT__/Index/Common/img/img_home/hx.png" alt="" />
                                <p>OLIVI轻瞳</p>
                                <p>轻芯巧克力</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="day_morning day_warp">
                    <div class="day_title day_title3 clearfix">
                        <span>夜蒲狂欢档</span>
                        <span>Late at night</span>
                    </div>
                    <div class="day_content">
                        <a href="##"><img src="__ROOT__/Index/Common/img/img_home/list_04.jpg" alt=""></a>
                    </div>
                    <ul class="day_warp_ul">
                        <li>
                            <a href="##">
                                <img src="__ROOT__/Index/Common/img/img_home/hx1.png" alt="" />
                                <p>OLIVI轻瞳</p>
                                <p>轻芯巧克力</p>
                            </a>
                        </li>
                        <li>
                            <a href="##">
                                <img src="__ROOT__/Index/Common/img/img_home/hx2.png" alt="" />
                                <p>OLIVI轻瞳</p>
                                <p>轻芯巧克力</p>
                            </a>
                        </li>
                        <li>
                            <a href="##">
                                <img src="__ROOT__/Index/Common/img/img_home/hx3.png" alt="" />
                                <p>OLIVI轻瞳</p>
                                <p>轻芯巧克力</p>
                            </a>
                        </li>
                        <li>
                            <a href="##">
                                <img src="__ROOT__/Index/Common/img/img_home/hx4.png" alt="" />
                                <p>OLIVI轻瞳</p>
                                <p>轻芯巧克力</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="home_hots clearfix">
            <div class="home_hot_show">
                <div class="home_hot">
                    <div class="title_02 title_warp">
                        <strong>新品推荐</strong>
                        <span>HOT</span>
                    </div>
                    <div class="home_hot_content clearfix">
                        <a href="##"><img src="__ROOT__/Index/Common/img/img_home/61.jpg" alt=""></a>
                        <a class="hot_content" href="##"><img src="__ROOT__/Index/Common/img/img_home/66.png" alt="">
                            <p>Modern小浆果</p>
                        </a>
                        <a class="hot_content" href="##"><img src="__ROOT__/Index/Common/img/img_home/67.png" alt="">
                            <p>Modern小浆果</p>
                        </a>
                        <a class="hot_content" href="##"><img src="__ROOT__/Index/Common/img/img_home/64.png" alt="">
                            <p>Modern小浆果</p>
                        </a>
                        <a class="hot_content" href="##"><img src="__ROOT__/Index/Common/img/img_home/63.png" alt="">
                            <p>Modern小浆果</p>
                        </a>
                        <a class="hot_content" href="##"><img src="__ROOT__/Index/Common/img/img_home/62.png" alt="">
                            <p>Modern小浆果</p>
                        </a>
                        <a href="##"><img src="__ROOT__/Index/Common/img/img_home/65.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="phone_app">
                <img src="__ROOT__/Index/Common/img/img_home/ewm_01.png" alt="">
                <a href="##"><img src="__ROOT__/Index/Common/img/img_home/app.png" alt=""></a>
            </div>
        </div>
        <div class="home_classis">
            <div class="title_03 title_warp">
                <strong>精选款式</strong>
                <span>CLASSIS</span>
            </div>
            <div class="home_classis_content">
                <ul class="classis_content">
                    <li ng-cloak ng-repeat="v in goodsLists">
                        <!-- 调到商品详情页 -->
                        <a href="__APP__/ProductDetails/index?id={{v.id}}" class="classis_a">
                            <img src="__ROOT__/{{v.bgImg}}" alt="" class="classis_img">
                            <div class="classis_info clearfix">
                                <img src="__ROOT__/{{v.productImg}}" alt="">
                                <div class="classis_infos">
                                    <p class="classis_title">{{v.productName}}</p>
                                    <p class="classis_cinfo">直径:<span>14.0</span>mm | 厚度:<span>0.008</span>mm</p>
                                    <p class="classis_cinfo_price">&yen;现价<span>{{v.wlPrice}}</span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="home_more">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-sm-4">
                        <b class="m_title">美瞳评测</b>
                        <div class="m_box">
                            <p class="m_box_title">NEO糖心蓝美瞳，蓝的特别美丽</p>
                            <p class="m_box_01">NEO 糖心蓝的蓝色总是特别的颜色，给人表现出一种美丽、冷静、理智、安详与广阔。是非常特别的一种颜色。NEO溏心蓝让瞳孔的呈现出不一样的魅力，让人联想到湛蓝的海水和幽静沁凉的湖泊.
                                <a href="#" class="m_box_a">更多</a>
                            </p>
                        </div>
                        <div class="m_box_ul">
                            <a href="">NEO美瞳哪个牌子好？NEO糖心...</a>
                            <a href="">在哪里可以买到正品NEO美瞳玫瑰...</a>
                            <a href="">NEO美瞳丽颜灰怎么样？NEO美...</a>
                            <a href="">NEO小黑环美瞳官方正品_NEO...</a>
                        </div>
                        <div>
                            <a href="" class="m_box_more">more</a>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4">
                        <b class="m_title">瞳学会</b>
                        <div class="m_box">
                            <p class="m_box_title">NEO美瞳好还是博士伦好？要怎么...</p>
                            <p class="m_box_01">最近有个话题困住了我们，就是NEO美瞳还是博士伦好，双方的粉丝都互不相让，NEO美瞳好，博士伦更好等等。那么。到底是哪个好呢？
                                <a href="#" class="m_box_a">更多</a>
                            </p>
                        </div>
                        <div class="m_box_ul">
                            <a href="">NEO美瞳水润黑怎么样？</a>
                            <a href="">NEO美瞳使用方法，NEO雪花黑...</a>
                            <a href="">别告诉我，你不知道那里..那里....</a>
                            <a href="">17，它到底是个什么东西？</a>
                        </div>
                        <div>
                            <a href="" class="m_box_more">more</a>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4">
                        <b class="m_title">达人分享</b>
                        <div class="m_box">
                            <p class="m_box_title">【彩妆教室】★EOS ice 冰...</p>
                            <p class="m_box_01">【彩妆教室】★EOS ice 冰花灰★辣妈千金 混血减龄妆
                                <a href="#" class="m_box_a">更多</a>
                            </p>
                        </div>
                        <div class="m_box_ul">
                            <a href="">【彩妆教室】★COSPLAY艺术...</a>
                            <a href="">【彩妆教室】★OLIVI 熙乐灰...</a>
                            <a href="">【彩妆教室】★Dreamcon ...</a>
                            <a href="">【彩妆教室】★EOS paste...</a>
                        </div>
                        <div>
                            <a href="" class="m_box_more">more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--首页底部  -->
    <div class="footer">
        <!--更多-->
<div class="home_footer">
	<div class="container-fluid">
		<div class="container f_wrap">
			<!--第一模块-->
			<div class="row ">
				<div class="col-xs-8 col-sm-8">
					<div class="f_title">
						<p class="f_title_01">Why you'll love VVVLE ?</p>
						<p class="f_title_02"><span>了解你会<span class="f_content_01">爱上微乐</span>的理由</span>
						</p>
					</div>
				</div>
				<div class="col-xs-4 col-sm-4">
					<div class="f_div">
						<div class="f_div_01">
							<img src="__ROOT__/Index/Common/img/f_03.png" alt="微乐微信二维码">
							<p>微乐微博二维码</p>
						</div>
						<div class="f_div_02">
							<img src="__ROOT__/Index/Common/img/f_02.png" alt="微乐微博二维码">
							<p>微乐微博二维码</p>
						</div>
					</div>
				</div>
			</div>
			<div class="f_space "></div>
			<div class="f_line"></div>
			<!--第二模块-->
			<div class="row text-center f_content_mid">
				<div class="col-xs-3 col-sm-3">
					<h2 class="ft_01">购物指南</h2>
					<ul class="text-left">
						<li><a href="">注册新用户</a></li>
						<li><a href="">如何购买</a></li>
						<li><a href="">常见问题</a></li>
						<li><a href="">100%售后保障</a></li>
						<li><a href="">退换货政策</a></li>
					</ul>
				</div>
				<div class="col-xs-3 col-sm-3">
					<h2 class="ft_02">配送方式</h2>
					<ul class="text-left">
						<li><a href="">配送时间</a></li>
						<li><a href="">配送范围</a></li>
						<li><a href="">配送费用</a></li>
					</ul>
				</div>
				<div class="col-xs-3 col-sm-3">
					<h2 class="ft_03">支付方式</h2>
					<ul class="text-left">
						<li><a href="">如何付款</a></li>
						<li><a href="">货到付款</a></li>
						<li><a href="">银行转账</a></li>
					</ul>
				</div>
				<div class="col-xs-3 col-sm-3">
					<h2 class="ft_04">关于微乐</h2>
					<ul class="text-left">
						<li><a href="">联系我们</a></li>
						<li><a href="">关于微乐眼镜网</a></li>
					</ul>
				</div>
			</div>
			<div class="f_space"></div>
			<div class="f_line"></div>
			<!--第三模块-->
			<div class="f_link">
				<span class="f_link_p">友情链接：</span>
				<div id="f_scrollobj">
					<div class="f_scrollobj_01">
						<a href="" target="_blank">隐形眼镜网</a>
						<a href="" target="_blank">美瞳网</a>
						<a href="" target="_blank">隐形眼镜网</a>
						<a href="" target="_blank">美瞳网</a>
						<a href="" target="_blank">隐形眼镜网</a>
						<a href="" target="_blank">美瞳网</a>
						<a href="" target="_blank">隐形眼镜网</a>
						<a href="" target="_blank">美瞳网</a>
						<a href="" target="_blank">隐形眼镜网</a>
						<a href="" target="_blank">美瞳网</a>
						<a href="" target="_blank">隐形眼镜网</a>
						<a href="" target="_blank">美瞳网</a>
						<a href="" target="_blank">隐形眼镜网</a>
						<a href="" target="_blank">美瞳网</a>
						<a href="" target="_blank">隐形眼镜网</a>
						<a href="" target="_blank">美瞳网</a>
						<a href="" target="_blank">隐形眼镜网</a>
						<a href="" target="_blank">美瞳网</a>
						<a href="" target="_blank">隐形眼镜网</a>
						<a href="" target="_blank">美瞳网</a>
					</div>
				</div>
				<p class="text-right" id="f_ICP">© 2015 vvvle.cn 广州市敦泽贸易有限公司 版权所有｜
					<span><a href="http://www.miitbeian.gov.cn/">粤ICP备13029115号-1</a></span>
				</p>
			</div>
		</div>
	</div>
</div>
    </div>
    <!--侧边栏  -->
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
                <div id="msg">已成功加入购物车！</div>
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
</body>
<script type="text/javascript" src="__ROOT__/Index/Common/js/sidebar.js"></script>
<script type="text/javascript" src="__ROOT__/Index/Common/js/home.js"></script>
<script>
    var app = angular.module("myapps", []);
    app.controller("mycontroller", function($scope, $http) {
        $scope.goodsLists = "";
        $http.get("__APP__/Index/getGoods").success(function(data) {
            if (data.status == 1) {
                $scope.goodsLists = data.data;
            } else {
                alert("系统繁忙，请稍后...");
            }
        });
    })
</script>

</html>