<?php
include "carre.php";
include "triangle.php";
include "losange.php";
include "tableau.php";

foreach ($array as $a) {
if ($a["forme"]== "carre") {
    echo dessin_carre($a["hauteur"]);
}
elseif ($a["forme"]== "triangle") {
    echo dessin_triangle($a["hauteur"]);
}
elseif ($a["forme"]== "losange") {
    echo dessin_losange($a["hauteur"]);
}
else {
echo("\n");
echo 'Forme impossible a faire';
echo("\n");
}
}
?>
