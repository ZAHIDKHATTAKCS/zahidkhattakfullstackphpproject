<?php
    include('connection.php');
    $getid=$_GET['id'];
    
    $deletionquery="delete from user_registration where Id='$getid'";
    
    $delete=mysqli_query($conn,$deletionquery);
    // if($delete){
    //     ?>
         <script>
            alert('Record Deleted Successfully');
            location.replace('dbdata.php');
    //     </script>
        <?php
    // }
    // else{
    //     ?>
         <script>
    //         alert('Error in Deletion query')
    //     </script>
        <?php
    // }
?>