<h1>Exercice3</h1>
<p>Soit une phrase "Notre formation commence ajourd'hui".<br>
A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot 
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>

<h2>Rèsultat</h2>

<?php
$phrase="Notre formaton DL commence aujourd'hui";
$lastword="aujourd'hui";
$newword="demain";
$newphrase=str_replace($lastword,$newword,$phrase);

echo  $phrase."<br>" ;
echo  $newphrase;
