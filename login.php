<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 500px;
}

.container {
    margin-top: 180px;
}

.container,
form {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
form{
    
    width: 50%;
    border: 1px solid red;
    padding: 20px;
    background-color: transparent;
    border-radius: 30px;
    backdrop-filter: blur(15px);
    color:white;
}

a {
    font-size: 15px;
}

video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
}
 /* Media Queries */
 @media screen and (min-width: 375px) and (max-width:500px) {
    form{
        /* background-color:green; */
        width:100%;
        backdrop-filter:blur(2px);
    }
}
</style>

<body>
    <video autoplay muted loop>
        <source src="videos/5.mp4" />
    </video>
    <div class="container" style="position:absolute;">
        <form action="" method="POST">
            <h3 style="">Fill the form to Log In</h3>
            <div class="row col-md-6" style="margin-top: 20px">
                <div class="col">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email ID" required />
                </div>
            </div>

            <div class="row col-md-6" style="margin-top: 20px">
                <div class="col">
                    <label for="" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Your Password"
                        required />
                </div>
            </div>

            <div class="row col-md-6" style="margin-top: 20px">
                <div class="col">
                    <button type="submit" name="submit" class="btn btn-success" style="width: 100%">
                        Log In
                    </button>
                </div>
            </div>

            <div class="row col-md-6" style="margin-top: 20px">
                <div class="col">
                    <p>
                        I have no Account
                        <a href="signup.php" style="color:white; font-size:14px; font-weight:bold;">Create Account</a>
                    </p>
                </div>
            </div>
        </form>
    </div>
    <?php
      include('connection.php');
      if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $selection="SELECT * FROM `signup_users` where Email = '$email'";

        $selctionquery=mysqli_query($conn,$selection);

        $countemail=mysqli_num_rows($selctionquery);

        if($countemail){

          $ar=mysqli_fetch_array($selctionquery);

          $dbpassword=$ar['Password'];

          $_SESSION['username']=$ar['Full_Name'];

          $passwordverification=password_verify($password,$dbpassword);

          if($passwordverification){
            ?>
            <script>
            alert('You are Logged In!');
            location.replace('insertion.php');
            </script>
            <?php
          }
          else{
            ?>
            <script>
            alert('Invalid Password');
            </script>
            <?php
          }
        }
        else{
          ?>
            <script>
            alert('Email Is not exists Sign Up first!');
            location.replace('signup.php');
            </script>
        <?php
        }
      }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>