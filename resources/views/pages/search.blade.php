<section class="search-holder">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 col-xs-6 relative">
          <p>Select Activity</p>
          <div class="form-group">
            <div class="select-holder">
              <select class="form-control">
                <option>Select Activities</option>
              </select>
            </div>
          </div>
          <a href="">Looking for a specific event?</a>
        </div>
        <div class="col-md-3 col-xs-6 relative">
          <p>Date Range</p>
          <div class="row mrbt10">
            <div class="col-md-3">
              <label> <small> From </small></label>
            </div>
            <div class="col-md-9">
              <input type="Date" value="" id="StartDate" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <label> <small> To </small></label>
            </div>
            <div class="col-md-9">
              <input type="Date" value="" id="EndDate" class="form-control">
            </div>
          </div>
        </div>
        <div class="col-md-2 col-xs-6 relative">
          <p>Price Range</p>
          <p class="blue-text"> <strong> Rs. 1,000 - Rs. 150,000 </strong></p>
          <div class="form-group range range-info">
            <input type="range" name="range" min="1" max="100" value="50" onchange="range.value=value">
            <output id="range">50</output>
          </div>
        </div>
        <div class="col-md-3 col-xs-6 relative arrow-holder">
          <p>Number of persons</p>
          <div class="form-group quantity">
            <input type="number" class="form-control" placeholder="12"  min="1" max="9" step="1" value="1">
          </div>
          <a href="">Not Sure?</a>
        </div>
        <div class="col-md-2 col-xs-6 text-center">
          <p>Matching Results</p>
          <h4 class="green-text"><strong></strong></h4>
          <button class="btn btn-success">Filter Search</button>
        </div>
      </div>
    </div>
  </section>
  <section class="container-fix">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
          <input type="text" class="form-control" placeholder="Search">
          <button type="button" class="btn btn-success">
            <span class="glyphicon glyphicon-search"></span>
          </button>
      </div>
     
    </div>
  </div>
  </section>

  <section class="bg-gray">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <h1 class="blue-text"> Results Found</h1>
        </div>
      </div>

       <div class="row" ng-init="displayData()">

        <div class="col-md-12">
          <div class="box-card">
          	
            <div class="row" ng-repeat="x in tours">
              <div class="col-md-3">
                <div class="image-holder">
                  <img src="images">
                </div>
              </div>
              <div class="col-md-4">
                <input type="hidden"  >
                <h2 class="blue-text"></h2>
                <span class="blue-text"></span>
                <p></p>
                <span class="tags"></span><span class="tags"></span>
              </div>
              <div class="col-md-2">
                <table class="table">
                  <tbody>
                    <tr>
                      <td><i class="iconSearch icon-1"></i></td>
                      <td>SECURITY</td>
                      <td>9.0</td>
                    </tr>
                    <tr>
                      <td><i class="iconSearch icon-2"></i></td>
                      <td>VALUE</td>
                      <td>10</td>
                    </tr>
                    <tr>
                      <td><i class="iconSearch icon-3"></i></td>
                      <td>STAFF</td>
                      <td>9.0</td>
                    </tr>
                    <tr>
                      <td><i class="iconSearch icon-4"></i></td>
                      <td>FACILITIES</td>
                      <td>10</td>
                    </tr>
                    <tr>
                      <td><i class="iconSearch icon-5"></i></td>
                      <td>FUN</td>
                      <td>9.0</td>
                    </tr>
                    <tr>
                      <td><i class="iconSearch icon-6"></i></td>
                      <td> <span class="blue-text"> AVG. RATING </span></td>
                      <td><span class="blue-text"> 9.5 </span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-3 text-center">
                <div class="box-right">
                  <h3>Rs.</h3>
                  <p>per person</p>
                  <button class="btn btn-success"><a href="/#/trip/1">Trip Details</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
</section>
