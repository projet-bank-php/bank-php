<?php
$page_scripts = "";
$head_metas = "";

$pages = ['home', 'contact']; 
$page = 'home';

if (isset($_GET['page'])) {
    if (in_array($_GET['page'], $pages)){
        $page = $_GET['page'];
    }
}

include_once __DIR__ . "/../src/template/pages/$page.php";
include_once __DIR__ . "/../src/template/template.php";

?>