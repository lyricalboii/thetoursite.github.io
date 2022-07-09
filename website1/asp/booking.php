<!-- <%
    Dim dbm1
    set dbm1 = createobject("ADODB.connection")
    dbm1.open "DSN=itt"


    ' dbm1.execute("create table book(fname varchar(10) primary key,lname varchar(10),pnumber int(10), email varchar(10), ddate int(10), adate int(10))")
    ' response.write "table created"

    Dim unam
    unam = request.form("uname")
    ' lnamee = request.form("lname")
    ' dbm1.execute("insert into hello values('"&unam&"','"&lnam&"')")

    set rs = server.createobject("ADODB.recordset")
    sql = "select * from booking where first LIKE '"&unam&"%'"
    rs.open sql,dbm1

    Dim a,b,d,e,f

    a = rs("first")
    b = rs("last")
    d = rs("maill")
    e = rs("dedate")
    f = rs("aedate")
%> -->
<?php
require "db.php";
$u = $_COOKIE['username'];
            echo $u;
  
  
  $sql = "SELECT * FROM `booking` WHERE `first` = '$u'";

  $result = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>

    <style>

    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Zen+Tokyo+Zoo&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Smooch&display=swap');
    .main_div {
  padding-left: 50px;
  padding-top: 10px;
      margin-bottom: 30%; 
}

.table_1{
  width: 100%;
  background-color: white;
}

.th_1{
  height: 50px;
  font-size: 17px;
  background-color: coral;
}

.td_1{
  height: 50px;
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

.h1_1{
  letter-spacing: 10px;
  margin-top: 80px;
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

            <li class="nav_li"><a href="../asp/package.php" class="nav_a1">Packages</a></li>

            <li class="nav_li"><a href="../html/booking.php" class="nav_a1">Bookings</a></li>

            <li class="nav_li"><a href="/admin1/website1/html/about.html" class="nav_a1">About Us</a></li>

            <li class="nav_li"><a href="../html/contact.html" class="nav_a1">Contact Us</a></li>

          </ul>
        </div>
      </nav>

      </div>


        <center>
        <h1 class="h1_1"> Booking Details </h1> <br> <hr> <br> <br>
        <div class="table">
        <table border="1" class="table_1" style="background-color: white;">
        <tr class="tr_1">
            <th class="th_1">First Name</th>
            <th  class="th_1">Last Name</th>
            <th  class="th_1">Phone No</th>
            <th  class="th_1">Email</th>
            <th  class="th_1">Departure Date</th>
            <th  class="th_1">Arrival Date</th>
        </tr>
        <?php
        
        while($row = mysqli_fetch_assoc($result)){

        
        ?>
        <tr class="tr_2">
            
            <td class="td_1" align="center"><?php echo $row['first'] ?></td>
<td class="td_1" align="center"><?php echo $row['last'] ?></td>
<td class="td_1" align="center"><?php echo $row['phoneno'] ?></td>
<td class="td_1" align="center"><?php echo $row['email'] ?></td>
<td class="td_1" align="center"><?php echo $row['ddate'] ?></td>
<td class="td_1" align="center"><?php echo $row['adate'] ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
  </div>


        </center>
</body>
</html>