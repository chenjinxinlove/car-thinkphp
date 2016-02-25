<?php
namespace Home\Controller;
use Think\Controller;

class FileController extends CommonController {
  //驾驶员管理
    public function index ()
    {   

        $db = M('driver');
        $count = $db->count();
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $db->limit($Page->firstRow.','.$Page->listRows)->select();
        // p($list);die;
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
      //删除
  public function del ()
   {
            $id = I('get.id','','htmlspecialchars');
            if (M('driver') -> delete($id)) 
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
            $lock = M('driver') -> where($where) -> select();
            // p($lock);die;
            $lock = $lock[0]['driver_type'];
            if ((int)$lock) {
              $lock = '0';
            }else{
              $lock = '1';
            }
            // echo $lock;die;
            $data['driver_type'] = $lock;
            if (M('driver') -> where($where) -> save($data));
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
        $sex = I('post.sex','','htmlspecialchars');
        $tell = I('post.tell','','htmlspecialchars');
        $card = I('post.card','','htmlspecialchars');
        $data['driver_name'] = $username;
        $data['driver_sex'] = $sex;
        $data['driver_card'] = $card;
        $data['driver_tell'] = $tell;
        if (M('driver') -> add($data)) {
            $this -> success ('新增成功！');die;
        }
        $this -> error ('新增失败！');
   }
   //修改用户
   public function alert ()
   {
        $id = I('get.id','','htmlspecialchars');
        $content =  M('driver') -> where(array('id' => $id)) -> select();  
        // p($content);die;
        $this->assign('id' ,$id);
        $this ->assign('content' , $content);
        $this -> display();
   }
   public function alertinfo ()
    {   
      // p($_POST);die;
        $name= I('post.name','','htmlspecialchars');
        $sex = I('post.sex','','htmlspecialchars');
        $tell = I('post.tell','','htmlspecialchars');
        $card = I('post.card','','htmlspecialchars');
        $data['driver_name'] = $name;
        $data['driver_sex'] = $sex;
        $data['driver_tell'] = $tell;
        $data['driver_card'] = $card;
        $where['id'] = I('get.id','','htmlspecialchars');
        if (M('driver') -> where($where) ->save($data)) {
            $this -> success ('修改成功！');die;
        }
        $this -> error ('修改失败！');
   }

}