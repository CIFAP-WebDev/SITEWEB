<?php
// Enregistrons les informations de date dans des variables

$jour = date("d");
$mois = date("m");
$annee = date("Y");

$heure = date("H");
$minute = date("i");

// Maintenant on peut afficher ce qu'on a recueilli
echo "Bonjour ! Nous sommes le $jour/$mois/$annee et il est $heure h $minute.";
?>