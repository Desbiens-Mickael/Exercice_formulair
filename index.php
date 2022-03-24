<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/thanks.php" method="post">
        <div>
            <label for="prénom">Prénom :</label>
            <input type="text" id="prénom" name="user_prénom" placeholder="Entrez votre prénom" required>
        </div>
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="user_name" placeholder="Entrez votre nom" required>
        </div>
        <div>
            <label for="courriel">Courriel :</label>
            <input type="email" id="courriel" name="user_email" placeholder="Entrez votre email" required>
        </div>
        <div>
            <label for="téléphone">Téléphone :</label>
            <input type="tel" id="téléphone" name="user_tel" placeholder="Entrez votre numéro de téléphone" required>
        </div>
        <div>
            <label for="thématique">Pour quel service :</label>
            <select id="thématique" name="user_thém">
                <option value="vaccin">vaccin</option>
                <option value="test antigénique">test antigénique</option>
                <option value="Numéro perso de Macron">Numéro perso de Macron</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message" required></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>

</html>