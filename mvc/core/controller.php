<?php 
    class controller
    {
        protected function model($model)
        {
            require_once "./mvc/models/".$model.".php";
            return new $model;  
        }
        protected function view($view, $data=[])
        {
            require_once "./mvc/views/".$view.".php";
            
        }
    }
?>