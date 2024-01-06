<?php
session_start();
?>


<!dOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LOGIN FORM </title>
    <link rel="stylesheet" href="login.css" >
  </head>



  <body>

  
    <div class="center" >
      <h1>Login </h1>
      <form action="#" method="POST" autocomplete="off">
      <div class="form">
       <input type="text" name="username" class="textfiled" placeholder="Username"><br>
        <input type="password" name="password" class="textfiled" placeholder="password">
      <div class="forgetpass"><a href="#" class="link"  onclick="message()">Forgot password ?</a>
        </div>
        <input type="submit" name="login" value="Login" class="btn" >
        
        <div class="signup">New user ?<a href="Registration.php" class="link" action="Registration.php"> Signup Here</a>
      </div>
    </div>
</form>


    <script>
      function message()
      {
        alert("yad kar le");
      }
      </script>
  </body>
</html>

<?php
include("db.php");
 
if(isset($_POST['login']))
{
  $username = $_POST['username'];
  $pwd = $_POST['password'];
  $query = "select * from info where password = '$pwd' && email = '$username' ";
  $data=mysqli_query($conn,$query);

  $total = mysqli_num_rows($data);
  if($total == 1 || $total == 2)
  {
    $_SESSION['user_name'] = $username;
    header('location:http://localhost/project/index.php');
  }
  else{
    echo "<script>alert('Enter correct Username and Password');</script>";
  }

}
?>