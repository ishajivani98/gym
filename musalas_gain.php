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
            <h2>Musalas Gain </h2>

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








































<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/registration.css">

    <link rel="stylesheet" href="css/t_customer_view.css">

    <title>Fitclub</title>
</head>

<body>
    <div class="header__content">
        <?php include "header.php"; ?>
        <section class="container_child">
            <h2>Registration</h2>
            <!-- Set method="POST" to ensure the form sends data as POST -->
            <form action="reg_data.php" method="POST" class="form">

                <div class="column">

                    <div class="select-box">
                        <select name="develop">
                            <option hidden>what you want?</option>
                            <option value="weightgain">weight gain</option>
                            <option value="fatloss">fat loss</option>
                            <option value="physicalfitness">physical_fitness</option>
                            <option value="musalasgain">Musalas Gain</option>
                        </select>

                    </div>
                    <div class="select-box">
                        <select>
                            <option hidden>select a day</option>
                            <option value="sunday"> sunday </option>
                            <option value="monday "> monday </option>
                            <option value="tuesday "> tuesday </option>
                            <option value="wednesday "> wednesday </option>
                            <option value="thursday "> thursday </option>
                            <option value="friday "> friday </option>
                            <option value=" saturday"> saturday </option>

                        </select>

                    </div>
                </div>
                <br>
                <br>


                <section class="container_child">
                    <h2>Customers List</h2>

                    <table id="customers">
                        <tr>
                            <th>Exercise Name</th>

                            <th>Exercise</th>
                        </tr>
                        <tr>
                            <td>Barbell Rows</td>
                            <td>
                                <div class="gender-box">
                                    <div class="gender-option">
                                        <div class="gender">
                                            <input type="checkbox" name="exe1" value=">Barbell Rows - 4 sets of 6-8 reps" <?php if (isset($_POST['check']) && $_POST['check'] == 'Barbell Rows - 4 sets of 6-8 reps') {
                                                                                                        echo 'checked';
                                                                                                    } ?> />
                                        </div>
                                    </div></div>
                            </td>

                        </tr>
                        <tr>
                            <td>Bicycle Crunches</td>
                            <td>
                                <div class="gender-box">
                                    <div class="gender-option">
                                        <div class="gender">
                                            <input type="checkbox" name="exe2" value="Bicycle Crunches - 3 sets of 15-20 reps" <?php if (isset($_POST['check']) && $_POST['check'] == 'Bicycle Crunches - 3 sets of 15-20 reps') {
                                                                                                        echo 'checked';
                                                                                                    } ?> />
                                        </div>
                                    </div></div>
                            </td>

                        </tr>
                        <tr>
                            <td>Squats</td>
                            <td>
                                <div class="gender-box">
                                    <div class="gender-option">
                                        <div class="gender">
                                            <input type="checkbox" name="exe3" value="Squats - 3 sets of 12-15 reps" <?php if (isset($_POST['check']) && $_POST['check'] == 'quats - 3 sets of 12-15 reps') {
                                                                                                        echo 'checked';
                                                                                                    } ?> />
                                        </div>
                                    </div></div>
                            </td>
                        </tr>
                        <tr>
                            <td>Deadlifts</td>
                            <td>
                                <div class="gender-box">
                                    <div class="gender-option">
                                        <div class="gender">
                                            <input type="checkbox" name="exe4" value="Deadlifts - 3 sets of 10-12 reps" <?php if (isset($_POST['check']) && $_POST['check'] == 'Deadlifts - 3 sets of 10-12 reps') {
                                                                                                        echo 'checked';
                                                                                                    } ?> />
                                        </div>
                                    </div></div>
                            </td>
                        </tr>
                        <tr>
                            <td>Leg Press</td>
                            <td>
                                <div class="gender-box">
                                    <div class="gender-option">
                                        <div class="gender">
                                            <input type="checkbox" name="exe5" value="Leg Press - 4 sets of 6-8 reps" <?php if (isset($_POST['check']) && $_POST['check'] == 'Leg Press - 4 sets of 6-8 reps') {
                                                                                                        echo 'checked';
                                                                                                    } ?> />
                                        </div>
                                    </div></div>
                            </td>
                        </tr>
                        <tr>
                            <td>Skaters</td>
                            <td>
                                <div class="gender-box">
                                    <div class="gender-option">
                                        <div class="gender">
                                            <input type="checkbox" name="exe6" value="Skaters - 4 sets of 30 seconds" <?php if (isset($_POST['check']) && $_POST['check'] == 'Skaters - 4 sets of 30 seconds') {
                                                                                                        echo 'checked';
                                                                                                    } ?> />
                                        </div>
                                    </div></div>
                            </td>
                        </tr>
                        <tr>
                            <td>High Knees</td>
                            <td>
                                <div class="gender-box">
                                    <div class="gender-option">
                                        <div class="gender">
                                            <input type="checkbox" name="exe7" value="High Knees - 3 sets of 30 seconds" <?php if (isset($_POST['check']) && $_POST['check'] == 'High Knees - 3 sets of 30 seconds') {
                                                                                                        echo 'checked';
                                                                                                    } ?> />
                                        </div>
                                    </div></div>
                            </td>
                        </tr>
                        <tr>
                            <td>Kettlebell Swings</td>
                            <td>
                                <div class="gender-box">
                                    <div class="gender-option">
                                        <div class="gender">
                                            <input type="checkbox" name="exe8" value="Kettlebell Swings - 4 sets of 10-12 reps" <?php if (isset($_POST['check']) && $_POST['check'] == 'Kettlebell Swings - 4 sets of 10-12 reps') {
                                                                                                        echo 'checked';
                                                                                                    } ?> />
                                        </div>
                                    </div></div>
                            </td>
                        </tr>
                        <tr>
                            <td>Burpees</td>
                            <td>
                                <div class="gender-box">
                                    <div class="gender-option">
                                        <div class="gender">
                                            <input type="checkbox" name="exe9" value="Burpees - 3 sets of 8-10 reps" <?php if (isset($_POST['check']) && $_POST['check'] == 'Burpees - 3 sets of 8-10 reps') {
                                                                                                        echo 'checked';
                                                                                                    } ?> />
                                        </div>
                                    </div></div>
                            </td>
                        </tr>
                        <tr>
                            <td>Gulte Bridges</td>
                            <td>
                                <div class="gender-box">
                                    <div class="gender-option">
                                        <div class="gender">
                                            <input type="checkbox" name="exe10" value="Glute Bridges - 3 sets of 12-15 reps" <?php if (isset($_POST['check']) && $_POST['check'] == 'Glute Bridges - 3 sets of 12-15 reps') {
                                                                                                        echo 'checked';
                                                                                                    } ?> />
                                        </div>
                                    </div></div>
                            </td>
                        </tr>
                        <tr>
                            <td>Push-Ups</td>
                            <td>
                                <div class="gender-box">
                                    <div class="gender-option">
                                        <div class="gender">
                                            <input type="checkbox" name="exe11" value="Push-Ups - 4 sets of 10-15 reps" <?php if (isset($_POST['check']) && $_POST['check'] == 'Push-Ups - 4 sets of 10-15 reps') {
                                                                                                        echo 'checked';
                                                                                                    } ?> />
                                        </div>
                                    </div></div>
                            </td>
                        </tr>
                        <tr>
                            <td>Mountain Climbers</td>
                            <td>
                                <div class="gender-box">
                                    <div class="gender-option">
                                        <div class="gender">
                                            <input type="checkbox" name="exe12" value="Mountain Climbers - 3 sets of 30 seconds" <?php if (isset($_POST['check']) && $_POST['check'] == 'Mountain Climbers - 3 sets of 30 seconds') {
                                                                                                        echo 'checked';
                                                                                                    } ?> />
                                        </div>
                                    </div></div>
                            </td>
                        </tr>
                    </table>
                </section>


                <!-- <h2>SELECT A Exercise</h2>
                <div class="gender-box">
                    <div class="gender-option">
                        <div class="gender">
                         <input type="checkbox" name="check" value="customer" <?php //?> /> 
                          
                        </div>
                        
                       
                    </div>
                </div> -->




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