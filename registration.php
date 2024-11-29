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
            <h2>Registration</h2>
            <!-- Set method="POST" to ensure the form sends data as POST -->
            <form action="reg_data.php" method="POST" class="form">
                <div class="input-box">
                    <label>Full Name</label>
                    <input type="text" name="txtname" placeholder="Enter full name" required />
                </div>

                <div class="input-box">
                    <label>Email Address</label>
                    <input type="email" name="txtemail" placeholder="Enter email address" required />
                </div>

                <div class="column">
                    <div class="input-box">
                        <label>Phone Number</label>
                        <input type="number" name="txtcontact" placeholder="Enter phone number" required />
                    </div>
                    <div class="input-box">
                        <label>Birth Date</label>
                        <input type="date" name="txtdate" required />
                    </div>
                </div>

                <div class="gender-box">
                    <h3>Gender</h3>
                    <div class="gender-option">
                        <div class="gender">
                            <input type="radio" id="check-male" name="gender" value="male" required />
                            <label for="check-male">Male</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-female" name="gender" value="female" required />
                            <label for="check-female">Female</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-other" name="gender" value="other" required />
                            <label for="check-other">Prefer not to say</label>
                        </div>
                    </div>
                </div>

                <div class="input-box address">
                    <label>Address</label>
                    <input type="text" name="txtaddress" placeholder="Enter street address" required />
                    <div class="column">
                        <input type="number" name="txtheight" placeholder="Enter Height" required />
                        <input type="number" name="txtweight" placeholder="Enter Weight" required />
                    </div>
                    <div class="column">
                        <input type="password" name="txtpassword" placeholder="Enter password" required />
                        <input type="password" name="txtconfirm" placeholder="Confirm password" required />
                    </div>
                </div>
                <div class="gender-box">
                    <div class="gender-option">
                        <div class="gender">
                        <input type="checkbox" name="check" value="customer" <?php if (isset($_POST['check']) && $_POST['check'] == 'customer') { echo 'checked'; } ?> />
                            YOU ARE CUSTOMBER?
                        </div>
                        
                       
                    </div>
                </div>
                <button type="submit" name="btnsubmit">Register</button>
            </form>
            <br>
            <div class="nostyle_link">
                Have a membership? <a href="login.php" class="hover_link">Login</a>
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
