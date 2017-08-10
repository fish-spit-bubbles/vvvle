<?php
// 购物车


class ShopCartAction extends Action {
    public function index(){
        
        $this->display("shopcart");
    }
    // 获取数据库数据
    public function getData(){
          $uid=   $_POST['uid'];    
          $shopCart= D("ShopCart");
         $arr = $shopCart->autoLink($uid);
         
         $this->ajaxReturn($arr);
      
    }


    



}