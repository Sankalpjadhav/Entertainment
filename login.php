<!DOCTYPE html>
<?php
session_start();

   include 'db_connect.php';
   function Validate($data){
     $data= trim($data);
     $data = stripslashes($data);
     $data=htmlspecialchars($data);
     return $data;
   }
   $error='';
   $count=0;
   if (isset($_SESSION['login_user'])) {
     header("Location:about.php");
   }
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      // username and password sent from form
      $number = Validate($_POST['number']);
      $password = $_POST['password'];
      echo $number;
      echo $password;
      if(isset($_POST['category']))
      {
        $category=$_POST['category'];
      }
      echo $category;
      if($category == 'audience')
      {
        $sql = "SELECT * FROM audiencedb  WHERE mbno='$number' AND password='$password'";
        $result = mysqli_query($connection,$sql);
        echo $sql;
        $count = mysqli_num_rows($result);
        echo $count;
        $row = mysqli_fetch_assoc($result);
        $active = $row['aid'];

        $_SESSION['aid']=$row['aid'];
        $_SESSION['fname']=$row['fname'];
        $_SESSION['lname']=$row['lname'];
        $_SESSION['mobile']=$row['mbno'];
        $_SESSION['email']=$row['email'];



        if($count == 1)
        {
           $_SESSION['login_user'] = $number;
           header("Location: about.php");
        }
      }
      if($category == 'comedian')
      {
        $sql = "SELECT * FROM comediandb  WHERE mobile='$number' AND password='$password'";
        $result = mysqli_query($connection,$sql);
        echo $sql;
        $count = mysqli_num_rows($result);
        echo $count;
        $row = mysqli_fetch_assoc($result);
        $active = $row['id'];

        $_SESSION['id']=$row['id'];
        $_SESSION['fname']=$row['firstName'];
        $_SESSION['lname']=$row['lastName'];
        $_SESSION['mobile']=$row['mobile'];
        $_SESSION['email']=$row['email'];
        $_SESSION['typeComedy']=$row['typeComedy'];


        if($count == 1)
        {
           $_SESSION['login_user'] = $number;
           header("Location: about.php");
        }
      }
      /*if($category == 'comediandb')
      {
        $sql = "SELECT * FROM comediandb WHERE mobile='$number' AND password='$password'";

        $result = mysqli_query($connection,$sql);
        echo $sql;
        $count = mysqli_num_rows($result);
        echo $count;
        $row = mysqli_fetch_assoc($result);
        $active = $row['id'];


        $_SESSION['fname']=$row['firstName'];
        $_SESSION['lname']=$row['lastName'];
        $_SESSION['mobile']=$row['mobile'];
        $_SESSION['email']=$row['email'];
        $_SESSION['typeComedy']=$row['typeComedy'];
        if($count == 1)
        {
           $_SESSION['login_user'] = $number;
           header("Location: about.php");
        }
      }*/
      if($count<=0)
      {
         $error = '<span style="color:red;text-align:center;">Your Login Name or Password is invalid';
      }
   }
?>

<html lang="en" >

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Login</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/login.css">


</head>

<body>

    <div class="login-form col-sm-12 col-md-6 col-md-offset-4">
    <form  method="post" action="">
     <h1>Login</h1>
     <div class="form-group ">
       <input type="number" name="number" class="form-control" aria-describedby="number" placeholder="Contact Number" id="number" required>
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" name="password" class="form-control" id="password" placeholder="Password">
       <i class="fa fa-lock"></i>
     </div>
     <div class="form-group" style="text-align:center;">

       <!--<input type="radio" class="form-control" name="category" value="comediandb" required>Comedy<br>

       <input type="radio" class="form-control form-control-sm" name="category" value="audiencedb" required>Audience<br> -->


     <small id="number" class="form-text text-muted">We'll never share your email with anyone else.</small>
        <select class="form-control" name="category">
          <option  value="comedian">COMEDIAN</option>
          <option  value="audience">AUDIENCE</option>

        </select>
     </div>
     <div style="text-align:center;">  <span><?php echo $error; ?></span></div>


     <button type="submit" name="login" class="log-btn" >Log in</button>
     <p class="message">Forgot password? <a href="pwdreset.php">Enter new password</a></p>
<p class="message">Not registered? <a href="sign1.php">Create an account</a></p>

</form>
   </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script  src="js/login.js"></script>




</body>

</html>
