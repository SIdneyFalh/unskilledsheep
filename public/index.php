<?php
define('ROOT', dirname(__DIR__));
define('TPL', ROOT.'/app/Views/templates/');
require_once(ROOT.'/app/App.php');
require_once(ROOT.'/core/Auth/Auth.php');
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
if(Auth::isOnline())
{
    $page = explode('.', $page);
    switch ($page[0])
    {
	   case "index":
            $class = 'ControllerIndex';
            if ($page[1] == 'login' || $page[1] == 'accueil')
            {
            $action = $page[1];  
            }
            else
            {
                $action = 'login';
            }
        break;
        default:
            $class = 'ControllerIndex';
            $action = 'login';
        break;
    }
    App::load($class);
}
else
{
    $class = 'ControllerIndex';
    $action = 'login';
}
    $controller = new $class;
    $controller->$action();

require(TPL.'/footer.php');
?>