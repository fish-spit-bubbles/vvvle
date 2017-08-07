<?php
class GoodsModel extends Model {
    public function getGoodsOne($id){
        $goods = M("goods");
        $where["id"] = $id; 
        $result = $goods->where($where)->find();
        return $result;
    }
    public function getGoodsList($name){
        $goods = M("goods");
        $where = $name;
        $result = $goods->where($where)->select();
        return $result;
    }
}