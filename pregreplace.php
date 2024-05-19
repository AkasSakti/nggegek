<?php 
$text = "Kain batik berasal dari negara Malaysia."; 
preg_replace("/Malaysia/","Indonesia",$text); 
echo $text; 
?>