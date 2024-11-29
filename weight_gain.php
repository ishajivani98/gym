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

         



            <p style="margin-top: 20px">This plan incorporates a variety of exercises to target different muscle groups while promoting fat loss through both strength training and cardio. Adjust the repetitions and sets according to your fitness level, and ensure to maintain a balanced diet to support your fat loss goals.</p><br>
        </section>
        <?php
  include "footer.php"
?>
    </div>

</body>

</html>