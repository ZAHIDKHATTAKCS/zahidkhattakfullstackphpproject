<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>
<style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 700px;
}

.container,
form {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
form{
    backdrop-filter:blur(15px);
    color:white;
    width: 50%;
    border: 1px solid red;
    padding: 10px;
    border-radius: 30px;
}

a {
    text-decoration: none;
    font-size: 20px;
}
    video {
        width: 100%;
        height: 130%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
    }

    /* Media Queries */
    @media screen and (min-width: 375px) {
    form{
        /* background-color:green; */
        width:100%;
        backdrop-filter:blur(2px);
    }
}

    /* Laptop One */
    @media only screen and (min-width: 600px){
	form{
        width:50%;
        /* background-color:yellow; */
    }
    }
    
</style>

<body>
    <video autoplay muted loop>
        <source src="videos/4.mp4" />
    </video>
    <div class="container" style="position:absolute;">
        <form action="" method="POST" style="">
            <h3>Fill the form to Sign Up</h3>

            <div class="row col-md-6" style="margin-top: 20px">
                <div class="col">
                    <label for="" class="form-label">Full Name</label>
                    <input type="text" name="fname" class="form-control" placeholder="Enter Your Name" required />
                </div>
            </div>

            <div class="row col-md-6" style="margin-top: 20px">
                <div class="col">
                    <label for="" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Address" required />
                </div>
            </div>

            <div class="row col-md-6" style="margin-top: 20px">
                <div class="col">
                    <label for="" class="form-label">Phone Number</label>
                    <input type="number" name="pno" class="form-control" placeholder="Enter Your Number" required />
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
                    <label for="" class="form-label">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" placeholder="Enter Your password Again"
                        required />
                </div>
            </div>

            <div class="row col-md-6" style="margin-top: 20px">
                <div class="col">
                    <button type="submit" name="submit" class="btn btn-primary" style="width: 100%">Sign Up</button>
                </div>
            </div>

            <div class="row col-md-6" style="margin-top: 20px">
                <div class="col">
                    <p>
                        Already have Account
                        <a href="login.php">Log In</a>
                    </p>
                </div>
            </div>
        </form>
    </div>


    <?php
    include('connection.php');

    if (isset($_POST['submit'])) {
        $Full_Name = $_POST['fname'];
        $Email = $_POST['email'];
        $Phone_Number = $_POST['pno'];
        $Password = $_POST['password'];
        $Confirm_Password = $_POST['cpassword'];


        $Epassword = password_hash($Password, PASSWORD_BCRYPT);
        $Econfirmpassword = password_hash($Confirm_Password, PASSWORD_BCRYPT);

        $selectemail = "select * from signup_users where Email = '$Email'";

        $emailselectionquery = mysqli_query($conn, $selectemail);

        $emailcounts = mysqli_num_rows($emailselectionquery);
        if ($emailcounts > 0) {
            ?>
    <script>
    alert('Email already exists');
    </script>
    <?php
        } else {
            if ($Password === $Confirm_Password) {
                $insertquery = "INSERT INTO `signup_users`(`Id`, `Full_Name`, `Email`, `Phone_Number`, `Password`, `Confirm_Password`) VALUES ('','$Full_Name','$Email','$Phone_Number','$Epassword','$Econfirmpassword')";
                $insert = mysqli_query($conn, $insertquery);
                if ($insert) {
                    ?>
    <script>
    alert('You are Successfuly Sign Up Now go to log in');
    location.replace('login.php')
    </script>
    <?php
                } else {
                    echo "query eror";
                }
            } else {
                ?>
    <script>
    alert('Passowrds are not matching');
    </script>
    <?php
            }
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>