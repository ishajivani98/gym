<!-- <?php
//     include 'db_connection.php';
// if (isset($_POST['btnsubmit'])) {
//     // Get form data
//     $name = mysqli_real_escape_string($conn, $_POST['cname']);
//     $email = mysqli_real_escape_string($conn, $_POST['email']);
      
       
       
       
               
//                $sql="insert into tblcustomer(cname,email)values('{$name}','{$email}')";
//                $result= mysqli_query($conn,$sql)or die("query An Unsuccessfully");
       
//                mysqli_close($conn);

//             //    header('location :test.php')
// }    
?> -->
     
 




<?php
include 'db_connection.php';

if (isset($_POST['btnsubmit'])) {
    // Get form data
    $user_type = isset($_POST['check']) ? 'customer' : 'trainer';
    $name = mysqli_real_escape_string($conn, $_POST['txtname']);
    $email = mysqli_real_escape_string($conn, $_POST['txtemail']);
    $contact = mysqli_real_escape_string($conn, $_POST['txtcontact']);
    $date = mysqli_real_escape_string($conn, $_POST['txtdate']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $address = mysqli_real_escape_string($conn, $_POST['txtaddress']);
    $height = mysqli_real_escape_string($conn, $_POST['txtheight']);
    $weight = mysqli_real_escape_string($conn, $_POST['txtweight']);
    $password = mysqli_real_escape_string($conn, $_POST['txtpassword']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['txtconfirm']);
    
    // Password validation
    if ($password !== $confirm_password) {
        echo "Passwords do not match!";
        exit;
    }

    // Hash the password before storing it
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into database (Ensure these column names match your table structure)
    $sql = "INSERT INTO tblcustomer (cname, email, contact, dob, gender, address, height, weight, password, role)
        VALUES ('{$name}', '{$email}', '{$contact}', '{$date}', '{$gender}', '{$address}', '{$height}', '{$weight}', '{$hashed_password}', '{$user_type}')";
    // Check if the query is successful
    if (mysqli_query($conn, $sql)) {
        echo '<script type="text/javascript">
                alert("Registration successfully");
                window.location.href = "login.php";
              </script>';
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
} else {
    echo "Form was not submitted correctly.";
}
?>
