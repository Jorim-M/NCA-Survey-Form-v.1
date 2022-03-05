<?php
  require_once('../db.php');
  $upload_dir = '../uploads/';

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from ncasurvey where id=".$id;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    }else {
      $errorMsg = 'Could not Find Any Record';
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Survey Details | NCA SURVEY</title>
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

          </div>
        </div>
      </nav>

      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h1>Survey Details</h1>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md">
                  <h2>1. Contact Details</h2>
                  <hr>
                  <div class="form-group">
                    <h4>First Name</h4>
                    <div class="form-control" value="">
                      <span><?php echo $row['firstname'] ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <h4>Last Name</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['lastname'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>ID No.</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['id_no'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Passport No.</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['passport_no'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Mobile No.</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['contact'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Email</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['email'] ?></span>
                    </h5>
                  </div>
                  <h2>2. Title & Other Info.</h2>
                  <hr>
                  <div class="form-group">
                    <h4>Title</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['title'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Valid Tax Compliance No.</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['tax_no'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>KRA PIN No.</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['kra_pin'] ?></span>
                    </h5>
                  </div>
                  <br>
                  <div class="form-group">
                    <h2>3. Certificate</h2>
                    <hr>
                    <img src="<?php echo $upload_dir.$row['image'] ?>" height="450">
                    <a class="btn btn-outline-success" target="__blank" href="<?php echo $upload_dir.$row['image'] ?>"><i class="fa fa-expand"></i><span>View</span></a>
                  </div>
                  <br>
                  <h2>4. List of the Academic Qualifications</h2>
                  <hr>
                  <div class="form-group">
                    <h4>PHD</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['phd'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Masters</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['masters'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Bachelor's Degree</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['bachelors'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Postgraduate Diploma</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['post_grad_diploma'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Diploma</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['diploma'] ?></span>
                    </h5>
                  </div>
                  <br>
                  <h2>5. Academic Experience</h2>
                  <hr>
                  <div class="form-group">
                    <h4>Post PHD Experience (Years)</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['post_phd'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Post Masters Experience (Years)</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['post_masters'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Post Degree Experience (Years)</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['post_degree'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Post Diploma Experience (Years)</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['post_diploma'] ?></span>
                    </h5>
                  </div>
                  <br>
                  <h2>6. Other Professional Training & Certification</h2>
                  <hr>
                  <div class="form-group">
                    <h4>1.</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['other_train_cert_1'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>2.</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['other_train_cert_2'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>3.</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['other_train_cert_3'] ?></span>
                    </h5>
                  </div>
                  <br>
                  <h2>7. Work Experience 1</h2>
                  <hr>
                  <div class="form-group">
                    <h4>Company</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['work_company_1'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Period</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['work_period_1'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Role</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['work_role_1'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Website/Email</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['work_website_1'] ?></span>
                    </h5>
                  </div>
                  <br>
                  <h2>8. Work Experience 2</h2>
                  <hr>
                  <div class="form-group">
                    <h4>Company</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['work_company_2'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Period</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['work_period_2'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Role</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['work_role_2'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Website/Email</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['work_website_2'] ?></span>
                    </h5>
                  </div>
                  <br>
                  <h2>9. Work Experience 3</h2>
                  <hr>
                  <div class="form-group">
                    <h4>Company</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['work_company_3'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Period</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['work_period_3'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Role</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['work_role_3'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Website/Email</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['work_website_3'] ?></span>
                    </h5>
                  </div>
                  <br>
                  <h2>10. Referrals 1</h2>
                  <hr>
                  <div class="form-group">
                    <h4>Name</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['referr_name_1'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Phone</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['referr_phone_1'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Email</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['referr_email_1'] ?></span>
                    </h5>
                  </div>
                  <br>
                  <h2>11. Referrals 2</h2>
                  <hr>
                  <div class="form-group">
                    <h4>Name</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['referr_name_2'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Phone</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['referr_phone_2'] ?></span>
                    </h5>
                  </div>
                  <div class="form-group">
                    <h4>Email</h4>
                    <h5 class="form-control">
                      <span><?php echo $row['referr_email_2'] ?></span>
                    </h5>
                  </div>
                  <br>
                  <h2>12. What are your areas of expertise? (please tick all that apply)</h2>
                  <hr>
                  <div class="form-group">
                    <h4>Answer:</h4>
                    <h5 class="form-control">
                      <span><?php echo $_POST['expertise'][$key];
                                  echo '<br>';
                                  echo $_POST['expertise'][$key];
                            ?>
                      </span>
                    </h5>
                  </div>
                  <div class="mt-5">
                      <a class="btn btn-outline-danger" href="../list/"><i class="fa fa-sign-out-alt"></i><span>Back</span></a>
                  </div>
                </div>
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
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
      <script type="text/javascript">
      $(document).ready(function() {
          $('#example').DataTable();
        } );
      </script>
    </body>
  </html>
