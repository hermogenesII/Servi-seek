<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="../css_files/categories.css" />

    <title>Categories</title>
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
    
    <h1>Cellphone Repair</h1>
    <div class="review-summary">
      <div class="basic-info">
        <img src="../7.jpg" />
        <div class="categories-btn">
          <a href="serviceProvider.php"><button class="view">View</button></a>
          <button class="hire">Hire</button>
          <button class="message">Message</button>
        </div>
        <div class="basic-info-details">
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
          </ul>
        </div>
      </div>
      <div class="reviews">
        <h3>Review Summary</h3>
      </div>
    </div>

    <div class="review-summary">
      <div class="basic-info">
        <img src="../7.jpg" />
        <div class="categories-btn">
          <button class="view">View</button>
          <button class="hire">Hire</button>
          <button class="message">Message</button>
        </div>
        <div class="basic-info-details">
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
          </ul>
        </div>
      </div>
      <div class="reviews">
        <h3>Review Summary</h3>
      </div>
    </div>

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
