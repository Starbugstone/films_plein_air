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


          <div id="films" >
            <carousel-3d :height="600" :autoplay="true" :display="7">
              <?php
              require_once('filmsArray.php');
              $i=0;
                foreach ($films as $filmKey => $film) {
                  ?>
                  <slide :index="<?php echo($i);?>">
                    <div class="card">
                      <div class="card-header">
                        <a href="film.php?key=<?php echo($filmKey);?>"><?php echo($film["title"]);?></a>
                      </div>
                      <div class="card-body filmImageCard">
                        <div class="filmImage" style="background-image: url(images/films/<?php echo($film["image"]);?>);">
                          <div class="filmImageText" style="display: none;">
                            <?php
                            echo(shorten_string($film["shortDescription"], 80));
                            ?>
                          </div>
                        </div>
                        <div class="filmTags row justify-content-around text-center">
                          <div class="col-3">
                            <p>
                              date<br>
                              <?php echo($film["showDate"]); ?>
                            </p>
                          </div>
                          <div class="col-3">
                            <p>
                              Heure
                              <?php echo($film["showTime"]); ?>
                            </p>
                          </div>
                          <div class="col-3">
                            <p>
                              Durée<br>
                              <?php echo($film["filmDuration"]); ?>
                            </p>
                          </div>
                          <div class="col-3">
                            <p>
                              Age<br>
                              <?php echo($film["filmAge"]); ?>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>

                  </slide>
                  <?php
                  $i++;
                }
               ?>

            </carousel-3d>
          </div><!-- End Carousel -->

          <div class="row justify-content-around blogRow">
            <?php
            for ($i=0; $i < 6; $i++) {
              ?>
              <section class="col-md-4">
                <div class="card mb-3">
                  <div class="card-header">
                    Actualités
                  </div>
                  <img class="card-img-top" src="http://via.placeholder.com/300x175" alt="Actualités image">
                  <div class="card-body">

                    <h5 class="card-title">Lorem ipsum</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mollis ornare condimentum. Nunc quis nulla suscipit, dignissim enim id, pretium mauris. Pellentesque eleifend dolor vel lacus lobortis, id vehicula arcu dictum. Aliquam sed felis sit amet est fringilla semper. Praesent ac tincidunt tellus. In tempor, eros nec bibendum gravida, mi purus viverra justo, malesuada aliquam. [...]</p>
                    <a href="#">Lire la suite</a>
                  </div>
                </div>
              </section><!-- end blog section -->
              <?php
            }
             ?>
          </div><!-- end blog row -->

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
