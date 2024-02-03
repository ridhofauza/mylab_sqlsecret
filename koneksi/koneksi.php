<?php
   /**
    * CREATE USER GRANT ACCESS to DB: db_mylabsql and information_schema;
    */
   $server = "127.0.0.1";
   $user = "isorek";
   $password = "pastiiso123";
   $dbname = "db_mylabsql";

   $conn = new mysqli($server, $user, $password, $dbname);
   if ($conn->connect_error) {
      die("Connection failed: ".$conn->connect_error);
   }
?>