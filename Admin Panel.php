<?php
session_start();
if(!isset($_SESSION['AdminLoginId']))
{
    header("location: admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        div.header{
            font-family: poppins;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0px 60px;
            background-color: #8c10b9;
        }
        div.header form button{
            background-color: white;
            font-size: 16px;
            font-weight: 550;
            padding: 8px 12px;
            border: 2px solid black;
        }
        p .userdetails{
            display: inline-block;
   padding:15px 40px;
   font-size: 25px;
   margin-top: 300px;
   margin-left: 600px;
   background-color: #8c10b9;
   color:#fff;
        }
    </style>
</head>
<body>
    <div class="header">
       <h1>WELCOME TO ADMIN PANEL - <?php echo $_SESSION['AdminLoginId']?></h1>
        <form method="POST">
            <button name="Logout">LOG OUT</button>
        </form>
    </div>
    <p><a href="userdetails.php" class="userdetails">Check User Details</a></p>

    <?php
    if(isset($_POST['Logout']))
    {
        session_destroy();
        header("location: admin.php");
    }
    ?>
</body>
</html>