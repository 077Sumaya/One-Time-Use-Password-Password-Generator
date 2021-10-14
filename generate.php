<?php
	$characters='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$pass_characters = str_split($characters);
	$pass_length = "8";
	$password='';

	for($i=0;$i<$pass_length;$i++){
	$password.=$pass_characters[rand(0,count($pass_characters)-1)];
	}
	echo $password;
?>