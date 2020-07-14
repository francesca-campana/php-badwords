<?php

$lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

$badword = $_GET["badword"];


//funzione per modificare una stringa
$newName = str_replace( $badword,'***', $lorem);
//funzione per conoscere la lunghezza di una stringa
$lorem_length = strlen($lorem);

 ?>
 <h1><?php echo $newName ?></h1>

 <h2>La lunghezza di lorem è <?php echo $lorem_length ?></h2>
