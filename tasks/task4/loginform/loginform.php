<html>
    <form action="login2.php" method="POST">
        <label>Email:</label>
            <input name="email" type="email">
            <span style="color: red"><?= isset($errors['email']) ? $errors['email'] : '' ?></span>
            <br>
                
        <label>Password:</label>
            <input name="password" type="password">
            <span style="color: red"><?= isset($errors['password']) ? $errors['password'] : '' ?></span>
            <br>
            <br>
        <button type="submit">login</button>
    </form>
</html>
    

