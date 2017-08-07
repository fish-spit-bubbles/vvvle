<?php
// 本类由系统自动生成，仅供测试用途
class NewProductAction extends Action {
    public function newProduct(){
        $this->assign("newProduct", "red");
        $this->display("newProduct");
    }
}