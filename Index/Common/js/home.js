$(".sub_nav>li:lt(6)").hover(function(){
    $(this).find(".sub_show").show()
}, function(){
    $(this).find(".sub_show").hide()
})