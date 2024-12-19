<!DOCTYPE html>
<html lang="it">
<head>
    <title>Validitazione dei dati</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .validation-container {
            width: 25%;
            padding: 10px;
            background: #ffc98c;
            border: 2px solid black;
            border-radius: 5px;
            font-size: 18px;
        }

        .validation-container input{
            width: 50%;
        }
    </style>
</head>
<body>
    <form action="validation.php" method="post" class="validation-container">
        <label for="name"><b>Nome</b></label>
        <input type="text" id="name" name="name" pattern="[A-Za-z\s]+" placeholder="Inserisci il tuo nome" required><br><br>
        <label for="surname"><b>Cognome</b></label>
        <input type="text" id="surname" name="surname" pattern="[A-Za-z\s']+" placeholder="Inserisci il tuo cognome" required><br><br>
        <label for="birthdate"><b>Data di nascita'</b></label>
        <input type="date" id="birthdate" name="birthdate" required><br><br>
        <label for="fiscal-code"><b>Codice fiscale</b></label>
        <input type="text" id="fiscal-code" name="fiscal-code" pattern="[A-Z0-9]{16}" maxLength="16" placeholder="Inserisci il tuo codice fiscale"><br><br>
        <label for="email"><b>Email</b></label>
        <input type="text" id="email" name="email" placeholder="Inserisci la tua email" required><br><br>
        <label for="phone-number"><b>Numero di telefono</b></label>
        <input type="tel" id="phone-number" name="phone-number" pattern="^(\+39)?[0-9]{10}$"><br><br>
        <label for="street"><b>Via/Piazza</b></label>
        <input type="text" id="street" name="street" placeholder="Inserisci via o piazza" required><br><br>
        <label for="cap"><b>Cap</b></label>
        <input type="text" id="cap" name="cap" pattern="^\d{5}$" placeholder="Inserisci il CAP" required><br><br>
        <label for="city"><b>Comune</b></label>
        <input type="text" id="city" name="city" placeholder="Inserisci il comune" required><br><br>
        <label for="province"><b>Provincia</b></label>
        <input type="text" id="province" name="province" placeholder="Inserisci la provincia" required><br><br>
        <label for="username"><b>Username</b></label>
        <input type="text" id="username" name="username" pattern="^(?!.*\b(name|surname)\b)[A-Za-z0-9]+$"  placeholder="Inserisci il nome utente"><br><br>
        <label for="password"><b>Password</b></label>
        <input type="password" id="password" name="password" pattern="^(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$" placeholder="Inserisci la password"><br><br>
        <input name="submit" type="submit" value="Invia" />
    </form>
    <p><i>
        Il seguente codice HTML con integrazione PHP implementa una pagina di validazione dei dati per un modulo di registrazione.<br>
        Quando l'utente invia il modulo, i dati vengono elaborati tramite il metodo POST.<br>
        Ogni campo del modulo è soggetto a validazione tramite espressioni regolari per garantire che il formato dei dati sia corretto.<br>
        In caso di errore, il modulo non verrà inviato e verranno visualizzati i messaggi di errore per i campi non validi.<br>
        La pagina include anche una formattazione personalizzata tramite CSS per migliorare l'aspetto della pagina.
    </i></p> 
    <button> <a href="index.html"> Home </a> </button>
    <footer>
        <p>Questa pagina consente la validazione dei dati inseriti in un modulo di registrazione utilizzando PHP e espressioni regolari.</p>
        <p>File corrente: <strong>Es7.php</strong>| File correlati: <strong>validation.php</strong></p>
    </footer>
</body>
</html>