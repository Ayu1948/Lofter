<?php 
    class blogModel extends pdoClass {
        function __construct(){
          parent::__construct();
        }
    }
    public function index(){
        echo 'blogControler-index' ;
    }
?>