<?php
if (isset($_GET['id'])) {
    try {
        $user = "root";
        $pass = "";
        $dbheader = new PDO('mysql:host=localhost;dbname=tpclients', $user, $pass);
    } catch (PDOException $e) {
        die("Erreur !: " . $e->getMessage() . "<br/>");
    }
    if (isset($_POST['numero'])) {
        

        $sqlQuery = "INSERT INTO commandes (client_id, numero_command) VALUES (".$_GET['id'].", ".$_POST['numero'].")";
        $commandsStatement = $dbheader->prepare($sqlQuery);
        $commandsStatement->execute();

        echo "<p>La commande a bien été ajoutée.</p>";
        echo "<a href='tp1.php'>retour</a>";
    } else {
        echo '<p>entrez ici le numéro de la nouvelle commande</p>';
        echo '<form method="post">
        <label for="numero">numero de la commande</label>
        <input type="text" name="numero"/>
        
        <input type="submit" value="OK"/>
        </form>';
        echo "<a href='tp1.php'>retour</a>";
    }
    
}