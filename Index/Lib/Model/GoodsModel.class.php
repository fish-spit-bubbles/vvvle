<?php
// 商品
class GoodsModel extends Model {
    protected $tableName = "goods";
    public function getGoodsList($name, $start, $number){
        $where['productName'] = array('like', "%{$name}%");
        $result = $this->where($where)->order("id DESC")->limit($start, $number)->select();
        return $result;
    }
    public function getGoodsOne($name){
        $where['productName'] = array('like', "%{$name}%");
        $result = $this->where($where)->order("id DESC")->find();
        return $result;
    }
}
