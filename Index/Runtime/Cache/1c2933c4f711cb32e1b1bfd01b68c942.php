<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | 登陆界面</title>
    <link type="text/css" rel="stylesheet" href="https://cdn.bootcss.com/normalize/6.0.0/normalize.min.css" />
	<link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/libs/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/header.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/sidebar.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/footer.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/lens.css" />
    <script type="text/javascript" src="__ROOT__/Index/Common/js/jquery.min.js"></script>
    <script type="text/javascript" src="__ROOT__/Index/Common/js/sidebar.js"></script>
    <script type="text/javascript" src="__ROOT__/Index/Common/js/lens.js"></script>
    <style>
        .login{width: 1000px;margin: 0 auto;margin-bottom: 25px;}
        .login_img {margin-top: 25px;}
        .login_bgcolor{width: 370px;height: 407px;float: right;background: url(__ROOT__/Index/Common/img/login/login_bg.gif) no-repeat;padding: 26px 26px 0px 28px;}
        .weile{font-size: 14px;color: #f3116c;font-weight: bold;}
        .zhu{    border: 1px solid #d0d0d0;
                background: url(__ROOT__/Index/Common/img/login/login_icon.gif) no-repeat 10px 8px;
                line-height: 35px;
                width: 267px;
                margin-top: 35px;
                padding-left: 35px;
                height: 35px;
            }
        .mima{
                border: 1px solid #d0d0d0;
                background: url(__ROOT__/Index/Common/img/login/login_lock.gif) no-repeat 10px 6px;
                line-height: 35px;
                width: 267px;
                margin-top: 25px;
                padding-left: 35px;
                height: 35px;
        }
        .free{
                margin-top: 30px;
                font-size: 12px;
                position: relative;
                padding-left: 15px;
                color: #656565;
                height: 20px;
        }
        .free>span>.f3[mon="bs"]{
                color: #9e9e9e;
                text-decoration: none;
                position: absolute;
                right: 45px;
        }
        .weizhi{
                position: absolute;
                top: -2px;
                left: 0;
                
        }
        input#button{
                background: url(__ROOT__/Index/Common/img/login/login_bottom.gif) no-repeat;
                width: 109px;
                height: 40px;
                margin-top: 15px;
                border: 0px;
        }
        input.login_bb{
                background: url(__ROOT__/Index/Common/img/login/zc.jpg) no-repeat;
                margin-left: 15px;
                width: 109px;
                height: 40px;
                margin-top: 15px;
                border: 0px;
        }
        .qita{
                font-size: 12px;
                color: #868686;
                padding-top: 36px;
        }
            /*账号  */
        .account{
                padding-top: 15px;
        }
        
            
    </style>
</head>
<body>
    <!--头部  -->
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
    <!--登录表  -->
    <div class="login">
        <div class="row text-left">
            <div class="col-sm-6 login_img">
                <img src="__ROOT__/Index/Common/img/login/77.jpg" alt="8周年庆图片">
            </div>
            <div class="col-sm-6 login_bgcolor">
                <div class="weile">登录微乐</div>
                <form name="formLogin" action="user.php" method="post" onSubmit="return userLogin()">
                    <!-- 登陆用户名  和 密码  -->
                    <input type="text" name="username" id="username" class="zhu" placeholder="用户名/邮箱/手机号" /> 
                    <input type="password" name="password" id="password" class="mima" placeholder="密码" />
                    
                    <!--忘记密码  和 保存cookie session  -->
                    <div class="free">
                        <span><a href="##" class="f3" mon="bs">忘记密码?</a></span>
                        <input name="remember" type="checkbox" value="1" class="weizhi" checked="checked" />&nbsp;自动登录
                    </div>

                    <!--
                        <input type="hidden" /> 定义隐藏字段。隐藏字段对于用户是不可见的。隐藏字段通常会存储一个默认值，它们的值也可以由 JavaScript 进行修改。

                      -->
                     <input type="hidden" name="act" value="act_login" />
                     <input type="hidden" name="back_act" value="" />
                    
                     <!--登陆 注册按钮  -->
                     <input type="submit" name="button" id="button" value="" class="login_bb" />
                     <input type="button" name="button"  value="" class="login_bb"   onclick=""/>
                </form>
                <div class="qita">你也可以使用一下账号登录：</div>
                <div class="account"><a href="##"><img src="__ROOT__/Index/Common/img/login/zhang_r1_c1.gif" width="93" height="24" border="0"/></a>
                <a href="##"><img src="__ROOT__/Index/Common/img/login/zhang_r1_c2.gif" width="101" height="24" border="0" /></a>
                <a href="user.php?act=oath&type=alipay"><img src="__ROOT__/Index/Common/img/login/zhang_r1_c3.gif" width="75" height="24" border="0"/></a></div>
   
            </div>            
        </div>
        
    </div>
	<!--底部  -->
    <div class="header">
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
	<!--侧边导航栏  -->
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
    /**
 *                             _ooOoo_
 *                            o8888888o
 *                            88" . "88
 *                            (| -_- |)
 *                            O\  =  /O
 *                         ____/`---'\____
 *                       .'  \\|     |//  `.
 *                      /  \\|||  :  |||//  \
 *                     /  _||||| -:- |||||-  \
 *                     |   | \\\  -  /// |   |
 *                     | \_|  ''\---/''  |   |
 *                     \  .-\__  `-`  ___/-. /
 *                   ___`. .'  /--.--\  `. . __
 *                ."" '<  `.___\_<|>_/___.'  >'"".
 *               | | :  `- \`.;`\ _ /`;.`/ - ` : | |
 *               \  \ `-.   \_ __\ /__ _/   .-` /  /
 *          ======`-.____`-.___\_____/___.-`____.-'======
 *                             `=---='
 *          ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
 *                     佛祖保佑        永无BUG
 *            佛曰:
 *                   写字楼里写字间，写字间里程序员；
 *                   程序人员写程序，又拿程序换酒钱。
 *                   酒醒只在网上坐，酒醉还来网下眠；
 *                   酒醉酒醒日复日，网上网下年复年。
 *                   但愿老死电脑间，不愿鞠躬老板前；
 *                   奔驰宝马贵者趣，公交自行程序员。
 *                   别人笑我忒疯癫，我笑自己命太贱；
 *                   不见满街漂亮妹，哪个归得程序员？
*/
</body>

</html>