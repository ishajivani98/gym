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
            <h2>Exercise Add For Isha</h2>
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
        <?php
  include "footer.php"
?>
    </div>

</body>

</html>