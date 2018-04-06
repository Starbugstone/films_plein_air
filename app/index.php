<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="css/style.css" />

    <title>Les films de plein air</title>
  </head>
  <body>
    <header>
      <div class="headerTitle navbar navbar-dark bg-dark">
        <h1><a class="navbar-brand" href="#">Les films de plein air</a></h1>
      </div>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="mainDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu" aria-labelledby="mainDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>

      </nav>
    </header>

    <main class="container-fluid">
      <div class="row">
        <div class="col-md-8">

          <div id="films">
            <carousel-3d>
              <slide v-for="(slide, i) in slides" :index="i">
                <img src="https://placehold.it/360x270">
              </slide>
            </carousel-3d>
          </div><!-- End Carousel -->

          <div class="row justify-content-around blogRow">
            <?php
            for ($i=0; $i < 3; $i++) {
              ?>
              <section class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    Featured
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </section><!-- end blog section -->
              <?php
            }
             ?>
          </div><!-- end blog row -->

        </div><!-- end main section -->
        <aside class="col-md-4">

          <div class="logo">
            <img src="images/logo.png" />
          </div>

          <div class="card">
            <div class="card-header">
              Featured
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              Featured
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

        </aside>
      </div>
    </main>
    <footer>


    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- Vue.js and Carousel-vue-3d -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.js"></script>
	<script src="vendor/vue-carousel-3d/vue-carousel-3d.min.js"></script>

	<!-- Local Script -->
	<script src="js/script.js"></script>
  </body>
</html>
