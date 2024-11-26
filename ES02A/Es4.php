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
  <form action="login.php" method="post">
    <label for="username" ><b>Username</b></label>
    <input type="text" id="nomeutente" name="nomeutente" placeholder="Inserisci il nome utente" /><br />
    <br>
    <label for="password"><b>Password</b></label>
    <input type="password" id="password" name="password" placeholder="Inserisci la password" /><br />
    <br>
    <input name="submit" type="submit" value="Invia" />
    <br>
  </form>
  <p><i>
    Il seguente codice HTML con integrazione PHP implementa una semplice pagina di login per accedere a un'area riservata. <br>
    Quando l'utente invia il modulo, i dati vengono elaborati tramite il metodo POST. <br>
    Il server verifica le credenziali confrontando il nome utente e la password con valori predefiniti: "admin" per il nome utente e "password" per la password. <br>
    Se le credenziali sono corrette, viene mostrato un messaggio di benvenuto per l'amministratore e l'accesso e' consentito. <br>
    Altrimenti, viene visualizzato un messaggio di errore che informa che l'accesso e' negato a causa di credenziali sbagliate. <br>
    La pagina include anche un modulo HTML con campi per il nome utente e la password, un pulsante per inviare i dati e uno stile minimale.
  </i></p>   
  <button> <a href="index.html"> Home </a> </button>
  <footer>
    <p>Questa pagina consente l'accesso a un'area riservata tramite un sistema di login basato su PHP.</p>
    <p>File corrente: <strong>ES02A/Es4.php</strong>| File corellati: <strong> login.php</strong></p>
  </footer>
</body>
</html>