<?php
class UserModel extends Model {
    public $_validate = array(
        // array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间])

        array('username','3,12','用户名长度不能少于 3 个字符。','1','length',3 ),
    );
}





