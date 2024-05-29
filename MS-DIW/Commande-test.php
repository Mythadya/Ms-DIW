
<?php

$nometprenom = $_POST['nometprenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$adresse = $_POST['adresse'];


$date = date('Y-m-d-H-i-s');
$filename = $date. '.txt';

$file = fopen($filename, 'w');


fwrite($file, "Nom et Prénom : $nometprenom\n");
fwrite($file, "Email : $email\n");
fwrite($file, "Téléphone : $telephone\n");
fwrite($file, "Adresse : $adresse\n");

fclose($file);

echo "Les informations ont été enregistrées avec succès!";
?>