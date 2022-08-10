<?php

class AdController
{
    function index(){
        $ads = Ad::get();
        return require_once("view/ad/index.php");
    }
}
?>