<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <header>
    <h1>Logo Center</h1>
  </header>

  <br>
  <h1>RETAIL QUESTIONNAIRE FORM</h1>
  <div class="site-container">
    <form id="form-main-container" action="/includes/insert-retail.php" method="POST">
      <button>Business Information</button>
      <br>
      <br>
      <label for="username">DBA</label>
      <br>
      <td> <input type="name" name="username" placeholder="username"></td>
      <br>

      <label for="input-contact-name">Contact Name</label>
      <br>
      <input type="text" id="input-first" name="contact-first-name" placeholder="First Name" />
      <input type="text" id="input-last" name="contact-last-name" placeholder="Last Name" />
  </div>
  <label for="input-companyAddress">Company Address</label>
  <br>
  <input type="text" id="input-street" name="company-street-address" placeholder="street address" required />
  <input type="text" id="input-line-2" name="company-street-address-line-2" placeholder="street address line 2" required />
  <input type="text" id="input-city" name="company-city" placeholder="City" required />
  <br>

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

  <input type="text" id="input-zip" name="company-zip" placeholder="Zip Code" required />

  <div class="form-number">
    <label for="input-companynumber">Company Phone Number</label>
    <br>
    <input type="text" id="input-number" name="company-phone-number" placeholder="Phone Number" />
  </div>

  <div class="site-container">
    <label for="input-website">Website/URL</label>
    <br>
    <input type="text" id="input-site" name="company-website-url" placeholder="www.example.com" />
  </div>
  <br>
  <div class="business-profile-container">
    <button>Business Profile</button>
    <br>
    <br>
    <div class="form-tax">
      <label for="input-tax">Federal Tax ID:</label>
      <input type="text" id="input-tax" name="federal-tax-id" placeholder="fed tax id" />
    </div>
    <br>
    <label for="date-business-formed">Date Business Formed:</label>
    <br>
    <input type="date" id="businessFormed" name="date-business-formed">
    <br>
    <br>
    <label for="state" class="col-sm-2 control-label">State Business was Created in?</label>
    <div class="col-sm-10">

      <label for="state" class="col-sm-2 control-label">State</label>
      <div class="col-sm-10">
        <select class="form-control" id="state" name="state-business-created">
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
      <div class="owner-info-container">
        <button>Owner Information</button>
        <div class="form-box error" data-errormsg="">
          <label for="input-owner">Name</label>
          <br>
          <input class="firstName" type="text" id="input-fn-owner" placeholder="First Name" name="owner-information-first-name" />
          <input class="lastName" type="text" id="input-ln-owner" placeholder="Last Name" name="owner-information-last-name" />
        </div>

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
        <label for="date-business-formed">Date of Birth:</label>
        <br>
        <input type="date" id="dateOfBirth" name="owner-date-of-birth">
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
      <div class="secondary-owner-container">
        <input type="checkbox" class="form-checkbox" id="form-check" name="" value="ADD SECONDARY OWNERSHIP INFO">
        <label id="" for=""> ADD SECONDARY OWNERSHIP INFO </label>
        </span>
        <div div class="form-box error" data-errormsg="">
          <label for="input-owner">Name</label>
          <br>
          <input class="firstName" type="text" id="" placeholder="First Name" name="secondary-owner-first-name" />
          <input class="lastName" type="text" id="" placeholder="Last Name" name="secondary-owner-last-name">
        </div>

        <label for="input-companyAddress">Title</label>
        <br>
        <input type="text" id="" name="secondary-owner-title" />
        <br>
        <label for="input-owner">Ownership age</label>
        <br>
        <input type="text" id="" placeholder="ownership" name="secondary-owner-age" />
        <br>
        <label for="input-owner">SSN</label>
        <br>
        <input type="text" id="" placeholder="ssn" name="secondary-owner-social" />
        <br>
        <br>
        <label for="date-business-formed">Date of Birth:</label>
        <br>
        <input type="date" id="secondaryDateOfBirth" name="secondary-owner-date-of-birth">
        <br>
        <br>
      </div>
      <label for="input-companyAddress">Company Address</label>
      <br>
      <input type="text" id="" placeholder="street address" name="secondary-owner-address" />
      <input type="text" id="" placeholder="street address line 2" name="secondary-owner-address-line-2" />
      <input type="text" id="" placeholder="City" name="secondary-owner-city" />
      <br>
      <label for="state" class="col-state">State</label>
      <div class="col">
        <select class="form-control" id="" name="secondary-owner-state">
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
      <input type="text" id="" placeholder="Zip Code" name="secondary-owner-zip" />
      <br>
      <input type="text" id="" placeholder="DLN" name="secondary-owner-drivers-license">

      <br>
      <br>
      <div class="product-info-container">
        <br>
        <button>Product Info</button>
        <br>
        <label for="product-info">Briefly describe product/service</label>
        <br>
        <textarea id="input_35" class="form-textarea" name="describe-product-info" cols="40" rows="6" data-component="textarea" aria-labelledby="label_35"></textarea>
        <br>
        <label for="projected-volume">Projected Annual Volume</label>
        <br>
        <input type="text" id="projectedVolume" placeholder="PAV" name="product-annual-volume">
        <br>
        <label for="projected-volume">Average Ticket</label>
        <br>
        <input type="text" id="averageTicket" name="product-average-ticket">
        <br>
        <label for="projected-volume">High Ticket</label>
        <br>
        <input type="text" id="highTicket" name="product-high-ticket">
        <div class="product-info transaction-type">
          <br>
          <label for='label-transaction-type'>Transaction Type</label>
          <div class="transaction-type-selector">
            <select name="transaction-selector" id="transactionType">
              <option selected hidden>Please Select</option>
              <option value="cs">Card Swipe</option>
              <option value="to">Mail order/Telephone Order</option>
              <option value="ti">Internet/Ecommerce</option>
            </select>
          </div>
        </div>
      </div>
      <div class="form-box">
        <button id="btn-submit">Submit</button>
      </div>
      </form>

      <script src="./forms.js"></script>
</body>

</html>