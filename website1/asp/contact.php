<!-- ' <%


' Dim dbm1
'     set dbm1 = createobject("ADODB.connection")
'     dbm1.open "DSN=itt"

' Dim a,b,c 
' a = request.form("name")
' b = request.form("work")
' c = request.form("msg")




' %> -->
<?php
require "db.php";
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $work = $_POST['work'];
    $msg = $_POST['msg'];


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

        img.prt1_img {
            width: 104%;
            margin-left: -4%;
        }

        img.prt2_img {
            margin-left: 10%;
            margin-top: -15%;
        }

        hr.hr_1 {
    margin-top: 10%;
    width: 80%;
}

hr.hr_2 {
    margin-top: 5%;
    width: 80%;
}

.contact_info{
    display: flex;
    margin-left: 25%;
    gap: 10%;
    font-size: 17px;
    margin-top: 60px;
}

i.fa-solid.fa-location-dot {
    font-size: 33px;
    margin-left: 33px;
    color: coral;
}

i.fa-solid.fa-phone {
    font-size: 30px;
    margin-left: 65px;
    color: coral;
}

i.fa-solid.fa-envelope-open-text {
    font-size: 30px;
    margin-left: 50px;
    color: coral;
}

p.info1_p1 {
    margin-left: -17px;
}

p.info2_p1 {
    margin-left: 32px;
}

p.info3_p1 {
    margin-left: -10px;
}

.prt3{
  
    display: flex;
    margin-top: 10%;
    margin-left: 10%;

}

.prt3_1 {
    font-size: 17px;
    margin-left: 5%;
}

.prt3_2 {
    margin-left: 25%;
    line-height: 26px;
}

input.ip_1 {
    border: 0px;
    border-bottom: 1px solid black;
    width: 200%;
}

input.ip_2 {
    border: 0px;
    border-bottom: 1px solid black;
    width: 200%;
}

textarea.ip_3 {
    border: 0px;
    border-bottom: 1px solid black;
    width: 200%;
    padding-top: 15px;
}

input.ip_4 {
    width: 200%;
    padding: 10px;
    font-size: 15px;
    background-color: coral;
    border: 0px;
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

.msg_1 {
    margin-left: 50px;
    /* margin-top: -10px; */
    padding-bottom: 10px;
    color: green;
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
                        <li class="nav_li"><a href="../asp/index.php" class="nav_a1">Home</a></li>

                        <li class="nav_li"><a href="../asp/package.asp" class="nav_a1">Packages</a></li>
            
                        <li class="nav_li"><a href="../html/bookform.html" class="nav_a1">Bookings</a></li>
            
                        <li class="nav_li"><a href="../html/about.html" class="nav_a1">About Us</a></li>
            
                        <li class="nav_li"><a href="../html/contact.html" class="nav_a1">Contact Us</a></li>
                    </ul>
                </div>
            </nav>

            <div class="prt1">

                <img src="../assets/contact_bg.jpg" class="prt1_img">

            </div>

            <div class="prt2">
                <img src="../assets/contact.jpg" class="prt2_img">

            </div>

            <hr class="hr_1">

            <div class="contact_info">

                <div class="info_1">

                <i class="fa-solid fa-location-dot"></i>
                <br>
                <h2>Location</h2>
               <p class="info1_p1"> 203, Mota Varachha
                   <br> Near VIP Circle , Surat. </p>

            </div>

            <div class="info_2">

                <i class="fa-solid fa-phone"></i>
                <br>
                <h2>Contact Number</h2>
                <p class="info2_p1">
                     +91 9586400538
                    <br>
                    +91 7874467710
                 </p>

            </div>

            <div class="info_3">

                <i class="fa-solid fa-envelope-open-text"></i>
                <br>
                <h2>Mail Address</h2>
               <p class="info3_p1"> exploraholic@gmail.com  </p>

            </div>

            </div>

            <hr class="hr_2">

            <div class="prt3">

                <div class="prt3_1">

                  <h1> Submit Your Review Here.. </h1>

                  <p>Its all about the humans behind a brand and those <br>
                     experiencing it, were right there. In the middle.</p>

                </div>

                <div class="prt3_2">

                    <form action="../asp/contact.asp" method="post">

                        <input type="text" name="name" placeholder="Your Name" class="ip_1" required>
                        <br><br>

                        <input type="text" name="work" placeholder="Your Profession" class="ip_2" required>
                        <br><br>

                        <textarea name="msg" placeholder="Enter Your Message...." class="ip_3" required></textarea>
                        <br><br>

                        <div class="msg_1">
<!-- <%
If a <> empty AND b <> empty AND c <> empty Then
dbm1.execute("insert into review values('"&a&"','"&b&"','"&c&"')")
response.write "review submitted succsesfull"

Else 
response.write "Fill Field is Required !"


End If
%> -->

<?php
$sql = "INSERT INTO `review` ( `name`, `work`, `msg`, `date`) VALUES ( '$name', '$work', '$msg', current_timestamp())";

$result = mysqli_query($con, $sql);
if($result){
    echo "Review Submitted!";
}else{
    echo "Error..";
}
?>
                        </div>

                        <input type="submit" value="Submit Now" class="ip_4">

                    </form>

                </div>

            </div>

            
    <div class="footer">

        <footer class="footer_info"> 
            <i class="fa-solid fa-location-pin"></i> 203, Mota Varachha Near VIP Circle , Surat.
            <br><br><br><br>
  
            <i class="fa-solid fa-square-phone"></i> +91 9586400538 <br> 
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