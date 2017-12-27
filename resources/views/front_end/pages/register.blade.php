@extends ('front_end.layouts.master')

@section ('page_title','Register')

@section ('main_content')

<div class="container">

  <ul class="breadcrumb">
        <li><a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
        <li><a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=account/account">Account</a></li>
        <li><a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=account/register">Register</a></li>
      </ul>
    <div class="row">                <div id="content" class="col-sm-9">      <h1>Register Account</h1>
      <p>If you already have an account with us, please login at the <a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=account/login">login page</a>.</p>
      <form action="/register" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset id="account">
          <legend>Your Personal Details</legend>
          <div class="form-group required" style="display: none;">
            <label class="col-sm-2 control-label">Customer Group</label>
            <div class="col-sm-10">
                                          <div class="radio">
                <label>
                  <input type="radio" name="customer_group_id" value="1" checked="checked" />
                  Default</label>
              </div>
                                        </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
            <div class="col-sm-10">
              <input type="text" name="firstname" value="" placeholder="First Name" id="input-firstname" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
            <div class="col-sm-10">
              <input type="text" name="lastname" value="" placeholder="Last Name" id="input-lastname" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
            <div class="col-sm-10">
              <input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
            <div class="col-sm-10">
              <input type="tel" name="telephone" value="" placeholder="Telephone" id="input-telephone" class="form-control" />
                          </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-fax">Fax</label>
            <div class="col-sm-10">
              <input type="text" name="fax" value="" placeholder="Fax" id="input-fax" class="form-control" />
            </div>
          </div>
                  </fieldset>
        <fieldset id="address">
          <legend>Your Address</legend>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-company">Company</label>
            <div class="col-sm-10">
              <input type="text" name="company" value="" placeholder="Company" id="input-company" class="form-control" />
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-address-1">Address 1</label>
            <div class="col-sm-10">
              <input type="text" name="address_1" value="" placeholder="Address 1" id="input-address-1" class="form-control" />
                          </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-address-2">Address 2</label>
            <div class="col-sm-10">
              <input type="text" name="address_2" value="" placeholder="Address 2" id="input-address-2" class="form-control" />
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-city">City</label>
            <div class="col-sm-10">
              <input type="text" name="city" value="" placeholder="City" id="input-city" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-postcode">Post Code</label>
            <div class="col-sm-10">
              <input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-country">Country</label>
            <div class="col-sm-10">
              <select name="country_id" id="input-country" class="form-control">
                <option value=""> --- Please Select --- </option>
                  <option value="244">Aaland Islands</option>
                    <option value="195">Spain</option>
                    <option value="196">Sri Lanka</option>
                    <option value="249">St. Barthelemy</option>
                    <option value="197">St. Helena</option>
                    <option value="250">St. Martin (French part)</option>
                    <option value="198">St. Pierre and Miquelon</option>
                    <option value="199">Sudan</option>
                    <option value="200">Suriname</option>
                    <option value="201">Svalbard and Jan Mayen Islands</option>
                    <option value="202">Swaziland</option>
                    <option value="203">Sweden</option>
                    <option value="204">Switzerland</option>
                    <option value="205">Syrian Arab Republic</option>
                    <option value="206">Taiwan</option>
                    <option value="207">Tajikistan</option>
                    <option value="208">Tanzania, United Republic of</option>
                    <option value="209">Thailand</option>
                    <option value="210">Togo</option>
                    <option value="211">Tokelau</option>
                    <option value="212">Tonga</option>
                    <option value="213">Trinidad and Tobago</option>
                    <option value="255">Tristan da Cunha</option>
                    <option value="214">Tunisia</option>
                    <option value="215">Turkey</option>
                    <option value="216">Turkmenistan</option>
                    <option value="217">Turks and Caicos Islands</option>
                    <option value="218">Tuvalu</option>
                    <option value="219">Uganda</option>
                    <option value="220">Ukraine</option>
                    <option value="221">United Arab Emirates</option>
                    <option value="222" selected="selected">United Kingdom</option>
                    <option value="223">United States</option>
                    <option value="224">United States Minor Outlying Islands</option>
                    <option value="225">Uruguay</option>
                    <option value="226">Uzbekistan</option>
                    <option value="227">Vanuatu</option>
                    <option value="228">Vatican City State (Holy See)</option>
                    <option value="229">Venezuela</option>
                    <option value="230">Viet Nam</option>
                    <option value="231">Virgin Islands (British)</option>
                    <option value="232">Virgin Islands (U.S.)</option>
                    <option value="233">Wallis and Futuna Islands</option>
                    <option value="234">Western Sahara</option>
                    <option value="235">Yemen</option>
                    <option value="238">Zambia</option>
                    <option value="239">Zimbabwe</option>
                    </select>
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-zone">Region / State</label>
            <div class="col-sm-10">
              <select name="zone_id" id="input-zone" class="form-control">
              </select>
                          </div>
          </div>
                  </fieldset>
        <fieldset>
          <legend>Your Password</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-password">Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
            <div class="col-sm-10">
              <input type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control" />
                          </div>
          </div>
        </fieldset>
        
          <div class="buttons">
          <div class="pull-right">
            <input type="submit" value="Continue" class="btn btn-primary" />
          </div>
        </div>
              </form>
      </div>
</div>
</div>

</div>

@endsection