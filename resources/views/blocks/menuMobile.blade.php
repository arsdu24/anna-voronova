 <div id="velaMenuMobile" class="menuMobileContainer hidden-md hidden-lg">
            <div class="menuMobileWrapper">
                <div class="memoHeader">
                    <span>Menu Mobile</span>
                    <div class="btnMenuClose">&nbsp;</div>
                </div>
                <ul class="nav memoNav">

                    
                     
                   <li class="hasMemoDropdown active">
                                <a href="/" title="">Home</a>
                           
                     <span class="memoBtnDropdown collapsed" data-toggle="collapse" data-target="#memoDropdown11"><i
                                class="fa fa-angle-down"></i></span>
                         <ul id="memoDropdown11" class="memoDropdown collapse">
                         
                            @include('components.list-link',['title'=>'Home 01','class'=>'' ,'href'=>'/'])
                            @include('components.list-link',['title'=>'Home 02','class'=>'' ,'href'=>'/'])
                            @include('components.list-link',['title'=>'Home 03','class'=>'' ,'href'=>'/'])
                            @include('components.list-link',['title'=>'Home 04','class'=>'' ,'href'=>'/'])
                            @include('components.list-link',['title'=>'Home 05','class'=>'' ,'href'=>'/'])
                            @include('components.list-link',['title'=>'Home 06','class'=>'' ,'href'=>'/'])
                            
                         </ul>
                    </li>
                    
                    <li class="hasMemoDropdown">
                                <a href="/collections/all" title="">Shop</a>
                        <span class="memoBtnDropdown collapsed" data-toggle="collapse" data-target="#memoDropdown12"><i
                                class="fa fa-angle-down"></i></span>
                        <ul id="memoDropdown12" class="memoDropdown collapse">
                            <li class="hasMemoDropdown">
                                <a href="/collections" title="">Catalog</a>
                                <span class="memoBtnDropdown collapsed" data-toggle="collapse"
                                      data-target="#memoDropdown221"><i class="fa fa-angle-down"></i></span>
                                <ul id="memoDropdown221" class="memoDropdown collapse">
                                     @include('components.list-link',['title'=>'Furniture','class'=>'' ,'href'=>'/collections/furniture'])
                                     @include('components.list-link',['title'=>'Chairs','class'=>'' ,'href'=>'/collections/chairs'])
                                     @include('components.list-link',['title'=>'Sofas','class'=>'' ,'href'=>'/collections/sofas'])
                                     @include('components.list-link',['title'=>'Decor Art','class'=>'' ,'href'=>'/collections/decoration'])
                                     @include('components.list-link',['title'=>'Lighting Lamp','class'=>'' ,'href'=>'/collections/lighting-lamp'])
                                </ul>
                            </li>
                            <li class="hasMemoDropdown">
                                <a href="/collections/all" title="">Shop pages</a>
                                <span class="memoBtnDropdown collapsed" data-toggle="collapse"
                                      data-target="#memoDropdown222"><i class="fa fa-angle-down"></i></span>
                                <ul id="memoDropdown222" class="memoDropdown collapse">
                                     @include('components.list-link',['title'=>'Left sidebar','class'=>'' ,'href'=>'/collections/all'])
                                     @include('components.list-link',['title'=>'Collection List','class'=>'' ,'href'=>'/collections/decoration'])
                                     @include('components.list-link',['title'=>'Collection Grid','class'=>'' ,'href'=>'/collections/furniture'])
                                     @include('components.list-link',['title'=>'Full Width','class'=>'' ,'href'=>'/collections/frontpage'])
                                     @include('components.list-link',['title'=>'Full width 1','class'=>'' ,'href'=>'/collections/sofas'])
                                </ul>
                            
                            
                            <li class="hasMemoDropdown">
                                <a href="/products/arctander-chair" title="">Product Pages</a>
                                <span class="memoBtnDropdown collapsed" data-toggle="collapse"
                                      data-target="#memoDropdown223"><i class="fa fa-angle-down"></i></span>
                                    <ul id="memoDropdown223" class="memoDropdown collapse">
                                     @include('components.list-link',['title'=>'Product page 1','class'=>'' ,'href'=>"{{route('home')}}=94977327148"])
                                     @include('components.list-link',['title'=>'Product page 2','class'=>'' ,'href'=>"{{route('home')}}=96445497388"])
                                     @include('components.list-link',['title'=>'Product page 3','class'=>'' ,'href'=>"{{route('home')}}=96547930156"])
                                     @include('components.list-link',['title'=>'Product page 4','class'=>'' ,'href'=>"{{route('home')}}=96549371948"])
                                     @include('components.list-link',['title'=>'Product page 5','class'=>'' ,'href'=>"{{route('home')}}=96538427436"])
                                </ul>
                                
                            </li>
                        </ul>
                    </li>
                    @include('components.list-link',['title'=>'Collections','class'=>'' ,'href'=>'/collections'])
                    @include('components.list-link',['title'=>'Blogs','class'=>'' ,'href'=>'/blogs/news'])
                    @include('components.list-link',['title'=>'Contact Us','class'=>'' ,'href'=>'/pages/contact-us'])

                </ul>
            </div>
        </div>