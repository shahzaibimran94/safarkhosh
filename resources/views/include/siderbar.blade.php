            <style>
             .nav.side-menu>li.active>a {
              text-shadow: rgba(0,0,0,0.25) 0 -1px 0;
              background: linear-gradient(#db8323, #8a270f),#a94442;
              box-shadow: rgba(0,0,0,0.25) 0 1px 0, inset rgba(255,255,255,0.16) 0 1px 0;
            }
            .nav.side-menu>li.current-page, .nav.side-menu>li.active {
              border-right: 5px solid #b15319;
            }
            btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active, .open .dropdown-toggle.btn-success {
              background: #a94442;
            }
            .btn{
             background-color: #dd882c;
             border-color:#dd882c !important;
           }
           .btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active, .open .dropdown-toggle.btn-success {
            background: #91341e !important;
          }
        </style>
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <ul class="nav side-menu">
              <li><a href="{{url('home')}}"><i class="fa fa-home"></i>Dashboard</a></li>
              <li><a href="{{url('tours')}}"><i class="fa fa-rocket"></i>Tours</a></li>
              <li><a href="{{url('operators')}}"><i class="fa fa-users"></i>Tour Operators</a></li>
              <li><a><i class="fa fa-user"></i>Admin<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="{{url('addAdmin')}}">Add Admin</a></li>
                  <li><a href="{{url('viewAdmin')}}">View Admin</a></li>
                  <li><a href="{{url('Roleassign')}}">Assign Role</a></li>
                </ul>
              </li>
              <li><a><i class="fa fa-building-o"></i>User Managment <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="{{url('Useradd')}}">New User</a></li>
                  <li><a href="{{url('viewUser')}}">View User</a></li>
                </ul>
              </li>
              
              <li><a href="{{url('Index')}}"><i class="fa fa-plus"></i>Services</a></li>

              <li><a><i class="fa fa-cogs"></i>Gear<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="{{url('viewGear')}}">View Gears</a></li>
                  <li><a href="{{url('gearIndex')}}">Gear Category</a></li>
                  <li><a href="{{url('sellerIndex')}}">Seller</a></li>
                </ul>

              </li>

              <li><a href="{{ url('order') }}"><i class="fa fa-shopping-cart"></i>Orders</a></li>
              
              <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out"></i>Logout</a></li>

              <?php //echo $menu; ?>
            </ul>
          </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->

        <!-- /menu footer buttons -->
      </div>
    </div>


    <!-- top navigation -->
    <div class="top_nav">
      <div class="nav_menu">
        <nav>
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>

          <ul class="nav navbar-nav navbar-right">
            <li class="">
              <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

                <span class="fa fa-sign-out"></span>
              </a>
              <ul class="dropdown-menu dropdown-usermenu pull-right">

                <li>
                  <a href="{{ url('logout') }}">Logout</a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
        <!-- /top navigation -->