<?php
$shopProducts = [];
try {
    array_push(
        $shopProducts,
        $RoyalCanin,
        $Eukanuba,
        $Felix,
        $Sheba,
        $Kong,
        $Rugby,
        $Fish,
        $Mouse,
        $Matilda,
        $Ferplast,
        $Domus,
        $Glait,
        $Doccino,
        $Salviette,
        $Pettine,
        $Pala
    );
} catch (Exception $e) {
    echo $e->getMessage();
}
