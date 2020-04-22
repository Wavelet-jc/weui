<?php
/** 
*PHP加密函数
* 
*在PHP种能对数据进行加密的函数主要有crypt()、md5()和sha1(),还有加密扩展库Mcrypt和Mash。
* @author      Carlos Jiang<1097671986@qq.com> 
*/
$str = 'This is an exzample!';      //声明字符串变量$str
echo '加密前$str的值为：'.$str;
$crypttostr = crypt($str,rand());          //对变量$str加密
echo '<p>加密后$str的值为：'.$crypttostr;       //输出加密后的变量
?>

<p>md5()函数使用MD5算法。MD5的全称是Message-Digest Algorithm 5（信息-摘要算法）。</p>
<p>它的作用是把不同长度的数据信息经过一系列的算法计算成一个128位的数值，就是把一个任意长度的字节串变换成一定长度的大整数</p>
<?php
    echo md5('PHPER');
?>

<p>SHA全称为Secure Hash Algorithm(安全哈希算法)PHP提供的sha1()函数使用的就是SHA算法</p>
<?php
    echo sha1('PHPER');
/** 
* some_func  
* @access public 
* @param mixed $arg1 参数一的说明 
* @param mixed $arg2 参数二的说明 
* @param mixed $mixed 这是一个混合类型 
* @since 1.0 
* @return array 
* 函数的含义说明 
*/ 

 function thisIsFunction($string, $integer, $mixed) {return array();}

?>