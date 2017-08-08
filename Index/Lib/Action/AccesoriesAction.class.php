<?php
/*@海外购
*
*
*
*
*
*
*
*
*/
class AccesoriesAction extends Action {
    public function accesories(){
        $this->assign("accesories", "red");
         if(!empty($_SESSION['username'])) {
            $this->assign("username",$_SESSION['username']);
            $this->assign("judge",'true');
            $this->assign("judge1",'false');
            $this->display("accesories");

        }else{
            $this->assign("judge",'false');
            $this->assign("judge1",'true');
            $this->display("accesories");
        }
    }
}