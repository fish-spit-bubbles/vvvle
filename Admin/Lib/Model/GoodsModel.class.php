<?php
class GoodsModel extends Model {
    protected $tableName = "goods";
    public function getGoods($startPage, $everyPage){
        $result = $this->order("addtime DESC")->limit($startPage, $everyPage)->select();
        foreach ($result as $key => $value) {
            $result[$key]["addTime"] = date("Y-m-d", $value["addTime"]);
        }
        return $result;
    }
    public function addGoods($name){
        $result = $this->add($name);
        return $result;
    }
    public function delGoods($id){
        $result = $this->where("id=".$id)->delete();
        return $result;
    }
    public function selectGoods($id){
        $result = $this->where("id=".$id)->find();
        return $result;
    }
    public function updataGoods($id, $data){
        $result = $this->where("id=".$id)->save($data);
        return $result;
    }
}