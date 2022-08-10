<?php

function call($model,$action){
    $model = ucfirst($model);
    $controller = $model."Controller";

    if(file_exists("model/$model.php")){
        require_once("model/BaseModel.php");
        require_once("model/$model.php");
    }
    if(file_exists("controller/$controller.php")){
        require_once("controller/$controller.php");
    }else{
        require_once("view/not_found.php");
    }
    $controller = new $controller;
    $controller->{$action}();
}
    call($controller, $action);
?>