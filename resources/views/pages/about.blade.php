@extends('layouts.master')
@section('title')
About Us | {{ config('app.name') }}
@endsection
@section('content')
<!-- Page Content-->
<main class="page-content section-70 section-md-114">
  <div class="shell-wide">
    <div class="hr bg-gray-light"></div>
  </div>
  <!--A Meeting of Minds-->
  <section class="section-70 section-md-114">
    <div class="shell">
      <div class="range">
        <div class="cell-sm-4 cell-sm-push-2 text-sm-left">
          <div class="inset-sm-left-30 ">
            <img src="images/flier2.jpg" width="340" height="340" alt="" class="img-responsive reveal-inline-block img-rounded"> <hr>
            <img src="images/flier.jpg" width="340" height="340" alt="" class="img-responsive reveal-inline-block img-rounded">
            <!-- <div class="offset-top-20">
              <h6 class="text-primary text-bold">Christopher Smith</h6>
            </div>
            <p>Director of the Kids Tree Preschool, served from 1972 to 1977.</p> -->
          </div>
        </div>
        <div class="cell-sm-8 cell-sm-push-1 offset-top-50 offset-sm-top-0 text-sm-left">
          <h2 class="text-bold text-colour">About {{ config('app.name') }}</h2>
          <div class="hr-sm-left-0"></div>
          <div class="offset-top-30 offset-sm-top-60">
            <p style="font-size: 17px; text-align: justify">{{ config('app.name') }} is an exclusive initiative of a non-government agency known as NOAH’s 1:1.601 TEENAGE CLUB, whose aim amongst other is to scout, develop and mentor young talents.</p>
            <p style="font-size: 17px; text-align: justify">{{ config('app.name') }} is executed in collaboration with THE REDEEMED CHRISTIAN CHURCH OF GOD REGION 5 JUNIOR CHURCH, and other sponsors/partners.</p>
          </div>
          <p style="font-size: 17px; text-align: justify">She is a talent hunt reality tv show property crafted to scout, develop, mentor and reward young talents in the gospel music industry. The talent hunt reality tv show first edition will run for three months, on selected national television channels, the participants must be between the age of 12 -22 years.</p>
          <p style="font-size: 17px; text-align: justify">This Project is to cover Nigeria with emphasis on South South and South East State After the first phase of audition the successful participants will be admitted into our music Academy known as the MINSTREL HOUSE, where they will be trained by the best team in gospel music.</p>
          <hr>
          <h3 class="text-bold text-colour">Rewards</h3>
          <div class="hr-sm-left-0"></div>
          <ul class="list-unstyled contact-info list">
            <li>
              <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                <div class="unit-left"><span class="icon fa fa-arrow-right text-middle icon-xs text-madison"></span></div>
                <div class="unit-body" style="font-size: 17px; text-align: justify">Every house mate will be entitled to consolation prices</div>
              </div>
            </li>
            <li>
              <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                <div class="unit-left"><span class="icon fa fa-arrow-right text-middle icon-xs text-madison"></span></div>
                <div class="unit-body" style="font-size: 17px; text-align: justify">All house mates will record a song together</div>
              </div>
            </li>
            <li>
              <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                <div class="unit-left"><span class="icon fa fa-arrow-right text-middle icon-xs text-madison"></span></div>
                <div class="unit-body" style="font-size: 17px; text-align: justify">First price 	-	10million naira inclusive a one year record deal</div>
              </div>
            </li>
            <li>
              <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                <div class="unit-left"><span class="icon fa fa-arrow-right text-middle icon-xs text-madison"></span></div>
                <div class="unit-body" style="font-size: 17px; text-align: justify">Second price 	-	 5million naira inclusive a one year record deal</div>
              </div>
            </li>
            <li>
              <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                <div class="unit-left"><span class="icon fa fa-arrow-right text-middle icon-xs text-madison"></span></div>
                <div class="unit-body" style="font-size: 17px; text-align: justify">Third place 	-	3million naira and consolation prices</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Images-->
  <section>
    <div class="shell-wide">
      <div class="range">
        <div class="cell-sm-4"><img src="images/minstrelProject.jpg" width="570" height="370" alt="" class="img-responsive reveal-inline-block"></div>
        <div class="cell-sm-4"><img src="images/minstrelProject2.jpg" width="570" height="370" alt="" class="img-responsive reveal-inline-block"></div>
        <div class="cell-sm-4"><img src="images/minstrelProject.jpg" width="570" height="370" alt="" class="img-responsive reveal-inline-block"></div>
      </div>
    </div>
  </section>
</main>
<!-- Page Footer-->
@endsection
