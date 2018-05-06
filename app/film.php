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
          <div class="row pt-2">
            <div class="col-md-4">
              <div class="filmsListing">
                <p><img class="img-fluid" src="images/films/<?php echo($film["image"]);?>"></p>
                <h5 class="customWriting textHeadingColor text-center"><?php echo($film["title"]);?></h5>

                <div class="row text-center">
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

              </div>
              <div class="reserveFilms mt-2">
                <div class="card">
                  <div class="card-header customWriting">
                    <h5>Reserver votre place</h5>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="form-group">
                        <label for="name">Votre nom</label>
                        <input type="text" class="form-control" id="name" placeholder="Votre nom">
                      </div>
                      <div class="form-group">
                        <label for="email">Votre adresse mail</label>
                        <input type="email" class="form-control" id="email" placeholder="@mail">
                      </div>
                      <div class="form-group">
                        <label for="number">Nombre de personnes</label>
                        <input type="text" class="form-control" id="number" placeholder="Nombre de participants">
                      </div>

                      <button type="submit" class="btn btn-primary">Reserver</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <h1 class="customWriting textHeadingColor text-center"><?php echo($film["title"]);?></h1>
              <?php echo($film["shortDescription"]); ?>
              <hr>
              <div id="lipsum">
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo porta massa, quis venenatis neque posuere sed. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec risus eros, tempor nec cursus sed, vestibulum sed arcu. Ut vitae dui a urna viverra hendrerit vitae non lectus. Nullam nibh ante, volutpat sit amet urna at, convallis congue leo. Maecenas ex dolor, maximus vitae arcu et, dictum accumsan sem. Donec sagittis volutpat nisl, non volutpat sapien volutpat sed. Suspendisse fermentum dolor quam, ac porta est efficitur id. Nulla sodales lacus nec turpis faucibus bibendum. Sed vitae arcu vel felis tincidunt sodales. In pulvinar sapien et enim scelerisque, non suscipit lectus aliquet. Mauris nec tempus augue.
                </p>
                <p>
                Ut ac nisl sem. Suspendisse aliquam leo at neque porttitor lobortis. Aliquam molestie id diam quis suscipit. Morbi id sollicitudin tortor, sit amet sollicitudin libero. Fusce at rhoncus purus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sed diam feugiat, ornare enim id, tincidunt erat. Maecenas lorem nibh, vulputate ut congue nec, suscipit interdum lorem.
                </p>
                <p>
                Donec in tristique sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dictum risus quis ornare lobortis. Sed arcu sem, lacinia a magna vitae, feugiat facilisis enim. Phasellus feugiat ultricies orci ultrices maximus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tincidunt justo et odio vehicula fringilla. In quis faucibus urna, at rutrum metus. Proin et est a magna imperdiet interdum. Praesent condimentum purus ac quam ornare egestas. Aliquam vehicula turpis euismod finibus sagittis. Nullam cursus, magna et tincidunt feugiat, leo dui auctor odio, quis pharetra eros augue sed mi.
                </p>
                <p>
                Ut interdum ut lacus fringilla finibus. Sed placerat ipsum mauris, a dignissim ipsum tincidunt quis. Quisque eu diam nulla. Aliquam auctor tincidunt accumsan. Curabitur id metus a dui porttitor euismod et ac orci. Nam a tortor vel mauris lobortis lacinia vitae lobortis purus. Suspendisse mi diam, congue at est non, ornare pulvinar dolor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin iaculis quam dui. Curabitur non tellus quis ligula iaculis lobortis in eu quam. Proin non dignissim mi, at sagittis tellus. Donec elementum libero ut tellus viverra tristique.
                </p>
                <p>
                Integer vulputate luctus elit, imperdiet porttitor justo convallis sed. Nulla a lacinia magna, sit amet commodo lacus. Sed metus dui, gravida scelerisque maximus nec, porttitor at leo. Mauris nec libero a sem aliquet iaculis. Vivamus consectetur a ante in aliquet. Morbi fermentum a est at convallis. Sed condimentum hendrerit quam. Vestibulum mi leo, pulvinar vel nulla id, fringilla blandit augue. Duis accumsan risus nec justo rhoncus efficitur. Proin blandit, enim eu ultrices convallis, diam augue condimentum tortor, id rhoncus purus metus quis ante. Nam blandit dolor purus, et rutrum velit mattis sed. Sed tellus nibh, porttitor quis elit ut, mollis auctor justo. Suspendisse tempus faucibus augue a viverra. Morbi et varius quam. In cursus odio dui, id congue magna pharetra eu. Vestibulum neque mauris, maximus ac mauris vitae, tempor elementum nulla.
                </p>
              </div>
            </div>
          </div>
          <div class="socialIcons float-right mr-4 mt-2">
            <img src="images/fb.png" class="mr-1"><img src="images/g+.png" class="mr-1"><img src="images/tw.png" class="mr-1">
          </div>


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
