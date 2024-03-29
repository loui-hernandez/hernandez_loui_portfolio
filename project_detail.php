<!DOCTYPE html>
<html lang="en">

<?php
require_once('includes/connect.php');
$query = 'SELECT GROUP_CONCAT(image_filename) AS images, description, title FROM projects, media WHERE projects.id = media.id AND projects.id = :projectId GROUP BY projects.id';
$stmt = $connection->prepare($query);
$projectId = $_GET['id'];
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$images = explode(",", $row['images']);
$stmt = null;
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/grid.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <title>Loui Hernandez Portfolio</title>
  <script defer src="https://unpkg.com/split-type"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/EasePack.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js"></script>
  <script type="module" src="js/main.js"></script>
</head>

<body data-page="project_detail" class="bkg-container">

  <!-- navigation -->
  <header>
    <section class="main-nav">
      <img src="images/loui-logo-white.svg" alt="Loui Logo" class="logo-nav">
      <input type="checkbox" id="burgerNav" class="burgerNav">
      <label for="burgerNav" class="burgerNavLabel">
        <span></span>
      </label>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">About Me</a></li>
          <li><a href="project_detail.php">Projects</a></li>
          <li><a href="contact.php">Contact Me</a></li>
        </ul>
      </nav>
    </section>
  </header>
  <main>

    <section class="grid-con">
      <h2 class="hidden">Projects</h2>
      <div class=" col-span-full" id="projectsDetails">
        <h1>PROJECT NAME:</h1>
        <h2>Ceci Cosmetics</h2>

        <p>Details:</p>
        <div id="detailsIcon">
          <img src="images/adobe-photoshop.svg" alt="Photoshop Icon">
          <img src="images/adobe-illustrator.svg" alt="Illustrator Icon">
          <img src="images/adobe-after-effects.svg" alt="After Effects Icon">
          <img src="images/html-5.svg" alt="html 5 icon">
          <img src="images/css.svg" alt="css icon">
          <img src="images/js-icon.svg" alt="Java Script Icon">
        </div>
        <h4>Objective</h4>
        <p>Ceci Cosmetics is a new business in the beauty products industry, approached me to create a logo that
          reflected their innovative and modern brand identity.</p>

        <h4>Solution</h4>
        <p>After conducting a thorough brand analysis and getting input from the client, I created a logo design that
          combined a clean, minimalist font with a graphic element that represented the company's focus on technology
          and innovation. The color scheme was selected to reflect the brand's values of trust, professionalism, and
          creativity.</p>

        <h4>Result</h4>
        <p>The final logo design was well received by the client and successfully communicated the brand's identity to
          their target audience. The logo was used on the company's website, social media profiles, and marketing
          materials, helping to establish a strong visual presence in the industry.</p>
        <img src="images/ceci branding/ceci-Brand Values.webp" alt="">
      </div>

      <div class="col-span-full" id="">
        <!-- <div id="ceci-logo">
          <img src="images/ceci branding/ceci-logo.svg" alt="Ceci Cosmetics Logo">
        </div>
        <div class="img-con-proj">
          <img src="images/ceci branding/ceci-Logo Clear Space.webp" alt="">
          <br>
          <br>
          <img src="images/ceci branding/ceci-Main Logo.webp" alt="">
          <br>
        </div>
      </div>
      <div class="col-span-full">
        <img src="images/ceci branding/ceci-Product 01.webp" alt="">
      </div> -->
    </section>

    <br>
    <div class="grid-con">
      <section class="col-span-full" id="player-container">
        <video controls poster="images/placeholder-ceci.jpg">
          <source src="videos/video-ceci.mp4" type="video/mp4">
          <source src="videos/video-ceci.mp4" type="video/webm">
          <p>You're using a very old browser, that doesn;t support video playback.</p>
        </video>
        <div class="video-controls hidden" id="video-controls">
          <button id="play-button">
            <i class="fa fa-play-circle-o"></i>
          </button>
          <button id="pause-button">
            <i class="fa fa-pause-circle-o"></i>
          </button>
          <button id="stop-button">
            <i class="fa fa-stop-circle-o"></i>
          </button>
          <i class="fa fa-volume-up"></i>
          <input type="range" id="change-vol" step="0.05" min="0" max="1" value="1">
          <button id="full-screen">
            <i class="fa fa-arrows-alt"></i>
          </button>
        </div>
      </section>

    </div>
    <br>
    <div class="grid-con">
      <div class="col-span-full">
        <img src="images/ceci branding/ceci-magazine.webp" alt="">
        <img src="images/ceci branding/ceci-product 02.webp" alt="">
      </div>
    </div>

    <?php
    for ($i = 0; $i < count($images); $i++) {
      echo '<img class="portfolio-image" src="images/' . $images[$i] . '" alt="Project Image">';
    }
    ?>

    <footer>
      <section class="col-span-full footer-main-nav">
        <div class="soc-med-footer">
          <a href="https://www.linkedin.com/in/leh-0819"><img src="images/linkedin.svg" alt="LinkedIn Icon"
              class="soc-med-icon"></a>
          <a href="https://github.com/loui-hernandez"><img src="images/github.svg" alt="Github Icon"
              class="soc-med-icon"></a>
          <a href="https://www.behance.net/LOUIERICKH5b94"><img src="images/behance.svg" alt="Behance Icon"
              class="soc-med-icon"></a>
        </div>
        <nav class="footer_nav">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#about-me">About Me</a></li>
            <li><a href="project_detail.php">Projects</a></li>
            <li><a href="contact.php">Contact Me</a></li>
          </ul>
        </nav>
      </section>
    </footer>
    <div class="copyright">
      <p>© 2023 Designed and Created by Loui Hernandez. All Rights Reserved.</p>
    </div>

  </main>
</body>

</html>