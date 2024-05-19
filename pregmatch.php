<?php 
$text = "Pagi ini saya sarapan Soto."; 
preg_match("/(soto|siomay|sate)/i", $text, $matches); 
echo "Hai.. Pagi ini kamu sarapan ".$matches[0]; 
?> 