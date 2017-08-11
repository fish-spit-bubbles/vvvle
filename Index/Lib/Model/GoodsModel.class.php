<?php
// 商品
class GoodsModel extends Model {
    protected $tableName = "goods";
    public function getGoodsList($name, $start, $number){
        $result = $this->where("brand='".$name."'")->order("id DESC")->limit($start, $number)->select();
        return $result;
    }
}
