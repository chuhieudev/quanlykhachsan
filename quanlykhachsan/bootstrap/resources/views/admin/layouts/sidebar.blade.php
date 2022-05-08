<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.room.index') }}" class="nav-link {{
                        Route::current()->getName() == 'admin.room.index'
                        || Route::current()->getName() == 'admin.room.create'
                        || Route::current()->getName() == 'admin.roomr.edit'
                        ? 'active': '' }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Quản Lý Phòng
                        </p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
