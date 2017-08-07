<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登陆用户信息</title>
    <link type="text/css" rel="stylesheet" href="https://cdn.bootcss.com/normalize/6.0.0/normalize.min.css" />
	<link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/libs/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/header.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/sidebar.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/footer.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/lens.css" />
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/css/userCenter.css" />
    <script type="text/javascript" src="__ROOT__/Index/Common/js/jquery.min.js"></script>
    <script type="text/javascript" src="__ROOT__/Index/Common/js/sidebar.js"></script>
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
                <span>Hi~
                        <a ng-show="<?php echo ($judge1); ?>" href="__APP__/Login/login">[请登录]</a>                        
                        <a ng-show="<?php echo ($judge1); ?>" href="__APP__/Register/register">[免费注册]</a>                        
                        <a ng-show="<?php echo ($judge); ?>" ><?php echo ($username); ?>,欢迎回来！</a>
                        <a ng-show="<?php echo ($judge); ?>" href="__APP__/UserCenter/userCenter">[用户中心]</a>                        
                        <a ng-show="<?php echo ($judge); ?>" href="##">[退出]</a>  
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

    <!--用户中心  -->
   <div class="user_center">
       <!--首页 > 用户中心  -->
        <div class="Return_home">
            <a href="__APP__/Index/index">首页</a>
            <span>> </span>用户中心
        </div>
        <!-- 用户中心 列表  -->
        <div class="userCenter_select">
            <div class="select_items_01">
                <a href="##" class="p"><img class="p_img" src="__ROOT__/Index/Common/img/userCenter/u3.gif" alt="我的订单">&nbsp; 我的订单</a>
                <a href="##" class="p"><img class="p_img" src="__ROOT__/Index/Common/img/userCenter/u9.gif" alt="我的优惠劵">&nbsp; 我的优惠劵</a>
                <a href="##" class="p"><img class="p_img" src="__ROOT__/Index/Common/img/userCenter/u9.gif" alt="我的礼品卷">&nbsp; 我的礼品卷</a>
                <a href="##" class="p"><img class="p_img" src="__ROOT__/Index/Common/img/userCenter/u9.gif" alt="我的礼包">&nbsp; 我的礼包</a>
                <a href="##" class="p"><img class="p_img" src="__ROOT__/Index/Common/img/userCenter/u5.gif" alt="我的收藏">&nbsp; 我的收藏</a>
                <a href="##" class="p"><img class="p_img" src="__ROOT__/Index/Common/img/userCenter/u6.gif" alt="我的留言">&nbsp; 我的留言</a>
                <a href="##" class="p"><img class="p_img" src="__ROOT__/Index/Common/img/userCenter/u11.gif" alt="我的评论">&nbsp; 我的评论</a>
                <a href="##" class="p"><img class="p_img" src="__ROOT__/Index/Common/img/userCenter/u2.gif" alt="用户信息">&nbsp; 用户信息</a>
                <a href="##" class="p"><img class="p_img" src="__ROOT__/Index/Common/img/userCenter/u7.gif" alt="账号绑定">&nbsp; 账号绑定</a>
                <a href="##" class="p"><img class="p_img" src="__ROOT__/Index/Common/img/userCenter/u4.gif" alt="收货地址">&nbsp; 收货地址</a>
                <a href="##" class="p"><img class="p_img" src="__ROOT__/Index/Common/img/userCenter/u3.gif" alt="积分明细">&nbsp; 积分明细</a>
                <a href="##" class="p"><img class="p_img" src="__ROOT__/Index/Common/img/userCenter/u13.gif" alt="资金管理">&nbsp; 资金管理</a>
                <a href="##" class="p"><img class="p_img" src="__ROOT__/Index/Common/img/userCenter/u7.gif" alt="我的标签">&nbsp; 我的标签</a>
                <a href="##" class="p"><img class="p_img" src="__ROOT__/Index/Common/img/userCenter/u8.gif" alt="缺货登记">&nbsp; 缺货登记</a>
                <a href="##" class="p"><img class="p_img" src="__ROOT__/Index/Common/img/userCenter/u10.gif" alt="我的推荐">&nbsp; 我的推荐</a>
                <a href="##" class="p"><img class="p_img" src="__ROOT__/Index/Common/img/userCenter/u12.gif" alt="跟踪包裹">&nbsp; 跟踪包裹</a>
                <a href="##" class="p"><img class="p_img" src="__ROOT__/Index/Common/img/userCenter/u3.gif" alt="我的奖品">&nbsp; 我的奖品</a>  
                <a href="##" class="home_page"><img class="p_img" src="__ROOT__/Index/Common/img/userCenter/u1.gif" alt="欢迎页">&nbsp; 欢迎页</a>
                <a class="text-right" href="##"><img src="__ROOT__/Index/Common/img/userCenter/bnt_sign.gif" alt="安全提交"></a>
            </div>
            <!--欢迎页面  -->
            <div class="select_items_02">
                <h4><span>wuyan1314</span> 欢迎您回到 微乐美瞳网-正品美瞳|美瞳网！</h4>
                <small>您的上一次登录时间: 2017-08-05 15:09:17</small>
                <div>
                    <img src="__ROOT__/Index/Common/img/userCenter/note.gif" alt="">
                </div>
                <h5>用户提醒</h5>
                <i>您最近30天内提交了<span>0</span>个订单</i>
            </div>
            <!--用户个人资料  -->
            <div class="select_items_03" style="display:none;">
                 <h5>个人资料</h5>
                 <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td width="150" class="text-right">出生日期:</td>
                            <td >
                                <select>
                                    <option value="年">1957</option>
                                    <option value="年">1957</option>                                   
                                </select>
                                <select>
                                    <option value="月">06</option>
                                    <option value="月">07</option>
                                </select>
                                <select>
                                    <option value="日">14</option>
                                    <option value="日">14</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right">性别:</td>
                            <td>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosinline" id="optionsRadios3" value="option1" checked> 保密
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosinline" id="optionsRadios4"  value="option2"> 男
                                </label>
                                 <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosinline" id="optionsRadios4"  value="option2"> 女
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right">电子邮件地址:</td>
                            <td>
                                <input type="text" class="form-control" id="name">
                            </td>
                        </tr>
                         <tr>
                            <td class="text-right">QQ:</td>
                            <td>
                                <input type="text" class="form-control" id="name">
                            </td>
                        </tr>
                         <tr>
                            <td class="text-right">微信:</td>
                            <td>
                                <input type="text" class="form-control" id="name">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><p class="Confirm_the_change_01">确认修改</p></td>
                        </tr>
                         <tr>
                            <td class="text-right">原密码:</td>
                            <td>
                                <input type="text" class="form-control" id="name">
                            </td>
                        </tr>
                         <tr>
                            <td class="text-right">新密码:</td>
                            <td>
                                <input type="text" class="form-control" id="name">
                            </td>
                        </tr>
                         <tr>
                            <td class="text-right">确认密码:</td>
                            <td>
                                <input type="text" class="form-control" id="name">
                            </td>
                        </tr>
                         <tr>
                            <td colspan="2"><p class="Confirm_the_change_02">确认修改</p></td>
                        </tr>
                    </tbody>
                </table>
            </div> 
            
            <!-- 用户留言表  -->
            <div class="select_items_04" style="display:none;">
                <h5>我的留言</h5>
                 <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td width="150" class="text-right">留言类型:</td>
                            <td >
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosinline" id="optionsRadios3" value="option1" checked> 留言
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosinline" id="optionsRadios4"  value="option2"> 投诉
                                </label>
                                 <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosinline" id="optionsRadios4"  value="option2"> 询问
                                </label>
                                 <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosinline" id="optionsRadios4"  value="option2"> 售后
                                </label>
                                 <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosinline" id="optionsRadios4"  value="option2"> 求购
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right">主题:</td>
                            <td>
                                 <input type="text" class="form-control" id="td_name">
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right">留言内容:</td>
                            <td>
                                <textarea class="form-control" rows="8" id="td_content"></textarea>
                            </td>
                        </tr>
                         <tr>
                            <td class="text-right">上传文件:</td>
                            <td>                       
                                <input type="file">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><p class="Confirm_sub">提交</p></td>
                        </tr>
                         <tr>
                            <td colspan="2" class="text-center">
                                <p class="tip">温馨小提示:</p> 您可以上传以下格式的文件：
                                gif、jpg、png、word、excel、txt、zip、ppt、pdf
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!--用户评论  -->
            <div class="select_items_05" style="display:none;">
                <h5>我的评论</h5>
                <p>暂时还没有任何用户评论</p>
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
<script type="text/javascript">
    $(".select_items_01").find("a").map(function(){
         $(".select_items_01").find("a").on("click",function(){
            $(this).css(
                {
                    "background":"url(__ROOT__/Index/Common/img/userCenter/menuBg.gif) no-repeat 0 4px",
                } 
            ).siblings().css(
                {
                "background":"url(__ROOT__/Index/Common/img/userCenter/menuBg.gif) no-repeat 0 -26px",
                }
            )
         })
    })
     $(".select_items_01").find("a").eq(5).on("click",function(){
       $(".select_items_04").show();
       $(".select_items_02").hide();
       $(".select_items_03").hide();
       $(".select_items_05").hide();
     })
      $(".select_items_01").find("a").eq(17).on("click",function(){
       $(".select_items_04").hide();
       $(".select_items_02").show();
       $(".select_items_03").hide();
       $(".select_items_05").hide();
     })
      $(".select_items_01").find("a").eq(6).on("click",function(){
       $(".select_items_04").hide();
       $(".select_items_05").show();
       $(".select_items_03").hide();
       $(".select_items_02").hide();
     })
      $(".select_items_01").find("a").eq(7).on("click",function(){
       $(".select_items_04").hide();
       $(".select_items_03").show();
       $(".select_items_02").hide();
       $(".select_items_05").hide();
     })

</script>
</html>