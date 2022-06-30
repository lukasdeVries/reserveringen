<?php

require_once 'conn.php';

$huisId = $_POST['id'];
$datumVan = $_POST['vanaf'];
$datumTot = $_POST['tot'];

$query = "INSERT INTO reserveringen (huis, datumvan, datumtot) VALUES (:huisId, :datumVan, :datumTot)";
$statement = $conn->prepare($query);
$statement->execute([
    ":huisId" => $huisId,
    ":datumVan" => $datumVan,
    ":datumTot" => $datumTot,
]);

header("Location: ../index.php");
exit;

?>