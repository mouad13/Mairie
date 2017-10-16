<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Accueil mairie</title>

  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/modern-business.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">



</head>
<body>

  <nav class="navbar fixed-top navbar-expand-lg fixed-top" id="navbar">
    <div class="container">

      <a class="navbar-brand" href="/">Relais Assistante Maternelle</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/inscription">Demande d'inscription</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/login">Connexion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h3>First Slide</h3>
            <p>This is a description for the first slide.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Second Slide</h3>
            <p>This is a description for the second slide.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Third Slide</h3>
            <p>This is a description for the third slide.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">




    <h2 class="title1">Activité du jour</h2>
    <?php 
     
      for ($i=1; $i < 20 ; $i++) { 
        $varid= "myModal";
        echo $varid. $i;
        
      }
     ?>
@foreach ($activites as $activity)
   

    <!-- Portfolio Section -->

    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <img class="card-img-top" src={{ $activity->image }} alt="">
          <div class="card-body">
            <h4 class="card-title">
              <a href=""  data-toggle="modal" data-target="#myModal">{{ $activity->name }}</a>
            </h4>
            <p class="card-text">{{ $activity->descriptif }}</p>
          </div>
        </div>
      </div>

      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">{{ $activity->name }}</h4>
            </div>
            <div class="modal-body">
              <img src="images/téléchargement.png">
              <h4>Description</h4>
              <p>{{ $activity->descriptif }}</p>
                 <?php
              
             try {
                $pdo = new PDO('mysql:host=localhost;dbname=mairie','root','azerty1143');

               $sql = 'SELECT COUNT(fk_enfants) AS nb FROM reservations';
                $result = $pdo->query($sql);
                $columns = $result->fetch();
                $nb = $columns['nb'];
                
               echo 'Il y a '.$nb.' enregistrement(s).';

             }
              catch(PDOException $e) {
                  echo 'Erreur PDO : '.$e->getMessage();
              }
            
           ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    <hr>

  </div>
@endforeach

 

  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-2 bg-red">
    <div class="container">
      <p class="m-0 text-center text-white">Made in Simplon</p>
    </div>
    <!-- /.container -->
  </footer>


  <script src="/js/jquery.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="js/popuptest.js"></script>


</body>
</html>

