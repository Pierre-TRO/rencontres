<?php

$source = imagecreatefromjpeg("test.jpg"); // La photo est la source

$largeur_destination = 300;

$hauteur_destination = 230;

$destination = imagecreatetruecolor($largeur_destination, $hauteur_destination); // On crée la miniature vide


// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image

$largeur_source = imagesx($source);

$hauteur_source = imagesy($source);

$largeur_miniature = ($hauteur_destination * $largeur_source) / $hauteur_source;

$absice_miniature = ($largeur_destination - $largeur_miniature) / 2;

// On crée la miniature

imagecopyresampled($destination, $source, $absice_miniature, 0, 0, 0, $largeur_miniature, $hauteur_destination, $largeur_source, $hauteur_source);


// On enregistre la miniature sous le nom "mini_bob.jpg"

imagejpeg($destination, "mini_bob.jpg");

//On fusionne l'image obtenue avec base.jpg
copy("base.jpg", "miniature.jpg");
$destination = imagecreatefromjpeg("miniature.jpg"); // La photo est la source
$source = imagecreatefromjpeg("mini_bob.jpg"); // La photo est la destination
imagecopymerge($destination, $source, $absice_miniature + 1, 1, $absice_miniature, 0, $largeur_miniature - 5, $hauteur_destination -2, 100);
imagejpeg($destination, "miniature.jpg");
//On supprime mini-bob.jpg
unlink ("mini_bob.jpg");

?>