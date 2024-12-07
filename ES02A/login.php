<?php
    // Variabili per il signup
    $signUsername = "";
    $signPassword = "";

    // Ricevi i dati dal form
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // I dati per il login
        $username = $_POST["nomeutente"];
        $password = $_POST["password"];

        // I dati di registrazione (per il confronto con i dati predefiniti)
        if (isset($_POST["sign-username"])) {
            $signUsername = $_POST["sign-username"];
        }
        if (isset($_POST["sign-password"])) {
            $signPassword = $_POST["sign-password"];
        }

        // Controllo credenziali
        echo "<h1>Controllo credenziali</h1><br>";
        if ($username === $signUsername && $password === $signPassword) {
            echo "<h2 style='color:green;'>Benvenuto " . $username . " nell'area riservata del sito! </h2>";
        } else {
            echo "<h2 style='color:red;'>Attenzione! Nome utente o password sbagliati. <br> Accesso negato! </h2>";
        }
    }

    echo "<br> <button> <a href='index.html' style='text-decoration: none;'> Home </a> </button>";
?>
