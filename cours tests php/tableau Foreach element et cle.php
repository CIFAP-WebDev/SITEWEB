<?php
$coordonnees = array (
    "prenom" => "François",
    "nom" => "Dupont",
    "adresse" => "3 Rue du Paradis",
    "ville" => "Marseille");

foreach($coordonnees as $cle => $element)
{
	echo '[' . $cle . '] vaut ' . $element . '<br />';
}
?>