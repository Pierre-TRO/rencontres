<?php

$image_source = "image-bob-eponge-2.jpg";
$largeur_destination = 320;
$hauteur_destination = 100;



/* 1 - On redimmensionne l'image source dans miniature.jpg
*/
$source = imagecreatefromjpeg($image_source); // La photo est la source
// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);
//On calcule les rapports
$rapport_destination = $hauteur_destination / $largeur_destination;
$rapport_source = $hauteur_source / $largeur_source;

if ($rapport_destination != $rapport_source) {
	$destination = imagecreatetruecolor($largeur_destination, $hauteur_destination); // On crée la miniature vide
	if ($rapport_destination < $rapport_source) {
		$largeur_miniature = ($hauteur_destination * $largeur_source) / $hauteur_source;
		$absice_miniature = ($largeur_destination - $largeur_miniature) / 2;
		$hauteur_miniature = $hauteur_destination;
		$ordonnee_miniature = 0;
	} else {
		$largeur_miniature = $largeur_destination;
		$absice_miniature = 0;
		$hauteur_miniature = ($largeur_destination * $hauteur_source) / $largeur_source;
		$ordonnee_miniature = ($hauteur_destination - $hauteur_miniature) / 2;
	}
	// On crée la miniature
	imagecopyresampled($destination, $source, $absice_miniature, $ordonnee_miniature, 0, 0, $largeur_miniature, $hauteur_miniature, $largeur_source, $hauteur_source);
	// On enregistre la miniature sous le nom "miniature.jpg"
	imagejpeg($destination, "miniature.jpg");
} else {
	$largeur_miniature = $largeur_destination;
	$absice_miniature = 0;
	$hauteur_miniature = $hauteur_destination;
	$ordonnee_miniature = 0;
	copy($image_source, "miniature.jpg");
}

/* 2 - On cree l'image de fond base.jpg qui contient un fond gris et les bordures noires*/
$image = imagecreate($largeur_destination,$hauteur_destination);

$gris = imagecolorallocate($image, 248, 248, 248);
$noir = imagecolorallocate($image, 0, 0, 0);
ImageLine ($image, 0, 0, $largeur_destination, 0, $noir);
ImageLine ($image, $largeur_destination-1, 0, $largeur_destination-1, $hauteur_destination-1, $noir);
ImageLine ($image, $largeur_destination-1, $hauteur_destination-1, 0, $hauteur_destination-1, $noir);
ImageLine ($image, 0, $hauteur_destination-1, 0, 0, $noir);
imagejpeg($image,"base.jpg");


/* 3 - On fusionne miniature.jpg avec base.jpg dans miniature-final.jpg et on les supprime*/
copy("base.jpg", "miniature-final.jpg");
$destination = imagecreatefromjpeg("miniature-final.jpg"); // La photo est la source
$source = imagecreatefromjpeg("miniature.jpg"); // La photo est la destination
imagecopymerge($destination, $source, $absice_miniature + 1, $ordonnee_miniature + 1, $absice_miniature, $ordonnee_miniature, $largeur_miniature - 2, $hauteur_miniature -2, 100);
imagejpeg($destination, "miniature-final.jpg");
//On supprime mini-bob.jpg
unlink ("miniature.jpg");
unlink ("base.jpg");

?>