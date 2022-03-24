<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>    
<body>
    <h1>
        
    </h1>
     <?php
       
        $name = $_POST['fname'];
        $lname = $_POST['fname'];
        $date = $_POST['birthday'];
        
        $file_name = basename(urlencode($_FILES['img']['name']));
        if(empty($name or $lname or $date or $file_name)){
            echo "<p>value missing! please fill in the form correctly!</p>";
        }
        if (move_uploaded_file($_FILES['img']['tmp_name'], $file_name)){
            echo "<img src=$file_name class=\"pfp\">";           
        }
        echo "";       
    ?>
</body>
</html>