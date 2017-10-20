<?php include "includes/header.php" ?>

<div class="container-fluid">
  <div class="row donateheader"> 
      <div class="col-xs-0 col-sm-0 col-md-3"></div>
      <div class="col-xs-12 col-sm-12 col-md-7">
      <h1>Make a Donation to Children's Neuroblastoma Cancer Foundation</h1>
      </div>
      <div class="col-2"></div>
  </div> <!-- This is the row donate header closing div !-->

  <div class="row billingsection">
      <div class="col-sm-0 col-md-1 col-lg-2 col-xl-3"></div>
      <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
        <div class="billingwrapper">
          <h5>Donation Amount</h5>
          <div id="amount">
                <button type="button" class="btn btn-primary btn-lg amt-btn">$25</button>
                <button type="button" class="btn btn-primary btn-lg amt-btn">$50</button>
                <button type="button" class="btn btn-primary btn-lg amt-btn">$100</button>
                <button type="button" class="btn btn-primary btn-lg amt-btn">$500</button>
                <button type="button" class="btn btn-primary btn-lg amt-btn">$1000</button>
                <button type="button" id="amount-donation-other" class="btn btn-primary btn-lg amt-btn">Other</button>
          </div>

          <div id="amountOtherWrapper" class="hide">
            <span id="dollarSign">$</span>
            <input type="text" name="donationAmountOther" id="donationAmountOther" class="otherDonationForm otherBoxXs">
            <button type="button" id="other-back-to-amounts" class="btn btn-primary btn-lg margin-when-small">Other</button>
          </div> 
        </div> <!-- This is the billingwrapper closing div !-->
    </div> <!-- This is the row billing section col conetent closing div !-->
    <div class="col-sm-0 col-md-1 col-lg-2 col-xl-3"></div>
    
  </div> <!-- This is the row billing section closing div !-->


<div class="row checkboxsection">
    <div class="col-lg-2 col-xl-3"></div>
    <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
        <div class="checkboxdiv">
          <input id="box1" type="checkbox">
          <label for="box1" class="stackchecks">Make this my monthly donation</label>
          <input id="box2" type="checkbox" class="stackchecks">
          <label for="box2" class="stackchecks">Dedicate my donation</label>
        </div>
      </div>
    <div class="col-lg-2 col-xl-3"></div> 
</div> <!-- This is the row checkboxsection closing div !-->  



 <div class="row"> 
 
  <div class="col-lg-2 col-xl-3"></div> 
 
    <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
      <div class="payment-method"> 
      <hr>
        <h5>Payment Method</h5>
        <button type="button" class="btn btn-secondary pay-meth-btn">Credit</button>
        <button type="button" class="btn btn-secondary pay-meth-btn">PaypPal</button>
        <button type="button" class="btn btn-secondary pay-meth-btn">Check</button>
       
       <form class="form-inline form-spacing card-info">
          <div class="form-group">
            <label class="col-sm-6 control-label" for="card-holder-name">Name on Card:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control " name="card-holder-name" id="card-holder-name" placeholder="Card Holder's Name">
            </div>
          </div>
      </form>

      <form class="form-inline form-spacing">
          <div class="form-group">
            <label class="col-sm-6 control-label" for="card-number">Card Number:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="card-number" id="card-number" placeholder="Card Number">
            </div>
          </div>
      </form>

     <form class="form-inline form-spacing">
      <div class="form-group">
        <label class="col-sm-3 control-label" for="expiry-month">Expiration Date:</label>
          <div class="col-sm-9">
            <div class="row">
              <div class="col-xs-3">
                <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                  <option>Month</option>
                  <option value="01">Jan (01)</option>
                  <option value="02">Feb (02)</option>
                  <option value="03">Mar (03)</option>
                  <option value="04">Apr (04)</option>
                  <option value="05">May (05)</option>
                  <option value="06">June (06)</option>
                  <option value="07">July (07)</option>
                  <option value="08">Aug (08)</option>
                  <option value="09">Sep (09)</option>
                  <option value="10">Oct (10)</option>
                  <option value="11">Nov (11)</option>
                  <option value="12">Dec (12)</option>
                </select>
              </div>
              <div class="col-xs-3">
                <select class="form-control" name="expiry-year">
                  <option value="13">2013</option>
                  <option value="14">2014</option>
                  <option value="15">2015</option>
                  <option value="16">2016</option>
                  <option value="17">2017</option>
                  <option value="18">2018</option>
                  <option value="19">2019</option>
                  <option value="20">2020</option>
                  <option value="21">2021</option>
                  <option value="22">2022</option>
                  <option value="23">2023</option>
                </select>
              </div>
            </div>
          </div>
      </div>
    </form>

    <form class="form-inline form-spacing">
      <div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">Card CVV:</label>
          <div class="col-sm-3">
            <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Security Code">
          </div>
      </div>
      
    </form>

    </div>   <!-- closes payment method !-->

    <div class="user-info sect-seperators">
    <h5>Your Information</h5>
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name:">
      </div>
  
      <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name:">
      </div>
  
 
      <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number:">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email:">
      </div>
  </form>

</div>


   <div class="billing sect-seperators">
    <h5>Billing Address</h5>
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address:">
      </div>
 

  
      <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address two:">
      </div>


 
      <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ZIP:">
      </div>
 

 
      <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="City:">
      </div>

      </form>
    <form class="form-inline">
    <label class="col-sm-3 control-label" for="expiry-month">State:</label>
    <div class="col-xs-3">
                <select class="form-control" name="expiry-year">
                  <option value="">State</option>
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
    </div> <!-- closes user-info !-->

  </div>  <!-- closes content col !-->    
</div>  <!-- closes row !-->   

<div class="row checkboxsection">
    <div class="col-lg-2 col-xl-3"></div>
    <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
        <div class="checkboxdiv">
          <input id="box3" type="checkbox">
          <label for="box3" class="stackchecks">Remember My Billing Information</label>
          <input id="box4" type="checkbox" class="stackchecks">
          <label for="box4" class="stackchecks">I would like to recieve or continue to recieve emails from St. Jude</label>
        </div>
      </div>
    <div class="col-lg-2 col-xl-3"></div> 
</div>

<div class="row">
   <div class="col-sm-1 col-md-1 col-lg-2 col-xl-3"></div>
      <div class="col-sm-8 col-md-9 col-lg-8 col-xl-6">
          <div class="row">
            <div class="col-sm-4 col-md-3 col-lg-4"></div>
            <div class="col-sm-2 col-md-6 col-lg-6">
            <button type="button" class="btn btn-success btn-lg donate-btn">Donate</button>
            </div>
            <div class="col-sm-5 col-md-3 col-lg-4"></div>
          </div>
      <div class="col-sm-4 col-md-2 col-lg-2 col-xl-3"></div>
</div>


</div>   <!-- This is the container fluid closing div !-->   
     
    
<?php include "includes/footer.php" ?>