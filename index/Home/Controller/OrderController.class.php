<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\ApplyModel;

class  OrderController extends CommonController {

	public function index()
	{	

		$section = I('get.section' , 'htmlspecialchars');
		$condition['section'] = $section;
		$condition['psection'] = $section;
		$condition['_logic'] = 'OR';
		$indent = D('Apply') ;  
	      // $list = $indent ->relation(true) ->select();
	       // P($indent);die;
	     $count      = $indent->relation(true)->where($where)->count();// 查询满足要求的总记录数
	// die;
	      $Page       = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(10)
	      $show       = $Page->show();// 分页显示输出
	      // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
	      $list = $indent->relation(true)->order('creat_time desc')->where($condition)->limit($Page->firstRow.','.$Page->listRows)->select();
	      $this->assign('list',$list);// 赋值数据集
	      // p($list);die;
	      $this->assign('page',$show);// 赋值分页输出
	      $this->assign('section',$section);
		  $this->display();
	}
	public function add()
	{
		if (!IS_POST) {
			$this->error('页面不存在');
		}
		$data['evaluate'] = I('post.sc','htmlspecialchars');
		$where['uid'] = I('post.uid','htmlspecialchars');
		$data1['state'] = '3';
		M('apply')->where($where)->save($data1);
		if (M('indent')->where($where)->save($data)) {
			echo 1;die;
		}else{
			echo 0;die;
		}
		
		
	}


	public function close()
	{
		$where['uid'] = I('get.uid','htmlspecialchars');
		$data1['state'] = '1';
		$data1['close_reason'] = '自己关闭，请重新申请';
		if (M('apply')->where($where)->save($data1)) {
			$this->success('关闭成功');
		}else{
			$this->success('关闭失败');
		}
	}

}