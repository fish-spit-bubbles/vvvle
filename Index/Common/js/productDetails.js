/*
    *@$scope.imgarr 是商品展示的图片数组
    *@price  商品促销价
    *@productNum 商品数量
    *
    *
    *
    *
    *
    *
    *
    *
    *
    *
    */



// 点击清空按钮清空所有侧边栏的浏览过的商品和类似商品
$(".vl_goods_dec_rr_vacum").click(function() {
    $(".vl_goods_dec_rr").children().remove();

});

//计算商品总价

var price = 188;
$(".show_goods_o_pic_ui-form-item>.clearfix[name='count']>input").on("input", function() {
    if ($(this).val() < 1) {
        $(this).val("1");
    };
    var productNum = $(this).val();
    var total = ~~productNum * price;
    $(".show_goods_o_pic_ui-form-item>.clearfix[name='count'] font ").text(total);

});

// 点击立即购买和加入购物车的的时候判断用户有没有选择度数

// 加入购物车
$(".padda>.Join_the_shopping_cart").click(function() {
    judgementDegree($(this));



});
// 立即购买
$(".padda>.padda_buynow").click(function(event){
    judgementDegree($(this));
    
});



var obj = {

};

// 判断用户是否选择度数
function judgementDegree(str) {
    // 左眼度数
    var leftEyeNumber = $(".attribute_item_flet").val();
    // 右眼的度数
    var  rightEyeNumber =$(".attribute_item_right").val();
    // console.log(leftEyeNumber ,rightEyeNumber );
    if(leftEyeNumber == "请选择"){
            $(".padd_loop_check").css({
                "display":"flex",
            });
            $(".padd_loop_check").children().eq(0).css({
                "opacity":"1",
            });
            $(".show_goods_o_pic_ui-form-item>.padd_loop").css({
                "marginTop":"0px",
            });
    }else{
          $(".padd_loop_check").children().eq(0).css({
                "opacity":"0",
            });
    };
     if(rightEyeNumber == "请选择"){
             $(".padd_loop_check").css({
               "display":"flex",
            });
            $(".padd_loop_check").children().eq(1).css({
                "opacity":"1",
            });
            $(".show_goods_o_pic_ui-form-item>.padd_loop").css({
                "marginTop":"0px",
            });
    }else{
         $(".padd_loop_check").children().eq(1).css({
                "opacity":"0",
            });
    };
     if(leftEyeNumber !== "请选择" && rightEyeNumber !== "请选择"){
            $(".padd_loop_check").css({
            "display":"none",
            });

            $(".padd_loop_check").children().css({
                "opacity":"0",
            });
            $(".show_goods_o_pic_ui-form-item>.padd_loop").css({
                "marginTop":"50px",
            }); 
            
            if(str.prop("value")=="立即购买"){
                     getGoods();
            }else{
                // 加入数据库
                 // 立即购买AJAX返回执行动画
                    cartGetGoods(event);
            };

            // 获取商品、用户数据、数量、单价、进行AJAX跳转到购物车
             
     };
};


