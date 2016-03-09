<?php
namespace Home\Controller;
use Think\Controller;

class CarController extends CommonController {
  //驾驶员管理
    public function index ()
    {   

        $db = M('car');
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
            if (M('car') -> delete($id)) 
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
            $lock = M('car') -> where($where) -> select();
            // p($lock);die;
            $lock = $lock[0]['state'];
            if ((int)$lock) {
              $lock = '0';
            }else{
              $lock = '1';
            }
            // echo $lock;die;
            $data['state'] = $lock;
            if (M('car') -> where($where) -> save($data));
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

        // p($_POST);die;
        $num = I('post.num','','htmlspecialchars');
        $type = I('post.type','','htmlspecialchars');
        $model = I('post.model','','htmlspecialchars');
        $nums = I('post.nums','','htmlspecialchars');
        $color = I('post.color','','htmlspecialchars');
        $time = I('post.time','','htmlspecialchars');
        $money = I('post.money','','htmlspecialchars');
        $ins_ex = I('post.ins_expire_time','','htmlspecialchars');
        $ins_money = I('post.ins_money','','htmlspecialchars');
        $car_note = I('post.car_note','','htmlspecialchars');
        $data['num'] = $num;
        $data['type'] = $type;
        $data['model'] = $model;
        $data['nums'] = $nums;
        $data['color'] = $color;
        $data['time'] = $time;
        $data['money'] = $money;
        $data['ins_expire_time'] = $ins_ex;
        $data['ins_money'] = $ins_money;
        $data['car_note'] = $car_note;
        if (M('car') -> add($data)) {
            $this -> success ('新增成功！');die;
        }
        $this -> error ('新增失败！');
   }
  //修改用户
    public function alert ()
    {
         $id = I('get.id','','htmlspecialchars');
         $content =  M('car') -> where(array('id' => $id)) -> select();  
         // p($content);die;
         $this->assign('id' ,$id);
         $this ->assign('content' , $content);
         $this -> display();
   }
    public function alertinfo ()
    {   
   //    // p($_POST);die;
        $num = I('post.num','','htmlspecialchars');
        $type = I('post.type','','htmlspecialchars');
        $model = I('post.model','','htmlspecialchars');
        $nums = I('post.nums','','htmlspecialchars');
        $color = I('post.color','','htmlspecialchars');
        $time = I('post.time','','htmlspecialchars');
        $money = I('post.money','','htmlspecialchars');
        $ins_ex = I('post.ins_expire_time','','htmlspecialchars');
        $ins_money = I('post.ins_money','','htmlspecialchars');
        $car_note = I('post.car_note','','htmlspecialchars');
        $data['num'] = $num;
        $data['type'] = $type;
        $data['model'] = $model;
        $data['nums'] = $nums;
        $data['color'] = $color;
        $data['time'] = $time;
        $data['money'] = $money;
        $data['ins_expire_time'] = $ins_ex;
        $data['ins_money'] = $ins_money;
        $data['car_note'] = $car_note;
        $where['id'] = I('get.id','','htmlspecialchars');
        if (M('car') -> where($where) ->save($data)) {
            $this -> success ('修改成功！');die;
           }
        $this -> error ('修改失败！');
    }

}