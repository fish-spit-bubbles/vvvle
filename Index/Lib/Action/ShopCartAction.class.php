<?php
// 购物车


class ShopCartAction extends Action {
    public function index(){
        
        $this->display("shopcart");
    }
    // 获取数据库数据
    public function getData(){
        //   $uid['uid']=   $_POST['uid'];   
          $uid = file_get_contents("php://input");
          $newuid = json_decode($uid,true);
          $adddata['uid']=$_SESSION['uid'];
          $adddata['buy']="0";

        $shopCart= D("ShopCart");
         $arr = $shopCart->autoLink($adddata);

         $this->ajaxReturn($arr);
    }
    // 提交订单的操作
    public function submintData(){
            $order = file_get_contents("php://input");
            $neworder = json_decode($order,true);
            $shoporderd  = $neworder['arr'];
            // print_r($shoporderd);
            $shopCart= D("ShopCart");
          $arr=  $shopCart->addorderData($shoporderd);
          var_dump($arr);







    }







    



}