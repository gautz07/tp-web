<h2>Liste des clients</h2>
<table border="1">
    <tr><th>ID</th><th>Nom</th><th>Prénom</th></tr>
    <?php foreach ($clients as $c): ?>
        <tr>
            <td><?= $c['ID'] ?></td>
            <td><?= $c['NOM'] ?></td>
            <td><?= $c['PRENOM'] ?></td>
            <td><a href="index.php?action=commandes&id=<?= $c['ID'] ?>">Commandes</a></td>
        </tr>
    <?php endforeach; ?>
</table>
