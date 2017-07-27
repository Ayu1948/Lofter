<?php
    class pdoClass{
        //定义私有变量
        private $_link;

        function __construct(){
            self::_connect();
        }
        private static function _connect(){//连接数据库
            $dsn = "mysql:host=localhost;dbname=weibo;charset=utf8";
            $user = 'root';
            $pwd = "";

          try{
                $_link =  new PDO($dsn , $user ,$pwd);
                // echo '连接成功';
           }catch(PDOException $e){
                echo "PDO连接失败 ：{$e->getMessage()}";
           }
        }
        private function __clone(){}//禁止克隆

        public  function fetchAll($sql){
            // select col1,col2,,, from table where 
            $prepare = $this->link->prepare($sql);
            $prepare->execute();
            return $prepare->fetchAll();
        } 
        public function fetch($sql){
            // select col1,col2,,, from table where            
            $prepare = $this->link->prepare($sql);
            $prepare->execute();
            return $prepare->fetch();
        }
        public function insertInfo($table ,$key ,$values){
            // insert into table(col1,col2,col3..) values(val1,val2,val3...)
            // $common ="";
            // foreach($key as $val){

            // }
        }
        public function delectInfo($sql){
        // delect form table where
        }

        public function updateInfo($sql){
        // update table set col1 = val1 where
        }
    
    
    }

?>