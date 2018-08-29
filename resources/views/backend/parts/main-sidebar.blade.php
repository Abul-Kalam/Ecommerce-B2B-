@php
    $nav = config('nav.main');
@endphp
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="/images/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Alexander Pierce</p>
            <!-- Status -->
            <a href="#">
                <i class="fa fa-circle text-success"></i> Online</a>
        </div>
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
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        @foreach ($nav as $item)
            @if ($item['type'] === 'single')
                <li class="{{ $item['active'] ? 'active' : '' }}">
                    <a href="{{ route($item['route']) }}">
                        <i class="{{ $item['icon_class'] }}"></i>
                        <span>{{ $item['label'] }}</span>
                    </a>
                </li>
            @elseif ($item['type'] === 'menu')
                <li class="treeview">
                    <a href="#">
                        <i class="{{ $item['icon_class'] }}"></i>
                        <span>{{ $item['label'] }}</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        @foreach ($item['childs'] as $citem)
                        <li>
                            <a href="{{ route($citem['route']) }}">{{ $citem['label'] }}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
            @endif
        @endforeach
    </ul>
    <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
