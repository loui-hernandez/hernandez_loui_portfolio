<!DOCTYPE html>
<html lang="en">

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

<body data-page="contact" class="bkg-container">

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
          <li><a href="#about-me">About Me</a></li>
          <li><a href="project_detail.php">Projects</a></li>
          <li><a href="contact.php">Contact Me</a></li>
        </ul>
      </nav>
    </section>
  </header>

  <main>
    <section class="grid-con">
      <h2 class="hidden">Contact Form</h2>

      <div class=" col-span-full m-col-start-1 m-col-end-7 l-col-start-1 l-col-end-7 xl-col-start-1 xl-col-end-7"
        id="contact-header">
        <h2>I would<i class="fa brands fa-heart"></i> to hear from you!</h2>
        <p>Thanks for checking out my portfolio!</p>
        <p>If you're interested in working together or just want to say hi, fill out the form below and let's get in
          touch.</p>
        <p> Just a heads up though, I'm a hugger, but since we're living in the age of social distancing, let's keep a
          safe distance for now.</p>
        <p>But don't worry, we can still create some amazing designs together, even if it's from a distance. Can't wait
          to hear from you!</p>
      </div>

      <div class=" col-span-full m-col-start-7 m-col-end-13 l-col-start-7 l-col-end-13 xl-col-start-7 xl-col-end-13"
        id="contact-form">
        <section>
          <h2 class="hidden">Contact Form</h2>
          <form action="#">

            <div class="input-box">
              <div class="input-field field">
                <input type="text" placeholder="Full Name" id="name" class="item">
              </div>
              <div class="input-field field">
                <input type="text" placeholder="Email Address" id="email" class="item">
              </div>
            </div>
            <div class="input-box">
              <div class="input-field field">
                <input type="text" placeholder="Mobile Number" id="phone" class="item">
              </div>
              <div class="input-field field">
                <input type="text" placeholder="Subject" id="subject" class="item">
              </div>
            </div>

            <div class="textarea-field field">
              <textarea name="" id="message" cols="30" rows="10" class="item" placeholder="Your Message"></textarea>
            </div>

            <div class="project-link">
              <a href="#" class="bttn" target="_blank">
                <div class="ball"></div>
                <span>Boop Me!</span>
                <i class="fa solid fa-arrow-right"></i>
              </a>
            </div>
          </form>


        </section>
      </div>

    </section>

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
            <li><a href="#about-me">About Me</a></li>
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