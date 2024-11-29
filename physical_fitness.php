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
            <h2>Physical Fitness </h2>

            <div class="w3-card-4" style="width:100%; margin-bottom: 10px;">
                <header class="w3-container w3-light-grey">
                    <h3 onclick="toggleContent('mondayContent')" style="cursor: pointer;">Monday</h3>
                </header>
                <div class="w3-container" id="mondayContent" style="display: block;"> <!-- Changed to block -->
                    <hr>
                    <p style="margin-top: 10px">Jumping Jacks - 3 sets of 30 seconds</p>
                    <hr>
                    <p style="margin-top: 10px">Push-Ups - 3 sets of 10-15 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Squats - 3 sets of 12-15 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Plank - 3 sets of 30-60 seconds</p>
                    <hr>
                    <p style="margin-top: 10px">Burpees - 3 sets of 8-10 reps</p>
                    <hr>
                </div>
            </div>

            <div class="w3-card-4" style="width:100%; margin-bottom: 10px;">
                <header class="w3-container w3-light-grey">
                    <h3 onclick="toggleContent('tuesdayContent')" style="cursor: pointer;">Tuesday</h3>
                </header>
                <div class="w3-container" id="tuesdayContent" style="display: none;">
                    <hr>
                    <p style="margin-top: 10px">High Knees - 3 sets of 30 seconds</p>
                    <hr>
                    <p style="margin-top: 10px">Mountain Climbers - 3 sets of 30 seconds</p>
                    <hr>
                    <p style="margin-top: 10px">Bicycle Crunches - 3 sets of 15-20 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Russian Twists - 3 sets of 15-20 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Jump Rope - 5 minutes continuous</p>
                    <hr>
                </div>
            </div>

            <div class="w3-card-4" style="width:100%; margin-bottom: 10px;">
                <header class="w3-container w3-light-grey">
                    <h3 onclick="toggleContent('wednesdayContent')" style="cursor: pointer;">Wednesday</h3>
                </header>
                <div class="w3-container" id="wednesdayContent" style="display: none;">
                    <hr>
                    <p style="margin-top: 10px">Dumbbell Bench Press - 3 sets of 10-12 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Bent Over Rows - 3 sets of 10-12 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Shoulder Press - 3 sets of 10-12 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Tricep Dips - 3 sets of 10-15 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Bicep Curls - 3 sets of 10-12 reps</p>
                    <hr>
                </div>
            </div>

            <div class="w3-card-4" style="width:100%; margin-bottom: 10px;">
                <header class="w3-container w3-light-grey">
                    <h3 onclick="toggleContent('thursdayContent')" style="cursor: pointer;">Thursday</h3>
                </header>
                <div class="w3-container" id="thursdayContent" style="display: none;">
                    <hr>
                    <p style="margin-top: 10px">Lunges - 3 sets of 10-12 reps per leg</p>
                    <hr>
                    <p style="margin-top: 10px">Deadlifts - 3 sets of 10-12 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Leg Press - 3 sets of 10-12 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Calf Raises - 3 sets of 15-20 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Glute Bridges - 3 sets of 12-15 reps</p>
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
                    <p style="margin-top: 10px">Jump Squats - 3 sets of 10-12 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Push-Up to T - 3 sets of 8-10 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Skaters - 3 sets of 30 seconds</p>
                    <hr>
                    <p style="margin-top: 10px">Plank Jacks - 3 sets of 30 seconds</p>
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
                    <p style="margin-top: 10px">Kettlebell Swings - 3 sets of 12-15 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Box Jumps - 3 sets of 10-12 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Push-Ups - 3 sets of 10-15 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Plank with Shoulder Taps - 3 sets of 10-12 reps</p>
                    <hr>
                    <p style="margin-top: 10px">Side Lunges - 3 sets of 10-12 reps per leg</p>
                    <hr>
                </div>
            </div>



            <p style="margin-top: 20px">This plan incorporates a variety of exercises to target different muscle groups while promoting fat loss through both strength training and cardio. Adjust the repetitions and sets according to your fitness level, and ensure to maintain a balanced diet to support your fat loss goals.</p><br>
        </section>
        <?php
  include "footer.php"
?>
    </div>

</body>

</html>