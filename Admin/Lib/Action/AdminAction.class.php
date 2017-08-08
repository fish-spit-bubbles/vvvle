<?php
// 本类由系统自动生成，仅供测试用途
class AdminAction extends Action {
    public function admin(){
        // $id = $_get("id");
        // $Goods = D("Goods");
        // $Goods->getGoodsList();
        // $this->assign("data", $Goods);
	    $this->display('admin');
    }
    //生成随机数的函数
    public function randstr($num){
        $str ="qwertyuioplkjhgfdsazxcvbnmZXCVBNMLKJHGFDSAQWERTYUIOP0123456789";
        $newstr = "";
        for($i = 0;$i < $num;$i ++){
            //mt_rand(min,max)返回随机整数。
            $randNum = mt_rand(0, strlen($str)-1);
            $newstr .=$str[$randNum];
        }
        return $newstr;
    }
    public function addData(){
        //获取用户提交的信息
        $goodsData = $_POST;
        if(!file_exists("uploads")){
            mkdir("uploads");
        }
        $dirname = date("Y-m-d",time());
        if(!file_exists("uploads/".$dirname)){
            mkdir("uploads/".$dirname);
        }
        foreach ($_FILES as $key => $value) {
            $str = "";
            $name = $key;
            if (is_array($value["name"])) {
                foreach($value["name"] as $k => $v) {
                    $sourseName = $v;
                    $type = strrchr($sourseName,".");
                    $fileName = $this->randstr(10).$type;
                    $tmpPath = $value["tmp_name"][$k];
                    if (is_uploaded_file($tmpPath)) {
                        $res = move_uploaded_file($tmpPath, "uploads/".$dirname."/".$fileName);
                        if($res){
                            $str .= "uploads/".$dirname."/".$fileName.",";
                        }else{
                            echo "存储失败";
                        }	
                    }
                }
                $str = substr($str,0,strlen($str)-1);
            } else {
                $sourseName = $value["name"];
                $type = strrchr($sourseName,".");
                $fileName = $this->randstr(10).$type;
                $tmpPath = $value["tmp_name"];
                if (is_uploaded_file($tmpPath)) {
                    $res = move_uploaded_file($tmpPath, "uploads/".$dirname."/".$fileName);
                    if($res){
                        $str = "uploads/".$dirname."/".$fileName;
                    }else{
                        echo "存储失败";
                    }
                }
            }
            $goodsData[$name] = $str;
        }
        $goodsData["addTime"] = time();
        $goods = D('Goods');
        $res = $goods->addGoods($goodsData);
        if ($res) {
            $info["info"] = "数据添加成功";
            $info["status"] = 1;
            $list = $goods->getGoods();
            $info["data"] = $list;
        } else {
            $info["info"] = "数据添加失败";
            $info["status"] = 2;
        }
        $this->ajaxReturn($info);
    }
    public function getList(){
        $goods = D("Goods");
        $res = $goods->getGoods();
        $this->ajaxReturn($res);
    }
    public function delData(){
        $str = file_get_contents("php://input");
        $data = json_decode($str, true);
        $id = $data["id"];
        $goods = D("Goods");
        $res = $goods->delGoods($id);
        if ($res) {
            $info["info"] = "数据删除成功";
            $info["status"] = 1;
            $list = $goods->getGoods();
            $info["data"] = $list;
        } else {
            $info["info"] = "数据删除失败";
            $info["status"] = 2;
        }
        $this->ajaxReturn($info);
    }
    public function seleteData(){
        $str = file_get_contents("php://input");
        $data = json_decode($str, true);
        $id = $data["id"];
        // print_r($id);die;
        $goods = D("Goods");
        $res = $goods->selectGoods($id);
        if ($res) {
            $info["info"] = "数据查询成功";
            $info["status"] = 1;
            $info["data"] = $res;
        } else {
            $info["info"] = "数据查询失败";
            $info["status"] = 2;
        }
        $this->ajaxReturn($info);
    }
    public function upData(){
         //获取用户提交的信息
        $goodsData = $_POST;
        $goods = D('Goods');
        $id = $goodsData["id"];
        $res = $goods->selectGoods($id);
        if(!file_exists("uploads")){
            mkdir("uploads");
        }
        $dirname = date("Y-m-d",time());
        if(!file_exists("uploads/".$dirname)){
            mkdir("uploads/".$dirname);
        }
        $goodsData["bgImg"] = $res["bgImg"];
        $goodsData["productImg"] = $res["productImg"];
        $goodsData["infoImg"] = $res["infoImg"];
        if (!empty($_FILES)) {
            foreach ($_FILES as $key => $value) {
                $str = "";
                $name = $key;
                if (is_array($value["name"])) {
                    foreach($value["name"] as $k => $v) {
                        $sourseName = $v;
                        $type = strrchr($sourseName,".");
                        $fileName = $this->randstr(10).$type;
                        $tmpPath = $value["tmp_name"][$k];
                        if (is_uploaded_file($tmpPath)) {
                            $res = move_uploaded_file($tmpPath, "uploads/".$dirname."/".$fileName);
                            if($res){
                                $str .= "uploads/".$dirname."/".$fileName.",";
                            }else{
                                echo "存储失败";
                            }	
                        }
                    }
                    $str = substr($str,0,strlen($str)-1);
                } else {
                    $sourseName = $value["name"];
                    $type = strrchr($sourseName,".");
                    $fileName = $this->randstr(10).$type;
                    $tmpPath = $value["tmp_name"];
                    if (is_uploaded_file($tmpPath)) {
                        $res = move_uploaded_file($tmpPath, "uploads/".$dirname."/".$fileName);
                        if($res){
                            $str = "uploads/".$dirname."/".$fileName;
                        }else{
                            echo "存储失败";
                        }
                    }
                }
                $goodsData[$name] = $str;
            }
        }
        $goodsData["addTime"] = time();
        $res = $goods->updataGoods($id, $goodsData);
        if ($res) {
            $info["info"] = "数据更新成功";
            $info["status"] = 1;
            $list = $goods->getGoods();
            $info["data"] = $list;
        } else {
            $info["info"] = "数据更新失败";
            $info["status"] = 2;
        }
        $this->ajaxReturn($info);
    }
}