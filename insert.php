<?php
  
  // Include database connection

  include_once "db.php";

  // Insert multiple checkbox value in databse
  // $expertise = '';
  // $con = '';
  // $query = '';
  // $result = '';

  if ($_POST['expertise']) {

      $expertise = $_POST['expertise'];

      // $query = "INSERT INTO ncasurvey(expertise) VALUES('$expertise')";

      // $result = $con->query($query);

      // if ($result) {
      //     echo 1;
      // }else{
      //     echo 0;
      // }

  }

?>