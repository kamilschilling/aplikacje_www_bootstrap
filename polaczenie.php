<?php

$db_user ='s145636';
$db_password ='vwKXmh8sKOhv';

try{
	$polaczenie = new PDO('mysql:host=localhost;dbname=s145636',$db_user, $db_password);
}catch (PDOException $exception){
	echo 'Nie dziala baza';
}
?>