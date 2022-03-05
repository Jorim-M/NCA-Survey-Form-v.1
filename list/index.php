<?php
  include('../db.php');
  $upload_dir = '../uploads/';

  if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "select * from ncasurvey where id = ".$id;
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_assoc($result);
      $image = $row['image'];
      unlink($upload_dir.$image);
      $sql = "delete from ncasurvey where id=".$id;
      if(mysqli_query($conn, $sql)){
        header('location:../list/');
      }
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Survey List | NCA SURVEY</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
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
                <li class="nav-item"><a class="btn btn-primary" href="../"><i class="fa fa-user-plus"></i></a></li>
              </ul>
          </div>
        </div>
      </nav>

      <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h1>Survey List</h1>
                    </div>
                      <div class="card-body">
                        <div class='table-responsive'>
                          <table id="data_example" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="font-weight: bolder;">ID</th>
                                    <th style="font-weight: bolder;">Image</th>
                                    <th style="font-weight: bolder;">First Name</th>
                                    <th style="font-weight: bolder;">Last Name</th>
                                    <th style="font-weight: bolder;">ID No:</th>
                                    <th style="font-weight: bolder;">Passport No:</th>
                                    <th style="font-weight: bolder;">Valid Tax Compliance No:</th>
                                    <th style="font-weight: bolder;">KRA PIN No:</th>
                                    <th style="font-weight: bolder;">Title:</th>
                                    <th style="font-weight: bolder;">Contact No:</th>
                                    <th style="font-weight: bolder;">E-Mail</th>
                                    <th style="font-weight: bolder;">Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                              <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>ID No:</th>
                                <th>Passport No:</th>
                                <th>Valid Tax Compliance No:</th>
                                <th>KRA PIN No:</th>
                                <th>Title:</th>
                                <th>Contact No:</th>
                                <th>E-Mail</th>
                                <th>Actions</th>
                              </tr>
                            </tfoot>
                            <tbody>
                              <?php
                                $sql = "select * from ncasurvey";
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result)){
                                  while($row = mysqli_fetch_assoc($result)){
                              ?>
                              <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><img src="<?php echo $upload_dir.$row['image'] ?>" height="40"></td>
                                <td><?php echo $row['firstname'] ?></td>
                                <td><?php echo $row['lastname'] ?></td>
                                <td><?php echo $row['id_no'] ?></td>
                                <td><?php echo $row['passport_no'] ?></td>
                                <td><?php echo $row['tax_no'] ?></td>
                                <td><?php echo $row['kra_pin'] ?></td>
                                <td><?php echo $row['title'] ?></td>
                                <td><?php echo $row['contact'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td class="text-center">
                                  <a href="../show/?id=<?php echo $row['id'] ?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                  <a href="../edit/?id=<?php echo $row['id'] ?>" class="btn btn-info"><i class="fa fa-user-edit"></i></a>
                                  <a href="../list/?delete=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash-alt"></i></a>
                                </td>
                              </tr>
                              <?php
                                  }
                                }
                              ?>
                            </tbody>
                          </table>
                        </div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js" charset="utf-8"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#data_example').DataTable();
      } );
    </script>
  </body>
</html>
