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
        include "header.php"
        ?>
        <section class="container_child">
            <h2>Registration Form</h2>
            <form action="#" class="form">
                <div class="input-box">
                    <label>Full Name</label>
                    <input type="text" name="txtname" placeholder="Enter full name" required />
                </div>

                <div class="input-box">
                    <label>Email Address</label>
                    <input type="text" name="txtemail" placeholder="Enter email address" required />
                </div>

                <div class="column">
                    <div class="input-box">
                        <label>Phone Number</label>
                        <input type="number" name="txtcontact" placeholder="Enter phone number" required />
                    </div>
                    <div class="input-box">
                        <label>Birth Date</label>
                        <input type="date" name="txtdate" placeholder="Enter birth date" required />
                    </div>
                </div>
                <div class="gender-box">
                    <h3>Gender</h3>
                    <div class="gender-option">
                        <div class="gender">
                            <input type="radio" id="check-male" name="gender" value="male" />
                            <label for="check-male">male</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-female" name="gender" value="female" />
                            <label for="check-female">Female</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-other" name="gender" value="other" />
                            <label for="check-other">prefer not to say</label>
                        </div>
                    </div>
                </div>

                <div class="input-box address">
                    <label>Address</label>
                    <input type="text" name="txtaddress" placeholder="Enter street address" required />

                    <div class="column">
                        <input type="number" name="txtheight" placeholder="Enter Height " required />
                        <input type="number" name="txtweight" placeholder="Enter weight" required />
                    </div>
                    <div class="column">
                        <input type="password" name="txtpassword" placeholder="Enter password " required />
                        <input type="password" name="txtconfirm" placeholder="confirm password" required />
                    </div>

                </div>
                <div class="gender-box">
                    <h3></h3>
                    <div class="gender-option">
                        <div class="gender">
                            <input type="checkbox" id="check-male" name="check" checked /> you are coustomer?

                        </div>
                    </div>
                </div>
                <button>Submit</button>
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