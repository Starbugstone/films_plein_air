<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css" />

    <title>Les films de plein air</title>
  </head>
  <body>
    <header>
      <div class="headerTitle navbar navbar-dark bg-darthV">
        <h1><a id="siteTitle" class="navbar-brand" href="#">Les films de plein air</a></h1>
      </div>
      <nav class="navbar navbar-expand-md navbar-dark bg-darthV text-right">

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
        <div class="col-lg-8">

          <div id="films" >
            <carousel-3d :height="600" :autoplay="true" :display="7">
              <slide v-for="(slide, i) in slides" :index="i">
                <div class="card">
                  <div class="card-header">
                    Slumdog Millionaire
                  </div>
                  <div class="card-body filmImageCard">
                    <div class="filmImage" style="background-image: url(http://c8.alamy.com/comp/F6MAFP/release-date-23-january-2009-title-slumdog-millionaire-studio-pathe-F6MAFP.jpg);">
                      <div class="filmImageText" style="display: none;">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pulvinar nisi ac luctus tristique. Nulla ornare lacus id felis laoreet, vitae congue odio faucibus. Duis gravida eros at facilisis interdum. Nam pellentesque vestibulum nisi. Nullam vel libero imperdiet, ultrices sapien ut, egestas magna. Aliquam arcu urna, malesuada eget suscipit vel, maximus vestibulum sem. Nulla consequat volutpat sem, quis bibendum tellus porttitor et. Maecenas luctus tortor felis, non elementum erat eleifend eu. Curabitur vestibulum, diam nec ultricies dapibus, lectus neque rhoncus lectus, eget interdum purus augue a augue. Pellentesque eu lacus sit amet purus bibendum tempus ac a leo.</p>
                      </div>
                    </div>
                    <div class="filmTags">
                      <p>date - hour - length - age</p>
                    </div>
                  </div>
                </div>

              </slide>
            </carousel-3d>
          </div><!-- End Carousel -->

          <div class="row justify-content-around blogRow">
            <?php
            for ($i=0; $i < 6; $i++) {
              ?>
              <section class="col-md-4">
                <div class="card mb-2">
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
        <aside class="col-lg-4 sidebar">

          <div class="logo text-center">
            <img src="images/logo.png" class="img-fluid" />
          </div>

          <div class="card">
            <div class="card-header">
              S'inscrire au newsletter
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="newsletterName">Votre nom</label>
                  <input type="text" class="form-control" id="newsletterName" placeholder="Votre nom">
                </div>
                <div class="form-group">
                  <label for="newsletterEmail">Votre adresse mail</label>
                  <input type="email" class="form-control" id="newsletterEmail" placeholder="@mail">
                </div>

                <button type="submit" class="btn btn-primary">S'inscrire</button>
              </form>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              A propos du festival
            </div>
            <div class="card-body">
              <h5 class="card-title">Les films de plein air</h5>
              <p class="card-text">L'association "les films de plein air" est heureux de vous offrir la possibilité de visionner gratuitement des films d'auter du 5au 8 aout au parc Monseau</p>
              <p class="card-text">Pour etre sûr d'avoir une place, nous vous proposons de vous inscrire à chaque seance. Vous avez les acces au reservation dans la fiche descriptive du film</p>
              <a href="#">Lire plus</a>
            </div>
          </div>

          <div class="card">
            <div class="card-header mb-0">
              Plan d'acces
            </div>
            <iframe style="width:100%;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10495.613391325449!2d2.3038051586914072!3d48.879119037806525!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe62425fddeddc402!2sParc+Monceau!5e0!3m2!1sen!2sfr!4v1523200023940" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

        </aside>
      </div>
    </main>
    <footer>
      <div class="row justify-content-around footerRow bg-darthV">
        <?php
        for ($i=0; $i < 3; $i++) {
          ?>
          <div class="col-md-4">
            <div class="px-4 pt-3">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mollis ornare condimentum. Nunc quis nulla suscipit, dignissim enim id, pretium mauris. Pellentesque eleifend dolor vel lacus lobortis, id vehicula arcu dictum. Aliquam sed felis sit amet est fringilla semper.</p>
            </div>
          </div>
          <?php
        }
        ?>


      </div><!-- End Footer Row -->

    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- Vue.js and Carousel-vue-3d -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.js"></script>
	<script src="vendor/vue-carousel-3d/vue-carousel-3d.min.js"></script>

	<!-- Local Script -->
  <script src="js/carousel.js"></script>
	<script src="js/script.js"></script>
  </body>
</html>
