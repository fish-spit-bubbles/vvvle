<?
// 购物车逻辑层
class ShopCartModel extends Model {
        public function autoLink($adddata){
                $vvvle = M("order");   
                $arr = $vvvle->where("uid=".$adddata['uid']." and "."buy=".$adddata['buy'])->select();
                return $arr;
        }


        public function addorderData($shoporderd ){
                $vvvle = M("order");  
                $orderArr=[];
                foreach($shoporderd as $k=>$v){
                  $res =   $vvvle->where("id=".$v['id'])->data($shoporderd)->save();           
                  $orderArr[$k]= $res;
                };
                if($orderArr==""){
                        return false;

                }else{
                        return true;
                };

        

        }





};















?>