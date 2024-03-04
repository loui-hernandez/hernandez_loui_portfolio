<!DOCTYPE html>
<html lang="en">

<?php
require_once('includes/connect.php');
$stmt = $connection->prepare('SELECT * FROM projects ORDER BY title ASC');
$stmt->execute();
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

<body data-page="projects" class="bkg-container">

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
          <li><a href="index.php#about-me">About Me</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="contact.php">Contact Me</a></li>
        </ul>
      </nav>
    </section>
  </header>
  <main>

    <section class="grid-con portfolio animate-projects" id="portfolio">
      <div class="col-span-full m-col-start-1 m-col-end-13">
        <article>
          <h1>My Portfolio</h1>
          <p>Here are some of my projects that I've worked on.</p>
        </article>

        <?php

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

          echo '<ul class="projects-temp">
          <li class="project">
            <a href="project_detail.php?id=' . $row['id'] . '">
              <img class="thumbnail" src="images/' . $row['image_url'] . '" alt="Project Thumbnail"></a>
                <h3>' . $row['title'] . '</h3>
                  <p>' . $row['description'] . '</p>  
                      
          <div class="project-link">
          <a href="project_detail.php?id" class="bttn" target="_blank">
          <div class="ball"></div>
          <span>Learn More!</span>
          <i class="fa solid fa-arrow-right">
          </i></a></div></li></ul>';

        }

        $stmt = null;

        ?>
      </div>
    </section><br><br>



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