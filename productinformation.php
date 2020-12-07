<?php
include_once 'header.php';
include_once 'formnavigation.php';

?>

<section class="product-information-form">
 <h2>Product Information</h2>
 <div class="product-information-form-form">
  <form action="includes/signup.inc.php" method="post">
   <textarea name="describe-product-info" cols="29" rows="10"></textarea>
   <input type="text" id="projectedVolume" placeholder="PAV" name="product-annual-volume">
   <input type="text" id="averageTicket" name="product-average-ticket">
   <input type="text" id="highTicket" name="product-high-ticket">

   <fieldset class="transaction-input-radio" name="transaction-input" id="transactionType">
    <label class="product-radio-container">Card Swip
     <input type="radio" checked="checked" name="radio">
     <span class="checkmark"></span>
    </label>
    <label class="product-radio-container"> Mail order/Telephone Order
     <input type="radio" name="radio">
     <span class="checkmark"></span>
    </label>
    <label class="product-radio-container">Internet/Ecommerce
     <input type="radio" name="radio">
     <span class="checkmark"></span>
    </label>
    <div class="btn">
     <button type="submit" name="submit">Previous</button>
     <button type="submit" name="submit">Submit</button>
    </div>

  </form>
 </div>
</section>



<?php
include_once 'footer.php';
?>