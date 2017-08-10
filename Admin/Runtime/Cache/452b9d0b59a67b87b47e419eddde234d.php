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
         html,body{width:100%;height:100%;margin:0;padding:0;font-family:"lucida grande", "lucida sans unicode", lucida, helvetica, "Hiragino Sans GB", "Microsoft YaHei", "WenQuanYi Micro Hei", sans-serif;}
        .header{height:40px;width:100%;background-color:#242424;position:fixed;z-index: 999;}
        .header_title{line-height:40px;margin-left:60px;color:#fff;font-size:15px;}
        .header_user{font-size:12px;margin-left:40px;color:#ccc;font-family: "lucida grande";font-size: 15px;}
        .header_loginout{float: right; color:#ccc;margin-right: 50px;}
        #box>h3{margin-top: 55px;}
        #box>div {
            margin-top: 15px;
        }
        .pagination>li>.span_active{
            background: #5cb85c;
        }
    </style>
</head>

<body ng-app="myapp" ng-controller="mycontroller">
    <div class="header">
        <div class="header_title"><a href="/">后台管理系统</a><span class="header_user">Hi~欢迎你 , 管理员<?php echo (session('username')); ?></span>
        <span class="header_loginout"><a href="__APP__/Admin/layout">[退出]</a></span></div>
    </div>
    <div class="container text-center" id="box">
        <h3 class="text-primary">管理员界面</h3>
        <form action="__APP__/Admin/addData" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">

            <div class="form-group">
                <label for="firstname_01" class="col-sm-3 control-label">品牌名:</label>
                <div class="col-sm-9">
                    <input ng-model="brand" type="text" class="form-control" id="firstname_01">
                </div>
            </div>

            <div class="form-group">
                <label for="firstname_02" class="col-sm-3 control-label">品类:</label>
                <div class="col-sm-9">
                    <input ng-model="category" type="text" class="form-control" id="firstname_02">
                </div>
            </div>

            <div class="form-group">
                <label for="firstname_03" class="col-sm-3 control-label">适用于:</label>
                <div class="col-sm-9">
                    <input ng-model="applyTo" type="text" class="form-control" id="firstname_03">
                </div>
            </div>

            <div class="form-group">
                <label for="firstname_04" class="col-sm-3 control-label">功效:</label>
                <div class="col-sm-9">
                    <input ng-model="effect" type="text" class="form-control" id="firstname_04">
                </div>
            </div>

            <div class="form-group">
                <label for="firstname_05" class="col-sm-3 control-label">市场价格:</label>
                <div class="col-sm-9">
                    <input ng-model="marketPrice" type="text" class="form-control" id="firstname_05">
                </div>
            </div>

            <div class="form-group">
                <label for="firstname_06" class="col-sm-3 control-label">微乐价:</label>
                <div class="col-sm-9">
                    <input ng-model="wlPrice" type="text" class="form-control" id="firstname_06">
                </div>
            </div>

            <div class="form-group">
                <label for="firstname_07" class="col-sm-3 control-label">销量:</label>
                <div class="col-sm-9">
                    <input ng-model="salesVolume" type="text" class="form-control" id="firstname_07">
                </div>
            </div>

            <div class="form-group">
                <label for="firstname_08" class="col-sm-3 control-label">产品名:</label>
                <div class="col-sm-9">
                    <input ng-model="productName" type="text" class="form-control" id="firstname_08">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="inputfile01">bgImg(美女代言)</label>
                <div class="col-sm-9">
                    <input type="file" id="inputfile01" accept="image/png, image/jpeg, image/gif, image/jpg">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="inputfile02">productImg(产品)</label>
                <div class="col-sm-9">
                    <input type="file" id="inputfile02" accept="image/png, image/jpeg, image/gif, image/jpg">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="inputfile03">infoImg(产品信息图多图上传)</label>
                <div class="col-sm-9">
                    <input type="file" id="inputfile03" name="imgs[]" accept="image/png, image/jpeg, image/gif, image/jpg" multiple>
                </div>
            </div>
            <input type="hidden" ng-model="id" />
            <button type="button" class="btn btn-success" ng-click="sub()">添加</button>
            <button type="button" class="btn btn-success" ng-click="updatas()">更新</button>
        </form>
        <br/>
        <br/>
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <th>品牌名</th>
                <th>品类</th>
                <th>适用于</th>
                <th>功效</th>
                <th>市场价格</th>
                <th>微乐价</th>
                <th>销量</th>
                <th>产品名</th>
                <th>bgImg</th>
                <th>productImg</th>
                <th>infoImg</th>
                <th>添加时间</th>
                <th>操作</th>
            </tr>
            <tr ng-repeat="v in list" ng-cloak>
                <th>{{v.id}}</th>
                <th>{{v.brand}}</th>
                <th>{{v.category}}</th>
                <th>{{v.applyTo}}</th>
                <th>{{v.effect}}</th>
                <th>{{v.marketPrice}}</th>
                <th>{{v.wlPrice}}</th>
                <th>{{v.salesVolume}}</th>
                <th>{{v.productName}}</th>
                <th>{{v.bgImg}}</th>
                <th>{{v.productImg}}</th>
                <th>{{v.infoImg}}</th>
                <th>{{v.addTime}}</th>
                <th>
                    <button type="button" class="btn btn-info" ng-click="edit(v.id)">修改</button>
                    <button type="button" class="btn btn-danger" ng-click="del(v.id)">删除</button>
                </th>
            </tr>
        </table>
    </div>
    <nav aria-label="Page navigation" style="text-align: center">
        <ul class="pagination">
            <li>
                <span ng-click="pre(index - 1)" aria-hidden="true">&laquo;</span>
            </li>
            <li ng-repeat="n in range(0, count)"><span ng-class="{true:'span_active', false: ''}[index == n]" ng-click="skip(n)">{{n + 1}}</span></li>
            <li>
                <span ng-click="nexts(index + 1)" aria-hidden="true">&raquo;</span>
            </li>
        </ul>
    </nav>
</body>
<script>
    var app = angular.module("myapp", []);
    app.controller("mycontroller", function ($scope, $http) {
        $scope.id = "";
        $scope.brand = "";
        $scope.category = "";
        $scope.applyTo = "";
        $scope.effect = "";
        $scope.marketPrice = "";
        $scope.wlPrice = "";
        $scope.salesVolume = "";
        $scope.productName = "";
        $scope.index = 0;
        $http.get("__APP__/Admin/getList").success(function(data){
            $scope.list = data.data;
            $scope.count = data.total;
        });
        $scope.range = function(min, max, step) {
            step = step || 1;
            var input = [];
            for (var i = min; i < max; i += step) {
                input.push(i);
            }
            return input;
        };
        $scope.sub = function() {
            var bgImg = document.getElementById("inputfile01")["files"][0];
            var productImg = document.getElementById("inputfile02")["files"][0];
            var infoImg = document.getElementById("inputfile03")["files"];
            var form = new FormData();
            for (i = 0; i < infoImg.length; i++) {
                form.append("infoImg[" + i + "]", infoImg[i]);
            }
            form.append("brand", $scope.brand);
            form.append("category", $scope.category);
            form.append("applyTo", $scope.applyTo);
            form.append("effect", $scope.effect);
            form.append("marketPrice", $scope.marketPrice);
            form.append("wlPrice", $scope.wlPrice);
            form.append("salesVolume", $scope.salesVolume);
            form.append("productName", $scope.productName);
            form.append("page", $scope.index);
            form.append("bgImg", bgImg);
            form.append("productImg", productImg);
            $.ajax({
                type: "post",
                url: "__APP__/Admin/addData",
                data: form,
                processData: false,
                contentType: false,
                async: true,
                success: function (data) {
                    $scope.$apply(function(){
                        $scope.list = data.data;
                        $scope.count = data.total;
                    });
                }
            })
        }
        $scope.del = function(id){
            $http({
                url: "__APP__/Admin/delData",
                method: "post",
                data: {
                    id: id,
                    page: $scope.index
                },
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                }
            }).success(function(data){
                $scope.list = data.data;
                $scope.count = data.total;
                $scope.index = data.page;
            })
        }
        $scope.edit = function(id){
            $http({
                url: "__APP__/Admin/seleteData",
                method: "post",
                data: {
                    id: id,
                },
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                }
            }).success(function(data){
                $scope.id = data.data.id;
                $scope.brand = data.data.brand;
                $scope.category = data.data.category;
                $scope.applyTo = data.data.applyTo;
                $scope.effect = data.data.effect;
                $scope.marketPrice = data.data.marketPrice;
                $scope.wlPrice = data.data.wlPrice;
                $scope.salesVolume = data.data.salesVolume;
                $scope.productName = data.data.productName;
            })
        }
        $scope.updatas = function(){
            var bgImg = document.getElementById("inputfile01")["files"][0];
            var productImg = document.getElementById("inputfile02")["files"][0];
            var infoImg = document.getElementById("inputfile03")["files"];
            var form = new FormData();
            for (i = 0; i < infoImg.length; i++) {
                form.append("infoImg[" + i + "]", infoImg[i]);
            }
            form.append("id", $scope.id);
            form.append("brand", $scope.brand);
            form.append("category", $scope.category);
            form.append("applyTo", $scope.applyTo);
            form.append("effect", $scope.effect);
            form.append("marketPrice", $scope.marketPrice);
            form.append("wlPrice", $scope.wlPrice);
            form.append("salesVolume", $scope.salesVolume);
            form.append("productName", $scope.productName);
            form.append("page", $scope.index);
            form.append("bgImg", bgImg);
            form.append("productImg", productImg);
            $.ajax({
                type: "post",
                url: "__APP__/Admin/upData",
                data: form,
                processData: false,
                contentType: false,
                async: true,
                success: function (data) {
                    $scope.$apply(function(){
                        $scope.list = data.data;
                        $scope.count = data.total;
                    });
                }
            })
        }
        $scope.skip = function(page){
            $scope.index = page;
            getPage(page);
        }
        $scope.pre = function(page){
            $scope.index = page;
            if (page < 0) {
                page = 0;
                getPage(page);
            } else {
                getPage(page);
            }
        }
        $scope.nexts = function(page){
            $scope.index = page;
            if (page >= $scope.count) {
                page = $scope.count - 1;
                getPage(page);
            } else {
                getPage(page);
            }
        }
        function getPage(page) {
            $http({
                url: "__APP__/Admin/getNewPage",
                method: "post",
                data: {
                    page: page,
                },
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                }
            }).success(function(data){
                if (data.status == 1) {
                    $scope.list = data.data;
                    $scope.count = data.total;
                    $scope.index = page;
                } else {
                    alert("跳转失败");
                }
            })
        }
    });
</script>
</html>