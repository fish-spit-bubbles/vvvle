$(".sidebar_nav li").on('mouseover', function() {
    $(this).addClass("li_hover");
    $(this).find("span").show().animate({
        right: 35,
    }, 400, "swing")
});
$(".sidebar_nav li").on('mouseout', function() {
    $(this).removeClass("li_hover");
    $(".sidebar_nav span").hide().css("right", "50px");
});
// 登录
var login = '<div class="from_warp"><h4>用户登录</h4><a href="javascript:;" class="panl_close"></a><div><label for="sbarUsername">账户：</label><input id="sbarUsername" type="text" name="username" value=""/></div><div><label for="sbarUserpwd">密码：</label><input id="sbarUserpwd" type="password" name="userpwd" value=""/></div><div class="sbar_btn"><button type="submit"></button><span>找回密码</span></div><div class="logingo"><a href="#">新用户注册</a></div><div class="login_info">您还可以使用合作网站账号登录：</div><div class="sbar_icon"><a href="#"><img src="./Index/Common/img/qq.png" alt="qq"></a><a href="#"><img src="./Index/Common/img/sina.png" alt="sina"></a><a href="#"><img src="./Index/Common/img/alipay.png" alt="alipay"></</div></div>';

// 购物车
var cart = '<div class="cart_empty"></div>';

// var historys = '111';
var historys = '<div class="history_list"><div><h4>我看过的</h4><a href="javascript:;" class="panl_close"></a></div><a href="#"><img src="./Index/Common/img/1125_thumb_G_1398648339553.png" alt="img" /><span>OLIVI 摩芙巧克力 <i>&yen;</i><b>241</b></span></a><a href="#"><img src="./Index/Common/img/1125_thumb_G_1398648339553.png" alt="img" /><span>OLIVI 摩芙巧克力 <i>&yen;</i><b>241</b></span></a><a href="#"><img src="./Index/Common/img/1125_thumb_G_1398648339553.png" alt="img" /><span>OLIVI 摩芙巧克力 <i>&yen;</i><b>241</b></span></a><p>推荐商品</p><dl><dt><a href="#"><img src="./Index/Common/img/1125_thumb_G_1398648339553.png" alt="" /></a></dt><dd><a href="#"><span>OLIVI 摩芙巧克力</span></a></dd><dd><i>&yen;</i><b>241</b></dd></dl><dl><dt><a href="#"><img src="./Index/Common/img/1125_thumb_G_1398648339553.png" alt="" /></a></dt><dd><a href="#"><span>OLIVI 摩芙巧克力</span></a></dd><dd><i>&yen;</i><b>241</b></dd></dl><a class="sidebar_more" href="#">更多...</a></div>'
// 上一个下标
var lastIndex = -1;
$(".sidebar_nav li").on('click', function() {
    if ($(".sidebar_show").is(':hidden')) {
        if ($(this).index() != 2 && $(this).index() != 5 && $(this).index() != 6 && $(this).index() != 7) {
            if ($(this).index() == 1) {
                $(".sidebar_show").show("200").html(cart);
            } else if ($(this).index() == 4) {
                $(".sidebar_show").show("200", function(){
                    $(".panl_close").on("click", function() {
                        $(".sidebar_nav li").removeClass("li_click");
                        $(".sidebar_nav li").removeClass("li_hover");
                        $(".sidebar_show").hide();
                    });
                }).html(historys);
            }else if ($(this).index() == 0 || $(this).index() == 3){
                $(".sidebar_show").show("200", function(){
                    $(".panl_close").on("click", function() {
                        $(".sidebar_nav li").removeClass("li_click");
                        $(".sidebar_nav li").removeClass("li_hover");
                        $(".sidebar_show").hide();
                    });
                }).html(login);
            } 
            $(this).addClass('li_click');
            $(".sidebar_nav span").hide().css("right", "50px");
            lastIndex = $(this).index();
        } 
    } else {
        if ($(this).index() == lastIndex) {
            $(".sidebar_show").hide();
            $(this).removeClass("li_click");
            lastIndex = -1;
        } else {
            $(".sidebar_nav li:eq("+ lastIndex +")").removeClass("li_click");
            $(this).addClass('li_click');
            if ($(this).index() == 1) {
                $(".sidebar_show").show("200").html(cart);
            } else if ($(this).index() == 0 || $(this).index() == 3) {
                $(".sidebar_show").show("200", function(){
                    $(".panl_close").on("click", function() {
                        $(".sidebar_nav li").removeClass("li_click");
                        $(".sidebar_nav li").removeClass("li_hover");
                        $(".sidebar_show").hide();
                    });
                }).html(login);
            } else if ($(this).index() == 4) {
                $(".sidebar_show").show("200", function(){
                    $(".panl_close").on("click", function() {
                        $(".sidebar_nav li").removeClass("li_click");
                        $(".sidebar_nav li").removeClass("li_hover");
                        $(".sidebar_show").hide();
                    });
                }).html(historys);
            }
            lastIndex = $(this).index();
        }   
    }
});
$(".sidebar_nav .sbar_top").click(function() {
    $('body').animate({
        scrollTop: 0,
    }, 500);
});
$(".sidebar_nav .sbar_close").click(function() {
    $('.sidebar_show').hide(function(){
        $('.sidebar_warp').animate({
            right: -35
        }, 100);
        $('.sidebar_tool').animate({
            right: 35
        }, 100);
    });
});
$(".sidebar_tool").click(function(){
    $('.sidebar_tool').animate({
        right: -40
    }, 100);
    $('.sidebar_warp').animate({
        right: 0
    }, 100);
})
