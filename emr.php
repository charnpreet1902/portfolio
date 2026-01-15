<!DOCTYPE html>

<html>

  <head>

    <title>Portfolio- EMR</title>

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

    <h2>Electronic Medical Record</h2>

  </header>

  <!-- About Section -->

  <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">
    <section>
        <h3>I. The Intelligent Diagnostic Workflow</h3>
        <p>The solution’s key feature is a structured, data-driven system for comprehensive patient intake and preliminary diagnosis.</p>

        <div class="diagnostic-tool">
            <h3>The 84-Question Diagnostic Tool</h3>
            <p>A proprietary, multi-faceted questionnaire designed to build a complete patient risk profile. Questions are dynamically weighted based on:</p>
            <ul style="list-style-type: square;">
                <li>Demographic Data: Age, Gender, and Ethnicity.</li>
                <li>Physiological Data: Blood Group, BMI, and vital signs.</li>
                <li>Risk Factors: Family Medical History (hereditary conditions).</li>
                <li>Lifestyle & History: Existing chronic conditions, allergies, past surgeries, smoking, diet, and exercise habits.</li>
            </ul>
            <p style="font-weight: bold;">Outcome:</p>
            <ul style="list-style-type: circle;">
                <li>Highlights potential risk factors and suggests relevant differential diagnoses to the practitioner.</li>
            </ul>
        </div>
    </section>

    <section>
        <h3>II. Core Practice Management Features</h3>
        <p>Features designed to streamline administrative and clinical operations.</p>

        <h3>Appointment Management</h3>
        <ul style="list-style-type: disc;">
            <li>Fixing and Scheduling: Robust, real-time calendar system for scheduling, rescheduling, and canceling appointments by staff or patients.</li>
            <li>Automated Reminders: System sends automated SMS or email reminders to patients to minimize no-shows.</li>
            <li>Customization: Ability to customize appointment slots based on consultation type (e.g., Initial Consult vs. Follow-up).</li>
        </ul>

        <h3>Electronic Health Records (EHR)</h3>
        <ul style="list-style-type: disc;">
            <li>Centralized, secure storage for all patient data, including SOAP notes, lab results, imaging reports, and prescriptions.</li>
        </ul>
    </section>

    <section>
        <h3>III. User Roles and Dedicated Backend Portals</h3>
        <p>The platform provides distinct, secure portals tailored to the specific functional needs of patients and medical professionals.</p>

        <div class="portal-detail patient-portal">
            <h3>Patient Backend (Portal)</h3>
            <table>
                <thead>
                    <tr>
                        <th>Function</th>
                        <th>User Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Update Detail</td>
                        <td>Securely update personal information, insurance details, and pre-fill the 84-question diagnostic form.</td>
                    </tr>
                    <tr>
                        <td>Appointment Management</td>
                        <td>View upcoming appointments, schedule new ones, and request cancellations.</td>
                    </tr>
                    <tr>
                        <td>View Records</td>
                        <td>Access shared lab results, summaries, and prescriptions.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="portal-detail doctor-portal">
            <h3>Doctor/Staff Backend</h3>
            <table>
                <thead>
                    <tr>
                        <th>Function</th>
                        <th>User Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Patient Management</td>
                        <td>Access, review, and update complete electronic health records (EHR).</td>
                    </tr>
                    <tr>
                        <td>Diagnostic Review</td>
                        <td>Review the completed 84-question profile and risk matrix before consultation.</td>
                    </tr>
                    <tr>
                        <td>E-Prescribing</td>
                        <td>Send prescriptions directly to networked pharmacies.</td>
                    </tr>
                    <tr>
                        <td>Billing &amp; Invoicing</td>
                        <td>Generate invoices, process payments, and manage insurance claims.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section>
        <h3>IV. Critical Requirements (Compliance &amp; Security)</h3>
        <ul style="list-style-type: disc;">
            <li>Regulatory Compliance: System must adhere strictly to health privacy laws (e.g., HIPAA, GDPR, or local equivalents).</li>
            <li>Data Security: Implementation of advanced encryption, access logging, and multi-factor authentication (MFA) to protect sensitive patient data.</li>
            <li>Scalability: Architectural design must support rapid growth in patient volume and staff users without performance degradation.</li>
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

        <img src="images/emr/f1.png" style="width:100%">

        <img src="images/emr/f2.png" style="width:100%">

        <img src="images/emr/f3.png" style="width:100%">

      </div>



      <div class="w3-half">

        <img src="images/emr/f4.png" style="width:100%">

        <img src="images/emr/f5.png" style="width:100%">

        <img src="images/emr/back.png" style="width:100%">


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

