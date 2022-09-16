<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />

    <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="../css_files/serviceProvider.css">

    <title>Service Provider Information</title>
  </head>
  <body>

  <header id="header" role="banner">
        <div class="header_middle_section">
          <div class="search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" class="search_area" placeholder=" Search Services"/>
            <button class="search_button">Search</button>
          </div>
        </div>
        <div class="header_right_section">
        <!-- <i class="fa-light fa-xmark"></i>  -->
          <ul>
            <li><button class="drop-down-categories-btn"><i class="fa-solid fa-square-caret-down">
            </i> All Categories</button>
              <div class="all-categories">
                <a href="./php_scripts/categories.php">Utility</a>
                <a href="./php_scripts/categories.php">Electronic Device</a>
                <a href="./php_scripts/categories.php">Mechanic</a>
              </div>
            </li>
            <li><a href="#"><i class="fa-solid fa-map"></i> Map</a></li>
            <li><a href="./php_scripts/inquiry.php"><i class="fa-solid fa-circle-info"></i> My Services </a></li>
            <li><a href="monitor.html"> Erwin Andrade </a></li> <img src="4.png">
          </ul>
      </div>

      </header>

    <section class="basic-info">
      <div class="basic-info-top">
        <img src="5.jpg" alt="" />
        <div class="service-provider-btn">
          <button>Hire</button>
          <button>Message</button>
        </div>
      </div>
      <div class="basic-info-bot">
        <ul>
          <li>
            <p class="info">Name:</p>
            <label for="info">Erwin Jardeleza</label>
          </li>
          <li>
            <p class="info">Address:</p>
            <label for="info"> Caigangan, Buenavista, Marinduque </label>
          </li>
          <li>
            <p class="info"> Mobile Number:</p>
            <label for="info">
              <label for="info">09466732135</label>
          </li>
          <li>
            <p class="info">Email Address:</p>
            <label for="info"><label for="info">erwinjradeleza@gmail.com</label>
          </li>
          <li>
            <p class="info">Service Offered:</p>
            <label for="info"><label for="info">Heart Broken Repair</label>
          </li>
          <li>
            <p class="info">Description:</p>
            <label for="info"><label for="info"><div class="description-info">Taga ayos ng nasirang pussy</div></label>
          </li>
        </ul>
      </div>
    </section>

    <hr>

    <section class="rating-and-reviews-page">
      <h1>Rating and Reviews</h1>
      <div class="rating-and-reviews">
        <div class="rating-and-reviews-info">
          <img src="6.jpg">
          <div class="name-and-date">
            <h3>Euduchael Andrade</h3>
            <p>June 13, 2022</p>
          </div>
        </div>
        <div class="rating-and-comments">
          <h3>Rate: 
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i></h3>
          <div class="comments">
            <p>Wala naman problema sa performance sa size lang medyo maliit</p> 
          </div>
        </div>
        <div class="rating-and-reviews-gallery">
          <div class="gallery"><img src="reee.png"></div>
        </div>
      </div>
    </section>

    <script>
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > -80 || document.documentElement.scrollTop > -80) {
          document.getElementById("header").style.padding = "10px 0";
          document.getElementById("header").style.backgroundColor = "#009688";
          // document.getElementById("logo").style.fontSize = "25px";
        } else {
          document.getElementById("header").style.padding = "25px 0";
          document.getElementById("header").style.backgroundColor = "transparent";
          // document.getElementById("logo").style.fontSize = "35px";
        }
      }
    </script>
  </body>
</html>
