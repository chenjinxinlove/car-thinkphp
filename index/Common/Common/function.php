<?php 

/**
 * 	打印数组
 * @param  [type] $arr [需要打印的数组]
 * @return [type]      [description]
 */
function p ($arr)
{
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
} 

// 检测输入的验证码是否正确，$code为用户输入的验证码字符串
function check_verify($code, $id = '')
{
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}


function encryption ($value, $type=0) {
	$key = md5(C('ENCTYPTION_KEY'));
	
	if (!$type) {
		return str_replace('=', '', base64_encode($value ^ $key));
	}

	$value = base64_decode($value);
	return $value ^ $key;
}




?>