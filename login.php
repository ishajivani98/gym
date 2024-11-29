
 <?php
session_start();
include 'db_connection.php'; // Include the database connection

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['logemail']) && isset($_POST['logpassword'])) {
        // Sanitize and retrieve form data
        $email = mysqli_real_escape_string($conn, $_POST['logemail']);
        $password = mysqli_real_escape_string($conn, $_POST['logpassword']);

        // Query to verify the email and password
        $sql = "SELECT * FROM tblcustomer WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        // Check if a record matches the login credentials
        if (mysqli_num_rows($result) > 0) {
            // Login successful, fetch user data
            $user = mysqli_fetch_assoc($result);

            // Store user information in the session
            $_SESSION['user_id'] = $user['id']; // Assuming 'id' is the unique user identifier
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_role'] = $user['role']; // Assuming there's a 'role' column

            // Redirect to the header page

            if ($user['role'] == 'trainer') {
                          // Redirect to trainer's homepage with user_id in URL
                          header('Location: t_home.php');
                      } else {
                          // Redirect to customer's homepage with user_id in URL
                          header("Location: index.php");
                      }
            
            exit();
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login_css.css">
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <form method="post">
            <?php
            if (isset($err)) {
                echo '<span style="color:red;" class="err-msg">' . $err . '</span>';
            }
            ?>
            <div class="txt_field">
                <input type="text" name="logemail" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="password" name="logpassword" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass"><a href="forgot_password.php">Forgot Password?</a></div>
            <input type="submit" value="Login">
            <div class="signup_link">
                Not a member? <a href="register.php">Signup</a>
            </div>
        </form>
    </div>
</body>
</html>

