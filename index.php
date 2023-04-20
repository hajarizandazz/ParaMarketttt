<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="navbar.css"> 
   <link rel="stylesheet" href="stylehome.css">
 
 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,200&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/d22cd7cbf1.js" crossorigin="anonymous"></script>
  <script src="javascript.js"></script>
  <title>ParaMarket</title>
<style>
  .namee {
  background-color: #ebebeb;
  color: black;
}
  .menu-wrap .hamburger {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  width: 50px;
  height: 53px;
  padding: 1rem;
  background: rgba(13, 110, 139, 0.75);
  display: flex;
  align-items: center;
  justify-content: center;
}

  nav {
  display: flex;
  justify-content: space-around;
  align-items: center;
  min-height: 7vh;
  background-color: #e8e7ed;
  font-family: 'Poppins', sans-serif;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1000;
}
  html{
    scroll-behavior: smooth;
  }
  .dropdow {
  position: relative;
  display: inline-block;
  
}
ul li .dropbt{
    text-decoration: none;
    color:rgb(85, 173, 197);
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
    color:rgb(85, 173, 197);
  color: ;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdow-content a:hover {background-color: #f1f1f1}

.dropdow:hover .dropdow-content {
  display: block;
 
}


</style>
</head>
<body>
  <div class="fullContainer">
    <header class="showcase">
    
   
    <nav>
      <div class="logo">
        <h4>
          ParaMarket
        </h4>
      </div>
      <ul class="nav-links">
        <li>
          <a href="#">Home</a>
        </li>
        <li>
          <a href="#ab">About</a>
        </li>
        <li>
          <a href="#cont">Contact Us</a>
        </li>
        <li> 
            <?php 
                    if(isset($_SESSION['id'])){
            ?>
        <div class="dropdow">
                  <a href="" class="dropbt">  
                    <?php 
                   $select = $conn->query("SELECT name FROM registration WHERE id = '{$_SESSION['id']}'") or die('query failed');
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
                    }else{
              ?>
          <button id='loginbtn'  onclick="window.location.href='logine.php'">Login</button>
        <?php
                    }
        ?>
         
        </li>
      </ul> <div class="menu-wrap">
      <input type="checkbox" class="toggler">
      <div class="hamburger"><div id="ha-che"></div></div>
      <div class="menu">
        
          <div class="menuContenu">
            <ul class="menuPara">
              <li ><a href="vitamin.php">vitamins Dietary Supplements </a></li>
              
              <li><a href="beauty.php">Beauty Treatments</a></li>
              <li><a href="protein.php">sport protein</a></li>
            
            </ul>
          </div>
       
      </div>
    </div>
    </nav>
   </header>
   </div>
 
<section class="section-image">
<div class="image-slider">
  <div class="slide active">
   <img src="https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/60c226115260815.Y3JvcCwzNzg0LDI5NTksMCw4MTQ.jpg" alt="">
    <div class="info">
      <h2>Vitamins</h2>
      <p>Discover ParaMarket's highest quality cosmetic products, carefully selected to meet every customer's needs. From organic skincare to cruelty-free makeup, we have everything you need to look and feel your best. </p>
    </div>
  </div>
  <div class="slide">
    <img src="https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/23553e153022027.Y3JvcCwxNjE2LDEyNjQsMjI4LDc0NA.jpg" alt="">
     <div class="info">
       <h2>Beauty solution</h2>
       <p>ParaMarket's range of dietary supplements offers effective solutions for hair loss and skin problems. Our products are carefully formulated with natural and organic ingredients to promote healthy hair growth and nourish the skin from within. Try them out and see the difference for yourself. </p>
     </div>
   </div>
   <div class="slide">
    <img src="https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/a1137e157076799.Y3JvcCwxOTk0LDE1NjAsNDA5LDA.png" alt="">
     <div class="info">
       <h2>Vitamin C creams</h2>
       <p>Experience a bright and radiant complexion with ParaMarket's Vitamin C creams. Enriched with natural ingredients, our carefully formulated creams provide nourishment and protection to the skin. </p>
     </div>
   </div>
   <div class="slide">
    <img src="https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/fd6a98158651261.Y3JvcCwyOTU3LDIzMTMsNjUsMA.jpg" alt="">
     <div class="info">
       <h2>essential oils</h2>
       <p>ParaMarket offers a wide range of high-quality essential oils, carefully sourced and formulated for their therapeutic benefits. Discover our collection and experience the benefits of aromatherapy today. </p>
     </div>
   </div>
   <div class="slide">
    <img src="https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/18f4a9154114505.Y3JvcCw1ODk1LDQ2MTEsMjksMA.jpg" alt="">
     <div class="info">
       <h2>protein powders</h2>
       <p>Maintain a healthy lifestyle with ParaMarket's range of protein powders and vitamin supplements. Carefully formulated with high-quality ingredients, our products support muscle growth and overall health. </p>
    
   </div>
   </div> 
   <div class="navigation">
    <div class="btn active"></div>
    <div class="btn"></div>
    <div class="btn"></div>
    <div class="btn"></div>
    <div class="btn"></div>
   </div>
</div>
</section>
<br>
<h1 class="ABOUT-Title" id="ab"> About Us</h1>
<section id="about" class="section-padding about-section">
  <div class="containerrr">
   <div class="row">
     <div class="col-sm-6">
         <div class="section_title"><br>
            <div class="section_subtitle">About Us</div>
            <h2 class="section_main_title">YOUR BEST <strong>PARAMARKET</strong></h2>
         </div>

            <div class="about-item">
               <p>
                Parapharmacy N°1 in Morocco 100% Discount,delivery Anywhere In Morocco
               </p>
               <p>Discounts, Offers, Freebies and Travel Formats are offered with all orders.</p>
               <p>The best drugstore products at discount prices
                 </p>
               <p>On our site, you will find the best drugstore references at the best price.</p>
               <p>Make your online purchases now on our safe and reliable platform,</p>
               <p> offering thousands of products at ultra-competitive prices.</p>
               <div class="hgt-20"></div>
                <div class="home-button"><br>
                  <a href="" class="btn-color-background"> See More</a>
                </div>
            </div>
          </div>
     <div class="col-sm-4 col-sm-offset-2">
       <div class="about-box">
         <div class="box-overlay"> </div>
         <a href="" class="photo"> 
         <img src="https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/fcfe68131079113.Y3JvcCwzNTE2LDI3NTAsNDQzLDU3NA.jpg" alt="" width="250" height="300"></a>
       
       </div>
     </div>
   </div>

  </div>
</section>
<h1 class="titleTemoin">Customer Reviews</h1>
  <div class="cont">
    <input type="radio" name="navv" id="fir" checked/>
    <input type="radio" name="navv" id="sec" />
    <input type="radio" name="navv" id="thi" />
    
    <label for="fir" class="fir"></label>
  <label for="sec"  class="sec"></label>
  <label for="thi" class="thi"></label>
   
    <div class="one temoin">
      <blockquote>
        <span class="leftq quotes">&ldquo;</span> I highly recommend ParaMarket for their excellent selection of high-quality health and wellness products, including pharmaceuticals, beauty items, and dietary supplements, along with great customer service. <span class="rightq quotes">&bdquo; </span>
      </blockquote>
      <img src="data:image/jpeg;base64,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" width="240" height="180" />
      <h2 class="temoinName">Steve Kruger</h2>
     
    </div>
    
    <div class="two temoin">
      <blockquote>
        <span class="leftq quotes">&ldquo;</span> "ParaMarket offers natural and organic health and wellness products that are ethically sourced and free from harmful chemicals. Highly recommended for quality and sustainable options in supplements .<span class="rightq quotes">&bdquo; </span>
      </blockquote>
      <img src="data:image/jpeg;base64,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" width="240" height="180" />
      <h2 class="temoinName">John Doe</h2>
      
    </div>

    <div class="three temoin">
      <blockquote>
        <span class="quotes leftq"> &ldquo;</span> Highly recommend ParaMarket for quality health and wellness products, great selection, and excellent customer service. <span class="rightq quotes">&bdquo; </span>
      </blockquote>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREybi8kFqopLNAgPm56DQKHfhyCc2JBYZ9dw&usqp=CAU" width="240" height="180" />
      <h2 class="temoinName">Steve Stevenson</h2>
      
    </div>
    
    
  </div>
<section id="faqs">
  <div class="contain">
      <h2>Frequently Asked Questions</h2>
      <div class="content">
          <article>
              <div class="ic"><i class="fas fa-plus"></i></div>
              <div class="detail">
                  <h4>What are the payment options available on your site?</h4>
                  <p>We accept various payment options including credit cards, debit cards, PayPal, and bank transfers.</p>
              </div>
          </article>
          <article>
            <div class="ic"><i class="fas fa-plus"></i></div>
            <div class="detail">
                <h4>How can I know if a product is suitable for my health or wellness needs?</h4>
                <p>It's important to consult with a healthcare professional before using any product for health or wellness purposes. However, we provide detailed product descriptions and ingredients lists to help you make informed decisions.</p>
            </div>
        </article>
        <article>
          <div class="ic"><i class="fas fa-plus"></i></div>
          <div class="detail">
              <h4>How can I contact your customer service in case of a problem or question?</h4>
              <p>You can contact our customer service team via phone, email, or chat. We are available 24/7 to assist you with any questions or concerns.</p>
          </div>
      </article>
      <article>
        <div class="ic"><i class="fas fa-plus"></i></div>
        <div class="detail">
            <h4>Can I get advice on products or personalized recommendations?</h4>
            <p>Our team of experts is available to provide advice and personalized recommendations for your health and wellness needs. You can contact us via phone, email, or chat.</p>
        </div>
    </article>
    <article>
      <div class="ic"><i class="fas fa-plus"></i></div>
      <div class="detail">
          <h4>Do you offer promotions or discounts on your products?</h4>
          <p>We offer regular promotions and discounts on our products. Please check our website or sign up for our newsletter to stay updated.</p>
      </div>
  </article>
  <article>
    <div class="ic"><i class="fas fa-plus"></i></div>
    <div class="detail">
        <h4>How can I find a specific product on your site?</h4>
        <p>You can use the search bar on our website to find a specific product or browse through our categories.</p>
    </div>
</article>
          <article>
              <div class="ic"><i class="fas fa-plus"></i></div>
              <div class="detail">
                  <h4>How can I track my order?</h4>
                  <p>We accept various payment options including credit cards, debit cards, PayPal, and bank transfers.</p>
              </div>
          </article>
          <article>
              <div class="ic"><i class="fas fa-plus"></i></div>
              <div class="detail">
                  <h4>What is the delivery time for my order?</h4>
                  <p>Delivery time depends on your location and shipping method selected. Please refer to our website for estimated delivery times.</p>
              </div>
          </article>
      </div>
  </div>
</section>
<div class="bann">
  <div class="banner">
    <div class="banner-text">
       <h2>LIMITED TIME OFFER</h2>
       <h1>SALE -50 %</h1>
       <button id="bTNN"  onclick="window.location.href='beauty.php'" >SHOP NOW</button>
    </div>
  </div>
</div>
<div class="slider-area">
  <h2>Our Clients</h2>
  <div class="wrapper">
    <div class="it"><img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJIAAACSCAMAAACZpWO8AAAAZlBMVEX///8AAAD4+Pjz8/O0tLSsrKxWVlbv7+9hYWF0dHT7+/ufn5/s7OxcXFykpKR7e3tvb2/Dw8Pl5eW9vb3a2trKyspnZ2eCgoKKiorS0tKTk5NAQEAZGRkzMzMdHR1LS0sPDw8oKCj2drg8AAAEx0lEQVR4nO2Z2ZajIBCGjWtco4h71vd/yZECRJZ00jPJzZz6LvooweKXWgDb8xAEQRAEQRAEQRAEQRAEQRAEQRAEQZBPUrRz3TOGqAveeyQDfu6Tx2VZpq5O7frLjcqruNF/9dvxfthznZkRP5pXfFMIax3Z1Qh9I7eOG2/voE/rkLSs7RfQGrEuoTZGvhxMYjZRwY1dJoYpv2StcBlD38IcDGQs4rme3ZS2oknpsCSFFzC8DHnFmE+3TVLslHTcJCUPkG/OIxicxA0F68SSxKQugUtScAJHpUTZ9YNpSN+S5DUw3qx3GPQ2MHIyFU1n1UmXVMADMbVewntLkjeDJu1x7jb1hi27f5gjQBwGDkkJzPHoFPSWJH6z7MLJtxwFkZobVvYzqUmq2c3wRNE7krwCFNTq59FyJfeubqRi0SJ17yXl7Lp/pugtSWLArRKEdoL5i9YDmuL9wDtJwZNk+JUkHs1X6bqzFVtC5m1ff1tt4J2kk8vJv5bkQfVa+HWv5zMng1qxL8/McL2VdCWJsNg+u5PtN5LolTVU7BLe/mYZinaiYWR23+k/g6TQ6Pi3kkQ4rUMkkO9WNReJrV5+1AdWksBv6UtJha8TWJK4pbUUpy63MXItLclD96OS5KwXtiQ3ekcIpyF8msAJW9XvcpoqI9qVpPsWAv8qiQfHgRm8uBMYqpUsySz29jXBkPSRWRJWD7o/NM1Mxp2vMiwH7tbDynGvY6lODR4OSTycfjB3Ui6pzZlQkmA1eZ1x5taD1x6zkZfoxUzPDVh4YDNCLfcqSXB1/fe6xNGTyqaUbmXzpS+rShLs61z71K9Igq3cZZ0uFsL65l5J4jvWx/O9/0clcX93ML5RKHZrHE+T2fH4NyTBNKUBK+RGsOw3J3zX/bQ0fVYSX54dk6RJ6u4/htOHJXWydpkZpe0q+YJ5GKxE/4akrOSjWTsF/TgQXnmvzujld5+XJCfAOmcahyYqjpV9pPYUNBwO1y9I4rF7s1xiHi2z/MFFPZY0D6N8iJcrryCflxS5I9c+gBdS1J7zNyQFx2VZ7LgNL8tyMdyZ0ZHPDeN+WcoBPp4E5f18tiX1rNV+VWb36flLkBSFozL7xYojw4qpaduwbZuObCLotGJ9iGGtZjqs+pndN78CIch/SKayN9kyIVDp5BVtI9uJ+uIViCruE0LEzyRs5M+BfIJKOxkhchlt7DzUoWoPEG4fwaJxlM81p66phbVHlcr1JBL7p6K6VHyHHNZT2IvNciT28bScRQ2iS1RxwXmY/7Brhr7qY9xcypeLSCBOU4QdJpKeWzt6kfy2WMsKnInvCOTI/oj3C8XmioaesEmHTEzh/ELQXhKZiTykhEMsKncHa03K3/6S58JuNDVitfFrceyCZ8WNlESOs+hGb5WY12R4VbyVpHSM5DRFNOi5iyZ4vuYhUaZCkX+sqmOmSYKOWWlIOknrdPC2+k6ffWI0JdExIbmIoDU8ShEW9TpduViWy0J0nsaiGLkPfeFUr16fHcU0K8e1cpbk1ASzF1gfbnVI2vMpaCbmO97Y9LUMGi/ve3lcHr2WN8+rXsqH90ff7tgIt5MWurKrY9pzF0y18x8TCIIgCIIgCIIgCIIgCIIgCIIgCIIgiOIPby04/wrVkpYAAAAASUVORK5CYII="></div>
    <div class="it"><img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANcAAAB5CAMAAACdtUQZAAAAY1BMVEX///8AAACwsLC+vr4NDQ3T09PNzc1CQkLt7e0oKCj5+flnZ2c9PT2Pj4+srKxxcXHi4uJZWVnz8/Pc3NwWFhajo6M4ODiYmJh7e3tTU1O4uLhfX18gICAuLi6BgYEbGxtKSkruRbXdAAAHlUlEQVR4nO2b6ZqjKhCG4xqiraKIRpOY3P9VHpViUzBLz4xP9+H71UZUXiiKKqAPBycnJycnJycnJycnJycnJycnJ6fvCwW/T2jk6r3fp37kCsK9a/HHFQaO6yfJcX3vM/U/brq/zvXI/IjgSYTEefb4e1/SpHKVfj7JL7YeOM+F/Id2dTMWvaUtWk+WVVDU7NOXYpb5Ye+ezncv80VRoVmVpfCoI51rnz9WXF9QC2x/2PNYGdywq549cTRR0cgSBsDDJ8IuU0s9q/luxK4CeDawVgxKxPcVl9fCwxsdNrASLVz6Nq4mT6zhDQEuxp1YuKCVY09rBPHlpc5wHy718cUb1IoVxsyW+LWF69oKqorE/agxsokJ+pzLKyt44cVYull0ic5FN5+d3s7qS7e5GmGBwVA28PLw2jzSc46kHb7F5WWbjQ5WKMxU5wKbli8zP56IAWjkKqAGKDf62az/iGtziAE0Fh9c+HmoZ2XrMHbb9xblNS7esHFneQnoXa4bZu9NzutXgdnLVy24HtBhuflbzLFU5RYXx7IN8I+5+CAQvkEqWtV6OS/zzr6aPnXHS0NYc4HDTIZnWO9zCX8d1XpR+J2c7FzHrdaGOn9tcHXJi731CZcXQ+0yrWQD31TtfhVHQYehRZNMqtlrI+WnFRe48lcy1Q+4bnwW08Y/NjTliitNTE0y68HuqLP2kgssAr8ScH7A5ZXApTp7+GZ03+TiYzBaj7B+fWPB9YDuej64PuQSQ0y6iAtzdYozM3PxJlkFU+BMtY5ccMGldfr7PlfIHZtoOmK0L0OeAuYaeQuxYKTSftO5Gpgl1hPMH+MS3+D1oObaGrhSaJFFqtQQQ7voXHzqegnrQy5hT4wE3AFaxgAGriuMsIVPYwFzddJ+1LnIO2b4KZcIYif/x8P81YA25cvQ7EjvMPYGqv224AJXuijzjKu03LZxhdDuyRhm5pYxY14HME0IX4x1EblrXHxO38y3V1wHEpmVWDsfhhjyLuyPqnmNCzosUX8LTLapc/GBaTEsG9e2TFwQ9xx6mxVauOpqVb5jVrGMQjQunp/8dS5ufiBT4mJej+LpjPyFmt+wE5enPopMBcxcDzbCZKZzwuYaG+3wtenrW1wPpYQxuLGsH0JHx9zuCnN36Vz8Y5bkzcKV5JlRbbXBJWzD9jUL1xUe4tMdsXSE0c+T97gsufnN5ueZ+BAzJR6efb0XKgz+j/lTw4qJzsWXjJ4AgT6dl0HwLYvR27iO0PYs+GdO3jAv6Vz+9rcW+jNclsnSuj7fK9bL0g90X5fSuWCa/JvxvNSHXLAOiacqs6THkGkuuGBIHJKXIo59uPhawkQz2yT+MhRa5F98ML/UYTtxQbQ3pvSFtMilFlxisfmVhHknLr6Ck0IYbHx8ub7BPccrse9eXDD1RZfZDM0rTEsuHlkequdge3HBCEvm7rJkSat1tlRspDw1xd24+JbSJMt+2nq9VwY4wcn8DNduXCJ+sHtuw/q8BMPW7aY59tmPS1bRFvKZ9lM6Ih+7rPvsWOQsL9iPSywbWzf6jPtft0CAHSKqDswwpQHmr9uPS6yuElsByz5soZwDSKrIb4fzkOUxqhKlmXbkuj5bl7bum7fSGA3a2Q55+m8/+GDl8m5DfLDqsTeXN50HqeybWZSdFzGFjqPOAUbacYekwiQewJfwdYBtrvXSoFIzhGyt8ozrq+u6cuN22U0FzDnrpEfRtnQ65RD0edsOqbLSV59Zwr9e/Jt1ZXetuVw3q7RMkv/m3FdY/7pzXzvJcf0sOa6fJcf1s/SEq8n0KddXLzraanH+fYhJLjd6w7bV59yzDO0vlLYy0q+HOArUHWLluZRmSkaQ0vFBcbOIYtvezROuC9aOcRwPataRRZQoEXFD+rTLkPilrnJf289WNkAvbUSoaJSYFF1GfFkLJNvLjymWz/mobQXXDRdDbIlWnnCVOlccq3vHWeuVSsIZzZ35EFu14Rg25kpoea7UWI/Krm/n4zlHLENYLJsvH7xMbgzkahhcjheNJYR7i6tEjRraZ/6RylXFE+zyBnzlKkTHMFDCO9SoVkPFAlcInZrJDTqdq5cwOSnOKUe5I2rprTe5KPVipaIZipUjlikkny1f4gmrsXvlm4d4NFwT1xGOmFyMXJTEkTyYQJHft6JKjwDbwuJ3uE6oTXtlsyij1xsSq/YNWvYX7hWrrWNapMohJsl1ggMVgzzKo3L5SKlCvkhbOmI5lPoOV4H9wCdyFGRjtXu5AEdmm7yJfbrRDoniAfGYqhDZvZIL7KxW3INmh1QZUxrXMI4J/839L8GlXMxIZwky+o2TdH/j6KPTzrSo3cjVIJEezR6nlBmowlUjfzqLGin+UOHKvEjWXfMbfe9dseVUyxOuDiHCPUU5v/NGhLWfx3xVS6XH9JhI11CP46LllniPJiute9HbmWqjPkZIXUNRjjzTwetk47bjJ7G42aNPx5d3r8VuXs38kMwQw/vKyWo/TE+eoDS8JhRmvUg09TcpO4hhKB725gS1vr8SHf1P46gfK8f1szRz/db/X8b+7xPeWkd3cnJycnJycnJycnJycnJycnJyelH/ASN3iqSFt86YAAAAAElFTkSuQmCC"></div>
    <div class="it"><img alt="" src="data:image/png;base64,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"></div>
    <div class="it"><img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVzOAuGZrYef1Kbs4KmkYsL7Ca2uOHPKY4CC1hVwZKuw&s"></div>
    <div class="it"><img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwPHNgakLz_JlBBS0Zy1SsdQdYMZDqqv5LzilBpiZL_w&s"></div>
    <div class="it"><img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALUAAACACAMAAAB6OtiFAAAAh1BMVEX///8ARTMAPyzH1dH4+/oASDcnX1D7/f0APChmiH7X4t/T4N7n7esyYVIoW0zK2NWMpJ11l45vjoQoUUFlg3rw9PO2ycUcWEmEpp6nv7kATj1ahnt7npWdt7Fgi4CVsqtIdmo/b2IANx9pk4k7dGZNfnIvbl8+aFtUfHEYTz81WkwAMRNLcWb9rqF4AAAD3ElEQVR4nO2ZbZOrJhSABfHdrJIuCBHFxGtvtu3//309iZpgtju7O7c2Sec8M/ngC/iAhwMYz0MQBEEQBEEQBEEQBEEQBEEQBEEQBEGQZ4Tl9zb4DiJtZON7QvdSRPeW+SpCDv3Q1job+tpqcW+dL8HS5kejBqmNbrRqe/0MYSL8utVGNbrvem1L1Rsu2L2lPkOYoWmNqm2nLBgXWnH7w7+31SdEqq+VMppL65va8LZXRg7FvbU+gxsNQ9Bve86NtdpIo+zv6tFHpBl4o7daG9vWym59q3Rdp/e2+oy07HuuukbZzthaWojxJxiNXpY1BYRFa9qGyxx+8hky3wnGRJqpUD7bnA7o7tmMAX/QT7MEuSBqVTyfteSplA+gHeXpkqwY8Uekg7atlIUPqxHn5HTfWCjL3KpyYJ2ZKErhSZnDrPtPyFT4Bcs+uAolC6ei9NyEJxy7yAIG7/W6oEjhJV8nauFeE/714FToeiU9RYdbhcs6i5W8C8Pu8kxehXunDT/DSs2NSF/gYEofTO2g1DTQ0iEMK3spVFahQ2XWsd5QQis5HW1j8uJY/0Yon60zuI/PSS/aUhIfz3eme0qD5poNy5gQeuHQr2RNguCiDTIfWac0uFp7gseEDvnpXVFCrFNhSYM3WIbP6PWsA7Ibe+vL1h7jAfR2ng4UyroVlpT8sXq6A2tSVfOjv27tie2BkDaBcCgXC+2T9eqbHLCmr/5PCFrDvmXtRXwXEGjyoqfHCKmTke1aW8uztVeEoA37wO9Yw1IKgivmNxWCdUDjCemtw9k68rLToErYt6wlBBch++y9dTURrmztpaBNt0dya72drX2wLt2SfgXhsXunDXH9IqclWLZWgM/WXp5Ab0M2cazFnpLN7AR9SN00JkNKN36zI3Sp/d+NxvOLFya4sYYZIyCdzE8bRvVG6MbJaPJ0XHiRBu2N+xXqZO07q9WVrT1mobMX1uII/f/Wtf2wCQjdOVGqq1m2IWd9xzoI1p/RX+LD6zzI9FtMK3e9I3hFxmxAg+O1RyP9ZxxXU2DoHY2dBpUHekkhcXxoV7EWPHm9TsgySfjinTLftt1+/9fRSCdYUw7JeG5EpJPklV+u6mTBTTb/t2DA4ujdDQL2Ucuz0btC1z8PztccVlD+fyLE/OZZdHNm6kS20n72F4ga3Uzha8c0kVvdjIE/xjnTWj5aEDCu7TizFMqc5bJe8jHJjF+vhW2aR9uGMzVNyqxszDm5Fbbox76drKU0j/afQTR3I8un76gQ1flonY+BnsrsAb5FIQiCIAiCIAiCIAiCIAiCIAiCIAiCIMiH/A3MEkbxH3WUGwAAAABJRU5ErkJggg=="></div>
    <div class="it"><img alt="" src="data:image/png;base64,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"></im></div>
  </div>
</div>
<section class="contact-nous" id="cont">
  <div class="contactt">
    <form action="ind.php"class="formulaire"method="post">
      <div class="pageTitle titre">Contact Us </div>
      <div class="secondaryTitle titre">Please fill this form to contact us.</div>
      <input type="text" class="namee formEntry" name="name" placeholder="Name" />
      <input type="text" class="emaill formEntry"  name="email" placeholder="Email"/>
      <textarea class="message formEntry" placeholder="Message"  name="subject"></textarea>
 
      <button class="submitt formEntry" type="submit" name="submit"  onclick="thanks()">Submit</button>
    </form>
  </div>
 </section>
<section class="pieds_page">
  <footer>
    <div class="row">
        <div class="col">
            <h1 class="footer_logo"> ParaMarket</h1>
            <p class="footer_about">Paramarket is an online sales site for parapharmaceutical products.
               It is today the largest online parapharmacy. Health, beauty, well-being, 
               slimming products... You benefit from low prices, a wide choice of ranges and all your favorite laboratories. All products are parapharmaceuticals, so they are over the counter and do not require prescriptions.
            </p>
        </div>
        <div class="col">
            <h3>Office <div class="bottom_line"><span></span></div></h3>
            <p>Al Mikat Para Medic  </p> 
            <p>hay Nahda 1 grp. Al Aahd</p>
            <p>n° 376 - Rabat - Maroc</p>
            <p class="footer_email">ParaMarket@gamil.com</p>
            <h4>+21245958195</h4>
        </div>
        <div class="col">
            <h3>Links <div class="bottom_line"><span></span></div></h3>
            <ul>
                <li><a href="file:///C:/Users/Utilisateur/OneDrive/Documents/pfe/navbar/navbar.html#">HOME</a></li>
                <li><a href="">ABOUT</a></li>
                <li><a href="">SERVICE</a></li>
                <li><a href="">CONTACT US</a></li>
            </ul>
        </div>
        <div class="col">
            <h3>Newsletter <div class="bottom_line"><span></span></div></h3>
            <form>
                <ion-icon class="icon" name="mail"></ion-icon>
                <input type="email" placeholder="Enter your email" required>
                <button type="submit"><ion-icon class="icon_right" name="arrow-round-forward"></ion-icon></button>
            </form>
            <div class="social_icons">
              <i class="fa-brands fa-facebook" style="color: #74dae2;" ></i>
              <i class="fa-brands fa-whatsapp" style="color: #74dae2;"></i>
              <i class="fa-brands fa-twitter" style="color: #74dae2;"></i>
              <i class="fa-brands fa-instagram" style="color: #74dae2;"></i>
            </div>
        </div>
    </div>
    <hr>
    <div class="copyright">
      Made with <i class="fa-solid fa-heart" style="color:#ea9723;"></i>
      by <a href="" style="color: #ea9723;">our team</a> for our clients
    </div>
 </footer> 
</section>
<script>
  const faqs = document.querySelectorAll('#faqs article');

  faqs.forEach(faq => {
      faq.addEventListener('click', () => {
          const icon = faq.querySelector('i');
          const answer = faq.querySelector('p');

          faq.classList.toggle('open');

          if (faq.classList.contains('open')) {
              icon.classList.remove('fa-plus');
              icon.classList.add('fa-minus');
              answer.style.display = 'block';
          } else {
              icon.classList.remove('fa-minus');
              icon.classList.add('fa-plus');
              answer.style.display = 'none';
          }
      });
  });

</script>
<script type="text/javascript">
  var slides= document.querySelectorAll('.slide');
  var btns = document.querySelectorAll('.btn');
  let currentSlide = 1;
   

var repeat = function(activeClass){
  let active= document.getElementsByClassName('active');
  let i=1;
  var repeater=() =>{
    setTimeout(function(){
      [...active].forEach((activeSlide)=>{
        activeSlide.classList.remove('active')
      });
      slides[i].classList.add('active');
      btns[i].classList.add('active'); 
      i++;
      if(slides.length==i){
        i=0;
      }
      if(i>=slides.length){
        return;
      }
      repeater();
    },1900);
  }
  repeater();
}
repeat();
</script>


</body>
</html>


