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
   ?>

   <div class="container">
      <form action="#" method="POST" class="col-6 card mt-3 mx-auto">
         <div class="card-header">
            <h5>Login</h5>
         </div>
         <div class="card-body">
            <div class="mb-3">
               <label for="username" class="form-label">Username</label>
               <input type="text" name="username" class="form-control" id="username" placeholder="username">
            </div>
            <div class="mb-3">
               <label for="password" class="form-label">Password</label>
               <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
               <button class="btn btn-primary">Login</button>
            </div>
         </div>
      </form>
   </div>

   <?php
   // Vulnerable script
   if ($_POST) {
      if ($_POST["username"] <> "" || $_POST["password"] <> "") {
         $isLogin = false;
         $username = $_POST["username"];
         $password = $_POST["password"];
         $query = "SELECT * FROM users_lab WHERE username = '" . $username . "'";
         $result = $conn->query($query)->fetch_assoc();

         if ($result <> NULL) {
            $query = "SELECT * FROM users_lab WHERE username = '" . $result["username"] . "' AND password = '" . $password . "'";
            $result = $conn->query($query)->fetch_assoc();
            if ($result <> NULL) {
               $isLogin = true;
            }
         }

         if ($isLogin === true) {
            session_start();
            $_SESSION['is_login'] = $isLogin;
            header("Location: dashboard.php");
         } else {
            echo "<script>alert('Login Gagal!')</script>";
         }
      }
   }
   ?>

   <?php
   // Safe script
   // if ($_POST) {
   //    if ($_POST["username"] <> "" || $_POST["password"] <> "") {
   //       $isLogin = false;
   //       $username = $_POST["username"];
   //       $password = $_POST["password"];
   //       $query = "SELECT username FROM users_lab WHERE username = ?";
   //       $stmt = $conn->prepare($query);
   //       $stmt->bind_param("s", $username);
   //       $stmt->execute();
   //       $stmt->bind_result($result_username);
   //       if ($stmt->fetch()) {
   //          $stmt->close();
   //          $query = "SELECT * FROM users_lab WHERE username = ? AND password = ?";
   //          $stmt = $conn->prepare($query);
   //          $stmt->bind_param("ss", $result_username, $password);
   //          $stmt->execute();
   //          if ($stmt->fetch()) {
   //             $stmt->close();
   //             $isLogin = true;
   //          }
   //       }
   //       $conn->close();

   //       if ($isLogin === true) {
   //          session_start();
   //          $_SESSION['is_login'] = $isLogin;
   //          header("Location: dashboard.php");
   //       } else {
   //          echo "<script>alert('Login Gagal!')</script>";
   //       }
   //    }
   // }
   ?>

   <script src="./assets/jquery-3.7.1.min.js"></script>
   <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>