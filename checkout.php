<!-- jnkhhih -->

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
$id = intval($_GET['id']);

$sql = "SELECT id, duration, discount, description, price FROM tbl_membership_plan WHERE id = $id";
$result = $conn->query($sql);
$orderid = 'ORDER' . rand(111111, 99999);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $sql_customer = "SELECT * FROM tblcustomer WHERE id = $user_id";
    $customer_result = $conn->query($sql_customer);
    
    if ($customer_result->num_rows > 0) {
        $customer_data = $customer_result->fetch_assoc();
    } else {
        echo "No customer data found.";
    }
} else {
    echo "No results found.";
    exit;
}
?>

<?php
$apikey = "rzp_test_XWlaG4tu0mE7VT";
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
        <?php
        include "t_header.php"
        ?>
        <section class="container_child">
            <h2>Checkout</h2>


            <?php
            // Database connection
            include 'db_connection.php';
            ?>

            <br>
            <table id="customers">
                <tr>
                    <th>Order ID</th>
                    <th><?php echo $orderid ?></th>
                </tr>
                <tr>
                    <td>Duration</td>
                    <td><?php echo htmlspecialchars($row['duration']); ?></td>
                </tr>
                <tr>
                    <td>Discount</td>
                    <td><?php echo htmlspecialchars($row['discount']); ?>% OFF</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><?php echo htmlspecialchars($row['description']); ?></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>₹ <?php echo htmlspecialchars(($row['price'] - ($row['price'] * $row['discount']) / 100)); ?></td>
                </tr>
            </table>
            <br>
            <form action="paymentsuccess.php" method="POST">
                <input type="hidden" name="orderid" value="<?php echo htmlspecialchars($orderid); ?>">
                <input type="hidden" name="mpid" value="<?php echo htmlspecialchars($id); ?>">
            <input type="hidden" name="duration" value="<?php echo htmlspecialchars($row['duration']); ?>">
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="<?php echo $apikey; ?>"
                    data-amount="<?php echo ($row['price'] - ($row['price'] * $row['discount']) / 100) * 100; ?>"
                    data-currency="INR"
                    data-id="<?php echo $orderid ?>"
                    data-buttontext="Pay with Razorpay"
                    data-name="FITCLUB"
                    data-description="This is FITCLUB membership payment"
                    data-image="https://www.shutterstock.com/image-vector/fitness-logo-gym-600w-534332389.jpg"
                    data-prefill.name="<?php echo $customer_data['cname']; ?>"
                    data-prefill.email="<?php echo $customer_data['email']; ?>"
                    data-prefill.contact="<?php echo $customer_data['contact']; ?>"
                    data-theme.color="#0e90e4">
                </script>
                <input type="hidden" custom="Hidden Element" name="hidden">
            </form>
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