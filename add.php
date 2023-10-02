<?php
include "connection.php";

if (isset($_POST["submit"])) {
   $first_name = $_POST['first_name'];
   $middle_name = $_POST['middle_name'];
   $last_name = $_POST['last_name'];
   $birthdate = $_POST['birthdate'];
   $gender = $_POST['gender'];
   $cellphone_no = $_POST['cellphone_no'];
   $address = $_POST['address'];

   $sql = "INSERT INTO `applicant-table`(`first_name`, `middle_name`, `last_name`, `birthdate`, `gender`, `cellphone_no`, `address`) VALUES ('$first_name','$middle_name','$last_name','$birthdate','$gender','$cellphone_no','$address')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>CRUD PHP</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #1AACAC;">
      CRUD PHP INTERVIEW EXERCISE
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>New Applicant</h3>
         <p class="text-muted">Complete the form below to continue the application</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">First Name:</label>
                  <input type="text" class="form-control" name="first_name" placeholder="Ferdinand">
               </div>

               <div class="col">
                  <label class="form-label">Middle Name:</label>
                  <input type="text" class="form-control" name="middle_name" placeholder="Quilantang">
               </div>

               <div class="col">
                  <label class="form-label">Last Name:</label>
                  <input type="text" class="form-control" name="last_name" placeholder="Coronel">
               </div>
            </div>

            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Birthdate</label>
                  <input type="text" class="form-control" name="birthdate" placeholder="yyyy-mm-dd">
               </div>

               <div class="col">
                  <label class="form-label">Cellphone No:</label>
                  <input type="text" class="form-control" name="cellphone_no" placeholder="09*********">
               </div>

               
            </div>

            <div class="mb-3">
               <label class="form-label">Address:</label>
               <input type="text" class="form-control" name="address" placeholder="address">
            </div>

            <div class="form-group mb-3">
               <label>Gender:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="male" value="male">
               <label for="male" class="form-input-label">Male</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="female" value="female">
               <label for="female" class="form-input-label">Female</label>
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>