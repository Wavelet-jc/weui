<?PHP
    class SportObject{
        private $type;
        /**
         * SportObject的构造函数
         * @param string $type 默认DIY
         */
        public function __construct($type="DIY"){   //构造函数
            $this->type = $type;
        }

        public function myDream(){
            echo '调用的方法存在，直接执行此方法<p>';
        }

        /**
         * 获取type的值 
         */
        public function getType(){
            return $this->type;
        }

        /**
         * 方法不存在，执行__call()函数
         * @param string $method 方法名
         * @param array $parameters 参数
         */
        public function __call($method,$parameters){
            echo "方法名".$method;
            echo "参数有：";
            var_dump($parameters);
        }

        /**
         * 试图调用一个不存在的或不可见的成员变量时
         * @param mixed $name 试图调用的变量名
         */
        public function __get($name){
            if(isset($this->$name))
                return $this->$name;
            else{
                echo "变量 ".$name." 未定义，初始化为0";
                $this->$name = 0;
            }
        }

         /**
         * 试图写入一个不存在或不可见的成员变量时
         * @param mixed $name 试图写入的变量名
         * @param mixed $value 试图写入的变量值
         */
        public function __set($name,$value){
            
            if(isset($this->$name)){
                $this->$name = $value;      //assign
            }else{
                $this->$name = $value;      //initialize 
            }
        }

        /**
         * 当使用 echo 或 print 输出对象时，将对象转化为字符串
         */    
        public function __toString(){
            return $this->type;
        }

        /**
         * 使用serialize()函数将对象保存起来，可以存放到文本文件、数据库等地方。
         * 该方法可以清除对象并返回一个该对象中所有变量的数组
         */
        public function __sleep(){
            return array('type');
        }

        /**
         * 使用unserialize()函数可以重新还原一个被serialize()函数序列化的对象
         * 该方法可以恢复在序列化中可能丢失的数据库连接及相关工作
         */
        public function __wakeup(){
            //当需要该数据时,使用unserialize()函数对已序列化的字符串进行操作，将其转化为对象
        }
    }
