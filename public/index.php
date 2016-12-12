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
$parametre = '';
if(Auth::isOnline())
{

    $page = explode('.', $page);
    switch ($page[0])
    {
	   case "index":
            $class = 'ControllerIndex';
            $action = 'login';
            if ($page[1] == 'login' 
                || $page[1] == 'accueil'
                || $page[1] == 'disconnect')
            {
                $action = $page[1];  
            }
        break;
        case "documents":
            $class = 'ControllerDocuments';
            $action = 'exploits';
            if ($page[1] == 'exploits')
            {
                $action = $page[1];
            }
            elseif($page[1] == 'exploit')
            {
                $action = $page[1];
                if(empty($page[2]))
                {
                    $parametre = 1;
                }
                $parametre = intval($page[2]);
            }
        break;
        default:
            $class = 'ControllerIndex';
            $action = 'login';
        break;
    }    
}
else
{
    $class = 'ControllerIndex';
    $action = 'login';
}
    App::load($class);
    $controller = new $class;
    $controller->$action($parametre);

require(TPL.'/footer.php');
?>