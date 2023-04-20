<?php 

include "config.php";

$sql = "SELECT * FROM productes";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style>
    
  
body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
        color: #333;
    }

    .container {
        max-width: 960px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .heading {
        margin-top: 0;
    }

    .table-container {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .table-container th,
    .table-container td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ccc;
        font-size: 16px;
    }

    .table-container th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .table-container tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .table-container tr:hover {
        background-color: #f5f5f5;
    }

    .btn {
        display: inline-block;
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
        padding: 8px 16px;
        border-radius: 4px;
        text-decoration: none;
        font-size: 16px;
        transition: background-color 0.2s ease-in-out;
        margin-right: 10px;
        margin-bottom: 10px;
    }

    .btn:hover {
        background-color: #0069d9;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    .add-btn {
        display: inline-block;
        color: #fff;
        background-color: #28a745;
        border-color: #28a745;
        padding: 8px 16px;
        border-radius: 4px;
        text-decoration: none;
        font-size: 16px;
        transition: background-color 0.2s ease-in-out;
        margin-bottom: 10px;
    }

    .add-btn:hover {
        background-color: #218838;
    }

    .back-btn {
        display: inline-block;
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
        padding: 8px 16px;
        border-radius: 4px;
        text-decoration: none;
        font-size: 16px;
        transition: background-color 0.2s ease-in-out;
        margin-right: 10px;
    }

    .back-btn:hover {
        background-color: #5a6268;
    }

    

    </style>
</head>

<body>

    <div class="container">

        <h2>product</h2>

<table class="table">

    <thead>
        <tr><a href="admin.php"  style="text-decoration:none">ajouter produit</a></tr>

        <tr>

        <th>ID</th>

        <th> Name</th>

        <th>price</th>

        <th>detail</th>


    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['Name']; ?></td>

                    <td><?php echo $row['price']; ?></td>

                    <td><?php echo $row['details']; ?></td>

                    <td><?php echo $row['img']; ?></td>
                    

                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>
<a href="adminori.php">back to menu</a>
    </div> 
    


</body>

</html>