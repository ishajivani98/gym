<?php
if (session_status() == PHP_SESSION_NONE) {
session_start();
}
include 'db_connection.php'; // Include the database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['logemail']) && isset($_POST['logpassword'])) {
        // Sanitize and retrieve form data
        $email = mysqli_real_escape_string($conn, $_POST['logemail']);
        $password = $_POST['logpassword']; // Do not sanitize the password

        $sql = "SELECT * FROM tblcustomer WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id']; 
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_role'] = $user['role']; 

                if ($user['role'] == 'trainer') {
                    echo '<script type="text/javascript">
                          alert("Trainer Login successfully");
                          window.location.href = "t_home.php";
                        </script>';
                    exit();
                } else {
                    echo '<script type="text/javascript">
                    alert("User Login successfully");
                    window.location.href = "index.php";
                  </script>';
              exit();
                }
            } else {
                // Invalid login credentials
                $err = "Invalid email or password!";
            }
        } else {
            // Invalid login credentials
            $err = "Invalid email or password!";
        }
    } else {
        $err = "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/registration.css">

    <title>Fitclub</title>
</head>

<body>
    <div class="header__content">
        <?php include "header.php"; ?>
        <section class="container_child">
            <h2>Login</h2>
            <!-- Set method="POST" to ensure the form sends data as POST -->
            <form method="POST" class="form">
                <?php
                if (isset($err)) {
                    echo '<span style="color:red;" class="err-msg">' . $err . '</span>';
                }
                ?>

                <div class="input-box">
                    <label>Email Address</label>
                    <input type="email" name="logemail" placeholder="Enter email address" required />
                </div>
                <div class="input-box">
                    <label>Password</label>
                    <input type="password" name="logpassword" placeholder="Enter email address" required />
                </div>
<br>
                <div class="pass"><a href="forgot_password.php" class="hover_link">Forgot Password?</a></div>
                <button type="submit" value="Login">Submit</button>
            </form>
            <br>
            <div class="nostyle_link">
                Not a member? <a href="registration.php" class="hover_link">Registration</a>
            </div>
        </section>
        <?php
  include "footer.php"
?>
    </div>
</body>
<?php
    header('location : login.php');
?>
</html>
