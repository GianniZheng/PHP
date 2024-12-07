<!DOCTYPE html>
<html lang="it">
<head>
  <title>Pagina di login</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["sign-username"]) && isset($_POST["sign-password"])) {
  ?>
    <h3>Accesso a pagina riservata</h3>
    <form action="" method="post">
      <label for="nomeutente" ><b>Username</b></label>
      <input type="text" id="nomeutente" name="nomeutente" placeholder="Inserisci il nome utente" /><br />
      <br>
      <label for="password"><b>Password</b></label>
      <input type="password" id="password" name="password" placeholder="Inserisci la password" /><br />
      <br>
      <input name="submit" type="submit" value="Invia" />
      <br>
    </form>
  <?php
  } elseif (!isset($_POST["nomeutente"])) {
  ?>
    <h3>Accesso a pagina riservata</h3>
    <h2>Sign up</h2>
    <form action="" method="post">
      <label for="sign-username" ><b>Nome utente</b></label>
      <input type="text" id="sign-username" name="sign-username" placeholder="Inserisci il nome utente" /><br />
      <br>
      <label for="sign-password"><b>Password</b></label>
      <input type="password" id="sign-password" name="sign-password" placeholder="Inserisci la password" /><br />
      <br>
      <input name="submit" type="submit" value="Invia" />
      <br>
    </form>
  <?php
  }
  ?>
  <?php
    $signUsername = "";
    $signPassword = "";
    $username = "";
    $password = "";
    
    // Verifica se è stato inviato il form di registrazione o login
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Verifica se il form di registrazione è stato inviato
        if (isset($_POST["sign-username"]) && isset($_POST["sign-password"])) {
            $signUsername = $_POST["sign-username"];
            $signPassword = $_POST["sign-password"];
            echo "<h2>Registrazione completata! Ora puoi accedere.</h2>";
        }
        
        // Verifica se il form di login è stato inviato
        if (isset($_POST["nomeutente"]) && isset($_POST["password"])) {
            $username = $_POST["nomeutente"];
            $password = $_POST["password"];
            
            // Verifica credenziali
            echo "<h1>Controllo credenziali</h1><br>";
            if ($username === $signUsername && $password === $signPassword) {
                echo "<h2 style='color:green;'>Benvenuto " . $username . " nell'area riservata del sito! </h2>";
            } else {
                echo "<h2 style='color:red;'>Attenzione! Nome utente o password sbagliati. <br> Accesso negato! </h2>";
            }
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