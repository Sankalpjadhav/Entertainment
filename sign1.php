<html>
<head>
  <title>Entertainment | Signup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="http://www.krishiyog.com/images/logo0.jpg" type="image/x-icon" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyCXFJ-lc7cHHcEklG2_oIhTnPKTWsLwHEU"></script>
  <!-- <meta name="google-signin-client_id" content="1047018957941-c99a4imf38mmr0cf6d6l3e53kojti2fs.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script> -->
</head>
<link rel="stylesheet" href="css/signup.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style media="screen">
.the-legend {
    border-style: none;
    border-width: 0;
    font-size: 14px;
    line-height: 20px;
    margin-bottom: 0;
    width: auto;
    padding: 0 10px;
    border: 1px solid rgb(14,146,3);
}
.the-fieldset {
    border: 1px solid rgb(14,146,3);
    padding: 10px;
}
</style>
<body>

  <div class="card container shadow form-bod" >
    <div class="card-body">
      <a href="#">
<span style="float:left;color:rgb(14,146,3)"><i class="fa fa-home"></i>Home</span></a>
        <h5 style="text-align:center;color:rgb(14,146,3);margin-right:50px;" class="card-title"><b>Create Account</b></h5>
        <!-- <h6 style="text-align:center;color:rgb(14,146,3);"><b>Let's create your account</b></h6> -->
      <form style="width:100%" class="form" id="form" method="post" action="signprocess.php">
        <b><div>Enter Appropriate Details</div></b>
        <div  id="headingChange">
          <fieldset class="the-fieldset">
            <legend align="center" style="color:rgb(14,146,3);font-size:15px;;" class="the-legend"><b>Choose your profile:</b></legend>
      <div class="row">


        <div class="col-md-6 col-sm col-xs-1" align="center"> <!--comedy-->
          <div class="form-group"  >
            <div class="col box"><label class="" style="padding:0px;"><img src="images\charlie.jpg" style="height:150px;width:200px;background-color:rgb(43,196,30);cursor:pointer;" alt="..." class="img-thumbnail img-check" height="150" width="150"><input type="radio" name="typeReg" value="2" id="typeReg" class="hidden" autocomplete="off"></label><label style="font-size:13px;margin-left:-20px;">Comedian</label></div>
          </div>
        </div>
        <div class="col-md-6 col-sm col-xs-1" align="center" >  <!--audience -->
          <div class="form-group">
            <div class="col box" ><label class="" style="padding:0px;"><img src="images\audience.jpg" style="height:150px;width:200px;background-color:rgb(43,196,30);cursor:pointer;" alt="..." class="img-thumbnail img-check" height="150" width="150"><input type="radio" name="typeReg" value="1" id="typeReg" class="hidden" autocomplete="off"></label><label style="font-size:13px;margin-left:-5px;">Audience</label></div>
          </div>
        </div>




        </div>





    </div>
        <div id="parent">
          <div id="seller">   <!--comedy -->
            <div id="step1">
              <div class="row">
                <div class="col form-group">
                  <label for="name">First Name <span class="required">*</span></label>
                  <input type="text" class="form-control form-control-sm" name="firstName" id="firstName" placeholder="First Name">
                  <div class="Invalid invalidFirstName">
                    Please enter your First Name
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="">Last Name<span class="required">*</span></label>
                    <input type="text" name="lastName" class="form-control form-control-sm" placeholder="Last Name" id="lastName" value="" required>
                    <div class="Invalid invalidLastName">
                      Please enter your Last Name
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="sellMbNo">Contact Number<span class="required">*</span></label>
                    <input type="number" size="10" maxlength="10"  class="form-control form-control-sm" name="sellMbNo" id="contact" placeholder="Your number">
                    <div class="Invalid invalidContact" >
                      Please enter a valid contact number
                    </div>
                  </div>
                </div>


                <div class="col">
                  <label for="exampleInputEmail1">Email address(optional)</label>
                  <input type="text" class="form-control form-control-sm" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  <div class="Invalid invalidEmail">
                    Please enter a valid Email address!
                  </div>
                </div>
              </div>

              <div id="passwordParent">
                <div  id="passwordDiv">
                  <div class="form-group">
                    <label for="password">Password<span class="required">*</span></label>
                    <input type="password"  name="password"  pattern=".{8,}"    title="Either 0 OR (8 chars minimum)"  class="form-control form-control-sm" id="password" placeholder="Password" >
                    <small class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
                    <div class="Invalid invalidPassword">

                    </div>
                  </div>

                  <div class="form-group">
                    <label for="confPassword">Confirm Password<span class="required">*</span></label>
                    <input type="password"  name="confPassword" class="form-control form-control-sm" id="confPassword" placeholder="Confirm Password" >
                    <small id="" class="form-text text-muted">Password should match.</small>
                    <div class="confPassword" style="color:red;">

                    </div>
                  </div>
                  <hr>

                </div>
              </div>
              <label for="typeSeller">Comedy Type?<span class="required">*</span></label>
              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="typeSeller">Options</label>
                </div>
                <select class="custom-select custom-select-sm" id="typeSeller" name="typeSeller">
              <option selected value="0">Choose...</option>
              <option value="insult comedy">Insult Comedy</option>
              <option value="sitcom">Sitcom</option>
              <option value="humour comedy">Humour comedy</option>
              <option value="character Comedy">Charater Comedy</option>
              <option value="Musical comedy">Musical Comedy</option>

            </select>
            <div class="Invalid invalidType">

            </div>
              </div>
              <button type="submit" class="btn btn-success btnsize" id="submitBtn" style="float:right;"  disabled>Continue</button>
              <button type="button" style="float:left;" class="btn btn-success btnsize" id="prevbtn" name="button">Previous</button>
            </div>

          </div>



          <!-- </div> -->
          <div id="buyer"> <!--audience -->
            <div id="step1">
              <div class="row">
                <div class="col-sm">
                  <label for="bName">First Name<span class="required">*</span></label>
                  <input type="text" class="form-control form-control-sm" name="firstName" id="firstName" placeholder="Your Name">
                  <div class="Invalid invalidFirstName">
                    Please enter your First Name
                  </div>
                </div>
                <div class="col-sm">
                  <div class="form-group">
                    <label for="">Last Name<span class="required">*</span></label>
                    <input type="text" name="lastName" id="lastName" placeholder="Last Name" class="form-control form-control-sm">
                    <div class="Invalid invalidLastName">
                      Please enter your Last Name
                    </div>
                  </div>


                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                  <div class="form-group">
                    <label for="BuyMbNo">Contact Number<span class="required">*</span></label>
                    <input type="number" maxlength="10" size="10" class="form-control form-control-sm" name="BuyMbNo" id="contact" placeholder="Your number">
                    <div class="Invalid invalidContact">

                    </div>
                  </div>
                </div>

                <div class="col-sm">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address(optional)</label>
                    <input type="text" class="form-control form-control-sm" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    <div class="Invalid invalidEmail">

                    </div>
                  </div>
                </div>
              </div>


              <div id="passwordParent">
                <div  id="passwordDiv">
                  <div class="form-group">
                    <label for="password">Password<span class="required">*</span></label>
                    <input type="password"  name="password"      class="form-control form-control-sm" id="password" placeholder="Password" >

                    <small class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
                    <div class="Invalid invalidPassword">

                    </div>
                  </div>

                  <div class="form-group">
                    <label for="confPassword">Confirm Password<span class="required">*</span></label>
                    <input type="password"  name="confPassword" class="form-control form-control-sm" id="confPassword" placeholder="Confirm Password" >
                    <div class="confPassword" style="color:red;">

                    </div>
                    <small id="" class="form-text text-muted">Password should match.</small>
                  </div>
                </div>

              </div>
              <button type="submit" class="btn btn-success btnsize" id="submitBtn" style="float:right;"  disabled>Continue</button>
              <button type="button" style="float:left;" class="btn btn-success btnsize" id="prevbtn" name="button">Previous</button>
            </div>
          </div>

        </div>



        <!-- <button type="submit" class="btn btn-success" id="submitBtn" onclick="return Validate()" disabled>Continue</button> -->
      </form>
    </fieldset>

    </div>
