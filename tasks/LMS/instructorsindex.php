<?php

require_once('./config/dbConnect.php');
require_once('./models/instructor.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $instructor = new Instructor();

    $instructor->setFirstName($_POST['first_name']);
    $instructor->setLastName($_POST['last_name']);
    $instructor->setEmail($_POST['email']);
    $instructor->setPhone($_POST['phone']);
    $instructor->setOccupation($_POST['occupation']);
    $instructor->setPosition($_POST['position']);

    $instructor->store();
}

$instructors = Instructor::all();

?>



<html>
    <body>
        <form method="POST">
            <label>First Name</label>
            <input name="first_name">
            <br>
            <br>
            
            <label>Last Name</label>
            <input name="last_name">
            <br>
            <br>            
            <label>Email</label>
            <input name="email">
            <br>
            <br>            
            <label>Phone Number</label>
            <input name="phone">
            <br>
            <br>            
            <label>Occupation</label>
            <input name="occupation">
            <br>
            <br>            
            <label>Position</label>
            <input name="position">
            <br>
            <br>
            <button type="submit">Submit</button>
        </form>

        <hr>

        <h1>Instructors</h1>

        <table border="1" cellspacing="0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Occupation</th>
                    <th>Position</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($instructors as $instructor) {
                        ?>
                        <tr>
                            <td><?= $instructor->id ?></td>
                            <td><?= $instructor->first_name ?></td>
                            <td><?= $instructor->last_name ?></td>
                            <td><?= $instructor->email ?></td>
                            <td><?= $instructor->phone ?></td>
                            <td><?= $instructor->occupation ?></td>
                            <td><?= $instructor->position ?></td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>
