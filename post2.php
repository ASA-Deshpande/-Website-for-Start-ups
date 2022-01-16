<?php

    include "logic.php";
session_start();
$user = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Post Page</title>
    <link rel="stylesheet" href="CSS/story.css">
    <link rel="stylesheet" href="CSS/styles.css">

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" >
    <!-- <link rel="stylesheet" href="CSS/post.css"> -->
    <script src="https://kit.fontawesome.com/458558451a.js" crossorigin="anonymous"></script>
    <script>
// Place this code in the head section of your HTML file
      (function(r, d, s) {
      	r.loadSkypeWebSdkAsync = r.loadSkypeWebSdkAsync || function(p) {
      		var js, sjs = d.getElementsByTagName(s)[0];
      		if (d.getElementById(p.id)) { return; }
      		js = d.createElement(s);
      		js.id = p.id;
      		js.src = p.scriptToLoad;
      		js.onload = p.callback
      		sjs.parentNode.insertBefore(js, sjs);
      	};
      	var p = {
      		scriptToLoad: 'https://swx.cdn.skype.com/shared/v/latest/skypewebsdk.js',
      		id: 'skype_web_sdk'
      	};
      	r.loadSkypeWebSdkAsync(p);
      })(window, document, 'script');
    </script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">


  </head>
  <body>
    <div class="all">


    <nav>
      <div class="nav-left">
        <img src="iblog/headerlogo.svg" class="logo">
        <ul>
          <li>
            <img src="iblog/notify.png" alt="">
          </li>
          <li>
            <img src="iblog/mail.png" alt="">
          </li>
          <li>
            <img src="iblog/show.png" alt="">
          </li>
        </ul>


      </div>
      <div class="nav-right">
        <div class="search-box">
          <img src="iblog/search.png" alt="">
          <input type="text" name="" value="" placeholder="Search">
        </div>
        <div class="nav-user-icon online" onclick="settingsMenuToggle()">
          <img src="iblog/profile-pic.png" alt="">

        </div>

      </div>

      <div class="settings-menu">

        <div id="dark-btn" >
          <span></span>
        </div>

        <div class="SMI">
          <div class="user-profile">
            <img src="iblog/profile-pic.png" alt="">
            <div class="">
              <p><?php echo $user;?></p>
              <a href="#">See Your Profile</a>
            </div>
          </div>
          <hr>
          <div class="user-profile">
            <img src="iblog/feedback.png" alt="">
            <div class="">
              <p>Give Feedback</p>
              <a href="#">Help Us Improve</a>
            </div>
          </div>
          <hr>
          <div class="setting-links">
            <img src="iblog/setting.png" class="settings-icon" alt="">
            <a href="#">Settings & Privacy <img src="iblog/arrow.png" width="10px" alt=""> </a>

          </div>
          <div class="setting-links">
            <img src="iblog/help.png" class="settings-icon" alt="">
            <a href="#">Help & Support <img src="iblog/arrow.png" width="10px" alt=""> </a>

          </div>
          <div class="setting-links">
            <img src="iblog/display.png" class="settings-icon" alt="">
            <a href="#">Display & Accessiblity <img src="iblog/arrow.png" width="10px" alt=""> </a>

          </div>
          <div class="setting-links">
            <img src="iblog/logout.png" class="settings-icon" alt="">
            <a href="logout.php">Logout <img src="iblog/arrow.png" width="10px" alt=""> </a>

          </div>


        </div>
      </div>


    </nav>

    <div class="container">
      <!-- left sidebar -->
      <div class="left-sidebar">
        <div class="imp-links">
          <a href="#"> <img src="iblog/news1.png"> Latest News </a>
          <a href="#"> <img src="iblog/friend.png"> Friends </a>
          <a href="#"> <img src="iblog/grp.png"> Group </a>
          <a href="#"> <img src="iblog/shop.png"> marketplace </a>
          <a href="#"> <img src="iblog/watch12.png"> Watch </a>
          <a href="#">See More</a>
        </div>
        <div class="shortcut-links">
        <p>Your Shortcuts</p>
          <a href="https://www.entrepreneur.com/topic/inspiration"> <img src="iblog/shortcut-1.png" alt="">Inspiration for Entrepreneurs! </a>
          <a href="https://www.economist.com/business"> <img src="iblog/shortcut-2.png" alt="">The Economist - Business section </a>
          <a href="https://www.under30ceo.com/"> <img src="iblog/shortcut-3.png" alt="">Under 30 CEO </a>
          <a href="https://www.onevest.com/"> <img src="iblog/shortcut-4.png" alt="">Investment Funding </a>
        </div>

      </div>
      <!-- main content -->
      <div class="main-content">

        <!--  -->
        <div class="WPS">
          <div class="user-profile">
            <img src="iblog/profile-pic.png" alt="">
            <div class="">
              <p><?php echo $user;?></p>
              <small>Public <i class="fas fa-caret-down"></i> </small>

            </div>

          </div>
          <div class="PIC">
            <div class="containermt">
                 <form method="POST" class="post-form">
                     <input type="text" placeholder="Blog Title" class="form-control my-3 center" name="title">
                     <div class="ht">

                     </div>
                     <textarea name="content" class="form-control my-3" cols="30" rows="10"></textarea>
                     <div class="ht">

                     </div>
                     <!-- <button class="btn btn-dark" name="new_post">Add Post</button> -->
                     <button class="post-btn" name="new_post">Add Post</button>

                 </form>

            </div>
            <div class="APL">
              <!-- <a href="#"> <img src="iblog/live-video.png" alt=""> Live Video </a> -->
              <a href="#"> <img src="iblog/photo.png" alt=""> Photo </a>
              <a href="#"> <img src="iblog/feeling.png" alt=""> Activity </a>
              <div role='link' aria-labelledby='shareButtonLabel' tabindex='0' onKeydown='skypeShareKeyDownHandler(event)' class='skype-share' data-href='http://' data-lang='' data-text='skype' data-style='large' ></div>


            </div>

          </div>

        </div>



        <button type="button" class="load-more-btn" name="button">Load More</button>



      </div>


      <!-- right sidebar -->
      <div class="right-sidebar">

        <div class="sidebar-title">
          <h4>Events</h4>
          <a href="#">See All</a>
        </div>

        <div class="event">
          <div class="left-event">
            <h3>18</h3>
            <span>March</span>
          </div>
          <div class="right-event">
            <h4>Social Media</h4>
            <p> <i class="fas fa-map-marker-alt"></i> Willson Tech Park</p>
            <a href="#">More Info</a>
          </div>
        </div>

        <div class="event">
          <div class="left-event">
            <h3>18</h3>
            <span>March</span>
          </div>
          <div class="right-event">
            <h4>Social Media</h4>
            <p> <i class="fas fa-map-marker-alt"></i> Willson Tech Park</p>
            <a href="#">More Info</a>
          </div>
        </div>
        <div class="sidebar-title">
          <h4>Advertisement</h4>
          <a href="#">close</a>
        </div>
        <img src="iblog/advertisement.png" class="sidebar-ads" alt="">
        <div class="sidebar-title">
          <h4>Conversation</h4>
          <a href="#">Hide Chat</a>
        </div>

        <div class="online-list">
          <div class="online">
            <img src="iblog/member-1.png" alt="">
          </div>
          <p>Alison Mina</p>

        </div>
        <div class="online-list">
          <div class="online">
            <img src="iblog/member-2.png" alt="">
          </div>
          <p>Alison Mina</p>

        </div>
        <div class="online-list">
          <div class="online">
            <img src="iblog/member-3.png" alt="">
          </div>
          <p>Alison Mina</p>

        </div>

      </div>

    </div>


    <script src="script.js">



    </script>

    </div>


    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> -->


  </body>
</html>
