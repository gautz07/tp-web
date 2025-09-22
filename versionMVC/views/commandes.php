<h2>Commandes du client</h2>
<table border="1">
    <tr>
        <th>ID</th><th>Client ID</th><th>Numéro</th>
        <th><a href="index.php?action=ajout&id=<?= $_GET['id'] ?>">Ajouter</a></th>
    </tr>
    <?php foreach ($commandes as $cmd): ?>
        <tr>
            <td><?= $cmd['ID'] ?></td>
            <td><?= $cmd['client_id'] ?></td>
            <td><?= $cmd['numero_command'] ?></td>
            <td><a href="index.php?action=modifier&id=<?= $cmd['ID'] ?>">Modifier</a></td>
            <td><a href="index.php?action=supprimer&id=<?= $cmd['ID'] ?>">Supprimer</a></td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="index.php">Retour</a>
