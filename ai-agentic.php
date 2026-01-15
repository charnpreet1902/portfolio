<!DOCTYPE html>

<html>

  <head>

    <title>Portfolio- AI Agentic</title>

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

    <h2>AI Agentic</h2>

  </header>

  <!-- About Section -->

  <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">
    <section class="agent-architecture">
        <h3>I. AI Agent Architecture and Tooling</h3>
        <p>The platform relies on a collaborative system of two primary Agents, with external tools providing critical context and orchestration.</p>
        
        <div class="agent-table">
            <table>
                <thead>
                    <tr>
                        <th>Agent / Tool</th>
                        <th>Platform Used</th>
                        <th>Role &amp; Function</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Agent 1: The Research &amp; Data Agent</strong></td>
                        <td>OpenAI + Tavily Search</td>
                        <td><strong>Input Processor &amp; Fact Retriever.</strong> Reads user requests (sport, location, language). Uses <strong>Tavily Search</strong> for real-time, targeted web search to gather relevant, up-to-date facts, scores, and video links.</td>
                    </tr>
                    <tr>
                        <td><strong>Agent 2: The Content Generation Agent</strong></td>
                        <td>OpenAI (GPT-4/o-series)</td>
                        <td><strong>Output Formatter &amp; Translator.</strong> Takes structured data from Agent 1 and a predefined format (title, description, scores, etc.). It writes the news content and translates the final output into the user’s selected language.</td>
                    </tr>
                    <tr>
                        <td><strong>Orchestration Layer</strong></td>
                        <td>Wakala AI</td>
                        <td><strong>Manager &amp; Workflow Automation.</strong> Manages the flow between the two Agents, handles multilingual context, and integrates with the payment/token system APIs.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="feature-breakdown">
        <h3>II. Core Feature Breakdown</h3>

        <h3>1. 🌐 Dynamic Content Categorization</h3>
        <ul class="feature-list">
            <li><strong>Primary Categories:</strong> Football (Soccer), NBA, Cricket, Tennis, Badminton, etc.</li>
            <li><strong>Secondary Entities (Filtering Layer):</strong> Coach, Sportsman/Athlete, Sports Event, Tournament/League.</li>
        </ul>

        <h3>2. 🌍 Hyper-Localization &amp; Multilingual Support</h3>
        <ul class="feature-list">
            <li><strong>Multilingual UI &amp; Content:</strong> UI is instantly translated. Agent 2 delivers final news content directly in the user's chosen language.</li>
            <li><strong>Location Filtering:</strong> Users select Country/City, which is passed to Agent 1 for targeted news retrieval via Tavily Search.</li>
            <li><strong>"Near By" Functionality:</strong> Uses device geolocation to refine the search prompt, instructing the Research Agent to focus on local teams or events.</li>
        </ul>

        <h3>3. 💰 Monetization and Access Control</h3>
        <div class="monetization-model">
            <h4>Subscription Model:</h4>
            <ul class="feature-list">
                <li><strong>Tiered Access:</strong> Users subscribe for unlimited, automated news feeds within their chosen categories.</li>
                <li><strong>Category Selection:</strong> Subscriptions allow users to select a defined number of sports/teams for deep-dive news.</li>
            </ul>
            <h4>Token System (Pay-Per-Content):</h4>
            <ul class="feature-list">
                <li><strong>Purchase Tokens:</strong> Users buy packages of digital tokens.</li>
                <li><strong>Gated Content:</strong> Tokens are spent to access specific, premium, or on-demand content outside their subscription, such as AI-generated deep analysis or single article access.</li>
            </ul>
        </div>
    </section>

    <section class="workflow-example">
        <h3>III. AI Agent Workflow Example</h3>
        <p><strong>Scenario:</strong> User selects "NBA" and "Los Angeles" in Spanish.</p>

        <div class="example-flow">
            <ol>
                <li><strong>User Action:</strong> Sends request: <code>{"sport": "NBA", "location": "Los Angeles, USA", "language": "es"}</code>.</li>
                <li><strong>Wakala AI (Orchestration):</strong> Routes the request to Agent 1.</li>
                <li><strong>Agent 1 (Research &amp; Data Agent):</strong>
                    <ul>
                        <li><strong>Tool Call (Tavily Search):</strong> Queries for latest NBA news for Los Angeles teams (Lakers, Clippers) including scores.</li>
                        <li><strong>Output:</strong> Returns structured JSON facts (e.g., score: "120-118", summary_en: "LeBron hits game-winner...").</li>
                    </ul>
                </li>
                <li><strong>Agent 2 (Content Generation Agent):</strong>
                    <ul>
                        <li><strong>Input:</strong> Receives JSON facts and the target language (es).</li>
                        <li><strong>Output Generation:</strong> Writes the content:
                            <p><strong>Title (es):</strong> <em>¡LeBron da la victoria! Lakers vencen a Celtics en un final de infarto.</em></p>
                            <p><strong>Description (es):</strong> <em>Con un tiro ganador, la estrella de los Lakers aseguró el triunfo 120-118 contra su clásico rival.</em></p>
                        </li>
                    </ul>
                </li>
                <li><strong>Final Delivery:</strong> Wakala AI displays the formatted, localized, and real-time news on spoorts.io.</li>
            </ol>
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

        <img src="images/front1.jpg" style="width:100%">

        <img src="images/spoorts/post.jpg" style="width:100%">

        <img src="images/spoorts/front2.jpg" style="width:100%">

      </div>



      <div class="w3-half">

        <img src="images/spoorts/ai_journalist.jpg" style="width:100%">

        <img src="images/spoorts/ai1.jpg" style="width:100%">

        <img src="images/spoorts/ai2.jpg" style="width:100%">


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

