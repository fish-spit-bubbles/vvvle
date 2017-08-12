<?php
// 本类由系统自动生成，仅供测试用途
class RegisterAction extends Action {
    public function register(){
        if(!empty($_SESSION['username'])) {
            $this->assign("username",$_SESSION['username']);
            $this->assign("judge",'true');
            $this->assign("judge1",'false');
        }else{
            $this->assign("judge",'false');
            $this->assign("judge1",'true');        
        }
        $this->display("register");
    }
    // 添加用户
    public function addUsers(){
        $str = file_get_contents("php://input");
        $sureData = json_decode($str,true);  
        $news = M("users");
        // 获取注册信息
        $username = $sureData['username'];
        $email = $sureData['email'];
        $pwd = $sureData['pwd'];
        $repwd = $sureData['repwd'];
        $res1 = $news->where("username = '".$username."'" )->select();
        $res2 = $news->where("email = '".$email."'" )->select();
        if($res1){
            $info['status'] = 3;
        }else if($res2){
            $info['status'] = 4;
        }else{     
            $qq = $sureData['qq'];
            $wechat = $sureData['wechat'];
            $time = time();

        //    绑定数据
            $data['username'] = $username;
            $data['email'] = $email;
            $data['pwd'] = md5($pwd);
            $data['qq'] = $qq;
            $data['wechat'] = $wechat;
            $data['addTimes'] = $time;
            //实例化数据库
        
            $res = $news->add($data);

            if($res){
                $info['info'] = "数据库添加成功";
                $info['status'] = 1;
                session("username",$username);
            }else{
                $info['info'] = "数据库添加失败";
                $info['status'] = 2;
            }      
           
        }
         $this->ajaxReturn($info);
<<<<<<< HEAD
=======
        
        

        
>>>>>>> origin/master
        
    
    }


    





}