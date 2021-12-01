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
                                            class="text-hide">{{$site->company_name}}</span>


                                        <div class="p-relative">
                                            <div class="product-card__image" style="padding-top:18.461538461538463%;">
                                                <img class="product-card__img lazyload" src="{{asset('img/'.$site->full_logo)}}"/>
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
                                            <li id="home">
                                                    <a href="{{route('home')}}" title="Home">
                                                        <span>Home</span>
                                                    </a>                                        
                                            </li>        
                                            <li id="shop" class="hasMenuDropdown hasMegaMenu">
                                                @include('blocks.shop-dropdown')
                                            </li>
                                            <li  id="collection" class="hasMenuDropdown hasMegaMenu">
                                                 @include('blocks.collections-dropdown')
                                            </li>

                                            <li id="blog">
                                                <a href="/blog" title="">
                                                    <span>Blogs</span></a>
                                            </li>
                                            <li id="contact">
                                                <a href="/contact-us" title="">
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
                                 
                                    <ul class="list-unstyled list-inline hidden-xs hidden-md">
                                        <li><a href="/login" id="customer_login_link">Login</a></li>
                                        <li><a href="/register/client" id="customer_register_link">Sign up</a></li>

                                    </ul>
                                    <div class="dropdown visible-md ml30">
                                        <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Auth
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <div class="mb30 ml30 mt30"><a href="/login">Login</a></div>
                                                <div class="mb30 ml30 mt30"><a href="/register/client">Sign up</a></div>
                                        </div>
                                      </div>
                                   
                                 @endif
                                
                                    
                                </div>
                               

                                <a class="velaSearchIcon hidden-xs hidden-sm" href="#velaSearchTop"
                                   data-toggle="collapse" title="Search">
                                    <i class="icons icon-magnifier"></i>
                                </a>
                                <div class="velaCartTop"><a href="/cart" id="cartTop" class="jsDrawerOpenRight d-flex">
                                        <i class="icons icon-handbag"></i>
                                        <span class="text">
                                        <span id="CartCount">
                                            @isset($cart)
                                           @if($cart) 
                                           {{$cart->items()->count()}}
                                           @else
                                           0
                                           @endif
                                           @endisset
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
                                        <ul class="velaAjaxSearch" style="display: none;">
                                        @if(isset($search) && $search->count()>0)
                                       
                                         
                                            @foreach ($search as $item)
                                                <li>
                                                        @if($_GET['type']=='product')
                                                        <a href="/products/{{$item->id}}">
                                                        <span class="searchProductImage" >
                                                           
                                                            <img src="{{asset('img/'.unserialize($item->thumbnail)[0])}}" class="search_img">
                                                        </span>
                                                        <span class="searchProductTitle">
                                                           {{$item->name}}
                                                        </span>
                                                        </a>
                                                        @else
                                                        <a href="/blog/article/{{$item->slug}}">
                                                            <span class="searchProductImage" >
                                                            
                                                                <img src="{{asset('img/'.$item->thumbnail)}}" class="search_img">
                                                            </span>
                                                            <span class="searchProductTitle">
                                                            {{$item->title}}
                                                            </span>
                                                        </a>
                                                        @endif
                                                </li>
                                            @endforeach
                                            <li>
                                            <button class="searchViewAll" type="submit">
                                                <span class="btnSearchText">See all results ({{$results->count()}})</span>
                                            </button>
                                            </li>
                                        @else
                                                <li>
                                                    <span class="searchProductTitle"> Not found </span>
                                                </li>
                                        @endif
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <script>
            $(document).ready(function(){
            var title = document.title;
            if(title == "Home")console.log('ff');
            switch(title){
                case "Home":$('#home').addClass('active');break;
                case "Shop":$('#shop').addClass('active');break;
                case "Collections":$('#collection').addClass('active');break;
                case "Blog":$('#blog').addClass('active');break;
                case "Contact us":$('#contact').addClass('active');break;

            }});
         </script>

