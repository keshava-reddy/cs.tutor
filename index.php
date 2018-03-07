<?php

$urlData = explode('/', $_SERVER['REQUEST_URI']);
$controllerName = $urlData[1];
$actionName = $urlData[2];

include("controller/$controllerName.php");

$controller = new $controllerName();
$controller->$actionName();

// Prepare params for view
 foreach($controller->viewParams as $viewParamsName=>$viewParamsValue) {
     $$viewParamsName = $viewParamsValue;
     }

// get view to give to layout
 ob_start();
 include("view/$controllerName/$actionName.php");
 $content = ob_get_clean();

$title = $controller->title;
include("layout/main.php");
