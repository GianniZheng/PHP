<!DOCTYPE html>
<html lang="it">
<head>
    <title>Esercizio SQL e PHP</title>
    <link rel="stylesheet" href="../style.css">
    
    <?php
        $host = "localhost";
        $username = "Zheng";
        $password = "Zheng3110--";
        $db_name = "departement_db";

        $conn = new mysqli($host, $username, $password, $db_name);

        if ($conn->connect_error) {
            die ("Connesione al database fallità: " . $conn->connect_error);
        } else {
            echo "<p style='color: green;'>Connessione al database avvenuta con successo!</p>";
        }
    ?>
</head>
<body>
    <h1>Quaderno Informatico 2024-2025</h1>
    <h2>SQL</h2>
    <p class="intro">
      Benvenuti nella parte SQL del mio quaderno informatico!<br>
      In questa sezione troverete tutti gli esercizi svolti in relazione con SQL.    
    </p>
    <ul>
        <li> <a href="Libreria.php"> Libreria SQL</a></li>
        <li> <a href="esercizioSQL.php"> Esercizio SQL</a></li>
    </ul>
    <button> <a href="../index.html"> Home </a> </button>
    <footer>
        <p>Questo e' la parte di SQL del quaderno informatico in cui vengono svolti diversi esercizi su SQL riguardo alla getione e controllo del database.</p>
        <p>File corrente: <strong>SQL/index.html</strong></p>
    </footer>
</body>
</html>