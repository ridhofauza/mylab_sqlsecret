<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Profile</title>
   <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
   <!-- NAVBAR -->
   <?php include("navbar.php"); ?>

   <!-- Koneksi C -->
    <?php require("./koneksi/koneksiC.php") ?>

   <!-- Koneksi C2 -->
   <?php require("./koneksi/koneksiC_2.php") ?>

   <?php
      $id = $_GET["id"];
      // GET USER PROFILE
      $query_profile = "SELECT id, name FROM users WHERE id = " . $id . "";
      $result_profile = $conn->query($query_profile)->fetch_assoc();
      if ($result_profile == null) {
         $result_profile = [
            'id' => null,
            'name' => null
         ];
      }

      // GET NOTES
       $user_id = $result_profile['id'] ?? "null";
       $query_note = "SELECT id, title FROM posts WHERE created_by = ". $user_id ."";
       $result_note = $conn_2->query($query_note);
   ?>

   <div class="container">
      <div class="card col-6 mt-5 mx-auto">
         <div class="card-header">Owner Details</div>
         <div class="card-body">
            <div class="mb-1">
               <b>User ID: </b> <?php echo $result_profile['id'] ?> <br>
            </div>
            <div class="mb-1">
               <b>Username: </b> <?php echo $result_profile['name'] ?> <br>
            </div>
            <div class="mb-1">
               <b>Notes: </b> <br>
               <ul>
                  <?php foreach($result_note as $rn) {?>
                  <li><a href="note.php?id=<?php echo $rn['id'] ?>" class="text-decoration-none"><?php echo $rn['title'] ?></a></li>
                  <?php } ?>
               </ul>
            </div>
         </div>
      </div>
   </div>


   <script src="./assets/jquery-3.7.1.min.js"></script>
   <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>