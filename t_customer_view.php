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
                        <th>Exercise</th>
                    </tr>
                    <tr>
                        <td>Ansh</td>
                        <td>9876543215</td>
                        <td>Reguler</td>
                        <td><button class="plan_disable"><a href="t_diet_add.php" class="nostyle_link">Add</a></button></td>
                        <td><button class="plan_disable"><a href="t_diet_add.php" class="nostyle_link">Add</a></button></td>
                    </tr>
                    <tr>
                        <td>Isha</td>
                        <td>9517538525</td>
                        <td>Pro</td>
                        <td><button class="plan_add"><a href="t_diet_add.php" class="nostyle_link">Add</a></button></td>
                        <td><button class="exercise_add"><a href="t_exercise_add.php" class="nostyle_link">Add</a></button></td>
                    </tr>
                    <tr>
                        <td>Khushi</td>
                        <td>9638527415</td>
                        <td>Pro</td>
                        <td><button class="plan_add"><a href="t_diet_add.php" class="nostyle_link">Add</a></button></td>
                        <td><button class="exercise_add"><a href="t_exercise_add.php" class="nostyle_link">Add</a></button></td>
                    </tr>
                    <tr>
                        <td>Ansh</td>
                        <td>9876543215</td>
                        <td>Reguler</td>
                        <td><button class="plan_disable"><a href="t_diet_add.php" class="nostyle_link">Add</a></button></td>
                        <td><button class="plan_disable"><a href="t_exercise_add.php" class="nostyle_link">Add</a></button></td>
                    </tr>
                    <tr>
                        <td>Isha</td>
                        <td>9517538525</td>
                        <td>Pro</td>
                        <td><button class="plan_add"><a href="t_diet_add.php" class="nostyle_link">Add</a></button></td>
                        <td><button class="exercise_add"><a href="t_exercise_add.php" class="nostyle_link">Add</a></button></td>
                    </tr>
                    <tr>
                        <td>Khushi</td>
                        <td>9638527415</td>
                        <td>Pro</td>
                        <td><button class="plan_add"><a href="t_diet_add.php" class="nostyle_link">Add</a></button></td>
                        <td><button class="exercise_add"><a href="t_exercise_add.php" class="nostyle_link">Add</a></button></td>
                    </tr>
                    <tr>
                        <td>Ansh</td>
                        <td>9876543215</td>
                        <td>Reguler</td>
                        <td><button class="plan_disable"><a href="t_diet_add.php" class="nostyle_link">Add</a></button></td>
                        <td><button class="plan_disable"><a href="t_exercise_add.php" class="nostyle_link">Add</a></button></td>
                    </tr>
                    <tr>
                        <td>Isha</td>
                        <td>9517538525</td>
                        <td>Pro</td>
                        <td><button class="plan_add"><a href="t_diet_add.php" class="nostyle_link">Add</a></button></td>
                        <td><button class="exercise_add"><a href="t_exercise_add.php" class="nostyle_link">Add</a></button></td>
                    </tr>
                    <tr>
                        <td>Khushi</td>
                        <td>9638527415</td>
                        <td>Pro</td>
                        <td><button class="plan_add"><a href="t_diet_add.php" class="nostyle_link">Add</a></button></td>
                        <td><button class="exercise_add"><a href="t_exercise_add.php" class="nostyle_link">Add</a></button></td>
                    </tr>
                    
                </table>
                
        </section>
        <?php
  include "footer.php"
?>
    </div>

</body>

</html>