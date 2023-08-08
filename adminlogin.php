<?php require("connection.php")?>
<html>
<head>
<title>admin login panel</title>
<meta charset="utf-8" name="viewpoint" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" >
<link rel="stylesheet" type="text/css" href="css/mycss.css">
</head>
<body style="background-image: url('images/background-img.png')">
     
<div class="login-form">
    <div class="login-form form">
        <form method="POST" action="">
            <h2 style="background-color: rgb(110, 25, 85);">ADMIN LOGIN</h2><br>
            <input type="type" placeholder="Admin Name" name="AdminName">
            <input type="password" placeholder="password"  name="AdminPass">
            <button type="submit" class="login-btn" name="login"    Style=" background-color: rgb(221, 4, 221); border-radius: 5px; margin: 5px; padding:5px; fontsize: 15px;" > LOGIN </button>
</form>
</div>
 
</div>

<?php

function input_filter($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;


}

if(isset($_POST['Login']))
{
#filtering user input
    $AdminName=input_filter($_POST['AdminName']);
    $AdminPass= input_filter($_POST['AdminPass']);

#escaping special symbols used in SQL statement
    $AdminName=mysqli_real_escape_string($con,$AdminName);
    $AdminPass=mysqli_real_escape_string($con,$AdminPass);


   #query template

   $query="SELECT * FROM 'admin_login' WHERE 'Admin_Name'=? AND 'Admin_Password' =?";

   

}

?>
 
</body>
</html>
