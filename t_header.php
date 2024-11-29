


<?php
error_reporting(0);
?>
<?php
if (session_status() == PHP_SESSION_NONE) {
session_start();
}
include 'db_connection.php';

// Redirect to login if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch user details for display in profile
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM tblcustomer WHERE id = $user_id";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Fitclub</title>
</head>
<body>
<nav>
    <div class="nav__logo">
        <a href="index.php"><img src="assets/logo.png" alt="logo"></a>
    </div>
    <ul class="nav__links">
        <li class="link"><a href="t_customer_view.php">Customers</a></li>
        <li class="link"><a href="t_profile.php">Profile</a></li>
        <li class="link"><a href="#">Leave Request</a></li>
        <li class="link"><a href="t_addplan.php
        ">Exercise plan</a>
        <li class="link"><a href="t_diet_add.php">diet plan</a></li>
        </li>
        <li class="link"><a href="#">About</a></li>
    </ul>
    <button class="btn"><a href="logout.php" class="nostyle_link">Logout</a></button>
</nav>
</body>
</html>
