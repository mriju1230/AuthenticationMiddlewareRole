<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"> 
                    <span>Main</span>
                </li>
                <li class="{{ Request::is('admin-panel') ? 'active' : '' }}"> 
                    <a href="{{ url('/admin-panel') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="#" class="{{ Request::is('admin') || Request::is('admin/create') ? 'active' : '' }}"><i class="fe fe-layout"></i> <span> Admin </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.index') }}" class="{{ Request::is('admin') ? 'link-active' : '' }}">All Admin </a></li>
                        <li><a href="{{ route('admin.create') }}" class="{{ Request::is('admin/create') ? 'link-active' : '' }}">Add New Admin</a></li>
                    </ul>
                </li>         
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->