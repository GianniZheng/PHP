<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es3</title>
    <style>
    body {
        font-family: monospace;
        gap: 100px;
        display:flex; 
    }
    
    </style>
</head>
<body>
    <?php
    $stringA = ""; // Stringa inizialmente vuota
    $stringB = ""; // Stringa inizialmente vuota
    $length = 10;  // Lunghezza della stringa di asterischi
    echo "<div><p>(a)</p>";
    
    // Ciclo per aggiungere asterischi a $stringA
    for ($i = 0; $i < $length; $i++) {
        $stringA = $stringA . "*"; // Aggiungi un asterisco alla stringa
        echo $stringA . "<br>";
    }

    // Copia $stringA in $stringB
    $stringB = $stringA; 
    echo "</div><div><p>(b)</p>";
    
    // Ciclo per rimuovere un asterisco alla volta da $stringA
    for ($i = $length; $i > 0; $i--) {
        echo $stringA . "<br>";
        $stringA = substr($stringA, 0, -1); // Rimuove l'ultimo carattere
    }

    echo "</div><div><p>(c)</p>";
    
    // Ciclo per sostituire un asterisco con uno spazio alla volta in $stringB
    for ($i = 0; $i < $length; $i++) {
        echo $stringB . "<br>";
        $stringB = preg_replace('/\*/', '&nbsp;' , $stringB, 1);
    }
    
    echo "</div><div><p>(d)</p>";
    
    // Ciclo per sostituire un asterisco con uno spazio alla volta in $stringB
    for ($i = $length; $i > 0; $i--) {
        echo $stringB . "<br>";
        // Trova la posizione dell'ultimo "*" nella stringa
        $pos = strrpos($stringB, '&nbsp;');

        if ($pos !== false) {
            // Sostituisci l'ultimo "*" con "&nbsp;"
            $stringB = substr_replace($stringB, '*', $pos, 6);
        }
    }
    
    ?>
    <br>
    <button> <a href="index.html" style="text-decoration: none; "> Home </a> </button>
</body>
</html>