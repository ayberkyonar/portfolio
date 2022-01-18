<?php
require '../Modules/Database.php';
require '../Modules/Customer.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../portfolio/public/css/zuzustyle.css" type="text/css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Customer</title>

    <head>

<body>

<br>
<div class="container-form">
    <div class="row gy-3 justify-content-center div-wrapper align-items-center">

    <div class="row gy-3">
        <form method="post">
            <div class="mb-3">
                <label for="bericht" class="form-text">
                    Voornaam:
                </label>
                <input type="text" name="fname" class="form-control"">
            </div>
            <div class="mb-3">
                <label for="bericht" class="form-text">
                    Achternaam
                </label>
                <input type="text" name="lname" class="form-control"">
            </div>
            <div class="mb-3">
                <label for="bericht" class="form-text">
                    Email
                </label>
                <input type="text" name="email" class="form-control"">
            </div>
            <div class="mb-3">
                <label for="bericht" class="form-text">
                    Adress
                </label>
                <input type="text" name="adress" class="form-control"">
            </div>
            <div class="mb-3">
                <label for="bericht" class="form-text">
                    Postcode
                </label>
                <input type="text" name="zipcode" class="form-control"">
            </div>

            <?php
            if(isset($_POST['verzenden'])) {
                $required = array('fname', 'lname', 'email', 'adress', 'zipcode');
                $error = false;
                foreach ($required as $field) {
                    if (empty($_POST[$field])) {
                        $error = true;
                    }
                }
                if ($error) {
                    echo "Vul alle velden in!";
                } else {
                    saveCustomer($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['adress'], $_POST['zipcode']);

                    $db = new PDO("mysql:host=localhost;dbname=zuzu","root", "");
                    $query = $db->prepare ("SELECT id FROM customer WHERE fname = '".$_POST['fname']."'");
                    $query->execute();
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($result as &$data) {
                        $_SESSION['customer_id'] = $data['id'];
                    }
                    header("Location: sushi.php");
                }
            }

            ?>

            <div class="modal-footer">
                <button type="submit" name="verzenden" class="btn btn-secondary">Save</button>
            </div>
        </form>
    </div>
    </div>
</div>

</body>

</html>