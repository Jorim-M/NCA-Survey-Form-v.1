<div class="container" style="display: none;">
<?php
  include('add.php')
?>
</div>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NCA SURVEY</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Tel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
   <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
   <!-- Icons -->
   <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
   <link rel="stylesheet" href="assets/vendor/@fortawesome/css/all.min.css" type="text/css">
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" type="text/css"/>
   <!-- Argon CSS -->
   <link rel="stylesheet" href="assets/css/argon.css" type="text/css">
   <link rel="stylesheet" href="assets/css/aos.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
      <div class="container">
        <a class="navbar-brand" href="">
          <img src="assets/img/nca_2.png" width="200">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="btn btn-outline-danger" href="index.php"><i class="fa fa-sign-out-alt"></i></a></li>
            </ul>
        </div> -->
      </div>
    </nav>

      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <h1 class="text-muted text-center"><em>EXPRESSION OF INTEREST FOR THE REGISTRATION OF RESOURCE PERSON</em></h1>
            <div class="card">
              <div class="card-header">
                Thank you for your interest to Register as a Resource Persons. Please fill out this survey form to get registered.
              </div>
              <div class="card-body col-md-12 mx-auto">
                <form class="" action="add.php" method="post" enctype="multipart/form-data">
                  <div id="carouselExampleIndicators" class="carousel slide" data-interval="false">
                    <!-- <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    </ol> -->
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="form-group">
                          <h1>1. Contact Info</h1>
                          <hr>
                        </div>
                        <div class="form-group">
                          <label for="firstname">First Name</label>
                          <input type="text" class="form-control" name="firstname"  placeholder="Enter First Name" value="">
                        </div>
                        <div class="form-group">
                          <label for="lastname">Last Name</label>
                          <input type="text" class="form-control" name="lastname"  placeholder="Enter Last Name" value="">
                        </div>
                        <div class="form-group">
                          <label for="id_no">ID No.</label>
                          <input type="number" class="form-control" name="id_no"  placeholder="Enter ID No." value="">
                        </div>
                        <div class="form-group">
                          <label for="passport_no">Passport No.</label>
                          <input type="number" class="form-control" name="passport_no"  placeholder="Enter Passport No." value="">
                        </div>
                        <div class="form-group">
                          <label for="email">E-Mail</label>
                          <input type="email" class="form-control" name="email" placeholder="Enter Email" value="">
                        </div>
                        <div class="form-group" onclick="process(event)">
                          <label for="contact">Contact No:</label>
                          <input class="form-control" id="phone" type="tel" name="contact" value=""/>
                          <button type="click" class="btn btn-primary" value="Verify">Verify</button><br><br>
                          <div class="alert alert-info" style="display: none;"></div>
                        </div>
                        <div class="form-group">
                          <a href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="btn btn-primary waves" aria-hidden="true">Next
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="form-group">
                          <h1>2. Title & Other Info.</h1>
                          <hr>
                        </div>
                        <div class="form-group">
                          <label for="title">Title:</label>
                          <select class="form-control" name="title">
                                <option value="Prof.">Prof.</option>
                                <option value="Dr.">Dr.</option>
                                <option value="Eng.">Eng.</option>
                                <option value="Arch.">Arch.</option>
                                <option value="Qs.">Qs.</option>
                                <option value="Mr.">Mr.</option>
                                <option value="Ms.">Ms.</option>
                                <option value="Mrs.">Mrs.</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="tax_no">Valid Tax Compliance No.</label>
                          <input type="number" class="form-control" name="tax_no"  placeholder="Enter Tax Compliance No." value="">
                        </div>
                        <div class="form-group">
                          <label for="kra_pin">KRA PIN No.</label>
                          <input type="number" class="form-control" name="kra_pin"  placeholder="Enter KRA PIN No." value="">
                        </div><br><br><br>
                        <br><br><br><br><br>
                        <br><br><br><br><br>
                        <div class="form-group">
                          <a href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="btn btn-primary waves" aria-hidden="true">Previous</span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="btn btn-primary waves" aria-hidden="true">Next
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="form-group">
                          <h1>3. Upload Your Certificate</h1>
                          <hr>
                        </div>
                        <div class="form-group">
                          <label for="image">Choose Image</label>
                          <input type="file" class="form-control" name="image" value="">
                        </div>
                        <br><br><br><br><br>
                        <br><br><br><br><br>
                        <br><br><br><br>
                        <br><br><br>
                        <br><br>
                        <br><br>
                        <!-- <div class="form-group"><em class="text-danger">Make sure you've filled in all the fields before submitting!</em></div> -->
                        <div class="form-group">
                          <a href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="btn btn-primary waves" aria-hidden="true">Previous</span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="btn btn-primary waves" aria-hidden="true">Next
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="form-group">
                          <h1>4. List Your Academic Qualifications</h1>
                          <hr>
                        </div>
                        <div class="form-group">
                          <label for="phd">PHD</label>
                          <input type="text" class="form-control" name="phd"  placeholder="Enter PHD Qualification" value="">
                        </div>
                        <div class="form-group">
                          <label for="masters">Masters</label>
                          <input type="text" class="form-control" name="masters"  placeholder="Enter Masters Qualification" value="">
                        </div>
                        <div class="form-group">
                          <label for="bachelors">Bachelor's Degree</label>
                          <input type="text" class="form-control" name="bachelors"  placeholder="Enter Bachelor's Degree Qualification" value="">
                        </div>
                        <div class="form-group">
                          <label for="post_grad_diploma">Postgraduate Diploma</label>
                          <input type="text" class="form-control" name="post_grad_diploma"  placeholder="Enter Postgraduate Diploma Qualification" value="">
                        </div>
                        <div class="form-group">
                          <label for="diploma">Diploma</label>
                          <input type="text" class="form-control" name="diploma"  placeholder="Enter Diploma Qualification" value="">
                        </div>
                        <br><br><br><br>
                        <div class="form-group">
                          <a href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="btn btn-primary waves" aria-hidden="true">Previous</span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="btn btn-primary waves" aria-hidden="true">Next
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="form-group">
                          <h1>5. Academic Experience</h1>
                          <hr>
                        </div>
                        <div class="form-group">
                          <label for="post_phd">Post PHD Experience (Years)</label>
                          <input type="text" class="form-control" name="post_phd"  placeholder="" value="">
                        </div>
                        <div class="form-group">
                          <label for="post_masters">Post Masters Experience (Years)</label>
                          <input type="text" class="form-control" name="post_masters"  placeholder="" value="">
                        </div>
                        <div class="form-group">
                          <label for="post_degree">Post Degree Experience (Years)</label>
                          <input type="text" class="form-control" name="post_degree"  placeholder="" value="">
                        </div>
                        <div class="form-group">
                          <label for="post_diploma">Post Diploma Experience (Years)</label>
                          <input type="text" class="form-control" name="post_diploma"  placeholder="" value="">
                        </div>
                        <br><br><br><br>
                        <br><br><br><br>
                        <div class="form-group">
                          <a href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="btn btn-primary waves" aria-hidden="true">Previous</span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="btn btn-primary waves" aria-hidden="true">Next
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="form-group">
                          <h1>6. Other Professional Training & Certification</h1>
                          <hr>
                        </div>
                        <div class="form-group">
                          <label for="other_train_cert_1">1.</label>
                          <input type="text" class="form-control" name="other_train_cert_1"  placeholder="" value="">
                        </div>
                        <div class="form-group">
                          <label for="other_train_cert_2">2.</label>
                          <input type="text" class="form-control" name="other_train_cert_2"  placeholder="" value="">
                        </div>
                        <div class="form-group">
                          <label for="other_train_cert_3">3.</label>
                          <input type="text" class="form-control" name="other_train_cert_3"  placeholder="" value="">
                        </div>
                        <br><br><br><br>
                        <br><br><br><br>
                        <br><br><br><br>
                        <div class="form-group">
                          <a href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="btn btn-primary waves" aria-hidden="true">Previous</span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="btn btn-primary waves" aria-hidden="true">Next
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="form-group">
                          <h1>7. Work Experience 1</h1>
                          <hr>
                        </div>
                        <div class="form-group">
                          <label for="work_company_1">Company</label>
                          <input type="text" class="form-control" name="work_company_1"  placeholder="Enter Name of Company" value="">
                        </div>
                        <div class="form-group">
                          <label for="work_period_1">Period</label>
                          <input type="text" class="form-control" name="work_period_1"  placeholder="Enter your Period in the Company" value="">
                        </div>
                        <div class="form-group">
                          <label for="work_role_1">Role</label>
                          <input type="text" class="form-control" name="work_role_1"  placeholder="Enter your Role in the Company" value="">
                        </div>
                        <div class="form-group">
                          <label for="work_website_1">Website/Email</label>
                          <input type="text" class="form-control" name="work_website_1"  placeholder="Enter Website of the Company" value="">
                        </div>
                        <br><br><br><br>
                        <br><br><br><br>
                        <div class="form-group">
                          <a href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="btn btn-primary waves" aria-hidden="true">Previous</span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="btn btn-primary waves" aria-hidden="true">Next
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="form-group">
                          <h1>8. Work Experience 2</h1>
                          <hr>
                        </div>
                        <div class="form-group">
                          <label for="work_company_2">Company 
                            <em class="text-muted">(Type 'None', if not applicable)</em>
                          </label>
                          <input type="text" class="form-control" name="work_company_2"  placeholder="Enter Name of Company" value="">
                        </div>
                        <div class="form-group">
                          <label for="work_period_2">Period 
                            <em class="text-muted">(Type 'None', if not applicable)</em>
                          </label>
                          <input type="text" class="form-control" name="work_period_2"  placeholder="Enter your Period in the Company" value="">
                        </div>
                        <div class="form-group">
                          <label for="work_role_2">Role 
                            <em class="text-muted">(Type 'None', if not applicable)</em>
                          </label>
                          <input type="text" class="form-control" name="work_role_2"  placeholder="Enter your Role in the Company" value="">
                        </div>
                        <div class="form-group">
                          <label for="work_website_2">Website/Email 
                            <em class="text-muted">(Type 'None', if not applicable)</em>
                          </label>
                          <input type="text" class="form-control" name="work_website_2"  placeholder="Enter Website of the Company" value="">
                        </div>
                        <br><br><br><br>
                        <br><br><br><br>
                        <div class="form-group">
                          <a href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="btn btn-primary waves" aria-hidden="true">Previous</span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="btn btn-primary waves" aria-hidden="true">Next
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="form-group">
                          <h1>9. Work Experience 3</h1>
                          <hr>
                        </div>
                        <div class="form-group">
                          <label for="work_company_3">Company 
                            <em class="text-muted">(Type 'None', if not applicable)</em>
                          </label>
                          <input type="text" class="form-control" name="work_company_3"  placeholder="Enter Name of Company" value="">
                        </div>
                        <div class="form-group">
                          <label for="work_period_3">Period 
                            <em class="text-muted">(Type 'None', if not applicable)</em>
                          </label>
                          <input type="text" class="form-control" name="work_period_3"  placeholder="Enter your Period in the Company" value="">
                        </div>
                        <div class="form-group">
                          <label for="work_role_3">Role 
                            <em class="text-muted">(Type 'None', if not applicable)</em>
                          </label>
                          <input type="text" class="form-control" name="work_role_3"  placeholder="Enter your Role in the Company" value="">
                        </div>
                        <div class="form-group">
                          <label for="work_website_3">Website/Email 
                            <em class="text-muted">(Type 'None', if not applicable)</em>
                          </label>
                          <input type="text" class="form-control" name="work_website_3"  placeholder="Enter Website of the Company" value="">
                        </div>
                        <br><br><br><br>
                        <br><br><br><br>
                        <div class="form-group">
                          <a href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="btn btn-primary waves" aria-hidden="true">Previous</span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="btn btn-primary waves" aria-hidden="true">Next
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="form-group">
                          <h1>10. Referrals 1</h1>
                          <hr>
                        </div>
                        <div class="form-group">
                          <label for="referr_name_1">Name 
                          </label>
                          <input type="text" class="form-control" name="referr_name_1"  placeholder="Enter Name of Referral" value="">
                        </div>
                        <div class="form-group">
                          <label for="referr_phone_1">Phone
                          </label>
                          <input type="text" class="form-control" name="referr_phone_1"  placeholder="Enter Contact No. of Referral" value="">
                        </div>
                        <div class="form-group">
                          <label for="referr_email_1">Email 
                          </label>
                          <input type="text" class="form-control" name="referr_email_1"  placeholder="Enter Email of Referral" value="">
                        </div>
                        <br><br><br><br>
                        <br><br><br><br>
                        <br><br><br><br>
                        <div class="form-group">
                          <a href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="btn btn-primary waves" aria-hidden="true">Previous</span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="btn btn-primary waves" aria-hidden="true">Next
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="form-group">
                          <h1>11. Referrals 2</h1>
                          <hr>
                        </div>
                        <div class="form-group">
                          <label for="referr_name_2">Name 
                          </label>
                          <input type="text" class="form-control" name="referr_name_2"  placeholder="Enter Name of Referral" value="">
                        </div>
                        <div class="form-group">
                          <label for="referr_phone_2">Phone
                          </label>
                          <input type="text" class="form-control" name="referr_phone_2"  placeholder="Enter Contact No. of Referral" value="">
                        </div>
                        <div class="form-group">
                          <label for="referr_email_2">Email 
                          </label>
                          <input type="text" class="form-control" name="referr_email_2"  placeholder="Enter Email of Referral" value="">
                        </div>
                        <br><br><br><br>
                        <br><br><br><br>
                        <br><br><br><br>
                        <div class="form-group">
                          <a href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="btn btn-primary waves" aria-hidden="true">Previous</span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="btn btn-primary waves" aria-hidden="true">Next
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="form-group">
                          <h1>12. What are your areas of expertise?<br>
                            <em class="text-muted">(please tick all that apply)</em>
                          </h1>
                          <hr>
                        </div>
                        <div class="form-group">
                          <div class="custom-control custom-checkbox mb-3">
                            <input class="custom-control-input" name="expertise[]" id="expertise-1" type="checkbox" value="Subject matter">
                            <label class="custom-control-label" for="expertise-1">Answer 1</label>
                          </div>
                          <div class="custom-control custom-checkbox mb-3">
                            <input class="custom-control-input" name="expertise[]" id="expertise-2" type="checkbox" value="Area of Experience">
                            <label class="custom-control-label" for="expertise-2">Answer 2</label>
                          </div>
                          <!-- <label for="expertise">Name 
                          </label>
                          <input type="text" class="form-control" name="expertise"  placeholder="Answer Here" value=""> -->
                        </div>
                        <br><br><br><br>
                        <br><br><br><br>
                        <br><br><br><br>
                        <div class="form-group">
                          <a href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="btn btn-primary waves" aria-hidden="true">Previous</span>
                            <span class="sr-only">Previous</span>
                          </a><!-- 
                          <a href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="btn btn-primary waves" aria-hidden="true">Next
                            <span class="sr-only">Next</span>
                          </a> -->
                          <button type="submit" name="Submit" class="btn btn-primary waves">Submit</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                </div>
            </div>
              <footer class="py-5 mt-5 bg-transparent" id="footer-main">
                 <div class="container">
                    <div class="row align-items-center justify-content-between">
                       <div class="col-md-12">
                          <ul class="nav nav-footer justify-content-center">
                             <span class="love-from" class="font-weight-bold ">Developed with <i class="icon ion-heart" style="color:#CD252D;"></i> by <img src="assets/img/westos.svg" width="100"></span>
                          </ul>
                       </div>
                    </div>
                 </div>
              </footer>
          </div>
        </div>
      </div>

    <script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
    <script>
      const phoneInputField = document.querySelector("#phone");
      const phoneInput = window.intlTelInput(phoneInputField, {
         initialCountry: "ke",
         preferredCountries: ["ke", "tz", "ug"],
         utilsScript:
           "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
      });

      const info = document.querySelector(".alert-info");

      function process(event) {
       event.preventDefault();

       const phoneNumber = phoneInput.getNumber();

       info.style.display = "";
       info.innerHTML = `Phone number in E.164 format: <strong>${phoneNumber}</strong>`;
      }

      function getIp(callback) {
       fetch('https://ipinfo.io/json?token=<your token>', { headers: { 'Accept': 'application/json' }})
         .then((resp) => resp.json())
         .catch(() => {
           return {
             country: 'ke',
           };
         })
         .then((resp) => callback(resp.country));
      }
   </script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
    <!-- Scripts -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script src="assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="assets/vendor/jquery-scroll-lock/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="assets/js/argon.min.js"></script>
    <script src="assets/js/argon.js"></script>
    <!-- Argon JS -->
    <script src="assets/js/argon.js"></script>
    <script src="assets/js/aos.js"></script>
  </body>
</html>
