<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            margin-top:50px;
            margin-left:500px;
            background-color:#EADDCA;
            text-align:center;
        }
        th{
            padding: 2px 5px;
        }
    </style>
</head>
<body>
    <table border="2">
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Password</th>
</tr>



<?php
include("config.php");
error_reporting(0);
$query="SELECT * FROM user_form";
$data= mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
echo $result['id']." ".$result['email']." ".$result['password'];
if($total !=0)
{
    while($result=mysqli_fetch_assoc($data))
    {
        echo "<tr>
        <td>".$result['id']."</td>
        <td>".$result['email']."</td>
        <td>".$result['password']."</td>
        </tr>";
    }
}
else{
    echo"No record found";
}


?>
</table>
</body>
</html>