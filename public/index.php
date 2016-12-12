<?php
define('ROOT', dirname(__DIR__));
require_once(ROOT.'/app/App.php');
App::register();
require_once(ROOT.'/config/Config.php');
require_once(ROOT.'/core/Controller/Controller.php');
require(ROOT.'/app/Views/templates/header.php');
if(isset($_GET['page']))
{
    $page = $_GET['page'];
}
else
{
    $page = 'index.getCool';
}
$page = explode('.', $page);
switch ($page[0]) 
{
	case "index":
		$controller = new ControllerIndex();
        $action = $page[1];
        break;
    default:
        $controller = new ControllerIndex();
        $action = 'getCool';
}
$controller->$action();
require(ROOT.'/app/Views/templates/footer.php');
?>