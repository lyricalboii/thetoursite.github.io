<!-- <%
  Dim dbm1
  set dbm1 = createobject("ADODB.connection")
  ' objcon.open "DSN=itt"
  dbm1.open "DSN=itt"
  ' response.write("Username Already taken ")

  ' dbm1.execute("create table tour(email varchar(20) primary key, name varchar(20),passs varchar(20))")
  ' response.write "tabel created"


  Dim name,pass,mail

  name= request.form("username")
  mail = request.form("email")
  pass = request.form("password")
  
         Application.Lock
    Application("dbbusernamee") = name
    Application.Unlock

  dbm1.execute("insert into tour values('"&mail&"','"&name&"','"&pass&"')")
  ' response.write "inserted"
  response.redirect("../asp/index1.asp")

 
%> -->

<?php
//CREATE TABLE `tour`.`register` (`sno` INT(10) NOT NULL AUTO_INCREMENT , `username` VARCHAR(30) NOT NULL , `email` VARCHAR(30) NOT NULL , `password` VARCHAR(30) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sno`)) ENGINE = InnoDB;

require "db.php";
if(isset($_POST['username'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $select = mysqli_query($con, "SELECT * FROM `register` WHERE `username` = '".$_POST['username']."'");

  // $sql = "INSERT INTO `register` ( `username`, `email`, `password`, `date`) VALUES ( '$username', '$email', '$password', current_timestamp())";
  // $result = mysqli_query($con,$sql);

  // if($result==false){
  //   // echo "Inserted";
  //   echo "Error ";
  // }else{
  //   header("Location: index.php");

  


} 

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  margin: 0;
  padding: 0;
  background: linear-gradient(120deg,#2980b9, #8e44ad);
  height: 100vh;
  overflow: hidden;
}
.center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  background: white;
  border-radius: 10px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
}
.center h1{
  text-align: center;
  padding: 20px 0;
  border-bottom: 1px solid silver;
}
.center form{
  padding: 0 40px;
  box-sizing: border-box;
}
form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 0;
}
.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}
.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #2691d9;
  transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  color: #2691d9;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
  width: 100%;
}
.pass{
  margin: -5px 0 20px 5px;
  color: #a6a6a6;
  cursor: pointer;
}
.pass:hover{
  text-decoration: underline;
}
input[type="submit"]{
  width: 100%;
  height: 50px;
  border: 1px solid;
  background: #2691d9;
  border-radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none;
}
input[type="submit"]:hover{
  border-color: #2691d9;
  transition: .5s;
}
.signup_link{
  margin: 30px 0;
  text-align: center;
  font-size: 16px;
  color: #666666;
}
.signup_link a{
  color: #2691d9;
  text-decoration: none;
}
.signup_link a:hover{
  text-decoration: underline;
}

    </style>
  </head>
  <body>
    <div class="center">
      <h1>SignUp</h1>
      <form method="post" action="../asp/register.php">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="email" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <?php
if(mysqli_num_rows($select)) {
  echo "This username already exists";
}else{
   $sql = "INSERT INTO `register` ( `username`, `email`, `password`, `date`) VALUES ( '$username', '$email', '$password', current_timestamp())";
  $result = mysqli_query($con,$sql);

  if($result==false){
    // echo "Inserted";
    echo "Error ";
  }else{
    setcookie("username","$username",time()+864000,"/");
    header("Location: index.php");
  }
}
        ?>
        <!-- <div class="pass">Forgot Password?</div> -->
        <input type="submit" value="SignUp">
        <div class="signup_link">
          Already Have an Account <a href="../html/login.html">Login</a>

        </div>
      </form>
    </div>

  </body>
</html>

