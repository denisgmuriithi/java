<?php
    require_once "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <h3 style="text-align:center;font-weight:bold;font: size 30px;">
        Welcome to ICT HelpDesk
    </h3>
    <ul>
        
        <label>First Name:<input type="text" name="f_name" value=""/></label>
        <label>Second Name:<input type="text" name="s_name" value=""/></label>
        <label>Phone:<input type="num" name="phones" value=""/></label>
        <input type="button" value="SUBMIT" name="submit"/>
    </ul>
</body>
</html>