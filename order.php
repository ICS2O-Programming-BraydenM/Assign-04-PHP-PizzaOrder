<?php
    // display constants
    
    // constant tax price
    define(HST, 0.13);
    // constant topping price
    define(TOPPING_PRICE, 0.50);
    // costs for each combination of pizza size and crust type
    define(SMALL_FLATBREAD, 7.79);
    define(SMALL_STUFFED, 10.79);
    define(MED_FLATBREAD, 14.25);
    define(MED_STUFFED, 17.25);
    define(LARGE_FLATBREAD, 19.87);
    define(LARGE_STUFFED, 22.87);

    //get user input for pizza size and crust type
   $pizzaSize = $_POST['size'];
   $crustType = $_POST['crust'];

  // initializing variable for pizza
   $baseCost = 0;

  // finding the cost of size and type of crust for the pizza before toppings and side of wine
    if (($pizzaSize == "small") && ($crustType == "flatbread")) {
      $baseCost = SMALL_FLATBREAD;
    }
    else if (($pizzaSize == "small") && ($crustType == "stuffed")) {
      $baseCost = SMALL_STUFFED;
    }
    else if (($pizzaSize == "medium") && ($crustType == "flatbread")) {
      $baseCost = MED_FLATBREAD;
    }
    else if (($pizzaSize == "medium") && ($crustType == "stuffed")) {
      $baseCost = MED_STUFFED;
    }
    else if (($pizzaSize == "large") && ($crustType == "flatbread")) {
      $baseCost = LARGE_FLATBREAD;
    }
    else if (($pizzaSize == "large") && ($crustType == "stuffed")) {
      $baseCost = LARGE_STUFFED;
    }
  
  // check all checkboxes to see how many there are, from https://www.techiedelight.com/count-number-check-boxes-javascript/
 
    // initialized variable for topping cost 
     $numberOfToppings = 0;

  // changing the number of toppings based on checkboxes selected (beginning with if cheese is clicked)
  if (isset($_POST["topping1"])){
   //++ adds one to the total number of checkboxes
   $numberOfToppings++;
   }
  //if black olives are clicked
  if (isset($_POST["topping2"])){
   $numberOfToppings++;
   }
  //if spicy sausage is clicked
  if (isset($_POST["topping3"])){
   $numberOfToppings++;
   }
  //if mushrooms are clicked
  if (isset($_POST["topping4"])){
   $numberOfToppings++;
   }
  //if garlic sauce is clicked
  if (isset($_POST["topping5"])){
   $numberOfToppings++;
   }

  $toppingCost = $numberOfToppings * TOPPING_PRICE;

  //initializing variable for extra side of wine 
  $wineCost = 0;
  // making a variable fetching information from radio button
  $wineChecked = $_POST["options"];
    
  // if statement to see what radio button was clicked and to find cost of wine
  if ($wineChecked == "wine-no") {
  //No thank you radio button is clicked
    $wineCost = 0;
  }
  else if ($wineChecked == "wine-yes") {
  //Yes please radio button is clicked
    $wineCost = 27.00;
  }

  // calculate subtotal, tax and total
  $subTotal = $baseCost + $toppingCost + $wineCost;
  $tax = $subTotal * HST;
  $total = $subTotal + $tax;

// display results back to user
  echo "Your subtotal is $" . number_format($subTotal, 2) . ".<br>The amount of tax added is $" . number_format($tax, 2) . ".<br>Your total is $" . number_format($total, 2) . "." . "<br>Thank you for ordering from us, we hope to see you again soon :)";
?>