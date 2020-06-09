<?php
ob_start(); // output buffering is turned on

$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 12;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WEB", $doc_root);

require_once('query_function.php');
require_once 'functions.php';
require_once 'database.php';
$db = db_connect();
$errors = [];