// 获取商品、用户数据、数量、单价、进行AJAX跳转到购物车
function getGoods(){
    // 用户ID
    var  uid = $("#uid").attr("uid");
    // 产品ID
    var  pid = $("#pid").attr("pid");
    // 商品路径
    var pbgimg = $("img[monfr='tlsp']").prop("src");
    // 产品名称
    var productName = $(".show_goods_o_pic_ui-form-item_goods_o_name>span").html();
    // 左眼度数
    var leftdiy = $(".attribute_item_flet").val();
    // 右眼度数
    var  rigth = $(".attribute_item_right").val();
    // 市场价格
    var marketPrice =  $(".market").text();
    // 本店价格
    var wlprice  = $(".show_goods_tm_price1").text();
    // 购买商品数量
    var pnum = $("input[type='number']").val();
    // 小计
    var total = $(".show_goods_o_pic_ui-form-item>.clearfix[name='count'] font").text();
    // 积分
    var integral  = $(".show_goods_o_pic_ui-form-item>.clearfix[name='sell']>font>span").text();
    obj={
        uid,
        pid,
        pbgimg,
        productName,
        leftdiy,
        rigth,
        marketPrice,
        pnum,
        total,
        integral,
        wlprice
    };
    // console.log(uid,pid);

    if(window.XMLHttpRequest){
        var ajax = new XMLHttpRequest;
    }else{
        var  ajax = new ActiveXObject;
    };
    ajax.open("POST","http://crlate.com/vvvle/index.php/ProductDetails/getGoods",true);
    ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    var data = JSON.stringify(obj);
    ajax.send(data);
    ajax.onreadystatechange=function(){
        if(ajax.readyState==4 && ajax.status==200){          
                var res = ajax.responseText;
                var ress = JSON.parse(res);
                if(ress.status==1){
                        window.location.href="http://crlate.com/vvvle/index.php/ShopCart/index";
                }else if(ress.status==2){
                         window.location.href="http://crlate.com/vvvle/index.php/Login/login";
                }else{      
                   alert("系统错误");     
                };
        };
    };

};

// 立即购买AJAX返回执行动画

function cartGetGoods(event){
    // 用户ID
    var  uid = $("#uid").attr("uid");
    // 产品ID
    var  pid = $("#pid").attr("pid");
    // 商品路径
    var pbgimg = $("img[monfr='tlsp']").prop("src");
    // 产品名称
    var productName = $(".show_goods_o_pic_ui-form-item_goods_o_name>span").html();
    // 左眼度数
    var leftdiy = $(".attribute_item_flet").val();
    // 右眼度数
    var  rigth = $(".attribute_item_right").val();
    // 市场价格
    var marketPrice =  $(".market").text();
    // 本店价格
    var wlprice  = $(".show_goods_tm_price1").text();
    // 购买商品数量
    var pnum = $("input[type='number']").val();
    // 小计
    var total = $(".show_goods_o_pic_ui-form-item>.clearfix[name='count'] font").text();
    // 积分
    var integral  = $(".show_goods_o_pic_ui-form-item>.clearfix[name='sell']>font>span").text();
    obj={
        uid,
        pid ,
        pbgimg,
        productName,
        leftdiy,
        rigth,
        marketPrice,
        pnum,
        total,
        integral,
        wlprice
    };
    // console.log(obj);

    if(window.XMLHttpRequest){
        var ajax = new XMLHttpRequest;
    }else{
        var  ajax = new ActiveXObject;
    };
    ajax.open("POST","http://crlate.com/vvvle/index.php/ProductDetails/getGoodsOne",true);
    ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    var data = JSON.stringify(obj);
    ajax.send(data);
    ajax.onreadystatechange=function(){
        if(ajax.readyState==4 && ajax.status==200){
                var res = ajax.responseText;
                var res1 = JSON.parse(res);
                if(res1.status==1){
                         // 动画函数
                      gwc(event);
                     var opdernum =$(".sbar_nub_icon").text();
                     opdernum=1;
                     $(".sbar_nub_icon").text(opdernum);
                }else{
                   alert("系统错误");     
                };
        };
    };

};










// 点击商品详情滚动到商品详情
$(".detail_tab_clearfix>ul>li[bokl='outs']").click(function(){
     $("body").animate({scrollTop:"1200"},300);
        $(this).css({
                 "borderBottom":"1px solid #fff",
                 "borderTop":"3px solid #FF0000",
                 "background": "#fff",
        });
        $(".detail_tab_clearfix>ul>li[bokl='fbm']").css({
                "borderBottom":"",
                 "borderTop":"",
                 "background": "",
        });



});


