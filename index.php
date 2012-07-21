<?php
require_once('twitteroauth.php'); // En ocasiones si muestra un error de "twitteroauth" debes cambiar esto por: require_once('./twitteroauth.php');

$submit = $_POST['submit'];
$password = $_POST['password'];
$status = $_POST['status'];
$server = $_POST['server'];
$room = $_POST['room'];

$select = $_POST['select'];

$rocky = $_POST['rocky'];
$cece = $_POST['cece'];
$cadence = $_POST['cadence'];
$franky = $_POST['franky'];
$bob = $_POST['bob'];
$billy = $_POST['billy'];
$petey = $_POST['petey'];

if($submit){ // Lo que pasa si se oprime enviar
if($password == "AQUI_TU_CLAVE__HERE_YOUR_PASSWORD") { // Lo que pasa si ingregas la clave que decides
$online = $_POST['online'];
$tracking = $_POST['tracking'];
$left = $_POST['left'];
$move = $_POST['move'];
$random = rand(1, 500);
$im = imagecreatefrompng("trackerBG.png"); // Imagen desde la cual se creara la otra
$colour = imagecolorallocate($im, 0, 0, 0);  // Color RGB del texto
$font = 'BurbankBigRegularBold.ttf'; // Nombre de tu fuente, en ocasiones si no funciona o no se coloca el texto debes cambiar esta linea por: $font = './BurbankBigRegularBold.ttf';


imagettftext($im, 16, 0, 100, 140, $colour, $font, $status); // Esto pone el estado
imagettftext($im, 16, 0, 57, 185, $colour, $font, $server); // Esto pone el servidor
imagettftext($im, 16, 0, 85, 229, $colour, $font, $room); // Esto pone la sala


// Comienza mostrar los nombres a la derecha

/*
Esto coloca el nombre de cada personaje dependiendo de que opciones se seleccione
Luego lo que dice "tracker.png" es el nombre de la imagen de salida, si la cambias en 1 debes cambiarlo en todos los demas abajo, son como 300 lineas que debes buscar "tracker.png" si lo quieres cambiar, asi que mejor dejalo asi.
*/

// Todos

if(isset($cece) && isset($rocky) && isset($cadence) && isset($bob) && isset($franky) && isset($petey) && isset($billy)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cece & Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 184, $colour, $font, "Penguin Band");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}


//Grupos de 6

if(isset($cece) && isset($rocky) && isset($cadence) && isset($bob) && isset($franky) && isset($petey)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cece & Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 184, $colour, $font, "Bob el bajista");
imagettftext($im, 13, 0, 310, 198, $colour, $font, "Franky");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cece) && isset($rocky) && isset($cadence) && isset($bob) && isset($franky) && isset($billy)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cece & Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 184, $colour, $font, "Bob el bajista");
imagettftext($im, 13, 0, 310, 198, $colour, $font, "G Billy");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($rocky) && isset($cadence) && isset($bob) && isset($franky) && isset($petey) && isset($billy)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 184, $colour, $font, "Penguin Band");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}



//Grupos de 5

if(isset($cece) && isset($rocky) && isset($cadence) && isset($bob) && isset($franky)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cece & Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 184, $colour, $font, "Bob el bajista");
imagettftext($im, 13, 0, 310, 198, $colour, $font, "Franky");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cece) && isset($rocky) && isset($cadence) && isset($bob) && isset($petey)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cece & Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 184, $colour, $font, "Bob el bajista");
imagettftext($im, 13, 0, 310, 198, $colour, $font, "Petey K");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cece) && isset($rocky) && isset($cadence) && isset($bob) && isset($billy)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cece & Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 184, $colour, $font, "Bob el bajista");
imagettftext($im, 13, 0, 310, 198, $colour, $font, "G Billy");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($rocky) && isset($cadence) && isset($bob) && isset($franky) && isset($petey)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 184, $colour, $font, "Bob el bajista");
imagettftext($im, 13, 0, 310, 198, $colour, $font, "Franky");
imagettftext($im, 13, 0, 310, 212, $colour, $font, "Petey K");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($rocky) && isset($cadence) && isset($bob) && isset($franky) && isset($billy)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 184, $colour, $font, "Bob el bajista");
imagettftext($im, 13, 0, 310, 198, $colour, $font, "Franky");
imagettftext($im, 13, 0, 310, 212, $colour, $font, "G Billy");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}



// Grupos de 4

