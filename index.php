<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once "classes/Page_Data.class.php";
$pageData = new Page_Data();
//$pageData = new stdClass();
$pageData->title = "Bright Future Inc.";
$pageData->navigation = include_once "views/navigation.php";
$pageData->css = "<link href='css/foundation.css' rel='stylesheet' />";
$pageData->css_icons = "<link href='css/foundation-icons/foundation-icons.css' rel='stylesheet'/>";
$navigationIsClicked = isset($_GET['page']);
if ($navigationIsClicked) {
    $fileToLoad = $_GET['page'];
} else {
    $fileToLoad = "skills";
}
$pageData->content = include_once "views/$fileToLoad.php";
$page = include_once 'templates/page.php';
echo $page;
