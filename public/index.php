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
    $page = 'index.login';
}
$page = explode('.', $page);
switch ($page[0]) 
{
	case "index":
        if ($page[1] == 'login')
        {
          $action = $page[1];  
        }
        else
        {
            $action = 'login';
        }
		$controller = new ControllerIndex;
        break;
    default:
        $controller = new ControllerIndex;
        $action = 'login';
}
    $controller->$action();

require(TPL.'/footer.php');
?>