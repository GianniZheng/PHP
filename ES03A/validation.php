<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<h2>Riepilogo dei dati inviati</h2>";
        // Recupera i dati inviati tramite POST e verifica che non siano vuoti
        $name = !empty($_POST["name"]) ? htmlspecialchars($_POST["name"]) : 'N/A';
        $surname = !empty($_POST['surname']) ? htmlspecialchars($_POST['surname']) : 'N/A';
        $birthdate = !empty($_POST['birthdate']) ? htmlspecialchars($_POST['birthdate']) : 'N/A';
        $fiscalCode = !empty($_POST['fiscal-code']) ? htmlspecialchars($_POST['fiscal-code']) : 'N/A';
        $email = !empty($_POST['email']) ? htmlspecialchars($_POST['email']) : 'N/A';
        $phoneNumber = !empty($_POST['phone-number']) ? htmlspecialchars($_POST['phone-number']) : 'N/A';
        $address = !empty($_POST['andress']) ? htmlspecialchars($_POST['andress']) : 'N/A';
        $street = !empty($_POST['street']) ? htmlspecialchars($_POST['street']) : 'N/A';
        $cap = !empty($_POST['cap']) ? htmlspecialchars($_POST['cap']) : 'N/A';
        $city = !empty($_POST['city']) ? htmlspecialchars($_POST['city']) : 'N/A';
        $province = !empty($_POST['province']) ? htmlspecialchars($_POST['province']) : 'N/A';
        $username = !empty($_POST['nomeutente']) ? htmlspecialchars($_POST['nomeutente']) : 'N/A';
        $password = !empty($_POST['password']) ? htmlspecialchars($_POST['password']) : 'N/A';

        // Mostra i dati inviati
        echo "<ul>";
        echo "<li><b>Nome:</b> $name</li>";
        echo "<li><b>Cognome:</b> $surname</li>";
        echo "<li><b>Data di nascita:</b> $birthdate</li>";
        echo "<li><b>Codice fiscale:</b> $fiscalCode</li>";
        echo "<li><b>Email:</b> $email</li>";
        echo "<li><b>Numero di telefono:</b> $phoneNumber</li>";
        echo "<li><b>Indirizzo:</b> $address</li>";
        echo "<li><b>Via/Piazza:</b> $street</li>";
        echo "<li><b>CAP:</b> $cap</li>";
        echo "<li><b>Comune:</b> $city</li>";
        echo "<li><b>Provincia:</b> $province</li>";
        echo "<li><b>Username:</b> $username</li>";
        if ($password === 'N/A') {
            echo "<li><b>Password:</b> $password </li>";
        }else  {
            echo "<li><b>Password:</b> ******** (non visibile per motivi di sicurezza)</li>";
        }
        echo "</ul>";
    } else {
        echo "<p><b>Nessun dato inviato.</b></p>";
    }
?>