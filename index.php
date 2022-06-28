<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snelkookpan</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="header-wrapper">
        <?php require_once "header.php" ?>
    </div>
    <div class="forrest-image"></div>
    <div class="wrapper">
        <div class="filter-column">
            <form action="backend/filterController.php" method="post">
                <div class="form-item">
                    <label for="location">Locatie</label>
                    <select name="location" id="location">
                        <option value="Zwolle">Zwolle</option>
                        <option value="Breda">Breda</option>
                        <option value="Utrecht">Utrecht</option>
                        <option value="Enschede">Enschede</option>s
                    </select>
                </div><!--form-item-->
                <div class="form-item">
                    <label for="dateFrom">Datum vanaf</label>
                    <input type="date" name="dateFrom">
                </div><!--form-item-->
                <div class="form-item">
                    <label for="dateTo">Datum tot</label>
                    <input type="date" name="dateTo">
                </div><!--form-item-->
                <div class="form-item">
                    <label for="price">Prijs</label>
                    <input type="number" name="price" step="any"> 
                </div><!--form-item-->
                <div class="form-submit">
                    <input type="submit" value="Toon resultaten">
                </div>
            </form>
        </div><!--filter-column-->
        <div class="reservation-listing">
            <?php
            require_once "backend/conn.php";
            
            $query = "SELECT * FROM huizen";
            $statement = $conn->prepare($query);
            $statement->execute();
            $huizen = $statement->fetchAll(PDO::FETCH_ASSOC);

            foreach($huizen as $huis):

            ?>
            <div class="huis">
                <img src="<?php echo $huis['afbeelding'];?>" alt="huis">
                <div class="info">
                    <p><?php echo $huis['plaats']," ", $huis['straat'], " ", $huis['huisnummer'];?></p>
                </div>
                <div class="buttons">
                    <a href="reservering.php?id=:<?php echo $huis['id']?>">reserveren</a>
                </div>
            </div><!--huis-->
            <?php endforeach; ?>
        </div><!--reservation-listing-->
        <div class="adColumn">

        </div><!--adColumn-->
    </div><!--wrapper-->
</body>
</html>