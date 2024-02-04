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
      // Vulnerable script
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

<?php
      // Safe script
      // $id = $_GET["id"];
      // // GET USER PROFILE
      // $query_profile = "SELECT id, name FROM users WHERE id = ?";
      // $stmt_profile = $conn->prepare($query_profile);
      // $stmt_profile->bind_param("i", $id);
      // $stmt_profile->execute();
      // $stmt_profile->bind_result($profile_id, $profile_name);
      // if ($stmt_profile->fetch() <> true) {
      //    $result_profile = [
      //       'id' => null,
      //       'name' => null
      //    ];
      // } else {
      //    $result_profile = [
      //       'id' => $profile_id,
      //       'name' => $profile_name
      //    ];
      // }
      // $stmt_profile->close();
      // $conn->close();

      // // GET NOTES
      //  $user_id = $result_profile['id'] ?? "";
      //  $query_note = "SELECT id, title FROM posts WHERE created_by = ?";
      //  $stmt_note = $conn_2->prepare($query_note);
      //  $stmt_note->bind_param("i", $user_id);
      //  $stmt_note->execute();
      //  $stmt_note->bind_result($note_id, $note_title);
       
      //  $idx = 0;
      //  $result_note = [];
      //  while($stmt_note->fetch()) {
      //    $result_note[$idx] = [
      //       "id" => $note_id,
      //       "title" => $note_title
      //    ];
      //    $idx++;
      //  }
      //  $stmt_note->close();
      //  $conn_2->close();
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