<?php

    include "logic.php";
    session_start();
    $user = $_SESSION['user_name'];
    
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Stories Page</title>
    <link rel="stylesheet" href="CSS/story.css">
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


  </head>
  <body>
    <div class = "all">
      <!-- Display any info -->
      <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert alert-success" role="alert">
                    Post has been added successfully
                </div>
            <?php }?>
        <?php } ?>
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

        <div class="story-gallery">
          <div class="story s1">
            <img src="iblog/addp.png" alt="">
            <p>User Name</p>

          </div>
          <div class="story s2">
            <img src="iblog/member-1.png" alt="">
            <p>User Name</p>

          </div>
          <div class="story s3">
            <img src="iblog/member-2.png" alt="">
            <p>User Name</p>

          </div>
          <div class="story s4">
            <img src="iblog/member-3.png" alt="">
            <p>User Name</p>

          </div>
          <div class="story s5">
            <img src="iblog/member-4.png" alt="">
            <p>User Name</p>

          </div>

        </div>
        <div class="WPS">
          <div class="user-profile">
            <img src="iblog/profile-pic.png" alt="">
            <div class="">
              <p><?php echo $user;?></p>
              <small>Public <i class="fas fa-caret-down"></i> </small>

            </div>

          </div>
          <div class="PIC">
            <textarea rows="3" placeholder="What's on your mind?"></textarea>
          <div class="APL">
              <!-- <a href="#"> <img src="iblog/live-video.png" alt=""> Live Video </a> -->
              <a href="#"> <img src="iblog/photo.png" alt=""> Photo </a>
              <a href="#"> <img src="iblog/feeling.png" alt=""> Activity </a>
              <div role='link' aria-labelledby='shareButtonLabel' tabindex='0' onKeydown='skypeShareKeyDownHandler(event)' class='skype-share' data-href='http://' data-lang='' data-text='skype' data-style='large' ></div>
              <div>
               <a href = "post2.php"> <button type="button" class="post-btn" name="button" >Post Your Thoughts</button></a>

              </div>
            </div>

          </div>

        </div>
  <!-- Display posts from database -->
  <?php foreach($query as $q){ ?>
  <div class="PC">
  
              <div class="post-row">
                <div class="user-profile">
                  <img src="iblog/profile-pic.png" alt="">
                  <div class="">
                    <p><?php echo $q['username'];?></p>
                    <span><?php echo substr($q['timest'], 0, 10);?></span>
                  </div>

                </div>
                <a href="#"> <i class="fas fa-ellipsis-v"></i> </a>
              </div>

              <div class="">
                <br>
                <h3><?php echo $q['title'];?></h3>
                  <div class="rdmore">
                  <p class = "post-text"> <p class="post-text"><?php echo substr($q['content'], 0, 50);?><span id="dots<?php echo $q['ID'];?>">...</span><span id="more<?php echo $q['ID'];?>"> <?php echo substr($q['content'], 50, );?></span></p>
                  <button class = "readmorebutton" onclick="myFunction(<?php echo $q['ID'];?>)" style = "  background: #FF4742;
  border: 1px solid #FF4742;
  border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-size: 16px;
  font-weight: 800;
  line-height: 16px;
  min-height: 40px;
  outline: 0;
  padding: 12px 14px;
  text-align: center;
  text-rendering: geometricprecision;
  text-transform: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;" id="myBtn<?php echo $q['ID'];?>">Read more</button><br>
                    <br><img src="iblog/feed-image-1.png" class="post-img" alt="">
                  </div>
                
              </div>

              <div class="post-row">
                <div class="activity-icons">
                  <div class=""> <img src="iblog/like-blue.png" alt=""> 120 </div>
                  <div class=""> <img src="iblog/comments.png" alt=""> 54 </div>
                  <div class=""> <img src="iblog/share.png" alt=""> 20 </div>

                </div>
                <div class="post-profile-icon">
                  <img src="iblog/profile-pic.png" alt=""> <i class="fas fa-caret-down"></i>

                </div>

              </div>
              
            </div>
            <?php }?>
       <!-- <div class="PC">
          <div class="post-row">
            <div class="user-profile">
              <img src="iblog/profile-pic.png" alt="">
              <div class="">
                <p>John Nick</p>
                <span>June 24 2021, 13:40 pm</span>
              </div>

            </div>
            <a href="#"> <i class="fas fa-ellipsis-v"></i> </a>
          </div>

          <p class="post-text">aaaaa <span>abhcfxfgchvj</span> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
          aaaaaaaaaaaaaaaaaaaaaaaaaaaaa. <a href="#">#Something</a> </p>
          <img src="iblog/feed-image-2.png" class="post-img" alt="">

          <div class="post-row">
            <div class="activity-icons">
              <div class=""> <img src="iblog/like-blue.png" alt=""> 120 </div>
              <div class=""> <img src="iblog/comments.png" alt=""> 54 </div>
              <div class=""> <img src="iblog/share.png" alt=""> 20 </div>

            </div>
            <div class="post-profile-icon">
              <img src="iblog/profile-pic.png" alt=""> <i class="fas fa-caret-down"></i>

            </div>

          </div>

        </div>
        <div class="PC">
          <div class="post-row">
            <div class="user-profile">
              <img src="iblog/profile-pic.png" alt="">
              <div class="">
                <p>John Nick</p>
                <span>June 24 2021, 13:40 pm</span>
              </div>

            </div>
            <a href="#"> <i class="fas fa-ellipsis-v"></i> </a>
          </div>

          <p class="post-text">aaaaa <span>abhcfxfgchvj</span> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
          aaaaaaaaaaaaaaaaaaaaaaaaaaaaa. <a href="#">#Something</a> </p>
          <img src="iblog/feed-image-3.png" class="post-img" alt="">

          <div class="post-row">
            <div class="activity-icons">
              <div class=""> <img src="iblog/like-blue.png" alt=""> 120 </div>
              <div class=""> <img src="iblog/comments.png" alt=""> 54 </div>
              <div class=""> <img src="iblog/share.png" alt=""> 20 </div>

            </div>
            <div class="post-profile-icon">
              <img src="iblog/profile-pic.png" alt=""> <i class="fas fa-caret-down"></i>

            </div>

          </div>

        </div>
        <div class="PC">
          <div class="post-row">
            <div class="user-profile">
              <img src="iblog/profile-pic.png" alt="">
              <div class="">
                <p>John Nick</p>
                <span>June 24 2021, 13:40 pm</span>
              </div>

            </div>
            <a href="#"> <i class="fas fa-ellipsis-v"></i> </a>
          </div>

          <p class="post-text">aaaaa <span>abhcfxfgchvj</span> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
          aaaaaaaaaaaaaaaaaaaaaaaaaaaaa. <a href="#">#Something</a> </p>
          <img src="iblog/feed-image-4.png" class="post-img" alt="">

          <div class="post-row">
            <div class="activity-icons">
              <div class=""> <img src="iblog/like-blue.png" alt=""> 120 </div>
              <div class=""> <img src="iblog/comments.png" alt=""> 54 </div>
              <div class=""> <img src="iblog/share.png" alt=""> 20 </div>

            </div>
            <div class="post-profile-icon">
              <img src="iblog/profile-pic.png" alt=""> <i class="fas fa-caret-down"></i>

            </div>

          </div>

        </div>
        <div class="PC">
          <div class="post-row">
            <div class="user-profile">
              <img src="iblog/profile-pic.png" alt="">
              <div class="">
                <p>John Nick</p>
                <span>June 24 2021, 13:40 pm</span>
              </div>

            </div>
            <a href="#"> <i class="fas fa-ellipsis-v"></i> </a>
          </div>

          <p class="post-text">aaaaa <span>abhcfxfgchvj</span> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
          aaaaaaaaaaaaaaaaaaaaaaaaaaaaa. <a href="#">#Something</a> </p>
          <img src="iblog/feed-image-5.png" class="post-img" alt="">

          <div class="post-row">
            <div class="activity-icons">
              <div class=""> <img src="iblog/like-blue.png" alt=""> 120 </div>
              <div class=""> <img src="iblog/comments.png" alt=""> 54 </div>
              <div class=""> <img src="iblog/share.png" alt=""> 20 </div>

            </div>
            <div class="post-profile-icon">
              <img src="iblog/profile-pic.png" alt=""> <i class="fas fa-caret-down"></i>

            </div>

          </div>

        </div> -->

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
        <img src="iblog/ad.png" class="sidebar-ads" alt="">
        <!-- <div class="sidebar-title">
          <h4>Advertisement</h4>
          <a href="#">close</a>
        </div>
        <img src="iblog/friend.png" class="sidebar-ads" alt=""> -->
        <!-- <img src="iblog/watch12.png" class="sidebar-ads" alt=""> -->
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

    <div class="footer" style = " align: center">
      <p>Copyright © 2022 We Starters</p>

    </div>
    
    <script src="script.js">

    </script>
    <script>
    function myFunction(pos) {
  var dots = document.getElementById("dots" + pos);
  var moreText = document.getElementById("more" + pos);
  var btnText = document.getElementById("myBtn"+pos);

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}</script>
</div>
  </body>
</html>