</body>

</html>
<script type="text/javascript" src="js/signupJavaScript.js">

</script>

<script type="text/javascript">


</script>
<script type="text/javascript">
$(document).ready(function(e){

    $('.img-check').click(function(e) {
      $('.img-check').not(this).removeClass('check')
      .siblings('input').prop('checked',false);
    $(this).addClass('check')
          .siblings('input').prop('checked',true);
  });

});
</script>
<script type="text/javascript">

// function getLocation() {
//   if (navigator.geolocation) {
//       navigator.geolocation.getCurrentPosition(showPosition);
//   } else {
//       alert("Geolocation is not supported by this browser.");
//   }
// }

// function showPosition(position) {
//
//   $.get("https://maps.googleapis.com/maps/api/geocode/json?latlng="+ position.coords.latitude+","+position.coords.longitude+"&key=AIzaSyBlwmaqHiQlX-HRA-U0-4jPgAhaRkHzTq8",function(data){
//     $("#ownPlaces").val(data.results[0].formatted_address);
//       // alert(data.results[0].formatted_address);
//       $("#ownCity").val(data.results[0].address_components[4].short_name);
//       $("#ownState").val(data.results[0].address_components[5].long_name);
//       $("#ownPinCode").val(data.results[0].address_components[7].long_name);
//       alert(data.results[0].address_components[7].long_name)
//       for(var i in data.results[0].address_components){
//     console.log(data.results[0].address_components[i].short_name);
// }

//   });
//
// }

</script>

<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confPassword").value;
        if (password != confirmPassword) {
            $(".confPassword").html("Passwords do not match.");
            return false;
        }
        $(".confPassword").html("");
        return true;
    }
// function contact(){
//   contact=$("#contact").val();
//   $.post("duplicationCheck.php",
//   {
//   contact:contact
// },
// function(data, status){
//   if (data!='') {
//     alert("Account already exists");
//     // $(".invalidContact").css('visibility', 'visible');
//     // $(".invalidContact").html("Contact number already Exist");
//     $("#submitBtn").attr("disabled",true);
//     $("#nextstep1").attr("disabled",true);
//
//   }else{
//     // $(".invalidContact").html("");
//     $("#submitBtn").attr("disabled",false);
//     $("#nextstep1").attr("disabled",false);
//
//   }
//
// });
// }

</script>
