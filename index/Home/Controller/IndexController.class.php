<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends CommonController {
    
    public function index ()
    {	
    	// echo $_SESSION['uid'];die;
       $where['id'] = $_SESSION['uid'];
       $user = M('user') -> where($where) -> find();
       // echo $user['pock'];die;
       // 普通用户页
       if ($user['pock'] == '2') {
       	 $this->display();
       } 
       //管理员
       if ($user['pock'] == '0') {
       	 redirect(U('Index/admin'));
       }
       //门卫
       if ($user['pock'] == '1') {
       	 redirect(U('Index/doorkeeper'));
       } 
         
    }
    //管理员
    public function admin ()
    {
    	$this -> display();
    }
    public function doorkeeper () 
    {
    	$this -> display();
    }
    // 退出管理
    public function loginOut ()
    {
    	session_unset();
    	session_destroy();
      setcookie("auto", "", time()-3600);

    	redirect(U('Login/index'));
    }
    //个人设置
    public function profile () 
    {
        $this->display();
    }
}