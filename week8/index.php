<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Registratieformulier</title>
</head>
<body>
    <h2>Registratieformulier</h2>
    <form action="form_procces.php" method="post">
        <label for="username">Gebruikersnaam:</label>
        <input type="text" id="username" name="username" required minlength="3" maxlength="15"><br><br>
        
<label for="email">E-mailadres:</label>
<input type="email" id="email" name="email" required><br><br>
        
<label for="password">Wachtwoord:</label>
<input type="password" id="password" name="password" required minlength="6"><br><br>
        
<label>Geslacht:</label>
<input type="radio" id="male" name="gender" value="man" required>
<label for="male">Man</label>
<input type="radio" id="female" name="gender" value="vrouw" required>
<label for="female">Vrouw</label><br><br>
        
 <label for="country">Land:</label>
 <select id="country" name="country" required>
     <option value="">Kies een land</option>
     <option value="Nederland">Nederland</option>
    <option value="België">België</option>
    <option value="Duitsland">Duitsland</option>
     <option value="Frankrijk">Frankrijk</option>
        </select><br><br>
        
        <input type="submit" value="Registreren">
    </form>
</body>
</html>