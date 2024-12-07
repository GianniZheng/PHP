<!DOCTYPE html>
<html lang="it">
<head>
    <title>Tabella pitagorica</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        th, td {
            padding: 8px;
            border: 1px solid #000;
        }

        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>&times;</th>
                <?php
                // Crea l'intestazione della prima riga con i numeri da 1 a 10
                for ($i = 1; $i <= 10; $i++) {
                    echo "<th>$i</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // Genera le righe della tabella
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                // Crea la prima cella di ogni riga (intestazione di riga)
                echo "<th>$i</th>";

                // Genera le celle con i prodotti
                for ($j = 1; $j <= 10; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <br>
    <p><i>
        Il seguente codice HTML genera una tabella pitagorica utilizzando PHP per calcolare e popolare dinamicamente i valori. <br>
        La tabella, stilizzata tramite CSS, presenta un layout centrato con bordi e uno sfondo grigio chiaro per l'intestazione. <br>
        Ogni riga e colonna è numerata da 1 a 10, con i valori calcolati come il prodotto dei rispettivi numeri. <br>
    </i></p>
    <button> <a href="index.html"> Home </a> </button>
    <footer>
        <p>Questa pagina mostra una tabella pitagorica generata dinamicamente con PHP.</p>
        <p>File corrente: <strong>Es1.php</strong></p>
    </footer>
</body>
</html>
