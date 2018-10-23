@php
    $nav = config('nav.main');
@endphp
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
        {{-- <div class="pull-left image">
            @if(Auth::user()->avatar_url)
                <img src="{{ asset( Auth::user()->avatar_url) }}" class="img-circle" alt="User Image">
            @else
            <img src="/images/avatar5.png" class="img-circle" alt="User Image">
            @endif
            
        </div>
        <div class="pull-left info">
            <p>{{ ucfirst( Auth::user()->name )}}</p>
            <!-- Status -->
            <a href="#">
                <i class="fa fa-circle text-success"></i> Online</a>
        </div> --}}
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul data-widget="tree" class="sidebar-menu tree">
            <li class="header">HEADER</li>
            <li class="active">
                <a href="#">
                    <i class="fa fa-tachometer-alt"></i> 
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fas fa-user"></i> 
                    <span>Profile</span> 
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#">View</a>
                    </li>
                    <li>
                        <a href="#">Edit</a>
                    </li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fas fa-cogs"></i> 
                    <span>Setting</span> 
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#">Style</a>
                    </li>
                </ul>
            </li>
        </ul>
    <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
