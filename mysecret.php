<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Secret</title>
   <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
   <!-- NAVBAR -->
   <?php include("navbar.php"); ?>

   <div class="container">
      <div class="card col-6 mt-5 mx-auto">
         <div class="card-header">Secret</div>
         <div class="card-body">
            <p>Our Secret don't breach it, I know who you are.</p>
            <p>I know your address, when you access this page I logged your number in my secret note.</p>
         </div>
      </div>
   </div>

   <!-- Logged IP to database -->
   <?php
      require('./koneksi/koneksiE.php');
      // Vulnerable script
      $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'] = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['HTTP_CLIENT_IP'] ?? $_SERVER['REMOTE_ADDR'];
      $timestamp = date('Y-m-d H:i:s');
      $query = "INSERT INTO log_secret(ip_address, timestamp) VALUES('". $ip_address ."', '". $timestamp ."')";
      $result = $conn->query($query);

      // Safe script
      // $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'] = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['HTTP_CLIENT_IP'] ?? $_SERVER['REMOTE_ADDR'];
      // $timestamp = date('Y-m-d H:i:s');
      // $query = "INSERT INTO log_secret(ip_address, timestamp) VALUES(?, ?)";
      // $stmt = $conn->prepare($query);
      // $stmt->bind_param("ss", $ip_address, $timestamp);
      // $stmt->execute();
      // $stmt->close();
      // $conn->close();
   ?>


   <script src="./assets/jquery-3.7.1.min.js"></script>
   <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>