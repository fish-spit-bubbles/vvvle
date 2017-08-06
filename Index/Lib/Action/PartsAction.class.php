<?php
// 本类由系统自动生成，仅供测试用途
class PartsAction extends Action {
    public function parts(){
        $this->assign("parts", "red");
        $this->display("parts");
    }
}