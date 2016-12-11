<?php
define('ROOT', dirname(__DIR__));
require_once(ROOT.'/app/App.php');
App::load();
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
		$controller = new ControllerIndex();
        break;

}
?>