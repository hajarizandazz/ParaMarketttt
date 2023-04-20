 <?php 
 require 'config.php'; 
 $panierCount = isset($_SESSION['panier']) ? array_sum($_SESSION['panier']) : 0;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styl.css">
  <script src="https://kit.fontawesome.com/d22cd7cbf1.js" crossorigin="anonymous"></script>

  <style>
    .card .card-content .buy {
  position: relative;
  top: 200px;
  opacity: 0;
  padding: 10px 30px;
  margin-top: 15px;
  color: #FFF;
  text-decoration: none;
  
 background-image: linear-gradient(to right, #97c2ca 0%, #dad7d0  51%, #cfdcf7  100%);
 
  border-radius: 30px;
  text-transform: uppercase;
    letter-spacing: 1px;
  transition: 0.5s;
}
.card:hover .imgBox img {
  max-width: 80%;
}
.search-box{
  position: absolute;
  top: 50%;
  left: 50%;
  transform:translate(-50%,-50%);
  background: #2f3640;
  height: 50px;
  border-radius: 40px;
  padding: 10px;
  margin-left: -50px;
  


}
      .badge {
  display: inline-block;
  width: 15px;
  height: 15px;
  line-height: 15px;
  text-align: center;
  border-radius: 50%;
  background-color: red;
  color: white;
  font-size:12px;
}
.dropdow {
  position: relative;
  display: inline-block;
  
}
ul li .dropbt{
    text-decoration: none;
    color: black;
    padding: 5px 20px;
    border: 1px solid transparent;
    background-color: transparent;
    font-size:14px;
    
  
}
.dropdow-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 150px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdow-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdow-content a:hover {background-color: #f1f1f1}

.dropdow:hover .dropdow-content {
  display: block;
 
}

.dropdow:hover .dropbt {
  background-color: white;
  color: black;
  transition: 0.6s ease;
}
.price{
  color:white;
}
.section-products {
  padding: 80px 0 54px;
  background-image: url(https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/3389b9153666803.Y3JvcCwyODc2LDIyNTAsNzI2LDA.jpg);
  background-size: cover;
  background-repeat:no-repeat;
}
.swiper-container-mySwiper{
  width: 1250px;
  height: 2700px;
   margin: auto;
  background-color:rgb(237, 235, 235);
}

    </style>
</head>
<body>
<header>
    <a href="index.php" class="logo">Paramarket</a>
    <div class="group">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php#cont" >contact</a></li>
        <li><a href="logine.php" >Sign in</a></li>
        <li><a href="#"></a></li>
        <li><a href="#"><i class="fa-solid fa-user"></i> 
        <div class="dropdow">
                  <a href="" class="dropbt">   
                    <?php 
                    if(isset($_SESSION['id'])){ $select = $conn->query("SELECT name FROM registration WHERE id = '{$_SESSION['id']}'") or die('query failed');
                        if(mysqli_num_rows($select) > 0){
                          $fetch = mysqli_fetch_assoc($select);
                          echo $fetch['name'];
                      }
                     
                    
                    ?>
                </a>
                <div class="dropdow-content">
                    <a href="profile.php">info</a>
                    <a href="logout.php">logout</a>
                </div>
              </div>
              <?php
                    }
              ?>
      </a></li>
       
        
        <li><a href="panier.php" class="link"><i class="fa-solid fa-cart-shopping"></i><span class="badge"><?= $panierCount ?></span></a></li>
        
      </ul>
      <form id="search-form" action="ex.php" method="post">
  <div class="search-box">
    <input type="search" id="search" class="search-input" name="search" placeholder="Recherche...">
    <button type="submit" name="submit" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
  </div>
</form>
       
         
   
  </div>
   </header>

<section class="section-products" id="sec2">

<div class="swiper-container-mySwiper">
  <div class="swiper-wrapper">
    <div class="group--title">
      <h2>Featured Product</h2>
      <div class="group--subtitle">
        Popular Products
      </div>
    </div>
    <?php



if (isset($_POST["submit"])) {
    $str = $_POST["search"];
    $query = "SELECT * FROM `productes` WHERE Name LIKE '%$str%'";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="swiper-slide"> 
                <div class="card">
                    <div class="imgBox">
                        <img src="<?php echo $row["img"];?>" alt="" >
                    </div>
                    <div class="card-brand">
                        <h4>Nutrimea</h4>
                    </div>
                    <div class="card-content">
                        <h3><?php echo $row["Name"];?></h3>
                        <h2 class="price"><?php echo $row["price"];?><small>,90</small>€</h2>
                        <a href='prbe1.php?id=<?php echo $row["id"]; ?>' class='buy'>show more</a>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        echo "No results found.";
    }
}



		?>
  </div>
</div>
 
        
<!--siper slider end-->
</section>
</body>
</html>


		
