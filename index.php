<!DOCTYPE html>
<html lang="en-ca">
  <head>
<!-- metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My fourth Assignment">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Brayden MacMillan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- To use Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-pink.min.css" />
    <title>Assignment 1</title>
    
<!-- Link to CSS file sheet -->
    <link rel="stylesheet" href="./css/style.css">
  </head>
  
<!-- MDL layout linking to second webpage -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer">
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Place your order</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="https://assign-04-php-pizzaorder.braydenmacmill1.repl.co/index2.php">Order food!</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here --></div>
  </main>
</div>

<!-- Getting text over an image --> 
  <body>

<div class="container">
  <img src="./images/italy5.jpg" alt="Positano" style="width:100%;">
  <h2 style="color:white"><font face="Times New Roman"><div class="centered">Star Sun Pizzeria/Pizzeria Del Sole A Stella</div></h2>
</div>

<!-- Slider with Starting Value -->
	<center>
    <?php
    echo "<h4>Do YOU like pizza?!?</h4></center>";
    ?>
		<input class="mdl-slider mdl-js-slider" type="range" min="0" max="100" value="25" tabindex="0">

  <!-- Side by side images -->
<div class="row">
  <div class="column">
    <img src="./images/positano.png" alt="Water" style="width:100%">
  </div>
  <div class="column">
    <img src="./images/water.webp" alt="Italy" style="width:100%">
  </div>
  <div class="column">
    <img src="./images/pizzapower.webp" alt="Pizza" style="width:100%">
  </div>
</div>

<!-- Glowing text -->
  <h1 class="glow">About us!</h1>

<!-- Adding background information on my restaurant -->

  <center>
    <?php
    echo "<h3>~~~Our origin~~~</h3>";
    ?>
  </center>
  <center>
    <?php
    echo "<p>The founder of Star Sun Pizzeria, Brayden MacMillan, originally was born and raised in Ottawa, Canada, but came to Italy to start a new life here and had a lifelong dream of opening an Italian pizzeria right here, in Positano, Italy! Unfortunately, he passed away last year, but he was 97 years old! His legacy will live on forever in this business, and we will always give thanks to him for creating this wonderful community. We have now been at this location for 64 years, since 2040! All of our employees have a passion for crafting top tier Italian pizzas, and we hope to see you on our cliffside padio this summer :)  </p>";
?>
</center>

<!-- adding an image of my friends and I -->
    <center><img src="./images/friends2.JPG"></center>
   <center>
   <?php
   echo "<p>Brayden MacMillan with friends, April 2022</p>";
   ?>
   </center>

<!-- Showing my restaurant locations across the world -->
  <center>
  <?php
  echo "<h3>Locations</h3>";
  ?>
  <?php
  echo "<h6>Due to our outstanding pizzas, our company has been turned into a chain of restaurants and have been spread out across the world! Find us near you. </h6>";
  ?>
 </center>

<!-- An ordered list -->
  <center><ol>
    <li>Positano, Italy (us)</li>
    <li>Ottawa, Canada</li>
    <li>Madrid, Spain</li>
    <li>Bali, Indonesia</li>
    <li>Sydney, Australia</li>
    <li>Moscow, Russia</li>
    <li>New York, New York</li>
    <li>Los Angeles, United States</li>
    <li>Vancouver, Canada</li>
    <li>Rome, Italy</li>
  </ol></center>

<!-- Adding a MDL button asking user a question -->
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script>
      function myButtonClicked() {
        alert("Do you have a Star Sun Pizzeria location nearby?")
      }
    </script>

<!-- Colored raised button -->
		<center><button onclick="myButtonClicked()" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
		  Urgent message!
		</button></center>
		<br></br>

<!-- Another image for aesthetic -->
  <center>
  <?php
  echo "<h5>Gallery</h5>";
  ?>
  </center>
  <center><img src="./images/pizzas.jpg" width="800" length="950"></center><br><br>

<!-- adding a video showcasing Positano, Italy -->
    <iframe width="560" height="315" src="https://www.youtube.com/embed/76lAXtHr3mo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<!-- Header showing hours of operation of my restaurant -->
      <center>
        <?php
        echo "<h2>Hours of operation:</h2>";
        ?>
      </center>
    
<!-- CSS part of square card asking if user is curious to know when my restaurant is operating (this style part must be in index.html and style.css in order to work! ) -->
<style>
.demo-card-square.mdl-card {
  width: 320px;
  height: 320px;
}
.demo-card-square > .mdl-card__title {
  color: #EE82EE;
  background:
    url('./images/italy.jpg') bottom right 15% no-repeat #46B6AC;
}
</style>

<!-- HTML part of the square card -->
<center>
<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">A Message</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Curious to know when we are open?
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      See our hours of operation below:
    </a>
  </div>
</div>
</center>
    <br>
    <br>

<!-- A table displaying schedule of operation -->
 <center>
   <table border="1">
          <tr>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
          </tr>
          <tr>
            <td>6 am to 10 pm</td>
            <td>6 am to 10 pm</td>
            <td>6 am to 10 pm</td>
            <td>7 am to 9 pm</td>
            <td>7 am to 11:30 pm</td>
            <td>8 am to 11 pm</td>
            <td>10 am to 7 pm</td>
          </tr>
   </table>
 </center><br><br>

<!-- Another image for aesthetics -->
    <center><img src="./images/message.jpg" width="500" length="900"></center>
  </body>
</html>