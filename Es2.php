<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es2</title>
</head>
<body>
    <?php
    $string = "<h2>";
    $hour = date("G");
    if ($hour >= 8 && $hour < 12){
        $string = $string . "Buongiorno ";
    } elseif ($hour >= 12 && $hour < 20) {
        $string = $string . "Buonasera ";
    } elseif ($hour >= 20 || $hour < 8) {
        $string = $string . "Buonanotte ";
    }
    $string = $string . "Paolo, benvenuta nella mia prima pagina PHP </h2>";
    echo $string
    ?>
    <p><i>
        Il seguente codice HTML utilizza PHP per generare dinamicamente un messaggio di saluto basato sull'ora corrente. <br>
        Il saluto cambia in funzione della fascia oraria: tra le 8:00 e le 12:00 viene mostrato "Buongiorno", tra le 12:00 e le 20:00 "Buonasera", mentre tra le 20:00 e le 8:00 "Buonanotte". <br>
        Il messaggio risultante, personalizzato per l'utente "Paolo", viene poi completato con il testo "benvenuta nella mia prima pagina PHP" e visualizzato sulla pagina. <br>
    </i></p>
    <button> <a href="index.html" style="text-decoration: none;"> Home </a> </button>
</body>
</html>