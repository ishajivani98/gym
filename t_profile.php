$2y$10$H<!-- jnkhhih -->




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

    <title>Fitclub</title>
</head>

<body>
    <div class="header__content">
        <?php
        include "t_header.php"
        ?>
        <section class="container_child">
            
            
<?php
//session_start();
include 'db_connection.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM tblcustomer WHERE id = $user_id";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['cname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $update_sql = "UPDATE tblcustomer SET cname = '$name', email = '$email', contact = '$contact', address = '$address' WHERE id = $user_id";
    mysqli_query($conn, $update_sql);

    // Refresh the page to show updated data
    header("Location: t_home.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Profile</title>
</head>
<body>
<div class="container">
    <h4>Account Settings</h4>
    <form method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="cname" value="<?php echo htmlspecialchars($user['cname']); ?>" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
        </div>
        <div class="form-group">
            <label>Contact</label>
            <input type="text" class="form-control" name="contact" value="<?php echo htmlspecialchars($user['contact']); ?>" required>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" value="<?php echo htmlspecialchars($user['address']); ?>" required>
        </div>
        <input type="submit" name="btnupdate" class="btn btn-primary">
    </form>
</div>
<?php

 if(isset($_POST['btnupdate']))
{

   $usql = "UPDATE tblcustomer SET cname = '$name', email = '$email', contact = '$contact', address = '$address' WHERE id = $user_id";      
   $result = mysqli_query($conn, $usql);
   header('Location: index.php');
}
?>
        </section>
        <?php
  include "footer.php"
?>
    </div>

</body>

</html>