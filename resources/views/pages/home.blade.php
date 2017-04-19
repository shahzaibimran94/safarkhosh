<div ng-controller="indexController" ng-show="show">
  <div class="header w-nav" data-animation="default" data-collapse="medium" data-duration="400">
    <a class="brand w-nav-brand" href="#"><img class="logo" src="images/safarkhoush-logo.png" width="65">
      <div class="logo-text">safarkhoush</div>
    </a>
    <nav class="nav-menu w-nav-menu" role="navigation"><a class="nav-link w-nav-link" href="#hiw">How it works?</a><a class="nav-link w-nav-link" data-toggle="modal" data-target="#loginmodal">Sign In</a><a class="sign-up-button w-button" href="#">Sign Up</a>
    </nav>
    <div class="w-nav-button">
      <div class="w-icon-nav-menu"></div>
    </div>
  </div>
  <div class="widget">
    <ul class="w-list-unstyled">
      <li class="list-item">
        <a class="w-inline-block" href="#"><img src="images/ic_directions_bus_white_36px.svg" width="30">
        </a>
      </li>
      <li class="list-item">
        <a class="w-inline-block" href="#"><img src="images/ic_directions_bike_white_36px.svg" width="30">
        </a>
      </li>
      <li class="list-item">
        <a class="w-inline-block" href="#"><img src="images/ic_explore_white_36px.svg" width="30">
        </a>
      </li>
      <li class="list-item">
        <a class="w-inline-block" href="#"><img src="images/ic_shopping_basket_white_36px.svg" width="30">
        </a>
      </li>
      <li class="list-item">
        <a class="w-inline-block" href="#"><img src="images/ic_business_white_36px.svg" width="30">
        </a>
      </li>
    </ul>
  </div>
  <div class="value-prop-section">
    <h1 class="main-value-prop">Experience Pakistan</h1>
    <h3 class="subheading">Choose from over a hundred expeditions across the country</h3><a class="primary-button w-button" href="#">Join Now</a><a class="secondary-button w-button" href="#">Learn More</a>
  </div>
  <div class="search-section">
    <div class="search-container w-container">
    <!-- Forms need fixing. Front end validations also required. Calendar dropdown to be implemented as well.  -->
      <div class="w-form">
        <form class="form-box" action="#/search" method="POST" data-name="Email Form" id="email-form" name="email-form">
          <label class="form-label" for="Location">Search for tours and adventures</label>
          <input class="location-input w-input" data-name="Location" id="Location" maxlength="256" name="Location" placeholder="Hunza Valley, Pakistan" type="text">
          <input class="date-from-field w-input datepicker_1" data-name="Date from" id="Date-from" maxlength="256" name="Date-from" placeholder="From" required="required" type="Date">
          <input class="date-to-field w-input datepicker_2" data-name="Date To" id="Date-To" maxlength="256" name="Date-To" placeholder="To" required="required" type="Date">
          <input class="search-button w-button" data-wait="Please wait..." type="submit" ng-click="displayData()" value="Search">
        </form>
      </div>
    </div>
    <div class="footer-div w-clearfix">
      <div class="copyright">Copyrights 2016&nbsp;Safarkhoush © &nbsp;All rights reserved</div><a class="footer-link" href="#/about">About</a><a class="footer-link" href="#">Contact</a><a class="footer-link" href="#">Privacy Policy</a><a class="footer-link" href="#">Terms of service</a>
      <ul class="social-icons-list w-list-unstyled">
        <li class="list-item-footer">
          <a class="w-inline-block" href="#"><img src="images/facebook-box.png" width="20">
          </a>
        </li>
        <li class="list-item-footer">
          <a class="w-inline-block" href="#"><img src="images/twitter-box.png" width="20">
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>

