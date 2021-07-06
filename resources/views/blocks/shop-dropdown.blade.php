
                            <a href="/products" title="">
                              <span>Shop</span></a>
                        <a class="btnCaret hidden-xl hidden-lg hidden-md" data-toggle="collapse"
                            href="#megaDropdown21"></a>

                        <div id="megaDropdown21" class="menuDropdown megaMenu collapse">
                            <div class="menuGroup row">

                                <div class="col-sm-5">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4">
                                            <ul class="velaMenuLinks">
                                             @include('components.list-link',['title'=>'Categories','class'=>'menuTitle' ,'href'=>"/collections"])
                                             @include('components.list-link',['title'=>'Furniture','class'=>'' ,'href'=>'/collections/furniture'])
                                             @include('components.list-link',['title'=>'Chairs','class'=>'' ,'href'=>'/collections/chairs'])
                                             @include('components.list-link',['title'=>'Sofas','class'=>'' ,'href'=>'/collections/sofas'])
                                             @include('components.list-link',['title'=>'Decor Art','class'=>'' ,'href'=>'/collections/decoration'])
                                             @include('components.list-link',['title'=>'Lighting Lamp','class'=>'' ,'href'=>'/collections/lighting-lamp'])
                                               

                                            </ul>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <ul class="velaMenuLinks">

                                             @include('components.list-link',['title'=>'Shop pages','class'=>'menuTitle' ,'href'=>'/collections/all'])
                                             @include('components.list-link',['title'=>'Left sidebar','class'=>'' ,'href'=>'/collections/all'])
                                             @include('components.list-link',['title'=>'Collection List','class'=>'' ,'href'=>'/collections/decoration'])
                                             @include('components.list-link',['title'=>'Collection Grid','class'=>'' ,'href'=>'/collections/furniture'])
                                             @include('components.list-link',['title'=>'Full Width','class'=>'' ,'href'=>'/collections/frontpage'])
                                             @include('components.list-link',['title'=>'Full width 1','class'=>'' ,'href'=>'/collections/sofas'])

                                            </ul>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            
                                            <ul class="velaMenuLinks">

                                            @include('components.list-link',['title'=>'Product pages','class'=>'menuTitle' ,'href'=>"/products/arctander-chair"])
                                            @include('components.list-link',['title'=>'Product page 1','class'=>'' ,'href'=>"{{route('home')}}=94977327148"])
                                            @include('components.list-link',['title'=>'Product page 2','class'=>'' ,'href'=>"{{route('home')}}=96445497388"])
                                            @include('components.list-link',['title'=>'Product page 3','class'=>'' ,'href'=>"{{route('home')}}=96547930156"])
                                            @include('components.list-link',['title'=>'Product page 4','class'=>'' ,'href'=>"{{route('home')}}=96549371948"])
                                            @include('components.list-link',['title'=>'Product page 5','class'=>'' ,'href'=>"{{route('home')}}=96538427436"])

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="velaMenuProducts">
                                        <div class="menuTitle"><span>New Products</span></div>
                                        <div class="listProduct">

                                             @include('components.block-pro-menu',['href'=>'victo-pedant-lamp','img'=>'14_{width}x.jpg?v=1586245038','title'=>'Victo pedant lamp','price'=>'$79.00'])
                                             @include('components.block-pro-menu',['href'=>'turning-table','img'=>'30_{width}x.jpg?v=1586316781','title'=>'Turning Table','price'=>'$59.00'])

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="velaMenuHtml">

                                        <div class="htmlContent mb10">
                                            <img
                                                src="//cdn.shopify.com/s/files/1/0376/9440/6700/files/banner4.jpg?v=1585764170"
                                                alt="velademo-rubix" class="responsive">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="velaMenuBanner mb10">
                                        <a href="/collections/chairs">
                                            <div class="p-relative">
                                                <div class="product-card__image"
                                                        style="padding-top:133.33333333333334%;">
                                                    <img class="product-card__img lazyload"
                                                            data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/files/banner3_{width}x.jpg?v=1585764161"
                                                            data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                                                            data-aspectratio="0.75"
                                                            data-ratio="0.75"
                                                            data-sizes="auto" alt=""/>
                                                </div>
                                                <div
                                                    class="placeholder-background placeholder-background--animation"
                                                    data-image-placeholder></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      