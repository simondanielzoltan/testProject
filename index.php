<?php
require_once("db.php");

$controller = $_GET["page"] ?? 'home';
$action="index";

require_once("routes.php");
?>