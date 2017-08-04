<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | 注册界面</title>
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
        .register_box{
                width: 972px;
                margin: 20px auto;
                overflow: hidden;
                border: #ddd solid 2px;
                padding-bottom: 20px;
        }
        .register_box>.register_left{
                width: 435px;
                float: left;
                padding: 40px 0px 0px 60px;
                overflow: hidden;
                border: 1px red solid;
        } 
        .register_box>.register_right{
                width: 330px;
                float: right;
                padding: 130px 40px 0px 0px;
                border: 1px blue solid;
        }
        .weile{
                font-size: 14px;
                color: #f3116c;
                font-weight: bold;
        }      
        .bg{
                height: 36px;
                line-height: 36px;
                width: 322px;
                padding-left: 5px;
                width: 302px;
                border: 1px solid #cfcfcf;
        }
        .liji{
            background: url(__ROOT__/Index/Common/img/login/liji.gif) no-repeat;
            width: 109px;
            height: 40px;
            border: 0px;
        }
        .wl{
            font-size: 14px;
            padding-left: 14px;
        }
        .liji1{
            padding: 15px 0;
        }
        .qita{
            font-size: 12px;
            color: #868686;
            padding-top: 36px;
        }
        .zhanghao{
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
    <!--注册栏  -->
    <div class="register_box">
        <!--右边注册信息界面  -->
        <div class="register_left">
            <div class="weile">注册微乐</div>
            <form action="##" method="##" name="##" onsubmit="">
                <table width="100%"  border="0" align="left" cellpadding="5" cellspacing="3">
                    <tr>
                        <td width="20%" align="right">用户名</td>
                        <td width="80%">
                        <input name="username" type="text" size="25" id="username" onblur="is_registered(this.value);" class="bg"/>
                        <span id="username_notice" style="color:#FF0000"> *</span>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">email</td>
                        <td>
                        <input name="email" type="text" size="25" id="email" onblur="checkEmail(this.value);"  class="bg"/>
                        <span id="email_notice" style="color:#FF0000"> *</span>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">密码</td>
                        <td>
                        <input name="password" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" class="bg"/>
                        <span style="color:#FF0000" id="password_notice"> *</span>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">密码强度</td>
                        <td>
                        <table width="145" border="0" cellspacing="0" cellpadding="1">
                            <tr align="center">
                            <td width="33%" id="pwd_lower">弱</td>
                            <td width="33%" id="pwd_middle">中</td>
                            <td width="33%" id="pwd_high">强</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">确认密码</td>
                        <td>
                        <input name="confirm_password" type="password" id="conform_password" onblur="check_conform_password(this.value);"  class="bg"/>
                        <span style="color:#FF0000" id="conform_password_notice"> *</span>
                        </td>
                    </tr>
                    
                    <tr>
                        <td align="right" >QQ</td>
                        <td>
                            <input name="extend_field2" type="text" size="25" class="bg" />          
                         </td>
                    </tr>
                    <tr>
                        <td align="right" >微信</td>  
                        <td>
                            <input name="extend_field102" type="text" size="25" class="bg" />         
                        </td>
                    </tr>        
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <label>
                                <input name="agreement" type="checkbox" value="1" checked="checked" />
                                我已看过并接受《<a href="##" style="color:blue" target="_blank">用户协议</a>》
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td align="left">
                            <input name="act" type="hidden" value="act_register" >
                            <input type="hidden" name="back_act" value="./index.php" />
                            <input name="Submit" type="submit" value="" class="liji">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <!--立即登陆  -->
        <div class="register_right">
            <div class="wl">已微乐账号？</div>
            <div class="liji1"><a href="user.php?back_act="><img src="__ROOT__/Index/Common/img/login/liji1.gif"></a></div>
            <div class="qita">你也可以使用一下账号登录：</div>
            <div class="zhanghao"><a href="##"><img src="__ROOT__/Index/Common/img/login/zhang_r1_c1.gif" width="93" height="24" border="0"/></a>
            <a href="##"><img src="__ROOT__/Index/Common/img/login/zhang_r1_c2.gif" width="101" height="24" border="0" /></a>
            <a href="##"><img src="__ROOT__/Index/Common/img/login/zhang_r1_c3.gif" width="75" height="24" border="0"/></a></div>

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
</body>

</html>