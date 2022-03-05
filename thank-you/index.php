<?php
  include('../db.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NCA SURVEY</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
   <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
   <!-- Icons -->
   <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
   <link rel="stylesheet" href="../assets/vendor/@fortawesome/css/all.min.css" type="text/css">
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" type="text/css"/>
   <!-- Argon CSS -->
   <link rel="stylesheet" href="../assets/css/argon.css" type="text/css">
   <link rel="stylesheet" href="../assets/css/aos.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
  </head>
  <body>

      <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
        <a class="navbar-brand" href="../">
          <img src="../assets/img/nca_2.png" width="200">
        </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="btn btn-outline-danger" href="../"><i class="fa fa-sign-out-alt"></i></a></li>
            </ul>
        </div>
        </div>
      </nav>

      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-primary">
                    <div class="card-header text-center"><h2><em>Thank You For Taking This Survey!</em></h2></div>
                      <div class="card-body">
                        <img src="../assets/img/thanks.gif" style="align-content: center;">
                    </div>
                </div>
              <footer class="py-5 mt-5 bg-transparent" id="footer-main">
                 <div class="container">
                    <div class="row align-items-center justify-content-between">
                       <div class="col-md-12">
                          <ul class="nav nav-footer justify-content-center">
                             <span class="love-from" class="font-weight-bold ">Developed with <i class="icon ion-heart" style="color:#CD252D;"></i> by <img src="../assets/img/westos.svg" width="100"></span>
                          </ul>
                       </div>
                    </div>
                 </div>
              </footer>
            </div>
        </div>
      </div>

    <script src="../assets/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
  </body>
</html>
