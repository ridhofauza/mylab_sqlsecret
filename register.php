<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
   <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
   <!-- NAVBAR -->
   <?php include("navbar.php"); ?>

   <div class="container">
      <form action="#" method="POST" class="col-6 card mt-3 mx-auto">
         <div class="card-header">
            <h5>Register</h5>
         </div>
         <div class="card-body">
            <div class="mb-3">
               <label for="username" class="form-label">Username</label>
               <input type="text" name="username" class="form-control" id="username" placeholder="username" oninput="checkUsername()">
               <small class="message"></small>
               <!-- <small class="message text-danger">bad</small> -->
            </div>
            <div class="mb-3">
               <label for="password" class="form-label">Password</label>
               <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
               <label for="confirm_password" class="form-label">Konfirmasi Password</label>
               <input type="password" name="confirm_password" class="form-control" id="confirm_password">
            </div>
            <div class="mb-3">
               <button class="btn btn-success">Register</button>
            </div>
         </div>
      </form>
   </div>

   <script src="./assets/jquery-3.7.1.min.js"></script>
   <script src="./assets/js/bootstrap.min.js"></script>
   <script type="text/javascript">
      function checkUsername() {
         let tempUsername = $('#username').val();
         console.log(tempUsername);
         
         $.ajax({
            url: "/sql-injection/ajax-service/checkUsername.php",
            type: "POST",
            dataType: "json",
            data: {username: tempUsername},
         }).done(function(data) {
            if(data.message) {
               $('.message:eq(0)').removeClass("text-danger");
               $('.message:eq(0)').addClass("text-success");
               $('.message:eq(0)').text("Username tersedia");
               console.log("Username tersedia");
            } else {
               $('.message:eq(0)').removeClass("text-success");
               $('.message:eq(0)').addClass("text-danger");
               $('.message:eq(0)').text("Username telah terdaftar");
               console.log("Username telah terdaftar");
            }

            if(tempUsername == "") {
               $('.message:eq(0)').text("");
            }
            console.log(data);
         }).fail(function(err) {
            console.log(err);
         }); 

      }
   </script>
</body>

</html>