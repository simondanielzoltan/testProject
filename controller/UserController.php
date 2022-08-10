<?php

class UserController
{
    function index(){
        $users = User::get();
        return require_once("view/user/index.php");
    }
}
?>