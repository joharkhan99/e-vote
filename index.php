<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>E-vote System | For better</title>

  <link href="https://fonts.googleapis.com/css?family=Heebo:400,700|IBM+Plex+Sans:600" rel="stylesheet">

  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body class="is-boxed has-animations">

  <div class="body-wrap boxed-container">
    <header class="site-header">
      <div class="container">
        <div class="site-header-inner">
          <div class="brand header-brand">
            <h1 class="m-0">
              <a href="#">
                <img class="header-logo-image asset-light" src="assets/img/logo3.png" alt="Logo">
                <img class="header-logo-image asset-dark" src="assets/img/logo3.png" alt="Logo">
              </a>
            </h1>
          </div>
        </div>
      </div>
    </header>

    <main>
      <section class="hero">
        <div class="container">
          <div class="hero-inner">
            <div class="hero-copy">
              <h1 class="hero-title mt-0">Vote For Better</h1>
              <p class="hero-paragraph">You have no right to speak against the Govt, If you don't vote. Someone
                struggled for your right to vote. Use it.</p>
              <div class="hero-cta">
                <button class="awesome" onclick="window.location.href='main/'">Click To Vote</button>
                <div class="lights-toggle">
                  <input id="lights-toggle" type="checkbox" name="lights-toggle" class="switch" checked="checked">
                  <label for="lights-toggle" class="text-xs"><span>Turn me <span class="label-text">dark</span></span></label>
                </div>
              </div>
            </div>
            <div class="hero-media">

              <div class="hero-media-container parentMover">
                <img class="hero-media-image asset-light childCard" src="assets/img/parties.PNG" alt="Hero media">
                <img class="hero-media-image asset-dark childCard" src="assets/img/parties.PNG" alt="Hero media">
              </div>

            </div>
          </div>
        </div>
      </section>

      <section class="features section">
        <div class="container">
          <div class="features-inner section-inner has-bottom-divider">

            <div class="features-header text-center">
              <div class="container-sm">
                <h2 class="section-title mt-0">Your Choice?</h2>
                <p class="section-paragraph">
                  Complain and regret for next five years or give your vote to deserving ones. Choice is your's.
                </p>
                <div class="features-image parentMover">
                  <img class="features-box asset-dark childCard" src="assets/img/partyflags.jpg" alt="Feature box">
                  <img class="features-box asset-light  childCard" src="assets/img/partyflags.jpg" alt="Feature box">
                </div>

              </div>
            </div>

          </div>
        </div>
      </section>

      <section class="cta section">
        <div class="container-sm">
          <div class="cta-inner section-inner">
            <div class="cta-header text-center">
              <h2 class="section-title mt-0">Don't wait, Vote</h2>
              <p class="section-paragraph">
                <span class="quote">"</span>
                The one sure way of participating in the process of nation-building is to vote on the election day.
                <span class="quote">"</span>
                <small style="font-size: 13px;"><i>Mohit Chauhan</i></small>
              </p>
              <div class="cta-cta">
                <button class="awesome" onclick="window.location.href='main/'">Click To Vote</button>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="site-footer has-top-divider">
      <div class="container">
        <div class="site-footer-inner">
          <div class="brand footer-brand">
            <a href="#">
              <img class="asset-light" style="width: 80px;" src="assets/img/logo.png" alt="Logo">
              <img class="asset-dark" style="width: 80px;" src="assets/img/logo.png" alt="Logo">
            </a>
          </div>

          <ul class="footer-social-links list-reset">
            <li>
              <a href="https://github.com/single-byte?tab=repositories" target="_blank">
                <span class="screen-reader-text">Github</span>
                <i class="fab fa-github"></i>
              </a>
            </li>
            <li>
              <a href="https://codepen.io/single-byte" target="_blank">
                <span class="screen-reader-text">Codepen</span>
                <i class="fab fa-codepen"></i>
              </a>
            </li>
            <li>
              <a href="mailto: joharkhan1999@gmail.com" title="joharkhan1999@gmail.com">
                <span class="screen-reader-text">Email</span>
                <i class="fas fa-at"></i>
              </a>
            </li>
            <li>
              <a href="https://disqus.com/by/disqus_u2LPwagtuK/" target="_blank" title="Disqus">
                <span class="screen-reader-text">Disqus</span>
                <i class="fab fa-discourse"></i>
              </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/johar-khan-6316881ba/" target="_blank">
                <span class="screen-reader-text">Linkedin</span>
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>


        </div>

      </div>
    </footer>
  </div>

  <script src="assets/js/app.js"></script>

  <script>
    showAlert('success', 'Better on desktop/large screens. I haven\'t made media queries for mobile devices.', 10);
  </script>
</body>

</html>