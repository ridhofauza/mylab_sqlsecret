<?php
require("../koneksi/koneksiB.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   $username = $_POST["username"];

   $query = "SELECT * FROM users_lab WHERE username = '" . $username . "'";
   $result = $conn->query($query)->fetch_assoc();

   $response["message"] = true;
   if ($result <> NULL) {
      $response["message"] = false;
   }
   echo json_encode($response);
} else {
   echo "404 NOT FOUND";
}
