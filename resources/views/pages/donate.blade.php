@extends('layouts.master')
@section('title')
Donate | {{ config('app.name') }}
@endsection
@section('content')
<main class="page-content">
  <!-- Foundation Donation Form-->
  <section class="section-70 section-md-114">
    <div class="shell-wide">
      <div class="hr bg-gray-light"></div>
    </div>
    <div class="shell"  style="margin-top: 30px">
      <div class="range range-xs-center">
        <div class="cell-md-8 cell-sm-10">
          <h2 class="text-bold">Foundation Donation Form</h2>
          <div class="offset-top-60">
            <p>This form allows you to make a gift to Kids Tree Preschool using your credit card. On behalf of the KTP Foundation, thank you for supporting our preschool. All data collected is confidential and secured using 128-bit encryption. Please verify your email address so we can send an email confirmation of your gift.</p>
          </div>
          <div class="offset-top-60">
            <!--Donation Information-->
            <section class="text-left">
              <h6 class="text-bold">Donation Information</h6>
              <div class="text-subline"></div>
              <div class="range offset-top-17">
                <div class="cell-sm-3">
                  <div class="form-group">
                    <label for="donation-amount" class="form-label form-label-outside">Amount</label>
                    <input id="donation-amount" type="text" name="donation" data-constraints="@Required" class="form-control">
                  </div>
                </div>
                <div class="cell-sm-9 offset-top-17 offset-sm-top-0">
                  <div class="form-group">
                    <label for="donation-designation" class="form-label form-label-outside">Designation</label>
                    <select id="donation-designation" data-placeholder="Pre-Kindergarten" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                      <option>Pre-Kindergarten</option>
                      <option value="2">Preschool</option>
                      <option value="3">Summer Camp</option>
                    </select>
                  </div>
                </div>
              </div>
            </section>
            <!--Additional Information-->
            <section class="text-left offset-top-60">
              <h6 class="text-bold">Additional Information</h6>
              <div class="text-subline"></div>
              <div class="offset-top-30">
                <div class="form-group">
                  <label class="checkbox-inline text-dark">
                    <input name="input-group-radio" value="checkbox-1" type="checkbox" class="checkbox-custom">I prefer to make this donation anonymously
                  </label>
                </div>
              </div>
              <div class="range offset-top-17">
                <div class="cell-sm-6">
                  <div class="form-group">
                    <label for="donation-apply-to-existing-pledge" class="form-label form-label-outside">Apply to Existing Pledge</label>
                    <select id="donation-apply-to-existing-pledge" data-placeholder="Yes" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                      <option>Yes</option>
                      <option value="2">No</option>
                    </select>
                  </div>
                </div>
                <div class="cell-sm-6 offset-top-17 offset-sm-top-0">
                  <div class="form-group">
                    <label for="donation-company-matches-gifts" class="form-label form-label-outside">My Company Matches Gifts</label>
                    <select id="donation-company-matches-gifts" data-placeholder="Yes" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                      <option>Yes</option>
                      <option value="2">No</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="offset-top-20">
                <div class="form-group">
                  <label class="checkbox-inline text-dark">
                    <input name="input-group-radio" value="checkbox-2" type="checkbox" class="checkbox-custom">I would like to provide information about my spouse/partner
                  </label>
                </div>
              </div>
            </section>
            <!--Billing Information-->
            <section class="text-left offset-top-60">
              <h6 class="text-bold">Billing Information</h6>
              <div class="text-subline"></div>
              <div class="range offset-top-17">
                <div class="cell-sm-3">
                  <div class="form-group">
                    <label for="donation-title" class="form-label form-label-outside">Title</label>
                    <select id="donation-title" data-placeholder="Mr" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                      <option>Mr.</option>
                      <option value="2">Mrs.</option>
                    </select>
                  </div>
                </div>
                <div class="cell-sm-9 offset-top-17 offset-sm-top-0">
                  <div class="range">
                    <div class="cell-sm-6">
                      <div class="form-group">
                        <label for="donation-first-name" class="form-label form-label-outside">First Name</label>
                        <input id="donation-first-name" type="text" name="first-name" data-constraints="@Required" class="form-control">
                      </div>
                    </div>
                    <div class="cell-sm-6 offset-top-17 offset-sm-top-0">
                      <div class="form-group">
                        <label for="donation-last-name" class="form-label form-label-outside">Last Name</label>
                        <input id="donation-last-name" type="text" name="last-name" data-constraints="@Required" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="offset-top-17">
                <div class="form-group">
                  <label for="donation-country" class="form-label form-label-outside">Country</label>
                  <input id="donation-country" type="text" name="country" data-constraints="@Required" class="form-control">
                </div>
              </div>
              <div class="offset-top-17">
                <div class="form-group">
                  <label for="donation-address" class="form-label form-label-outside">Address</label>
                  <textarea id="donation-address" name="message" data-constraints="@Required" style="height: 100px" class="form-control"></textarea>
                </div>
              </div>
              <div class="range offset-top-17">
                <div class="cell-sm-6">
                  <div class="form-group">
                    <label for="donation-city" class="form-label form-label-outside">City</label>
                    <input id="donation-city" type="text" name="city" data-constraints="@Required" class="form-control">
                  </div>
                </div>
                <div class="cell-sm-6 offset-top-17 offset-sm-top-0">
                  <div class="form-group">
                    <label for="donation-state" class="form-label form-label-outside">State</label>
                    <select id="donation-state" data-placeholder="California" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                      <option>California</option>
                      <option value="2">Alabama</option>
                      <option value="3">Oregon</option>
                      <option value="4">Utah</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="range offset-top-17">
                <div class="cell-sm-6">
                  <div class="form-group">
                    <label for="donation-zip" class="form-label form-label-outside">ZIP</label>
                    <input id="donation-zip" type="text" name="zip" data-constraints="@Required" class="form-control">
                  </div>
                </div>
                <div class="cell-sm-6 offset-top-17 offset-sm-top-0">
                  <div class="form-group">
                    <label for="donation-phone" class="form-label form-label-outside">Phone</label>
                    <input id="donation-phone" type="text" name="Phone" data-constraints="@Required @IsNumeric" class="form-control">
                  </div>
                </div>
              </div>
              <div class="offset-top-17">
                <div class="form-group">
                  <label for="donation-email" class="form-label form-label-outside">Email</label>
                  <input id="donation-email" type="email" name="email" data-constraints="@Required @Email" class="form-control">
                </div>
              </div>
            </section>
            <!--Tribute Information-->
            <section class="text-left offset-top-60">
              <h6 class="text-bold">Tribute Information</h6>
              <div class="text-subline"></div>
              <div class="offset-top-17">
                <div class="form-group">
                  <label for="donation-name" class="form-label form-label-outside">Name</label>
                  <input id="donation-name" type="text" name="name" data-constraints="@Required" class="form-control">
                </div>
              </div>
              <div class="offset-top-17">
                <div class="form-group">
                  <label for="donation-type" class="form-label form-label-outside">Type</label>
                  <select id="donation-type" data-placeholder="In memory of" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                    <option>In memory of</option>
                    <option value="2">In memory of</option>
                  </select>
                </div>
              </div>
              <div class="offset-top-25">
                <div class="form-group">
                  <label class="checkbox-inline text-dark">
                    <input name="input-group-radio" value="checkbox-3" type="checkbox" class="checkbox-custom">Mail a letter on my behalf
                  </label>
                </div>
              </div>
              <div class="offset-top-25"><a href="#" class="btn btn-ellipse btn-primary">Donate</a></div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- Page Footer-->
@endsection
