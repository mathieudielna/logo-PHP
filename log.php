<?php

// Création d'une image 200*200
$img = imagecreatetruecolor(200, 200);

// Allocation de couleurs
$white = imagecolorallocate($img, 255, 255, 255);
$red   = imagecolorallocate($img, 255,   0,   0);
$green = imagecolorallocate($img,   0, 255,   0);
$blue  = imagecolorallocate($img,   0,   0, 255);

// Dessine la tête
imagearc($img, 100, 100, 200, 200,  0, 360, $white);
// La bouche
imagearc($img, 100, 100, 150, 150, 25, 155, $red);
// les yeux gauche et droit
imagearc($img,  60,  75,  50,  50,  0, 360, $red);
imagearc($img, 140,  75,  50,  50,  0, 360, $red);

// Affichage au navigateur
header("Content-type: image/png");
imagepng($img);

// Libération de la mémoire
imagedestroy($img);

?>