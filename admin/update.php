<?php 

include "config.php";

if (isset($_POST['update'])) {

    $name = $_POST['name'];

    $user_id = $_POST['user_id'];

    $price = $_POST['price'];

    $desc = $_POST['product_description'];

    $dtl = $_POST['detail'];

    $img = $_POST['img'];

    $cat = $_POST['categorie'];

    $sql = "UPDATE `productes` SET `Name`='$name', `price`='$price', `details`='$dtl', `img`='$img', `product_description`='$desc', `categorie`='$cat' WHERE `id`='$user_id'"; 

    $result = $conn->query($sql); 

    if ($result == TRUE) {

        echo "<script>alert('Record updated successfully.');</script>";

    } else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `productes` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $name = $row['Name'];

            $price = $row['price'];

            $dtl = $row['details'];

            $img = $row['img'];

            $desc = $row['product_description'];

            $cat = $row['categorie'];

            $id = $row['id'];

        } 

?>
<style>
    form {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 10px;
  background-color: #f7f7f7;
}

fieldset {
  border: none;
  padding: 0;
  margin: 0;
}

legend {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
}

input[type="text"] {
  display: block;
  margin-bottom: 10px;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  width: 100%;
  font-size: 16px;
}

input[type="submit"] {
  display: block;
  margin-top: 20px;
  padding: 10px;
  border-radius: 5px;
  border: none;
  background-color: #007bff;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #0069d9;
}

</style>


<form action="" method="post">

    <fieldset>

        <legend>Product Update Form :</legend>

        Name:<br>

        <input type="text" name="name" value="<?php echo $name; ?>">

        <input type="hidden" name="user_id" value="<?php echo $id; ?>">

        <br>

        Price:<br>

        <input type="text" name="price" value="<?php echo $price; ?>">

        <br>

        Detail:<br>

        <input type="text" name="detail" value="<?php echo $dtl; ?>">

        <br>

        Image URL:<br>

        <input type="text" name="img" value="<?php echo $img; ?>">

        <br>

        Product Description:<br>

        <input type="text" name="product_description" value="<?php echo $desc; ?>">

        <br>

        Category:<br>

        <input type="text" name="categorie" value="<?php echo $cat; ?>">

        <br>

        <input type="submit" value="Update" name="update">

    </fieldset>

</form> 

<?php

    } else { 

        header('Location: admin 3.php');

    } 

}

?>