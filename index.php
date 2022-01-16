<?php
session_start();
$_SESSION;
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <title>EDI - Homepage</title>
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
  <body>

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
          <div class="col-2">
            <h1>Hello EveryOne!!!</h1>
            <h1><span class="auto-input"></span></h1>
            <p>We are here to help you develop your StartUp.<br>Set up your profile, connect with people, get mentored and let others know your own experiences!<br>Get Funding and meet people who want to work with you.</p>
            <a href="" class="btn">Explore Now &#8594;</a>
          </div>
          <div class="col-2">
            <img class="img" src="images/undraw_traveling_re_weve.svg" width="110%">


          </div>

        </div>
      </div>

    </div>


  <!-- ---------- Part - 2 ----------- -->
    <div class="categories">
      <div class="small-container">
        <h1 class="title2">OUR MOTIVE</h1>
        <div class="row">
          <div class="col-3">
            <img src="Images/idea.png" class="ide" alt="">
            <h3>Let People Know</h3>
            <p>Tell People About Your StartUp And Let The World Know How You Are Changing It</p>
          </div>
          <div class="col-3">
            <img src="Images/funding.png" alt="">
            <h3>Find Venture Capitals</h3>
            <p>Get In Touch With Different Venture Capitals And Individual Investers For Your StartUp</p>
          </div>
          <div class="col-3">
            <img src="Images/talent-search.png" alt="">
            <h3>Find People</h3>
            <p>Hire People Who Can Help You Create The Best Of Your Ideas</p>
          </div>

        </div>
      </div>
    </div>

<!-- part-3 -->
    <div class="small-container">
      <!-- <h2 class="title">XXXXXXXXXXXXXXXXXXXXX</h2>
      <div class="row">
        <div class="col-4">
          <img src="Images/product-1.jpg" alt="">
          <h4>This is a H4</h4>
          <p>This is a p tag</p>
        </div>
        <div class="col-4">
          <img src="Images/product-1.jpg" alt="">
          <h4>This is a H4</h4>
          <p>This is a p tag</p>
        </div>
        <div class="col-4">
          <img src="Images/product-1.jpg" alt="">
          <h4>This is a H4</h4>
          <p>This is a p tag</p>
        </div>
        <div class="col-4">
          <img src="Images/product-1.jpg" alt="">
          <h4>This is a H4</h4>
          <p>This is a p tag</p>
        </div>


      </div> -->
      <!-- <h2 class="title">XXXXXXXXXXXXXXXXXXXXX</h2>
      <div class="row">
        <div class="col-4">
          <img src="Images/product-1.jpg" alt="">
          <h4>This is a H4</h4>
          <p>This is a p tag</p>
        </div>
        <div class="col-4">
          <img src="Images/product-1.jpg" alt="">
          <h4>This is a H4</h4>
          <p>This is a p tag</p>
        </div>
        <div class="col-4">
          <img src="Images/product-1.jpg" alt="">
          <h4>This is a H4</h4>
          <p>This is a p tag</p>
        </div>
        <div class="col-4">
          <img src="Images/product-1.jpg" alt="">
          <h4>This is a H4</h4>
          <p>This is a p tag</p>
        </div>


      </div> -->

    </div>





<!-- part4 -->
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="offer">
            <div class="small-container">
              <div class="row">
                <div class="col2">
                  <img src="Images/em.png" class="offer-img" height="420px" width="450px" alt="">
                </div>
                <div class="col2">
                  <h1>Elon Musk - CEO Tesla, Founder SpaceX</h1>
                  <img src="images/icons8-quote-left-50.png" alt="">
                  <small>If something's important enough, you should try. <br> Even if - the probable outcome is failure.</small>
                  <br>
                </div>

              </div>

            </div>

          </div>

        </div>
        <div class="swiper-slide">
          <div class="offer">
            <div class="small-container">
              <div class="row">
                <div class="col2">
                  <img src="Images/sj.png" class="offer-img" height="550px" width="465px" alt="">
                </div>
                <div class="col2">
                  <h1>Steve Jobs - Co-Founder, Chairman and CEO, Apple</h1>
                  <img src="images/icons8-quote-left-50.png" alt="">
                  <small>Your work is going to fill a large part of your life,<br> and the only way to be truly satisfied is to do what you believe is great work. <br> And the only way to do great work is to love what you do</small>
                  <br>
                </div>

              </div>

            </div>

          </div>

        </div>
        <div class="swiper-slide">
          <div class="offer">
            <div class="small-container">
              <div class="row">
                <div class="col2">
                  <img src="Images/j.png" class="offer-img" height="500px" width="475px" alt="">
                </div>
                <div class="col2">
                  <h1>Jeff Bezos, Amazon Founder and CEO</h1>
                  <img src="images/icons8-quote-left-50.png" alt="">
                  <small>“I knew that if I failed I wouldn’t regret that, <br> but I knew the one thing I might regret is not trying.”</small>
                  <br>
                </div>

              </div>

            </div>

          </div>

        </div>
        <!-- <div class="swiper-slide">Slide 4</div> -->

      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>


    <!-- ---------------part5--------------- -->

    <div class="testimonial">
      <div class="small-container">
        <div class="row">
          <div class="col-3">
            <img src="Images/u.png" style="width: 100px;" alt="">
            
            <h3>User Name</h3>
            <i class="fa fa-quote-left"></i><p>It is a very admirable platform <br> Helped me to get started with my startup</p>
            
            

          </div>
          <div class="col-3">
            <img src="Images/u.png" style="width: 100px;" alt="">
            
            <h3>User Name</h3>
            <i class="fa fa-quote-left"></i><p>It is a very admirable platform <br> Helped me to get started with my startup</p>
            
            

          </div>
          <div class="col-3">
            <img src="Images/u.png" style="width: 100px;" alt="">
            
            <h3>User Name</h3>
            <i class="fa fa-quote-left"></i><p>It is a very admirable platform <br> Helped me to get started with my startup</p>
            
            

          </div>

        </div>

      </div>

    </div>

    <!-- part6 -->
    <div class="brands">
      <div class="small-container">
        <div class="row">
          <div class="col-5">
            <img src="Images/logo-godrej.png" alt="">
          </div>
          <div class="col-5">
            <img src="Images/logo-oppo.png" alt="">
          </div>
          <div class="col-5">
            <img src="Images/logo-coca-cola.png" alt="">
          </div>
          <div class="col-5">
            <img src="Images/logo-paypal.png" alt="">
          </div>
          <div class="col-5">
            <img src="Images/logo-philips.png" alt="">
          </div>

        </div>

      </div>

    </div>

    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <p>Download App for Android and ios Mobile Phone</p>
            <div class="app-logo">
              <img src="Images/play-store.png" alt="">
              <img src="Images/app-store.png" alt="">
            </div>
          </div>
          <div class="footer-col-2">
            <img class = "fim" src="images/mlogo.svg" alt="">
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
        <p class = "copyright">Copyright © 2022</p>

      </div>

    </div>

<!-- js for toggle menu -->

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


    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>


    <script>
      var typed = new Typed(".auto-input",{
        strings:  ["Welcome To StartUp","Start Creating Your Company"],
        typeSpeed: 100,
        backSpeed: 100,
        loop: true
      })

    </script>
<!-- swiper -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


    <script type="module">
      import Swiper from 'https://unpkg.com/swiper@7/swiper-bundle.esm.browser.min.js'

      const swiper = new Swiper
    </script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>


  </body>
</html>