if(isset($cece) && isset($rocky) && isset($cadence) && isset($bob)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cece & Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 184, $colour, $font, "Bob el bajista");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cece) && isset($rocky) && isset($cadence) && isset($franky)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cece & Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 184, $colour, $font, "Franky");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cece) && isset($rocky) && isset($cadence) && isset($petey)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cece & Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 184, $colour, $font, "Petey K");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cece) && isset($rocky) && isset($cadence) && isset($billy)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cece & Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 184, $colour, $font, "G Billy");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($rocky) && isset($cadence) && isset($bob) && isset($franky)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 184, $colour, $font, "Bob el bajista");
imagettftext($im, 13, 0, 310, 198, $colour, $font, "Franky");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($rocky) && isset($cadence) && isset($bob) && isset($petey)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 184, $colour, $font, "Bob el bajista");
imagettftext($im, 13, 0, 310, 198, $colour, $font, "Petey K");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($rocky) && isset($cadence) && isset($bob) && isset($billy)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 184, $colour, $font, "Bob el bajista");
imagettftext($im, 13, 0, 310, 198, $colour, $font, "G Billy");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cadence) && isset($bob) && isset($franky) && isset($petey)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Bob el bajista");
imagettftext($im, 13, 0, 310, 184, $colour, $font, "Franky");
imagettftext($im, 13, 0, 310, 198, $colour, $font, "Petey K");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cadence) && isset($bob) && isset($franky) && isset($billy)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Bob el bajista");
imagettftext($im, 13, 0, 310, 184, $colour, $font, "Franky");
imagettftext($im, 13, 0, 310, 198, $colour, $font, "G Billy");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cadence) && isset($franky) && isset($petey) && isset($billy)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Franky");
imagettftext($im, 13, 0, 310, 184, $colour, $font, "Petey K");
imagettftext($im, 13, 0, 310, 198, $colour, $font, "G Billy");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($bob) && isset($franky) && isset($petey) && isset($billy)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Penguin Band");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}



// Grupos de 3

if(isset($cece) && isset($rocky) && isset($cadence)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cece & Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cece) && isset($rocky) && isset($bob)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cece & Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Bob el bajista");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cece) && isset($rocky) && isset($franky)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cece & Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Franky");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cece) && isset($rocky) && isset($petey)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cece & Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Petey K");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cece) && isset($rocky) && isset($billy)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cece & Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "G Billy");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cece) && isset($cadence) && isset($bob)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cece");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 194, $colour, $font, "Bob el bajista");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cece) && isset($cadence) && isset($franky)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cece");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 194, $colour, $font, "Franky");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cece) && isset($cadence) && isset($petey)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cece");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 194, $colour, $font, "Petey K");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cece) && isset($cadence) && isset($billy)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cece");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 194, $colour, $font, "G Billy");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($rocky) && isset($cadence) && isset($bob)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 194, $colour, $font, "Bob el bajista");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($rocky) && isset($cadence) && isset($franky)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 194, $colour, $font, "Franky");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($rocky) && isset($cadence) && isset($petey)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 194, $colour, $font, "Petey K");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($rocky) && isset($cadence) && isset($billy)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Rocky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 194, $colour, $font, "G Billy");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cadence) && isset($bob) && isset($franky)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Bob el bajista");
imagettftext($im, 13, 0, 310, 194, $colour, $font, "Franky");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cadence) && isset($bob) && isset($petey)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Bob el bajista");
imagettftext($im, 13, 0, 310, 194, $colour, $font, "Petey K");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cadence) && isset($bob) && isset($billy)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Bob el bajista");
imagettftext($im, 13, 0, 310, 194, $colour, $font, "G Billy");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($bob) && isset($franky) && isset($petey)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Bob el bajista");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Franky");
imagettftext($im, 13, 0, 310, 194, $colour, $font, "Petey K");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($bob) && isset($franky) && isset($billy)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Bob el bajista");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Franky");
imagettftext($im, 13, 0, 310, 194, $colour, $font, "G Billy");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($franky) && isset($petey) && isset($billy)) {
imagettftext($im, 13, 0, 310, 156, $colour, $font, "Franky");
imagettftext($im, 13, 0, 310, 170, $colour, $font, "Petey K");
imagettftext($im, 13, 0, 310, 194, $colour, $font, "G Billy");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}



//Grupos con cece

if(isset($cece) && isset($cadence)) {
imagettftext($im, 13, 0, 310, 154, $colour, $font, "Cece");
imagettftext($im, 13, 0, 310, 168, $colour, $font, "Cadence");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cece) && isset($rocky)) {
imagettftext($im, 13, 0, 310, 154, $colour, $font, "Cece");
imagettftext($im, 13, 0, 310, 168, $colour, $font, "Rocky");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cece) && isset($bob)) {
imagettftext($im, 13, 0, 310, 154, $colour, $font, "Cece");
imagettftext($im, 13, 0, 310, 168, $colour, $font, "Bob el bajista");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cece) && isset($franky)) {
imagettftext($im, 13, 0, 310, 154, $colour, $font, "Cece");
imagettftext($im, 13, 0, 310, 168, $colour, $font, "Franky");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cece) && isset($petey)) {
imagettftext($im, 13, 0, 310, 154, $colour, $font, "Cece");
imagettftext($im, 13, 0, 310, 168, $colour, $font, "Petey K");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cece) && isset($billy)) {
imagettftext($im, 13, 0, 310, 154, $colour, $font, "Cece");
imagettftext($im, 13, 0, 310, 168, $colour, $font, "G Billy");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}


