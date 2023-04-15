<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
<div class="navbar" style="padding:20px 440px;background-color:#000;color:#fff;top:0;left:0;position:absolute;opacity:0.8;">
  <a href="/index.html" style="padding:20px;background-color:#000;color:#fff;">Home</a>
  <a href="http://localhost/chatapp/index.php"  style="padding:20px;background-color:#000;color:#fff;">Log-In</a>
  <a href="/about.html"  style="padding:20px;background-color:#000;color:#fff;">About</a>
  <a href="/feedback.html"  style="padding:20px;background-color:#000;color:#fff;">Feedback</a>   
  </div>


  <div class="wrapper">
    <section class="form login">
      <header>Realtime Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
