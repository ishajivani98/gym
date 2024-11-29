<?php
include 'db_connection.php';

$sql = "SELECT id, duration, discount, description, price FROM tbl_membership_plan";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/styles.css" />
  <title>Fitclub</title>
</head>

<body>

  <?php
  include "header.php"
  ?>
  <header class="section__container header__container">
    <div class="header__content">
      <span class="bg__blur"></span>
      <span class="bg__blur header__blur"></span>
      <h4>BEST FITNESS IN THE TOWN</h4>
      <h1><span>MAKE</span> YOUR BODY SHAPE</h1>
      <p>
        Unleash your potential and embark on a journey towards a stronger,
        fitter, and more confident you. Sign up for 'Make Your Body Shape' now
        and witness the incredible transformation your body is capable of!
      </p>
      <button class="btn">Get Started</button>
    </div>
    <div class="header__image">
      <img src="assets/header.png" alt="header" />
    </div>
  </header>

  <section class="section__container explore__container">
    <div class="explore__header">
      <h2 class="section__header">EXPLORE OUR PROGRAM</h2>
      <div class="explore__nav">
        <span><i class="ri-arrow-left-line"></i></span>
        <span><i class="ri-arrow-right-line"></i></span>
      </div>
    </div>
    <div class="explore__grid">
      <div class="explore__card">
        <span><i class="ri-boxing-fill"></i></span>
        <h4>Musalas Gain</h4>
        <p>
          Embrace the essence of Musalas Gain as we delve into its various
          dimensions physical.
        </p>
        <a href="musalas_gain.php">Join Now <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="explore__card">
        <span><i class="ri-heart-pulse-fill"></i></span>
        <h4>Physical Fitness</h4>
        <p>
          It encompasses a range of activities that improve health, strength,
          flexibility, and overall well-being.
        </p>
        <a href="physical_fitness.php">Join Now <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="explore__card">
        <span><i class="ri-run-line"></i></span>
        <h4>Fat Lose</h4>
        <p>
          Through a combination of workout routines and expert guidance, we'll
          empower you to reach your goals.
        </p>
        <a href="fatlose.php">Join Now <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="explore__card">
        <span><i class="ri-shopping-basket-fill"></i></span>
        <h4>Weight Gain</h4>
        <p>
          Designed for individuals, our program offers an effective approach
          to gaining weight in a sustainable manner.
        </p>
        <a href="weight_gain.php">Join Now <i class="ri-arrow-right-line"></i></a>
      </div>
    </div>
  </section>

  <section class="section__container class__container">
    <div class="class__image">
      <span class="bg__blur"></span>
      <img src="assets/class-1.jpg" alt="class" class="class__img-1" />
      <img src="assets/class-2.jpg" alt="class" class="class__img-2" />
    </div>
    <div class="class__content">
      <h2 class="section__header">THE CLASS YOU WILL GET HERE</h2>
      <p>
        Led by our team of expert and motivational instructors, "The Class You
        Will Get Here" is a high-energy, results-driven session that combines
        a perfect blend of cardio, strength training, and functional
        exercises. Each class is carefully curated to keep you engaged and
        challenged, ensuring you never hit a plateau in your fitness
        endeavors.
      </p>
      <button class="btn">Book A Class</button>
    </div>
  </section>

  <section class="section__container join__container">
    <h2 class="section__header">WHY JOIN US ?</h2>
    <p class="section__subheader">
      Our diverse membership base creates a friendly and supportive
      atmosphere, where you can make friends and stay motivated.
    </p>
    <div class="join__image">
      <img src="assets/join.jpg" alt="Join" />
      <div class="join__grid">
        <div class="join__card">
          <span><i class="ri-user-star-fill"></i></span>
          <div class="join__card__content">
            <h4>Personal Trainer</h4>
            <p>Unlock your potential with our expert Personal Trainers.</p>
          </div>
        </div>
        <div class="join__card">
          <span><i class="ri-vidicon-fill"></i></span>
          <div class="join__card__content">
            <h4>Practice Sessions</h4>
            <p>Elevate your fitness with practice sessions.</p>
          </div>
        </div>
        <div class="join__card">
          <span><i class="ri-building-line"></i></span>
          <div class="join__card__content">
            <h4>Good Management</h4>
            <p>Supportive management, for your fitness success.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section__container price__container">
    <h2 class="section__header">OUR MEMBERSHIP PLAN</h2>
    <p class="section__subheader">
      Our pricing plan comes with various membership tiers, each tailored to
      cater to different preferences and fitness aspirations.
    </p>
    <div class="price__grid">
      <?php
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      ?>
          <div class="price__card">
            <div class="price__card__content">
              <h4><?php echo htmlspecialchars($row['duration']); ?> Month<?php if ($row['duration'] > 1) { ?>s <?php } ?>
              </h4>
              <h3>₹ <?php echo htmlspecialchars(string: ($row['price'] - ($row['price'] * $row['discount']) / 100)); ?></h3>
              <?php
              if ($row['discount'] > 0) {
              ?>
                <p>
                  <i class="ri-checkbox-circle-line"></i>
                  <?php echo htmlspecialchars($row['discount']); ?>% OFF
                </p>
              <?php
              }
              ?>
              <p>
                <i class="ri-checkbox-circle-line"></i>
                <?php echo htmlspecialchars($row['description']); ?>
              </p>
            </div>
            <button class="btn price__btn" onclick="location.href='checkout.php?id=<?php echo $row['id']; ?>'">Join Now</button>
          </div>
      <?php
        }
      } else {
        echo "<p>No Membership Plans Available.</p>";
      }
      ?>
    </div>
  </section>

  <section class="review">
    <div class="section__container review__container">
      <span><i class="ri-double-quotes-r"></i></span>
      <div class="review__content">
        <h4>MEMBER REVIEW</h4>
        <p>
          What truly sets this gym apart is their expert team of trainers. The
          trainers are knowledgeable, approachable, and genuinely invested in
          helping members achieve their fitness goals. They take the time to
          understand individual needs and create personalized workout plans,
          ensuring maximum results and safety.
        </p>
        <div class="review__rating">
          <span><i class="ri-star-fill"></i></span>
          <span><i class="ri-star-fill"></i></span>
          <span><i class="ri-star-fill"></i></span>
          <span><i class="ri-star-fill"></i></span>
          <span><i class="ri-star-half-fill"></i></span>
        </div>
        <div class="review__footer">
          <div class="review__member">
            <img src="assets/member.jpg" alt="member" />
            <div class="review__member__details">
              <h4>Jane Cooper</h4>
              <p>Software Developer</p>
            </div>
          </div>
          <div class="review__nav">
            <span><i class="ri-arrow-left-line"></i></span>
            <span><i class="ri-arrow-right-line"></i></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  include "footer.php"
  ?>
  <?php
  $conn->close();
  ?>
</body>

</html>