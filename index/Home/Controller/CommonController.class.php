<?php 
namespace Home\Controller;
use Think\Controller;

/**
* 
*/
class CommonController extends Controller
{
	
	function _initialize ()
	{
		//处理自动登录
		 // echo $_SESSION['uid'];die;
		//echo $_COOKIE['auto'];die;
		if (isset($_COOKIE['auto']) && !isset($_SESSION['uid']))
		{
			$value = explode('|' , encryption($_COOKIE['auto'], 1));
			// p($value);die;
			$ip = get_client_ip();
			 // echo $value[1];die;
			// 判断是否为通一ip登录
			if ($ip == $value[1]) 
			{
				$username = $value[0];
				$where = array ('username' => $username);
				$user = M('user')->where($where)->field(array('id','lock'))->find();
				// p($user);die;
				if ($user && !$user['lock']) 
				{
					session('uid', $user['id']);
				}
			}
		}
		
		if (!isset($_SESSION['uid'])) {
		redirect(U('Login/index'));
		} 
	}	
}





 ?>