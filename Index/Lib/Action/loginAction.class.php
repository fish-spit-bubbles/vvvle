<?php
// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action {
    public function login(){
        if(!empty($_SESSION['username'])) {
            $this->assign("username",$_SESSION['username']);
            $this->assign("judge",'true');
            $this->assign("judge1",'false');
            $this->display("login");

        }else{
            $this->assign("judge",'false');
            $this->assign("judge1",'true');
            $this->display("login");
        }
    }

    public function checkUsers(){
        $str = file_get_contents("php://input");
        $sureData = json_decode($str,true); 
       
        $username = $sureData['username'];
		$pwd = $sureData['pwd'];		
		//验证用户名或密码是否正确
		$users = M("users");

		// $data['username'] == true ||  $data['email'] == true ? $username : "用户名或者邮件错误" ;

        $data['username'] = $username;
		$data['pwd'] = md5($pwd);
		$res = $users->where($data)->find();
		if($res){
			$info['info'] = "用户名密码正确";
			$info['status'] = 1;
			session("username",$username);
		}else{
			$info['info'] = "用户名或者密码错误";
			$info['status'] = 2;
		}
		
		$this->ajaxReturn($info);
    }


}