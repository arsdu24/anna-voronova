<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu active pcoded-trigger">
                <a href="{{route('admin')}}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </ul>     
        <div class="pcoded-navigatio-lavel">Pages</div>
        <ul class="pcoded-item pcoded-left-item">
            
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-shopping-cart"></i></span>
                    <span class="pcoded-mtext">Products</span>
                </a>
                <ul class="pcoded-submenu">
                    @include('components.sidebar_link',['title'=>'Product List'])
                    @include('components.sidebar_link',['title'=>'Product Edit'])
                    @include('components.sidebar_link',['title'=>'Product Detail'])
                    @include('components.sidebar_link',['title'=>'Product Card'])
                </ul>
            </li>
        </ul>
    </div>
</nav>