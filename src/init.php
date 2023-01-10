<?php
session_start();
require_once __DIR__.'/config.php'; 
require_once __DIR__.'/db.php';
$pages = ['home', 'contact'] ; 
$page_scripts = "";
$head_metas ="";