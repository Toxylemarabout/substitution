<?php

function cryptageHash($msg){

	$algo = 'sha256';
	$ciphered = hash($algo, $msg);
	return $ciphered;

}

header('Location: index.php');

?> 
