<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Insertion</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
        *{
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
        backdrop-filter: blur(5px); /* this is used for blur property in css */
        /* background-color: #ffffff10;         */
        padding: 30px;
        margin-top: 10px;
      }
      .container_fulid {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
      }
    </style>
  </head>
  <body>
    <h2>Update Your Data Carefully!</h2>
    <form action="" method="post">

    <?php
        include('connection.php');

        $GETID=$_GET['id'];

        $sqry="select * from user_registration where id = '$GETID'";

        $selecti=mysqli_query($conn,$sqry);

        $fetchdata=mysqli_fetch_array($selecti);

        if(isset($_POST['submit'])){
          $Full_Name=$_POST['name'];
          $Father_Name=$_POST['fname'];
          $Class_Number=$_POST['cno'];
          $section=$_POST['section'];
          $Phone_Number=$_POST['pno'];
          $Place=$_POST['place'];

          $updatequery="UPDATE `user_registration` SET `Id`='$GETID',`Full_Name`='$Full_Name',`Father_Name`='$Father_Name',`Class_No`='$Class_Number',`Section`='$section',`Phone_Number`='$Phone_Number',`Tour_To`='$Place' WHERE Id = '$GETID'";

          $update=mysqli_query($conn,$updatequery);
          if($update){
            ?>
            <script>
              alert('Your Data is updated Thanks!');
              location.replace('dbdata.php');
            </script>
            <?php
          }
          else{
            ?>
            <script>
              alert('Error in update query');
            </script>
            <?php
          }
        }
      ?>
      <h4 class="text-capitalize" style="text-align: center">
        Update Your to Reconfirm your seat
      </h4>
      
      <div class="row col-md-12" style="margin-top: 20px;">
        <div class="col">
          <label for="" class="form-label" style="font-weight: bold;">Full Name</label>
          <input type="text" name="name" class="form-control" placeholder="Enter your Full Name Here" value="<?php echo $fetchdata['Full_Name'];?>" required >
        </div>
      </div>

      <div class="row col-md-12" style="margin-top: 20px;">
        <div class="col">
          <label for="" class="form-label" style="font-weight: bold;">Father Name</label>
          <input type="text" name="fname" class="form-control" placeholder="Enter your Father Name Here" value="<?php echo $fetchdata['Father_Name'];?>" required>
        </div>
      </div>

      <div class="row col-md-12" style="margin-top: 20px;">
        <div class="col">
          <label for="" class="form-label" style="font-weight: bold;">Class No</label>
          <input type="text" name="cno" class="form-control" placeholder="Enter your Class Number here" value="<?php echo $fetchdata['Class_No'];?>" required>
        </div>
      </div>

      <div class="row col-md-12" style="margin-top: 20px;">
        <div class="col">
          <label for="" class="form-label" style="font-weight: bold;">Section</label>
          <input type="text" name="section" class="form-control" placeholder="Section" value="<?php echo $fetchdata['Section'];?>" required>
        </div>
      </div>

      <div class="row col-md-12" style="margin-top: 20px;">
        <div class="col">
          <label for="" class="form-label" style="font-weight: bold;">Phone Number</label>
          <input type="text" name="pno" class="form-control" placeholder="Enter your Phone Number" value="<?php echo $fetchdata['Phone_Number'];?>" required>
        </div>
      </div>

      <div class="row col-md-12" style="margin-top: 20px;">
        <div class="col">
          <label for="" class="form-label" style="font-weight: bold;">Where To Go</label>
          <input type="text" name="place" class="form-control" placeholder="Place Name Here" value="<?php echo $fetchdata['Tour_To'];?>" required>
        </div>
      </div>

      <div class="row col-md-12">
        <button type="submit" name="submit" class="btn btn-success" style="margin-top: 20px;">Update!</button>
    </div>

      <div class="row col-md-12">
        <a href="dbdata.php" class="btn btn-danger" style="margin-top: 20px;">Check Data</a>
    </div>

    </form>

      

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
