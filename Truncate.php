<?php
    include('connection.php');
    $truncatequery="truncate table user_registration";

    $query=mysqli_query($conn,$truncatequery);
    if($query){
        ?>
            <script>
                alert("You Erase all Data  'User Registrations' ");
                location.replace('adminlogin.php');
            </script>
        <?php
    }
?>