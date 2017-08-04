<?php
// 本类由系统自动生成，仅供测试用途
class RegisterAction extends Action {
    public function register(){
        $this->display("register");
    }



    public function addUsers(){
        if(IS_POST){
            $userModel = D('User'); // 实例化User对象

            if (!$userModel->create()){
                    // 如果创建失败 表示验证没有通过 输出错误提示信息
                exit($userModel->getError());
            }else{
                    // 验证通过 可以进行其他数据操作
            }
            var_dump($_POST);
        }
        
        $this->display();


    //     $str = file_get_contents("php://input");
    //     $sureData = json_decode($str,true);
        
    //     // 获取注册信息
    //     $username = $sureData['username'];
    //     $email = $sureData['email'];
    //     $pwd = $sureData['pwd'];
	// 	$repwd = $sureData['repwd'];
	// 	$qq = $sureData['qq'];
	// 	$wechat = $sureData['wehcat'];

       

    // //    绑定数据
    //     $data['username'] = $username;
    //     $data['email'] = $email;
    //     $data['pwd'] = $pwd;
    //     $data['qq'] = $qq;
    //     $data['wechat'] = $wechat;

    //     //实例化数据库
    //     $news = M("users");

    //     $res = $news->add($data);

    //     if($res){
    //         $info['info'] = "数据库添加成功";
    //         $info['status'] = 1;
    //         session("username",$username);
    //     }else{
    //         $info['info'] = "数据库添加失败";
    //         $info['status'] = 2;
    //     }

        


    //     // $this->display("register");
        
    //     $this->ajaxReturn($info);
        
    }






}