//Grupos con Rocky

if(isset($rocky) && isset($cadence)) {
imagettftext($im, 13, 0, 310, 154, $colour, $font, "Rocky");
imagettftext($im, 13, 0, 310, 168, $colour, $font, "Cadence");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($rocky) && isset($bob)) {
imagettftext($im, 13, 0, 310, 154, $colour, $font, "Rocky");
imagettftext($im, 13, 0, 310, 168, $colour, $font, "Bob el bajista");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($rocky) && isset($franky)) {
imagettftext($im, 13, 0, 310, 154, $colour, $font, "Rocky");
imagettftext($im, 13, 0, 310, 168, $colour, $font, "Franky");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($rocky) && isset($petey)) {
imagettftext($im, 13, 0, 310, 154, $colour, $font, "Rocky");
imagettftext($im, 13, 0, 310, 168, $colour, $font, "Petey K");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($rocky) && isset($billy)) {
imagettftext($im, 13, 0, 310, 154, $colour, $font, "Rocky");
imagettftext($im, 13, 0, 310, 168, $colour, $font, "Billy");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

// Grupos con cadence

if(isset($cadence) && isset($bob)) {
imagettftext($im, 13, 0, 310, 154, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 168, $colour, $font, "Bob el bajista");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cadence) && isset($franky)) {
imagettftext($im, 13, 0, 310, 154, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 168, $colour, $font, "Franky");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cadence) && isset($petey)) {
imagettftext($im, 13, 0, 310, 154, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 168, $colour, $font, "Petey K");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cadence) && isset($billy)) {
imagettftext($im, 13, 0, 310, 154, $colour, $font, "Cadence");
imagettftext($im, 13, 0, 310, 168, $colour, $font, "G Billy");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

//Grupos con Bob el Bajista

if(isset($bob) && isset($franky)) {
imagettftext($im, 13, 0, 310, 154, $colour, $font, "Bob el bajista");
imagettftext($im, 13, 0, 310, 168, $colour, $font, "Franky");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($bob) && isset($petey)) {
imagettftext($im, 13, 0, 310, 154, $colour, $font, "Bob el bajista");
imagettftext($im, 13, 0, 310, 168, $colour, $font, "Petey K");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($bob) && isset($billy)) {
imagettftext($im, 13, 0, 310, 154, $colour, $font, "Bob el bajista");
imagettftext($im, 13, 0, 310, 168, $colour, $font, "G Billy");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

//Grupos con Franky

if(isset($franky) && isset($petey)) {
imagettftext($im, 13, 0, 310, 154, $colour, $font, "Franky");
imagettftext($im, 13, 0, 310, 168, $colour, $font, "Petey K");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($franky) && isset($billy)) {
imagettftext($im, 13, 0, 310, 154, $colour, $font, "Franky");
imagettftext($im, 13, 0, 310, 168, $colour, $font, "G Billy");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}



// Personajes solos

if(isset($cece)) {
imagettftext($im, 13, 0, 310, 157, $colour, $font, "Cece");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($rocky)) {
imagettftext($im, 13, 0, 310, 157, $colour, $font, "Rocky");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($cadence)) {
imagettftext($im, 13, 0, 310, 157, $colour, $font, "Cadence");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($bob)) {
imagettftext($im, 13, 0, 310, 157, $colour, $font, "Bob el bajista");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($franky)) {
imagettftext($im, 13, 0, 310, 157, $colour, $font, "Franky");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($petey)) {
imagettftext($im, 13, 0, 310, 157, $colour, $font, "Petey K");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}

if(isset($billy)) {
imagettftext($im, 13, 0, 310, 157, $colour, $font, "G Billy");
imagepng($im,'tracker.png'); 
imagedestroy($im);
}


//Termina colocar los personajes a la derecha



// Empiezan Tweets

/*

Sigue estos pasos para obtener TU_CONSUMER_KEY, TU_CONSUMER_SECRET, TU_ACCESS_TOKEN, TU_ACCESS_TOKEN_SECRET:
-Debes ir a dev.twitter.com
-Dar click en "sign in".
-Ingresar tu usuario / clave y entrar.
-Luego vas dev.twitter.com/apps/new y creas una nueva aplicacion colocandole nombre, descripcion, tu sitio web en los dos espacios e ingresas el captcha.
-Luego de creada da click en la pestaña "Settings", bajas y selecciona el boton "read and write" luego bajas y guardas.
-Vuelve a la primera pestaña, bajas y das click en "Create My Access Token"
-Luego ve a "Oauth Tool" y ahi copias y pegas tus codigos en las letras mayusculas de abajo correspondientes.

*/



$consumerKey = 'TU_CONSUMER_KEY'; 
$consumerSecret = 'TU_CONSUMER_SECRET';
$oAuthToken = 'TU_ACCESS_TOKEN';
$oAuthSecret = 'TU_ACCESS_TOKEN_SECRET';

$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);


$lostweets['found'] = "ESCRIBE_AQUI_EL_TWEET_QUE_QUIERAS_QUE_SE_MANDE_CUANDO_SE_OPRIMA_EL_BOTON_ENCONTRADO ($random)"; // DEBES ESCRIBIR EL TWEET CON LA URL. ($random) ES USADO PARA EVITAR REPETIR TWEETS

$lostweets['track'] = "ESCRIBE_AQUI_EL_TWEET_QUE_QUIERAS_QUE_SE_MANDE_CUANDO_SE_OPRIMA_EL_BOTON_TRACKEANDO ($random)"; // DEBES ESCRIBIR EL TWEET CON LA URL. ($random) ES USADO PARA EVITAR REPETIR TWEETS

$lostweets['left'] = "ESCRIBE_AQUI_EL_TWEET_QUE_QUIERAS_QUE_SE_MANDE_CUANDO_SE_OPRIMA_EL_BOTON_DEJO_EL_SERVIDOR ($random)"; // DEBES ESCRIBIR EL TWEET CON LA URL. ($random) ES USADO PARA EVITAR REPETIR TWEETS

$lostweets['move'] = "ESCRIBE_AQUI_EL_TWEET_QUE_QUIERAS_QUE_SE_MANDE_CUANDO_SE_OPRIMA_EL_BOTON_CAMBIO_DE_SALA ($random)"; // DEBES ESCRIBIR EL TWEET CON LA URL. ($random) ES USADO PARA EVITAR REPETIR TWEETS


$tweet->post('statuses/update', array('status' =>$lostweets[$select]));

// Fin de los tweets


echo "<b> Actualizacion Exitosa! </b>";
}else {
echo "La clave ingresada es incorrecta.";
}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Actualizar el tracker de EL_NOMBRE_QUE_LE_QUIERAS_PONER </title>
    <script type="text/javascript">

