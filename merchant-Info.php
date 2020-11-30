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
  <h1>Merchant Info Questionnaire</h1>
  <button class="btn-left">Business Information</button>

  <form id="form-main-container" action="/includes/insert.php" method="POST">
    <div class="form-box error" data-errormsg="">
      <label for="input-DBA">DBA(Name that will be on the card holders bill)</label>
      <br>
      <input type="text" id="input-dba" placeholder="DBA" />
    </div>

    <div class="form-box" data-errormsg="">
      <label for="input-companyAddress">Location Address</label>
      <br>
      <input type="text" id="input-street" placeholder="street address" />

      <input type="text" id="input-line-2" placeholder="street address line 2" />

      <input type="text" id="input-city" placeholder="City" />
      <br>
    </div>

    <div class="form-box" data-errormsg="">
      <label for="state" class="col-sm-2 control-label">State</label>
      <div class="col-sm-10-merchant">
        <select class="form-control" id="state" name="state">
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
      <input type="text" id="input-zip" placeholder="Zip Code" />
    </div>

    <div class="form-box" data-errormsg="">
      <label for="input-legal-business-name">Legal Business Name(as it appears on tax return)</label>
      <br>
      <input type="text" id="input-legal-business-name" />
    </div>

    <div class="selector-mailing-address">
      <label for="mailing-address-selctor">Is Mailing Address different from Location Address?</label>
      <br>
      <span class="form-radio-item" style="clear:none">
        <input type="radio" class="form-radio" id="input-mailing-y" name="product-info-selector" value="mailing-selector-y">
        <label id="label-mailing-y" for="input-mailing-y"> Yes </label>
      </span>
      <br>
      <span class="form-radio-item" style="clear:none">
        <input type="radio" class="form-radio" id="input-mailing-n" name="product-info-selector" value="mailing-selector-n">
        <label id="label-mailing-n" for="input-mailing-n"> No </label>
      </span>

      <div class="form-box" data-errormsg="">
        <div class="form-number-merchant">
          <label for="input-companynumber">Company Phone Number</label>
          <br>
          <input type="text" id="input-area-code-fax" placeholder="Area Code" />
          <input type="text" id="input-number" placeholder="Phone Number" />
        </div>
      </div>
      <div class="form-box" data-errormsg="">
        <label for="input-companynumber">Company Fax Number</label>
        <br>
        <input type="text" id="input-company-fax-number" placeholder="Company Fax Number" />
      </div>
      <div class="form-box" data-errormsg="">
        <br>
        <label for="input-companynumber">Company Service Number</label>
        <br>
        <input type="text" id="input-area-code-service" placeholder="Area Code" />
        <input type="text" id="input-customer-service-number" placeholder="Customer Service Number" />
      </div>
      <div class="form-box" data-errormsg="">
        <div class="site-container">
          <label for="input-website">Website/URL</label>
          <br>
          <input type="text" id="input-site" placeholder="www.example.com" />
        </div>
      </div>
      <div class="form-box" data-errormsg="">
        <label for="input-website">Contact Person(if questions on the account)</label>
        <br>
        <input type="text" id="input-contact-person" placeholder="" />
      </div>

      <div class="form-box" data-errormsg="">
        <label for="input-website">Contact Person's Email</label>
        <br>
        <input type="text" id="input-contact-email" placeholder="" />
      </div>
      <div class="business-profile-container">
        <br>
        <button class="btn-left">Business Profile</button>
        <br>
        <div class="form-box" data-errormsg="">
          <label for="input-website">Business Structure(corporation, LLC, Sole Prop, ect.)</label>
          <br>
          <input type="text" id="input-business-structure" placeholder="" />
        </div>
        <br>
        <div class="form-box" data-errormsg="">
          <label for="input-website">Federal Tax ID</label>
          <br>
          <input type="text" id="input-ferdal-tax-id" placeholder="" />
        </div>
        <label for="input-owner">Date of Birth</label>
        <br>
        <input type="text" class="form-textbox validate[limitDate, validateLiteDate]" id="profile-date-business-formed" size="12" data-maxlength="12" data-age="" value="" data-format="ddmmyyyy" data-seperator="-" placeholder="dd-mm-yyyy" date-val="1605547037814">
        <br>
        <label for="state" class="col-sm-2 control-label">State Business was Created in?</label>
        <div class="col-sm-10">
          <div class="form-box" data-errormsg="">
            <select class="form-control" id="profile-state" name="state">
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
          <label for="input-website">Number of Employees</label>
          <br>
          <input type="text" id="input-number-employees" placeholder="" />
        </div>
        <br>
        <div class="form-box" data-errormsg="">
          <label for="input-website">Trade reference 1 - Business name</label>
          <br>
          <input type="text" id="input-trade-reference-1" placeholder="" />
        </div>
        <br>
        <div class="form-box" data-errormsg="">
          <label for="input-website">Contact name and number (of reference 1)</label>
          <br>
          <input type="text" id="input-contact-name-number-1" placeholder="" />
        </div>
        <br>
        <div class="form-box" data-errormsg="">
          <label for="input-website">Trade Reference 2 - Business</label>
          <br>
          <input type="text" id="input-trade-reference-2" placeholder="" />
        </div>
        <br>
        <div class="form-box" data-errormsg="">
          <label for="input-website">Contact name and number (of contact 2) </label>
          <br>
          <input type="text" id="input-contact-name-number-2" placeholder="" />
        </div>
        <br>
      </div>
      <div class="owner-info-container">
        <button class="btn-left">Owner/Officer</button>

        box error" data-errormsg="">
        <label for="label-fn-owner">Primary Owner's Name</label>
        w <br>
        <input class="firstName" type="text" id="input-fn-owner" placeholder="Primary Owner Name" />
        <br>
        <label for="label-title-owner">Title</label>
        <br>
        <input class="lastName" type="text" id="input-title-owner" placeholder="Title" />
      </div>

      <div class="form-box" data-errormsg="">
        <label for="input-ownership">Ownership</label>
        <br>
        <input type="text" id="input-ownership" placeholder="ownership" />
        <br>
        <label for="fieldSsn">SSN: </label>
        <br>
        <input type="text" id="fieldSsn" name="ssn" placeholder="555-55-5555" pattern="\d{3}-?\d{2}-?\d{4}">
        <br>
        <label for="input-owner">Date of Birth</label>
        <br>
        <input type="text" class="form-textbox validate[limitDate, validateLiteDate]" id="info-date-of-birth" size="12" data-maxlength="12" data-age="" value="" data-format="ddmmyyyy" data-seperator="-" placeholder="dd-mm-yyyy" date-val="1605547037814">
        <br>
        <label for="fieldPhone">Phone: </label>
        <br>
        <input type="tel" id="fieldPhone" placeholder="(555) 555-1212" pattern="/^\(?\d{3}\)?[.\s-]?\d{3}[.\s-]\d{4}$/">
        <br>
        <label for="input-companyAddress">Home Address</label>
        <br>
        <input type="text" id="" placeholder="street address" />

        <input type="text" id="" placeholder="street address line 2" />

        <input type="text" id="" placeholder="City" />
        <br>
        <label for="state" class="col-state">State</label>
        <div class="col">
          <select class="form-control" id="state-info" name="state">
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
        <input type="text" id="input-zip-info" placeholder="Zip Code" />
        <br>
        <label for="label-drivers-license">Drivers License</label>
        <br>
        <input type="text" id="input-drivers-license" placeholder="Drivers License">
        <br>
        <label for="label-state-id">State where ID is issued</label>
        <br>
        <input type="text" id="input-state-id" placeholder="State ID">
        <br>
        <label for="label-residence">Year at residence</label>
        <br>
        <input type="text" id="input-residence" placeholder="Year at residence">
        <br>
        <br>
        <div class="form-single-column" role="group" aria-labelledby="label_40" data-component="checkbox">
          <span class="form-checkbox" style="clear:left">
            <input type="checkbox" class="form-checkbox" id="form-check" name="" value="ADD 2ND OWNER">
            <label id="" for=""> ADD 2ND OWNER </label>
          </span>
        </div>
        <br>
        ror" data-errormsg="">
        <label for="input-second-owner">Secondary Owner's Name</label>
        <br>
        <input type="text" id="input-second-owner">
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
        <label for="label-drivers-license">Drivers License</label>
        <br>
        <input type="text" id="input-secondary-drivers-license" placeholder="Drivers License">
        <br>
        <label for="label-state-id">State where ID is issued</label>
        <br>
        <input type="text" id="input-secondary-state-id" placeholder="State ID">
        <br>
        <label for="label-residence">Year at residence</label>
        <br>
        <input type="text" id="input-secondary-residence" placeholder="Year at residence">
      </div>

      <br>
    </div>

    <br>
    <div class="survey-container"></div>
    <button class="btn-left">Site Survay</button>
    e">Office Structure(Office, Residential)</label>
    <br>
    <input type="text" name="offices" id="input-office-structure">
    <br>
    <label for="label-floor-occupy">Floor you occupy & # of floors in building</label>
    <br>
    <input type="text" name="floors" id="input-floor-occupy">
    <br>
    <label for="label-approximate-footage">Approxinate square footage</label>
    <br>
    <input type="text" name="footage" id="label-approximate-footage">
    <br>
    <label for="label-building-area">Building area one type</label>
    <br>
    <input type="text" name="building" id="input-building-area">
    <br>
    <label for="label-lease-building">D you own or lease the bulding?</label>
    <br>
    <input type="text" name="lease" id="input-lease-building">

    </div>
    <br>
    <div class="product-price">
      <button class="btn-left">Product Price Info</button>
      <br>
      >Projected annual volume</label>
      <br>
      <input type="text" name="project-volume" id="input-projected-volume">
      <br>
      <label for="label-average-ticket">Average Ticket</label>
      <br>
      <input type="text" name="average-ticket" id="input-average-ticket">
      <br>
      <label for="label-high-ticket">High Ticket</label>
      <br>
      <input type="text" name="high-ticket" id="input-high-ticket">
      <br>
      <label for="label-high-ticket-description">High ticket description</label>
      <br>
      <input type="text" name="high-ticket-description" id="input-high-ticket-description">
      <br>
      <label for="label-product-detail">Describe product/service in detail</label>
      <br>
      <input type="text" name="product-detail" id="input-product-detail">
      <br>
      <label for="label-refund-policy">Refund policy</label>
      <br>
      <input type="text" name="refund-policy" id="input-refund-policy">
      <br>
      <label for="label-transaction-type">Transaction Type(must equal 100%)</label>
      <br>
      <input type="text" name="transaction-type" id="input-transaction-type">
      <br>
      <label for="label-card-swipe">Card Swipe%</label>
      <br>
      <input type="text" name="card-swipe" id="input-card-swipe">
      <br>
      <label for="label-mail-telephone">Mail Order / Telephone Order</label>
      <br>
      <input type="text" name="mail-telephone" id="input-mail-telephone">
      <br>
      <label for="label-internet-ecommerce">Internet - Ecommerce %</label>
      <br>
      <input type="text" name="internet-ecommerce" id="input-internet-ecommerce">
      <br>
      <label for="label-business-consumer">% of Business to Consumer sales</label>
      <br>
      <input type="text" name="business-consumer" id="input-business-consumer">
      <br>
      <label for="label-business-business-sales">% of Business to Business sales</label>
      <br>
      <input type="text" name="business-business-sales" id="input-business-business-sales">

    </div>
    <div class="current-account-profile-container">
      <button class="btn-left">Currant Account Profile</button>
      rrently accept V/MC/D?</label>
      <br>
      <input type="text" name="vmcd" id="input-vmcd">
      <br>
      <label for="label-amex">Do you currently accept Amex?</label>
      <br>
      <input type="text" name="amex" id="input-amex">
      <br>
      <label for="label-amex-acceptance">If not currently accepting Amex, do you want to?</label>
      <br>
      <input type="text" name="amex-acceptance" id="input-amex-acceptance">
      <br>
      <label for="label-name-of-processor">Name of current Processor</label>
      <br>
      <input type="text" name="name-of-processor" id="input-name-of-processor">
      <br>
      <label for="label-gateway">Gateway using or would like to use?
      </label>
      <br>
      <input type="text" name="gateway" id="input-gateway">
      <br>
      <label for="label-terminated-processor">Have you ever been terminated by a Processor?</label>
      <br>
      <input type="text" name="termated-processor" id="input-terminated-processor">

    </div>
    <div class="bank-info-container">
      <button class="btn-left">Bank Information</button>
      Name</label>
      <br>
      <input type="text" name="bank-name" id="input-bank-name">
      <br>
      <label for="label-bank-address">Bank Address</label>
      <br>
      <input type="text" name="bank-address" id="input-bank-address">
      <br>
      <label for="label-bank-phone-number">Bank Phone Number</label>
      <br>
      <input type="tel" id="input-bank-phone-number" placeholder="(555) 555-1212" pattern="/^\(?\d{3}\)?[.\s-]?\d{3}[.\s-]\d{4}$/">
      <br>
      <label for="label-contact-name">Contact Name</label>
      <br>
      <input type="text" name="contact-name" id="input-contact-name">
      <br>
      <label for="label-account-number">Account #</label>
      <br>
      <input type="text" name="account-number" id="input-account-number">
      <br>
      <label for="label-routing-number">Routing #</label>
      <br>
      <input type="text" name="routing-number" id="input-routing-number">
      <br>
      <label for="label-check-savings">Is this a checking or savings account?</label>
      <br>
      <input type="text" name="checking-savings" id="input-checking-savings">

    </div>
    <div class="offer-campaign-container">
      <button class="btn-left">Offer / Campaign Information</button>
      e">Describe the prodcts/service being sold.</label>
      <br>
      <input type="text" name="product-service" id="input-product-service">
      <br>
      <label for="label-product-purchased">How is the product/service ordered or purchased</label>
      <br>
      <input type="text" name="product-purchased" id="inputer-product-purchased">
      <br>
      <label for="label-price-point">What are the prices points for the product/service</label>
      <br>
      <input type="text" name="price-point" id="input-price-point">
      <br>
      <label for="label-product-front-back-end">Is the product/service being sold through a Front End or as an
        upsell offer? With any upsell offers, please list all applicable Front/Back end partners with the
        product/service being sold.</label>
      <br>
      <textarea name="product-front-back-end" id="textarea-product-front-back-end" cols="30" rows="10"></textarea>
      <br>
      <label for="label-prodcut-cross-sold">Is the product/service being cross sold with any other product/service?
        If yes, explain.
      </label>
      <br>
      <textarea name="prodcut-cross-sold" id="textarea-prodcut-cross-sold" cols=" 30" rows="10"></textarea>
      <label for="label-free-trial">Is there a free trial and/or auto ship program attached to the product/service?
      </label>
      <br>
      <input type="text" name="free-trial" id="input-free-trail">
      <br>
      <label for="label-billing-product-services">Is there recurring billing/continuity plan associated with the
        product/service?
      </label>
      <br>
      <input type="text" name="billing-product-services" id="input-billing-product-services">
      <br>
      <label for="label-product-service-marketing">How is the product/service advertised, marketed, and/or promoted
        to support the projected volume/transaction estimates? (i.e. radio, print, affiliate networks, CPA,
        publishers, and/or other sources to support the transaction count per day)</label>
      <br>
      <textarea name="product-service-marketing" id="textarea-product-service-marketing" cols="30" rows="10"></textarea>
      <br>
      <label for="label-major-affiliates">List all major affiliates (sub affiliates), CPA’s, and publishers used to
        generate sales.
      </label>
      <br>
      <input type="text" name="major-affiliates" id="input-major-affliliates">
      <br>
      <label for="label-track-affiliates">How do you track affiliate sales and monitor for lead quality?
      </label>
      <br>
      <input type="text" name="major-affiliates" id="input-major-affiliates">
      <br>
      <label for="label-warrenty-policy">What is the warranty, return, and refund policy?
      </label>
      <br>
      <input type="text" name="warrenty-policy" id="input-warrent-policy">
      <br>
      <label for="label-cancel-auto-payment-shipment">How can a customer cancel from Auto Ship/Bill and/or
        continuity program?
      </label>
      <br>
      <input type="text" name="cancel-auto-payment-shipment" id="input-cancel-auto-payment-shipment">
      <br>
      <label for="label-house-outsourced">Is fulfillment handled In House or outsourced? If outsourced, with whom?
      </label>
      <br>
      <input type="text" name="house-outsourced" id="input-house-outsourced">

    </div>
    <div class="fulfillment">
      <button class="btn-left">Fulfillment</button>
      se-outsourced">Is fulfillment handled In House or outsourced? If outsourced,
      with whom?
      </label>
      <br>
      <input type="text" name="fulfillment-house-outsourced" id="input-fulfillment-house-outsourced">
      <br>
      <label for="">Which of the following shipping confirmations do you use?</label>
      <br>
      <span class="form-radio-item" style="clear:left">
        <input type="radio" class="form-radio" id="input-delivery-confirmation" name="product-info-selector" value="delivery-confirmation">
        <label id="label-delivery-confirmation" for="input-delivery-confirmation">Delivery Confirmation </label>
      </span>
      <br>
      <span class="form-radio-item" style="clear:left">
        <input type="radio" class="form-radio" id="input-signature-confirmation" name="product-info-selector" value="signature-confirmation">
        <label id="label-signature-confirmation" for="input-signature-confirmation"> Signature Confirmation </label>
      </span>
      <br>
      <span class="form-radio-item" style="clear:left">
        <input type="radio" class="form-radio" id="input-none" name="product-info-selector" value="none">
        <label id="label-none" for="input-none"> None </label>
      </span>
      <br>
      <label for="label-manufactures-produce">Who manufactures/produces the product/service?</label>
      <br>
      <input type="text" name="manufactures-produce" id="input-manufactures-produce">
      <label for="label-sell-supplements">Do you sell digestibles, supplements, etc. ?</label>
      <br>
      <span class="form-radio-item" style="clear:none">
        <input type="radio" class="form-radio" id="input-sell-supplments-y" name="product-info-selector" value="mailing-selector-y">
        <label id="label-sell-supplments-y" for="input-sell-supplments-y"> Yes </label>
      </span>
      <br>
      <span class="form-radio-item" style="clear:none">
        <input type="radio" class="form-radio" id="input-sell-supplments-n" name="product-info-selector" value="sell-supplments-n">
        <label id="label-mailing-n" for="input-sell-supplments-n"> No </label>
      </span>
      <br>
      <label for="label-units-anticipated">How many units per day is your manufacturer capable of producing should
        demand increase?</label>
      <br>
      <input type="text" name="units-anticipated" id="input-units-anticipated">
      <br>
      <label for="label-average-on-hand">On average, how much product is maintained in stock, either in house or at
        your shipping facility?</label>
      <br>
      <input type="text" name="average-on-hand" id="input-average-on-hand">
      <br>
      <label for="label-management-reports">Do you receive Inventory/Inventory Management Reports?</label>
      <br>
      <input type="text" name="management-reports" id="input-management-reports">
      <br>
      <label for="label-tangible-product">Will tangible products be shipped within 7 calendar days of sale capture?
      </label>
      <br>
      <input type="text" name="tangible-product" id="input-tangible-product">
      <br>
      <label for="label-order-information">Who is taking the order?</label>
      <br>
      <input type="text" name="order-information" id="input-order-information">
      <br>
      <label for="label-cardholder-billing-information">At what time or point during the ordering process does the
        merchant or the fulfillment center bill the cardholder (i.e at time of order, at time of shipping,
        etc…)?</label>
      <br>
      <input type="text" name="cardholder-billing-information" id="input-cardholder-billing-information">
      <br>
      <label for="label-product-unavailable-update">What happens if the product is unavailable or if service cannot
        be rendered (i.e. cease billing customer, issue refund, or notify customer of delayed shipment)?</label>
      <br>
      <input type="text" name="product-unavailable-update" id="input-product-unavailable-update">
      <br>
      <label for="label-backorder-acceptance">Do you continue to accept sales if products/services are
        backorder/unavailable?
      </label>
      <br>
      <input type="text" name="backorder-acceptance" id="input-backorder-acceptance">

    </div>
    <div class="customer-service-container">
      <button class="btn-left">Customer Service</button>
      e-house-outsourced">Is Customer Service handled In House or outsourced? If
      outsourced with whom?</label>
      <br>
      <input type="text" name="customer-service-house-outsourced" id="input-customer-service-house-outsourced">
      <br>
      <label for="label-customer-service-outsourced">If Customer Service is outsourced, has anyone from your company
        visited the customer service facility? Will there be impromptu visits to the call center going
        forward?</label>
      <br>
      <input type="text" name="customer-service-outsourced" id="input-customer-service-outsourced">
      <br>
      <label for="label-customer-service-training">Has anyone from your company participated in the training of the
        customer service staff?</label>
      <br>
      <input type="text" name="customer-service-training" id="input-customer-service-training">
      <br>
      <label for="label-customer-service-house">If Customer Service handled In House, how many customer service reps
        are on staff?</label>
      <br>
      <input type="text" name="customer-service-house" id="input-customer-service-house">
      <br>
      <label for="label-customer-service-houses">What are your customer service hours?</label>
      <br>
      <input type="text" name="customer-service-houses" id="input-customer-service-houses">
      <br>
      <label for="label-returns-chargebacks">Who is handling returns/chargebacks?
      </label>
      <br>
      <input type="text" name="returns-chargebacks" id="input-returns-chargebacks">
      <br>
      <label for="label-automated-customer-credit">If applicable, is the fulfillment center automated to credit
        customers for returned or refused shipments?</label>
      <br>
      <input type="text" name="automated-customer-credit" id="input-automated-customer-credit">
      <br>
      <label for="label-fulfillment-center-communication">How does the fulfillment center communicate with you and
        vice versa?</label>
      <br>
      <input type="text" name="fulfillment-center-communication" id="input-fulfillment-center-communication">
      <br>
      <label for="label-quaility-control">Do you have a quality control process in place to review orders on a
        regular basis in whole or in a sample set?</label>
      <br>
      <input type="text" name="quaility-control" id="input-quaility-control">
      <br>
      <label for="label-customer-service-name">What is the customer service number you would like to have show up on
        card holders statements?</label>
      <br>
      <input type="text" name="customer-service-name" id="input-customer-service-name">
      <br>
      <label for="label-customer-bankstatement-description">How do you want the description to read on customer's
        bank statements? (22 characters max, includes spaces)</label>
      <br>
      <input type="text" name="customer-bankstatement-description" id="input-customer-bankstatement-description">
      <br>
      <label for="label-signature">Signature</label>

    </div>

    <div class="form-box">
      <button class="submit-btn" id="submit-btn">Submit</button>
    </div>
    </div>
  </form>

  <script src="./forms.js"></script>





</body>

</html>