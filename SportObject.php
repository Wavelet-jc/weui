<?php
    spl_autoload_register("autoload");//参数为：autoload方法的名称    
    function autoload($class_name){
        $class_path = $class_name.'.class.php';
        if(file_exists($class_path)){
            include_once($class_path);
        }else{
            echo $class_path.'类路径错误。';
        }    
    }
    
    // include "SportObject.class.php";
    
    $MyComputer = new SportObject();
    $MyComputer->type = 'DIY';
    echo $MyComputer->type;
    echo "<br>";    
    $MyComputer->newname;
    echo "<br>"; 

    $exam = new SportObject();
    $exam->myDream();
    $exam->mDream('how','what','why');
    // echo $MyComputer."<br>";

    $myBook = new SportObject();
    $myBook->type = "DIY";
    $i = serialize($myBook);
    echo '序列化后的字符串：'.$i."<br>";
    $reBook = unserialize($i);
    echo '还原后的成员变量:'.$reBook->getType();
