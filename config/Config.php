<?php
require_once(ROOT.'/core/Database/PdoMysql.php');
if (Bdd::needInstance())
{
	$_SESSION['bdd'] = new Bdd(null, 'unskilledsheep', 'root', 'test123', false, null, null);
}