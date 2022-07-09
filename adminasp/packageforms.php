<!-- <%
    Dim dbm1
    set dbm1 = createobject("ADODB.connection")
    dbm1.open "DSN=itt"
    
    set rs = server.createobject("ADODB.recordset")
    sql = "select * from package"
    rs.open sql,dbm1

  
%> -->

<?php
require "../website1/asp/db.php";

$sql = "SELECT * FROM `package`";
$result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Add Package Details</title>
    <style>
             @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Zen+Tokyo+Zoo&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Smooch&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap');
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
              margin-top: 25px  ;
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
    margin-left: 77%;
}

h2.h2_1 {
        margin-left: 80%;
}
        
        .body{
    display: flex;
}


   .section1{
                background-color: black;
                    line-height: 45px;
                    height: 830px;
    width: 25%;
        }

.menu a{
    margin-right: 40px;
    text-decoration: none;
    text-align: center;
    justify-content: center;
    color: black; 
}


.section2{
    background-color: rgb(255, 255, 255);
    height: 830px;
    width: 75%;
    margin-left: 5px;
}


.menu {
    margin-right: 40px;
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
      width: 5%;
}

.td_1{
  height: 50px;
}

.h3_1{
    font-size: 25px;
}
    </style>
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
            <h2 class="h2_1">Manage Packages</h2>
            <div class="container">
                <a href="../adminhtml/addpkg.html" class="add">Add Package</a>
            </div><br><br>
            <center>
            
             <h2>All Packages</h2>   
            <table border="1" class="table_1">
                <tr align="center">
                    <th class="th_1">Destination</th>
                    <th class="th_1">Duration</th>
                    <th class="th_1">Price</th>
                    <th class="th_1">Description</th>
                    <th class="th_1">Date</th>
                    <th class="th_1">Action</th>

                </tr>
                <!-- <% while not rs.eof %> -->
<?php
while($row = mysqli_fetch_assoc($result)){


?>
                <tr>
                    <td class="td_1" align="center"><?php echo $row['destination']; ?></td>
                    <td class="td_1" align="center"><?php echo $row['duration']; ?></td>
                    <td class="td_1" align="center"><?php echo $row['price']; ?></td>
                    <td class="td_1" align="center"><?php echo $row['descripstion']; ?></td>
                    <td class="td_1" align="center"><?php echo $row['date']; ?></td>
                    <td class="td_1" align="center">

                    <form action="packageforms1.php" method="get">
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