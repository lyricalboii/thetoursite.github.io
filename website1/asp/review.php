

<!-- <%
    Dim dbm1
    set dbm1 = createobject("ADODB.connection")
    dbm1.open "DSN=itt"

    set rs = server.createobject("ADODB.recordset")
    sql = "select * from review"
    rs.open sql,dbm1 

    
%> -->

<?php
require "db.php";
$sql = "SELECT * FROM review";
$result = mysqli_query($con,$sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Travel Agency</title>
  <style>
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Zen+Tokyo+Zoo&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Smooch&display=swap');
.main_div {
  padding-left: 50px;
  padding-top: 10px;
}

/* Navigatin Bar */

.logo {
  font-size: 47px;
  /* font-family: "Zen Tokyo Zoo", cursive; */
  font-family: 'Smooch', cursive;
  margin-top: 6px;
  margin-left: 60px;
}

      .main_nav {
  width: 101%;
  margin-left: -58px;
  background-color: snow;
  position: fixed;
  top: 0;
  z-index: 1;
}

.navigation_menu {
  margin-left: 63%;
  margin-top: -47px;
  font-size: 17px;
}

.nav_ul1 {
  display: flex;
  list-style: none;
  gap: 45px;
}

.nav_a1 {
  color: black;
  text-decoration: none;
}

.nav_a1:hover{
  color: #f87458;
}

.nav_li{
  transition: 0.9s;
}

.nav_li:hover {
  transform: translateY(-15px);
  transition: 0.9s;
}

.footer{
    border: 1px solid black;
    margin-top: 5%;
    margin-left: -50px;
    background-color: black;
    color: white;
    padding-top: 5%;
    padding-bottom: 6%;
    padding-left: 15%;
}

.pn_2{
    margin-left: 22px;
}

.footer_p{
    margin-left: 45%;
    margin-top: -15%;
}

.footer_logo{
    margin-left: 45%;
    margin-top: 5%;
}

i.fa-brands.fa-instagram-square {
    margin-left: 30px;
}

i.fa-brands.fa-twitter-square {
    margin-left: 30px;
}

i.fa-brands.fa-linkedin {
    margin-left: 30px;
}

.main_reviwe {
    
    display: flex;
}

.review_1 {
    width: 17%;
    border: 1px solid black;
    padding-left: 10px;
    padding-bottom: 10px;
    background-color: #e9f6ff;
    margin-top: 20px;
}

.sub_review1 {
    border: 1px solid black;
    margin-left: 45px;
    padding-right: 25px;
    padding-left: 10px;
    width: 60%;
    margin-top: 21px;
    background-color: #e9f6ff;
}

.main_review2 {
    display: flex;
    margin-top: 30px;
}

.main_review3 {
    display: flex;
    margin-top: 30px;
}

button.reviwe_btn {
    margin-top: 17px;
    padding: 10px;
    width: 10%;
    margin-left: 73%;
    background-color: #1e588b;
    border: 0px;
    color: white;
    font-size: 15px;
}

.reviwe_btn:hover{
  background-color: silver;
  color: black;
}

i.fa-solid.fa-star {
    color: coral;
}

i.fa-solid.fa-star-half-stroke {
    color: coral;
}

i.fa-regular.fa-star {
    color: coral;
}

a.review_a1 {
    text-decoration: none;
    color: white;
}

  </style>

</head>

<body>
  <div class="main_div">

      <!-- Navigation Bar -->
      <nav class="main_nav">
        <div class="logo">Exploraholic</div>
        <div class="navigation_menu">
          <ul class="nav_ul1">
            <li class="nav_li"><a href="../asp/index.php" class="nav_a1">Home</a></li>

            <li class="nav_li"><a href="../asp/package.php" class="nav_a1">Packages</a></li>

            <li class="nav_li"><a href="../html/bookform.html" class="nav_a1">Bookings</a></li>

            <li class="nav_li"><a href="/admin1/website1/html/about.html" class="nav_a1">About Us</a></li>

            <li class="nav_li"><a href="../html/contact.html" class="nav_a1">Contact Us</a></li>

          </ul>
        </div>
      </nav>


      <div class="prt6">

        <h1>Reviwes</h1>
        <!-- <% 
while not rs.eof 
%>
   -->
   <?php
while($row = mysqli_fetch_assoc($result)){


   ?>
        <div class="main_reviwe">
  
          <div class="review_1">

            
  
            <h3><?php echo $row['name']; ?></h3>
  
            <p><?php echo $row['work']; ?></p>
  
  
          </div>
  
          <div class="sub_review1">
  
            <h3> <?php echo $row['msg']; ?></h3>
  
           </div>
  
        </div>
  <?php
}
  ?>
  
        
      <div class="footer">

        <footer class="footer_info"> 
            <i class="fa-solid fa-location-dot"></i> 203, Mota Varachha Near VIP Circle , Surat.
            <br><br><br><br>
  
            <i class="fa-solid fa-phone"></i> +91 9586400538 <br> 
           <p class="pn_2"> +91 7874467710 </p> 
            <br><br>
  
            <i class="fa-solid fa-envelope"></i> exploraholic@gmail.com 
  
            <h3 class="footer_p">Copyright © 2022 Exploraholic. All Rights Reserved.  </h3>
                <h1 class="footer_logo">
                <i class="fa-brands fa-facebook-square"></i>
                
  
                <i class="fa-brands fa-instagram-square"></i>
                
  
                <i class="fa-brands fa-twitter-square"></i>
                
  
                <i class="fa-brands fa-linkedin"></i>
                
                </h1>
        
        </footer>
  
     </div>
  
      </div>
  
  
  </body>
  
  </html>