<?php
    include('connection.php');
    $truncatequery="truncate table signup_users";

    $query=mysqli_query($conn,$truncatequery);
    if($query){
        ?>
            <script>
                alert("You Erase all Data  'Signup Users' ");
                location.replace('adminlogin.php');
            </script>
        <?php
    }
?>