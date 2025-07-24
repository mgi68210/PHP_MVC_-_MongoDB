<!DOCTYPE html>
<html>
<head>
    <title>Détail du produit</title>
</head>
<body>

<h1>Détails du produit</h1>

<p><strong>Nom :</strong> <?= htmlspecialchars($produit->getNom()) ?></p>
<p><strong>Quantité :</strong> <?= $produit->getQuantite() ?></p>
<p><strong>Prix :</strong> <?= $produit->getPrix() ?> €</p>

<a href="?"> Retour</a>

</body>
</html>
