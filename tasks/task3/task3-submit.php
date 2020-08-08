<?php
$fullName = $_POST['fname'];
$email = $_POST['email'];
$tele= $_POST['phone'];
$job= $_POST['experience'];
$preferences = $_POST['field'];
$i=0;

?>

<html>
    <p> your information has been submitted successfully </p>
        <br>************</br>

            <h1 style="color:blue;font-size:22px;font-family:Courier New" >Your informations</h1>
                <p style ="font-family:Courier New"> Full Name: <?php echo $fullName ?></p>
                <p style ="font-family:Courier New">Email: <?php echo $email ?></p>
                <p style ="font-family:Courier New">Phone Nr.: <?php echo $tele?></p>
                <p style ="font-family:Courier New"> Job level: <?php echo $job ?></p>
                <p style ="font-family:Courier New"> preferences: <?php foreach($preferences as $item) {echo $item,"," ;}?>  </p>
</html>