<!DOCTYPE html>
<html lang="it">
<head>
  <title>Pagina di login</title>
  <style>
    html, body {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    button {
        width: 60px;
    }

    a{
      text-decoration:none;
    }
    
    footer {
        margin-top: auto;
    }
</style>
</head>
<body>
  <h3>Accesso a pagina riservata</h3>
  <form action="" method="post">
    <label for="username" ><b>Username</b></label>
    <input type="text" id="nomeutente" name="nomeutente" placeholder="Inserisci il nome utente" /><br />
    <br>
    <label for="password"><b>Password</b></label>
    <input type="password" id="password" name="password" placeholder="Inserisci la password" /><br />
    <br>
    <input name="submit" type="submit" value="Invia" />
    <br>
  </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo "<h1> Controllo credenziali <br> <br>";
        $username = $_POST["nomeutente"];
        $password = $_POST["password"];

        if ($username === "admin" && $password === "password") {
            echo "<h2 style=\"color:green;\">Benvenuto " . $username . " nell'area riservata del sito! </h2>";
        }else {
            echo "<h2 style=\"color:red;\">Attenzione! Nome utente o password sbagliate. <br> Accesso negato! </h2>";
        }
    }
    ?>
  <p><i>
    Questo esercizio combina HTML e PHP nello stesso file per gestire un sistema di login semplice. <br>
    Quando l'utente invia il modulo, il server verifica le credenziali direttamente, mostrando un messaggio di benvenuto o un errore nella stessa pagina. <br>
    A differenza dell'esercizio precedente (Es4.php), il flusso è più compatto e immediato, con la verifica e la risposta integrate senza reindirizzamenti.
  </i></p>   
  <button> <a href="index.html"> Home </a> </button>
  <footer>
    <p>Questa pagina consente l'accesso a un'area riservata tramite un sistema di login basato su PHP.</p>
    <p>File corrente: <strong>ES02A/Es5.php</strong></p>
  </footer>
</body>
</html>