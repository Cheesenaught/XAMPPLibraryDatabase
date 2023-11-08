<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
    <form action="addusers.php" method = "post">
    First name:<input type="text" name="forename"><br>
    Password:<input type="passwo" name="passwd"><br>
    Last name:<input type="text" name="surname"><br>
    House:<input type="text" name="house"><br>
    Year:<input type="text" name="year"><br>
    <!--Creates a drop down list-->
    Gender:<select name="gender">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select>
    <br>
    <input type="submit" value="Add User">
    </form>
</body>
</html>
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM TblUsers");
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo($row["Forename"].' '.$row["Surname"]."<br>");
}

?>