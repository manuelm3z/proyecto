<?php 
/*archivo de configuraciones globales de conexión a base de datos*/

/*
* servidor de la base de datos
*/
define("servidor", "localhost");

/*
* usuario de la base de datos
*/
define("usuario", "root");

/*
* password de la base de datos
*/
define("clave", "12345");

/*
* base de dato donde se obtendran los valores
*/
define("bd", "consejo");

$conecta = mysql_connect(servidor,usuario,clave) or die ("Error al conectar a mysql");
mysql_select_db(bd, $conecta) or die ("Base de datos '{$bd}'");


?>