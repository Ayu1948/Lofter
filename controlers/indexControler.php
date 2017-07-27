<?php
    class indexControler extends baseControler{
        function __construct(){
            parent::__construct();//引入父类的构造方法
        }
        public function index(){
            $this->display('index.html');
        }
    }
?>