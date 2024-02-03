<?php
   /**
    * CREATE USER GRANT ACCESS to DB: db_mylabsql_4b and information_schema;
    */

   $server = "127.0.0.1";
   $user = "userrek_b";
   $password = "isopasti132_b";
   $dbname = "db_mylabsql_4b";

   $conn_2 = new mysqli($server, $user, $password, $dbname);
   if ($conn_2->connect_error) {
      die("Connection failed: ".$conn_2->connect_error);
   }
?>