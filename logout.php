<?php
session_start();
session_destroy();
?>

<script>
        alert('you are logged out');
        location.replace('login.php');
    </script>
<?php
?>