<?php
define('ROOT', dirname(__DIR__));
define('TPL', ROOT.'/app/Views/templates/');
require_once(ROOT.'/app/App.php');
App::register();
require_once(ROOT.'/config/Config.php');
require_once(ROOT.'/core/Controller/Controller.php');
require(TPL.'/header.php');
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
if(method_exists($controller,$action))
{
    $controller->$action();
}

require(TPL.'/footer.php');
?>