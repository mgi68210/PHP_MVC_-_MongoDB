<!DOCTYPE html>
<html>
<head>
    
    <title>Liste des produits</title>
</head>
<body>

<h1>Produits</h1>

<a href="?action=create"> Ajout d'un produit</a>

    </script>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>Nom</th>
        <th>Quantité</th>
        <th>Prix</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($produits as $produit): ?>
        <tr>
            <td><?= htmlspecialchars($produit->getNom()) ?></td>
            <td><?= $produit->getQuantite() ?></td>
            <td><?= $produit->getPrix() ?></td>
            <td>
                <a href="?action=edit&id=<?= $produit->getId() ?>"> Modifier</a>
                <a href="?action=delete&id=<?= $produit->getId() ?>" onclick="return confirm('Supprimer ce produit ?')">Supprimer</a>
                <a href="?action=show&id=<?= $produit->getId() ?>"> Voir</a>

            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
