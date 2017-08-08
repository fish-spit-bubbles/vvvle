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
    
}