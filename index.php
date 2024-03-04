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

<body data-page="home" class="bkg-container">

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
    <!-- profile intro section -->
    <section class="grid-con" id="profile">
      <div class="col-span-full m-col-start-1 m-col-end-7 l-col-start-1 l-col-end-7">
        <iframe class="my_name" src="https://my.spline.design/untitled-c52e9a46574a6075a08d4759287eab29/"
          frameborder="0" width="100%" height="100%"></iframe>
      </div>
      <div class="col-span-full m-col-start-7 m-col-end-13 l-col-start-7 l-col-end-13" id="my-desc">
        <h1 id="headline">I'm a Designer?</h1>
        <h2>A lil bit of Motion Design</h2>
        <h2>Touch of Web Development</h2>
        <p>Hey there! Thanks for checking out my Portfolio Page!</p>
        <p>If you're here, it's probably because you want to know a little more about me than what's on my resume.</p>
        <div>
          <a href="#" class="bttn" target="_blank">
            <div class="ball"></div>
            <span>About Me</span>
            <i class="fa solid fa-arrow-right"></i>
          </a>
        </div>
        <br><br>
        <div>
          <h3>Click Here for my CV</h3>
          <p>This is for the HR department</p>
          <a href="#" class="bttn" target="_blank">
            <div class="ball"></div>
            <span>Download CV</span>
            <i class="fa solid fa-arrow-right"></i>
          </a>
        </div>
        <div id="soc-med">
          <a href="https://www.linkedin.com/in/leh-0819"><img src="images/linkedin.svg" alt="LinkedIn Icon"
              class="soc-med-icon"></a>
          <a href="https://github.com/loui-hernandez"><img src="images/github.svg" alt="Github Icon"
              class="soc-med-icon"></a>
          <a href="https://www.behance.net/LOUIERICKH5b94"><img src="images/behance.svg" alt="Behance Icon"
              class="soc-med-icon"></a>
        </div>
      </div>
    </section>



    <!-- about me section -->
    <section>
      <div class="grid-con">
        <div class="col-span-full m-col-start-2 m-col-end-9 l-col-start-1 l-col-end-9" id="about-me">
          <div>
            <h1 class="text-matrix">Get to know me better!</h1>
            <p class="text-matrix">So, let me tell you something interesting...</p>

            <p class="text-matrix">I have a secret talent for making funny faces. In fact, I've been known to entertain
              my coworkers with my ridiculous facial expressions during long meetings. But don't worry, I promise to
              keep it professional during our collaboration.</p>
            <p class="text-matrix">Aside from my silly side, I take my work seriously and I'm passionate about creating
              designs that are not only aesthetically pleasing but also effective in delivering the message. With over a
              decade of experience in graphic design, I've had the opportunity to work on various projects, from print
              media to events and production.</p>
            <p class="text-matrix">So, if you're looking for a Graphic Designer who can deliver high-quality designs,
              meet tight deadlines, and make you laugh, then look no further! </p>
            <p class="text-matrix">Let's work together and create something amazing!</p>
            <div class="text-matrix">
              <a href="contact.php" class="bttn" target="_blank">
                <div class="ball"></div>
                <span>Contact Me</span>
                <i class="fa solid fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-span-full m-col-start-9 m-col-end-13 l-col-start-9 l-col-end-13" id="loui-portrait">
          <div class="image_con">
            <img src="images/portrait-leh-blk.png" alt="Loui Hernandez Portrait">
          </div>
        </div>
      </div>
    </section>

    <!-- video reel section -->
    <div class="grid-con">
      <section class="col-span-full" id="player-container">
        <video controls poster="images/placeholder.jpg">
          <source src="videos/video.mp4" type="video/mp4">
          <source src="videos/video.mp4" type="video/webm">
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

    <!-- portfolio section -->


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
  <a href="project_detail.php?id=' .
            $row['id'] . '">
  <img class="thumbnail" src="images/' .
            $row['image_url'] . '" alt="Project Thumbnail"></a>
  <h3>' .
            $row['title'] . '</h3>
  <p>' .
            $row['description'] . '</p>      
        <div class="project-link">
        <a href="project_detail.php?id" class="bttn" target="_blank">
          <div class="ball"></div>
          <span>Learn More!</span>
          <i class="fa solid fa-arrow-right"></i>
        </a>
      </div></li></ul>';

        }

        $stmt = null;

        ?>

        <!-- <ul class="projects-temp">
        <li class="project">
          <img src="images/ceci branding/ceci-cover.webp" alt="project Ceci">
          <h3>Ceci Cosmetics</h3>
          <p>
            Born from creativity and sophistication, CeCi Cosmetics is a celebration of elegance and joy. The animated logo dances, inviting discovery. The skincare collection tells a story of care and empowerment. In each detail, CeCi paints a picture of timeless beauty and confidence. Explore our website and discover the essence of CeCi Cosmetics.
          </p>
      <div class="project-link">
        <a href="#" class="bttn" target="_blank">
          <div class="ball"></div>
          <span>Learn More!</span>
          <i class="fa solid fa-arrow-right"></i>
        </a>
      </div>
        </li>
        <li class="project">
          <img src="images/branding-beans-pro.webp" alt="Project Beans Pro">
          <h3>Beans Pro Earbuds</h3>
          <p>
            Discover the essence of Beans Pro Earbuds – a harmonious blend of innovation and design. Our brand identity, from the sleek logo to the vibrant color palette, embodies cutting-edge technology. The website, a digital symphony of user-centric design, provides an immersive experience, showcasing the product seamlessly. Collaboration with the Beans Pro team ensured every step resonated with their vision. Explore our website and dive into a world where style meets superior sound. Beans Pro – Elevate your audio experience.
          </p>
          <div class="project-link">
            <a href="#" class="bttn" target="_blank">
              <div class="ball"></div>
              <span>Learn More!</span>
              <i class="fa solid fa-arrow-right"></i>
            </a>
          </div>
        </li>
        <li class="project">
          <img src="images/branding-billy-bear.webp" alt="project three">
          <h3>Billy Beer Rebrand</h3>
          <p>Crafting Billy Beer and its website was a journey inspired by a passion for exceptional brewing. From selecting the finest ingredients to designing a website that reflects our commitment to quality, our goal is to offer a unique and memorable experience. Explore the story behind every bottle and navigate our user-friendly site to discover the essence of Billy Beer.
          </p>
      <div class="project-link">
        <a href="#" class="bttn" target="_blank">
          <div class="ball"></div>
          <span>Learn More!</span>
          <i class="fa solid fa-arrow-right"></i>
        </a>
      </div>
        </li>
        <li class="project">
          <img src="images/branding-comfort-room.webp" alt="Project Comfort Room">
          <h3>Comfort Room Branding</h3>
          <p>
              Comfort Room Branding emerged from a vision to simplify and enhance room climate control through a smart app. The project focused on developing an intuitive interface for users to easily manage room temperature and fan functions. By leveraging cutting-edge technology and emphasizing energy efficiency, the app provides a seamless and connected experience, allowing users to personalize their comfort while promoting sustainability.
          </p>
      <div class="project-link">
        <a href="#" class="bttn" target="_blank">
          <div class="ball"></div>
          <span>Learn More!</span>
          <i class="fa solid fa-arrow-right"></i>
        </a>
      </div>
        </li>
        <li class="project">
          <img src="images/branding-burton-live-evetns.webp" alt="project Burton Live Events">
          <h3>Burton Live Events</h3>
          <p>
            Burton Live Events' branding was crafted to embody the spirit of dynamic and unforgettable live experiences. The process involved selecting vibrant colors, bold typography, and a versatile logo to capture the energy of events. Consistency across digital and print materials ensures a cohesive and memorable brand presence. 
          </p>
      <div class="project-link">
        <a href="#" class="bttn" target="_blank">
          <div class="ball"></div>
          <span>Learn More!</span>
          <i class="fa solid fa-arrow-right"></i>
        </a>
      </div>
        </li>
        <li class="project">
          <img src="images/branding-strong-media.webp" alt="project Strong Media Corp">
          <h3>Strong Media Corp</h3>
          <p>
            Strong Media Corp's branding exudes strength and innovation. The design process focused on a robust color palette and dynamic visuals, complemented by impactful typography. The logo symbolizes strength, and consistency across digital and print materials ensures a unified and memorable brand presence.
          </p>
      <div class="project-link">
        <a href="#" class="bttn" target="_blank">
          <div class="ball"></div>
          <span>Learn More!</span>
          <i class="fa solid fa-arrow-right"></i>
        </a>
      </div>
        </li>
      </ul> -->
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