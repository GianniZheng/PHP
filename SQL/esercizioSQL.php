<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Esercizio SQL</title>
</head>
<body>
    <h1>Esercizio SQL</h1>

    <?php
        $host = "localhost";
        $username = "Zheng";
        $password = "Zheng3110--";
        $dbname = "library_db";
        
        $conn = new mysqli($host, $username, $password, $dbname);

        if ($conn->connect_error) {
            echo "<p style='color: red;'>Connessione fallita: " . $conn->connect_error . "</p>";
        } else {
            echo "<p style='color: green;'>Connessione al database avvenuta con successo!</p>";
        }
    ?>
    <p> <strong> Obiettivo :  </strong> realizzare una "SELECT" di una delle tabella, basandosi su una traccia e stamparne il risultato. </p>
    <p> <strong> Traccia :  </strong> Si vuole ottenere un elenco dei numeri d'ordine relativi agli articoli che hanno un prezzo inferiore o uguale a 50 euro. </p>
    
    <form method="POST" action="">
        <input type="submit" value="Visualizza">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            $request = "SELECT `N° Ordine` FROM `Ordine-Articolo`
                        JOIN `Articolo` ON  `Ordine-Articolo`.`ID_Articolo` = `Articolo`.`ID_Articolo`
                        WHERE `prezzo` <= 50;";

            echo "<h2>Tabella dei  N°Ordini degli articoli con un prezzo inferiore a 50</h2>";
            if ($result = $conn->query($request)){
                echo "<table border='1'><tr><th> N° Ordine </th></tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['N° Ordine'] . "</td></tr>" ;
                }
            }else {
                echo "Errore: " . $request . "<br>" . $conn->error;
            }
            echo "</table>";
        }
    ?>
    <br>
    <p><i> 
        Questo codice HTML e PHP crea una pagina web per interrogare un database MySQL e ottenere un elenco di numeri d'ordine relativi agli articoli con un prezzo pari o inferiore a 50 euro.<br>  
        Dopo aver configurato la connessione al database, la pagina verifica lo stato della connessione, mostrando un messaggio di successo o errore.<br>  
        Un form consente di eseguire dinamicamente una query SQL che estrae e visualizza i dati richiesti in una tabella HTML.<br>  
        Ogni volta che l'utente preme il pulsante, la query viene eseguita e i risultati vengono aggiornati.
    </i></p>

    <button><a href="index.html">Home</a></button>

    <footer> 
        <p>Questa pagina consente di interrogare un database MySQL per ottenere informazioni sugli ordini e gli articoli.</p>  
        <p>File corrente: <strong>esercizioSQL.php</strong></p>  
    </footer>
</body>
</html>