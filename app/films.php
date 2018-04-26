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
          <?php
          require_once('filmsArray.php');
          $i=0;
          foreach ($films as $filmKey => $film) {
          ?>
          <div class="row align-items-center no-gutters mb-2 mt-2 filmsListing">
            <div class="col-md-3 text-center py-2 pl-2">

              <img src="images/films/<?php echo($film["image"]);?>" class="img-fluid" />

            </div>
            <div class="col-md-4 px-2 text-center">
              <div class="row">
                <div class="col-12 text-center">
                  <h2 class="TitleListing"><a href="film.php?key=<?php echo($filmKey);?>"><?php echo($film["title"]);?></a></h2>
                </div>

              </div>
              <div class="row">
                <div class="col-md-6">
                  <p>
                    Date<br>
                    <?php echo($film["showDate"]); ?>
                  </p>
                </div>
                <div class="col-md-6">
                  <p>
                    Heure<br>
                    <?php echo($film["showTime"]); ?>
                  </p>
                </div>
                <div class="col-md-6">
                  <p>
                    Durée<br>
                    <?php echo($film["filmDuration"]); ?>
                  </p>
                </div>
                <div class="col-md-6">
                  <p>
                    Age<br>
                    <?php echo($film["filmAge"]); ?>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-5 pr-2 text-justify ">
              <?php
              echo(shorten_string($film["shortDescription"], 120));
              ?>
            </div>
          </div>
          <?php
          }
           ?>
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
