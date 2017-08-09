/*
 *
 * @ $(".machine>.mores_sq") 筛选的展开和收起
 *@ deploy 用于判断 大于-》展开点击时候的样式的变化
 *@firstDeploy 是第》展开选项》第一个选项
 *
 *
 *
 **
 *
 *
 *
 *
 *
 *
 */



$(".machine>.mores_sq:gt(0)").each(function(i) {
    let deploy = 1;
    $(this).click(function() {
        if (deploy == 1) {
            $(this).children().eq(1).attr("class", "glyphicon glyphicon-triangle-top");
            $(this).children().eq(0).text("收起");
            deploy = 0;
        var parendHeight =  $(this).parent().css("height");
       $(this).parent().children().eq(0).css("height",parendHeight);
        } else {
            $(this).children().eq(1).attr("class", "glyphicon glyphicon-triangle-bottom");
            $(this).children().eq(0).text("展开");
            deploy = 1;
        };
    });
});


var firstDeploy = 1;
$(".machine>.mores_sq:first").on("click", function() {
    if (firstDeploy == 1) {
        $(this).children().eq(1).attr("class", "glyphicon glyphicon-triangle-top");
        $(this).children().eq(0).text("收起");
        $(".containerre[title='select_box']>.machine[title='vary']").css("height", "auto");
        firstDeploy = 0;

        var parendHeight =  $(this).parent().css("height");
       $(this).parent().children().eq(0).css("height",parendHeight);
  

    } else {
        $(this).children().eq(1).attr("class", "glyphicon glyphicon-triangle-bottom");
        $(this).children().eq(0).text("展开");
        $(".containerre[title='select_box']>.machine[title='vary']").css("height", "51px");
        firstDeploy = 1;



    };
});


// 点击选项获取值添加标签在 已选条件里边
var textarr = [];

$(".nolimit_choice").each(function(i) {
// console.log(i);
 
    $(".nolimit_choice").eq(i).click(function() {
        var  text = $(this).text();
    

        hco3addtag(text);
        limitTerm(); 
  
        $(".schon_choice").css("display", "block");

        limitTerm();
    });
});



// 获取值在创建标签添加到已选条件
function hco3addtag(text) {
    var tagdata = "<a class='select' href='#'>" +
        "<span class='select_data'>" + text + " </span>" +
        "<i class='glyphicon glyphicon-remove'></i>" +
        "</a>";
    $(".schon_choice").append(tagdata);


    // 每次添加条件时删除方法跟着走 这样就跟遍历到所有的条件
    $(".select>.glyphicon-remove").each(function(i) {
        $(this).click(function() {
            $(this).parent().remove();
        });
    });
};


// 点击选择的时候 已选条件展开
$(".schon_choice>.vacum_up").click(function() {
    $(".select").remove();
    $(".schon_choice").css("display", "none");

});

// 初始时要删除已选条件
$(".select>.glyphicon-remove").each(function(i) {
    $(this).click(function() {
        $(this).parent().remove();
    });
});


// 判断已选条件是否大于限制条件  大于条件就删除已选条件的子元素
function limitTerm(){
   var str =   $(".schon_choice").children().length>=7; 
   if(str){
     $(".schon_choice").children().each(function(i){
            if(i>=7){
              $(".schon_choice").children().eq(i).remove();
            };
           
        });
   };

};