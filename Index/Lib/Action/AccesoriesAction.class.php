<?php
/*@海外购
*
*/
class AccesoriesAction extends Action {
    public function accesories(){
        $this->assign("accesories", "red");
         if(!empty($_SESSION['username'])) {
            $this->assign("username",$_SESSION['username']);
            $this->assign("judge",'true');
            $this->assign("judge1",'false');
        }else{
            $this->assign("judge",'false');
            $this->assign("judge1",'true');         
        }
         $this->display("accesories");
    }


    public function getEyes(){
        $goods = D("Goods");
        $name = "EYE DROPS";
        $list = $goods->getGoodsList($name, 16);
        if ($list) {
            $info["data"] = $list;
            $info["info"] = "成功";
            $info["status"] = 1;
        } else {
            $info["info"] = "失败";
            $info["status"] = 2;
        }
        $this->ajaxReturn($info);
    }
}