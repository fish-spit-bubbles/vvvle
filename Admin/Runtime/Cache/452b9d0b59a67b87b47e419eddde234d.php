<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理员界面</title>
    <link type="text/css" rel="stylesheet" href="https://cdn.bootcss.com/normalize/6.0.0/normalize.min.css" /> 
    <link rel="stylesheet" type="text/css" href="__ROOT__/Index/Common/libs/bootstrap/css/bootstrap.min.css" />
    <script type="text/javascript" src="__ROOT__/Index/Common/js/angular.min.js"></script>
    <script type="text/javascript" src="__ROOT__/Index/Common/js/jquery.min.js"></script>
    <style>
        #box>div{margin-top: 15px;}
    </style>
</head>
<body ng-app="goods" ng-controller="mygoods">
    <div class="container text-center" id="box">
        <h3 class="text-primary">管理员界面</h3>
        <form action="__APP__/Admin/addData" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
            
            <div class="form-group">
                <label for="firstname_01" class="col-sm-2 control-label">品牌名:</label>
                <div class="col-sm-10">
<<<<<<< HEAD
                    <input type="text" class="form-control" id="firstname_01">
=======
                    <input ng-model="goods.brand" type="text" class="form-control" id="firstname_01" >
>>>>>>> fdd9cd91d45eabd54e58b1ba759ba96e32cea501
                </div>
            </div>

            <div class="form-group">
                <label for="firstname_02" class="col-sm-2 control-label">品类:</label>
                <div class="col-sm-10">
<<<<<<< HEAD
                    <input type="text" class="form-control" id="firstname_02">
=======
                    <input  ng-model="goods.category" type="text" class="form-control" id="firstname_02" >
>>>>>>> fdd9cd91d45eabd54e58b1ba759ba96e32cea501
                </div>
            </div>

            <div class="form-group">
                <label for="firstname_03" class="col-sm-2 control-label">适用于:</label>
                <div class="col-sm-10">
<<<<<<< HEAD
                    <input type="text" class="form-control" id="firstname_03">
=======
                    <input  ng-model="goods.applyTo" type="text" class="form-control" id="firstname_03" >
>>>>>>> fdd9cd91d45eabd54e58b1ba759ba96e32cea501
                </div>
            </div>

            <div class="form-group">
                <label for="firstname_04" class="col-sm-2 control-label">功效:</label>
                <div class="col-sm-10">
<<<<<<< HEAD
                    <input type="text" class="form-control" id="firstname_04">
=======
                    <input  ng-model="goods.effect" type="text" class="form-control" id="firstname_04" >
>>>>>>> fdd9cd91d45eabd54e58b1ba759ba96e32cea501
                </div>
            </div>

            <div class="form-group">
                <label for="firstname_05" class="col-sm-2 control-label">市场价格:</label>
                <div class="col-sm-10">
<<<<<<< HEAD
                    <input type="text" class="form-control" id="firstname_05">
=======
                    <input  ng-model="goods.markePrice" type="text" class="form-control" id="firstname_05" >
>>>>>>> fdd9cd91d45eabd54e58b1ba759ba96e32cea501
                </div>
            </div>

            <div class="form-group">
                <label for="firstname_06" class="col-sm-2 control-label">微乐价:</label>
                <div class="col-sm-10">
<<<<<<< HEAD
                    <input type="text" class="form-control" id="firstname_06">
=======
                    <input  ng-model="goods.wlPrice" type="text" class="form-control" id="firstname_06" >
>>>>>>> fdd9cd91d45eabd54e58b1ba759ba96e32cea501
                </div>
            </div>

            <div class="form-group">
                <label for="firstname_07" class="col-sm-2 control-label">销量:</label>
                <div class="col-sm-10">
<<<<<<< HEAD
                    <input type="text" class="form-control" id="firstname_07">
=======
                    <input  ng-model="goods.salesVolume" type="text" class="form-control" id="firstname_07" >
>>>>>>> fdd9cd91d45eabd54e58b1ba759ba96e32cea501
                </div>
            </div>

            <div class="form-group">
<<<<<<< HEAD
                <label for="firstname_08" class="col-sm-2 control-label">产品名:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstname_08">
=======
                <label for="firstname_07" class="col-sm-2 control-label">产品名:</label>
                <div class="col-sm-10">
                    <input  ng-model="goods.productName" type="text" class="form-control" id="firstname_07">
>>>>>>> fdd9cd91d45eabd54e58b1ba759ba96e32cea501
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="inputfile01">bgImg(美女代言)</label>
                <div class="col-sm-10">
<<<<<<< HEAD
                      <input type="file" id="inputfile01" name="imgs[]" accept="image/png, image/jpeg, image/gif, image/jpg" multiple>
=======
                      <input  ng-model="goods.bgImg" type="file" id="inputfile01">
>>>>>>> fdd9cd91d45eabd54e58b1ba759ba96e32cea501
                </div>              
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="inputfile02">productImg(产品)</label>
                <div class="col-sm-10">
<<<<<<< HEAD
                    <input type="file" id="inputfile02" accept="image/png, image/jpeg, image/gif, image/jpg"> 
                </div>              
            </div>
            <button type="button" class="btn btn-success" onclick="sub()">添加</button> 
            <button type="button" class="btn btn-warning">更新</button>
            <button type="button" class="btn btn-danger">删除全部</button>
            <button type="button" class="btn btn-info">查询</button>
        </form>
    </div>  
</body>
<script>
function sub() {
    var brand = $("#firstname_01").val();
    var category = $("#firstname_02").val();
    var applyTo = $("#firstname_03").val();
    var effect = $("#firstname_04").val();
    var marketPrice = $("#firstname_05").val();
    var wlPrice = $("#firstname_06").val();
    var salesVolume = $("#firstname_07").val();
    var productName = $("#firstname_08").val();
    var bgImg = document.getElementById("inputfile01")["files"];
    var productImg = document.getElementById("inputfile02")["files"][0];
    var form = new FormData();
    for(i=0;i<bgImg.length;i++){      
        form.append("bgImg["+i+"]", bgImg[i]);
    }
    form.append("brand",brand);
    form.append("category",category);
    form.append("applyTo",applyTo);
    form.append("effect",effect);
    form.append("marketPrice",marketPrice);
    form.append("wlPrice",wlPrice);
    form.append("salesVolume",salesVolume);
    form.append("productName",productName);
    form.append("productImg",productImg);
    $.ajax({
        type:"post",
        url:"__APP__/Admin/addData",
        data: form,
        processData:false,
        contentType:false,
        async:true,
        success:function(data){
            console.log(data);
        }
    })		
}
=======
                      <input ng-model="goods.productImg" type="file" id="inputfile02">
                </div>              
            </div>
        
            <button ng-click="addData()" type="button" class="btn btn-success">添加</button>
            <button ng-click="updateData()" type="button" class="btn btn-warning">更新</button>
            <button ng-click="delData()" type="button" class="btn btn-danger">删除全部</button>
            <button ng-click="selectData()" type="button" class="btn btn-info">查询</button>
        </form>
    </div>
   
    
</body>
<script type="text/javascript">
    var goods = angular.module("goods",[]);
    goods.controller("mygoods",function($scope,$http){
        $scope.goods = {
            brand:"1123"
        }

    })
>>>>>>> fdd9cd91d45eabd54e58b1ba759ba96e32cea501
</script>
</html>