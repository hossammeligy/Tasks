<?php
require_once('./config/dbConnect.php');
require_once('./models/subject.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject = new subject();
    $subject->setSubjectName($_POST['subjectname']); 
    $subject->store();
}
    $subjects = subject::all();
    ?>

    <html>
        <body>
            <form method="POST">
                <p> Subject </p>
                <label> Name: </label>
                <input name="subjectname">
                <br>
                <br>
                <button type="submit">Submit</button>
            </form>
            
            <hr>
        <h1>Subject</h1>
            <table border="1" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                <tbody>
                <?php
                    foreach($subjects as $subject) {
                        ?>
                        <tr>
                            <td><?= $subject->id ?></td>
                            <td><?= $subject->_name ?></td>
                        </tr>
                <?php
                    }
                ?>
                </tbody>

        </body>
        
    </html>