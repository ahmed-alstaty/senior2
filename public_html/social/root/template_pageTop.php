<!-- **** template_pageTop.php **** -->
<div id="pageTop">
  <div id="pageTopWrap">
    <div id="pageTopLogo">
      <a href="index.php">
        <img src="images/logo.jpg" alt="logo" title="Web Intersect 2.0">
      </a>
    </div>
    <div id="pageTopRest">
      <div id="menu1">
        <div>
        <?php
            if(isset($_POST["u"])){
                echo '<a href="logout.php"> logout  </a>';
            }
            else if (!isset($_POST["u"])){
            echo '<a href="signup.php">Sign Up  </a>';
          echo '/';
          echo '<a href="login.php"> Log In </a>';
            }
        ?>
          
        </div>
      </div>
      <div id="menu2">
        <div>
          <a href="index.php">
            <img src="images/home.png" alt="Home" title="Home" width="30" height="30">
          </a>
          <a href="#">Menu_Item_1</a>
          <a href="#">Menu_Item_2</a>
        </div>
      </div>
    </div>
  </div>
</div>