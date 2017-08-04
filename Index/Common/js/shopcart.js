function changeProTotalAndPirces() {
    var money = 0;
    $('.goods_btm_money').html('0.00');
    var $aCheck = $('.checkt').filter(function (index) {
        return $(this).prop('checked') == true;
    });
    var nCount = $aCheck.length;
    $aCheck.each(function (index, value) {
        var xiaoji = $(this).parents('tr').find('.proMoney').html();
        money = parseInt($('.goods_btm_money').html()) + parseInt(xiaoji) + ".00";
        $('.goods_btm_money').html(money);
    });
    // $('.proTotal span').html(nCount);
}
// 检测是否全选
function jiancha() {
    var $aCheck = $('.checkt').filter(function (index) {
        return $(this).prop('checked') == true;
    });
    var $aInput = $('.checkt').length;
    if ($aCheck.length == $aInput && $aInput != 0) {
        $('.selectAll').prop('checked', true);
    } else {
        $('.selectAll').prop('checked', false);
    }
}
// 全选按钮
$('#selectAll1').click(function () {
    $('#selectAll2').prop('checked', function (index, value) {
        return $('#selectAll1').prop('checked');
    });
    $('.checkt').prop('checked', function (index, value) {
        return $('#selectAll1').prop('checked');
    });
    changeProTotalAndPirces();
});
$('#selectAll2').click(function () {
    $('#selectAll1').prop('checked', function (index, value) {
        return $('#selectAll2').prop('checked');
    });
    $('.checkt').prop('checked', function (index, value) {
        return $('#selectAll2').prop('checked');
    });
    changeProTotalAndPirces();
});
// 获取所有btn
$('.ys').click(function () {
    var num = $(this).parent().find('.count').val();
    var mon = $(this).parents('tr').find('.proPirce').html();
    if ($(this).val() == '+') {
        num++;
    } else {
        num--;
    }
    if (num < 1) {
        num = 1;
    }
    $(this).parents('tr').find('.proMoney').html(num * mon + ".00");
    $(this).parent().find('.count').val(num);
    changeProTotalAndPirces();
});
// 单选按钮
$('.checkt').click(function () {
    jiancha();
    changeProTotalAndPirces();
});
// 删除选中
// $('.delAll').click(function () {
//     var $aCheck = $('.checkt').filter(function (index) {
//         return $(this).prop('checked') == true;
//     });
//     $aCheck.each(function (index, value) {
//         $(this).parents('tr').remove();
//     });
//     jiancha();
//     changeProTotalAndPirces();
// });
// 删除单个
$('.proDel').click(function () {
    $(this).parents('tr').remove();
    jiancha();
    changeProTotalAndPirces();
});