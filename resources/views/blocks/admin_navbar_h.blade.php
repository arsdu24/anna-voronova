<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" id="search" type="search" autocomplete="off" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
              <ul class="nav nav-pills nav-sidebar flex-column search-result w-100" style="display: none;">
                  @if(isset($result))
                     @foreach ($result as $key=>$item)
              <li class="nav-item">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle w-100" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   {{$key}}
                  </button>
                    <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                        @foreach($item as $result)
                          @if($key == 'Products')
                                <a class="dropdown-item" href="/admin/product-list/{{$result->id}}" >
                                    <i class="far fa-circle nav-icon"></i>
                                      <span class="searchProductImage" >
                                          @if($key == 'Products')
                                            <img src="{{asset('img/'.unserialize($result->thumbnail)[0])}}" class="search_img">
                                          @endif
                                      </span>
                                      <span class="searchProductTitle">
                                        {{$result->name}}
                                      </span>
                                </a>
                              
                            @elseif($key == 'Orders')
                              <a class="dropdown-item" href="/admin/orders-list/{{$result->id}}">
                                <i class="far fa-circle nav-icon"></i>
                                  <span class="searchProductImage" >
                                    {{$result->id}}
                                  </span>
                                  <span class="searchProductTitle">
                                    {{$result->serial_number}}
                                  </span>
                                  <span class="searchProductTitle">
                                    {{$result->status}}
                                  </span>
                                  <span class="searchProductTitle">
                                    {{$result->contact}}
                                  </span>
                                  <span class="searchProductTitle">
                                    {{$result->quantity}}
                                  </span>
                              </a>
                            @else
                                @if($key == 'Categories')<a class="dropdown-item" href="/admin/categories-list/{{$result->id}}">
                                @else <a class="dropdown-item" href="/admin/blogs/{{$result->id}}">
                                @endif
                                <i class="far fa-circle nav-icon"></i>
                                  <span class="searchProductImage" >
                                      <img src="{{asset('img/'.$result->thumbnail)}}" class="search_img">
                                  </span>
                                  <span class="searchProductTitle">
                                    {{$result->title}}
                                  </span>
                              </a>
                            @endif
                          @endforeach
                        </div>
                  </div>
                  </li>
                      @endforeach
                     
                  @else
                          <li>
                              <span class="searchProductTitle"> Not found </span>
                          </li>
                  @endif
                  
                  </ul>
            </div>
          </form>
        </div>
      </li>

    
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i>
          <p class="d-lg-none d-md-block">
            Account
          </p>
        <div class="ripple-container"></div></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="#">Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/logout" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
         Log out</a>
         <form id="logout-form" action="/logout" method="POST" style="display: none;">
          @csrf</form>
        </div>
      </li>
    </ul>
    
  </nav>
  <!-- /.navbar -->