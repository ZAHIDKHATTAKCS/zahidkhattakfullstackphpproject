<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        ?>
        <script></script>
        <?php
        header('location:login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Insertion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: auto;
        background: url("images/bg.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        margin: 0%;
    }

    form {
        border: 2px solid red;
        border-radius: 30px;
        width: 500px;
        backdrop-filter: blur(5px);
        /* this is used for blur property in css */
        /* background-color: #ffffff10;         */
        padding: 30px;
        margin-top: 30px;
    }

    .container_fulid {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }
    video {
        width: 100%;
        height: 140%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
    }
    /* Media Queries */
 @media screen and (min-width: 375px) and (max-width:500px){
    marquee{
        position: relative;
        /* background-color:green; */
        width:100%;
        padding-left:20px;
    }
    h2{
        padding-right:40px;

    }
    form{
        /* background-color:green; */
        width:100%;
        backdrop-filter:blur(2px);
    }
    video{
        width:100%;
        height:130%;
    }
}
    </style>
</head>
<video autoplay muted loop>
        <source src="videos/2.mp4" />
    </video>
<body>

    <marquee behavior="alternate" direction="" scrollamount="3">
        <h2>Hi <span style="color: blue;"><u><?php echo $_SESSION['username'] ?></u></span> Welcome! Please fill the
            form correctly</h2>
    </marquee>
    <form action="" method="post">
        <h4 class="text-capitalize" style="text-align: center">
            Fill the form to confirm your seat
        </h4>

        <div class="row col-md-12" style="margin-top: 20px;">
            <div class="col">
                <label for="" class="form-label" style="font-weight: bold;">Full Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your Full Name Here" required>
            </div>
        </div>

        <div class="row col-md-12" style="margin-top: 20px;">
            <div class="col">
                <label for="" class="form-label" style="font-weight: bold;">Father Name</label>
                <input type="text" name="fname" class="form-control" placeholder="Enter your Father Name Here" required>
            </div>
        </div>

        <div class="row col-md-12" style="margin-top: 20px;">
            <div class="col">
                <label for="" class="form-label" style="font-weight: bold;">Class No</label>
                <input type="text" name="cno" class="form-control" placeholder="Enter your Class Number here" required>
            </div>
        </div>


        <div class="row col-md-12" style="margin-top: 20px;">
            <div class="col">
                <label for="" class="form-label" style="font-weight: bold;">Phone Number</label>
                <input type="text" name="pno" class="form-control" placeholder="Enter your Phone Number" required>
            </div>
        </div>

        <div class="row col-md-12" style="margin-top: 20px;">
            <div class="col">
                <label for="" class="form-label" style="font-weight: bold;">Where To Go</label>
                <input type="text" name="place" class="form-control" placeholder="Place Name Here" required>
            </div>
        </div>

        <div class="row col-md-12">
            <button type="submit" name="submit" class="btn btn-success" style="margin-top: 20px;">Submit</button>
        </div>

        <div class="row col-md-12">
            <a type="submit" href="logout.php" class="btn btn-danger" style="margin-top: 20px;">Log Out</a>
        </div>

    </form>

    <?php
        include('connection.php');
        if(isset($_POST['submit'])){
          $Full_Name=$_POST['name'];
          $Father_Name=$_POST['fname'];
          $Class_Number=$_POST['cno'];
          $Phone_Number=$_POST['pno'];
          $Place=$_POST['place'];

          $checkcredantials="select * from user_registration where Class_No = '$Class_Number'";

          $dbquery=mysqli_query($conn,$checkcredantials);

          $check=mysqli_num_rows($dbquery);

          if($check > 0){
            ?>
            <script>
                alert('You are already Submited your data');

                <?php
                    
                ?>

                // location.replace('login.php');
            </script>
            <?php
          }
          else{
            $insertion="INSERT INTO `user_registration`(`Id`, `Full_Name`, `Father_Name`, `Class_No`, `Phone_Number`, `Tour_To`) VALUES ('','$Full_Name','$Father_Name','$Class_Number','$Phone_Number','$Place')";

            $query=mysqli_query($conn,$insertion);
            if($query){
              ?>
      <script>
      alert('Your Registration Process is Complete! Congratulation and your form is submitted Thanks!');
      location.replace('login.php');
      </script>
      <?php
            }
            else{
              ?>
      <script>
      alert('Error in insertion query');
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