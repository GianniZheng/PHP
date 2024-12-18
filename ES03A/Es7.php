<!DOCTYPE html>
<html lang="it">
<head>
    <title>Validitazione dei dati</title>
</head>
<body>
    <form action="validation.php" method="post">
        <label for="name"><b>Nome</b></label>
        <input type="text" id="name" name="name" pattern="[A-Za-z\s]+" placeholder="Inserisci il tuo nome" required><br><br>
        <label for="surname"><b>Cognome</b></label>
        <input type="text" id="surname" name="surname" pattern="[A-Za-z\s']+" placeholder="Inserisci il tuo cognome" required><br><br>
        <label for="birthdate"><b>Data di nascita'</b></label>
        <input type="date" id="birthdate" name="birthdate" required><br><br>
        <label for="fiscal-code"><b>Codice fiscale</b></label>
        <input type="text" id="fiscal-code" name="fiscal-code" pattern="[A-Z0-9]{16}" maxLength="16" placeholder="Inserisci il tuo codice fiscale"><br><br>
        <label for="email"><b>Email</b></label>
        <input type="email" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}" placeholder="Inserisci la tua email" required><br><br>
        <label for="phone-number"><b>Numero di telefono</b></label>
        <input type="tel" id="phone-number" name="phone-number" pattern="^(\+39)?[0-9]{10}$"><br><br>
        <label for="andress"><b>Indirizzo</b></label>
        <input type="text" id="andress" name="andress" placeholder="Inserisci la tua Via"><br><br>
        <label for="street"><b>Via/Piazza</b></label>
        <input type="text" id="street" name="street" placeholder="Inserisci via o piazza" required><br><br>
        <label for="cap"><b>Cap</b></label>
        <input type="text" id="cap" name="cap" placeholder="Inserisci CAP" pattern="^\d{5}$" required><br><br>
        <label for="city"><b>Comune</b></label>
        <input type="text" id="city" name="city" placeholder="Inserisci il comune" required><br><br>
        <label for="province"><b>Provincia</b></label>
        <input type="text" id="province" name="province" placeholder="Inserisci la provincia" required><br><br>
        <label for="nomeutente"><b>Username</b></label>
        <input type="text" id="nomeutente" name="nomeutente" pattern="^(?!.*\b(name|surname)\b)[A-Za-z0-9]+$"  placeholder="Inserisci il nome utente"><br><br>
        <label for="password"><b>Password</b></label>
        <input type="password" id="password" name="password" pattern="^(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$" placeholder="Inserisci la password"><br><br>
        <input name="submit" type="submit" value="Invia" />
    </form>
</body>
</html>