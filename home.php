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
   ?>

   <div class="container">
      <h1 class="text-center mt-5 mb-3">Daily Note</h1>
      <div class="card mb-3">
         <div class="card-header">
            First Note : by <a href="profile.php?id=1" class="text-decoration-none">owner</a>
         </div>
         <div class="card-body">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil magni repellendus sit totam sint modi fugiat sed praesentium eos quam quisquam quidem unde accusantium veniam, vitae illum! Esse, quasi asperiores.
               Aperiam nihil illum suscipit perspiciatis quod. Corporis reprehenderit sed labore, sequi soluta, repellendus harum, voluptates consectetur repellat dolore nulla. Reprehenderit, dolor incidunt veritatis numquam eum hic modi reiciendis ea magni. [<a href="note.php?id=1" class="text-decoration-none">Read More</a>]</p>
         </div>
      </div>

      <div class="card mb-3">
         <div class="card-header">
            Second Note : by <a href="profile.php?id=1" class="text-decoration-none">owner</a>
         </div>
         <div class="card-body">
            <p>Libero dolorem accusamus natus nisi quaerat illum velit hic, quis, optio suscipit tenetur, totam asperiores? Voluptas quisquam temporibus error, esse, nobis explicabo delectus earum, nulla doloribus magni eos rerum! Libero!
               Omnis accusamus dolore excepturi minus perferendis mollitia magnam? Soluta, alias ratione? Possimus eveniet eos cupiditate adipisci quia neque! Officia magni voluptatum assumenda nesciunt aliquid delectus fugiat in consequuntur exercitationem quidem. [<a href="note.php?id=2" class="text-decoration-none">Read More</a>]</p>
         </div>
      </div>

      <div class="mb-3 text-center text-decoration-none">
         <a href="mysecret.php" class="text-decoration-none">See My Secret Note</a>
      </div>
   </div>


   <script src="./assets/jquery-3.7.1.min.js"></script>
   <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>