<?php
// 本类由系统自动生成，仅供测试用途
class NewProductAction extends Action {
    public function newProduct(){
        $this->assign("newProduct", "red");
         if(!empty($_SESSION['username'])) {
            $this->assign("username",$_SESSION['username']);
            $this->assign("judge",'true');
            $this->assign("judge1",'false');
            $this->display("newProduct");

        }else{
            $this->assign("judge",'false');
            $this->assign("judge1",'true');
            $this->display("newProduct");
        }
    }
}