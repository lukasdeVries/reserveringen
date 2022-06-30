<?php

require_once "conn.php";

$location = $_POST['location'];

function query($query)
{
    $statement = $conn->prepare($query);
    $statement->execute();
}