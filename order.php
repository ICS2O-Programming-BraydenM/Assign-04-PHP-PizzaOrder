<?php
    // display constants
    define(HST, 0.13);
    define(TOPPING_PRICE, 0.50);

    //get user input for pizza size and crust type
   $pizzaSize = $_POST['size'];
   $crustType = $_POST['crust'];

  // initializing variable for pizza
   $baseCost = 0;

  // finding the cost of size and type of crust for the pizza before toppings and side of wine
    if (($pizzaSize == "small") && ($crustType == "flatbread")) {
      $baseCost = 7.79;
    }
    else if (($pizzaSize == "small") && ($crustType == "stuffed")) {
      $baseCost = 10.79;
    }
    else if (($pizzaSize == "medium") && ($crustType == "flatbread")) {
      $baseCost = 14.25;
    }
    else if (($pizzaSize == "medium") && ($crustType == "stuffed")) {
      $baseCost = 17.25;
    }
    else if (($pizzaSize == "large") && ($crustType == "flatbread")) {
      $baseCost = 19.87;
    }
    else if (($pizzaSize == "large") && ($crustType == "stuffed")) {
      $baseCost = 22.87;
    }
  
  // check all check boxes to see how many there are, from https://www.techiedelight.com/count-number-check-boxes-javascript/
 
    $numberOfCheckboxes = document.querySelectorAll('input[type="checkbox"]:checked');

  $numberOfToppings = $numberOfCheckboxes.length;

  $toppingCost = $numberOfToppings * TOPPING_PRICE;

  //initializing variable for extra side of wine 
  $wineCost = 0;
    
  // if statement to see what radio button was clicked and to find cost of wine
  if(document.getElementById('option-1').checked) {
  //No thank you radio button is clicked
    $wineCost = 0;
  }
  else if(document.getElementById('option-2').checked) {
  //Yes please radio button is clicked
    $wineCost = 27.00;
}

  // calculate subtotal, tax and total
  $subTotal = $baseCost + $toppingCost + $wineCost;
  $subTotal_rounded = number_format($subTotal, 2);
  $tax = $subTotal * HST;
  $tax_rounded = number_format($tax, 2);
  $total = $subTotal + $tax;
  $total_rounded = number_format($total, 2);

// display results back to user
  echo "Your subtotal is " . "$" . $subTotal_rounded . "<br> Your tax amount is " . "$" + $tax_rounded . " <br> Your total is " . "$" . $total_rounded . "<br> Thank you for ordering from us! We hope to see you again soon :)";
?>