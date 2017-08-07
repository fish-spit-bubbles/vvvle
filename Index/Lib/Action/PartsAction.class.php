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
}