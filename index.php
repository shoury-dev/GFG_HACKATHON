
<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
    /*** set the content type header ***/
/*** Without this header, it wont work ***/
    header("Content-type: text/css");
  }
  .wrapper{
    background-color: #000;
    position:relative;
    width: 100%;
    padding:5px;
    opacity:0.85;
    overflow: visible;
  }
  .wrapper nav{
    position: relative;
    display: flex;
    max-width: calc(100% - 200px);
    margin: 0 auto;
    height: 70px;
    align-items: center;
    justify-content: space-between;
  }
  nav .content{
    display: flex;
    align-items: center;
  }
  nav .content .links{
    margin-left: 80px;
    display: flex;
  }
  .content .logo a{
    color: #fff;
    font-size: 30px;
    font-weight: 600;
  }
  .content .links li{
    list-style: none;
    line-height: 70px;
  }
  .content .links li a,
  .content .links li label{
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    padding: 9px 20px;
    border-radius: 5px;
    transition: all 0.3s ease;
  }
  .content .links li label{
    display: none;
  }
  .content .links li a:hover,
  .content .links li label:hover{
    background: #323c4e;
  }
  .wrapper .search-icon,
  .wrapper .menu-icon{
    color: #fff;
    font-size: 18px;
    cursor: pointer;
    line-height: 70px;
    width: 70px;
    text-align: center;
  }
  .wrapper .menu-icon{
    display: none;
  }
  .wrapper #show-search:checked ~ .search-icon i::before{
    content: "\f00d";
  }
  .wrapper .search-box{
    position: absolute;
    height: 100%;
    max-width: calc(100% - 50px);
    width: 100%;
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
  }
  .wrapper #show-search:checked ~ .search-box{
    opacity: 1;
    pointer-events: auto;
  }
  .search-box input{
    width: 100%;
    height: 100%;
    border: none;
    outline: none;
    font-size: 17px;
    color: #fff;
    background: #171c24;
    padding: 0 100px 0 15px;
  }
  .search-box input::placeholder{
    color: #f2f2f2;
  }
  .search-box .go-icon{
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    line-height: 60px;
    width: 70px;
    background: #171c24;
    border: none;
    outline: none;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
  }
  .wrapper input[type="checkbox"]{
    display: none;
  }
  
  
  /* Dropdown Menu code start */
  .content .links ul{
    position: absolute;
    background: #171c24;
    top: 80px;
    z-index: -1;
    opacity: 0;
    visibility: hidden;
  }
  .content .links li:hover > ul{
    top: 70px;
    opacity: 1;
    visibility: visible;
    transition: all 0.3s ease;
  }
  .content .links ul li a{
    display: block;
    width: 100%;
    line-height: 30px;
    border-radius: 0px!important;
  }
  .content .links ul ul{
    position: absolute;
    top: 0;
    right: calc(-100% + 8px);
  }
  .content .links ul li{
    position: relative;
  }
  .content .links ul li:hover ul{
    top: 0;
  }
?>

<?php include_once "header.php"; ?>
<body>
<div class="navbar">
    <! Navbar Using HTML and CSS-->
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#">Pending</a></div>
        <ul class="links">
          <li><a href="index.html">Home</a></li>
          <li><a href="login.html">Log-In/Sign-Up</a></li>
          <li>
            <a href="about.html" class="desktop-link">About</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">About</label>
            <!--
            <ul>
              <li><a href="#">Drop Menu 1</a></li>
              <li><a href="#">Drop Menu 2</a></li>
              <li><a href="#">Drop Menu 3</a></li>
              <li><a href="#">Drop Menu 4</a></li>
              </ul>
          </li>
        -->
          <li>
            <a class="desktop-link">Services</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">Services</label>
            <ul>
              <li><a href="#">Drop Menu 1</a></li>
              <li><a href="#">Drop Menu 2</a></li>
              <li><a href="#">Drop Menu 3</a></li>
              <li>
                <a href="#" class="desktop-link">More Items</a>
                <input type="checkbox" id="show-items">
                <label for="show-items">More Items</label>
                <ul>
                  <li><a href="#">Sub Menu 1</a></li>
                  <li><a href="#">Sub Menu 2</a></li>
                  <li><a href="#">Sub Menu 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="feedback.html">Feedback</a></li>
        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Type Something to Search..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav>
  </div> 
  <div class="wrapper">
    <section class="form signup">
      <header>Welcome to the chat portal</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
