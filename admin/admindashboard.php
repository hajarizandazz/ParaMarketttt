<?php 

include "config.php";

$sql = "SELECT * FROM commandes";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style>
    /* Center the heading */
h2 {
  text-align: center;
}

/* Style the table */
table {
  width: 100%;
  border-collapse: collapse;
}

table th,
table td {
  padding: 12px;
  text-align: left;
  border: 1px solid #ddd;
}

table th {
  background-color: #f2f2f2;
}

/* Style the "Edit" and "Delete" buttons */
.btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: 400;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: 4px;
}

.btn-info {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da;
}

.btn-danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;
}

    </style>
</head>

<body>

    <div class="container">

        <h2>orders</h2>

<table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th> Name</th>

        <th>price</th>

        <th>detail</th>
        <th>nom client</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['id_produit']; ?></td>

                    <td><?php echo $row['nom_produit']; ?></td>

                    <td><?php echo $row['prix_produit']; ?></td>

                    <td><?php echo $row['quantite_produit']; ?></td>
                    <td><?php echo $row['nom_client']; ?></td>
                    

                   

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 
    <button><a href="adminori.php">back to menu</a></button>


</body>

</html>