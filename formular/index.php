<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>
Formular
</h1>
<div>
<form  action="form.php" method="post" enctype="multipart/form-data">
    <input type="text" placeholder=" First Name" class="textfield"name="fname"><br>
    <input type="text" placeholder=" Last Name" class="textfield"name="lname"><br>
    <input type="text" id="birthday" placeholder="birthday" name="birthday" class="textfield"><br>
    <p class="small">Select an imagefile <input type="file" placeholder=" Select image!" name="img" ><br></p>
    <input type="submit" class="button" value="submit! >">
    
</form>
</div>
</body>
</html>
