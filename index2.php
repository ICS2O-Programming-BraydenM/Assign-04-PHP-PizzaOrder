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
    <title>Assignment 3</title>
    
<!-- Link to CSS file sheet -->
    <link rel="stylesheet" href="./css/style2.css">
  </head>
  <body>
<!-- Link to JS file sheet -->
    <script src="./js/script.js"></script>
<!-- Getting text over an image --> 
    <div class="container">
    <img src="./images/restaurant.jpg" alt="Restaurant" style="width:100%;">
    <h2 style="background-color:white"><font face="Times New Roman"><div class="centered">Place your order</div></font></h2>
    </div>

<!-- Glowing text -->
    <h1 class="glow">Please place your order below.</h1>

<!-- adding an MDL table to show menu and prices -->
    <center>
    <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Pizza Size</th>
      <th>Quantity</th>
      <th>Price for Flatbread</th>
      <th>Price for Stuffed Crust</th>
      <th>Price for a side of Wine</th>
      <th>Topping price (same $ for all)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Small/Piccolo</td>
      <td>1</td>
      <td>$7.79</td>
      <td>$10.79</td>
      <td>$27</td>
      <td>$0.50</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Medium/Medio</td>
      <td>1</td>
      <td>$14.25</td>
      <td>$17.25</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Large/Grande</td>
      <td>1</td>
      <td>$19.87</td>
      <td>$22.87</td>
    </tr>
  </tbody>
</table>
    </center>
    <br><br>
    
<!-- adding a button that calculates cost -->
			<form action="./order.php" method="post" target="results">			
<!-- adding a drop down menu for pizza size -->
          <center>
        <label for="size">Choose your pizza size!</label>
        	<select name="size" name="size">
          	<option value="options">Pizza sizes</option>
          	<option value="small">Small/Piccolo</option>
          	<option value="medium">Medium/Medio</option>
          	<option value="large">Large/Grande</option>
        	</select>
          </center>
        <br><br>
<!-- adding a drop down menu for crust type -->
          <center>
        		<label for="crust">Choose your crust type!!</label>
        		<select name="crust" name="crust">
          		<option value="option">Crust type</option>
              <option value="flatbread">Flatbread/Focaccia Azzima</option>
              <option value="stuffed">Stuffed Crust/Crosta Farcito</option>
        		</select>
          </center>
        <br><br>
<!-- adding check boxes for toppings -->
            <center>
              <?php
              echo "<h3>Choose your toppings.</h3>";
              ?>
            </center>
            <center>
            <input type="checkbox" id="topping1" name="topping1" value="topping1">
            <label for="topping1"> Cheese/Formaggio</label><br>
            <input type="checkbox" id="topping2" name="topping2" value="topping2">
            <label for="topping2">Black Olives/Oliva Nera</label><br>
            <input type="checkbox" id="topping3" name="topping3" value="topping3">
            <label for="topping3"> Spicy sausage/Salame Piccante</label><br>
            <input type="checkbox" id="topping4" name="topping4" value="topping4">
            <label for="topping4">Mushrooms/Fungo</label><br>
            <input type="checkbox" id="topping5" name="topping5" value="topping5">
            <label for="topping5">Garlic Sauce/Salsa All'aglio</label><br>
            <br><br>
            </center>
        
<!-- Radio button asking for a side of wine -->
              <center>
                <?php
                echo "<h5>Would you like a side order of our finest red wine, made from the Italian vineyards of Barolo & Barbaresco?</h5>";
                ?>
              </center>
            <center>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
            <span class="mdl-radio__label">No thank you.</span>
            </label>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
            <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
            <span class="mdl-radio__label">Yes, please.</span>
            </label>
            </center>
            <br>
            <br>
        <center><input type="submit" value="Display Cost"></center>
      </form>

<!-- Adding an iframe that displays results to user -->
          <center><iframe id="results" name="results">
		</iframe></center>
    
<!-- Link back to home page -->
    <center>
      <h6 style="color:black">Here is the link that will take you back to to our <a href="./index.php">Home Page</a>
    </h6>
   </center>
  </body>
</html>
