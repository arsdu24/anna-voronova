 <header id="velaHeader" class="velaHeader">
            <section class="headerWrap">
                <div class="velaHeaderMain headerMenu">
                    <div class="container">
                        <div class="headerContent rowFlex rowFlexMargin flexAlignCenter">
                            <div class="velaHeaderMobile hidden-lg hidden-xl hidden-md col-xs-3 col-sm-3">
                                <div class="menuBtnMobile d-flex flexAlignCenter">
                                    <div id="btnMenuMobile" class="btnMenuMobile">
                                        <span class="iconMenu"></span>
                                        <span class="iconMenu"></span>
                                        <span class="iconMenu"></span>
                                        <span class="iconMenu"></span>
                                    </div>
                                    <a class="velaSearchIcon" href="#velaSearchTop" data-toggle="collapse"
                                       title="Search">
                                        <i class="icons icon-magnifier"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="velaHeaderLeft d-flex flexAlignCenter col-xs-6 col-sm-6 col-md-2 col-lg-3">
                                <h1 class="velaLogo" itemscope itemtype="http://schema.org/Organization"><a href="{{route('home')}}"
                                                                                                            itemprop="url"
                                                                                                            class="velaLogoLink"
                                                                                                            style="width: 150px;"><span
                                            class="text-hide">velademo-rubix</span>


                                        <div class="p-relative">
                                            <div class="product-card__image" style="padding-top:18.461538461538463%;">
                                                <img class="product-card__img lazyload" src="{{asset('img/logo.png')}}"/>
                                            </div>
                                            <div class="placeholder-background placeholder-background--animation"
                                                 data-image-placeholder></div>
                                        </div>


                                    </a></h1>
                            </div>
                            <div
                                class="velaHeaderCenter velaMainmenu hidden-xs hidden-sm d-flex flexJustifyCenter col-xs-6 col-sm-8 col-lg-6 p-static">
                                <section id="velaMegamenu" class="velaMegamenu">
                                    <nav class="menuContainer">
                                        <ul class="nav hidden-xs hidden-sm">
                                            <li class="hasMenuDropdown active">
                                                    <a href="{{route('home')}}" title="Home">
                                                        <span>Home</span>
                                                    </a>                                        
                                                    <ul class="menuDropdown">

                                                         @include('components.list-link',['title'=>'Home 01','class'=>'' ,'href'=>"{{route('home')}}=94977327148"])
                                                         @include('components.list-link',['title'=>'Home 02','class'=>'' ,'href'=>"{{route('home')}}=96445497388"])
                                                         @include('components.list-link',['title'=>'Home 03','class'=>'' ,'href'=>"{{route('home')}}=96547930156"])
                                                         @include('components.list-link',['title'=>'Home 04','class'=>'' ,'href'=>"{{route('home')}}=96549371948"])
                                                         @include('components.list-link',['title'=>'Home 05','class'=>'' ,'href'=>"{{route('home')}}=96538427436"])
                                                         @include('components.list-link',['title'=>'Home 06','class'=>'' ,'href'=>"{{route('home')}}=96540786732"])

                                                    </ul>
                                            </li>        
                                            <li class="hasMenuDropdown hasMegaMenu">
                                                @include('blocks.shop-dropdown')
                                            </li>
                                            <li class="hasMenuDropdown hasMegaMenu">
                                                 @include('blocks.collections-dropdown')
                                            </li>

                                            <li class="">
                                                <a href="/blogs/news" title="">
                                                    <span>Blogs</span></a>
                                            </li>
                                            <li class="">
                                                <a href="/pages/contact-us" title="">
                                                    <span>Contact Us</span></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </section>
                            </div>
                            <div class="velaHeaderRight col-xs-3 col-sm-3 col-md-2 col-lg-3">


                                <div id="velaTopLinks" class="velaTopLinks d-flex flexAlignCenter">
                                    <a href="/client">
                                        <i class="icons icon-user"></i>
                                    </a>
                                 @if(Auth::check() && Auth::user()->role != 3)
                                       
                                    <ul class="list-unstyled list-inline hidden-xs hidden-sm hidden-md">
                                        <li><a class="" href="{{route('client')}}" >
                                            Account
                                      </a></li>
                                         <li><a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout</a></li>

                                    </ul>
                                        
                                        
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    
                                 @else
                                    <ul class="list-unstyled list-inline hidden-xs hidden-sm hidden-md">
                                        <li><a href="/login" id="customer_login_link">Login</a></li>
                                        <li><a href="/register/client" id="customer_register_link">Sign up</a></li>

                                    </ul>
                                 @endif
                                    
                                    
                                </div>


                                <a class="velaSearchIcon hidden-xs hidden-sm" href="#velaSearchTop"
                                   data-toggle="collapse" title="Search">
                                    <i class="icons icon-magnifier"></i>
                                </a>
                                <div class="velaCartTop"><a href="/cart" id="cartTop" class="jsDrawerOpenRight d-flex">
                                        <i class="icons icon-handbag"></i>
                                        <span class="text" id="CartCount">
                                        <span >
                                            @php
                                                 $cookie_data = stripslashes(Cookie::get('shopping_cart'));
                                                    $cart_data = json_decode($cookie_data, true);
                                                    $totalcart = count($cart_data);
                                            @endphp
                                            {{$totalcart}}
                                        </span></span>

                                    </a></div>
                            </div>
                            <div id="velaSearchTop" class="collapse">
                                <div class="text-center">
                                    <form id="velaSearchbox" class="formSearch" action="/search" method="get">
                                        <input type="hidden" name="type" value="product">
                                        <input class="velaSearch form-control" type="search" name="q" value=""
                                               placeholder="Enter keywords to search..." autocomplete="off"/>
                                        <button id="velaSearchButton" class="btnVelaSearch" type="submit">
                                            <i class="icons icon-magnifier"></i>
                                            <span class="btnSearchText">Search</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
