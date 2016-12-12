<?php
define('ROOT', dirname(__DIR__));
require_once(ROOT.'/app/App.php');
require_once(ROOT.'/config/Config.php');
require(ROOT.'/app/Views/templates/header.php');
if(isset($_GET['page']))
{
    $page = $_GET['page'];
}
else
{
    $page = 'index';
}
switch ($page) 
{
	case "index":
		$class = 'ControllerIndex';
		App::load($class);
		$controller = new ControllerIndex();
        $controller->getCool();
        break;
}
require(ROOT.'/app/Views/templates/footer.php');
?>