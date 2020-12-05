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
   <select name="transaction-selector" id="transactionType">
    <option selected hidden>Please Select</option>
    <option value="card swipe">Card Swipe</option>
    <option value="mail/telephone">Mail order/Telephone Order</option>
    <option value="internet/ecommerce">Internet/Ecommerce</option>
   </select>
   <div class="btn">
    <button type="submit" name="submit">Previous</button>
    <button type="submit" name="submit">Next</button>
   </div>

  </form>
 </div>
</section>

<?php
include_once 'footer.php';
?>