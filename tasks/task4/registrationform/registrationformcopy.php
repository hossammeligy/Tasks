<?php
session_start();
$username= $_SESSION['name'];
?>
<html>
<p> User data <p>
<p style ="font-family:Courier New"> User name: <?php $username ?></p>
<!-- <p style ="font-family:Courier New"> Email: <?php echo $email ?></p>
<p style ="font-family:Courier New"> Phone number: <?php echo $phone ?></p>
<p style ="font-family:Courier New"> Gender: <?php echo $gender ?></p> -->
</html>