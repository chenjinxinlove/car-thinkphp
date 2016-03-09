<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE' => 'mysql',
	'DB_HOST' => 'localhost',
	'DB_NAME' => 'gwch',
	'DB_USER' => 'root',
	'DB_PWD'  => 'root',
	'DB_PREFIX' => 'car_',
	//设置key
	'ENCRYPTION_KEY' =>'@#$ ^DD&666**%',
	//自动登录保存时间
	'AUTO_LOGIN_TIME' => time() + 3600 * 24 * 7,	//一个星期
	// 去掉U方法的html
	'URL_HTML_SUFFIX' => '',
	'TOKEN_ON'      =>    true,  // 是否开启令牌验证 默认关闭
	'TOKEN_NAME'    =>    '__hash__',    // 令牌验证的表单隐藏字段名称，默认为__hash__
	'TOKEN_TYPE'    =>    'md5',  //令牌哈希验证规则 默认为MD5
	'TOKEN_RESET'   =>    false,  //令牌验证出错后是否重置令牌 默认为true
	// 显示页面Trace信息
	'SHOW_PAGE_TRACE' =>true,

);