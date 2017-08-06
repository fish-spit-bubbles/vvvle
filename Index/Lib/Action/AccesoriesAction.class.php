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
        $this->display("accesories");
    }
}