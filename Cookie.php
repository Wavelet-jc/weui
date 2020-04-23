<?php
/** 
*Cookie机制
* 
*Cookie 是一种在远程浏览器端存储数据并以此来跟踪和识别用户的机制
* @author      Carlos Jiang<1097671986@qq.com> 
*/
$expire=time()+60*60*24*30;
setcookie("user", "php", $expire);
setcookie("user1", "php", $expire);
setcookie("user2", "php", $expire);

echo $_COOKIE["user"];      // 输出 cookie 值
var_dump($_COOKIE);         // 查看所有 cookie
?>