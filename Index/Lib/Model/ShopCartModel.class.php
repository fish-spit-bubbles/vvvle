<?
// 购物车逻辑层
class ShopCartModel extends Model {
        public function autoLink($uid){
                $vvvle = M("order");
                $arr = $vvvle->where($uid)->select();
                return $arr;
        }
};










?>