<?php
require '../Modules/Database.php';
require '../Modules/Orders.php';
session_start();
$user_id = $_SESSION['customer_id'];
if(isset($_POST['verzenden'])) {
    $db = new PDO("mysql:host=localhost;dbname=zuzu","root", "");
    $query = $db->prepare ("SELECT * FROM sushi");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $total = 0;
    $i = 0;
    $sushies[0] = $_POST['sushi_1'];
    $sushies[1] = $_POST['sushi_2'];
    $sushies[2] = $_POST['sushi_3'];
    $sushies[3] = $_POST['sushi_4'];
    $sushies[4] = $_POST['sushi_5'];

    foreach ($result as &$data) {
        $total = $total + $data ["price"] * $sushies[$i];
        $i++;
    }
    echo $total;
    saveOrders($user_id, $_POST['sushi_1'],$_POST['sushi_2'],$_POST['sushi_3'],$_POST['sushi_4'],$_POST['sushi_5'],$total);
    header("Location: result.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../portfolio/public/css/zuzustyle.css" type="text/css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Sushi</title>

    <head>
    <br>
        <div class="container-form">
            <div class="row gy-3 justify-content-center div-wrapper align-items-center">
    <body>
    <br>
    <table>
    <tr>
        <th>Naam</th>
        <th>Prijs</th>
    </tr>

    <?php

    try {
        $db = new PDO("mysql:host=localhost;dbname=zuzu", "root", "");
        $query = $db->prepare("SELECT * FROM sushi");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $data) {
            echo "<tr>";
            echo "<td>" . $data ["name"] . "</td>";
            echo "<td>" . $data ["price"] . "</td>";
            echo "<tr>";
        }
        echo "</table>";

    } catch (PDOException $e) {
        die("Error!: " . $e->getMessage());
    }

    ?>
    </div>
        </div>

        <div class="container-form">
            <div class="row gy-3 justify-content-center div-wrapper align-items-center">
        <br>
        <div class="row gy-3">
            <form method="post">
                <div class="mb-3">
                    <label for="bericht" class="form-text">
                        Ebi
                    </label>
                    <input type="number" name="sushi_1" value="0">
                </div>
                <div class="mb-3">
                    <label for="bericht" class="form-text">
                        Nigiri
                    </label>
                    <input type="number" name="sushi_2" value="0">
                </div>
                <div class="mb-3">
                    <label for="bericht" class="form-text">
                        Sake
                    </label>
                    <input type="number" name="sushi_3" value="0">
                </div>
                <div class="mb-3">
                    <label for="bericht" class="form-text">
                        Maki
                    </label>
                    <input type="number" name="sushi_4" value="0">
                </div>
                <div class="mb-3">
                    <label for="bericht" class="form-text">
                        Tomago
                    </label>
                    <input type="number" name="sushi_5" value="0">
                </div>
            <button type="submit" name="verzenden" class="btn btn-secondary">Save</button>

    </div>
    </div>

    </body>

    </html>
