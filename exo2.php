<h1>Exercice2</h1>
<p>Soit une phrase "Notre formation commence ajourd'hui".<br>
Ecire un  alogoritme permettant de compter le nombre de mots contenus.</p>

<h2>Rèsultat</h2>

<?php
$phrase="Notre formation commence ajourd'hui";
$nombredemots=str_word_count($phrase);
echo "La phrase $phrase contient ".str_word_count($phrase)."mots";
