<?php
// 商品详情页
class ProductDetailsAction extends Action {
    public function index(){
        $this->display("productDetails");
    }
    public function getList(){
        $id = $_GET['id'];
        
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