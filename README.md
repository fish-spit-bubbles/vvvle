## 微乐网
![img](http://vvvle.cn//themes/default/images/logo_02.png)

- [微乐美瞳](http://www.crlate.com/vvvle/index.php)线上地址
- 管理员线上地址[管理员界面](http://crlate.com/vvvle/admin.php/Admin/admin)
## 环境搭建
- 需要XAMPP服务搭建服务器
- ThinkPHP 3.1 版本
- 引入angularJS 1.0 
- mysql 5.5以上

## 项目主入口
- index.php
## 管理员主入口
- admin.php


## 项目文件结构

```
vvvle
|
|---index.php  主入口
|  
| 
|  
| 
|
|---Index
|   |
|   |---Common  公共样式
|   |   |
|   |   |---css
|   |   |
|   |   |---img
|   |   |
|   |   |---js 
|   |   |
|   |   |---libs   bootstrap 样式
|   |   
|   |  
|   |  
|   |---Conf   配置数据库
|   |  |
|   |  |
|   |  |---config.php  
|   |  
|   |  
|   |  
|   |---Lib   函数逻辑控制层
|   |  |
|   |  |
|   |  |---Action
|   |     |
|   |     |
|   |     |---AccesoriesAction.class.php   海外购入口
|   |     |---IndexAction.class.php    首页主入口
|   |     |---LensAction.class.php   美瞳入口
|   |     |---loginAction.class.php   登录入口
|   |     |---RegisterAction.class.php   注册入口
|   |     |---PartsAction.class.php   配件入口
|   |     |---NewProductAction.class   产品入口
|   |     |---SearchAction.class   搜索入口
|   |     |---ShopCartAction.class  购物车入口
|   |     |---UserCenterAction.class 用户中心
|   |     |
|   |----|---Model
|   |     |---GoodsModel.class  商品分类逻辑
|   |     |---ProductDetailsModel.class 商品详情逻辑
|   |     |---ShopCartModel.class 购物车逻辑
|   |     |---UserModel.class  用户中心逻辑
|   |
|   |---Runtime  用于缓存存储的文件
|   |
|   |
|   |---Tpl   显示层
|      |
|      |---Accesories
|      |   |
|      |   |---accesories.html 海外购
|      |
|      |---Index
|      |   |---index.html  首页
|      |
|      |---lens
|      |   |---lens.html   美瞳页
|      |
|      |---login
|      |   |---login.html    登录页
|      |---Public
|      |   |---footer.html   尾部
|      |   |---header.html   头部
|      |   |---sidebar.html  侧边栏
|      |   |---slideshow.html  轮播图
|      |---register  
|      |   |---register.html    注册页
|      
|
|
|---Tlinkphp

```