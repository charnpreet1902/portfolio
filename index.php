<!DOCTYPE html>

<html>


  
  <head>

    <title>Portfolio- Charnpreet singh</title>

    <link rel="icon" type="image/png" href="images/portfolio.png">

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>

    body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}

    .w3-row-padding img {margin-bottom: 12px}

    .bgimg {

      background-position: center;

      background-repeat: no-repeat;

      background-size: cover;

      background-image: url('images/charn.png');

      min-height: 100%;

    }
    .w3-text-grey, .w3-hover-text-grey:hover, .w3-text-gray, .w3-hover-text-gray:hover{
      color: #1e1e1e !important;
    }
    h2{
        font-size: 32px;
    }
    p{
      font-size: 18px;
    }

    .project-image{
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      min-height: 100%;
      height: 150px;
    }
    .project_div .text{
      display: block;
      padding-top: 15px;
    }

    .w3-hover-shadow a{
      text-decoration: none;
    }
    </style>

  </head>

<body>



<!-- Sidebar with image -->

<nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">

  <div class="bgimg"></div>

</nav>



<!-- Hidden Sidebar (reveals when clicked on menu icon)-->

<nav class="w3-sidebar w3-black w3-animate-right w3-xxlarge" style="display:none;padding-top:150px;right:0;z-index:2" id="mySidebar">

  <a href="javascript:void(0)" onclick="closeNav()" class="w3-button w3-black w3-xxxlarge w3-display-topright" style="padding:0 12px;">

    <i class="fa fa-remove"></i>

  </a>

  <div class="w3-bar-block w3-center">

    <a href="#" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Home</a>

    <a href="#portfolio" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Portfolio</a>

    <a href="#about" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">About</a>

    <a href="#contact" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Contact</a>

  </div>

</nav>



<!-- Page Content -->

