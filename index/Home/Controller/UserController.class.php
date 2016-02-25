<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends CommonController {

	public function index () 
	{	
		$db = M('user');
        $count = $db ->count();
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $user = $db->order('time')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('user',$user);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
	}
	//删除
	public function del ()
   {
            $id = I('get.id','','htmlspecialchars');
            if (M('user') -> delete($id)) 
            {
                $this->success('删除成功');
            }
            else
            {
                 $this->success('删除失败');
            }
        
   } 
   //关闭操作
   //
   public function cloce ()
   {
      
            $id = I('get.id','','htmlspecialchars');
            $where['id'] = $id;
            $lock = M('user') -> where($where) -> select();
            // p($lock);die;
            $lock = $lock[0]['lock'];
            if ((int)$lock) {
              $lock = '0';
            }else{
              $lock = '1';
            }
            // echo $lock;die;
            $data['lock'] = $lock;
            if (M('user') -> where($where) -> save($data));
            {
                $this->success('改态成功');die;
            }

            $this->success('改态失败');
        
        
   } 
   //增加用户
   public function add () 
   {
        $this -> display();
      
   }
   public function addUser ()
    {
        if (!IS_POST) {
            $this -> error('页面不存在');
        }
        $username = I('post.username','','htmlspecialchars');
        $password= I('post.password','','htmlspecialchars');
        $password1= I('post.password1','','htmlspecialchars');
        if ($password === $password1) {
          $pwd = md5($password);
        }else{
          $this ->error("两次密码不一致");die;
        }
        $section = I('post.section','','htmlspecialchars');
        $tel = I('post.tel','','htmlspecialchars');
        $pock = I('post.pock','','htmlspecialchars');
        $data['time'] = time();
        $data['username'] = $username;
        $data['pwd'] = $pwd;
        $data['section'] = $section;
        $data['tel'] = $tel;
        $data['pock'] = $pock;
        if (M('user') -> add($data)) {
            $this -> success ('新增成功！');die;
        }
        $this -> error ('新增失败！');
   }
   //修改用户
   public function alert ()
   {
        $id = I('get.id','','htmlspecialchars');
        $content =  M('user') -> where(array('id' => $id)) -> select();  
        // p($content);die;
        $this->assign('id' ,$id);
        $this ->assign('content' , $content);
        $this -> display();
   }
   public function alertinfo ()
    {   
      // p($_POST);die;
        $password= md5(I('post.password','','htmlspecialchars'));
        $section = I('post.section','','htmlspecialchars');
        $tel = I('post.tel','','htmlspecialchars');
        $data['time'] = time();
        $data['pwd'] = $password;
        $data['section'] = $section;
        $data['tel'] = $tel;
        $where['id'] = I('get.id','','htmlspecialchars');
        if (M('user') -> where($where) ->save($data)) {
            $this -> success ('修改成功！');die;
        }
        $this -> error ('修改失败！');
   }
}