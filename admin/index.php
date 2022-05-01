<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <H1>ESPACE ADMIN</H1>
    </header>
    <aside>
    <form action="serviceController.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Ajout de nouveaux services</legend>
                <label for="name">Nom service</label>
                <input type="text" id="name" name="nom"><br>
                Cathegorie<select name="cathegorie" id="cath" value="cathegorie">
                    <option  value="informatique">Informatique</option>
                    <option  value="sante">Sante et environnement</option>
                    <option  value="secteur-informel">Secteur informel</option>
                    <option  value="mecanique">Mecanique</option>
                    <option  value="noutrition">Noutrition</option>
                    <option  value="autre-activite">Autre activite</option>
                </select><br>
                <label for="img">Image</label>
                <input type="file" id="img" name="image"><br>
                <label for="textarea">Petite pescription</label><br>
                <textarea name="description" id="textarea" cols="30" rows="10"></textarea><br>
                <input type="submit" value="Soumettre" name="submit">
            </fieldset>
        </form>
    </aside>
</body>
</html>