<?php
  require_once('db.php');
  $upload_dir = 'uploads/';

  if (isset($_POST['Submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $id_no = $_POST['id_no'];
    $passport_no = $_POST['passport_no'];
    $tax_no = $_POST['tax_no'];
    $kra_pin = $_POST['kra_pin'];
    $title = $_POST['title'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $phd = $_POST['phd'];
    $masters = $_POST['masters'];
    $bachelors = $_POST['bachelors'];
    $post_grad_diploma = $_POST['post_grad_diploma'];
    $diploma = $_POST['diploma'];
    $post_phd = $_POST['post_phd'];
    $post_masters = $_POST['post_masters'];
    $post_degree = $_POST['post_degree'];
    $post_diploma = $_POST['post_diploma'];
    $other_train_cert_1 = $_POST['other_train_cert_1'];
    $other_train_cert_2 = $_POST['other_train_cert_2'];
    $other_train_cert_3 = $_POST['other_train_cert_3'];
    $work_company_1 = $_POST['work_company_1'];
    $work_period_1 = $_POST['work_period_1'];
    $work_role_1 = $_POST['work_role_1'];
    $work_website_1 = $_POST['work_website_1'];
    $work_company_2 = $_POST['work_company_2'];
    $work_period_2 = $_POST['work_period_2'];
    $work_role_2 = $_POST['work_role_2'];
    $work_website_2 = $_POST['work_website_2'];
    $work_company_3 = $_POST['work_company_3'];
    $work_period_3 = $_POST['work_period_3'];
    $work_role_3 = $_POST['work_role_3'];
    $work_website_3 = $_POST['work_website_3'];
    $referr_name_1 = $_POST['referr_name_1'];
    $referr_phone_1 = $_POST['referr_phone_1'];
    $referr_email_1 = $_POST['referr_email_1'];
    $referr_name_2 = $_POST['referr_name_2'];
    $referr_phone_2 = $_POST['referr_phone_2'];
    $referr_email_2 = $_POST['referr_email_2'];
	$expertise = $_POST['expertise'];

    $imgName = $_FILES['image']['name'];
		$imgTmp = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];

    if(empty($firstname)){
			$errorMsg = 'Please input First Name!';
		}elseif(empty($lastname)){
			$errorMsg = 'Please input Last Name!';
		}elseif(empty($id_no)){
			$errorMsg = 'Please input ID No. !';
		}elseif(empty($passport_no)){
			$errorMsg = 'Please input Passport No. !';
		}elseif(empty($tax_no)){
			$errorMsg = 'Please input Valid Tax Compliance No. !';
		}elseif(empty($kra_pin)){
			$errorMsg = 'Please input KRA PIN No. !';
		}elseif(empty($title)){
			$errorMsg = 'Please input Your Title!';
		}elseif(empty($contact)){
			$errorMsg = 'Please input contact!';
		}elseif(empty($email)){
			$errorMsg = 'Please input email!';
		}elseif(empty($phd)){
			$errorMsg = 'Please input PHD Qualifications!';
		}elseif(empty($masters)){
			$errorMsg = 'Please input Masters Qualifications!';
		}elseif(empty($bachelors)){
			$errorMsg = "Please input Bachelor's Qualifications!";
		}elseif(empty($post_grad_diploma)){
			$errorMsg = "Please input Post-graduate Diploma Qualifications!";
		}elseif(empty($diploma)){
			$errorMsg = "Please input Diploma Qualifications!";
		}elseif(empty($post_phd)){
			$errorMsg = "Please input this field!";
		}elseif(empty($post_masters)){
			$errorMsg = "Please input this field!";
		}elseif(empty($post_degree)){
			$errorMsg = "Please input this field!";
		}elseif(empty($post_diploma)){
			$errorMsg = "Please input this field!";
		}elseif(empty($other_train_cert_1)){
			$errorMsg = "Please input this field!";
		}elseif(empty($other_train_cert_2)){
			$errorMsg = "Please input this field!";
		}elseif(empty($other_train_cert_3)){
			$errorMsg = "Please input this field!";
		}elseif(empty($work_company_1)){
			$errorMsg = "Please input this field!";
		}elseif(empty($work_period_1)){
			$errorMsg = "Please input this field!";
		}elseif(empty($work_role_1)){
			$errorMsg = "Please input this field!";
		}elseif(empty($work_website_1)){
			$errorMsg = "Please input this field!";
		}elseif(empty($work_company_2)){
			$errorMsg = "Please input this field!";
		}elseif(empty($work_period_2)){
			$errorMsg = "Please input this field!";
		}elseif(empty($work_role_2)){
			$errorMsg = "Please input this field!";
		}elseif(empty($work_website_2)){
			$errorMsg = "Please input this field!";
		}elseif(empty($work_company_3)){
			$errorMsg = "Please input this field!";
		}elseif(empty($work_period_3)){
			$errorMsg = "Please input this field!";
		}elseif(empty($work_role_3)){
			$errorMsg = "Please input this field!";
		}elseif(empty($work_website_3)){
			$errorMsg = "Please input this field!";
		}elseif(empty($referr_name_1)){
			$errorMsg = "Please input this field!";
		}elseif(empty($referr_phone_1)){
			$errorMsg = "Please input this field!";
		}elseif(empty($referr_email_1)){
			$errorMsg = "Please input this field!";
		}elseif(empty($referr_name_2)){
			$errorMsg = "Please input this field!";
		}elseif(empty($referr_phone_2)){
			$errorMsg = "Please input this field!";
		}elseif(empty($referr_email_2)){
			$errorMsg = "Please input this field!";
		}elseif(empty($expertise)){
			$errorMsg = "Please input this field!";
		}else{

			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

			if(in_array($imgExt, $allowExt)){

				if($imgSize < 5000000){
					move_uploaded_file($imgTmp ,$upload_dir.$userPic);
				}else{
					$errorMsg = 'Image too large';
				}
			}else{
				$errorMsg = 'Please select a valid image';
			}
		}


		if(!isset($errorMsg)){
			$sql = "insert into ncasurvey(firstname, lastname, id_no, passport_no, tax_no, kra_pin, title, contact, email, phd, masters, bachelors, post_grad_diploma, diploma, post_phd, post_masters, post_degree, post_diploma, other_train_cert_1, other_train_cert_2, other_train_cert_3, work_company_1, work_period_1, work_role_1, work_website_1, work_company_2, work_period_2, work_role_2, work_website_2, work_company_3, work_period_3, work_role_3, work_website_3, referr_name_1, referr_phone_1, referr_email_1, referr_name_2, referr_phone_2, referr_email_2, expertise, image)
					values('".$firstname."', '".$lastname."', '".$id_no."', '".$passport_no."', '".$tax_no."', '".$kra_pin."', '".$title."', '".$contact."', '".$email."', '".$phd."', '".$masters."', '".$bachelors."', '".$post_grad_diploma."', '".$diploma."', '".$post_phd."', '".$post_masters."', '".$post_degree."', '".$post_diploma."', '".$other_train_cert_1."', '".$other_train_cert_2."', '".$other_train_cert_3."', '".$work_company_1."', '".$work_period_1."', '".$work_role_1."', '".$work_website_1."', '".$work_company_2."', '".$work_period_2."', '".$work_role_2."', '".$work_website_2."', '".$work_company_3."', '".$work_period_3."', '".$work_role_3."', '".$work_website_3."', '".$referr_name_1."', '".$referr_phone_1."', '".$referr_email_1."', '".$referr_name_2."', '".$referr_phone_2."', '".$referr_email_2."', '".$expertise."', '".$userPic."')";
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record added successfully';
				header('Location: thank-you/');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NCA SURVEY</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
   <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
   <!-- Icons -->
   <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
   <link rel="stylesheet" href="assets/vendor/@fortawesome/css/all.min.css" type="text/css">
   <link rel="stylesheet" type="text/css" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
   <!-- Argon CSS -->
   <link rel="stylesheet" href="assets/css/argon.css" type="text/css">
   <link rel="stylesheet" href="assets/css/aos.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
  </head>
  <body>

      <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
        <!-- <a class="navbar-brand" href="index.php">
          <img src="assets/img/nca_2.png" width="200">
        </a> -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="btn btn-outline-danger" href="index.php"><i class="fa fa-sign-out-alt"></i></a></li>
            </ul>
        </div>
        </div>
      </nav>

      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-danger">
                    <div class="card-body text-center"><h1 class="text-white">⚠</h1><h2 class="text-white">There was a problem submitting your survey!</h2></div>
                </div>
            </div>
        </div>
      </div>

    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
  </body>
</html>

