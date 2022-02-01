<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="user-panel mt-3 d-flex">
    <a href="/admin" class="brand-link ">
      <img src="{{asset('img/'.$site->short_logo)}}" alt="{{$site->company_name}}" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{$site->company_name}}</span>
    </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a class="d-block">{{$user->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="/admin" class="nav-link active">
              <i class="fas fa-table"></i>
     <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link">
                <i class="fas fa-shopping-bag"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('productList')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
               <i class="fa fa-list-alt" aria-hidden="true"></i>
              <p>
                Collections
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('collectionsList')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collections List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('Categories')}}" class="nav-link">
              <i class="fas fa-tag"></i>
              <p>
                Categories
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('ordersList')}}" class="nav-link">
              <i class="fas fa-shopping-basket"></i>
              <p>
                Orders
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('Sliders')}}" class="nav-link">
              <i class="fas fa-bookmark"></i>
              <p>
                Sliders
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('Banners')}}" class="nav-link">
              <i class="fab fa-elementor"></i>
              <p>
                Banners
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
               <i class="fa fa-list-alt" aria-hidden="true"></i>
              <p>
                Blog
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin_blogs')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Articles List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('articleCategories')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('articleTags')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tags List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('SubscribersList')}}" class="nav-link">
              <i class="fas fa-user"></i>
              <p>Newsletter/Subscribers</p>
            </a>
            <a href="{{route('Newsletter')}}" class="nav-link">
              <i class="fas fa-newspaper"></i>
              <p>
                Newsletter Section
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('settingsForm')}}" class="nav-link">
              <i class="fas fa-cog"></i>
              <p>Settings</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>