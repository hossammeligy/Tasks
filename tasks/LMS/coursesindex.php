<?php
require_once('./config/dbConnect.php');
require_once('./models/instructor.php');
require_once('./models/courses.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $course = new course();

    $course->setName($_POST['coursename']);
    $course->setDescription($_POST['description']);
    $course->setInstructorId($_POST['instructorid']);
    $course->store();
    
    
}

    $instructors = Instructor::all();
    $courses = course::all();
    
    
?>

<html>
    <body>
        <form method="POST">

       
            <label>Course Name:</label>
            <input name="coursename">
            <br>
            <br>
            <labl>Description:</labl>
            <input type="textarea" name="description">
            <br>
            <br>
            <label> Instructor name:</label>
            <select name="instructorid">
                <?php
                $value;
                foreach($instructors as $instructor){
                   ?>
                   
                    <option value =<?="$instructor->id"?>> <?=$instructor->first_name," ",$instructor->last_name?></option>
                 <?php   
                }
                ?>
            </select>
            <br>        
            <br>
            <button type="submit">Submit</button>

            <h1>Course</h1>
            <table border="1" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Course name</th>
                        <th>Description</th>
                        <th>Instructor ID</th>
                   
                </thead>
                <tbody>
                    <?php
                        foreach($courses as $course) {
                            ?>
                            <tr>
                                <td><?= $course->id ?></td>
                                <td><?= $course->course_name ?></td>
                                <td><?= $course->description ?></td>
                                <td><?= $course->instructor_id?></td>
                            </tr>
                    <?php
                        }
                    ?> 
                     </tbody>
            </table>
                 

           
           

        </form>
    </body>
</html>