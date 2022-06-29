<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <title>Reserveringen</title>
    <?php require_once '../backend/config.php'; ?>
    <?php require_once '../head.php'; ?>
</head>
<body>
    <div class="header-wrapper">
        <?php require_once '../header.php'; ?>
    </div>
    <div class="forrest-image"></div>

    
    <div class="container">
        <div class="reserveringen">
            <?php
                $id = $_GET['id'];
            ?>
            <div class="container-form">
                <form action="../backend/reserveringenController" method="post">
                    <div class="container-form-group">
                        <label for="straat"> Straat </label>
                        <input type="text" value=<?php echo $id?>> 
                    </div>
                    <div class="container-form-group">
                        <label for="straat"> Straat </label>
                        <input type="text" value=<?php echo $id?>> 
                    </div>
                    <div class="container-form-group">
                        <label for="straat"> Straat </label>
                        <input type="text" value=<?php echo $id?>> 
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>