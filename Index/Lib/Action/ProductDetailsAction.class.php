<?php
// 商品详情页
class ProductDetailsAction extends Action {
    public function index(){
        if(!empty($_SESSION['username'])) {
            $this->assign("username",$_SESSION['username']);
            $this->assign("judge",'true');
            $this->assign("judge1",'false');
        }else{
            $this->assign("judge",'false');
            $this->assign("judge1",'true');
        }
        $id = $_GET['id'];
        $goods = M("Goods");
        $listArr = $goods->where("id=".$id)->find();
        $this->assign("v",$listArr );
        // 详情传入 uid pid
        $uid = $_SESSION['uid'];
        $pid = $_GET['id'];
        $this->assign("uid",$uid);
        $this->assign("pid",$pid);
        $this->display("productDetails");
    }


    // 获取商品详情，添加成功数据库 跳转到购物车
    public function getGoods(){
        // 判断用户是否有登陆
        if(!empty($_SESSION['username'])){
            $str = file_get_contents("php://input");
            $newstr = json_decode($str,true); 
            $adddata = D("ProductDetails");
        // 先判断有数据的时候直接跳转。没有数据添加数据在跳转
            $query = $adddata->query($newstr);
            if($query){
            //  跳转   返回状态吗
                    $info['status']=1;
                    $this->ajaxReturn($info); 
            }else{
                $res = $adddata->adddata($newstr);   
                if($res){
                    $info['info']="添加成功";
                    $info['status']=1;
                
                }else{
                    $info['info']="添加失败";
                    $info['status']=0;
                };        
            };  
        }else{
             $info['status']=2;
             $this->ajaxReturn($info); 
        }
       
             
    }

   
    public function getGoodsOne(){          
        $str = file_get_contents("php://input");
        $newstr = json_decode($str,true); 
        

    // 先判断有数据的时候直接跳转。没有数据添加数据在跳转
        if(!empty($_SESSION['username'])){
            $ordderAdd = D("ProductDetails");
           $res =  $ordderAdd->query($newstr);
           if($res){
                    $info['status']=1;
                    $this->ajaxReturn($info); 
           }else{
                $append = $ordderAdd->adddata($newstr);  
                if($append){
                    $info['info']="添加成功";
                    $info['status']=1;
                }else{
                    $info['info']="添加失败";
                    $info['status']=0;
                };
                $this->ajaxReturn($info); 
           };
        }else{
            $info['info']="用户不存在";
            $info['status']=2;
            $this->ajaxReturn($info); 
        };
    }

 // 跳转到详情页面
    public function getDetailGoods(){
        $txt = $_POST["qing"];
        $goods = D("Goods");
        $res = $goods->getGoodsOne($txt);
        if ($res) {
            $info['info']="成功";
            $info['status']=1;
            $info['data'] = $res;
            $info['name'] = $txt;
        } else {
            $info['info']="失败";
            $info['status']=0;
            $info['name'] = $txt;
        }
        $this->ajaxReturn($info);
    }
}
