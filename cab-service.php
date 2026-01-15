<!DOCTYPE html>

<html>

  <head>

    <title>Portfolio- Cab Service</title>

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

    <h2>Cab Service</h2>

  </header>

  <!-- About Section -->

  <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">
    <section>
        <h3>I. Vycab App</h3>
        <ul style="list-style-type: square;">
            <li><strong>Service Model:</strong> Chauffeur-Driven Cars (CDC) / Premium Ride-Hailing.</li>
            <li><strong>Key Differentiator:</strong> Combining the high qualification of chauffeurs and vehicles with competitive, accessible pricing.</li>
            <li><strong>Target Market:</strong> Individuals and professionals requiring reliable, quality transport, with a strong emphasis on seamless airport transfers across France.</li>
        </ul>
    </section>

    <hr>

    <section>
        <h3>II. Two-App Ecosystem</h3>
        <p>The platform uses two dedicated mobile applications to ensure an optimized experience for both the consumer and the service provider.</p>

        <div class="feature-block app-detail">
            <h3>1. 📱 VYCAB Rider App (Consumer Interface)</h3>
            <table>
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>Detail &amp; Functionality</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>On-Demand Booking</strong></td>
                        <td>Instant requests for immediate pickup with real-time tracking of the assigned chauffeur.</td>
                    </tr>
                    <tr>
                        <td><strong>Scheduled Booking</strong></td>
                        <td>Pre-booking rides days or weeks in advance, ideal for important appointments and airport transfers.</td>
                    </tr>
                    <tr>
                        <td><strong>Pricing Transparency</strong></td>
                        <td>Upfront fixed-price quotes before booking confirmation.</td>
                    </tr>
                    <tr>
                        <td><strong>Discount Coupons</strong></td>
                        <td>Seamless in-app application of promotional and loyalty discount coupons.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="feature-block app-detail">
            <h3>2. 📱 VYCAB Driver App (Chauffeur Interface)</h3>
            <table>
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>Detail &amp; Functionality</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Real-Time Job Dispatch</strong></td>
                        <td>System efficiently matches drivers to the closest and most relevant requests (on-demand and scheduled).</td>
                    </tr>
                    <tr>
                        <td><strong>Navigation &amp; Routing</strong></td>
                        <td>Integrated, turn-by-turn GPS navigation factoring in real-time traffic data.</td>
                    </tr>
                    <tr>
                        <td><strong>Earnings &amp; History</strong></td>
                        <td>Transparent tracking of daily/weekly earnings and performance metrics.</td>
                    </tr>
                    <tr>
                        <td><strong>Airport Coordination</strong></td>
                        <td>Dedicated tools for managing flight-specific pickups and dynamic scheduling adjustments.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <hr>

    <section>
        <h3>III. Financial Incentives: Discount Coupons for Riders</h3>
        <p>A flexible coupon system is used to drive acquisition, retention, and off-peak utilization.</p>
        <table>
            <thead>
                <tr>
                    <th>Coupon Type</th>
                    <th>Mechanism</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Welcome/First Ride</strong></td>
                    <td>Percentage or fixed amount off to incentivize new user sign-ups.</td>
                </tr>
                <tr>
                    <td><strong>Referral Codes</strong></td>
                    <td>Credit offered to both the referrer and the new rider.</td>
                </tr>
                <tr>
                    <td><strong>Promotional/Loyalty</strong></td>
                    <td>Seasonal discounts, event-specific codes, or rewards automatically generated for frequent riders.</td>
                </tr>
            </tbody>
        </table>
    </section>

    <hr>

    <section>
        <h3>IV. Specialized Service: Airport Rides Across Whole France</h3>
        <p>This premium service requires precise technological coordination to ensure a stress-free experience.</p>
        <div class="feature-block airport-detail">
            <ul style="list-style-type: circle;">
                <li><strong>Geographical Scope:</strong> Service available across all major airports in France (e.g., CDG, ORY, NCE, LYS).</li>
                <li><strong>Real-Time Flight Tracking:</strong> The VYCAB platform integrates with flight data APIs to monitor flight status (delays or early arrivals).</li>
                <li><strong>Dynamic Adjustment:</strong> The chauffeur's arrival time is automatically adjusted based on the flight's actual landing time (ATA) or delays, eliminating unnecessary waiting time for the client.</li>
                <li><strong>Automated Communication:</strong> Riders receive immediate app alerts when the flight lands and when the chauffeur is nearing the designated pickup zone.</li>
            </ul>
        </div>
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

        <img src="images/vycab/1.jpg" style="width:100%">

        <img src="images/vycab/2.jpg" style="width:100%">

        <img src="images/vycab/3.jpg" style="width:100%">

      </div>



      <div class="w3-half">

        <img src="images/vycab/4.jpg" style="width:100%">

        <img src="images/vycab/1.jpg" style="width:100%">

        <img src="images/vycab/2.jpg" style="width:100%">


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

