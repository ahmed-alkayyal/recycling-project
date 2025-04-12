<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="image/logo.png" />
    <!-- Google Font's -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline:opsz,wght@10..72,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- File Css -->
    <link rel="stylesheet" href="{{asset("front/style/main.css")}}" />
    <link rel="stylesheet" href="{{asset("front/style/all.min.css")}}" />
    <title>Green | Electronic</title>
  </head>
  <body>
    <!-- Option Box -->
    <div class="options">
      <div class="icon">
        <i class="fa-solid fa-gear"></i>
      </div>
      <div class="box-option">
        <h2>Main Color</h2>
        <ul class="color-box">
          <li data-color="#317b6a" class="active"></li>
          <li data-color="#03a9f4"></li>
          <li data-color="#1f1f1f"></li>
          <li data-color="#673ab7"></li>
          <li data-color="#f44336"></li>
        </ul>
      </div>
    </div>
    <!-- End Option Box -->
    <!-- Start App -->
    <div class="app">
        <nav class="navbar">
            <div class="container">
            <a href="index.html" class="logo">
                <img src="{{asset("front/image/logo.png")}}" decoding="async" alt="logo" />
                <h2>Elctronic || <span>Waste</span></h2>
            </a>
            <i class="fa-solid fa-list toggle"></i>
            <ul class="list">
                <li>
                <a href="#home" data-section=".home" class="active item-nav"
                    >Home</a
                >
                </li>
                <li>
                <a href="#about" class="item-nav" data-section=".about">About</a>
                </li>
                <li>
                <a href="#features" class="item-nav" data-section=".feature"
                    >Features</a
                >
                </li>

                <li>
                <a href="#services" data-section=".services" class="item-nav"
                    >Services</a
                >
                </li>
                <li>
                <a href="#contact" class="item-nav" data-section=".contact"
                    >Contact Us</a
                >
                </li>
                <li>
                    <a href="#" class="item-nav" data-section=".contact"
                    >login</a>
                </li>
            </ul>
            </div>
        </nav>
        <div class="landing home">
            <div class="overlay"></div>
            <div class="land">
            <img src="{{asset("front/image/landing2.png")}}" class="stylelanding" alt="" />
            <img src="{{asset("front/image/land3.png")}}" class="stylelanding1" alt="" />
            <img src="{{asset("front/image/land4.png")}}" class="stylelanding2" alt="" />
            </div>
            <div class="container">
            <div class="box">
                <h2><span>E-Waste</span>Recycling</h2>
                <img src="{{asset("front/image/landing.png")}}" decoding="async" alt="landing" />
            </div>
            </div>
        </div>
    </div>
    <!-- End App -->

    @yield('content')
    <!-- Start Footer -->
    <footer class="footer">
      <img src="image/Vector6.png" class="stylefooter" alt="" />
      <div class="container">
        <div class="top">
          <img src="{{asset("front/image/logo.png")}}" alt="" />
          <h2>Waste || Electronic</h2>
        </div>
        <div class="content">
          <div class="left">
            <h2>E-Waste Management For a Sustainable Future</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius
              doloremque sapiente sed eum, non modi. Fugiat laudantium odit
              adipisci fuga labore officia, quam reiciendis consequatur, ea
              facere tempora aliquid porro.
            </p>
          </div>
          <div class="right">
            <h2>Contact Us</h2>
            <div>
              <h2>
                <a
                  href="https://chat.whatsapp.com/I91R9DQPHZsAvVV4LTjBJW?fbclid=IwY2xjawI6_9VleHRuA2FlbQIxMAABHa-Pqy82w00Y2zly9DWLRZgtftoZDWU-9hqrJ2Nth6g569jACOSv5edZ0g_aem_UUA_NNITlqlEiksbGmi2-g"
                  target="_blank"
                >
                  <i class="fa-brands fa-whatsapp whatsapp"></i>
                </a>
              </h2>
              <h2>
                <a href="mailto:info@gmail.com" target="_blank">
                  <i class="fa-solid fa-envelope email"></i>
                </a>
              </h2>
            </div>
          </div>
          <ul class="links">
            <li>
              <a href="#home" data-section=".home" class="active item-nav"
                >Home</a
              >
            </li>
            <li>
              <a href="#about" class="item-nav" data-section=".about">About</a>
            </li>

            <li>
              <a href="#features" class="item-nav" data-section=".feature"
                >Features</a
              >
            </li>

            <li>
              <a href="#services" data-section=".services" class="item-nav"
                >Services</a
              >
            </li>
            <li>
              <a href="#contact" class="item-nav" data-section=".contact"
                >Contact Us</a
              >
            </li>
          </ul>
        </div>
      </div>
      <div class="container">
        <h2 class="copyright">Created By <span>Team Front End</span></h2>
      </div>
    </footer>
    <script src="{{asset("front/JS/main.js")}}"></script>
  </body>
</html>
