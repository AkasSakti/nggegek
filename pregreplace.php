<?php 
$text = "Kain batik berasal dari negara Malaysia."; 
$text = preg_replace("/Malaysia\./", "Indonesia", $text); 
echo $text; 
?>
