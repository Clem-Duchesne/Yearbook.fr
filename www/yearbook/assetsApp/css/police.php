<?php
session_start();
header('content-type: text/css');
header('Cache-Control: max-age=3600, must-revalidate');

$polices = $_SESSION['polices'];
$n=count($polices);
	for($i=0;$i<$n;$i++){
		echo "." . $polices[$i]['fontname_min'] . "{" .
		$polices[$i]['css'] . "}
	" ;
	} 
?>
