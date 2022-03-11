<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <script src="https://kit.fontawesome.com/2b764a02eb.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/signup.css">

</head>

<body>
    <div class="login-form">

        <h1 style="font-family: 'Open Sans', sans-serif;">Welcome Sign Up Your Account</h1>
        <div class="container">
            <div class="main">

                <div class="content">
                    <h2>Sign Up</h2>
                    <form action="#" class="login_form1" method="POST" name="form">
                        <div class="your-name-div">
                            <label class="your-name ms-3 fs-5" for="Your name">Your full name</label></br>
                            <input type="text" name="yourname12" id="yourname12" placeholder="Full Name"
                                autocomplete="none">

                        </div>
                        </br>
                        <div class="phone-number-div">
                            <label class="phone-number  ms-3 fs-5" for="Phone number"> Phone number</label></br>
                            <input type="text" name="phonenumber1" id="phonenumber1" placeholder="Your Phone number"
                                autocomplete="none">


                        </div>
                        </br>
                        <div class="email-div">
                            <label class="email ms-3 fs-5" for=" Email"> Email</label></br>
                            <input type="email" name="email1" id="email1" placeholder="Your email" autocomplete="none">

                        </div>
                        </br>
                        <label class=" ms-3 fs-5" for="Password">Password</label></br>
                        <input type="password" name="password1" id="password1." placeholder="Your password"
                            autocomplete="none">
                        <span id="pass_error">Please fill up your Password </span>
                        <br>

                        <br>
                        <div>
                            <button id="signup_btn" name="submit" type="submit" class="btn disabled">Sign Up</button>

                        </div>

                        
                    </form>


                </div>
                <div  class="form-img">
                    <img  src="images/signup.png">
                </div>
            </div>
        </div>




    </div>

    <script src="js/signup.js"></script>
</body>

</html>

<?php


include "connection.php";

if(isset($_POST['submit'])){

    $full_name = $_POST['yourname12'];
    $phone_number = $_POST['phonenumber1'];
    $email = $_POST['email1'];
    $password = $_POST['password1'];
    $str_password = password_hash($password, PASSWORD_BCRYPT);

    $insertquery = " INSERT INTO user_signup(full_name, phone_number, email, password) VALUES ('$full_name','$phone_number','$email','$str_password') ";

    
    $signup_success =  mysqli_query($connection, $insertquery);

    if($signup_success){
        ?>
        <script>
            // we will change this in more better style.
            alert("SIGNUP SUCCESSFUL")
        </script>
<?php
    }

}

?>