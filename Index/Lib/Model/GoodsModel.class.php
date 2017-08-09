<?php
// 商品
class GoodsModel extends Model {
    protected $tableName = "goods";
    public function getGoodsList($name){
        $result = $this->where("brand='".$name."'")->order("id DESC")->select();
        return $result;
    }
}
