<?php 

try {
	$db=new PDO("mysql:host=localhost;dbname=eticaret;charset=utf8",'root','1478963');
	

	
} 

catch (Exception $e) {
	echo $e->getMessage();
}


?>