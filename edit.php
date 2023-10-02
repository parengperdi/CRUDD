<?php
include "connection.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
   $first_name = $_POST['first_name'];
   $middle_name = $_POST['middle_name'];
   $last_name = $_POST['last_name'];
   $birthdate = $_POST['birthdate'];
   $gender = $_POST['gender'];
   $cellphone_no = $_POST['cellphone_no'];
   $address = $_POST['address'];

   $sql = "UPDATE `applicant-table` SET `first_name`='$first_name',`middle_name`='$middle_name',`last_name`='$last_name',`birthdate`='$birthdate',`gender`='$gender',`cellphone_no`='$cellphone_no',`address`='$address' WHERE id = $id";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=Information updated successfully");
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
         <h3>Edit Info</h3>
         <p class="text-muted">Click update to change the information.</p>
      </div>

      <?php
       $sql = "SELECT * FROM `applicant-table` WHERE id = $id LIMIT 1";
       $result = mysqli_query($conn, $sql);
       $row = mysqli_fetch_assoc($result);
      ?>
      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">First Name:</label>
                  <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name'] ?>">
               </div>

               <div class="col">
                  <label class="form-label">Middle Name:</label>
                  <input type="text" class="form-control" name="middle_name" value="<?php echo $row['middle_name'] ?>">
               </div>

               <div class="col">
                  <label class="form-label">Last Name:</label>
                  <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'] ?>">
               </div>
            </div>

            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Birthdate</label>
                  <input type="text" class="form-control" name="birthdate"value="<?php echo $row['birthdate'] ?>">
               </div>

               <div class="col">
                  <label class="form-label">Cellphone No:</label>
                  <input type="text" class="form-control" name="cellphone_no" value="<?php echo $row['cellphone_no'] ?>">
               </div>

               
            </div>

            <div class="mb-3">
               <label class="form-label">Address:</label>
               <input type="text" class="form-control" name="address" pvalue="<?php echo $row['address'] ?>">
            </div>

            <div class="form-group mb-3">
               <label>Gender:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="male" value="male" <?php echo ($row["gender"] == 'male') ? "checked" : ""; ?>">
               <label for="male" class="form-input-label">Male</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="female" value="female" <?php echo ($row["gender"] == 'female') ? "checked" : ""; ?>">
               <label for="female" class="form-input-label">Female</label>
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Update</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>