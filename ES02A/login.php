<?php
    session_start(); // Avvia la sessione

    // Verifica se è stato inviato il form di registrazione o login
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Verifica se il form di registrazione è stato inviato
        if (isset($_POST["sign-username"]) && isset($_POST["sign-password"])) {
            // Memorizza le credenziali nella sessione
            $_SESSION['signUsername'] = $_POST["sign-username"];
            $_SESSION['signPassword'] = $_POST["sign-password"];
            echo "<h2>Registrazione completata! Ora puoi accedere.</h2>";
        }

        // Verifica se il form di login è stato inviato
        if (isset($_POST["nomeutente"]) && isset($_POST["password"])) {
            $username = $_POST["nomeutente"];
            $password = $_POST["password"];
            
            // Verifica credenziali dalla sessione
            if (isset($_SESSION['signUsername']) && isset($_SESSION['signPassword'])) {
                if ($username === $_SESSION['signUsername'] && $password === $_SESSION['signPassword']) {
                    echo "<h2 style= 'color:green;'>Benvenuto " . htmlspecialchars($username) . " nell'area riservata del sito! </h2>";
                } else {
                    echo "<h2 style= 'color:red;'>Attenzione! Nome utente o password sbagliati. <br> Accesso negato! </h2>";
                }
            } else {
                echo "<h2 style= 'color:red;'>Non ci sono utenti registrati! Registrati prima di accedere.</h2>";
            }
        }
    }
    echo "<br> <button> <a href='index.html' style='text-decoration: none;'> Home </a> </button>";

?>