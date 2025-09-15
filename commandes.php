<?php
    if (isset($_GET['id'])) {
        try {
            $user = "root";
            $pass = "";
            $dbheader = new PDO('mysql:host=localhost;dbname=tpclients', $user, $pass);
        } catch (PDOException $e) {
        die("Erreur !: " . $e->getMessage() . "<br/>");
        }

        $sqlQuery = "SELECT * FROM commandes WHERE client_id = " . $_GET['id'];
        $commandsStatement = $dbheader->prepare($sqlQuery);
        $commandsStatement->execute();
        $commands = $commandsStatement->fetchAll();
        echo "<table>";
        echo "<tr>
                <th>ID</th>
                <th>client id</th>
                <th>numero command</th>
                <th><a href='ajout.php?id=".$_GET['id']."'>ajouter</a></th>
            </tr>";


        foreach ($commands as $command) {
            echo "<tr>";
            echo "<td>".$command['ID']."</td>";
            echo "<td>".$command['client_id']."</td>";
            echo "<td>".$command['numero_command']."</td>";
            echo "<td><a href='modifier.php?id=".$command['ID']."'>modifier</a></td>";
            echo "<td><a href='supprimer.php?id=".$command['ID']."'>supprimer</a></td>";
            echo "</tr>";
        }

        echo "</table>";
            }

?>