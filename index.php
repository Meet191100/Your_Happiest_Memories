<?php
  session_start();

  if (!isset($_SESSION['access_token'])) {
    header('Location: login.php');
    exit();
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>My Memories</title>
<meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/main.css">
  <style>
    .button {
  display: inline-block;
  border-radius: 10px;
  background-color: #4E76FF;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding:4px;
  width: 120px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
  </style>
 </head>
<body>

<!-- notification for small viewports and landscape oriented smartphones -->
<center><h2 class="text-center text-success" style="font-family: allura; font-size:35px; margin-top: 0px;">Welcome <?php echo $_SESSION['givenName']; ?></h2></center>
<div class="device-notification">
   <p class="device-notification--message">Our Website has so much to offer that we must request you orient your device to portrait or find a larger screen. You won't be disappointed.</p>
</div>

<div class="perspective effect-rotate-left">
  <div class="container"><div class="outer-nav--return"></div>
    <div id="viewport" class="l-viewport">
      <div class="l-wrapper">
        <header class="header">
          <a href="logout.php" style="margin-right: 80%;"><button class="button" style="vertical-align:middle; border:0px; background-color: #21D4FD; background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);font-weight: bold; font-size: 20px;"><span>Logout</span></button></a>

          <button class="header--cta cta">Hire Us</button>
          <div class="header--nav-toggle">
            <span></span>
          </div>
        </header>
        <nav class="l-side-nav">
          
          <ul class="side-nav">
            <li class="is-active"><span>Home</span></li>
            <li><span><a href="http://localhost/login/memories/memory1.php" target="meet" style="text-decoration: none; color: white; font-weight:lighter;">My Memories &nbsp&nbsp(Press Here)</a></span></li>
            <li><span>Help</span></li>
            <li><span>Contact Us</span></li>
            <li><span>Hire Us</span></li>
          </ul>
        </nav>

         <ul class="l-main-content main-content">
          <li class="l-section section section--is-active">
            <div class="intro">
              <div class="intro--banner">
                <h1 style="font-family: Segoe Print; color: #f4511e; margin-top: 100px; ">YOUR<br>HAPPIEST<br>MEMORIES</h1>
                <button class="cta">Hire Us
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                    <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                  </g>
                  </svg>
                  <span class="btn-background"></span>
                </button>
                <img src="assets/img/home1a.png" alt="Welcome">
              </div>
              <div class="intro--options" style="margin-top:10px; font-weight: lighter;">
                <a href="#0">
                  <h3 style="color: yellow; font-family: Comic Sans MS; font-size: 20px;">What Is It ?</h3><hr>
                  <p style="text-align: justify; color: lightgrey;font-size: 15px;">It is the web application to store large amount of memories as one's experience.</p>
                </a>
                <a href="#0">
                  <h3 style="color: yellow; font-family: Comic Sans MS;font-size: 20px;">How It Work ? </h3><hr>
                  <p style="text-align: justify; color:lightgrey;font-size: 15px;">The user interface is made very simple. User can enter the incidents happened and also there is an option to edit that (if one has by mistake entered wrong data). The individual memories can be viewed by that user only, as a matter of privacy.</p>
                </a>
                <a href="#0">
                  <h3 style="color: yellow; font-family: Comic Sans MS;font-size: 20px;">Memories</h3><hr>
                  <p style="text-align: justify; color:lightgrey; font-size: 15px;">Using this application one can relieve the good or bad memories as an experience. While writing one's biography one can use their data stored in this application to include in the biography in case forgotten by the individual. This application can be used as a diary as the concept is alike.</p>
                </a>
              </div>
            </div>
          </li>


          <li class="l-section section">
            <div>
            <iframe name="meet" height="750px" width="1700px" frameborder="0px" style="margin-top: 60px; margin-left:-52px;"></iframe>
            </div>
            </li>

          <li class="l-section section">
            <div class="work">
              <div class="work--lockup">
                <ul class="slider">
                  <li class="slider--item slider--item-left">
                    <a href="#0">
                      <div class="slider--item-image">
                        <img src="assets/img/3.png" alt="How is this helpful?">
                      </div>
                      <p class="slider--item-title" style="color: orange;font-family: Comic Sans MS;">How is this helpful ?</p>
                      <p class="slider--item-description" style="text-align: justify; font-weight: lighter; font-size: 15px; ">User can store as many memories as one wants to. As another perspective of this app is a diary which is very helpful in building oneself and maybe in future can be very useful in writing his/her autobiography.</p>
                    </a>
                  </li>
                  <li class="slider--item slider--item-center">
                    <a href="#0">
                      <div class="slider--item-image">
                        <img src="assets/img/1.png" alt="Add your memory">
                      </div>
                      <p class="slider--item-title" style="color: orange;font-family: Comic Sans MS;">Add your memory</p>
                      <p class="slider--item-description" style="text-align: justify; font-weight: lighter; font-size: 15px;">Login to your user account, go to My Memories , click on add memory button describe the memory giving appropriate title. Lastly click on Add Now.</p>
                    </a>
                  </li>
                  <li class="slider--item slider--item-right">
                    <a href="#0">
                      <div class="slider--item-image">
                        <img src="assets/img/2.png" alt="Data Security and Storage">
                      </div>
                      <p class="slider--item-title" style="color: orange;font-family: Comic Sans MS;">Data Security and Storage</p>
                      <p class="slider--item-description" style="text-align: justify;font-weight: lighter; font-size: 15px;">Your data will be secured with our database. We assure of no data leakage. The data will not consume any of your harddisk storage.</p>
                    </a>
                  </li>
                </ul>
                <div class="slider--prev">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                    <path d="M561,1169C525,1155,10,640,3,612c-3-13,1-36,8-52c8-15,134-145,281-289C527,41,562,10,590,10c22,0,41,9,61,29
                    c55,55,49,64-163,278L296,510h575c564,0,576,0,597,20c46,43,37,109-18,137c-19,10-159,13-590,13l-565,1l182,180
                    c101,99,187,188,193,199c16,30,12,57-12,84C631,1174,595,1183,561,1169z"/>
                  </g>
                  </svg>
                </div>
                <div class="slider--next">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                    <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                  </g>
                  </svg>
                </div>
              </div>
            </div>
          </li>

          <li class="l-section section">
            <div class="contact">
              <div class="contact--lockup" >
                <div class="modal" >
                  <div class="modal--information">
                    <h1 style="margin-top: -20px;">Contact Persons</h1>
                  </div>
                  <ul class="modal--options" style="font-family: Comic Sans MS;">
                    <li><a href="mailto:18ce082@charusat.edu.in">MEET PATEL</a></li>
                    <li><a href="mailto:18ce087@charusat.edu.in">SMIT PATEL</a></li>
                    <li><a href="mailto:18ce083@charusat.edu.in" style="background-color:#1769ff;">NIRMIT PATEL</a></li>
                    <li><a href="mailto:18ce071@charusat.edu.in" style="outline: 1px solid #ea4c89; margin-top: 25px; background-color: #ea4c89;">DEV PATEL</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>

          <li class="l-section section">
            <div class="hire">
              <h2></h2>
              <!-- checkout formspree.io for easy form setup -->
              <form class="work-request">
                <div class="work-request--options">
                  <span class="options-a">
                    <input id="opt-1" type="checkbox" value="app design">
                    <label for="opt-1">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      App Design
                    </label>
                    <input id="opt-2" type="checkbox" value="graphic design">
                    <label for="opt-2">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Graphic Design
                    </label>
                    <input id="opt-3" type="checkbox" value="motion design">
                    <label for="opt-3">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Motion Design
                    </label>
                  </span>
                  <span class="options-b">
                    <input id="opt-4" type="checkbox" value="ux design">
                    <label for="opt-4">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      UX Design
                    </label>
                    <input id="opt-5" type="checkbox" value="webdesign">
                    <label for="opt-5">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Webdesign
                    </label>
                  </span>
                </div>
                <div class="work-request--information">
                  <div class="information-name">
                    <input id="name" type="text" spellcheck="false" required>
                    <label for="name">Name</label>
                  </div>
                  <div class="information-email">
                    <input id="email" type="email" spellcheck="false" required>
                    <label for="email">Email</label>
                  </div>
                </div>

                <input type="submit" value="Send Request" style="background-image: radial-gradient( circle farthest-corner at 2.9% 7.7%,  rgba(164,14,176,1) 0%, rgba(254,101,101,1) 90% );">
              </form>
            </div>
          </li>


        </ul>
         </div>
    </div>
  </div>
  <ul class="outer-nav" style="font-family: Segoe Print; color: white">
    <li class="is-active">Home</li>
    <li>My Memories</li>
    <li>Help</li>
    <li>Contact Us</li>
    <li>Hire Us</li>
  </ul>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/jquery-2.2.4.min.js"><\/script>')</script>
<script src="assets/js/functions-min.js"></script>
</body>
</html>