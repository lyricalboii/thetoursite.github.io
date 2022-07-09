<!-- <%
  Dim dbm1
  set dbm1 = createobject("ADODB.connection")
  ' objcon.open "DSN=itt"
  dbm1.open "DSN=itt"

 

    Dim a,b,c,d,e,f
    a = request.form("fname")
    b = request.form("lname")
    c = request.form("pnumber")
    d = request.form("email")
    e = request.form("ddate")
    f = request.form("adate")



   

    ' dbm1.execute("insert into booking values('"&fnam&"','"&lnam&"','&pnum&','"&mail&"','&ddat&','&adat&')")
    ' dbm1.execute("insert into booking values('"&fnam&"','"&lnam&"',"&pnum&",'"&mail&"','"&ddat&"','"&adat&"')")
    ' dbm1.execute("insert into booko values('"&mail&"','"&fnam&"','"&lnam&"')")
    dbm1.execute("insert into booking values('"&a&"','"&b&"','"&d&"',"&e&","&f&")")
    response.redirect("../asp/package.asp")
%> -->

<?php
require "../asp/db.php";

if(isset($_POST['fname'])){
$a = $_POST['fname'];
$b = $_POST['lname'];
$c = $_POST['pnumber'];
$d = $_POST['email'];
$e = $_POST['ddate'];
$f = $_POST['adate'];

$sql = "INSERT INTO `booking` ( `first`, `last`, `phoneno`, `email`, `ddate`, `adate`, `date`) VALUES ( '$a', '$b', '$c', '$d', '$e', '$f', current_timestamp())";

$result= mysqli_query($con,$sql);

header("Location: ../asp/booking.php");



}
?>