<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="https://cdn.bootcss.com/normalize/6.0.0/normalize.min.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/libs/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/shopcart.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/footer.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/header.css" />
    <script type="text/javascript" src="__ROOT__/Index/Common/js/jquery.min.js"></script>
</head>

<body>
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
    <!--首页主体  -->
    <div class="shopcart_page">
        <div class="cart_nav clearfix">
            <img src="__ROOT__/Index/Common/img/img_cart/cart_2.gif" alt="" />
        </div>
        <div class="cart_title">
            <span class="cart_title_img"></span>
            <span class="cart_title_info">&nbsp;&nbsp;|&nbsp;&nbsp;让购物变得更轻松</span>
        </div>
        <form method="" action="">
            <div class="cart_goods_list">
                <table>
                    <tr class="table_header">
                        <td>
                            <input type="checkbox" class="selectAll" id="selectAll1" />
                            <label class="lab" for="selectAll1">全选</label>
                        </td>
                        <td>商品名称</td>
                        <td>属性</td>
                        <td>市场价</td>
                        <td>本店价</td>
                        <td>购买数量</td>
                        <td>小计</td>
                        <td>操作</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" class="checkt" />
                            <a href="##"><img src="__ROOT__/Index/Common/img/img_cart/1761_thumb_G_1430349195420.png" alt=""/></a>
                        </td>
                        <td>
                            <a href="##">OLIVI 轻瞳 茶束棕（硅水凝胶）</a>
                        </td>
                        <td>
                            <span>左眼度数:平光</span><br />
                            <span>右眼度数:平光</span>
                        </td>
                        <td>198.00</td>
                        <td>&yen;<span class="proPirce">132.00</span></td>
                        <td class="proCount">
                            <input type="button" value="-" class="ys ys1" />
                            <input type="text" class="count" value="1" />
                            <input type="button" value="+" class="ys ys2"/>
                        </td>
                        <td>&yen;<span class="proMoney">132.00</span></td>
                        <td>
                            <a href="##" class="proDel">删除</a>&nbsp;&nbsp;
                            <a href="##">放入收藏夹</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" class="checkt" />
                            <a href="##"><img src="__ROOT__/Index/Common/img/img_cart/1761_thumb_G_1430349195420.png" alt=""/></a>
                        </td>
                        <td>
                            <a href="##">OLIVI 轻瞳 茶束棕（硅水凝胶）</a>
                        </td>
                        <td>
                            <span>左眼度数:平光</span><br />
                            <span>右眼度数:平光</span>
                        </td>
                        <td>198.00</td>
                        <td>&yen;<span class="proPirce">132.00</span></td>
                        <td class="proCount">
                            <input type="button" value="-" class="ys ys1" />
                            <input type="text" class="count" value="1" />
                            <input type="button" value="+" class="ys ys2"/>
                        </td>
                        <td>&yen;<span class="proMoney">132.00</span></td>
                        <td>
                            <a href="##" class="proDel">删除</a>&nbsp;&nbsp;
                            <a href="##">放入收藏夹</a>
                        </td>
                    </tr>
                    <tr class="goods_mid">
                        <td>
                            <input type="checkbox" class="selectAll" id="selectAll2" />
                            <label class="lab" for="selectAll2">全选</label>
                        </td>
                        <td>
                            <a href="##">继续购物</a>
                        </td>
                        <td colspan="5">
                            <span>&nbsp;&nbsp;总计：</span><br />
                            <span>&nbsp;&nbsp;优惠：</span>
                        </td>
                        <td>
                            <p>&yen;<span class="goods_btm_money">0.00</span></p>
                            <p>&yen;<span>0.00</span></p>
                        </td>
                    </tr>
                    <tr class="goods_btm">
                        <td colspan="8">
                            <p>总计（不含运费）： <i>&yen;</i><span class="goods_btm_money">0.00</span></p>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="cart_user_info">
                <table>
                    
                </table>
            </div>
        </form>
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
</body>
<script type="text/javascript" src="__ROOT__/Index/Common/js/shopcart.js"></script>
</html>