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
        if ($page[1] == 'getCool')
        {
          $action = $page[1];  
        }
        else
        {
            $action = 'getCool';
        }
		$controller = new ControllerIndex();
        break;
    default:
        $controller = new ControllerIndex();
        $action = 'getCool';
}
    $controller->$action();

require(TPL.'/footer.php');
?>