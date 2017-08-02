$(".sidebar_nav li").hover(function(){
    $(this).addClass("li_hover");
    $(this).find("span").show().animate({
        right: 35,
    }, 400, "swing")
},function(){
    $(this).removeClass("li_hover");
    $(".sidebar_nav span").hide().css("right", "50px");
});
// 登录
var login = '<div class="from_warp"><h4>用户登录</h4><div><label for="sbarUsername">账户：</label><input id="sbarUsername" type="text" name="username" value=""/></div><div><label for="sbarUserpwd">密码：</label><input id="sbarUserpwd" type="password" name="userpwd" value=""/></div><div class="sbar_btn"><button type="submit"></button><span>找回密码</span></div><div class="logingo"><a href="#">新用户注册</a></div><div class="login_info">您还可以使用合作网站账号登录：</div><div class="sbar_icon"><a href="#"><img src="./img/qq.png" alt="qq"></a><a href="#"><img src="./img/sina.png" alt="sina"></a><a href="#"><img src="./img/alipay.png" alt="alipay"></</div></div>';
$(".sidebar_nav li:eq(0)").click(function(){
    if ($(".sidebar_show").is(":hidden")) {
        $(".sidebar_show").toggle("200").html(login);
    } else {
        $(".sidebar_show").html(login);
    }   
})
// 购物车
var cart = '<div class="cart_empty"></div>';
$(".sidebar_nav li:eq(1)").click(function() {
    if ($(".sidebar_show").is(":hidden")) {
        $(".sidebar_show").toggle("200").html(cart);
    } else {
        $(".sidebar_show").html(cart);
    }
});