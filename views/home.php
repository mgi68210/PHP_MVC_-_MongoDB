<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="css/style.css">

  <meta charset="UTF-8">
  <title>Liste des produits</title>
  <script src="js/delete.js"></script>
</head>
<body>

  <h1>Liste des produits</h1>

  <p><a href="?action=create">Ajouter un produit</a></p>

  <table border="1" cellpadding="10" cellspacing="0">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Quantité</th>
        <th>Prix (€)</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($produits)): ?>
        <?php foreach ($produits as $produit): ?>
          <tr>
            <td><?= $produit->getNom() ?></td>
            <td><?= $produit->getQuantite() ?></td>
            <td><?= $produit->getPrix() ?></td>
            <td>
              <a href="?action=edit&id=<?= $produit->getId() ?>">Modifier</a> |
              <a href="?action=delete&id=<?= $produit->getId() ?>" onclick="return confirmerSuppression();">Supprimer</a> |
              <a href="?action=view&id=<?= $produit->getId() ?>">Voir</a>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr>
          <td colspan="4">Aucun produit trouvé.</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>

</body>
</html>
