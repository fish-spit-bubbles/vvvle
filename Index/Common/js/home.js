$(".sub_nav>li").hover(function () {
    $(this).find(".sub_show").show()
}, function () {
    $(this).find(".sub_show").hide()
});
// banner效果
var length = $('.banner_imgs li').length;
for (var i = 1; i < length + 1; i++) {
    var li = "<li></li>";
    $('.banner_num').append(li);
}
$('.banner_imgs li').first().show();
$('.banner_num li').first().addClass('banner_active');
$('.banner_num li').mouseover(function () {
    $(this).addClass('banner_active').siblings().removeClass('banner_active');
    var index = $(this).index();
    i = index;
    $('.banner_imgs li').eq(index).fadeIn(300).siblings().fadeOut(300);
})
var i = 0;
var timer = setInterval(move, 3000);
function move() {
    i++;
    if (i == length) i = 0;
    $('.banner_imgs li').eq(i).fadeIn(300).siblings().fadeOut(300);
    $('.banner_num li').eq(i).addClass('banner_active').siblings().removeClass('banner_active');
}

function moveL() {
    i--;
    if (i == -1) i = length - 1;
    $('.banner_imgs li').eq(i).fadeIn(300).siblings().fadeOut(300);
    $('.banner_num li').eq(i).addClass('banner_active').siblings().removeClass('banner_active');
}

$('.banner_wrap').hover(
    function () {
        clearInterval(timer);
    },
    function () {
        timer = setInterval(move, 3000);
    }
);
$(".banner_btn").hover(function(){
    $(this).animate({
        opacity: .9,
    }, 400);
}, function(){
    $(this).animate({
        opacity: .4,
    }, 400);
});
$('.banner_btn_right').click(function () {
    move();
})
$('.banner_btn_left').click(function () {
    moveL();
})
// 手风琴效果
var j = 0; 
var timers = setInterval(run, 3000);
var numbers = $(".home_salesList_content li").length;
function run() {
    j++;
    if (j == numbers) {
        $('.home_salesList_content li:gt(0)').each(function(index){
            $(this).animate({
                left: 768 + 144 * index
            }, 400)
        })
        j = 0;
    } else {
        $('.home_salesList_content li').eq(j).animate({
            left: 144 * j
        }, 400);
    }  
}
var last = -1;
$(".home_salesList_content li").hover(function(){
    clearInterval(timers);
    var cindex = $(this).index();
    if (cindex > j) {
        for (var i = j; i <= cindex; i++) {
            $(".home_salesList_content li").eq(i).animate({
                left: 144 * i
            }, 400);
        }
    } else {
        for (var i = cindex+1; i <= j; i++) {
            if (i != 0) {
                $(".home_salesList_content li").eq(i).animate({
                    left: 144 * (i-1) + 768
                }, 400);
            } 
        }
    }
    j = $(this).index();
}, function(){
    timers = setInterval(run, 3000);
})