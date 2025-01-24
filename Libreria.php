<html>
<head>
    <title>Esercizio SQL e PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 style="font-family: 'Righteous', sans-serif;">Gestione Articoli e Ordini</h1>

    <?php
        // Configurazione per la connessione al database
        $host = "localhost";        // Host del database (di solito 'localhost')
        $username = "Zheng";         // Nome utente del database
        $password = "Zheng3110--";             // Password del database
        $dbname = "library_db";  // Nome del database
    
        // Creazione della connessione
        $conn = new mysqli($host, $username, $password, $dbname);
    
        // Controllo della connessione
        if ($conn->connect_error) {
            // Mostra un messaggio di errore in caso di connessione fallita
            echo "<p style='color: red;'>Connessione fallita: " . $conn->connect_error . "</p>";
        } else {
            // Mostra un messaggio di successo in caso di connessione riuscita
            echo "<p style='color: green;'>Connessione al database avvenuta con successo!</p>";
        }
    
        // Chiusura della connessione
        //$conn->close();
        ?>

    <form action="Libreria.php" method="post">
        <input type="submit" name="view_cliente" value="Visualizza Clienti">
        <input type="submit" name="view_ordine" value="Visualizza Ordini">
        <input type="submit" name="view_articolo" value="Visualizza Articoli">
        <input type="submit" name="view_CD" value="Visualizza CD">
        <input type="submit" name="view_DVD" value="Visualizza DVD">
        <input type="submit" name="view_libro" value="Visualizza Libri">
    </form>

    <?php
        if (isset($_POST['view_cliente'])) {
            $result = $conn->query("SELECT * FROM Cliente");
            echo "<h2>Clienti</h2><table border='1'><tr><th>Codice fiscale</th><th>Nome</th><th>Cognome</th><th>Numero di telefono</th><th>Credito</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['Cod_fiscale'] . "</td><td>" . $row['Nome'] . "</td><td>" . $row['Cognome'] . "</td><td>" . $row['Num_Telefono'] . "</td><td>" . $row['Credito'] . "</td></tr>";
            }
        } elseif (isset($_POST['view_ordine'])) {
            $result = $conn->query("SELECT * FROM Ordine");
            echo "<h2>Ordini</h2><table border='1'><tr><th>N° Ordine</th><th>ID Articolo</th><th>Codice fiscale</th><th>Costo</th><th>Stato</th><th>Data/Ora di ricezione</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['N° Ordine'] . "</td><td>" . $row['ID_Articolo'] . "</td><td>" . $row['Cod_fiscale'] . "</td><td>" . $row['Costo'] . "</td><td>" . $row['Stato'] . "</td><td>" . $row['Data/Ora di ricezione'] . "</td></tr>";
            }
        } elseif (isset($_POST['view_articolo'])) {
            $result = $conn->query("SELECT * FROM Articolo");
            echo "<h2>Articoli</h2><table border='1'><tr><th>ID Articolo</th><th>Data di pubblicazione</th><th>Prezzo</th><th>Descrizione</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['ID_Articolo'] . "</td><td>" . $row['Data_pubblicazione'] . "</td><td>" . $row['Prezzo'] . "</td><td>" . $row['Descrizione'] . "</td></tr>";
            }
        } elseif (isset($_POST['view_CD'])) {
            $result = $conn->query("SELECT * FROM CD");
            echo "<h2>CD</h2><table border='1'><tr><th>ID CD</th><th>Titolo</th><th>Genere</th><th>Compositore</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['ID_CD'] . "</td><td>" . $row['Titolo'] . "</td><td>" . $row['Genere'] . "</td><td>" . $row['Compositore'] . "</td></tr>";
            }
        } elseif (isset($_POST['view_DVD'])) {
            $result = $conn->query("SELECT * FROM DVD");
            echo "<h2>DVD</h2><table border='1'><tr><th>ID DVD</th><th>Titolo</th><th>Genere</th><th>Regista</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['ID_DVD'] . "</td><td>" . $row['Titolo'] . "</td><td>" . $row['Genere'] . "</td><td>" . $row['Regista'] . "</td></tr>";
            }
        } elseif (isset($_POST['view_libro'])) {
            $result = $conn->query("SELECT * FROM Libro");
            echo "<h2>Libri</h2><table border='1'><tr><th>ID Libro</th><th>Titolo</th><th>Autore</th><th>Editore</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['ID_Libro'] . "</td><td>" . $row['Titolo'] . "</td><td>" . $row['Autore'] . "</td><td>" . $row['Editore'] . "</td></tr>";
            }
        } 
        echo "</table>";

        //$conn->close();
        ?>

    <p>Clicca sul link qui sotto per andare alla pagina di inserimento dati:</p>
    <a href="insert_data.php">Pagina di inserimento dati</a>

    <p><i> 
        Questo codice HTML e PHP crea una pagina web per la gestione di articoli e ordini connessi a un database.<br> 
        Dopo aver configurato la connessione al database, la pagina verifica lo stato della connessione, mostrando un messaggio di successo o errore.<br> 
        Un form con vari pulsanti consente di visualizzare dinamicamente i dati relativi a clienti, ordini, articoli, CD, DVD e libri.<br> 
        Ogni selezione genera una tabella HTML contenente i risultati estratti dal database tramite query SQL.<br> 
        Un link aggiuntivo indirizza alla pagina dedicata all'inserimento dei dati, offrendo una gestione completa e intuitiva delle informazioni.
    </i></p>
    <button><a href="index.html">Home</a></button>

    <footer> 
        <p>Questa pagina permette di gestire articoli e ordini tramite query SQL dinamiche su un database MySQL.</p> 
        <p>File corrente: <strong>Libreria.php</strong>| File corellati: <strong>insert_data.php</strong></p> 
    </footer>

</body>
</html>