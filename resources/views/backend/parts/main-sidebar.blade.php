@php
    $nav = config('nav.main');
@endphp
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
        <div class="pull-left image">
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
        </div>
    </div>

    <!-- search form (Optional) -->
    {{-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form> --}}
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
        {{-- <li class="header">HEADER</li> --}}
        @foreach ($nav as $item)
            @if ($item['type'] === 'single'))
                @permission($item['permissions'])
                <li class="{{ $item['slug'] === $activePrimary ? 'active' : '' }}">
                    <a href="{{ route($item['route']) }}">
                        <i class="{{ $item['icon_class'] }}"></i>
                        <span>{{ $item['label'] }}</span>
                    </a>
                </li>
                @endpermission
            @elseif ($item['type'] === 'menu')
                @permission($item['permissions'])
                <li class="treeview {{ $item['slug'] === $activePrimary ? 'active menu-open' : '' }}">
                    <a href="#">
                        <i class="{{ $item['icon_class'] }}"></i>
                        <span>{{ $item['label'] }}</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        @foreach ($item['childs'] as $citem)
                        @permission($citem['permissions'])
                        <li class="{{ $citem['slug'] === $activeSecondary ? 'active' : '' }}">
                            <a href="{{ route($citem['route']) }}">{{ $citem['label'] }}</a>
                        </li>
                        @endpermission
                        @endforeach
                    </ul>
                </li>
                @endpermission
            @endif
        @endforeach
    </ul>
    <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
