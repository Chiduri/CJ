<?php
include 'includes/head.php';
include 'includes/navigation.php';
?>

<!-- content to be added here -->
<div class="small-banner">
  <div class="wrapper">
    <div class="banner-text1">
      <h1>Sign In</h1>
    </div>
  </div>
</div>
<div class="wrapper">
  <form class="signin-form" action="employer_signup.php" method="post">
    <input type="text" name="nameandsurnmae" placeholder="Name and Surname" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <button type="submit">Sign In</button>
    <p><a href="reset_password.php">Forgot Password?</a></p>
  </form>
</div>
