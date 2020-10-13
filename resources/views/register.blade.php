<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Sanberbook</title>
</head>
<body>

<h1>Buat Account Baru!</h1>
<h3>Sign up Form</h3>

<form action="/welcome" method="post" >
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

    <label for="fname">First Name:</label><br><br>
    <input type="text" name="fname" id="fname" required><br><br>
    <label for="lname">Last Name:</label><br><br>
    <input type="text" name="lname" id="lname" required><br><br>
    <label>Gender:</label><br><br>
    <input type="radio" id="male" name="gender" value="male" required>
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="male">Female</label><br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label><br><br>

    <label for="nationality">Nationality:</label> <br><br>
    <select name="nationality" id="nationality">
        <option value="indonesia">Indonesia</option>
        <option value="Singaporean">Singaporean</option>
        <option value="Japan">Japan</option>
        <option value="Thailand">Thailand</option>
    </select><br><br>

    <label>Language spoken:</label><br><br>

    <input type="checkbox" id="language1" name="language1" value="Indonesian">
    <label for="language1"> Indonesian</label><br>
    <input type="checkbox" id="language2" name="language2" value="English">
    <label for="language2"> English</label><br>
    <input type="checkbox" id="language3" name="language3" value="Other">
    <label for="language3">Other</label><br>


    <br><br>

    <label for="bio">Bio</label><br>
    <textarea name="bio" id="bio" rows="10" cols="30" required></textarea>

    <br><br>
    <input type="submit" value="Sign up">




</form>
</body>
</html>
