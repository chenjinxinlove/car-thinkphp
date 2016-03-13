<?php
namespace Home\Model;
use Think\Model;
use Think\Model\RelationModel;
/**
 * 评论视图模型
 */
Class ApplyModel extends RelationModel {

	Protected $_link = array(
			'indent'     =>  array('mapping_type' => self::HAS_ONE, 
			'foreign_key'=>  'uid',
			// 'mapping_fields' => 'car',
			// 'as_fields' => 'car'
			 'mapping_fields' => 'evaluate,car,driver,shenhe,menweili,complete,residue,chepai,slicheng,swancheng,driver_tell',
			 'as_fields' => 'evaluate,car,driver,shenhe,menweili,complete,residue,chepai,slicheng,swancheng,driver_tell'
			),
		
		);
}
?>