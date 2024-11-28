<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_id =  $_POST['customer_id'];
    $daily_caloric_intake = $_POST['daily_caloric_intake'];
    $breakfast = $_POST['breakfast'];
    $lunch = $_POST['lunch'];
    $dinner = $_POST['dinner'];
    $snacks = $_POST['snacks']; 

    $stmt = $conn->prepare("INSERT INTO tbldiet (customer_id, daily_caloric_intake, breakfast, lunch, dinner, snacks) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sissss", $customer_id, $daily_caloric_intake, $breakfast, $lunch, $dinner, $snacks);

    if ($stmt->execute()) {
        echo '<script type="text/javascript">
                alert("Diet added successfully");
                window.location.href = "t_customer_view.php";
              </script>';
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>