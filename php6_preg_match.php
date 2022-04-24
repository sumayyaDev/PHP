<?php

$string1= 'This is a string';

if(preg_match('/is/', $string1)){
	echo 'Match found.';
}else{
	echo 'Match is not found.';
}

?>