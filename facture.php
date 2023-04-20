<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facture</title>
    <style>

body {
  position: relative;
  width: 21cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}


h2 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url(dimension.png);
}


table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
  text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}
    </style>
</head>
<body>
    <?php
// Connexion à la base de données
include_once "config.php";

// Récupération des informations du client
$client_id = $_SESSION['id'];
$name_query = mysqli_query($conn,"SELECT name from registration where id= '$client_id'");
$name = mysqli_fetch_assoc($name_query)['name'];
$ad = mysqli_query($conn,"SELECT address from registration where id= '$client_id'");
$address = mysqli_fetch_assoc($ad)['address'];

// Récupération des informations de toutes les commandes du client
$commandes = mysqli_query($conn, "SELECT * FROM commandes WHERE id_client = '$_SESSION[id]' AND date_commande >= NOW() - INTERVAL 5 SECOND;");

// Vérification si des commandes existent pour ce client
if (mysqli_num_rows($commandes) == 0) {
    echo "Aucune commande trouvée pour ce client.";
} else {
    // Affichage des informations de toutes les commandes du client
    $total_general = 0;
    echo "<h2>Facture pour $name</h2>";
    echo "<p>Adresse : $address</p>";
    while ($commande = mysqli_fetch_assoc($commandes)) {
        $commande_id = $commande['id'];
        $total = 0;
        echo "<h3>Commande n° $commande_id</h3>";
        echo "<table>";
        echo "<tr><th>Produit</th><th>Prix</th><th>Quantité</th><th>Total</th></tr>";
        $produits = mysqli_query($conn, "SELECT * FROM commandes WHERE id = '$commande_id'");
        while ($produit = mysqli_fetch_assoc($produits)) {
            $produit_nom = $produit['nom_produit'];
            $produit_prix = $produit['prix_produit'];
            $produit_quantite = $produit['quantite_produit'];
            $produit_total = $produit_prix * $produit_quantite;
            echo "<tr><td>$produit_nom</td><td>$produit_prix €</td><td>$produit_quantite</td><td>$produit_total €</td></tr>";
            $total += $produit_total;
        }
        echo "<tr><td colspan='3'><b>Total:</b></td><td>$total €</td></tr>";
        echo "</table>";
        $total_general += $total;
    }
    echo "<p><b>Total général : $total_general €</b></p>";
}
?>
<button onclick="window.print()">Imprimer</button>




</body>
</html>
