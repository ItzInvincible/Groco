
<?php include("db.php"); ?>


<!dOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration FORM </title>
    <link rel="stylesheet" href="registration.css" >

  </head>

  <body>

    <div class="container">
        <form action="" method="POST">
        <div class="title">Registration Form </div>
      <div class="form">
        <div class="input_field">
            <label>First name</label>
            <input type="text" class="input" name="fn">
            
            
        </div>
        <div class="input_field">
            <label>Last name</label>
            <input type="text" class="input" name="ln">
        </div>
        <div class="input_field">
            <label>password</label>
            <input type="password" class="input" name="ps">
        </div>
        <div class="input_field">
            <label>Confirm password</label>
            <input type="password" class="input" name="cp">
        </div>
        <div class="input_field">
            <label>Gender</label>
           <select class="selectbox" name="gn">
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
           </select>
        </div>
        <div class="input_field">
            <label>Email Address</label>
            <input type="text" class="input" name="em">
        </div>
        <div class="input_field">
            <label>phone Number</label>
            <input type="text" class="input" name="pn">
        </div>
        <div class="input_field">
            <label>Address</label>
            <textarea class="textarea" name="add"></textarea>
        </div>
        <div class="input_field terms">
            <label class="check">
                <input type="checkbox" required>
                <span class="checkmark"></span>
            </label>
            <p>Agree to terms and conditions</p>
        </div>
        <div class="input_field">
            <input type="submit" value="Register" class="btn" name="register">
      </div>
      </div>
        </form>
    </div>
  </body>
</html>
      
<?php



if($_POST['register'])
   {
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $ps = $_POST['ps'];
    $cp = $_POST['cp'];
    $gn = $_POST['gn'];
    $em = $_POST['em'];
    $pn = $_POST['pn'];
    $add = $_POST['add'];

    if($fn != "" && $ln != "" && $ps != "" && $cp != "" && $gn != "" && $em != "" && $pn != "" && $add != "")
     {
    $query = "INSERT INTO info VALUES('$fn','$ln','$ps','$cp','$gn','$em','$pn','$add')";
    $data = mysqli_query($conn,$query);
   
   ?>
   <meta http-equiv = "refresh" content = "2; url = http://localhost/project/login.php?"/>
   <?php
     }
   else
   {
    echo "<script>alert('Fill the Form');</script>";
   }
}

   ?>
   
