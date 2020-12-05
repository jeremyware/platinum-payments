<?php
include_once 'header.php';
include_once 'formnavigation.php';
?>

<section class="business-profile-form">
 <h2>Business Profile</h2>
 <div class="business-profile-form-form">
  <form action="">
   <p>Business Structure:</p>
   <fieldset class="structure-input-radio">
    <label for="structure-type-corp">Corporation</label>

    <input type="radio" id="corporationChoice" name="structure-type" value="corporation">

    <label for="llcChoice">LLC</label>
    <input type="radio" id="llcChoice" name="structure-type" value="llc">

    <label for="proprietorChoice">Sole Proprietor</label>
    <input type="radio" id="proprietorChoice" name="structure-type" value="proprietor">
    <label for="otherChoice">Other</label>
    <input type="radio" name="structure-type" id="otherChoice" value="other" onchange="showOther(this.checked)">
    <input type=" text" id="otherInput" placeholder="Other...">
   </fieldset>
   <label>Federal Tax ID:</label>
   <input type="text" id="input-tax" name="federal-tax-id" placeholder="fed tax id" />
   <input type="date" id="businessFormed" name="date-business-formed">
   <select class="state-control" id="profile-state" name="state-business-created">
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