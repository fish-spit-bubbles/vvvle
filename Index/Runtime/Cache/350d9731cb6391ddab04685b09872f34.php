<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品详情页</title>
    <link type="text/css" rel="stylesheet" href="https://cdn.bootcss.com/normalize/6.0.0/normalize.min.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/libs/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/sidebar.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/home.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/footer.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/header.css" />
    <script type="text/javascript" src="__ROOT__/Index/Common/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/slideshow.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/productDetails.css" />
    <script type="text/javascript" src="__ROOT__/Index/Common/js/angular.min.js"></script>


</head>

<body ng-app="myapp" ng-controller="mycontroller">
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
                        <a href="__APP__/Login/login">请登录</a>
                        ][
                        <a href="__APP__/Register/register">免费注册</a>
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
            <a href="__APP__/Index/index" class="bootm_naviea_hove" title="red">
                <p class="naviea_hove" title="bg">HOME</p>
                <p class="naviea_hove" title="ms">首页</p>
            </a>
            <a href="__APP__/Lens/lens" class="bootm_naviea_hove">
                <p class="naviea_hove" title="bg">LENS</p>
                <p class="naviea_hove" title="ms">美瞳</p>
            </a>
            <a href="__APP__/Accesories/accesories" class="bootm_naviea_hove">
                <p class="naviea_hove" title="bg">EYE DROPS</p>
                <p class="naviea_hove" title="ms">海外购</p>
            </a>
            <a href="__APP__/Parts/parts" class="bootm_naviea_hove">
                <p class="naviea_hove" title="bg">PARTS</p>
                <p class="naviea_hove" title="ms">超级配件</p>
            </a>
            <a href="__APP__/NewProduct/newProduct" class="bootm_naviea_hove">
                <p class="naviea_hove" title="bg">NEW</p>
                <p class="naviea_hove" title="ms">新品</p>
            </a>
            <a href="__APP__/Hot/hot" class="bootm_naviea_hove">
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

    <!-- 本站导航小链接 -->
    <div class="site_navigation">
        <a href="#">首页</a> >
        <a href="#">彩色隐形眼镜</a> >
        <a href="#">DorisCon</a> >
        <a href="#">冰柠系列</a> > DorisCon 冰柠粉 【硅水凝胶】
    </div>
    <!-- 中部显示BOX -->
    <div class="show_details" box="bg">
        <!-- 立即购买 图片详情 -->
        <div class="show_goods_o_pic_clearfix">
            <!-- 商品图片 -->
            <div class="show_goods_o_pic_clearfix_imgInfo">
                <img src="__ROOT__/Index/Common/img/3766_P_ssds1501800650158.jpg" alt="商品">
            </div>
            <!-- 商品简介和加入购物车，立即购买 -->
            <from class="show_goods_o_pic_ui-form-item">
                <div class="show_goods_o_pic_ui-form-item_goods_o_name">
                    SUPER COLOR ME三色棕
                </div>
                <ul class="show_goods_o_pic_ui-form-item_tm-fcs">
                    <li> 微乐价：
                        <span>
                            <em>￥</em>
                            <!-- 价格 -->
                             <span class="show_goods_tm_price1">268</span>
                        </span>
                    </li>
                    <!-- 市场价格 -->
                    <p class="show_goods_o_pic_g_pric_in">市场价格：
                        <span>
                             <em>￥</em>
                             <span class="market">402</span>
                        </span>
                    </p>
                </ul>
                <!-- 同系列其他商品 -->
                <div class="show_goods_o_pic_ui-form-item_tm-fhu">
                    <div class="show_goods_o_pic_ui-form_tlsp">
                        <img monfr="tlsp" src="__ROOT__/Index/Common/img/img_productDetails/3766_thumb_G_1501800650517.png" alt="同类商品">
                    </div>
                    <div class="show_goods_o_pic_ui_relative_goods">
                        <h2>同系列其他产品</h2>
                        <a href="#">
                            <img src="__ROOT__/Index/Common/img/img_productDetails/3765_thumb_G_1501800484125.png" alt="同系列商品小图">
                        </a>
                    </div>
                </div>
                <p class="show_goods_addbeauty">
                    <img src="__ROOT__/Index/Common/img/img_productDetails/1436285979136625.png" alt="拿现金">
                </p>
                <hr/>
                <!-- 度数选择 -->
                <li class="select_poret">
                    <strong>度数选择</strong>
                </li>
                <!-- 左眼度数 -->
                <li class="attribute_item">
                    左眼度数
                    <select>
                        <option value="0">请选择</option>
                        <option value="平光">平光</option>
                        <option value="-100">-100</option>
                        <option value="-125">-125</option>
                        <option value="-150">-150</option>
                        <option value="-175">-175</option>
                        <option value="-200">-200</option>
                        <option value="-225">-225</option>
                        <option value="-250">-250</option>
                        <option value="-275">-275</option>
                        <option value="-300">-300</option>
                        <option value="-325">-325</option>
                        <option value="-350">-350</option>
                        <option value="-375">-375</option>
                        <option value="-400">-400</option>
                        <option value="-425">-425</option>
                        <option value="-450">-450</option>
                        <option value="-475">-475</option>
                        <option value="-500">-500</option>
                        <option value="-525">-525</option>
                        <option value="-550">-550</option>
                        <option value="-600">-600</option>
                        <option value="-650">-650</option>
                        <option value="-700">-700</option>
                        <option value="-750">-750</option>
                        <option value="-800">-800</option>
                        
                    </select>
                </li>
                <!-- 右眼度数 -->
                <li class="attribute_item">
                    右眼度数
                    <select>
                        <option value="0">请选择</option>
                        <option value="平光">平光</option>
                        <option value="-100">-100</option>
                        <option value="-125">-125</option>
                        <option value="-150">-150</option>
                        <option value="-175">-175</option>
                        <option value="-200">-200</option>
                        <option value="-225">-225</option>
                        <option value="-250">-250</option>
                        <option value="-275">-275</option>
                        <option value="-300">-300</option>
                        <option value="-325">-325</option>
                        <option value="-350">-350</option>
                        <option value="-375">-375</option>
                        <option value="-400">-400</option>
                        <option value="-425">-425</option>
                        <option value="-450">-450</option>
                        <option value="-475">-475</option>
                        <option value="-500">-500</option>
                        <option value="-525">-525</option>
                        <option value="-550">-550</option>
                        <option value="-600">-600</option>
                        <option value="-650">-650</option>
                        <option value="-700">-700</option>
                        <option value="-750">-750</option>
                        <option value="-800">-800</option>
                        
                    </select>
                </li>
                <!-- 促销价和剩余时间 -->
                <li class="padd_loop">
                    <strong>促销价：</strong>
                    <span>
                        <em>￥</em>
                        <span class="padd_loop_cxjs">188</span>
                    </span>
                    <strong>剩余时间：</strong>
                    <font>2天01小时38分钟18秒</font>
                </li>
                <hr/>
                <li class="clearfix" name="sell">
                    <span>已售出：</span>
                    <font>34</font>
                    <span>购买此商品赠送：</span>
                    <font>3 积分</font>
                </li>
                <li class="clearfix" name="count">
                    <span>购买数量：</span>
                    <input type="number" value="1">
                    <span>
                        商品总价
                    </span>
                    <em>￥</em>
                    <font>188</font>
                </li>
                <li class="padda">
                    <!-- 立即购买 -->
                    <button class="padda_buynow"> </button>
                    <!-- 加入购物车 -->
                    <button class="Join_the_shopping_cart"></button>
                </li>
            </from>
            <div class="show_cart_process_img">
                <img src="__ROOT__/Index/Common/img/img_productDetails/goods_cart_r1_c1.png" alt="购物列车">
                <img src="__ROOT__/Index/Common/img/img_productDetails/goods_cart_r1_c2.png" alt="购物列车">
                <img src="__ROOT__/Index/Common/img/img_productDetails/goods_cart_r1_c3.png" alt="购物列车">
                <img src="__ROOT__/Index/Common/img/img_productDetails/goods_cart_r1_c4.png" alt="购物列车">
            </div>
            <!-- 商品图片展示大的BOX -->
            <div class="vl_goods_down_clearfix">
                <!-- 商品详情展示 -->
                <div class="vl_goods_dec_fr">
                    <!-- 展示头部 -->
                    <div class="detail_tab_clearfix">
                        <ul>
                            <li bokl="outs">
                                <a href="#">商品详情</a>
                            </li>
                            <li bokl="fbm">
                                <a href="#">卖家评价</a>
                            </li>
                            <li bokl="fbm">
                                <a href="#">达人秀</a>
                            </li>
                            <li bokl="fbm">
                                <a href="#">相关文章</a>
                            </li>
                            <li bokl="fbwb">
                                <a href="#"></a>
                            </li>
                        </ul>
                    </div>
                    <!-- 咨询热线 -->
                    <div class="legal_goods_service">
                        <!-- 阿里旺旺 -->
                        <a class="legal_goods_service_alww" href="#"></a>
                        <!-- QQ -->
                        <a class="legal_goods_service_qq" href="#"></a>
                    </div>
                    <!-- 惊艳 -->
                    <p class="go_rgeousness">
                        <a href="#">
                            <img src="__ROOT__/Index/Common/img/img_productDetails/1501118556623784.jpg" alt="惊艳">
                        </a>
                    </p>
                    <!-- 夏日大作战 -->
                    <p class="go_rgeousness">
                        <a href="#">
                            <img src="__ROOT__/Index/Common/img/img_productDetails/1501464358164801.jpg" alt="夏日大作战">
                        </a>
                    </p>
                    <!-- 不懂为什么 -->
                    <p class="go_rgeousness">

                        <img src="__ROOT__/Index/Common/img/img_productDetails/1465385887604085.jpg" alt="夏日大作战">

                    </p>
                    <div class="go_spec_bar">
                        Lens Detail
                    </div>
                    <!-- 表格 -->
                    <div class="go_spec_column">
                        <div class="go_spec_column_fl" title="gray">商品名</div>
                        <div class="go_spec_column_rl">DorisCon 金钻灰 【硅水凝胶】</div>
                    </div>
                    <div class="go_spec_column">
                        <div class="go_spec_column_fl" title="blue">更换周期</div>
                        <div class="go_spec_column_rl" title="gray_shm">年抛</div>
                    </div>
                    <div class="go_spec_column">
                        <div class="go_spec_column_fl" title="gray">实际直径</div>
                        <div class="go_spec_column_rl">14.0</div>
                    </div>
                    <div class="go_spec_column">
                        <div class="go_spec_column_fl" title="blue">含水量</div>
                        <div class="go_spec_column_rl" title="gray_shm">38</div>
                    </div>
                    <div class="go_spec_column">
                        <div class="go_spec_column_fl" title="gray">厚度</div>
                        <div class="go_spec_column_rl">0.025</div>
                    </div>
                    <div class="go_spec_column">
                        <div class="go_spec_column_fl" title="blue">基弧</div>
                        <div class="go_spec_column_rl" title="gray_shm">8.6mm</div>
                    </div>
                    <div class="go_spec_column">
                        <div class="go_spec_column_fl" title="gray">商品规格</div>
                        <div class="go_spec_column_rl">2片</div>
                    </div>
                    <div class="go_spec_column">
                        <div class="go_spec_column_fl" title="blue">度数范围</div>
                        <div class="go_spec_column_rl" title="gray_shm">0-1000度</div>
                    </div>
                    <!-- 商品介绍图片 -->
                    <div ng-repeat="v in imgarr">
                        <p class="go_for_rgeousness">
                            <img src={{v.path}} alt="">
                        </p>

                    </div>





                </div>
                <!-- 侧边栏相同颜色商品 -->
                <div class="vl_goods_dec_rr">
                    <h3 class="vl_goods_dec_rr_h3">相同颜色的商品</h3>
                    <div></div>
                    <h3 class="vl_goods_dec_rr_h3">浏览历史</h3>
                    <div></div>
                </div>
            </div>



        </div>
    </div>



    <!-- 尾部 -->
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

    <script type="text/javascript" src="__ROOT__/Index/Common/js/sidebar.js"></script>
    <script>
        var app = angular.module("myapp", []);
        app.controller("mycontroller", function($scope, $http) {
            $scope.imgarr = [{
                path: "1500628005237569.jpg"
            }, {
                path: "1500628005722993.jpg"
            }, {
                path: "1500628006196727.jpg"
            }, {
                path: "1500628006809753.jpg"
            }, {
                path: "1500628007629155.jpg"
            }, {
                path: "1500628008937392.jpg"
            }, {
                path: "1500628009792044.jpg"
            }, {
                path: "1500628010579751.jpg"
            }, {
                path: "1500628011138678.jpg"
            }, {
                path: "1500628012841135.jpg"
            }, {
                path: "1500628012874148.jpg"
            }, {
                path: "1500628013199373.jpg"
            }, {
                path: "1500628013330298.jpg"
            }, {
                path: "1500628014135883.jpg"
            }, {
                path: "1500628014238126.jpg"
            }, {
                path: "1500628016194801.jpg"
            }, {
                path: "1500628016657137.jpg"
            }, {
                path: "1500628017683001.jpg"
            }, {
                path: "1500628018237234.jpg"
            }, {
                path: "1500628019505985.jpg"
            }, {
                path: "1500628020850656.jpg"
            }, {
                path: "1500628021568573.jpg"
            }, {
                path: "1500628022126560.jpg"
            }, {
                path: "1500628023811012.jpg"
            }, {
                path: "1500628024282769.jpg"
            }, {
                path: "1500628024413762.jpg"
            }, {
                path: "1500628025228734.jpg"
            }, {
                path: "1500628026245227.jpg"
            }, {
                path: "1500628027199852.jpg"
            }, {
                path: "1500628028410607.jpg"
            }, {
                path: "1500628029668606.jpg"
            }, {
                path: "1500628030652864.jpg"
            }, {
                path: "1487923637217966.jpg"
            }, {
                path: "1487923640448789.jpg"
            }, {
                path: "1487923643243202.jpg"
            }, {
                path: "1487923647368250.jpg"
            }, {
                path: "1487923650553691.jpg"
            }, {
                path: "1487923653310774.jpg"
            }, {
                path: "1487923656229922.jpg"
            }, {
                path: "1487923659652976.jpg"
            }, {
                path: "1487923662258672.jpg"
            }, {
                path: "1487923665772195.jpg"
            }];
            for (var i = 0; i < $scope.imgarr.length; i++) {
                $scope.imgarr[i].path = "__ROOT__/Index/Common/img/img_productDetails/" + $scope.imgarr[i].path;
            };


        });
    </script>
</body>

</html>