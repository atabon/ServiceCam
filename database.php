
<html>
    <head><title>My form</title></head>
    <body>
        <form action="form.php" method="post">
            <fieldset>
                <legend>Remplir</legend>
                <label for="name">Nom</label>
                <input type="text" id="name" name="nom"><br>
                <label for="email">Email</label>
                <input type="email" id="email" name="email"><br>
                <label for="pass">MDP</label>
                <input type="password" id="pass" name="pass"><br>
                <label for="rem">Se souvenir</label>
                <input type="checkbox" id="rem" name="rem"><br>
                <input type="submit" value="Soumettre" name="submit">
            </fieldset>
        </form>
    </body>
</html>