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
        $list = $goods->getGoodsList($name, 0, 6);
        $count = $goods->where("brand='".$name."'")->count();
        $total = ceil($count / 6);
        if ($list) {
            $info["data"] = $list;
            $info["count"] = $total;
            $info["info"] = "成功";
            $info["status"] = 1;
        } else {
            $info["info"] = "失败";
            $info["status"] = 2;
        }
        $this->ajaxReturn($info);
    }
    public function getNewPage(){
        $goods = D("Goods");
        $name = "EYE DROPS";
        $str = file_get_contents("php://input");
        $data = json_decode($str, true);
        $page = $data["page"];
        $list = $goods->getGoodsList($name, $page * 6, 6);
        $count = $goods->where("brand='".$name."'")->count();
        $total = ceil($count / 6);
        if ($list) {
            $info["data"] = $list;
            $info["count"] = $total;
            $info["info"] = "成功";
            $info["status"] = 1;
        } else {
            $info["info"] = "失败";
            $info["status"] = 2;
        }
        $this->ajaxReturn($info);
    }
}