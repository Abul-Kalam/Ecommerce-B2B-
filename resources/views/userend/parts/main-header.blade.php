<!-- Logo -->
<a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">
        <b>N</b>j</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">
        <b>N</b>ijhum</span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
                
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   
                   
                   
                  
                    <img src="/images/avatar5.png" class="user-image" alt="User Image">
                
                   
                    <span class="hidden-xs">shahriar</span>
                   
                </a>
                <ul class="dropdown-menu">
                    
                    <li class="user-header">
                   
                        <img src="/images/avatar5.png" class="img-circle" alt="User Image">
                      
                        <p>
                            shahriar - Web Developer
                            <small>Member since Nov.</small>
                        </p>
                    </li>
                   
                    <li class="user-body">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Sales</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Friends</a>
                            </div>
                        </div>
                       
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                            {{--  <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>  --}}

                            <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">{{ __('Sign Out') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
                <a href="#" data-toggle="control-sidebar">
                    <i class="fa fa-gears"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
