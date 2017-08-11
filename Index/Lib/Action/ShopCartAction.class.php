<?php
// 购物车


class ShopCartAction extends Action {
    public function index(){
         if(!empty($_SESSION['username'])) {
            $this->assign("username",$_SESSION['username']);
            $this->assign("judge",'true');
            $this->assign("judge1",'false');
        }else{
            $this->assign("judge",'false');
            $this->assign("judge1",'true');
        }
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