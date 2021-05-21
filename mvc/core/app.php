<?php
    class app
    {
        protected $controller="trangchu";
        protected $action="vn";
        protected $params=null ;
        function __construct()
        {
            //Array ( [0] => disan [1] => disanphivatthe [2] => tintuc )
            $arr=$this->urlProcess();
            //xử lí controller
            if (file_exists("./mvc/controllers/".$arr[0].".php"))
            {
                $this->controller = $arr[0];
                unset($arr[0]);
            } 
            require_once "./mvc/controllers/".$this->controller.".php";
            $this->controller = new $this->controller;
            //xử lí action
            if (isset($arr[1]))
            {
                if (method_exists($this->controller, $arr[1]) )
                {   
                    $this->action = $arr[1];
                    unset($arr[1]);
                }
            }
            //xử lí params
            $this->params = $arr?array_values($arr):[];

           call_user_func_array([$this->controller,$this->action],$this->params);

        } 
        function urlProcess()
        {
            if (isset($_GET["url"]))
            {
                return explode("/",$_GET["url"]);
            }
        }
    }
?>