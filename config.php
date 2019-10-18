<?php
define("HOST","localhost");
define("USER","root");
define("PASSWORD","");
define("DB","rr");

$db = @mysql_connect(HOST,USER,PASSWORD);
if (!$db) {
	exit('WRONG CONNECTION');
}
if(!mysql_select_db(DB,$db)) {
	exit(DB);
}
mysql_query('SET NAMES utf8');

?>