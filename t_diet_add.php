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
            <h2>Diet Add For Isha</h2>
            <form action="t_process_diet.php" method="POST" class="form">
                <input type="number" name="customer_id" value="1" hidden />
                <div class="input-box">
                    <label>Daily Caloric Intake</label>
                    <input type="number" name="daily_caloric_intake" placeholder="Enter Daily Caloric Intake" required />
                </div>

                <div class="input-box">
                    <label>Breakfast</label>
                    <input type="text" name="breakfast" placeholder="Enter Breakfast" required />
                </div>
                <div class="input-box">
                    <label>Lunch</label>
                    <input type="text" name="lunch" placeholder="Enter Lunch" required />
                </div>
                <div class="input-box">
                    <label>Dinner</label>
                    <input type="text" name="dinner" placeholder="Enter Dinner" required />
                </div>
                <div class="input-box">
                    <label>Snacks</label>
                    <input type="text" name="snacks" placeholder="Enter Snacks" required />
                </div>
                <button type="submit">Submit</button>
            </form>
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