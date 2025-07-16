<?php
function operar($num1, $num2, $operacion) {
    if ($operacion == "Suma") {
        $result = $num1 + $num2;
    }

    return $result;
}

echo operar(10, 15, "Suma");

?>