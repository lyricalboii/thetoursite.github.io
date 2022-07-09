<!-- <%

    Dim dbm1
    set dbm1 = createobject("ADODB.connection")
    dbm1.open "DSN=itt"


  set rs = server.createobject("ADODB.recordset")
    sql = "select * from package"
    rs.open sql,dbm1


    Dim a,b,c,d
    ' a = rs("destination")
    ' b = rs("duration")
    ' c = rs("price")
    ' d = rs("description")


%> -->
<?php
require "db.php";
$sql = "SELECT * FROM `package`";
$result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Packages</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


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

    .nav_a1:hover {
      color: #f87458;
    }

    .nav_li {
      transition: 0.9s;
    }

    .nav_li:hover {
      transform: translateY(-15px);
      transition: 0.9s;
    }

    .main_act {
      padding: 10px;
    background-color: #dfdfdf;
    display: flex;
    max-width: 100%;
    flex-wrap: wrap;
    gap: 10%;
    }

    .act_1 {
      /* border: 1px solid black; */
      width: 26%;
      background-color: white;
      transition: 1.5s;
      padding-bottom: 10px;
          margin-bottom: 20px;
    }

    .act_1:hover {
      transform: scale(1.1);
      transition: 1.5s;
      transition-delay: 0.5s;
    }

    .act1_img {
      width: 100%;
    }

    .act1_h31 {
      margin-left: 10px;
      font-size: 20px;
    }

    i.fa-solid.fa-circle-dot {
      font-size: 7px;
    }

    .act1_p1 {
      margin-left: 10px;
      font-size: 17px;
    }

    .act1_p1 {
      margin-left: 10px;
      /* color: #675e5e; */
    }

    .act2_img {
      width: 100%;
      height: 31%;
    }

    .act_2 {
      /* border: 1px solid black; */
      width: 26%;
      margin-left: 10%;
      background-color: white;
      transition: 1.5s;
    }

    .act_2:hover {
      transform: scale(1.1);
      transition: 0.5s;
      transition-delay: 0.5s;
    }


    .act_3 {
      /* border: 1px solid black; */
      width: 26%;
      margin-left: 10%;
      background-color: white;
      transition: 1.5s;
    }

    .act_3:hover {
      transform: scale(1.1);
      transition: 0.5s;
      transition-delay: 0.5s;
    }


    .act3_img {
      width: 100%;
    }

    .inclusion {
      display: flex;
      font-size: 17px;
      gap: 25px;
      margin-left: 10px;
      line-height: 25px;
      margin-top: -22px;
    }

    i.fa-solid.fa-hotel {
      margin-left: 10px;
    }

    i.fa-solid.fa-car {
      margin-left: 19px;
    }

    i.fa-solid.fa-utensils {
      margin-left: 10px;
    }

    .package1_p1 {
      margin-left: 10px;
    }

    button.package1_btn {
      width: 95%;
      margin-left: 9px;
      padding: 7px;
      background-color: coral;
      border: 0px;
    }

    .package1_btn:hover {
      background-color: black;
      color: black;
    }

    a.package1_a1 {
      text-decoration: none;
      color: white;
      font-size: 15px;
    }

    .main_act2 {
      /* border: 1px solid black; */
      padding: 10px;
      display: flex;
      background-color: #dfdfdf;
    }

    .act_4 {
      /* border: 1px solid black; */
      width: 26%;
      background-color: white;
      transition: 1.5s;
    }

    .act_4:hover {
      transform: scale(1.1);
      transition: 0.5s;
      transition-delay: 0.5s;
    }


    .act4_img {
      width: 100%;
      height: 31%;
    }

    .act_5 {
      /* border: 1px solid black; */
      width: 26%;
      margin-left: 10%;
      background-color: white;
      transition: 1.5s;
    }

    .act_5:hover {
      transform: scale(1.1);
      transition: 0.5s;
      transition-delay: 0.5s;
    }


    .act5_img {
      width: 100%;
      height: 31%;
    }

    .act_6 {
      /* border: 1px solid black; */
      width: 26%;
      margin-left: 10%;
      background-color: white;
      transition: 1.5s;
    }

    .act_6:hover {
      transform: scale(1.1);
      transition: 0.5s;
      transition-delay: 0.5s;
    }


    .act6_img {
      width: 100%;
      height: 31%;
    }

    .act_7 {
      /* border: 1px solid black; */
      width: 26%;
      margin-left: 10%;
      background-color: white;
      transition: 1.5s;
      padding-bottom: 2px;
    }

    .act_7:hover {
      transform: scale(1.1);
      transition: 0.5s;
      transition-delay: 0.5s;
    }


    .act7_img {
      width: 100%;
      height: 33%;
    }

    .footer {
      border: 1px solid black;
      margin-top: 5%;
      margin-left: -50px;
      background-color: black;
      color: white;
      padding-top: 5%;
      padding-bottom: 6%;
      padding-left: 15%;
    }

    .pn_2 {
      margin-left: 22px;
    }

    .footer_p {
      margin-left: 45%;
      margin-top: -15%;
    }

    .footer_logo {
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
  </style>
</head>

<body>

  <div class="main_div">

    <nav class="main_nav">
      <div class="logo">Exploraholic</div>
      <div class="navigation_menu">
        <ul class="nav_ul1">
            <li class="nav_li"><a href="../asp/index.php" class="nav_a1">Home</a></li>

            <li class="nav_li"><a href="../asp/package.php" class="nav_a1">Packages</a></li>

            <li class="nav_li"><a href="../asp/booking.php" class="nav_a1">Bookings</a></li>

            <li class="nav_li"><a href="../html/about.html" class="nav_a1">About Us</a></li>

            <li class="nav_li"><a href="../html/contact.html" class="nav_a1">Contact Us</a></li>

        </ul>
      </div>
    </nav>

    <div class="prt2">

      <h1 class="prt2_h11"> Activities </h1>

      <div class="main_act">

     <?php
        while($row = mysqli_fetch_assoc($result)){

        
     ?>

        <div class="act_1">

          <img src="/admin1/website1/images/pkgg.png" class="act1_img">

          <h3 class="act1_h31"> <u> <?php echo $row['destination']; ?></u> </h3>

          <p class="act1_p1"> <strong> Duration: </strong>
            <br><br>
            <?php echo $row['duration']; ?>         <br><br>

            <strong>Price:</strong>
            <br><br>

<?php echo $row['price']; ?>         </p>

          <p class="act1_p1"> <strong> Inclusions </strong> </p>

          <div class="inclusion">
            <p>
              <i class="fa-solid fa-hotel"></i> <br> 3 Star
            </p>

            <p>
              <i class="fa-solid fa-car"></i> <br> Transfer
            </p>

            <p>
              <i class="fa-solid fa-utensils"></i><br> Meals
            </p>

          </div>

          <p class="package1_p1">
           <?php
           echo $row['descripstion'];
           ?>
          </p>

          <button class="package1_btn">
            <a href="../booking/booking.html" class="package1_a1">Book Now</a>
          </button>

        </div>

        

<?php
        }
?>
       
      </div>

      <div class="footer">

        <footer class="footer_info">
          <i class="fa-solid fa-location-dot"></i> 203, Mota Varachha Near VIP Circle , Surat.
          <br><br><br><br>

          <i class="fa-solid fa-phone"></i> +91 9586400538 <br>
          <p class="pn_2"> +91 7874467710 </p>
          <br><br>

          <i class="fa-solid fa-envelope"></i> exploraholic@gmail.com

          <h3 class="footer_p">Copyright © 2022 Exploraholic. All Rights Reserved. </h3>
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