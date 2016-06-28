<?php
$fruits = array ("Banane", "Pomme", "Poire", "Cerise", "Fraise", "Framboise");

$position = array_search("Fraise", $fruits);
echo '"Fraise" se trouve en position ' . $position . '<br />';

$position = array_search("Banane", $fruits);
echo '"Banane" se trouve en position ' . $position;
?>