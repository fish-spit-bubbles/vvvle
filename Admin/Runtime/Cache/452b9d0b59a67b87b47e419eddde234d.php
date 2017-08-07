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
    <style>
        #box>div{margin-top: 15px;}
    </style>
</head>
<body>
    <div class="container text-center" id="box">
        <h3 class="text-primary">管理员界面</h3>
        <form class="form-horizontal" role="form">
            
            <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">品牌名:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstname" >
                </div>
            </div>

            <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">品类:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  >
                </div>
            </div>

            <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">适用于:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstname" >
                </div>
            </div>

            <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">功效:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstname" >
                </div>
            </div>

            <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">市场价格:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstname" >
                </div>
            </div>

            <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">微乐价:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstname" >
                </div>
            </div>

            <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">销量:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstname" >
                </div>
            </div>

            <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">产品名:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstname">
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="inputfile">bgImg(美女代言)</label>
                <div class="col-sm-10">
                      <input type="file" id="inputfile">
                </div>              
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="inputfile">productImg(产品)</label>
                <div class="col-sm-10">
                      <input type="file" id="inputfile">
                </div>              
            </div>
        
            <button type="button" class="btn btn-success">添加</button>
            <button type="button" class="btn btn-warning">更新</button>
            <button type="button" class="btn btn-danger">删除全部</button>
            <button type="button" class="btn btn-info">查询</button>
        </form>
    </div>

   


    
</body>
</html>