<?php
include_once 'includes/dbh-inc.php';

?>

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

  <form id="form-main-container" action="#" method="post">
    <div class="form-box error" data-errormsg="">
      <label for="input-DBA">DBA(Name that will be on the card holders bill)</label>
      <br>
      <input type="text" id="input-DBA" placeholder="DBA" />
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
        <input type="radio" class="form-radio" id="input-mailing-y" name="product-info-selector"
          value="mailing-selector-y">
        <label id="label-mailing-y" for="input-mailing-y"> Yes </label>
      </span>
      <br>
      <span class="form-radio-item" style="clear:none">
        <input type="radio" class="form-radio" id="input-mailing-n" name="product-info-selector"
          value="mailing-selector-n">
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
        <input type="text" class="form-textbox validate[limitDate, validateLiteDate]" id="profile-date-business-formed"
          size="12" data-maxlength="12" data-age="" value="" data-format="ddmmyyyy" data-seperator="-"
          placeholder="dd-mm-yyyy" date-val="1605547037814">
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

        <form id="form-owner" action="#" method="post">
          <div class="form-box error" data-errormsg="">
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
            <input type="text" class="form-textbox validate[limitDate, validateLiteDate]" id="info-date-of-birth"
              size="12" data-maxlength="12" data-age="" value="" data-format="ddmmyyyy" data-seperator="-"
              placeholder="dd-mm-yyyy" date-val="1605547037814">
            <br>
            <label for="fieldPhone">Phone: </label>
            <br>
            <input type="tel" id="fieldPhone" placeholder="(555) 555-1212"
              pattern="/^\(?\d{3}\)?[.\s-]?\d{3}[.\s-]\d{4}$/">
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
            <form id="" action="#" method="post">
              <div class="form-box error" data-errormsg="">
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
                <input type="text" class="form-textbox validate[limitDate, validateLiteDate]" id="" size="12"
                  data-maxlength="12" data-age="" value="" data-format="ddmmyyyy" data-seperator="-"
                  placeholder="dd-mm-yyyy" date-val="1605547037814">
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
            </form>
            <br>
          </div>
        </form>
        <br>
        <div class="survey-container"></div>
        <button class="btn-left">Site Survay</button>
        <form action="#" method="POST">
          <label for="label-office-structure">Office Structure(Office, Residential)</label>
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
        </form>
      </div>
      <br>
      <div class="product-price">
        <button class="btn-left">Product Price Info</button>
        <br>
        <form action="#" method="POST">
          <label for="label-project-volume">Projected annual volume</label>
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
        </form>
      </div>
      <div class="current-account-profile-container">
        <button class="btn-left">Currant Account Profile</button>
        <form action="#" method="POST">
          <label for="label-vmcd">Do you currently accept V/MC/D?</label>
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
        </form>
      </div>
      <div class="bank-info-container">
        <button class="btn-left">Bank Information</button>
        <form action="#" method="POST">
          <label for="label-bank-name">Bank Name</label>
          <br>
          <input type="text" name="bank-name" id="input-bank-name">
          <br>
          <label for="label-bank-address">Bank Address</label>
          <br>
          <input type="text" name="bank-address" id="input-bank-address">
          <br>
          <label for="label-bank-phone-number">Bank Phone Number</label>
          <br>
          <input type="tel" id="input-bank-phone-number" placeholder="(555) 555-1212"
            pattern="/^\(?\d{3}\)?[.\s-]?\d{3}[.\s-]\d{4}$/">
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
        </form>
      </div>

      <div class="form-box">
        <button class="submit-btn" id="submit-btn">Submit</button>
      </div>
    </div>
  </form>

  <script src="./forms.js"></script>

</body>

</html>