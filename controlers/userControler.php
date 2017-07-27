<?php
    class userControler extends baseControler{
        private  static  $_model;

        public function __construct(){
        // 继承父类的构造方法
           parent::__construct();
        //    调用user模型
            self::$_model = $this->model('user');
        }

        public function index(){
            echo 'userControler-index' ;
        }

        public function doLogin(){
            //  $this->model('user')->login();
            self::$_model->login();
        }
    }
?>