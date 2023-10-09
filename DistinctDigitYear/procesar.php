<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se ha enviado el formulario

    // Capturar el valor del campo new-year-input
    $newYear = $_POST["new-year-input"];

    // Realizar cualquier procesamiento que necesites con $newYear aquí
    // Por ejemplo, validar si cumple con las reglas dadas
    if ($newYear >= 1000 && $newYear < 9000) {


        $newOrden = $newYear;
        
        do {
            $newYear += 1;
            $newYearStr = (string)$newYear;
            $arrayUnique = array_unique(str_split($newYearStr));
        } while (count($arrayUnique) != 4);

        $newAny = implode('', $arrayUnique);

        echo "The minimum year number that is strictly larger than the input number $newOrden and all its digits are distinct is:
        $newAny<br>";
        echo '<br><a href="index.html">Go back</a>';

    } else {
        // El año no cumple con las reglas
        echo "El año ingresado no cumple con las reglas.";
        echo '<br><a href="index.html">Go back</a>';
    }
}




?>