<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <title>Forms</title>
 <meta name="viewport" content="width=device-width">
</head>

<body>
 <header>
  <h1>Logo Center</h1>
 </header>
 <br>

 <h1>RETAIL QUESTIONNAIRE FORM</h1>
 <form id="form-main-container" action="/includes/insert-retail.php" method="POST">
  <button>Business Information</button>
  <div class="form-box error" data-errormsg="">
   <label for="label-dba">DBA</label>
   <br>
   <input type="text" id="input-dba" name="dba-username" required />
  </div>

  <div class="form-box" data-errormsg="">
   <label for="input-companyAddress">Company Address</label>
   <br>
   <input type="text" id="input-street" name="company-street-address" placeholder="street address" required />

   <input type="text" id="input-line-2" name="company-street-address-line-2" placeholder="street address line 2" required />

   <input type="text" id="input-city" name="company-city" placeholder="City" required />
   <br>
  </div>

  <div class="form-box" data-errormsg="">
   <label for="state" class="col-sm-2 control-label">State</label>
   <div class="col-sm-10">
    <select class="form-control" id="state" name="company-state">
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
   </div>
  </div>
  <div class="form-box" data-errormsg="">
   <input type="text" id="input-zip" name="company-zip" placeholder="Zip Code" required />
  </div>

  <div class="form-box" data-errormsg="">
   <div class="form-number">
    <label for="input-companynumber">Company Phone Number</label>
    <br>
    <input type="text" id="input-areacode" name="company-area-code" placeholder="Area Code" />
    <input type="text" id="input-number" name="company-phone-number" placeholder="Phone Number" />
   </div>
  </div>
  <div class="form-box" data-errormsg="">
   <div class="site-container">
    <label for="input-website">Website/URL</label>
    <br>
    <input type="text" id="input-site" name="company-website-url" placeholder="www.example.com" />
   </div>
  </div>
  <div class="form-box" data-errormsg="">
   <div class="site-container">
    <label for="input-contact-name">Contact Name</label>
    <br>
    <input type="text" id="input-first" name="contact-first-name" placeholder="First Name" />
    <input type="text" id="input-last" name="contact-last-name" placeholder="Last Name" />
   </div>
  </div>
  <div class="business-profile-container">
   <button>Business Profile</button>
   <div class="form-box" data-errormsg="">
    <div class="business-profile-container">
     <div id="profile-form" class="profile-form-input-wide">
      <div class="selector-single-column">
       <span class="form-radio-item" style="clear:left">
        <input type="radio" class="form-radio" id="input_corporation" name="business-corporation-radio" value="Corporation">
        <label id="label-corporation" for="input_corporation"> Corporation </label>
       </span>
       <span class="form-radio-item" style="clear:left">
        <input type="radio" class="form-radio" id="input-llc" name="business-llc-radio" value="LLC">
        <label id="label-llc" for="input-llc"> LLC </label>
       </span>
       <span class="form-radio-item" style="clear:left">
        <input type="radio" class="form-radio" id="input-sole-proprietor" name="business-proprietor-radio" value="Sole Proprietor">
        <label id="label-sole-proprietor" for="input-sole-proprietor"> Sole Proprietor </label>
       </span>
       <span class="form-radio-item" style="clear:left">
        <input type="radio" class="form-radio" name="business-other-radio" id="input-other" value="other">
        <label id="label-other" style="text-indent:0" for="input-other"> </label>
        <input type="text" class="form-radio-other-input form-textbox" name="business-other-radio" data-otherhint="Other" placeholder="Other" size="15" id="input-other_1">
        <br>
       </span>
      </div>
     </div>
    </div>

    <div class="form-tax">
     <label for="input-tax">Federal Tax ID</label>
     <br>
     <div class="form-box" data-errormsg="">
      <input type="text" id="input-tax" name="federal-tax-id" placeholder="fed tax id" />
     </div>
    </div>
   </div>


   <label for="input-tax">Date Business Formed</label>
   <br>
   <div class="form-box" data-errormsg=""></div>
   <input type="text" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_13" size="12" data-maxlength="12" data-age="" value="" data-format="ddmmyyyy" data-seperator="-" placeholder="dd-mm-yyyy" aria-labelledby="label_13 sublabel_13_litemode" date-val="1605547037814" name="date-business-formed">
  </div>
  <div>
   <label for="state" class="col-sm-2 control-label">State Business was Created in?</label>
   <div class="col-sm-10">
    <div class="form-box" data-errormsg="">
     <select class="form-control" id="profile-state" name="business-state-created">
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
    </div>
   </div>
  </div>
  <div class="owner-info-container">
   <button>Owner Information</button>

   <div class="form-box error" data-errormsg="">
    <label for="input-owner">Name</label>
    <br>
    <input class="firstName" type="text" id="input-fn-owner" placeholder="First Name" name="owner-information-first-name" />
    <input class="lastName" type="text" id="input-ln-owner" placeholder="Last Name" name="owner-information-last-name" />
   </div>

   <div class="form-box" data-errormsg="">
    <label for="input-companyAddress">Title</label>
    <br>
    <input type="text" id="input-street-info" placeholder="street address" name="owner-title" />
    <br>
    <label for="input-owner">Ownership age</label>
    <br>
    <input type="text" id="input-" placeholder="ownership" name="owner-age" />
    <br>
    <label for="input-owner">SSN</label>
    <br>
    <input type="text" id="input-ssn" placeholder="ssn" name="owner-social" />
    <br>
    <label for="input-owner">Date of Birth</label>
    <br>
    <input type="text" class="form-textbox validate[limitDate, validateLiteDate]" id="info-date-of-birth" size="12" data-maxlength="12" data-age="" value="" data-format="ddmmyyyy" data-seperator="-" placeholder="dd-mm-yyyy" date-val="1605547037814" name="owner-date-of-birth">
    <br>
    <label for="input-companyAddress">Company Address</label>
    <br>
    <input type="text" id="" placeholder="street address" name="owner-company-address" />

    <input type="text" id="" placeholder="street address line 2" name="owner-company-address-line-2" />

    <input type="text" id="" placeholder="City" name="owner-company-city" />
    <br>
    <label for="state" class="col-state">State</label>
    <div class="col">
     <select class="form-control" id="state-info" name="owner-company-state">
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
    </div>
    <input type="text" id="input-zip-info" placeholder="Zip Code" name="owner-company-zip" />
    <br>
    <input type="text" id="input-drivers-license" placeholder="DLN" name="owner-company-drivers-license">
   </div>
   <br>
   <div class="form-single-column" role="group" aria-labelledby="label_40" data-component="checkbox">
    <span class="form-checkbox" style="clear:left">
     <input type="checkbox" class="form-checkbox" id="form-check" name="" value="ADD 2ND OWNER INFO">
     <label id="" for=""> ADD 2ND OWNER INFO </label>
    </span>
    <div div class="form-box error" data-errormsg="">
     <label for="input-owner">Name</label>
     <br>
     <input class="firstName" type="text" id="" placeholder="First Name" />
     <input class="lastName" type="text" id="" placeholder="Last Name" />
    </div>

    <div class="form-box" data-errormsg="">
     <label for="input-companyAddress">Title</label>
     <br>
     <input type="text" id="" placeholder="street address" />
     <br>
     <label for="input-owner">Ownership age</label>
     <br>
     <input type="text" id="" placeholder="ownership" />
     <br>
     <label for="input-owner">SSN</label>
     <br>
     <input type="text" id="" placeholder="ssn" />
     <br>
     <label for="input-owner">Date of Birth</label>
     <br>
     <input type="text" class="form-textbox validate[limitDate, validateLiteDate]" id="" size="12" data-maxlength="12" data-age="" value="" data-format="ddmmyyyy" data-seperator="-" placeholder="dd-mm-yyyy" date-val="1605547037814">
     <br>
     <label for="input-companyAddress">Company Address</label>
     <br>
     <input type="text" id="" placeholder="street address" />

     <input type="text" id="" placeholder="street address line 2" />

     <input type="text" id="" placeholder="City" />
     <br>
     <label for="state" class="col-state">State</label>
     <div class="col">
      <select class="form-control" id="" name="state">
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
     </div>
     <input type="text" id="" placeholder="Zip Code" />
     <br>
     <input type="text" id="" placeholder="DLN">
    </div>
    <br>
    <br>
   </div>
   <div class="product-info-container">
    <br>
    <button>Product Info</button>
    <br>
    <label for="product-info">Briefly describe product/service</label>
    <br>
    <textarea id="input_35" class="form-textarea" name="brieflyDescribe" cols="40" rows="6" data-component="textarea" aria-labelledby="label_35"></textarea>
    <br>
    <label for="projected-volume">Projected Annual Volume</label>
    <br>
    <input type="text" id="projectedVolume" placeholder="PAV">
    <br>
    <label for="projected-volume">Average Ticket</label>
    <br>
    <input type="text" id="averageTicket" placeholder="AT">
    <br>
    <label for="projected-volume">High Ticket</label>
    <br>
    <input type="text" id="highTicket" placeholder="HT">
    <div class="product-info transaction-type">
     <div class="selector-column">
      <span class="form-radio-item" style="clear:left">
       <input type="radio" class="form-radio" id="input-card-swipe" name="product-info-selector" value="card-swipe">
       <label id="label-card-swipe" for="input-card-swipe"> Card Swipe </label>
      </span>
      <br>
      <span class="form-radio-item" style="clear:left">
       <input type="radio" class="form-radio" id="input-mail-telephone" name="product-info-selector" value="mail-telephone">
       <label id="label-mail-telephone" for="input-mail-telephone"> Mail order/Telephone order </label>
      </span>
      <br>
      <span class="form-radio-item" style="clear:left">
       <input type="radio" class="form-radio" id="input-internet-ecommerce" name="product-info-selector" value="internet-ecommerce">
       <label id="label-internet-ecommerce" for="input-internet-ecommerce"> Internet/Ecommerce </label>
      </span>
     </div>
    </div>
   </div>
  </div>


  <div class="form-box">
   <button id="button-submit">Submit</button>
  </div>

 </form>


 <script src="./forms.js"></script>
</body>

</html>