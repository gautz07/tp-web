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
        

        $sqlQuery = "UPDATE commandes SET numero_command = ".$_POST['numero']." WHERE ID = " . $_GET['id'];
        $commandsStatement = $dbheader->prepare($sqlQuery);
        $commandsStatement->execute();

        echo "<p>La commande a bien été modifiée.</p>";
        echo "<a href='tp1.php'>retour</a>";
    } else {
        echo '<p>entrez ici le nouveau numéro de la commande</p>';
        echo '<form method="post">
        <label for="numero">numero de la commande</label>
        <input type="text" name="numero"/>
        
        <input type="submit" value="OK"/>
        </form>';
        echo "<a href='tp1.php'>retour</a>";
    }
    
}