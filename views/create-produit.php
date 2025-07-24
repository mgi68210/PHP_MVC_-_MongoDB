<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">

    <title>Ajouter un produit</title>
</head>
<body>

<h1>Ajouter un nouveau produit</h1>

<form method="POST" action="?action=store">
    <label>Nom :</label><br>
    <input type="text" name="nom" required><br><br>

    <label>Quantité :</label><br>
    <input type="number" name="quantité" required><br><br>

    <label>Prix :</label><br>
    <input type="number" name="prix" step="0.01" required><br><br>

    <button type="submit">Enregistrer</button>
</form>

<a href="?">Retour</a>

</body>
</html>
