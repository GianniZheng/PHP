<!DOCTYPE html>
<html lang="it">
<head>
    <title>Genera Tabella</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
        // Recupero del numero inserito dall'utente
        $n = intval($_POST["numero"]);

        // Validazione del numero
        if ($n >= 1 && $n <= 10) {
            echo "<h3 style='text-align: center;'>Tabella per i numeri da 1 a $n</h3>";
            echo "<table>";
            echo "<tr><th>Numero</th><th>Quadrato</th><th>Cubo</th></tr>";

            // Generazione della tabella
            for ($i = 1; $i <= $n; $i++) {
                $quadrato = $i * $i;
                $cubo = $i * $i * $i;
                echo "<tr><td>$i</td><td>$quadrato</td><td>$cubo</td></tr>";
            }

            echo "</table>";
        } else {
            echo "<p style='text-align: center;' class='wrong'>Errore: il numero deve essere compreso tra 1 e 10.</p>";
        }
    } else {
        // Visualizzazione del form
        ?>
        <form action="" method="post">
            <label for="numero">Seleziona un numero:</label>
            <select name="numero" id="numero" required>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
            <button type="submit" style="width: 100px;">Crea tabella</button>
        </form>
        <?php
    }
    ?>
    <button> <a href="index.html"> Home </a> </button>
    <footer>
        <p>In questa pagina è possibile generare dinamicamente una tabella con numeri, quadrati e cubi, in base alla selezione effettuata dall'utente.</p>
        <p>File corrente: <strong>ES02A/Es6.php</strong></p>
    </footer>
</body>
</html>