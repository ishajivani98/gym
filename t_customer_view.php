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
            <h2>Customers List</h2>

                <table id="customers">
                    <tr>
                        <th>Customer Name</th>
                        <th>Contact</th>
                        <th>Plan type</th>
                        <th>Diet plan</th>
                    </tr>
                    <tr>
                        <td>Ansh</td>
                        <td>9876543215</td>
                        <td>Reguler</td>
                        <td><button class="plan_disable"><a href="t_diet_add.php" class="nostyle_link">Add</a></button></td>
                    </tr>
                    <tr>
                        <td>Isha</td>
                        <td>9517538525</td>
                        <td>Pro</td>
                        <td><button class="plan_add"><a href="t_diet_add.php" class="nostyle_link">Add</a></button></td>
                    </tr>
                    <tr>
                        <td>Khushi</td>
                        <td>9638527415</td>
                        <td>Pro</td>
                        <td><button class="plan_add"><a href="t_diet_add.php" class="nostyle_link">Add</a></button></td>
                    </tr>
                    <tr>
                        <td>Ansh</td>
                        <td>9876543215</td>
                        <td>Reguler</td>
                        <td><button class="plan_disable"><a href="t_diet_add.php" class="nostyle_link">Add</a></button></td>
                    </tr>
                    <tr>
                        <td>Isha</td>
                        <td>9517538525</td>
                        <td>Pro</td>
                        <td><button class="plan_add"><a href="t_diet_add.php" class="nostyle_link">Add</a></button></td>
                    </tr>
                    <tr>
                        <td>Khushi</td>
                        <td>9638527415</td>
                        <td>Pro</td>
                        <td><button class="plan_add"><a href="t_diet_add.php" class="nostyle_link">Add</a></button></td>
                    </tr>
                    <tr>
                        <td>Ansh</td>
                        <td>9876543215</td>
                        <td>Reguler</td>
                        <td><button class="plan_disable"><a href="t_diet_add.php" class="nostyle_link">Add</a></button></td>
                    </tr>
                    <tr>
                        <td>Isha</td>
                        <td>9517538525</td>
                        <td>Pro</td>
                        <td><button class="plan_add"><a href="t_diet_add.php" class="nostyle_link">Add</a></button></td>
                    </tr>
                    <tr>
                        <td>Khushi</td>
                        <td>9638527415</td>
                        <td>Pro</td>
                        <td><button class="plan_add"><a href="t_diet_add.php" class="nostyle_link">Add</a></button></td>
                    </tr>
                </table>
        </section>
        <footer class="section__container footer__container">
            <span class="bg__blur"></span>
            <span class="bg__blur footer__blur"></span>
            <div class="footer__col">
                <div class="footer__logo"><img src="assets/logo.png" alt="logo" /></div>
                <p>
                    Take the first step towards a healthier, stronger you with our
                    unbeatable pricing plans. Let's sweat, achieve, and conquer together!
                </p>
                <div class="footer__socials">
                    <a href="#"><i class="ri-facebook-fill"></i></a>
                    <a href="#"><i class="ri-instagram-line"></i></a>
                    <a href="#"><i class="ri-twitter-fill"></i></a>
                </div>
            </div>
            <div class="footer__col">
                <h4>Company</h4>
                <a href="#">Business</a>
                <a href="#">Franchise</a>
                <a href="#">Partnership</a>
                <a href="#">Network</a>
            </div>
            <div class="footer__col">
                <h4>About Us</h4>
                <a href="#">Blogs</a>
                <a href="#">Security</a>
                <a href="#">Careers</a>
            </div>
            <div class="footer__col">
                <h4>Contact</h4>
                <a href="#">Contact Us</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">BMI Calculator</a>
            </div>
        </footer>
        <div class="footer__bar">
            Copyright © 2023 Web Design Mastery. All rights reserved.
        </div>
    </div>

</body>

</html>