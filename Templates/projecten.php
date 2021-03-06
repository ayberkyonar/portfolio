<!DOCTYPE html>
<html lang= "en">
    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Bootstrap CSS -->
      <link rel="stylesheet" href= "../public/css/style.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <title>Projecten</title>

    <head>

    <body>

      <div class="col-md-12">
        <nav class="navbar navbar-expand-md bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="../public/index.html">Hoofdpagina</a>
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
          <h1 class="display-10">Projecten</h1>
        </div>
      </div>

      <div class="container">
      <?php
      try {
          $db = new PDO ("mysql:host=localhost;dbname=portfolio", "root", "");
          $query = $db->prepare("SELECT * FROM projecten ");
          $query->execute();
          $result = $query->fetchAll(PDO::FETCH_ASSOC);
          $i = 0;
          foreach ($result as $data):
              if ($i === 0 || $i === 3) {
                  echo '<div class="row cards">';
              }
              ?>

          <div class="col-md-4">
              <div class="card h-100 bg-dark">
                  <img class="card-img-top img-fluid" src="<?php echo $data["picture"]?>" alt="foto van zuzu">
                  <div class="card-body">
                      <h5 class="card-title"><?php echo $data["name"]?></h5>
                      <p class="card-text"><?php echo $data["description"]?></p>
                      <a href= "<?php echo $data["project_link"]?>" class="btn btn-primary">Project</a>
                      <a href="<?php echo $data["github_link"]?>"class="btn btn-primary btngit">GitHub</a>
                  </div>
              </div>
          </div>

      <?php
              if ($i == 2 || $i == 5) {
                  echo '</div>';

              }
              $i++;

          endforeach;
      } catch (PDOException $e) {
          die("ERROR!:" . $e->getMessage());
      }
      ?>
      </div>

          <br><br><br>

              <footer>
                <div class="footer-content">
                  <p>
                Telefoon: 0123456789<br>
                    Email: 302155034@student.rocmondriaan.nl
<ul class="socials" id="insta" style="justify-content: center;">
                    <li><a href="https://www.instagram.com/ayberk.yr/"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
              </footer>

              <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> <!-- Option 2: jQuery, Popper.js, and Bootstrap JS <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> -->

    </body>

 </html>