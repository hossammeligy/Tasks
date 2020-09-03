<?php

require_once('./config/dbConnect.php');
require_once('./models/student.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student = new student();

    $student->setFirstName($_POST['first_name']);
    $student->setLastName($_POST['last_name']);
    $student->setEmail($_POST['email']);
    $student->setPhone($_POST['phone']);
    $student->setBackground($_POST['background']);
    $student->setPosition($_POST['position']);

    $student->store();
}

$students = student::all();

?>

    <html>
        <body>
            <form method="POST">
                <label>First Name:</label>
                <input name="first_name">
                <br>
                <br>
                <label>Last Name:</label>
                <input name="last_name">
                <br>
                <br>
                <label>Email:</label>
                <input name="email" type="email">
                <br>
                <br>
                <label>Phone:</label>
                <input name="phone" type="phone">
                <br>
                <br>
                <label>position</label>
                <input name="position">
                <br>
                <br>
                <label>background</label>
                <input name="background">
                <button type="submit">Submit</button>
            </form>

            <h1>Student</h1>
            <table border="1" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Position</th>
                        <th>background</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($students as $student) {
                            ?>
                            <tr>
                                <td><?= $student->id ?></td>
                                <td><?= $student->first_name ?></td>
                                <td><?= $student->last_name ?></td>
                                <td><?= $student->email ?></td>
                                <td><?= $student->phone ?></td>
                                <td><?= $student->position ?></td>
                                
                                
                            </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </body>
    </html>