
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <title>EDI - Homepage</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="login.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>
<style media="screen">
  .a {
      padding: 50px;
  }
</style>


  </head>
  <body onload= "log()">
    <div class="header">
        <header class="text-gray-600 body-font">
          <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
              <div class="logo">
                  <img src="images/blogo.svg" width="220px"alt="lOGO IMAGE">
                </div>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
              <a href="index.php" class="mr-5 hover:text-red-900">Home</a>
              <a href="aboutus.html" class="mr-5 hover:text-gray-900">About us</a>
              <a href="#" class="mr-5 hover:text-gray-900">Services</a>
              <a href="logintr.php" class="mr-5 hover:text-gray-900">Account</a>
            </nav>
          </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-md-5 a">
                    <img class="img" src="images/undraw_traveling_re_weve.svg" width="120%">
                </div>
                <div class="col-md-5 offset-2 a">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="log()">
                                Login
                            </span>
                            <span onclick="reg()">
                                Register
                            </span>
                            <hr id="in">
                        </div>
                        <form id="log" action= "loginback.php" method="POST">
                            <i class="fa fa-user"></i>
                            <input type="text" placeholder="Username" name="user_name">

                            <i class="fa fa-lock"></i>
                            <input type="text" placeholder="Password" name="password">

                            <button type="submit" class="but">Login</button>
                        </form>
                        <form id = "sig" action= "signupback.php" method="POST">
                            <i class="fa fa-user"></i>
                        
                            <input type="text" placeholder="Username" name="user_name">
                            <i class="fa fa-envelope"></i>


                            <input type="text" placeholder="Email" name="user_email">
                            <i class="fa fa-lock"></i>

                            <input type="text" placeholder="Password" name="password">
                            <button type="submit" class="but" onclick="">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
          <div class="row">
            <div class="footer-col-1">
              <h3>Download Our App</h3>
              <p>Download App for Android and ios Mobile Phone</p>
              <div class="app-logo">
                <img src="images/play-store.png" alt="">
                <img src="images/app-store.png" alt="">
              </div>
            </div>
            <div class="footer-col-2">
              <img class = "fim" src="images/mlogo.svg" width="290px" alt="" class="ml">
              <p>srdxtfcygvhubjnkml,ftgyhubjinkom</p>
            </div>
            <div class="footer-col-3">
              <h3>Useful Links</h3>
              <ul>
                <li>Coupons</li>
                <li>Blog Post</li>
                <li>Return Policy</li>
                <li>Join Affiliate</li>
              </ul>
            </div>
            <div class="footer-col-4">
              <h3>Follow Us</h3>
              <ul>
                <li><a href="#"><img src="images/icons8-instagram.svg" width="30px"></a></li>
                <li><a href="#"><img src="images/icons8-twitter.svg" width="30px"></a></li>
                <li><a href="#"><img src="images/icons8-linkedin.svg" width="30px"></a></li>

                <li><a href="#"><img src="images/icons8-facebook-64.png" width="25px"></a></li>
              </ul>
            </div>
      
          </div>
          <hr>
          <p class = "copyright">Copyright © 2022 We Starters</p>
      
        </div>
      
      </div>
      <script>
        var LF = document.getElementById("log");
        var RF = document.getElementById("sig");
        var ind = document.getElementById("in");

        function log(){
            RF.style.transform  = "translate(300px)";
            LF.style.transform  = "translate(300px)";
            ind.style.transform  = "translate(20px)";

        }

        function reg(){
            RF.style.transform = "translate(0px)";
            LF.style.transform = "translate(0px)";
            ind.style.transform = "translate(160px)";
        }


    </script>
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle(){
          if(MenuItems.style.maxHeight == "0px")
            {
              MenuItems.style.maxHeight = "200px";
            }
          else
            {
              MenuItems.style.maxHeight = "0px";
            }
        }
      </script>
  </body>