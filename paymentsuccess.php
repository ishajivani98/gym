<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include 'db_connection.php';

if (!isset($_SESSION['user_id'])) {
    echo "User  not logged in.";
    exit;
}

$user_id = intval($_SESSION['user_id']);

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if 'orderid' is set in the POST data
    if (isset($_POST['orderid'])) {
        // Retrieve POST data
        $orderid = $_POST['orderid'];
        $mpid = $_POST['mpid'];
        $duration = isset($_POST['duration']) ? (int)$_POST['duration'] : 0;

        // Get the current date
        $startdate = new DateTime();

        // Calculate the end date based on the duration
        if ($duration === 1) {
            $enddate = (clone $startdate)->modify('+1 month');
        } elseif ($duration === 6) {
            $enddate = (clone $startdate)->modify('+6 months');
        } elseif ($duration === 12) {
            $enddate = (clone $startdate)->modify('+12 months');
        } else {
            // Handle invalid duration
            die("Invalid duration");
        }

        // Format the dates as needed (e.g., Y-m-d)
        $startdateFormatted = $startdate->format('Y-m-d');
        $enddateFormatted = $enddate->format('Y-m-d');

        // Check if the subscription already exists
        $checkSql = "SELECT * FROM tbl_subscription WHERE order_id = '{$orderid}' AND c_id = '{$user_id}'";
        $checkResult = mysqli_query($conn, $checkSql);

        if (mysqli_num_rows($checkResult) > 0) {
           
        } else {
            // Prepare SQL statement for inserting a new subscription
            $sql = "INSERT INTO tbl_subscription (order_id, mp_id, c_id, startdate, enddate, payment_status)
                    VALUES ('{$orderid}', '{$mpid}', '{$user_id}', '{$startdateFormatted}', '{$enddateFormatted}', 'Success')";

            // Check if the query is successful
            if (mysqli_query($conn, $sql)) {
                echo '<script type="text/javascript">
                        alert("Payment successfully recorded.");
                        </script>';
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }

        // Close the connection
        mysqli_close($conn);

    } else {
        echo "Order ID not found.";
    }
} else {
    echo "Invalid request method.";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/registration.css">
    <link rel="stylesheet" href="css/t_customer_view.css">
    <link rel="stylesheet" href="css/paymentsuccess.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <title>Fitclub</title>
</head>

<body>
    <div class="header__content">
        <?php
        include "t_header.php"
        ?>
        <section class="container_child">
<div class="main_card">
            <div class="card">
                <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                    <i class="checkmark">✓</i>
                </div>
                <h1>Success</h1>
                <p>We received your membership payment.<br /> Here is Your Order ID: <b><?php echo $orderid ?></b></p>
            </div>
            </div>
        </section>
        <?php
        include "footer.php"
        ?>

        <?php
        $conn->close();
        ?>
    </div>

</body>

</html>