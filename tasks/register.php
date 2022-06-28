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
                    <?php
                    if(isset($_GET['msg']))
                    {
                        echo "<div class='msg'>" . $_GET['msg'] . "</div>";
                    }
                    ?>

                    <form action="../backend/registerController.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="naam" id="naam" placeholder="naam">
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" id="username" placeholder="user">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" placeholder="pass">
                        </div>
                        <div class="form-group">
                            <input type="password" name="passwordrepeat" id="passwordrepeat" placeholder="pass">
                        </div>
                        <input type="submit" value="register">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>