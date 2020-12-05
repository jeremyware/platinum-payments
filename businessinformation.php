<?php
include_once 'header.php';
include_once 'formnavigation.php';
?>



<section class="business-information-form">
 <div class="business-information-form-form">
  <form action="includes/businessinfo.inc.php" method="POST">
   <h2>Business Information</h2>

   <input type="text" name="username" placeholder="username">
   <input type="text" id="input-street" name="company-street-address" placeholder="street address" required />
   <input type="text" id="input-line-2" name="company-street-address-line-2" placeholder="street address line 2" required />
   <input type="text" id="input-city" name="company-city" placeholder="City" required />
   <select class="state-control" id="state" name="company-state">
    <option value="">Please Select</option>
    <option value="AK">Alaska</option>
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="AZ">Arizona</option>
    <option value="CA">California</option>
    <option value="CO">Colorado</option>
    <option value="CT">Connecticut</option>
    <option value="DC">District of Columbia</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="HI">Hawaii</option>
    <option value="IA">Iowa</option>
    <option value="ID">Idaho</option>
    <option value="IL">Illinois</option>
    <option value="IN">Indiana</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MA">Massachusetts</option>
    <option value="MD">Maryland</option>
    <option value="ME">Maine</option>
    <option value="MI">Michigan</option>
    <option value="MN">Minnesota</option>
    <option value="MO">Missouri</option>
    <option value="MS">Mississippi</option>
    <option value="MT">Montana</option>
    <option value="NC">North Carolina</option>
    <option value="ND">North Dakota</option>
    <option value="NE">Nebraska</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NM">New Mexico</option>
    <option value="NV">Nevada</option>
    <option value="NY">New York</option>
    <option value="OH">Ohio</option>
    <option value="OK">Oklahoma</option>
    <option value="OR">Oregon</option>
    <option value="PA">Pennsylvania</option>
    <option value="PR">Puerto Rico</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="SD">South Dakota</option>
    <option value="TN">Tennessee</option>
    <option value="TX">Texas</option>
    <option value="UT">Utah</option>
    <option value="VA">Virginia</option>
    <option value="VT">Vermont</option>
    <option value="WA">Washington</option>
    <option value="WI">Wisconsin</option>
    <option value="WV">West Virginia</option>
    <option value="WY">Wyoming</option>
   </select>
   <input type="text" id="input-zip" name="company-zip" placeholder="Zip Code" />
   <input type="text" id="input-number" name="company-phone-number" placeholder="Phone Number" />
   <input type="text" id="input-site" name="company-website-url" placeholder="www.example.com" />
   <input type="text" id="input-first" name="contact-first-name" placeholder="First Name" />
   <input type="text" id="input-last" name="contact-last-name" placeholder="Last Name" />
   <div class="btn">
    <button type="submit" name="submit">Previous</button>
    <input type="submit" value="submit">
   </div>
  </form>
 </div>
</section>

<?php

?>

<?php
include_once 'footer.php';
?>