<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Garage</title>
  <meta name="title" content="Autofix - Auto Maintenance & Repair Service">
  <meta name="description" content="This is a vehicle repair html template made by codewithsadee">


  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
    
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="img/favicon.ico">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;600;700&family=Mulish&display=swap"
    rel="stylesheet">

  <!-- 
    - material icon font
  -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,600,0,0" />

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./landingpage/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./landingpage/images/hero-banner.png">
  <link rel="preload" as="image" href="./landingpage/images/hero-bg.jpg">

  <style>
    #carouselExampleIndicators{
      width: 100%;
      height: 500px;
    }
    .loginBtnArrow:hover{
      background-color:dodgerblue;
    }
  </style>
</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header">
    <div class="container">

      <a href="#" class="logo">
        <img src="./landingpage/images/logo-light.png" width="128" height="63" alt="autofix home">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li>
            <button type="button" onclick="scrollToHome()" class="navbar-link">Home</button>
          </li>

          <li>
            <button type="button" onclick="scrollToFeature()" class="navbar-link">Feature</button>
          </li>

          <li>
            <button type="button" onclick="scrollToServices()" class="navbar-link">Services</button>
          </li>

          <li>
            <button type="button" onclick="scrollToContact()" class="navbar-link">Contact</button>
          </li>

        </ul>
      </nav>

      <a href="customer-login.php" class="btn loginBtnArrow btn-primary">
        <span class="span">Login In</span>
      </a>

      <a href="customer-signup.php" class="btn btn-primary">
        <span class="span">Sign Up Here!</span>

        <span class="material-symbols-rounded">arrow_forward</span>
      </a>

      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <span class="nav-toggle-icon icon-1"></span>
        <span class="nav-toggle-icon icon-2"></span>
        <span class="nav-toggle-icon icon-3"></span>
      </button>

    </div>
  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section id="tohome" class="hero has-bg-image auth-one-bg-position auth-one-bg" aria-label="home" style="background-image: url('./landingpage/images/hero-bg.jpg')">
        <div class="container">

          <div class="hero-content">

            <p class="section-subtitle :dark" style="color:blue; ">We have reliable staff & mechanics</p>

            <h3 class="h2 section-title" style="color: white; text-shadow: 2px 2px 2px #888;">Minivan Selling and Maintenance/Repair Services</h3>

            <button onclick="scrollToServices()" class="btn" style="margin-top: 30px">
              <span class="span">Our Services</span>

              <span class="material-symbols-rounded">arrow_forward</span>
            </button>

          </div>

          <figure class="hero-banner" style="--width: 950; --height: 600;">
            <img src="./landingpage/images/homecar.png" width="950" height="600" alt="red motor vehicle"
              class="move-anim">
          </figure>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section id="toservices" class="section service has-bg-image" aria-labelledby="service-label"
        style="background-image: url('./landingpage/images/service-bg.jpg')">
        <div class="container">

          <p class="section-subtitle :light" id="service-label">Our services</p>

          <h2 class="h2 section-title">We Provide Great Services For your Vehicle</h2>

          <ul class="service-list">

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="./landingpage/images/car sell.png" width="110" height="110" loading="lazy" alt="Engine Repair">
                </figure>

                <h3 class="h3 card-title">Minivan Sell</h3>

                <p class="card-text">
                Discover the perfect companion for your family's adventures with our exceptional range of minivans, offering spacious comfort, cutting-edge features, and unwavering reliability, ready to elevate every moment you spend together.
                </p>


              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="./landingpage/images/car repair.png" width="110" height="110" loading="lazy" alt="Brake Repair">
                </figure>

                <h3 class="h3 card-title">Vehicle Repair</h3>

                <p class="card-text">
                Revive your vehicle's performance and restore its glory with our expert car repair services, ensuring a smooth and worry-free journey on the road ahead.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <img src="./landingpage/images/car maintain.png" width="110" height="110" loading="lazy" alt="Tire Repair">
                </figure>

                <h3 class="h3 card-title">Vehicle Maintainance</h3>

                <p class="card-text">
                Ensure your family's safety and the longevity of your rides with our top-notch maintenance services, providing peace of mind as you create cherished memories on every journey.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

              </div>
            </li>

            <li class="service-banner">
              <img src="./landingpage/images/services-5.png" width="646" height="380" loading="lazy" alt="Example Car"
                class="move-anim">
            </li>

            <li>
              <div class="service-card">


              </div>
            </li>

          </ul>

          <a href="customer-signup.php" class="btn">
            <span class="span">Apply for Services</span>

            <span class="material-symbols-rounded">arrow_forward</span>
          </a>

        </div>
      </section>

      



      
      <br>
      <br>
      <br>
      <br>
      <br>
      <!-- 
        - #WORK
      -->

      <section id="tofeature" class="section work" aria-labelledby="work-label">
        <div class="container">

          <p class="section-subtitle :light" id="work-label">FEATURES</p>

          <h2 class="h2 section-title">WE SERVE</h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="work-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 406;">
                  <img src="img/model/MinivanModel.jpg" width="350" height="406" loading="lazy" alt="Engine Repair"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">MINIVAN</p>

                  <h3 class="h3 card-title">DIFFERENT MODELS / TYPE</h3>

                  <a href="customer-signup.php" class="card-btn">
                    <span class="material-symbols-rounded">arrow_forward</span>
                  </a>
                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="work-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 406;">
                  <img src="img/part/part2.jpg" width="350" height="406" loading="lazy" alt="Car Tyre change"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">SPARE PARTS AND ACCESSORIES</p>

                  <h3 class="h3 card-title">HIGH QUALITY PRODUCTS</h3>

                  <a href="customer-signup.php" class="card-btn">
                    <span class="material-symbols-rounded">arrow_forward</span>
                  </a>
                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="work-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 406;">
                  <img src="landingpage/images/work-3.jpg" width="350" height="406" loading="lazy" alt="Battery Adjust"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">AUTO REPAIR</p>

                  <h3 class="h3 card-title">REPAIR / MAINTAINANCE CARS</h3>

                  <a href="customer-signup.php" class="card-btn">
                    <span class="material-symbols-rounded">arrow_forward</span>
                  </a>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>




      <!-- 
        - #ABOUT
      -->

      <!-- <section class="section about has-before" aria-labelledby="about-label">
        <div class="container">

          <figure class="about-banner">
            <img src="./landingpage/images/about-banner.png" width="540" height="540" loading="lazy"
              alt="vehicle repire equipments" class="w-100">
          </figure>

          <div class="about-content">

            <p class="section-subtitle :dark">About Us</p>

            <h2 class="h2 section-title">We’re Commited to Meet the quality</h2>

            <p class="section-text">
              Quis autem vel eum iure reprehenderit qui in ea volu velit esse quam nihil molestiae consequatur, vel
              illum eui dolorem eum fugiat ruo.
            </p>

            <p class="section-text">
              Reprehenderit qui in ea volu velit esse quam nihil moe stiae consequatur, vel illum eui.
            </p>

            <ul class="about-list">

              <li class="about-item">
                <p>
                  <strong class="display-1 strong">8K+</strong> Happy Clients
                </p>
              </li>

              <li class="about-item">
                <p>
                  <strong class="display-1 strong">22+</strong> Instruments
                </p>
              </li>

              <li class="about-item">
                <p>
                  <strong class="display-1 strong">50+</strong> Years in market
                </p>
              </li>

              <li class="about-item">
                <p>
                  <strong class="display-1 strong">99%</strong> Projects completed
                </p>
              </li>

            </ul>

          </div>

        </div>
      </section> -->


    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer id="tocontact" class="footer">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./landingpage/images/logo-light.png" width="128" height="63" alt="autofix home">
          </a>

          <p class="footer-text">
            Rerum necessitatibus saepe eveniet aut et voluptates repudiandae sint et molestiae non recusandae.
          </p>

          <ul class="social-list">

            <li>
              <a href="https://www.facebook.com/profile.php?id=100076231397278" class="social-link">
                <img src="./landingpage/images/facebook.svg" alt="facebook">
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <img src="./landingpage/images/instagram.svg" alt="instagram">
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <img src="./landingpage/images/twitter.svg" alt="twitter">
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="h3">Opening Hour</p>
          </li>

          <li>
            <p class="p">Monday – Saturday</p>

            <span class="span">06.00 - 20.00</span>
          </li>

          <li>
            <p class="p">Sunday – Thursday</p>

            <span class="span">17.30 – 00.00</span>
          </li>

          <li>
            <p class="p">Friday – Saturday</p>

            <span class="span">12.00 – 14.45</span>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="h3">Contact Info</p>
          </li>

          <li>
            <a href="tel:+01234567890" class="footer-link">
              <span class="material-symbols-rounded">call</span>

              <span class="span">+01 2 3456 7890</span>
            </a>
          </li>

          <li>
            <a href="mailto:info@autofix.com" class="footer-link">
              <span class="material-symbols-rounded">mail</span>

              <span class="span">hideoutgarage@gmail.com</span>
            </a>
          </li>

          <li>
            <address class="footer-link address">
              <span class="material-symbols-rounded">location_on</span>

              <span class="span">Prk.5 Little Panay Panabo City, 8105, Philippines</span>
            </address>
          </li>

        </ul>

      </div>

      <img src="./landingpage/images/footer-shape-3.png" width="637" height="173" loading="lazy" alt="Shape"
        class="shape shape-3">

    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">Copyright 2023, All Rights Reserved.</p>

        <img src="./landingpage/images/footer-shape-2.png" width="778" height="335" loading="lazy" alt="Shape"
          class="shape shape-2">

        <img src="./landingpage/images/footer-shape-1.png" width="805" height="652" loading="lazy" alt="Red Car"
          class="shape shape-1 move-anim">

      </div>
    </div>

  </footer>





  <!-- 
    - custom js link
  -->
  <script src="./landingpage/js/script.js"></script>
  
  <script src="js/jquery-3.6.3.min.js"></script>
    <script type="text/javascript" src="js/acustomer.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script>
    
    $('#myCarousel').on('slid.bs.carousel', function (e) {
        $('#myCarousel').carousel('2') // Will slide to the slide 2 as soon as the transition to slide 1 is finished
        })

        $('#myCarousel').carousel('1') // Will start sliding to the slide 1 and returns to the caller
        $('#myCarousel').carousel('2') // !! Will be ignored, as the transition to the slide 1 is not finished !!
        

    
function scrollToHome() {
  var servicesSection = document.getElementById("tohome");

  servicesSection.scrollIntoView({ behavior: 'smooth' });
}

function scrollToServices() {
  var servicesSection = document.getElementById("toservices");

  servicesSection.scrollIntoView({ behavior: 'smooth' });
}

function scrollToFeature() {
  var tofeature = document.getElementById("tofeature");

  tofeature.scrollIntoView({ behavior: 'smooth' });
}

function scrollToContact() {
  var servicesSection = document.getElementById("tocontact");

  servicesSection.scrollIntoView({ behavior: 'smooth' });
}
  </script>

</body>

</html>