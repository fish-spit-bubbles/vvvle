<?

// 商品详情逻辑层
class ProductDetailsModel extends Model{
            // 添加到购物车数据库
    public function adddata($newstr){
            $vvvle = M("order"); 
            $res =  $vvvle->data($newstr)->add();
            return $res;             
    }
      // 查询数据数据
    public function query($newstr){
<<<<<<< HEAD
                  $arr['uid']= $newstr['uid'];
                  $arr['pid']= $newstr['pid'];
                  $vvvle = M("order");       
                  $res = $vvvle->where($arr)->find();
                  
                  return  $res;
=======
                $arr['uid']= $newstr['uid'];
                $arr['pid']= $newstr['pid'];
                $vvvle = M("order");       
                $res = $vvvle->where($arr)->find();
                return  $res;
>>>>>>> origin/master
    }







};









?>
