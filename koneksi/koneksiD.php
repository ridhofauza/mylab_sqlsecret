<?php
   /**
    * CREATE USER GRANT ACCESS to DB: db_mylabsql_3 and information_schema;
    */

   $server = "127.0.0.1";
   $user = "postrek5";
   $password = "isopasti195";
   $dbname = "db_mylabsql_5";

   $conn = new mysqli($server, $user, $password, $dbname);
   if ($conn->connect_error) {
      die("Connection failed: ".$conn->connect_error);
   }
?>