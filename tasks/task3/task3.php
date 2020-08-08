<html>
    <form action="task3-submit.php" method="POST">
<!--input -->
        <label for="fname">Full Name:</label><br>
        <input type="text" id="fname" name="fname" required><br>
        <br>************</br>
<!-- email -->
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <br>************</br>
<!-- telephone -->
        <label for="phone">Phone number:</label><br>
        <input type="tel" id="phone" name="phone" required><br>

        <br>************</br>
<!--Radio input-->

        <p> What is your job level? </p>
        <input type="radio" id="experience1" name="experience" value="Entry level">
        <label for="experience1">entry level</label><br>
        <input type="radio" id="experience2" name="experience" value="junior">
        <label for="experience2">junior</label><br>
        <input type="radio" id="experience3" name="experience" value="midlevel">
        <label for="experience3">Mid.level</label><br>
        <input type="radio" id="experience4" name="experience" value="senior">
        <label for="experience3">Senior</label><br>

        <br>************</br>
<!--CheckBox input-->
        <p>what is your preferences ?</p>  
        <input type="checkbox" id="field1" name="field[]" value="Software development">
        <label for="field1">Software development</label><br>
        <input type="checkbox" id="field2" name="field[]" value="app development">
        <label for="field2">Web development</label><br>
        <input type="checkbox" id="field3" name="field[]" value="Web development">
        <label for="field3">Apps development</label><br>
        <input type="checkbox" id="field4" name="field[]" value="IT">
        <label for="field4">IT</label><br>
        <input type="checkbox" id="field5" name="field[]" value="security">
        <label for="field5">security</label>
        <br>
        <br>************</br>
<!-- URL -->

        <label for="homepage">linkedin Url:</label><br>
        <input type="url" id="homepage" name="homepage">
        <br>
        <br>************</br>
<!--file-->

        <label for="myfile">upload your cv:</label>
        <input type="file" id="myfile" name="myfile"><br>
        <br>
        <input type="submit" value="Submit">
    </form>
</html>
