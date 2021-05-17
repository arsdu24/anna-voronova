 <div id="velaMenuMobile" class="menuMobileContainer hidden-md hidden-lg">
            <div class="menuMobileWrapper">
                <div class="memoHeader">
                    <span>Menu Mobile</span>
                    <div class="btnMenuClose">&nbsp;</div>
                </div>
                <ul class="nav memoNav">
                    <x-listLink title="Home" class="hasMemoDropdown active" href="/">
                         <span class="memoBtnDropdown collapsed" data-toggle="collapse" data-target="#memoDropdown11"><i
                                class="fa fa-angle-down"></i></span>
                         <ul id="memoDropdown11" class="memoDropdown collapse">
                            <x-listLink title="Home 01" class="" href="{{route('home')}}=94977327148"/>
                            <x-listLink title="Home 02" class="" href="{{route('home')}}=96445497388"/>
                            <x-listLink title="Home 03" class="" href="{{route('home')}}=96547930156"/>
                            <x-listLink title="Home 04" class="" href="{{route('home')}}=96549371948"/>
                            <x-listLink title="Home 05" class="" href="{{route('home')}}=96538427436"/>
                            <x-listLink title="Home 06" class="" href="{{route('home')}}=96540786732"/>
                         </ul>
                    </x-listLink>
                    <x-listLink title="Shop" class="hasMemoDropdown" href="/collections/all">
                        <span class="memoBtnDropdown collapsed" data-toggle="collapse" data-target="#memoDropdown12"><i
                                class="fa fa-angle-down"></i></span>
                        <ul id="memoDropdown12" class="memoDropdown collapse">
                            <x-listLink  title="Catalog"  class="hasMemoDropdown" href="/collections">
                                <span class="memoBtnDropdown collapsed" data-toggle="collapse"
                                      data-target="#memoDropdown221"><i class="fa fa-angle-down"></i></span>
                                <ul id="memoDropdown221" class="memoDropdown collapse">
                                     <x-listLink title="Furniture" class="" href="/collections/furniture"/>
                                     <x-listLink title="Chairs" class="" href="/collections/chairs"/>
                                     <x-listLink title="Sofas" class="" href="/collections/sofas"/>
                                     <x-listLink title="Decor Art" class=""  href="/collections/decoration"/>
                                     <x-listLink title="Lighting Lam" class="" href="/collections/lighting-lamp"/>
                                </ul>
                           </x-listLink>
                           <x-listLink  title="Shop pages"  class="hasMemoDropdown" href="/collections/all">
                                <span class="memoBtnDropdown collapsed" data-toggle="collapse"
                                      data-target="#memoDropdown222"><i class="fa fa-angle-down"></i></span>
                                <ul id="memoDropdown222" class="memoDropdown collapse">
                                     <x-listLink title="Left sidebar" class="" href="/collections/all"/>
                                     <x-listLink title="Collection List" class="" href="/collections/decoration"/>
                                     <x-listLink title="Collection Grid" class=""  href="/collections/furniture"/>
                                     <x-listLink title="Full Width" class="" href="/collections/frontpage"/>
                                     <x-listLink title="Full width 1" class="" href="/collections/sofas"/>
                                </ul>
                            </x-listLink>
                            <x-listLink title="Product Pages" class="hasMemoDropdown" href="/products/arctander-chair">
                                <span class="memoBtnDropdown collapsed" data-toggle="collapse"
                                      data-target="#memoDropdown223"><i class="fa fa-angle-down"></i></span>
                                    <ul id="memoDropdown223" class="memoDropdown collapse">
                                         <x-listLink title="Product page 1" class="" href="{{route('home')}}=94977327148"/>
                                         <x-listLink title="Product page 2" class="" href="{{route('home')}}=96445497388"/>
                                         <x-listLink title="Product page 3" class="" href="{{route('home')}}=96547930156"/>
                                         <x-listLink title="Product page 4" class="" href="{{route('home')}}=96549371948"/>
                                         <x-listLink title="Product page 5" class="" href="{{route('home')}}=96538427436"/>
                                </ul>
                                
                            </x-listLink>
                        </ul>
                    </x-listLink>
                    <x-listLink title="Collections" class="" href="/collections"/>
                    <x-listLink title="Blogs" class="" href="/blogs/news"/>
                    <x-listLink title="Contact Us" class="" href="/pages/contact-us"/>
                </ul>
            </div>
        </div>