function checkAll() {
    var nodoCheck = document.getElementsByTagName("input");
    var varCheck = document.getElementById("all").checked;
    for (i=0; i<nodoCheck.length; i++){
        if (nodoCheck[i].type == "checkbox" && nodoCheck[i].name != "all" && nodoCheck[i].disabled == false) {
            nodoCheck[i].checked = varCheck;
        }
    }
}

   </script>
   <!-- El script de arriba es uno que encontre que selecciona todos los "checkbox" y asi se ahorra tiempo en seleccionar -->
  </head>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" />

Clave: <input type="password" name="password" value="<?php echo $_POST['password']; ?>"/><br />

Estado: <input type="text" name="status" value="<?php echo $_POST['status']; ?>"/><br />

Servidor: <input type="text" name="server" value="<?php echo $_POST['server']; ?>"/><br />

Sala: <input type="text" name="room" value="<?php echo $_POST['room']; ?>"/><br />

<br/>
Personaje: <br/>
Cece: <input type="checkbox" name="cece" /><br />

Rocky: <input type="checkbox" name="rocky" /><br />

Cadence: <input type="checkbox" name="cadence" /><br />

Bob, el bajista: <input type="checkbox" name="bob" /><br />

Franky: <input type="checkbox" name="franky" /><br />

Petey K: <input type="checkbox" name="petey" /><br />

G Billy: <input type="checkbox" name="billy" /><br />

Marcar todos<input type="checkbox" id="all" onclick="checkAll();" />



<br/>
<br/>
-------------------------------------
<br/>
<b> Tweet: </b><br/>
Encontrad@ <input type="radio" name="select" value="found" /><br />
Trackeando <input type="radio" name="select" value="track" /><br />
Dejo el servidor <input type="radio" name="select" value="left" /> <br />
Cambio de Sala <input type="radio" name="select" value="move" /><br />
<p><input type="submit" name="submit"/></p>
</form></div><br />

<div style="text-align:center;"> <a href="tracker.png"> Ver el tracker </a> </div>

</body>
</html>