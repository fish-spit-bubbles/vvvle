<?php
// 本类由系统自动生成，仅供测试用途
class PartsAction extends Action {
    public function parts(){
        $this->assign("parts", "red");
         if(!empty($_SESSION['username'])) {
            $this->assign("username",$_SESSION['username']);
            $this->assign("judge",'true');
            $this->assign("judge1",'false');
            $this->display("parts");

        }else{
            $this->assign("judge",'false');
            $this->assign("judge1",'true');
            $this->display("parts");
        }
    }

    public function getParts(){
        $goods = D("Goods");
        $name = "PARTS";
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
        $name = "PARTS";
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