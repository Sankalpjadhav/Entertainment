<?php
 include 'db_connect.php';

function Validate($data){
  $data= trim($data);
  $data = stripslashes($data);
  $data=htmlspecialchars($data);

  return $data;
}
include 'uniqueid.php';

//$typeReg=$_POST['typeReg'];
if ( isset($_POST['typeReg']) == 2 ) {   //comedy
  $firstName=Validate($_POST['firstName']);
  $lastName=Validate($_POST['lastName']);

  $sellerType=Validate($_POST['typeSeller']);

  $sMobNo=Validate($_POST['sellMbNo']);






  $email=Validate($_POST['email']);



  $password=md5($_POST['password']);
  $uniqueid = getUniqueId($firstName,$lastName,$sMobNo);
    $query = "INSERT INTO comediandb(id,firstName,lastName,typeComedy,mobile,email,password)
    VALUES('".$uniqueid."','".$firstName."','".$lastName."','".$sellerType."','".$sMobNo."','".$email."','".$password."')";
  mysqli_query($connection,$query);
  redirect();

}
if (isset($_POST['typeReg'])==1) {  //audience

  $firstName=Validate($_POST['firstName']);
  $lastName=Validate($_POST['lastName']);


  $sMobNo=Validate($_POST['BuyMbNo']);


  $email=Validate($_POST['email']);

  $password=md5($_POST['password']);
  $uniqueid = getUniqueId($firstName,$lastName,$sMobNo);

    $query = "INSERT INTO audiencedb(aid,fname,lname,mbno,email,password)
     VALUES('".$uniqueid."','".$firstName."','".$lastName."','".$sMobNo."','".$email."','".$password."')";
mysqli_query($connection,$query);
redirect();

}


function redirect()
{
  header("Location:#");
}

 ?>
