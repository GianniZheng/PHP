
<body>
    <h1 style="font-family: 'Righteous', sans-serif;">Inserimento dati Articoli</h1>

    <?php
        // Connessione al database (modifica con i tuoi dati)
        $servername = "localhost";
        $username = "Zheng";
        $password = "Zheng3110--";     
        $dbname = "library_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica la connessione
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Variabili per gestire l'inserimento
        $id_articolo = $data_pubblicazione = $prezzo = $descrizione = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recupera i dati inviati tramite POST
            $id_articolo = $_POST['ID_Articolo'];
            $data_pubblicazione = $_POST['Data_pubblicazione'];
            $prezzo = $_POST['Prezzo'];
            $descrizione = $_POST['Descrizione'];

            // Query SQL per inserire i dati nella tabella
            $sql = "INSERT INTO  articolo (ID_Articolo, Data_pubblicazione, Prezzo, Descrizione)
                    VALUES ('$id_articolo', '$data_pubblicazione', '$prezzo', '$descrizione')";

            // Esegui la query
            if ($conn->query($sql) === TRUE) {
                echo "Nuovo Articolo inserito con successo!";
            } else {
                echo "Errore: " . $sql . "<br>" . $conn->error;
            }
        }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inserisci Articolo</title>
</head>
<body>
    <h2 style="font-family: 'Righteous', sans-serif;">Inserisci un nuovo Articolo</h2>
    <!-- Modulo per inserire i dati -->
    <form method="POST" action="">
        <label for="ID_Articolo">ID Articolo:</label>
        <input type="number" id="ID_Articolo" name="ID_Articolo" required><br><br>

        <label for="Data_pubblicazione">Data di pubblicazione:</label>
        <input type="date" id="Data_pubblicazione" name="Data_pubblicazione" required><br><br>

        <label for="Prezzo">Prezzo:</label>
        <input type="number" id="Prezzo" name="Prezzo" step="0.01" required><br><br>

        <label for="Descrizione">Descrizione:</label><br><br>
        <textarea id="Descrizione" name="Descrizione" required></textarea><br><br>

        <input type="submit" value="Inserisci Articolo">
    </form>
    <p><i>
        Questo codice HTML e PHP consente di inserire nuovi articoli in un database MySQL.<br> 
        Dopo aver stabilito una connessione con il database utilizzando le credenziali configurate, il codice verifica lo stato della connessione, mostrando un messaggio di successo o di errore.<br>
        Un modulo permette agli utenti di inserire i dettagli degli articoli, tra cui ID, data di pubblicazione, prezzo e descrizione.<br>
        I dati vengono inviati tramite POST e, successivamente, memorizzati nella tabella degli articoli grazie a una query SQL di inserimento.<br>
        In caso di successo, viene mostrato un messaggio che conferma l'inserimento; altrimenti, viene visualizzato un messaggio di errore.
    </i></p>
    <button><a href="Libreria.php">Home</a></button>

    <footer>
        <p>Questa pagina permette di inserire nuovi articoli nel database tramite un modulo interattivo.</p>
        <p>File corrente: <strong>insert_data.php</strong></p>
    </footer>

</body>
</html>