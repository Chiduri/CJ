<?php
include 'includes/head.php';
include 'includes/navigation.php';
include 'includes/bannersmall.php';
?>

<!-- content to be added here -->
<div class="wrapper">
  <form class="employer-form" action="includes/employers_signup.inc.php" method="POST">
    <input type="text" name="name_and_surname" placeholder="Name and Surname" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="position" placeholder="Position" required><br>
    <input type="text" name="company_name" placeholder="Company Name" required><br>
    <input type="password" name="pwd" placeholder="Password" required><br>
    <button type="submit" name="submit">Sign Up</button>
    <p>By clicking "Sign up for CodeJozi", you agree to our <a href="#">terms of service</a>
      and <a href="#">privacy policy</a>. We’ll send you newsletters</p>
  </form>
</div>

<?php include 'includes/footer.php'; ?>
