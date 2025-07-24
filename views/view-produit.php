<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Détail du produit</title>
</head>
<body>

  <h1>Détail du produit</h1>

  <p><strong>Nom :</strong> <?= $produit->getNom() ?></p>
  <p><strong>Quantité :</strong> <?= $produit->getQuantite() ?></p>
  <p><strong>Prix :</strong> <?= $produit->getPrix() ?> €</p>

  <p>
    <a href="?action=edit&id=<?= $produit->getId() ?>">Modifier</a> |
    <a href="?action=delete&id=<?= $produit->getId() ?>" class="delete-link">Supprimer</a> |
    <a href="?action=index">Retour à la liste</a>
  </p>

  <script src="js/delete-confirm.js"></script>

</body>
</html>
