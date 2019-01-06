<?php
namespace think;
define('APP_PATH', __DIR__ . '/application/');
define('BIND_MODULE','push/Worker');
  
// 加载基础文件
require __DIR__ . '/thinkphp/base.php';

 

// 应用初始化
Container::get('app')->path(__DIR__ . '/application/')->initialize();

// 控制台初始化
Console::init();