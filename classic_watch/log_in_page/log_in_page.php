
<?php
   
   session_start();
    
     include 'conn.php';   

    if(isset($_POST['signup']))
{
    $nm=$_POST['name'];
    $mn=$_POST['phonenumber'];
    $em=$_POST['email'];
    $psw=$_POST['pass'];
    
    $bdt=$_POST['birthdate'];
    $add=$_POST['address'];
    $city=$_POST['city'];
    $pin=$_POST['pincode'];

    $q2="insert into user_master(Name,Mobile_Number,Email_Id,Password,Birthdate,Address ,City,Pincode )  values('$nm','$mn','$em','$psw','$bdt','$add','$city','$pin')";
    if(mysqli_query($con,$q2))
    {
        $_SESSION['login']=$_POST['email'];
        $_SESSION['user_id']=$_POST['User_Id'];
        header("Location: already_user_page.php?user_id='".$data['User_id']."'");
    }
    else
    {
        header("Location: log_in_page.php");
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     
    <div class="main">

        <!-- Sign up form -->
		
        <section class="signup">
            <div class="container">
                <div class="signup-content">
				
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder=" Enter Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="phonenumber" id="phonenumber" placeholder=" Enter Your PhoneNumber"
                                 required="required" pattern="[0-9]{10,10}" title="please enter valid mobilenumber"  />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required="required" pattern="[a-z A-Z 0-9]+@[a-z 0-9]+\.[a-z]{3,3}$" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required="required" pattern="[a-z A-Z 0-9]{8,15}" title="please enter the valid password between 8 to 15 letter" />
                            </div>
                            
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-calendar"></i></label>
                                <input type="date" name="birthdate" id="birthdate" placeholder="Enter Your Birthdate" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-pin-drop" ></i></label>
                                <input type="address" name="address" id="address" placeholder="Enter Your Address" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class=></i></label>
                                <input type="text" name="city" id="city" placeholder="Enter Your City" required="required"/>
                            </div>
		            <div class="form-group"> 
                                <label for="name"><i class="zmdi zmdi-pin"></i></label>
                                <input type="text" name="pincode" id="pincode" placeholder="Enter Your City Pincode" required="required"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
       <div>
        </sectio> 
        <figure><a href="..\index.php"><img src="images/signup-image.jpg" alt="sing up image"></a></figure>
        <a href="already_user_page.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            

        

    </div>
    

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
  
</body>
</html>

