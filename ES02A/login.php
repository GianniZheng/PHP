
<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo "<h1> Controllo credenziali <br> <br>";
        $username = $_POST["nomeutente"];
        $password = $_POST["password"];

        if ($username === "admin" && $password === "password") {
            echo "<h2 style=\"color:green;\">Benvenuto " . $username . " nell'area riservata del sito!";
        }else {
            echo "<h2 style=\"color:red;\">Attenzione! Nome utente o password sbagliate. <br> Accesso negato!";
        }
    }
    echo "<br> <br> <button> <a href=\"index.html\" style=\"text-decoration: none;\"> Home </a> </button>";
?>