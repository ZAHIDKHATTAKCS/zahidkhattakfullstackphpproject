<?php
session_start();
session_destroy();
if (!isset($_SESSION['username'])) {
  ?>
  <script>
    // alert('You are Logged Out');
    location.replace('adminlogin.php');
  </script>
  <?php
}
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DB Data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <style>
      body {
        /* background: url("images/bg.jpg"); */
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      table {
        border:2px solid red;
      }
      th,
      td {
        border: 2px solid red;
        padding: 5px;
        text-align: center;
      }
      i:hover{
        cursor: pointer;
      }
      .container-fluid{
        display: flex;
        justify-content:space-between;
        align-items:center;

        height:auto;
        /* border:10px solid yellow; */
        position:relative;
      }
      video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
          }

          .container{
            display: flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            border:2px solid yellow;
            height:50%;
            width:100%;
            position:relative;
            border-radius:30px;
        backdrop-filter: blur(20px);

          }

         
    </style>
  </head>
  <body>
  <video autoplay muted loop>
        <source src="videos/5.mp4" />
    </video>

    <div class="maindiv" style="border:4px solid brown;display:flex; flex-direction:column; justify-content:center; align-items:center;">
        <!-- first table -->
        <div class="container table-responsive-sm table-responsive-md table-responsive-lg">
      <h4 style="text-align: center; position:relative; color:white;">
        Hi <?php echo $_SESSION['username']; ?> here is the User Signup Data
      </h4>
          <table style="color:white;" class="">
            <thead>
              <tr>
                <th>Id</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Delete Record</th>
              </tr>
            </thead>
            <tbody>
            
              <?php
                
                $selection2="select * from signup_users";
                $query2=mysqli_query($conn,$selection2);

                while($fetch2=mysqli_fetch_array($query2)){
                ?>
                <tr>
                <td><?php echo $fetch2['Id'];?></td>
                <td><?php echo $fetch2['Full_Name'];?></td>
                <td><?php echo $fetch2['Email'];?></td>
                <td><?php echo $fetch2['Phone_Number'];?></td>
                <td>
                  <a href="delete2.php?id=<?php echo $fetch2['Id']; ?>" class="bi bi-trash" style="color: red; font-size: 25px"></a>
                </td>
              </tr>
              <?php
                }
              ?>
              
            </tbody>
          </table>
          <div style="color:yellow; font-size:25px;">
          <span>Erase this Data</span>
          <a href="truncate2.php" class="bi bi-trash3-fill" style="color:yellow;font-size: 25px; position:relative;"></a>
          </div>
      </div><br><br>
      <div class="container table-responsive-sm table-responsive-md table-responsive-lg">
      <h4 style="text-align: center; position:relative; color:white;">
        Hi <?php echo $_SESSION['username']; ?> here is the User Registration Data
      </h4>
          <table style="color:white;">
            <thead>
              <tr>
                <th>Id</th>
                <th>Full Name</th>
                <th>Father Name</th>
                <th>Class No</th>
                <th>Phone Number</th>
                <th>Tour To</th>
                <th>Delete Record</th>
              </tr>
            </thead>
            <tbody>
            
              <?php
                
                $selection="select * from user_registration";
                $query=mysqli_query($conn,$selection);

                while($fetch=mysqli_fetch_array($query)){
                ?>
                <tr>
                <td><?php echo $fetch['Id'];?></td>
                <td><?php echo $fetch['Full_Name'];?></td>
                <td><?php echo $fetch['Father_Name'];?></td>
                <td><?php echo $fetch['Class_No'];?></td>
                <td><?php echo $fetch['Phone_Number'];?></td>
                <td><?php echo $fetch['Tour_To'];?></td>
                <td>
                  <a href="delete.php?id=<?php echo $fetch['Id']; ?>" class="bi bi-trash" style="color: red; font-size: 25px"></a>
                </td>
              </tr>
              <?php
                }
              ?>
              
            </tbody>
          </table>
          <div style="color:yellow; font-size:25px;">
          <span>Erase this Data</span>
          <a href="truncate.php" class="bi bi-trash3-fill" style="color:yellow;font-size: 25px; position:relative;"></a>
          </div>
      </div>


      
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
