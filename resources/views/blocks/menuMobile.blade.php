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
                                <a href="/collections/all" title="">Shop</a>
                        <span class="memoBtnDropdown collapsed" data-toggle="collapse" data-target="#memoDropdown12"><i
                                class="fa fa-angle-down"></i></span>
                        <ul id="memoDropdown12" class="memoDropdown collapse">
                            <li class="hasMemoDropdown">
                                     @include('components.list-link',['title'=>'Furniture','class'=>'' ,'href'=>'/collections/furniture'])
                                     @include('components.list-link',['title'=>'Chairs','class'=>'' ,'href'=>'/collections/chairs'])
                                     @include('components.list-link',['title'=>'Sofas','class'=>'' ,'href'=>'/collections/sofas'])
                                     @include('components.list-link',['title'=>'Decor Art','class'=>'' ,'href'=>'/collections/decoration'])
                                     @include('components.list-link',['title'=>'Lighting Lamp','class'=>'' ,'href'=>'/collections/lighting-lamp'])
                            </li>
                        </ul>
                    </li>
                    @include('components.list-link',['title'=>'Collections','class'=>'' ,'href'=>'/collections'])
                    @include('components.list-link',['title'=>'Blogs','class'=>'' ,'href'=>'/blogs/news'])
                    @include('components.list-link',['title'=>'Contact Us','class'=>'' ,'href'=>'/pages/contact-us'])

                </ul>
            </div>
        </div>