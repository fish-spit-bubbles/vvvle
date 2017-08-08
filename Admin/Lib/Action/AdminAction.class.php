<?php
// 本类由系统自动生成，仅供测试用途
class AdminAction extends Action {
    public function admin(){
        // $id = $_get("id");
        // $Goods = D("Goods");
        // $Goods->getGoodsList();
        // $this->assign("data", $Goods);
        // $goods = D("Goods");
        // $res = $goods->getGoods();
        // print_r($res);
	    $this->display('admin');
    }
    public function addData(){
        print_r($_FILES);die;
        //生成随机数的函数
        function randstr($num){
            $str ="qwertyuioplkjhgfdsazxcvbnmZXCVBNMLKJHGFDSAQWERTYUIOP0123456789";
            $newstr = "";
            for($i = 0;$i < $num;$i ++){
                //mt_rand(min,max)返回随机整数。
                $randNum = mt_rand(0, strlen($str)-1);
                $newstr .=$str[$randNum];
            }
            return $newstr;
        }
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
            $name = $key;
            if (is_array($value["name"])) {
                $str = "";
                foreach($value["name"] as $k => $v) {
                    $sourseName = $v["name"];
                    $type = strrchr($sourseName,".");
                    $fileName = randstr(10).$type;
                    $value[$k][]
                }
            } else {
                $sourseName = $value["name"];
                $type = strrchr($sourseName,".");
            }
            
            $sourseName = $value["name"];  //提交的文件原名称
            //strrchr(string,char) 查找字符串在另一个字符串中最后一次出现的位置，并返回从该位置到字符串结尾的所有字符
            //string 必需，规定要搜索的字符串；char 必需，规定要查找的字符。如果该参数是数字，则搜索匹配此数字的 ASCII 值的字符
            //此处应用即是获取图片的扩展名
            $type = strrchr($sourseName,".");
            $fileName = randstr(10).$type;
            $tmpPath = $value['tmp_name'];
            if (is_uploaded_file($tmpPath)) {
                $res = move_uploaded_file($tmpPath, "uploads/".$dirname."/".$fileName);
                if($res){
                    $goodsData[$name] = "uploads/".$dirname."/".$fileName;
                }else{
                    echo "存储失败";
                }	
            }
        }
        die;
        $goodsData["addTime"] = time();
        $goods = D('Goods');
        $res = $goods->addGoods($goodsData);
        if ($res) {
            $info["info"] = "数据添加成功";
            $info["status"] = 1;
            // $list = $goods->select();
            // foreach ($list as $key => $value) {
            //     $list[$key]["addTime"] = date("Y-m-d", $value["addTime"]);
            // }
            // $info["data"] = $list;
        } else {
            $info["info"] = "数据添加失败";
            $info["status"] = 2;
        }
        $this->ajaxReturn($info);
    }
}