<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
        $this->assign("index", "red");
        if(!empty($_SESSION['username'])) {
            $this->assign("username",$_SESSION['username']);
            $this->assign("judge",'true');
            $this->assign("judge1",'false');
            $this->display("index");
        }else{
            $this->assign("judge",'false');
            $this->assign("judge1",'true');
            $this->display("index");
        }
    }
    public function loginout(){
        session(null);
        $this->assign("judge",'false');
        $this->assign("judge1",'true');
        $this->display("index");
        // $this->success('退出成功',U("Index/index"));
    }
    public function getGoods(){
        $goods = D("Goods");
        $name = "OLIVI";
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

