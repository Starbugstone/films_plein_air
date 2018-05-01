<?php
$filmKey = htmlspecialchars($_GET["key"]);
require_once('filmsArray.php');
$film = $films[$filmKey];
 ?>
<!doctype html>
<html lang="en">
  <head>
    <?php include('part-headmeta.php'); ?>

    <title>Les films de plein air</title>
  </head>
  <body>

    <?php include('part-header.php'); ?>

    <main class="container-fluid">
      <div class="row">
        <div class="col-lg-9">
          <div class="float-left filmImg my-2 mr-2">
            <p><img class="img-fluid" src="images/films/<?php echo($film["image"]);?>"></p>
          </div>
          <h1 class="customWriting textHeadingColor"><?php echo($film["title"]);?></h1>

          <?php echo($film["shortDescription"]); ?>


          <div class="row">
            <div class="col-md-6">
              <p>
                <b>Date</b><br>
                <?php echo($film["showDate"]); ?>
              </p>
            </div>
            <div class="col-md-6">
              <p>
                <b>Heure</b><br>
                <?php echo($film["showTime"]); ?>
              </p>
            </div>
            <div class="col-md-6">
              <p>
                <b>Durée</b><br>
                <?php echo($film["filmDuration"]); ?>
              </p>
            </div>
            <div class="col-md-6">
              <p>
                <b>Age</b><br>
                <?php echo($film["filmAge"]); ?>
              </p>
            </div>
          </div>
          <p class="text-center mt-2"><a class="btn btn-primary" href="#" role="button">Reserver votre place</a></p>
        </div><!-- end main section -->
        <aside class="col-lg-3 sidebar">

          <?php include('part-sidebar.php'); ?>

        </aside>
      </div>
    </main>
    <footer>
      <?php include('part-footer.php'); ?>

    </footer>
    <?php include('part-js.php'); ?>
  </body>
</html>
