<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"> 
                    <span>Main</span>
                </li>
                <li class="{{ Request::is('admin') ? 'active' : '' }}"> 
                    <a href="{{ url('/admin') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="#" class="{{ Request::is('admin') || Request::is('admin/create') ? 'active' : '' }}"><i class="fe fe-layout"></i> <span> Admin </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.index') }}" class="{{ Request::is('admin') ? 'link-active' : '' }}">All Admin </a></li>
                        <li><a href="{{ route('admin.create') }}" class="{{ Request::is('admin/create') ? 'link-active' : '' }}">Add New Admin</a></li>
                    </ul>
                </li>
                
                <li class="submenu">
                    <a href="#" class="{{ Request::is('role') || Request::is('role/create') ? 'active' : '' }}"><i class="fe fe-layout"></i> <span> Role </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('role.index') }}" class="{{ Request::is('role') ? 'link-active' : '' }}">All Role </a></li>
                        <li><a href="{{ route('role.create') }}" class="{{ Request::is('role/create') ? 'link-active' : '' }}">Add New Role</a></li>
                    </ul>
                </li>                
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->