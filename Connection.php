<?php

/** 
*MySQL 创建数据库
* 
* @author      Carlos Jiang<1097671986@qq.com> 
*/


$host='localhost:3308'; //数据库主机名
$user='root';      //数据库连接用户名
$pass='';          //对应的密码
$dbname='corps';
$conn = mysqli_connect($host,$user,$pass,$dbname);
if(!$conn)
{
  die('连接错误: ' . mysqli_error($conn));
}
echo '连接成功<br />';
$sql = 'show tables';
$retval = mysqli_query($conn, $sql);
if(! $retval )
{
  die('查询corps表 失败: ' . mysqli_error($conn));
}
echo " 查询corps表 成功\n";
mysqli_close($conn);
?>

