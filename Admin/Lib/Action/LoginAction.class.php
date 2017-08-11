<?php

// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action {

    public function login(){
       $this->display("login");
    }
	



	public function checkUsers(){
		
		$str = file_get_contents("php://input");
		$sureData = json_decode($str,true);
		$username = $sureData['username'];
		$pwd = $sureData['pwd'];
		//验证用户名或密码是否正确
		$users = M("adminuser");
		$data['users'] = $username;
		$data['pwd'] = md5($pwd);
		$res = $users->where($data)->find();
        // echo M('adminuser')->_sql();die;
		if($res){
			$info['info'] = "用户名密码正确";
			$info['status'] = 1;
			session("adminer",$username);
		}else{
			$info['info'] = "用户名密码错误";
			$info['status'] = 0;
		}
		
		$this->ajaxReturn($info);
	}




}