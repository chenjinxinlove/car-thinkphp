<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display();
    }

    //登录处理
    public function Login () {
    	if (!IS_POST) {
    		$this -> error("页面不存在");
    	} 
    	$username = I('post.username','','htmlspecialchars');
    	$password = md5(I('post.password','','htmlspecialchars'));
    	$where['username'] = $username;
    	$user = M('user') -> where($where) ->find();
    	//判断账号密码不是否正确
		// p($user);die;
		//判断是否锁定
		if ($user['lock']) {
			echo '3';die;//锁定
		}
		
		if ($user['username'] === $username && $user['pwd'] === $password) {
			switch ($user['pock']) {
			case '0':
				echo '0';//管理员
				break;
			case '1':
				echo '1';//门卫
				break;
			default:
				echo '2';//不同用户
				break;
			}
			// 默认自动登录
			$username = $user['username']; 
			$ip = get_client_ip();
			$value = $username . '|' .$ip ;
			$value = encryption($value);
			@setcookie('auto', $value, C('AUTO_LOGIN_TIME'), '/');
			// 把id写入session
			session_start('uid', $user['id']);die;
		} 
		echo '4';//登录失败
		
    }
}