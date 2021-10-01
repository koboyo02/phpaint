<?php
function dessin_carre(int $taille)
{
    $i=0;
    $j=$taille;
    while ($j > 0) {
        while ($taille > 0) {
            echo("*");
            $taille--;
            $i++;
        }
        if ($taille==0) {
            $taille=$i;
            $i=0;
            $j--;
            echo("\n");
        }
    }
}
?>