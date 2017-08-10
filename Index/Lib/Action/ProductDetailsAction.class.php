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

        $this->display("productDetails");
    }
    // 获取商品详情，添加成功数据库 跳转到购物车
    public function getGoods(){
            $str =    file_get_contents("php://input");
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
                 $this->ajaxReturn($info); 
            };       
    }








}