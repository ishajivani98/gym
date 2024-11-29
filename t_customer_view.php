<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include 'db_connection.php';

if (!isset($_SESSION['user_id'])) {
    echo "User not logged in.";
    exit;
}

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

$user_id = intval($_SESSION['user_id']);
$sql = "SELECT * FROM tblcustomer";
$query = "
    SELECT 
        c.id, 
        c.cname, 
        c.email, 
        c.contact, 
        c.dob, 
        c.gender, 
        c.height, 
        c.weight 
    FROM 
        tblcustomer c
    INNER JOIN 
        tbl_subscription s ON c.id = s.c_id
    WHERE 
        s.payment_status = 'Success'
";
$result = $conn->query($sql);

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

    <title>Fitclub</title>
</head>

<body>
    <div class="header__content">
        <?php include "t_header.php"; ?>
        <section class="container_child">
            <h2>Customers List</h2>
            <table id="customers">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>DOB</th>
            <th>Height</th>
            <th>Weight</th>
            <th>Exercise</th>
            <th>Diet</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = $conn->query($query); // Use your $query variable here
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['cname']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['contact']}</td>
                        <td>{$row['dob']}</td>
                        <td>{$row['height']}</td>
                        <td>{$row['weight']}</td>
                        <td><button class='plan_add'><a href='t_exercise_add.php?id={$row['id']}' class='nostyle_link'>Add</a></button></td>
                        <td><button class='exercise_add'><a href='t_diet_add.php?id={$row['id']}' class='nostyle_link'>Add</a></button></td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No records found.</td></tr>";
        }
        ?>
    </tbody>
</table>

        </section>
        <?php include "footer.php"; ?>
    </div>
</body>

</html>