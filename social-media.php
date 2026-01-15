<!DOCTYPE html>

<html>

  <head>

    <title>Portfolio- Social Media</title>

    <link rel="icon" type="image/png" href="images/portfolio.png">

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>

    body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}

    .w3-row-padding img {margin-bottom: 12px;max-height: 650px;}

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

    <a href="https://charnpreetportfolio.site/" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Home</a>

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

    <h2>Social Media App</h2>

  </header>

  <!-- About Section -->

  <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">
    <section>
        <h3>I. Innovative Live & Broadcasting Features</h3>
        <p>The platform’s core strength lies in its real-time broadcasting capabilities, offering multiple ways for users to engage and become creators.</p>

        <ul class="feature-list">
            <li><strong>Live Streaming:</strong> Standard real-time video broadcasting for performers, influencers, and anyone looking to connect with a large audience.</li>
            <li><strong>Multi-User Live Streaming (Collaborative):</strong> A key feature allowing a broadcaster to invite other users to connect and join their live session, enabling joint streams, interviews, and collaborative content creation.</li>
            <li><strong>Audio Broadcasting / Radio Station:</strong> Users can tune in to audio broadcasts or set up their own radio station directly on Peegle, catering to music, talk shows, or podcast-style content.</li>
            <li><strong>Short Video Platform:</strong> Supports the creation and sharing of short video content, lifestyle clips, and vlogs, allowing users to showcase talents and build popularity (similar to Dubsmash/TikTok style apps).</li>
            <li><strong>Real-Time Interaction:</strong> Features like bullet messaging and instant chat allow viewers to communicate with broadcasters and each other in real-time.</li>
        </ul>
    </section>

    <section>
        <h3>II. Social Networking & Content Creation Tools</h3>
        <p>Beyond broadcasting, Peegle Live provides standard and enhanced social media features for general interaction and content editing.</p>

        <h3>Core Social Features</h3>
        <ul class="feature-list">
            <li><strong>User Profiles & Channels:</strong> Users can create unique channels, manage privacy settings, and showcase their accumulated video content.</li>
            <li><strong>News Feed:</strong> Constantly updated feed based on followers, showcasing trending content, latest posts, and local/global popular channels for maximum user engagement.</li>
            <li><strong>Private Messaging & VOIP:</strong> Features include standard instant chat, Secret Chats between users, and the ability to make VOIP calls via Peegle Chat.</li>
        </ul>

        <h3>Creator Toolkit</h3>
        <ul class="feature-list">
            <li><strong>Editing Tools:</strong> Built-in options to edit videos and images with various filters, stickers, and background music.</li>
            <li><strong>Dubbing/Audio Selection:</strong> Tools allowing users to select or upload audio tracks to create custom music-dubbed video selfie posts.</li>
            <li><strong>Speed Control:</strong> Users can set video speed preferences to create slow-motion or fast-motion effects.</li>
        </ul>
    </section>

    <section>
        <h3>III. Monetization & Wealth Generation for Creators</h3>
        <p>The platform is explicitly designed to allow users to monetize their popularity and content directly within the application.</p>

        <div class="monetization-block">
            <h3>Monetization Models (Peegle Pay)</h3>
            <ul class="feature-list">
                <li><strong>Virtual Gifts & Tokens:</strong> Viewers purchase digital currency (Tokens/Coins) via In-App Purchases and send them as virtual gifts to broadcasters during live streams. Broadcasters then convert these gifts into real income.</li>
                <li><strong>Subscription Packages:</strong> Users can set up their own subscription packages for followers to access exclusive or premium content, providing creators with a recurring income stream.</li>
                <li><strong>In-App Purchases (IAP):</strong> Used for purchasing tokens, upgrading to a premium version, or unlocking special features.</li>
                <li><strong>Advertising Revenue:</strong> Potential for in-stream ads to be run during broadcasts to generate revenue.</li>
                <li><strong>Popularity & Influence:</strong> The entire ecosystem is geared toward helping users gain followers and fans, translating popularity into tangible wealth.</li>
            </ul>
        </div>
    </section>
    
    <section>
        <h3>IV. Platform Strategy & Technology</h3>
        <ul class="feature-list">
            <li><strong>Technology Focus:</strong> Leverages the "latest technologies" to deliver high-quality, seamless, real-time live streaming and audio performance.</li>
            <li><strong>Accessibility:</strong> Available as a mobile app (iOS and Android).</li>
            <li><strong>News Integration:</strong> The platform is launching a dedicated News section, partnering with local news agencies and media bloggers to release news content directly within the social app.</li>
        </ul>
    </section>

  </div>

  <!-- Portfolio Section -->
  <?php if(1==1){ ?>
  <div class="w3-padding-32 w3-content" id="portfolio">

    <h2 class="w3-text-grey">Gallery</h2>

    <hr class="w3-opacity">



    <!-- Grid for photos -->

    <div class="w3-row-padding" style="margin:0 -16px">

      <div class="w3-half">

        <img src="images/peegle/1.jpg" style="width:100%">

        <img src="images/peegle/2.jpg" style="width:100%">

        <img src="images/peegle/3.jpg" style="width:100%">

      </div>



      <div class="w3-half">

        <img src="images/peegle/4.jpg" style="width:100%">

        <img src="images/peegle/1.jpg" style="width:100%">

        <img src="images/peegle/2.jpg" style="width:100%">


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

