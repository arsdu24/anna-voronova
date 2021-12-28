 <div id="velaMenuMobile" class="menuMobileContainer hidden-md hidden-lg">
            <div class="menuMobileWrapper">
                <div class="memoHeader">
                    <span>Menu Mobile</span>
                    <div class="btnMenuClose">&nbsp;</div>
                </div>
                <ul class="nav memoNav">
                   <li class="active">
                                <a href="/" title="">Home</a>
                    </li>
                    
                    <li class="hasMemoDropdown">
                                <a href="/products" title="">Shop</a>
                        <span class="memoBtnDropdown collapsed" data-toggle="collapse" data-target="#memoDropdown12"><i
                                class="fa fa-angle-down"></i></span>
                        <ul id="memoDropdown12" class="memoDropdown collapse">
                            <li class="hasMemoDropdown">
                                    @foreach($menu_categories as $category)
                                     @include('components.list-link',['title'=>$category->name,'class'=>'ml30' ,'href'=>'/products?category='.$category->name])
                                   @endforeach
                            </li>
                        </ul>
                    </li>
                    @include('components.list-link',['title'=>'Collections','class'=>'' ,'href'=>'/collections'])
                    @include('components.list-link',['title'=>'Blogs','class'=>'' ,'href'=>'/blog'])
                    @include('components.list-link',['title'=>'Contact Us','class'=>'' ,'href'=>'/contact-us'])
                    <li>
                        <a href="/client">
                            <i class="icons icon-user"></i> Account
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
                        <ul class="list-unstyled list-inline">
                            <li><a href="/login" id="customer_login_link">Login /</a></li>
                            <li><a href="/register/client" id="customer_register_link">Sign up</a></li>

                        </ul>
                     @endif                
                    </li>
                </ul>
            </div>
        </div>