<?php

$tableau[0] = array('Avatar'=>'woman.png', 'Couleur'=>'red', 'Nom'=>'Alice');
$tableau[1] = array('Avatar'=>'man.png', 'Couleur'=>'yellow', 'Nom'=>'Bob');
$tableau[2] = array('Avatar'=>'hacker.png', 'Couleur'=>'purple', 'Nom'=>'Eve');
$tableau[3] = array('Avatar'=>'man.png', 'Couleur'=>'orange', 'Nom'=>'Carlos');

foreach($tableau as $ligne) {
    echo '<div class="joueur" style="background-color:' . $ligne['Couleur'] . ';">';
    echo '<img src="' . $ligne['Avatar'] . '" alt="avatar" />';
    echo '<div class="centered">' . $ligne['Nom'] . '</div>'; // nom n'a pas été défini remplacé par Nom
    echo '</div>';
}
?>