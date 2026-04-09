<?php
var_dump($_POST);

extract($_POST, EXTR_OVERWRITE);
echo "Suma: ".$var_a + $var_b ."<br>";
echo "Producto: ".$var_a * $var_b ."<br>";
echo "Potencia: ".$var_a ** $var_b ."<br>";
echo "Resta: ".$var_a - $var_b ."<br>";
?>