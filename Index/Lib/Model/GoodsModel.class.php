<?php
// 商品
class GoodsModel extends Model {
    protected $tableName = "goods";
    public function getGoodsList($name, $number){
        $result = $this->where("brand='".$name."'")->order("id DESC")->limit(0, $number)->select();
        return $result;
    }
}
