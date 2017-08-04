<?php

namespace Lib\Model;
use Think\Model;
class UserModel extends Model {
    public $_validate = array(
        array('username','3,6','小于了三位，大于了6为','1','length',3),
    );
}





