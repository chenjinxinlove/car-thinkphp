<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\ApplyModel;

class IndexController extends CommonController {
    
    public function index ()
    {	
    	// echo $_SESSION['uid'];die;
       $where['id'] = $_SESSION['uid'];
       $user = M('user') -> where($where) -> find();
       // echo $user['pock'];die;
       // 普通用户页
       if ($user['pock'] == '2') {
        //核心函数，展示用车情况
        $jint= strtotime(date("Y-m-d").' 00:00:00');
        $map['start_time']  = array('GT',$jint);
        $timei=D('apply') ->relation(true)-> where($map)->select();
        // 得到汽车的种类
        $car = array();
        foreach ($timei as $key => $value) 
        {
          if (!in_array($value['car'],$car) ) {
            $car[] = $value['car'];
          }
        }
        foreach ($car as $k => $v) {
          foreach ($timei as $key => $value) {
            if ($value['car'] == $v) {
              if ($value['start_time'] < ($jint + 60*60*24)) {
                $li['0'][$v]['0'][] = $value;  
              }
              if ($value['start_time'] < ($jint + 2*60*60*24) && $value['start_time'] > ($jint + 60*60*24)) {
                $li['0'][$v]['1'][] = $value;  
              }else
              {
                $li['0'][$v]['1'][] = '';
              }
              if ($value['start_time'] < ($jint + 3*60*60*24) && $value['start_time'] > ($jint + 2*60*60*24) ) {
                $li['0'][$v]['2'][] = $value;  
              }else
              {
                $li['0'][$v]['2'][] = '';
              }
            }
          }
        }
        $time = array($jint ,$jint + 60*60*24,$jint + 60*60*48 );
        $this->assign('time',$time);
        $this->assign('li' ,$li);
           // p($li);die;
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
      $indent = D('Apply') ;  
      // $list = $indent ->relation(true) ->select();
       // P($indent);die;
     $count      = $indent->relation(true)->where('state=0')->count();// 查询满足要求的总记录数
// die;
      $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
      $show       = $Page->show();// 分页显示输出
      // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
      $list = $indent->relation(true)->order('creat_time')->where('state=0')->limit($Page->firstRow.','.$Page->listRows)->select();
      $this->assign('list',$list);// 赋值数据集
      $Page->setConfig('header','个会员');
      $this->assign('page',$show);// 赋值分页输出
      $this->display(); // 输出模板
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

    //申请页面
    public function apply()
    {
      $xztime=date("Y-m-d").' 22:00:00';
      if (time() > strtotime($xztime)) {
        $this -> error("不在申请时间，如需申请，请联系企管部管理员");die;
      }
      $this ->display();
    }
    public function applyadd()
    {
      if (!IS_POST) {
        $this -> error("页面不存在");
      }
      $where['adrid']    = I('post.mudidi','htmlspecialchars');
      $where['adress']  =I('post.address','htmlspecialchars');
      $where['start_time']  = strtotime(I('post.fache','htmlspecialchars'));
      $where['return_time'] =strtotime(I('post.fanhui','htmlspecialchars'));
      $where['note'] =I('post.yongche','htmlspecialchars');
      $where['section']     =I('post.section','htmlspecialchars');
      $where['num']     =I('post.num','htmlspecialchars');
      // $where['reason']   =I('post.reason','htmlspecialchars');
      $where['tel']    =I('post.tel','htmlspecialchars');
      $where['reason']    =I('post.yongtu','htmlspecialchars');
      $where['carpooling']=I('post.pingche','htmlspecialchars');
      $where['creat_time' ]= time();
      $uniquem = uniqid();
      $where['uid'] = $uniquem;
      $xzdate= date("Y-m-d").' 00:00:00' ;
      if (strtotime($xzdate) + 60*60*72 > $where['start_time'] && $where['start_time'] > strtotime($xzdate)) {
        // p($where);die;
        if (M('apply') ->add($where)) {
           $data['uid'] = $uniquem;
           $data['create']  = time();
           M('indent') ->add($data);
        }else{
          $this -> error("申请失败,请稍后重试");die;
        }
        redirect();
      }else{
        $this -> error("只能三天之内的车辆,请重新填写");
      } 
    }

    //处理页面
    
    public function handle() 
    { 
      $uid = I('get.uid','htmlspecialchars');
      $handle = D('Apply') ; 
      $where['uid'] = $uid;
      $ind = $handle ->relation(true)-> where($where)->find();
       // p($ind);die;
      $carw['state'] = '0';
      $car = M('car') -> where($carw) ->select();
      $driverw['state'] = '0';
      $driver = M('driver') ->where($driverw) ->select();
      $this -> assign('car' , $car);
      $this->assign('driver' , $driver);
      $this->assign('ind' , $ind);
      $this ->display();
    }

    //审批处理
    public function check ()
    {
      if (!IS_POST) {
        $this->error('页面不存在');
      }
       // p($_POST);die;
      $data['name'] = I('post.name','htmlspecialchars');
      $numsc = I('post.num','htmlspecialchars');
      $car = I('post.car','htmlspecialchars');
      $car = explode( '|' ,$car);
      $data['car'] = $car['0'];
      $data['residue'] = (int)($car['1'] - $numsc);
      $data['driver'] = I('post.driver','htmlspecialchars');
      // p($data);die;
      $data1['state'] = '2';//审核通过
      $where['uid'] = I('post.uid','htmlspecialchars');
      M('apply') -> where($where) -> save($data1);
      if (M('indent') -> where($where) ->save($data)) {
        redirect(U('Index/handle').'?uid='.$where['uid']);
      }else{
        echo '审核失败，请稍后重试';
        redirect(U('Index/handle').'?uid='.$where['uid']);
      }
    }
    //审核不通过的订单
    public function checkclose()
      {
        if (!IS_POST) {
          $this->error('页面不存在');
        }
        // p($_POST);die;
        $where['uid'] = I('post.uid','htmlspecialchars');
        $data1['state'] = '1';//关闭
        $data1['close_reason'] = I('post.reason','htmlspecialchars');
        $where['uid'] = I('post.uid','htmlspecialchars');
        if (M('apply') -> where($where) -> save($data1)) {
            redirect(U('Index/handle').'?uid='.$where['uid']);
          }else{
            echo '关闭失败，请稍后重试';
            redirect(U('Index/handle').'?uid='.$where['uid']);
          }
      }


    public function pinche()
    {
      $car = I('get.car','htmlspecialchars');
      $where['car'] =  $car;
      $jint= strtotime(date("Y-m-d").' 00:00:00');
      $map['create']  = array('GT',$jint-60*60*72);
      $uid=M('indent') -> where($where) ->where($map) -> field('uid')->select();
      $map['start_time']  = array('GT',$jint);
      $timei=M('apply') -> where($map) -> where('carpooling=1')->field('uid')->select();
      // p($uid);p($timei);die;
      foreach ($uid as $key => $value) {
        if (in_array($value , $timei)) {
          $uidw[] = $value;
        }
      }
       // p($uidw);die;

      $this->assign('where' , $car);
      $this->assign('list' , $uidw);
      $this->display();
    }
    //处理选择订单详情
    public function pinchexx()
    {
      if (!IS_POST) {
        echo '页面不存在！';die;
      }
      $uid = I('post.uid','htmlspecialchars');
      $where['uid'] = $uid;
      $data=D('apply') ->relation(true)-> where($where)->find();
      $datan['uid'] = $data['uid'];
      $datan['driver'] = $data['driver'];
      $datan['section'] = $data['section'];
      $datan['name'] = $data['note'];
      $datan['tell'] = $data['tel'];
      $datan['nums'] = $data['residue'];
      $datan['stime'] = date("Y-m-d h:i:s",$data['start_time']);
      $datan['rtime'] = date("Y-m-d h:i:s",$data['return_time']);
      switch ($data['adrid']) {
        case '0':
          $adrid = '三河';
          break;
        case '1':
          $adrid = '燕郊';
          break;
          case '2':
          $adrid = '北京';
          break;
          case '3':
          $adrid = '廊坊';
          break;
          case '4':
          $adrid = '石家庄';
          break;
          case '5':
          $adrid = '秦皇岛';
          break;
        default:
          $adrid = '其他';
          break;
      }
      $datan['adrid'] = $adrid;
      $datan['adress'] = $data['adress'];
      echo json_encode($datan);
    }
    //新增拼车订单
    public function pincheadd ()
    {
      if (!IS_POST) {
        $this->error('页面不存在！');
      }
      p($_POST);Ddie;
    }





}