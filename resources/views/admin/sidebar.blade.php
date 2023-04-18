 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('site.index') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Admin </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    @canany(['category-list','category-create','category-edit','category-delete'])
        <!-- Nav Item - Pages Category Menu -->
        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
                aria-expanded="true" aria-controls="collapseCategory">
                <i class="fas fa-fw fa-cog"></i>
                <span>Category</span>
            </a>
            <div id="collapseCategory" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.categories.index') }}">All Category</a>
                    <a class="collapse-item" href="{{ route('admin.categories.create') }}">Add Category</a>
                    <a class="collapse-item" href="{{ route('admin.categories.trash') }}">Trash</a>
                </div>
            </div>
        </li>
    @endcanany

    @canany(['slider-list','slider-create','slider-edit','slider-delete'])
        <!-- Nav Item - Pages Slider Menu -->
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSlider"
                aria-expanded="true" aria-controls="collapseSlider">
                <i class="fas fa-fw fa-cog"></i>
                <span>Slider</span>
            </a>
            <div id="collapseSlider" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.sliders.index') }}">All Slider</a>
                    <a class="collapse-item" href="{{ route('admin.sliders.create') }}">Add Slider</a>
                    <a class="collapse-item" href="{{ route('admin.sliders.trash') }}">Trash</a>
                </div>
            </div>
        </li>
    @endcanany

    @canany(['product-list','product-create','product-edit','product-delete'])
        <!-- Nav Item - Pages Product Menu -->
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct"
                aria-expanded="true" aria-controls="collapseProduct">
                <i class="fas fa-fw fa-cog"></i>
                <span>Product</span>
            </a>
            <div id="collapseProduct" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.products.index') }}">All Product</a>
                    <a class="collapse-item" href="{{ route('admin.products.create') }}">Add Product</a>
                    <a class="collapse-item" href="{{ route('admin.products.trash') }}">Trash</a>
                </div>
            </div>
        </li>
    @endcanany


    @canany(['client-list','client-create','client-edit','client-delete'])
        <!-- Nav Item - Pages Client Menu -->
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClient"
                aria-expanded="true" aria-controls="collapseClient">
                <i class="fas fa-fw fa-cog"></i>
                <span>Client</span>
            </a>
            <div id="collapseClient" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.clients.index') }}">All Client</a>
                    <a class="collapse-item" href="{{ route('admin.clients.create') }}">Add Client</a>
                </div>
            </div>
        </li>
    @endcanany

    @canany(['role-list','role-create','role-edit','role-delete'])
        <!-- Nav Item - Pages Role Menu -->
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRole"
                aria-expanded="true" aria-controls="collapseRole">
                <i class="fas fa-fw fa-cog"></i>
                <span>Role</span>
            </a>
            <div id="collapseRole" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.roles.index') }}">All Role</a>
                    <a class="collapse-item" href="{{ route('admin.roles.create') }}">Add Role</a>
                </div>
            </div>
        </li>
    @endcanany

    @canany(['user-list','user-create','user-edit','user-delete'])
         <!-- Nav Item - Pages User Menu -->
         <hr class="sidebar-divider my-0">
         <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
                 aria-expanded="true" aria-controls="collapseUser">
                 <i class="fas fa-fw fa-cog"></i>
                 <span>User</span>
             </a>
             <div id="collapseUser" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <a class="collapse-item" href="{{ route('admin.users.index') }}">All User</a>
                     <a class="collapse-item" href="{{ route('admin.users.create') }}">Add User</a>
                 </div>
             </div>
         </li>
    @endcanany

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
