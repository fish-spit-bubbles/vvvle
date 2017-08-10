<?php
// 本类由系统自动生成，仅供测试用途
class LensAction extends Action {
    public function lens(){
        $this->assign("lens", "red");
        if(!empty($_SESSION['username'])) {
            $this->assign("username",$_SESSION['username']);
            $this->assign("judge",'true');
            $this->assign("judge1",'false');
            $this->display("lens");

        }else{
            $this->assign("judge",'false');
            $this->assign("judge1",'true');
            $this->display("lens");
        }
    }

    public function getLens(){
        $goods = D("Goods");
        $name = "SEENCON";
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