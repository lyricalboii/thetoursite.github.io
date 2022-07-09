<!-- <%
    Dim dbm1
    set dbm1 = createobject("ADODB.connection")
    dbm1.open "DSN=itt"


    ' dbm1.execute("create table book(fname varchar(10) primary key,lname varchar(10),pnumber int(10), email varchar(10), ddate int(10), adate int(10))")
    ' response.write "table created"

    ' Dim unam
    ' unam = request.form("uname")
    ' lnamee = request.form("lname")
    ' dbm1.execute("insert into hello values('"&unam&"','"&lnam&"')")

    set rs = server.createobject("ADODB.recordset")
    sql = "select * from booking"
    rs.open sql,dbm1

    Dim a,b,d,e,f

    a = rs("first")
    b = rs("last")
   
    d = rs("maill")
    e = rs("dedate")
    f = rs("aedate")
%> -->

<?php
require "../website1/asp/db.php";
$sql = "SELECT * FROM `booking`";
$result = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admincss/booking.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
         @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Zen+Tokyo+Zoo&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Smooch&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap');
        .section1{
                background-color: black;
                    line-height: 45px;
        }
        .section1 p{
            font-family: 'Roboto', sans-serif;
            font-size: large;
            text-align: center;
            color: white;
        }
        .logo{
            font-size: 47px;
              /* font-family: "Zen Tokyo Zoo", cursive; */
              font-family: 'Smooch', cursive;
              margin-top: 6px;
              color: white;
              margin-left: 60px;
               margin-top: 25px;
        }
        .menu ul{
            color: white;
        }
        .menu a{
                margin-left: 5px;
        }

        .menu_1 {
background-color: white;
    color: black;
    padding-left: 78px;
    border-radius: 70px;
    font-size: 17px;
    padding-top: 2px;
    padding-bottom: 2px;
    margin-bottom: 17px;
}

.menu_1:hover{
    background-color: silver;
    color: black;
}

.add{
    text-decoration: none;
    color: white;
    padding: 7px;
    background: black;
    margin-right: 5px;
}

.container {
    margin-left: 53%;
}

h2.h2_1 {
    margin-left: 82%;
}

.table_1{
  width: 80%;
  background-color: white;
}

.th_1{
  height: 50px;
  font-size: 17px;
  background-color: black;
  color: white;
}

.td_1{
  height: 50px;
}

.h3_1{
    font-size: 25px;
}
.search{
    background: white;
    font-size: 15px;
    size: 50px;
}
.searchbtn{
    font-weight: 600;
    background-color: black;
    text-decoration: none;
    color: white;
    padding: 5px;
    background: black;
    margin-right: 5px;
    border-radius: 7px;
}

    </style>
    <title>Admin Panel</title>
</head>
<body>
    <div class="body">
        <div class="section1">
        <div class="logo">
                Exploraholic
              
            </div>
            <div class="menu">
                <ul>

                <div class="menu_1">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                    <a href="../adminasp/index.php">Home</a><br>
                    </div>

                    <div class="menu_1">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <a href="../adminasp/user.php">Manage Users</a><br>
                    </div>


                    <div class="menu_1">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <a href="../adminasp/booking.php">Manage Booking</a><br>
                    </div>


                    <div class="menu_1">
                    <i class="fa fa-bus" aria-hidden="true"></i>
                    <a href="../adminasp/packageforms.php">Manage Packages</a><br>
                    </div>


                </ul>
            </div>
        </div>
        <div class="section2">
            <h2 class="h2_1">Manage Booking</h2>
             <div class="container">
             <a href="../website1/booking/booking.html" class="add">
             Add New Booking</a>
             
             <form class="form" method="post"  action="bookingsearch.php" style="margin-top: 30px;">
    <input type="text" name="name" class="search" placeholder="Search Via FirstName">
    <button type="submit" name="save" class="searchbtn">Search</button>
  </form>
           </div> <br><br>
            <center>
            <h3 class="h3_1" align="center">All Booking</h3>
            <table border="1" class="table_1">
<tr>    
<th class="th_1">First Name</th>
<th class="th_1">Last Name</th>
<th class="th_1">Phone Number</th>
<th class="th_1">Email</th>
<th class="th_1">Departure Date</th>
<th class="th_1">Arrival Date</th>
<th class="th_1">Created Date</th>
<th class="th_1">Action</th>

</tr>
<?php
while($row = mysqli_fetch_assoc($result)){


?>
<tr>    
<td class="td_1" align="center"><?php echo $row['first'] ?></td>
<td class="td_1" align="center"><?php echo $row['last'] ?></td>
<td class="td_1" align="center"><?php echo $row['phoneno'] ?></td>
<td class="td_1" align="center"><?php echo $row['email'] ?></td>
<td class="td_1" align="center"><?php echo $row['ddate'] ?></td>
<td class="td_1" align="center"><?php echo $row['adate'] ?></td>
<td class="td_1" align="center"><?php echo $row['date'] ?></td>
<td class="td_1" align="center">
<form action="booking1.php" method="get">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="submit" name="submit" value="Remove" class="add" style="cursor: pointer;">
</form>
</td>

</tr>

<?php
}
?>

</table>
            </center>
        </div>
    </div>
</body>
</html>