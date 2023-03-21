<h1>Exercice6<h1>
<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :</p>

<?php

$age=9;

$sendmessage = true;

if ($age >=12) {
    $resultat="Cadet"; 
}elseif($age <= 11 and $age >= 10)   {
    $resultat="Minime";
}elseif($age <= 9 and $age >= 8)   {
     $resultat="Pupille";
} elseif ($age <= 7 and $age >= 6 )   {
     $resultat ="Poussin";
} else {
    $sendmessage = false;
    echo "L’enfant qui a $age ans n'appartient pas aux catégories disponibles.";
}

if ($sendmessage) {
    echo "L’enfant qui a $age ans appartient à la catégorie $resultat";
}



