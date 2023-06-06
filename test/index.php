<?php
/**
 * Created by PhpStorm.
 * User: 31730
 * Date: 2023/6/2
 * Time: 18:45
 */
//引入composer 生成的自动加载文件
require_once dirname(__FILE__)."/vendor/autoload.php";
//声明使用的类
use App\Test;
$test=new Test();
$test->test();