<div class="w3-main w3-padding-large" style="margin-left:40%">



  <!-- Menu icon to open sidebar -->

  <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>



  <!-- Header -->

  <header class="w3-container w3-center" style="padding:23px 16px" id="home">

    <h1 class="w3-jumbo"><b>Charnpreet singh</b></h1>

    <h2>Fullstack Web Developer</h2>

    <img src="images/charn.png" class="w3-image w3-hide-large w3-hide-small w3-round" style="display:block;width:60%;margin:auto;">

    <img src="images/charn.png" class="w3-image w3-hide-large w3-hide-medium w3-round" width="1000" height="1333">

    <button class="w3-button w3-light-grey w3-padding-large w3-margin-top">

      <i class="fa fa-download"></i> <a href="resume.pdf" target="_blank">Download Resume</a>

    </button>

  </header>


  <!-- About Section -->

  <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">

    <h2>About</h2>
    <p>
        <p>
            I am a seasoned Web Developer with 9 years of hands-on experience in delivering end-to-end web solutions. My journey has given me a deep specialization in both backend architecture and cutting-edge frontend development.
        </p>
        
        <h4>Technical Core:</h4>
        <ul>
            <li><strong>PHP Frameworks:</strong> Expert-level command of Laravel, Yii, Yii2, and Codeigniter for building secure and efficient server-side applications.</li>
            <li><strong>E-commerce:</strong> Proven success with the Magento platform.</li>
            <li><strong>Modern JavaScript:</strong> Proficient in React JS for dynamic, component-based user interfaces and Node JS for high-performance server-side applications.</li>
        </ul>

        <h4>Client & Communication:</h4>
        <p>
            My value extends beyond technical expertise. I pride myself on <strong>strong communication skills</strong> and a consultative approach to client handling. I am skilled at actively listening to requirements, providing transparent progress updates, and managing client expectations to ensure smooth project delivery and lasting relationships.
        </p>

    </p>

    <h3 class="w3-padding-16">My Skills</h3>

    <p class="w3-wide">Php Frameworks</p>

    <div class="w3-light-grey">

      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:95%">95%</div>

    </div>

    <p class="w3-wide">JS Libraries</p>

    <div class="w3-light-grey">

      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:85%">85%</div>

    </div>

    <p class="w3-wide">Web Design</p>

    <div class="w3-light-grey">

      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:85%">70%</div>

    </div>
    <br>



    <div class="w3-row w3-center w3-dark-grey w3-padding-16 w3-section">

      <div class="w3-quarter w3-section">

        <span class="w3-xlarge">8+</span><br>

        Partners

      </div>

      <div class="w3-quarter w3-section">

        <span class="w3-xlarge">30+</span><br>

        Projects Done

      </div>

      <div class="w3-quarter w3-section">

        <span class="w3-xlarge">10+</span><br>

        Happy Clients

      </div>

      <div class="w3-quarter w3-section">

        <span class="w3-xlarge">50+</span><br>

        Meetings

      </div>

    </div>



    <button class="w3-button w3-light-grey w3-padding-large w3-section">

      <i class="fa fa-download"></i> <a href="resume.pdf" target="_blank">Download Resume</a>

    </button>


    <!-- Grid for pricing tables -->

    <h3 class="w3-padding-16">My Projects</h3>

    <div class="w3-row-padding project_div" style="margin:0 -16px">

      <div class="w3-half w3-margin-bottom">

        <ul class="w3-ul w3-card w3-hover-shadow">

          <li class="project-image" style="background-image: url(images/front1.jpg);"></li>

          <li class="w3-padding-16">
            <span class="w3-large w3-text-black w3-margin-right"><strong>AI Agentic Development</strong></span>
            <span class="text">SPOORTS is a social platform that connects clubs, players, athletes, and fans while promoting sports values.</span>
            <span class="text">Providing SPORTS news with multiple languages from all over the world.</span>
          </li>

          <li class="w3-light-grey w3-padding-24">

            <button class="w3-button w3-white w3-padding-large w3-hover-black"><a href="https://charnpreetportfolio.site/ai-agentic">See Details</a></button>

          </li>

        </ul>

      </div>



      <div class="w3-half">

        <ul class="w3-ul w3-card w3-hover-shadow">

          <li class="project-image" style="background-image: url(images/vycab.jpg);"></li>

          <li class="w3-padding-16">
            <span class="w3-large w3-text-black w3-margin-right"><strong>Cab Service App, France</strong></span>
            <span class="text">VYCAB, a modern and highly qualified company in the operation of a Chauffeur-Driven Cars, offers on-demand transport solutions that are easily accessible at attractive prices. </span>
            <span class="text">Well coordinating Rider and Driver Apps.</span>
          </li>

          <li class="w3-light-grey w3-padding-24">

            <button class="w3-button w3-white w3-padding-large w3-hover-black"><a href="https://charnpreetportfolio.site/cab-service">See Details</a></button>

          </li>

        </ul>

      </div>

    <!-- End Grid/Pricing tables -->

    </div>

    <div class="w3-row-padding project_div" style="margin:0 -16px">

      <div class="w3-half w3-margin-bottom">

        <ul class="w3-ul w3-card w3-hover-shadow">

          <li class="project-image" style="background-image: url(images/peeglelive.jpg);"></li>

          <li class="w3-padding-16">
            <span class="w3-large w3-text-black w3-margin-right"><strong>Social Media App Development</strong></span>
            <span class="text">Peegle Live is the evolution of social media with many innovative features. Using the latest technologies such as Live streaming, Multi-User Live streaming, Audio broadcasting, Video platform and many more</span>
            <span class="text">It has features that allow you to monetise while interacting with users.</span>
          </li>

          <li class="w3-light-grey w3-padding-24">

            <button class="w3-button w3-white w3-padding-large w3-hover-black"><a href="https://charnpreetportfolio.site/social-media">See Details</a></button>

          </li>

        </ul>

      </div>



      <div class="w3-half">

        <ul class="w3-ul w3-card w3-hover-shadow">

          <li class="project-image" style="background-image: url(images/emr.png);"></li>

          <li class="w3-padding-16">
            <span class="w3-large w3-text-black w3-margin-right"><strong>Electronic Medical Record</strong></span>
            <span class="text">Health records and medical practice management solution including 84 questions to diagnose the patient according to his gender, blood group, ethnicity, family medical history etc.</span>
            <span class="text">Fixing and scheduling appointment. Patient and doctor backend where he can update his detail.</span>
          </li> 

          <li class="w3-light-grey w3-padding-24">

            <button class="w3-button w3-white w3-padding-large w3-hover-black"><a href="https://charnpreetportfolio.site/emr">See Details</a></button>

          </li>

        </ul>

      </div>

    <!-- End Grid/Pricing tables -->
    
    </div>

    <!-- Testimonials -->
   
    <h3 class="w3-padding-24">My Reputation</h3>
    <img src="images/roger.jpeg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">

    <p><span class="w3-large w3-text-black w3-margin-right">Roger Essoh.</span> CEO of spoorts.io and CTO at Accenture.</p>

    <p>3 years+ long business relationship. Successfully working on AI agentic for sports project.</p><br>

    

    <img src="images/abdelali.jpeg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">

    <p><span class="w3-large w3-text-black w3-margin-right">Abdelali Yamini.</span> CEO at Yvcab, France.</p>

    <p>"Exceptional skills in Laravel and React JS. The project was delivered on time and exceeded all performance expectations. Highly recommended!"</p><br>

    


  <!-- End About Section -->

  </div>


    <!-- Portfolio Section -->
  <?php if(1==1){ ?>
  <div class="w3-padding-32 w3-content" id="portfolio">

    <h2 class="w3-text-grey">My Portfolio</h2>

    <hr class="w3-opacity">



    <!-- Grid for photos -->

    <div class="w3-row-padding" style="margin:0 -16px">

      <div class="w3-half">

        <img src="images/work/1.jpg" style="width:100%">

        <img src="images/work/2.jpg" style="width:100%">

        <img src="images/work/3.jpg" style="width:100%">

      </div>



      <div class="w3-half">

        <img src="images/work/4.jpg" style="width:100%">

        <img src="images/work/5.jpg" style="width:100%">

        <img src="images/work/6.jpg" style="width:100%">

        <!-- <img src="images/work/7.jpg" style="width:100%"> -->

      </div>

    <!-- End photo grid -->

    </div>

  <!-- End Portfolio Section -->

  </div>
  <?php } ?>

  <?php
    include('footer.php');
  ?>

<!-- END PAGE CONTENT -->

</div>



<script>

// Open and close sidebar

function openNav() {

  document.getElementById("mySidebar").style.width = "60%";

  document.getElementById("mySidebar").style.display = "block";

}



function closeNav() {

  document.getElementById("mySidebar").style.display = "none";

}

</script>



</body>

</html>

