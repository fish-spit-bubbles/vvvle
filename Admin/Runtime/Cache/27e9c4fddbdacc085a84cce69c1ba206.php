<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>后台管理</title>
    <meta charset="UTF-8">
    <script type="text/javascript" src="__ROOT__/Index/Common/js/angular.min.js"></script>
    <script type="text/javascript" src="__ROOT__/Index/Common/js/jquery.min.js"></script>
    <style type="text/css" rel="stylesheet">
        html,body{width:100%;height:100%;margin:0;padding:0;font-family:"lucida grande", "lucida sans unicode", lucida, helvetica, "Hiragino Sans GB", "Microsoft YaHei", "WenQuanYi Micro Hei", sans-serif;}
        .header{height:40px;width:100%;background-color:#242424;position:fixed;}
        .header_title{line-height:40px;margin-left:60px;color:#fff;font-size:15px;}
        .header_user{font-size:12px;margin-left:20px;color:#ccc;}
        .panel{width:380px;height:500px;margin-left:auto;margin-right:auto;padding-top:100px;font-size:14px;}
        a{text-decoration: none;color:#fff;}
        .login_input>span{display: inline-block;width:50px;}
        input{height:28px;line-height:28px;width:300px;border:1px solid #ddd; border-radius:4px;margin-left:5px;margin-bottom:10px;outline: none;padding-left:10px;}
    </style>
    
</head>
<body ng-app="myapp" ng-controller="mycontroller">
    <div class="header">
        <div class="header_title"><a href="/">后台管理系统</a></div>
    </div>
    <div class="panel">
        <div class="login_input">
            <span>用户名</span>
            <input ng-model="username"  placeholder="请输入用户名"/>
        </div>
        <div class="login_input">
            <span>密码</span>
            <input ng-model="pwd"  type="password" placeholder="请输入密码"/>
        </div>
        <div id="btn" ng-click="sub()"  style="background-color:#3C74F2;width:306px;height:32px;line-height:32px;text-align: center;color:#fff;border-radius:4px;margin-top:30px;margin-left:60px;">
            登录
        </div>
    </div>
    
</body>
<script>
    var app = angular.module("myapp",[]);
    app.controller("mycontroller",function($scope,$http){
            $scope.username = "";
            $scope.pwd = "";
            $scope.sub = function(){
                var url = "__APP__/Login/checkUsers";
                $http({
                    url:url,
                    method:"post",
                    headers:{
                        "Content-type":"application/x-www-form-urlencoded"
                    },
                    data:{
                        username:$scope.username,
                        pwd: $scope.pwd
                    }
                }).success(function(data){
                    if(data.status==1){
                        window.location.href="__APP__/Admin/admin";
                        // console.log(data);
                    }else{
                        alert(data.info);
                    }
                })
            }
    })
</script>

</html>