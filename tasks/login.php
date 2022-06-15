<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <title>Inloggen</title>
    <?php require_once '../backend/config.php'; ?>
    <?php require_once '../head.php'; ?>
</head>
<body style="height: 100%;">
    <div class="container-body">
        <div class="inloggen">
            <div class="card">
                <h1>Inloggen</h1>
                <div class="error">
                    <?php
                        if(isset($_SESSION['error'])){
                            echo ("<div class='error'>".$_SESSION['error']."</div>");
                            unset($_SESSION['error']);
                        }
                    ?>
                </div>
                <div class="form-inloggen">  
                    <form action="../backend/loginController.php" method="post">
                        <input type="text" name="username" placeholder="username"><br>
                        <input type="password" name="password" placeholder="password"><br>
                        <input type="submit" name="submit" value="Inloggen"> 
                    </form>
                    <form action="register.php" method="post">
                        <input type="submit" name="submit" value="Registreren"> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>