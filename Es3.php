<!DOCTYPE html>
<html lang="en">
<head>
    <title>Stringa</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            font-family: monospace;
            display: flex;
            width: 70%;
            gap: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
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
        echo $stringB . "<br>";
        for ($i = 0; $i < $length - 1; $i++) {
            $stringB = preg_replace('/\*/', '&nbsp;' , $stringB, 1);
            echo $stringB . "<br>";
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
        echo "</div>"
        ?>
    </div>
    <p><i>
        Il seguente codice HTML utilizza PHP per eseguire diverse manipolazioni su una stringa di asterischi: <br>
        (a) Una stringa di asterischi viene costruita progressivamente, aggiungendo un carattere per ogni iterazione di un ciclo, fino a raggiungere una lunghezza di 10 caratteri. <br>
        (b) La stringa costruita viene poi ridotta progressivamente, rimuovendo un asterisco per volta da destra. <br>
        (c) Gli asterischi della stringa originale vengono sostituiti uno alla volta con spazi non interruppi (&nbsp;), partendo da sinistra verso destra. <br>
        (d) Infine, gli spazi non interruppi vengono riconvertiti progressivamente in asterischi, partendo da destra verso sinistra. <br>
        Queste operazioni vengono visualizzate in modo sequenziale, mostrando i passaggi intermedi per ciascuna trasformazione.
    </i></p>
    <button> <a href="index.html"> Home </a> </button>
    <footer>
        <p>Questa pagina dimostra manipolazioni avanzate su stringhe di asterischi utilizzando PHP.</p>
        <p>File corrente: <strong>Es3.php</strong></p>
    </footer>
</body>
</html>