// 卖家品论
$(".detail_tab_clearfix>ul>li[bokl='fbm']").eq(0).click(function(){
     $("body").animate({scrollTop:"29258"},300);
   $(this).css({
                 "borderBottom":"1px solid #fff",
                 "borderTop":"3px solid #FF0000",
                 "background": "#fff",
 });
$(".detail_tab_clearfix>ul>li[bokl='fbm']:gt(0)").css({
                "borderBottom":"",
                 "borderTop":"",
                 "background": "",
});
$(".detail_tab_clearfix>ul>li[bokl='outs']").css({
                 "borderBottom":"",
                 "borderTop":"",
                 "background": "",
});
    


    
});
// 达人秀
$(".detail_tab_clearfix>ul>li[bokl='fbm']").eq(1).click(function(){
     $("body").animate({scrollTop:"2915"},300);

  $(this).css({
                 "borderBottom":"1px solid #fff",
                 "borderTop":"3px solid #FF0000",
                 "background": "#fff",
 });

$(".detail_tab_clearfix>ul>li[bokl='fbm']:first").css({
                "borderBottom":"",
                 "borderTop":"",
                 "background": "",
});
$(".detail_tab_clearfix>ul>li[bokl='fbm']:gt(1)").css({
                "borderBottom":"",
                 "borderTop":"",
                 "background": "",
});


$(".detail_tab_clearfix>ul>li[bokl='outs']").css({
                 "borderBottom":"",
                 "borderTop":"",
                 "background": "",
});


});  

// 相关文章  29671
$(".detail_tab_clearfix>ul>li[bokl='fbm']").eq(2).click(function(){
     $("body").animate({scrollTop:"29671"},300);
  $(this).css({
                 "borderBottom":"1px solid #fff",
                 "borderTop":"3px solid #FF0000",
                 "background": "#fff",
 });

$(".detail_tab_clearfix>ul>li[bokl='fbm']:lt(2)").css({
                "borderBottom":"",
                 "borderTop":"",
                 "background": "",
});


$(".detail_tab_clearfix>ul>li[bokl='outs']").css({
                 "borderBottom":"",
                 "borderTop":"",
                 "background": "",
});



});  



// 用于判断商品详细咨询导航条固定
$(document).scroll(function(){

    var leftbg= $(".show_details[box='bg']").offset().left;
if($(document).scrollTop() >= 1200){
    $(".detail_tab_clearfix").css({
        "position":"fixed",
        "top":"0px",
        "left":leftbg,
        "z-index":"1",
    });
}else{
    $(".detail_tab_clearfix").css({
        "position":"",
        "top":"",
        "left":"",
    });
};

    
});


// 购物车动画

 function gwc(event) {
    var offset = $(".sbar_nub_icon").offset();
    var addcar = $(this);
    var flyer = $("<div style='display:inline-block; width: 20px; height: 20px; '><img src='http://crlate.com/vvvle/Index/Common/img/img_productDetails/cart.svg'/></div>");
    flyer.fly({
        start: {
            left: event.clientX, //开始位置（必填）#fly元素会被设置成position: fixed 
            top: event.clientY //开始位置（必填） 
        },
        end: {
            left: offset.left + 10, //结束位置（必填） 
            top: 252, //结束位置（必填） 
            width: 0, //结束时宽度 
            height: 0 //结束时高度 
        },
        onEnd: function() { //结束回调 
            $(".sidebar_nav #msg").show().animate({
                width: '250px'
            }, 200).fadeOut(1000, function() {
                $(this).width("-1");
            }); //提示信息 
            // addcar.css("cursor","default").removeClass('orange').unbind('click'); 
            this.destory(); //移除dom 
        }
    });
};
        
 




























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
    // 图片加载路径
    $scope.imgsppath="http://localhost/vvvle/Index/Common/img/img_productDetails/";
    for (var i = 0; i < $scope.imgarr.length; i++) {
        $scope.imgarr[i].path =   $scope.imgsppath+$scope.imgarr[i].path;  
    };



});