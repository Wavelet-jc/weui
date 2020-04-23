<?php
/** 
*session会话
* 
*当启动一个Session会话时，会生成一个随机且唯一的session_id,也就是Session的文件名，此时session_id存储在服务器的内存中。
*当关闭页面时，此id会自动注销，重新登陆此页面，会再一次生成一个随机且唯一的id
* @author      Carlos Jiang<1097671986@qq.com> 
*/

session_set_cookie_params(1*60);    //设置Session失效时间
session_save_path('session_temp');
session_start();
$_SESSION['user']='Carlos';
$_SESSION['pass']='password';
var_dump($_SESSION);
unset($_SESSION['pass']);       //删除单个会话
$_SESSION = array();            //删除多个会话
session_destroy();              //结束当前会话

?>