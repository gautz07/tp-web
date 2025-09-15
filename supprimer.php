<?php
if (isset($_GET['id'])) {
    try {
        $user = "root";
        $pass = "";
        $dbheader = new PDO('mysql:host=localhost;dbname=tpclients', $user, $pass);
    } catch (PDOException $e) {
        die("Erreur !: " . $e->getMessage() . "<br/>");
    }

    if (isset($_POST['confirm'])) {
        

        $sqlQuery = "DELETE FROM commandes WHERE ID = " . $_GET['id'];
        $commandsStatement = $dbheader->prepare($sqlQuery);
        $commandsStatement->execute();

        echo "<p>La commande a bien été supprimée.</p>";
        echo "<a href='tp1.php'>retour</a>";
    } else {
        echo "<p>Êtes-vous sûr de vouloir supprimer cette commande ?</p>";
        echo "
            <form method='post'>
                <button type='submit' name='confirm' value='1'>supprimer</button>
            </form>
        ";
    }
}
?>
