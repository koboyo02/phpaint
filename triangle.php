<?php
function dessin_triangle(int $taille)
{
    $i=1;
    $y=$taille-1;
    while ($taille > 0) {
        while ($y>0) {
            echo(" ");
            $y--;
        }
        while ($y<$i) {
            echo("*");
            $y++;
        }
        echo("\n");
        $taille--;
        $i+=2;
        $y=$taille-1;
    }
}
?>