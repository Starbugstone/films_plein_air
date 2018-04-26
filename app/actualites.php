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
          for ($i=0; $i < 6; $i++) {
          ?>
          <div class="row align-items-center no-gutters mb-2 mt-2 filmsListing">
            <div class="col-md-4 text-center py-2 px-2">

              <img src="http://via.placeholder.com/500x300" class="img-fluid" />

            </div>
            <div class="col-md-8 pr-2 text-justify ">
              <h2 class="TitleListing"><a href="#">Lorem ipsum</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mollis ornare condimentum. Nunc quis nulla suscipit, dignissim enim id, pretium mauris. Pellentesque eleifend dolor vel lacus lobortis, id vehicula arcu dictum. Aliquam sed felis sit amet est fringilla semper. Praesent ac tincidunt tellus. In tempor, eros nec bibendum gravida, mi purus viverra justo, malesuada aliquam. [...]</p>
              <a href="#">Lire la suite</a>
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
