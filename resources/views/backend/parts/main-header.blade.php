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
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <!-- The user image in the navbar-->
                    @if(Auth::user()->avatar_url)
                    <img src="{{ asset( Auth::user()->avatar_url) }}" class="user-image" alt="User Image">
                    @else
                    <img src="/images/avatar5.png" class="user-image" alt="User Image">
                    @endif
                    @if(Auth::user()->name)
                    <span class="hidden-xs">{{ ucfirst( Auth::user()->name ) }}</span>
                    @endif
                </a>
                <ul class="dropdown-menu">
                    <!-- The user image in the menu -->
                    <li class="user-header">
                        @if(Auth::user()->avatar_url)
                        <img src="{{ asset( Auth::user()->avatar_url) }}" class="img-circle" alt="User Image">
                        @else
                        <img src="/images/avatar5.png" class="img-circle" alt="User Image">
                        @endif
                        <p>
                            {{ ucfirst( Auth::user()->name ) }} - Web Developer
                            <small>Member since Nov. {{ Auth::user()->last_login_at }}</small>
                        </p>
                    </li>
                    <!-- Menu Body -->
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
                        <!-- /.row -->
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="{{ route('backend.users.profile')}}" class="btn btn-default btn-flat">Profile</a>
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
