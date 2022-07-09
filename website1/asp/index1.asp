<%
Dim dbm1
    set dbm1 = createobject("ADODB.connection")
    dbm1.open "DSN=itt"
        b = Application("dbbusernamee")
%>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/ss.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Travel Agency</title>

  <style>
    .act_3 {
      /* border: 1px solid black; */
      width: 26%;
      margin-left: 10%;
      background-color: white;
      transition: 1.5s;
    }

    .act3_img {
      width: 100%;
    }

    .prt3 {
      margin-top: 55px;
      border: 0px;
    }

    .main_destination {
      display: flex;
      gap: 8px;
    }

    .main_destination2 {
      display: flex;
      gap: 8px;
    }

    .dest_1 {
      width: 23%;
      margin-right: 20px;
      background: url(../assets/dest1.jpg);
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-position-y: -19px;
    }

    h2.dest1_h21 {
      color: white;
      padding-top: 93px;
      background-color: #292929;
      margin-top: 0px;
      padding-bottom: 68px;
      padding-left: 124px;
      background-image: url(../assets/dest1.jpg);
      background-blend-mode: overlay;
      background-position-x: center;
      background-position-y: -9px;
      margin-left: -1px;
      background-size: cover;
      opacity: 0;
    }

    .dest1_h21:hover {
      opacity: 1;
    }

    .dest_2 {
      width: 23%;
      margin-right: 20px;
      background: url(../assets/dest2.jpg);
      background-repeat: no-repeat;
      background-position: left;
      background-size: cover;
      background-position-y: -147px;
    }

    h2.dest2_h21 {
      color: white;
      padding-top: 93px;
      background-color: #292929;
      margin-top: 0px;
      padding-bottom: 68px;
      padding-left: 124px;
      background-image: url(../assets/dest2.jpg);
      background-blend-mode: overlay;
      background-position: left;
      background-position-y: -147px;
      margin-left: -1px;
      background-size: cover;
      opacity: 0;
    }

    .dest2_h21:hover {
      opacity: 1;
    }

    .dest_3 {
      width: 23%;
      margin-right: 20px;
      background: url(../assets/dest3.jpg);
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-position-y: -65px;
    }

    h2.dest3_h21 {
      color: white;
      padding-top: 77px;
      background-color: #292929;
      margin-top: 0px;
      padding-bottom: 81px;
      padding-left: 105px;
      background-image: url(../assets/dest3.jpg);
      background-blend-mode: overlay;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-position-y: -65px;
      margin-left: -1px;
      opacity: 0;
    }

    .dest3_h21:hover {
      opacity: 1;
    }

    .dest_4 {
      width: 23%;
      margin-right: 20px;
      background: url(../assets/dest4.jpg);
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-position-y: -25px;
    }

    h2.dest4_h21 {
      color: white;
      padding-top: 77px;
      background-color: #292929;
      margin-top: 0px;
      padding-bottom: 81px;
      padding-left: 105px;
      background-image: url(../assets/dest4.jpg);
      background-blend-mode: overlay;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-position-y: -25px;
      margin-left: -1px;
      opacity: 0;
    }

    .dest4_h21:hover {
      opacity: 1;
    }

    .dest_5 {
      width: 23%;
      margin-right: 20px;
      background: url(../assets/dest5.jpg);
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-position-y: -19px;
    }

    h2.dest5_h21 {
      color: white;
      padding-top: 91px;
      background-color: #292929;
      margin-top: 0px;
      padding-bottom: 67px;
      padding-left: 124px;
      background-image: url(../assets/dest5.jpg);
      background-blend-mode: overlay;
      background-position-x: center;
      background-position-y: 1px;
      margin-left: -1px;
      background-size: cover;
      opacity: 0;
    }

    .dest5_h21:hover {
      opacity: 1;
    }

    .dest_6 {
      width: 23%;
      margin-right: 20px;
      background: url(../assets/dest6.jpg);
      background-repeat: no-repeat;
      background-position: left;
      background-size: cover;
      background-position-y: -65px;
    }

    h2.dest6_h21 {
      color: white;
      padding-top: 85px;
      background-color: #292929;
      margin-top: 0px;
      padding-bottom: 73px;
      padding-left: 124px;
      background-image: url(../assets/dest6.jpg);
      background-blend-mode: overlay;
      background-position: left;
      background-position-y: -65px;
      margin-left: -1px;
      background-size: cover;
      opacity: 0;
    }

    .dest6_h21:hover {
      opacity: 1;
    }

    .dest_7 {
      width: 23%;
      margin-right: 20px;
      background: url(../assets/dest7.jpg);
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-position-y: -19px;
    }

    h2.dest7_h21 {
      color: white;
      padding-top: 77px;
      background-color: #292929;
      margin-top: 0px;
      padding-bottom: 81px;
      padding-left: 142px;
      background-image: url(../assets/dest7.jpg);
      background-blend-mode: overlay;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-position-y: -1px;
      margin-left: -1px;
      opacity: 0;
    }

    .dest7_h21:hover {
      opacity: 1;
    }

    .dest_8 {
      width: 23%;
      margin-right: 20px;
      background: url(../assets/dest8.jpg);
      background-repeat: no-repeat;
      background-position: right;
      background-size: cover;
      background-position-y: -21px;
    }

    h2.dest8_h21 {
      color: white;
      padding-top: 77px;
      background-color: #292929;
      margin-top: 0px;
      padding-bottom: 81px;
      padding-left: 105px;
      background-image: url(../assets/dest8.jpg);
      background-blend-mode: overlay;
      background-repeat: no-repeat;
      background-position: right;
      background-size: cover;
      background-position-y: -1px;
      margin-left: -1px;
      opacity: 0;
    }

    .dest8_h21:hover {
      opacity: 1;
    }

    .main_logo {
      display: flex;
    }

    p.prt5_p1 {
    width: 43%;
    font-size: 18px;
}

