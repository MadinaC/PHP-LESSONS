<h1>exercice4</h1>
<p> "Engage le jeu que je le gagne"<br>
Ecrire un algorithme permettant de savoir si une phrase est palindrome.
</p>

<h2>Rèsultat</h2>

<?php
$search = " ";
$replace = ""; 
$phrase="Engage le jeu que je le gagne";
$outphrase= str_replace($search, $replace, $phrase); 
$lowercase= strtolower($outphrase);
$palind=strrev ($lowercase);
if ($palind==$lowercase){
    echo "La phrase $phrase est palindrome";
}else
{
echo "la phrase $phrasen n'est pas palindrome";
}
