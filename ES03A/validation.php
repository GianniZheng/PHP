<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<!DOCTYPE html>";
    echo "<html lang='it'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Riepilogo Dati</title>";
    echo "<link rel='stylesheet' href='../style.css'>";
    echo "<style>
    .validation-container {
        width: 25%;
        padding: 10px;
        background: #ffc98c;
        border: 2px solid black;
        border-radius: 5px;
    }

    .validation-container li {
        font-size: 18px;
        margin: 10px;
    }
    </style>";
    echo "</head>";
    echo "<body>";

    echo "<h2>Riepilogo dei dati inviati</h2>";

    // Recupera e sanifica i dati
    $name = htmlspecialchars(trim($_POST["name"] ?? ''));
    $surname = htmlspecialchars(trim($_POST['surname'] ?? ''));
    $birthdate = htmlspecialchars(trim($_POST['birthdate'] ?? ''));
    $fiscalCode = htmlspecialchars(trim($_POST['fiscal-code'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phoneNumber = htmlspecialchars(trim($_POST['phone-number'] ?? ''));
    $street = htmlspecialchars(trim($_POST['street'] ?? ''));
    $cap = htmlspecialchars(trim($_POST['cap'] ?? ''));
    $city = htmlspecialchars(trim($_POST['city'] ?? ''));
    $province = htmlspecialchars(trim($_POST['province'] ?? ''));
    $username = htmlspecialchars(trim($_POST['nomeutente'] ?? ''));
    $password = htmlspecialchars(trim($_POST['password'] ?? ''));

    // Array per errori
    $errors = [];

    // Validazioni
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'email fornita non è valida.";
    }
    if ($name === $username || $surname === $username) {
        $errors[] = "Lo username deve essere diverso dal nome e cognome.";
    }

    // Mostra errori o dati
    if (!empty($errors)) {
        echo "<h3>Si sono verificati i seguenti errori:</h3><ul>";
        foreach ($errors as $error) {
            echo "<li style='color:red;'>$error</li>";
        }
        echo "</ul>";
    } else {
        echo "<div class='validation-container'> ";
        echo "<ul>";
        echo "<li><b>Nome:</b> $name</li>";
        echo "<li><b>Cognome:</b> $surname</li>";
        echo "<li><b>Data di nascita:</b> $birthdate</li>";
        echo "<li><b>Codice fiscale:</b> $fiscalCode</li>";
        echo "<li><b>Email:</b> $email</li>";
        echo "<li><b>Numero di telefono:</b> $phoneNumber</li>";
        echo "<li><b>Via/Piazza:</b> $street</li>";
        echo "<li><b>CAP:</b> $cap</li>";
        echo "<li><b>Comune:</b> $city</li>";
        echo "<li><b>Provincia:</b> $province</li>";
        echo "<li><b>Username:</b> $username</li>";
        if (empty($password)) {
            echo "<li><b>Password:</b> $password </li>";
        } else {
            echo "<li><b>Password:</b> ******** (non visibile per motivi di sicurezza)</li>";
        }
        echo "</ul>";
        echo "</div>";
    }

    echo "<br><button><a href='index.html'>Home</a></button>";

    echo "</body>";
    echo "</html>";
} else {
    echo "<p><b>Nessun dato inviato.</b></p>";
}
?>
