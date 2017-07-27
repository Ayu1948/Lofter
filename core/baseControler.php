<?php
    class baseControler{
        
        private $db;
        private $smarty ;

        public function __construct(){
            $this->smarty = new Smarty();//实例化smarty
            $this->smarty->template_dir = "views";//模版文件目录
            $this->smarty->compile_dir = "views_c";//编译文件目录
            $this->cache_dir = "cache";//缓存文件目录
          
        }

        // public function index(){
        //     echo 'baseControler-index' ;
        // }

        // 调用模块的方法
        public function model( $model ){
            $model = $model."Model";
            require "./modules/".$model.".php";

            //因为所有模块都是要继承pdoclass类的所以，把pdo模块的的构造方法也继承了
            return new $model();
        }
        //定义smarty 模版变量 替换
        public function assign($name ,$val){
            $this->smarty->assign($name ,$val);
        }
        public function display($html){
            $this->smarty->display($html);
        }
        // 请求分发
        public function run(){
            //获取请求的控制器、操作参数。
            $c = isset( $_REQUEST['c'] ) ?  $_REQUEST['c']  : "index"; 
            $a = isset( $_REQUEST['a'] ) ?  $_REQUEST['a']  : "index";

            //为名称添加控制器后缀
            $c_name = $c."Controler";
            $a_name = $a."";

            require "./controlers/".$c_name.".php";// 加载控制器
            $Controler = new $c_name();//实例化控制器
            $Controler->$a_name();//调用方法
        }
    }
?>