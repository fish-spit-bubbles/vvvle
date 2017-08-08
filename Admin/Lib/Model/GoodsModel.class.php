<?php
class GoodsModel extends Model {
    protected $tableName = "goods";
    public function getGoods(){
        $result = $this->select();
        return $result;
    }
    public function getGoodsOne($id){
        $where["id"] = $id; 
        $result = $this->where($where)->find();
        return $result;
    }
    public function getGoodsList($name){
        $where = $name;
        $result = $this->where($where)->select();
        return $result;
    }
    public function addGoods($name){
        $result = $this->add($name);
        return $result;
    }
}