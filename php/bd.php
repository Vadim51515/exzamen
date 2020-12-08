<?
define("DB_HOST","localhost");
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_NAME","exzamen" );

$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

function getNews(){
	global $mysqli;
	$query = 'SELECT * FROM news';
	$rows = $mysqli -> query($query);
	return $rows;
}

?>