.prt5 {
    display: flex;
}

.prt5_div1 {
  margin-left: 15%;
    width: 32%;
    line-height: 40px;
}

.main_act{
  background-color: #fff6f6;
}

.main_act2{
  background-color: #fff6f6;
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
}

.sub_review1 {
    border: 1px solid black;
    margin-left: 45px;
    padding-right: 25px;
    padding-left: 10px;
    width: 60%;
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

.navigation_menu {
  margin-left: 50%;
  margin-top: -47px;
  font-size: 17px;
}

  </style>

</head>

<body>
  <div class="main_div">

    <div class="prt1">
      <!-- Navigation Bar -->
      <nav class="main_nav">
        <div class="logo">Exploraholic</div>
        <div class="navigation_menu">
          <ul class="nav_ul1">
            <li class="nav_li"><a href="../asp/index.asp" class="nav_a1">Home</a></li>

            <li class="nav_li"><a href="../asp/package.asp" class="nav_a1">Packages</a></li>

            <li class="nav_li"><a href="../html/bookform.html" class="nav_a1">Bookings</a></li>

            <li class="nav_li"><a href="../html/about.html" class="nav_a1">About Us</a></li>

            <li class="nav_li"><a href="../html/contact.html" class="nav_a1">Contact Us</a></li>
            <li class="nav_li"><a href="#" class="nav_a1"><% response.write(b) %></a></li>

          </ul>
        </div>
      </nav>
      <!-- Part-1 -->
      <div class="part_1">

        <div class="part1_info">

          <h1 class="title_2">

            <span>TRAVEL IS AN INVESTMENT IN YOURSELF.</span>

          </h1>

          <p class="title_1">Dicover New Places With Us, Adventure Awaits.</p>

          <div class="last"><a href="../asp/package.asp">

              <button class="prt1_btn1">PACKAGES</button>

            </a>

          </div>
        </div>

        <div>

          <img src="../assets/background3.jpg" class="part1_bg">

        </div>
      </div>
    </div>


    <div class="prt2">

      <h1 class="prt2_h11">  Activities  </h1>

      <div class="main_act">

        <div class="act_1">

          <img src="../assets/act1.jpg" class="act1_img">

          <h3 class="act1_h31">Camping <i class="fa-solid fa-circle-dot"></i> Brahmtal</h3>

          <p class="act1_p1"> Brahmtal Trek  </p>

          <h4 class="act1_h41"> <i class="fa-solid fa-bed"></i> <strike> Rs.10,700 </strike> &nbsp; Rs.7,500 </h4>

        </div>

        <div class="act_2">

          <img src="../assets/act2.jpg" class="act2_img">

          <h3 class="act1_h31">River Rafting <i class="fa-solid fa-circle-dot"></i> Kullu </h3>

          <p class="act1_p1"> Rafting in Kullu </p>

          <h4 class="act1_h41"> <i class="fa-solid fa-bed"></i> <strike> Rs.1500 </strike> &nbsp; Rs.1111 </h4>

        </div>

        <div class="act_3">

          <img src="../assets/act3.jpg" class="act3_img">

          <h3 class="act1_h31">Scuba Diving <i class="fa-solid fa-circle-dot"></i> Havelock </h3>

          <p class="act1_p1"> Scuba Diving at Havelock with underwater photography </p>

          <h4 class="act1_h41"> <i class="fa-solid fa-bed"></i> <strike>Rs.6,500</strike> &nbsp; Rs.5,175 </h4>

        </div>

      </div>

      <div class="main_act2">

        <div class="act_4">

          <img src="../assets/act4.jpg" class="act4_img">

          <h3 class="act1_h31">Mountain Biking <i class="fa-solid fa-circle-dot"></i> Leh Ladakh</h3>

          <p class="act1_p1"> Ladakh Bike Expedtion - Leh to Leh with Turtuk Village 5N and 6D  </p>

          <h4 class="act1_h41"> <i class="fa-solid fa-bed"></i> <strike> Rs.20,500 </strike> &nbsp; Rs.17000</h4>

        </div>

        <div class="act_5">

          <img src="../assets/act5.jpg" class="act5_img">

          <h3 class="act1_h31">Paragliding <i class="fa-solid fa-circle-dot"></i> Bir</h3>

          <p class="act1_p1"> Bir Paragliding </p>

          <h4 class="act1_h41"> <i class="fa-solid fa-bed"></i> <strike> Rs.2,500 </strike> &nbsp; Rs.2,000 </h4>

        </div>

        <div class="act_6">

          <img src="../assets/act6.jpg" class="act6_img">

          <h3 class="act1_h31"> Bungee Jumping <i class="fa-solid fa-circle-dot"></i> Kolad </h3>

          <p class="act1_p1"> Bungee Jumping at Kolad  </p>

          <h4 class="act1_h41"> <i class="fa-solid fa-bed"></i> <strike> Rs.4,000 </strike> &nbsp; Rs.3,450 </h4>

        </div>

      </div>

    </div>


    <div class="prt3">

      <h1 class="prt3_h21">Explore Other Destination!!</h1>

      <div class="main_destination">

        <div class="dest_1">

          <h2 class="dest1_h21">Manali</h2>

        </div>

        <div class="dest_2">

          <h2 class="dest2_h21">Kashmir</h2>

        </div>

        <div class="dest_3">

          <h2 class="dest3_h21">Uttarakhand</h2>

        </div>

        <div class="dest_4">

          <h2 class="dest4_h21">Spiti Valley</h2>

        </div>

      </div>

      <div class="main_destination2">

        <div class="dest_5">

          <h2 class="dest5_h21">Kerala</h2>

        </div>

        <div class="dest_6">

          <h2 class="dest6_h21">Maldives</h2>

        </div>

        <div class="dest_7">

          <h2 class="dest7_h21">Goa</h2>

        </div>

        <div class="dest_8">

          <h2 class="dest8_h21">Rajasthan</h2>

        </div>



      </div>


    </div>

    <div class="prt4">

      <h1>Tours and Travel Agent</h1>

      <div class="main_logo">

        <img src="../assets/logo1.jpg" class="logo_1">

        <img src="../assets/logo2.jpg" class="logo_2">

        <img src="../assets/logo3.jpg" class="logo_3">

        <img src="../assets/logo4.jpg" class="logo_4">

        <img src="../assets/logo5.jpg" class="logo_5">

        <img src="../assets/logo6.jpg" class="logo_6">


      </div>

      <h1>Our Story</h1>
      <div class="prt5">
        

        <p class="prt5_p1">
          We are a team of dedicated professionals and we firmly believe in providing sustainable tourism. We aim to
          provide new services with maximum perfection and consistency. We always prioritize customers’ satisfaction and
          do our best to achieve it. No matter, what type of vacation you need, we have a variety of packages to fulfill
          your requirements. Our holiday packages not only provide local sight-seeing but also adventure tourism.
          <br><br>

          We respect discipline and ensure the fixed departure. We make your vacations interesting and unforgettable by
          adding the taste of spicy adventures. We offer services such as <strong> Adventure Travel Packages, Activities,
          and Fixed Departure Tours </strong> at reasonable prices.
          <br><br>

          Our remarkable services have honored us to serve <strong> Worldfly, Aguilar and Expedia, Flyswatter, and Central.</strong> Our team
          always makes sure to provide the best ever services to our clients. We continually are adopting new
          technologies to meet the ever-changing demands of the audience. <strong> Exploraholic </strong>is committed to
          providing quality services to our customers.
        </p>

        <div class="prt5_div1">
        <h2 class="div1_h21">Important Years</h2>

        <p class="div1_p1"> 2021  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;    10,000+ Tours Done & Moving Forward!</p>
        <hr>

        <p class="div1_p1"> 2019  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;    We Completed 1,000 Tourssss!</p>
        <hr>

        <p class="div1_p1"> 2016  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;   We Conducted Our First Tour</p>
        <hr>

        <p class="div1_p1"> 2015  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;   Our Founder Came Up With Idea</p>
      </div>
      </div>



    </div>

    <div class="prt6">

      <h1>Reviwes</h1>

      <div class="main_reviwe">

        <div class="review_1">

          <h3>Exploraholic Group</h3>

          <p>by David Parcle, 07-January-2021</p>


        </div>

        <div class="sub_review1">

          <h3> Very good services and support team is excellent and very cooperative. I am satisfied with Exploraholic. </h3>

         </div>

      </div>

      <div class="main_review2">

      <div class="review_1">

        <h3>Exploraholic Group</h3>

        <p>by Hennary Paul, 13-March-2021</p>



      </div>

      <div class="sub_review1">

        <h3> Its a very good job done by your team. Thank you for your Efforts. </h3>

       </div>
      </div>

      <div class="main_review3">

        <div class="review_1">
  
          <h3>Exploraholic Group</h3>
  
          <p>by John William, 15-December-2021</p>  

        </div>
  
        <div class="sub_review1">
  
          <h3> Exploraholic is an Extraordinary Company that Provided Very Nice Tour Service.  </h3>
  
         </div>
        </div>

        <button class="reviwe_btn">
          <a href="../asp/review.asp" class="review_a1">
          More Reviews
        </a>
        </button>
    </div>

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
             <a href="" style=" text-decoration: none; color: white;"> <i class="fa-brands fa-facebook-square"></i> </a>
              

             <a href="https://www.instagram.com/exploraholic._/" style=" text-decoration: none; color: white;"> <i class="fa-brands fa-instagram-square"></i> </a>
              

              <a href="#1" style=" text-decoration: none; color: white;"> <i class="fa-brands fa-twitter-square"></i> </a>
              

                <a href="#2" style=" text-decoration: none; color: white;">  <i class="fa-brands fa-linkedin"></i> </a>
              
              </h1>
      
      </footer>

   </div>

    </div>


</body>

</html>