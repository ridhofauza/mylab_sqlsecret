<?php
require("../koneksi/koneksiB.php");

// Vulnerable script
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

// Safe script
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//    $username = $_POST["username"];

//    $query = "SELECT * FROM users_lab WHERE username = ?";
//    $stmt = $conn->prepare($query);
//    $stmt->bind_param("s", $username);
//    $stmt->execute();

//    $response["message"] = true;
//    if ($stmt->fetch()) {
//       $response["message"] = false;
//       $stmt->close();
//       $conn->close();
//    }
//    echo json_encode($response);
// } else {
//    echo "404 NOT FOUND";
// }