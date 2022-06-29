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

                require_once '../backend/conn.php';


                $query = "SELECT * FROM huizen WHERE id= :id";
                $statement = $conn->prepare($query);
                $statement->execute([
                    ":id" => $id,
                ]);
                $result = $statement->fetch(PDO::FETCH_ASSOC);

                if (empty($result)) {
                    ?>
                        <div class="errorCenter">
                            <div class="error">
                                <p> Huis met id: <?php echo $id ?> bestaat niet </p>
                            </div>
                        </div>
                    <?php
                    die;
                } else {

            ?>

            <div class="container-form">
                <div class="form">
                    <h1 class="reserveringTitel">Reserveren</h1>
                    <form action="../backend/reserveringenController.php" method="POST">
                        <div class="form-group">
                            <label for="straat"> Straat: </label>
                            <input type="text" value=<?php echo $result['straat'] ?> name="straat">
                        </div>
                        <div class="form-group">
                            <label for="straat"> Huisnummer: </label>
                            <input type="text" value=<?php echo $result['huisnummer'] ?> name="huisnummer">
                        </div>
                        <div class="form-group">
                            <label for="straat"> Postcode: </label>
                            <input type="text" value=<?php echo $result['postcode'] ?> name="postcode">
                        </div>
                        <div class="form-group">
                            <label for="straat"> Stad: </label>
                            <input type="text" value=<?php echo $result['plaats'] ?> name="plaats">
                        </div>
                        <div class="form-group">
                            <label for="vanaf"> Vanaf: </label>
                            <input type="date" value="" name="vanaf">
                        </div>
                        <div class="form-group">
                            <label for="tot"> Tot: </label>
                            <input type="date" value="" name="tot">
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Reserveren">
                        </div>
                    </form>
                </div>
            </div>

            <?php } ?>

        </div>
    </div>

</body>
</html>