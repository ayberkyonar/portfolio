<?php
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != ''){

        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $messageSubject = $_POST['subject'];
            $message = $_POST['message'];

            $to = "yonarayberk@gmail.com";
            $body = " ";

            $body .= "From: ".$userName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Message: ".$message. "\r\n";

             mail($to,$messageSubject,$body);

        }
    }
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Bootstrap CSS -->
    <link rel="stylesheet" href= "css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/email.css" media="all">
    <script src="js/email.js"></script>

</head>

<body>

    <div class="col-md-12">
        <nav class="navbar navbar-expand-md bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Hoofdpagina</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="over.html">Over Ayberk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="vaardigheden.html">Vaardigheden</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="projecten.php">Projecten</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="email.php">Email</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron d-none d-sm-block bg-dark">
            <h1 class="display-10">Email</h1>
        </div>
    </div>

<div class="container">
    <form action="email.php" method="POST" class="form">
        <div class="form-group">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Naam" dex="1" required>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="naam@mail.com" tabindex="2" required>
        </div>
        <div class="form-group">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Onderwerp" tabindex="3" required>
        </div>
        <div class="form-group">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Bericht..." tabindex="4"></textarea>
        </div>
        <div>
            <button type="submit" class="btn">VERZEND</button>
        </div>
    </form>
</div>

</body>

</html>