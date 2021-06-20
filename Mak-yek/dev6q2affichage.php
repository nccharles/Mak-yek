<?php
function creerRangee($i)
{
    for ($j = 0; $j < 8; $j++) {
        $Piece = $i == 0 || $i == 2 ? "&#9922;" : ($i == 5 || $i == 7 ? "&#9920;" : "");
        if (($j + $i) % 2 != 0) {
            echo '<td class="noir">' . $Piece . '</td>';
        } else {
            echo '<td class="blanc">' . $Piece . '</td>';
        }
    }
}
for ($i = 0; $i < 8; $i++) {
    $ligne = creerRangee($i);
    echo '<tr>' . $ligne . '</tr>';
}
