<h1>Exercice6</h1>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<h2>Resultat</h2>

<?php
$nbrearticle=5;
$priceht=9.99;
$tva=0.2;
$pricettc=($priceht+($priceht*$tva));
$total=$nbrearticle*$pricettc;
echo   "Prix unitaire de l’article : $pricettc €<br>
Quantité : $nbrearticle <br>
TVA:$tva <br>
Le montant de la facture à régler est de :$total €";

