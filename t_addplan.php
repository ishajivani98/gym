<!-- jnkhhih -->




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
            <h2>Diet Add For Isha</h2>


            <?php
            // Database connection
           include 'db_connection.php';

            // Form submission handling
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Retrieve form data
                $development = $_POST['develop'] ?? null;
                $day = $_POST['day'] ?? null;

                // Initialize checkbox variables
                $exe1 = isset($_POST['exe1']) ;
                $exe2 = isset($_POST['exe2']) ? $_POST['exe2'] : null;
                $exe3 = isset($_POST['exe3']) ? $_POST['exe3'] : null;
                $exe4 = isset($_POST['exe4']) ? $_POST['exe4'] : null;
                $exe5 = isset($_POST['exe5']) ? $_POST['exe5'] : null;
                $exe6 = isset($_POST['exe6']) ? $_POST['exe6'] : null;
                $exe7 = isset($_POST['exe7']) ? $_POST['exe7'] : null;
                $exe8 = isset($_POST['exe8']) ? $_POST['exe8'] : null;
                $exe9 = isset($_POST['exe9']) ? $_POST['exe9'] : null;
                $exe10 = isset($_POST['exe10']) ? $_POST['exe10'] : null;
                $exe11 = isset($_POST['exe11']) ? $_POST['exe11'] : null;
                $exe12 = isset($_POST['exe12']) ? $_POST['exe12'] : null;

                if ($development && $day) {
                    // Insert data into the database
                    $query = "INSERT INTO tblexeplan (development, day, exe1, exe2, exe3, exe4, exe5, exe6, exe7, exe8, exe9, exe10, exe11, exe12)
                              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                    $stmt = $conn->prepare($query);
                    $stmt->bind_param(
                        "ssssssssssssss",
                        $development,
                        $day,
                        $exe1,
                        $exe2,
                        $exe3,
                        $exe4,
                        $exe5,
                        $exe6,
                        $exe7,
                        $exe8,
                        $exe9,
                        $exe10,
                        $exe11,
                        $exe12
                    );

                    if ($stmt->execute()) {
                        echo "<p>Exercise plan successfully registered!</p>";
                    } else {
                        echo "<p>Error: " . $stmt->error . "</p>";
                    }

                    $stmt->close();
                } else {
                    echo "<p>Please fill out all required fields.</p>";
                }
            }
            ?>

            <form action="" method="POST" class="form">
            <div class="column">
                    <div class="select-box">
                        <select name="develop">
                            <option hidden>What you want?</option>
                            <option value="weightgain">Weight Gain</option>
                            <option value="fatloss">Fat Loss</option>
                            <option value="physicalfitness">Physical Fitness</option>
                            <option value="musalasgain">Muscle Gain</option>
                        </select>
                    </div>
                    <div class="select-box">
                        <select name="day">
                            <option hidden>Select a day</option>
                            <option value="sunday">Sunday</option>
                            <option value="monday">Monday</option>
                            <option value="tuesday">Tuesday</option>
                            <option value="wednesday">Wednesday</option>
                            <option value="thursday">Thursday</option>
                            <option value="friday">Friday</option>
                            <option value="saturday">Saturday</option>
                        </select>
                    </div>
                </div>
                <br>
                <h2>Customers List</h2>
                <table id="customers">
                    <tr>
                        <th>Exercise Name</th>
                        <th>Exercise</th>
                    </tr>
                    <?php
                    $exercises = [
                        "exe1" => "Barbell Rows - 4 sets of 6-8 reps",
                        "exe2" => "Bicycle Crunches - 3 sets of 15-20 reps",
                        "exe3" => "Squats - 3 sets of 12-15 reps",
                        "exe4" => "Deadlifts - 3 sets of 10-12 reps",
                        "exe5" => "Leg Press - 4 sets of 6-8 reps",
                        "exe6" => "Skaters - 4 sets of 30 seconds",
                        "exe7" => "High Knees - 3 sets of 30 seconds",
                        "exe8" => "Kettlebell Swings - 4 sets of 10-12 reps",
                        "exe9" => "Burpees - 3 sets of 8-10 reps",
                        "exe10" => "Glute Bridges - 3 sets of 12-15 reps",
                        "exe11" => "Push-Ups - 4 sets of 10-15 reps",
                        "exe12" => "Mountain Climbers - 3 sets of 30 seconds"
                    ];

                    foreach ($exercises as $key => $value) {
                        echo "<tr>
                                <td>{$value}</td>
                                <td><input type='checkbox' name='{$key}' value='{$value}'></td>
                              </tr>";
                    }
                    ?>
                </table>
                <br>
                <button type="submit" name="btnsubmit">Register</button>
            </form>
        </section>
        <?php
  include "footer.php"
?>
    </div>

</body>

</html>