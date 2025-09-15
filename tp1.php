<?php

    try {
        $user = "root";
        $pass = "";
        $dbheader = new PDO('mysql:host=localhost;dbname=tpclients', $user, $pass);
    } catch (PDOException $e) {
    die("Erreur !: " . $e->getMessage() . "<br/>");
    }

    $sqlQuery = 'SELECT * FROM clients';
    $clientStatement = $dbheader->prepare($sqlQuery);
    $clientStatement->execute();
    $clients = $clientStatement->fetchAll();
    echo "<table>";
    echo "<tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
        </tr>";


    foreach ($clients as $client) {
        echo "<tr>";
        echo "<td>".$client['ID']."</td>";
        echo "<td>".$client['NOM']."</td>";
        echo "<td>".$client['PRENOM']."</td>";
        echo "<td><a href='commandes.php?id=".$client['ID']."'>commandes</a></td>";
        echo "</tr>";
    }

    echo "</table>";

    $dbheader = null;

?>