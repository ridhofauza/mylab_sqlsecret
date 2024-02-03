<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Welcome</title>
   <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
   <!-- NAVBAR -->
   <?php include("navbar.php"); ?>
   <?php
   // ================= 
   require("./koneksi/koneksi.php");
   session_start();
   $is_login = $_SESSION['is_login'];
   if($is_login <> true) {
      header("Location: index.php");
   } else {
      session_destroy();
   }
   ?>

   <div class="container">
      <div class="col-6 card mt-3 mx-auto">
         <div class="card-body">
            <div class="mb-3">
               <?php
                  $query = "SELECT flag FROM flag";
                  $result = $conn->query($query)->fetch_assoc();
                  echo $result['flag'];
               ?>
            </div>
         </div>
      </div>
   </div>

   <script src="./assets/jquery-3.7.1.min.js"></script>
   <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>