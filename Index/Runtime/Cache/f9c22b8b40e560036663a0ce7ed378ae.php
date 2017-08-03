<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="https://cdn.bootcss.com/normalize/6.0.0/normalize.min.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/libs/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/sidebar.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/home.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/footer.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/header.css" />

</head>

<body>
    <!--首页头部  -->
    <div>
        <script src="__ROOT__/Index/Common/js/jquery.min.js">
</script>
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
    <!--首页主体  -->
    <div class="home_page container">
        <div class="home_page_top row clearfix">
            <div class="home_sub_nav">
                <ul class="sub_nav">
                    <li>
                        <a href="#" class="sub_hover"><i class="bg-crow"></i><span>超人气款</span></a>
                        <div class="sub_show clearfix">
                            <div class="show_left">
                                <ul class="show_nav">
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/rp1.png" alt="超人气款">
                                            <span>轻瞳<br />轻芯巧克力</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/rp1.png" alt="超人气款">
                                            <span>轻瞳<br />轻芯巧克力</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/rp1.png" alt="超人气款">
                                            <span>轻瞳<br />轻芯巧克力</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <img src="__ROOT__/Index/Common/img/img_home/rp1.png" alt="超人气款">
                                            <span>轻瞳<br />轻芯巧克力</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="show_right">

                            </div>
                        </div>
                    </li>
                    <li><a href="#" class="sub_hover"><i class="bg-leaf"></i><span>自然舒适</span></a></li>
                    <li><a href="#" class="sub_hover"><i class="bg-hx"></i><span>混血冷艳</span></a></li>
                    <li><a href="#" class="sub_hover"><i class="bg-xs"></i><span>学生白领</span></a></li>
                    <li><a href="#" class="sub_hover"><i class="bg-tm"></i><span>甜美气质</span></a></li>
                    <li><a href="#" class="sub_hover"><i class="bg-rp"></i><span>日抛美瞳</span></a></li>
                    <li><a href="#" class="sub_hover"><i class="bg-qb"></i><span>全部品牌</span></a></li>
                </ul>
            </div>
            <div class="home_banner"></div>
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
<script type="text/javascript" src="__ROOT__/Index/Common/js/jquery.min.js"></script>
<script type="text/javascript" src="__ROOT__/Index/Common/js/sidebar.js"></script>

</html>