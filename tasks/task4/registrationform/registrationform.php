<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      

        var_dump($_POST);

        $errors = [];
        session_start();
        $_SESSION['name'] = $_POST['username'];
        $_SESSION['email'];
        $_SESSION['phone'];
        $_SESSION['gender'];
    

        if (empty($_POST['username'])) {
            $errors['username'] = 'User name is required';
        }
    
        if (empty($_POST['email'])) {
            $errors['email'] = 'Email is required';
        }
    
        if (empty($_POST['phone'])) {
            $errors['phone'] = 'Phone Number is required';
        }
    
        if (empty($_POST['password'])) {
            $errors['password'] = 'Password is required';
        }
    
        if (empty($_POST['passwordconfirm'])) {
            $errors['passwordconfirm'] = 'Password Confirmation is required';
        }
    
        if (!empty($_POST['password']) && !empty($_POST['password-confirm'])) {
            if (($_POST['password'] != $_POST['passwordconfirm'])) {
                $errors['passwordconfirm'] = 'please check both passwords';
            }
        }
    
        if (empty($_POST['gender'])) {
            $errors['gender'] = 'Gender is required';
        }
        if (empty($errors)){
            header("Location: http://localhost:8080/backend/tasks/task4/registrationform/registrationformcopy.php");
            
            exit();
        }
        
    }

    ?>
    <html>
    <body>
        <form method="POST">
            <label>User name:</label>
            <input name="username" >
            <span style="color: red"><?= isset($errors['username']) ? $errors['username'] : '' ?></span>
            <br>
            <br>
            <label>Email:</label>
            <input name="email" type="email">
            <span style="color: red"><?= isset($errors['email']) ? $errors['email'] : '' ?></span>
            <br>
            <br>
            <label>Phone Number:</label>
            <input name="phone">
            <span style="color: red"><?= isset($errors['phone']) ? $errors['phone'] : '' ?></span>
            <br>
            <br>
            <label>Password:</label>
            <input name="password" type="password">
            <span style="color: red"><?= isset($errors['password']) ? $errors['password'] : '' ?></span>
            <br>
            <br>
            <label>Password Confirmation:</label>
            <input name="passwordconfirm" type="password">
            <span style="color: red"><?= isset($errors['passwordconfirm']) ? $errors['passwordconfirm'] : '' ?></span>
            <br>
            <br>
            <label>Gender:</label><br>
            <input type="radio" name="gender" value="male">
            <label>Male</label>
            <input type="radio" name="gender" value="female"> 
            <label>Female</label>
            <span style="color: red"><?= isset($errors['gender']) ? $errors['gender'] : '' ?></span>

            <br>
            <br>
             <button type="submit">Register</button>
        </form>
        

    </body>
</html>