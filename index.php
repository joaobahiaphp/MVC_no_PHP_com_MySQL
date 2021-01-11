<?php
//require "app/controllers/ClienteController.php";
require "config/config.php";
require "app/core/Core.php";	
require "vendor/autoload.php";

$core = new Core();

//echo $core->run();
echo $core->getController()."<br />";
echo $core->getMetodo()."<br />";
$parametros = $core->getParametros();
echo "parametros abaixo:<br />";
foreach($parametros as $pr){
	echo $pr."<br />";
}


/*
require 'config/config.php';
require 'app/core/Core.php';
require 'vendor/autoload.php';

$core = new Core;
$core->run();
*/

/*
echo "contoller: " .$core->getController();
echo "<br>Método : " .$core->getMetodo();
$parametros = $core->getParametros();
foreach ($parametros as $param)
    echo "<br>Parâmetro : " .$param;*/

?>



