<?php
// Verifica se il form di login è stato inviato
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["nomeutente"]) && isset($_POST["password"])) {
    // Ottieni i dati dal modulo di login
    $username = $_POST["nomeutente"];
    $password = $_POST["password"];

    // Verifica se i dati di registrazione sono stati passati tramite input nascosti
    $signupUsername =  isset($_POST['sign-username']) ? $_POST['sign-username'] : '';
    $signupPassword =  isset($_POST['sign-password']) ? $_POST['sign-password'] : '';

    // Verifica le credenziali di login con i dati di registrazione
    if ($username === $signupUsername && $password === $signupPassword) {
        echo "<h2 style='color:green;'>Benvenuto " . htmlspecialchars($username) . " nell'area riservata!</h2>";
    } else {
        echo "<h2 style='color:red;'>Attenzione! Nome utente o password errati.</h2>";
    }
    echo "<br><button><a href='index.html'>Home</a></button>";
}
?>
