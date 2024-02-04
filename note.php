<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Note</title>
   <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
   <!-- NAVBAR -->
   <?php include("navbar.php"); ?>

   <!-- Koneksi D -->
   <?php 
      require("./koneksi/koneksiD.php"); 
      // Vulnerable script
      $id = $_GET['id'];
      $query = "SELECT title, content FROM posts where id = ". $id ."";
      $result = $conn->query($query)->fetch_assoc();
      if($result == null) {
         $result = [
            'title' => '404',
            'content' => 'Not Found'
         ];
      }

      // Safe script
      // $id = $_GET['id'];
      // $query = "SELECT title, content FROM posts where id = ?";
      // $stmt = $conn->prepare($query);
      // $stmt->bind_param("i", $id);
      // $stmt->execute();
      // $stmt->bind_result($note_title, $note_content);
      // if($stmt->fetch()) {
      //    $result = [
      //       'title' => $note_title,
      //       'content' => $note_content
      //    ];
      // } else {
      //    $result = [
      //       'title' => '404',
      //       'content' => 'Not Found'
      //    ];
      // }
      // $stmt->close();
      // $conn->close();
   ?>

   <div class="container">
      <div class="card col-6 mt-5 mx-auto">
         <div class="card-header"><?php echo $result['title']?></div>
         <div class="card-body">
            <p><?php echo $result['content']?></p>
         </div>
      </div>
   </div>


   <script src="./assets/jquery-3.7.1.min.js"></script>
   <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>