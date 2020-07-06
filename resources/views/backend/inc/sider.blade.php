<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="{{asset('backend/images/faces/face8.jpg')}}" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">Allen Moreno</p>
                    <p class="designation">Premium user</p>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">Main Menu</li>
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Product</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('add.product') }}">Add Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product.index') }}">Show Product</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ request()->is('admin/category/*') ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category.add') }}">Add Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category.index') }}">Show Category</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ request()->is('admin/brand/*') ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Brand</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('brand.add') }}">Add Brand </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('brand.index') }}">Show Brand </a>
                    </li>

                </ul>
            </div>
        </li>
           <li class="nav-item {{ request()->is('admin/division/*') ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#division" aria-expanded="false" aria-controls="division">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Manage Divsion</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="division">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('division.add') }}">Add Division </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('division.index') }}">Show Division </a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="nav-item {{ request()->is('admin/division/*') ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#distric" aria-expanded="false" aria-controls="distric">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Manage Distric</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="distric">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('division.add') }}">Add Distric </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('division.index') }}">Show Distric </a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Form elements</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Charts</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Tables</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/icons/font-awesome.html">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Icons</span>
            </a>
        </li>
    </ul>
</nav>
