<!DOCTYPE html>
<html>
<head>
    <title>Modifier un produit</title>
</head>
<body>

<h1>Modifier le produit</h1>

<form method="POST" action="?action=update">
    <input type="hidden" name="id" value="<?= $produit->getId() ?>">

    <label>Nom :</label><br>
    <input type="text" name="nom" value="<?= htmlspecialchars($produit->getNom()) ?>" required><br><br>

    <label>Quantité :</label><br>
    <input type="number" name="quantité" value="<?= $produit->getQuantite() ?>" required><br><br>

    <label>Prix :</label><br>
    <input type="number" name="prix" step="0.01" value="<?= $produit->getPrix() ?>" required><br><br>

    <button type="submit">Mettre à jour</button>
</form>

<a href="?">Retour</a>

</body>
</html>
