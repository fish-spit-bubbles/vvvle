<?php
// 本类由系统自动生成，仅供测试用途
class UserCenterAction extends Action {
    public function userCenter(){
        if(!empty($_SESSION['username'])) {
            $this->assign("username",$_SESSION['username']);
            $this->assign("judge",'true');
            $this->assign("judge1",'false');
            $this->display("userCenter");

            
           

        }else{
            $this->assign("judge",'false');
            $this->assign("judge1",'true');
            $this->display("userCenter");
        }
    }


        
}