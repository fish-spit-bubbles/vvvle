<?php
// 本类由系统自动生成，仅供测试用途
class SearchAction extends Action {
    public function search(){
        $txt = $_GET["keywords"];
        $this->assign("index", "red");
        if(!empty($_SESSION['username'])) {
            $this->assign("username",$_SESSION['username']);
            $this->assign("judge",'true');
            $this->assign("judge1",'false');
        }else{
            $this->assign("judge",'false');
            $this->assign("judge1",'true');
        }
        $goods = D("Goods");
        $list = $goods->where("category='".$txt."'")->limit(0, 6)->select();
        $count = $goods->where("category='".$txt."'")->count();
        if ($list == null) {
            $list = $goods->where("brand='".$txt."'")->limit(0, 6)->select();
            $count = $goods->where("brand='".$txt."'")->count();
        }
        $total = ceil($count / 6);
        // $index = 0;
        $this->assign("txt",$txt);
        $list = json_encode($list);
        $this->assign("list",$list);
        // $this->assign("index",$index);
        $this->assign("count",$total);
        $this->display("search");
    }
    public function getNewPage(){
        $goods = D("Goods");
        $name = "SEENCON";
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

