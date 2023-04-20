<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();

// Connexion à la base de données
include_once "config.php";

// Récupération des produits dans le panier
$ids = array_keys($_SESSION['panier']);
$products = mysqli_query($conn, "SELECT * FROM productes WHERE id IN (".implode(',', $ids).")");
if (!$products) {
  echo "Erreur lors de la récupération des produits : " . mysqli_error($conn);
  exit();
}

// Récupération du nom du client
$id_client = $_SESSION['id'];
$client_query = mysqli_query($conn, "SELECT name FROM registration WHERE id = $id_client");
if (!$client_query) {
  echo "Erreur lors de la récupération du nom du client : " . mysqli_error($conn);
  exit();
}
$client_data = mysqli_fetch_assoc($client_query);
$nom_client = $client_data['name'];

// Insertion des informations dans la table "commandes"
foreach($products as $product) {
  $id_produit = $product['id'];
  $nom_produit = $product['Name'];
  $prix_produit = $product['price'];
  $quantite_produit = $_SESSION['panier'][$product['id']];
  
  $insert_commande = "INSERT INTO commandes (id_produit, nom_produit, prix_produit, quantite_produit, id_client, nom_client) VALUES ('$id_produit', '$nom_produit', '$prix_produit', '$quantite_produit', '$id_client', '$nom_client') ON DUPLICATE KEY UPDATE quantite_produit = quantite_produit + 1";
  $result = mysqli_query($conn, $insert_commande);
  if (!$result) {
    echo "Erreur lors de l'insertion des informations dans la table commandes : " . mysqli_error($conn);
    exit();
  }

  // Récupération de l'id de la commande insérée
  $id_commande = mysqli_insert_id($conn);
}

// Vérification que l'id de la commande a bien été défini
if (!isset($id_commande)) {
  echo "Erreur : l'id de la commande n'a pas été défini";
  exit();
}

// Réinitialisation du panier
$_SESSION['panier'] = array();

// Redirection vers la page de facture correspondante
header("Location: facture.php?id_commande=$id_commande");
exit();
?>
</body>
</html>

 