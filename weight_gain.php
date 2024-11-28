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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Fitclub</title>
    <script>
        function toggleContent(contentId) {
            var content = document.getElementById(contentId);
            if (content.style.display === "none") {
                content.style.display = "block";
            } else {
                content.style.display = "none";
            }
        }
    </script>
</head>

<body>
    <div class="header__content">
        <?php
        include "header.php"
        ?>
        <section class="container_child">
            <h2>Weight Gain </h2>

            <div class="w3-card-4" style="width:100%; margin-bottom: 10px;">
                <header class="w3-container w3-light-grey">
                    <h3 onclick="toggleContent('mondayContent')" style="cursor: pointer;">Monday</h3>
                </header>
                <div class="w3-container" id="mondayContent" style="display: block;">
                    <hr>
                    <p style="margin-top: 10px">Barbell Squats - 4 sets of 6-8 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Bench Press - 4 sets of 6-8 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Deadlifts - 4 sets of 6-8 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Pull-Ups or Lat Pulldowns - 4 sets of 6-8 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Plank - 3 sets of 30-60 seconds</p>
                    <hr>
                </div>
            </div>

            <div class="w3-card-4" style="width:100%; margin-bottom: 10px;">
                <header class="w3-container w3-light-grey">
                    <h3 onclick="toggleContent('tuesdayContent')" style="cursor: pointer;">Tuesday</h3>
                </header>
                <div class="w3-container" id="tuesdayContent" style="display: none;">
                    <hr>
                    <p style="margin-top: 10px">Barbell Rows - 4 sets of 6-8 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Overhead Press - 4 sets of 6-8 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Dumbbell Lunges - 4 sets of 8-10 reps per leg</p>
                    <hr>
                    <p style="margin-top: 10px">Dumbbell Bench Press - 4 sets of 6-8 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Russian Twists - 3 sets of 15-20 reps</p>
                    <hr>
                </div>
            </div>

            <div class="w3-card-4" style="width:100%; margin-bottom: 10px;">
                <header class="w3-container w3-light-grey">
                    <h3 onclick="toggleContent('wednesdayContent')" style="cursor: pointer;">Wednesday</h3>
                </header>
                <div class="w3-container" id="wednesdayContent" style="display: none;">
                    <hr>
                    <p style="margin-top: 10px">Leg Press - 4 sets of 6-8 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Barbell Deadlifts - 4 sets of 6-8 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Seated Dumbbell Shoulder Press - 4 sets of 6-8 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Tricep Dips - 4 sets of 8-10 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Bicep Curls - 4 sets of 8-10 reps</p>
                    <hr>
                </div>
            </div>

            <div class="w3-card-4" style="width:100%; margin-bottom: 10px;">
                <header class="w3-container w3-light-grey">
                    <h3 onclick="toggleContent('thursdayContent')" style="cursor: pointer;">Thursday</h3>
                </header>
                <div class="w3-container" id="thursdayContent" style="display: none;">
                    <hr>
                    <p style="margin-top: 10px">Barbell Squats - 4 sets of 6-8 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Chest Flyes - 4 sets of 8-10 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Leg Curls - 4 sets of 8-10 reps</ ```html
                            <hr>
                    <p style="margin-top: 10px">Calf Raises - 4 sets of 10-12 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Glute Bridges - 4 sets of 10-12 reps</p>
                    <hr>
                </div>
            </div>

            <div class="w3-card-4" style="width:100%; margin-bottom: 10px;">
                <header class="w3-container w3-light-grey">
                    <h3 onclick="toggleContent('fridayContent')" style="cursor: pointer;">Friday</h3>
                </header>
                <div class="w3-container" id="fridayContent" style="display: none;">
                    <hr>
                    <p style="margin-top: 10px">Sprint for 30 seconds, walk for 1 minute - repeat for 20 minutes</p>
                    <hr>
                    <p style="margin-top: 10px">Jump Squats - 4 sets of 8-10 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Push-Up to T - 4 sets of 8-10 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Skaters - 4 sets of 30 seconds</p>
                    <hr>
                    <p style="margin-top: 10px">Plank Jacks - 4 sets of 30 seconds</p>
                    <hr>
                </div>
            </div>

            <div class="w3-card-4" style="width:100%; margin-bottom: 10px;">
                <header class="w3-container w3-light-grey">
                    <h3 onclick="toggleContent('saturdayContent')" style="cursor: pointer;">Saturday</h3>
                </header>
                <div class="w3-container" id="saturdayContent" style="display: none;">
                    <hr>
                    <p style="margin-top: 10px">Light Jog or Brisk Walk - 30 minutes</p>
                    <hr>
                    <p style="margin-top: 10px">Yoga or Stretching - 20-30 minutes</p>
                    <hr>
                    <p style="margin-top: 10px">Foam Rolling - 10-15 minutes</p>
                    <hr>
                </div>
            </div>

            <div class="w3-card-4" style="width:100%; margin-bottom: 10px;">
                <header class="w3-container w3-light-grey">
                    <h3 onclick="toggleContent('sundayContent')" style="cursor: pointer;">Sunday</h3>
                </header>
                <div class="w3-container" id="sundayContent" style="display: none;">
                    <hr>
                    <p style="margin-top: 10px">Kettlebell Swings - 4 sets of 10-12 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Box Jumps - 4 sets of 8-10 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Push-Ups - 4 sets of 10-15 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Plank with Shoulder Taps - 4 sets of 10-12 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Side Lunges - 4 sets of 10-12 reps per leg</p>
                    <hr>
                </div>
            </div>



            <p style="margin-top: 20px">This plan incorporates a variety of exercises to target different muscle groups while promoting fat loss through both strength training and cardio. Adjust the repetitions and sets according to your fitness level, and ensure to maintain a balanced diet to support your fat loss goals.</p><br>
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