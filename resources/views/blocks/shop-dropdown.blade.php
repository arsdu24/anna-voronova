
                            <a href="/products" title="">
                              <span>Shop</span></a>
                        <a class="btnCaret hidden-xl hidden-lg hidden-md" data-toggle="collapse"
                            href="#megaDropdown21"></a>

                        <div id="megaDropdown21" class="menuDropdown megaMenu collapse">
                            <div class="menuGroup row">

                                <div class="col-sm-2 ml30 ">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-5 d-flex justify-content-center">
                                            <ul class="velaMenuLinks p-2">
                                                @include('components.list-link',['title'=>'Categories','class'=>'menuTitle ml30' ,'href'=>"/collections"])
                                                 @foreach($menu_categories as $category)
                                                  @include('components.list-link',['title'=>$category->name,'class'=>'ml30' ,'href'=>'/collections/'.$category->id])
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5 ">
                                    <div class="velaMenuProducts">
                                        <div class="menuTitle"><span>New Products</span></div>
                                        <div class="listProduct rowFlex">
                                             @foreach($menu_products as $product)
                                                 @include('components.block-pro-menu',['href'=>$product->id,'img'=>unserialize($product->thumbnail)[0],'title'=>$product->name, 'price'=>$product->price])
                                             @endforeach
                                            
                                             
                                             
                                        </div>
                                        
                                    </div>
                                </div>
                                @foreach($menu_collections as $collection)
                                <div class="col-sm-2 ml30">
                                    <div class="velaMenuBanner mb10">
                                        <a href="/collections/{{$collection->id}}">
                                            <div class="p-relative">
                                                <div class="product-card__image"
                                                        style="padding-top:133.33333333333334%;">
                                                    <img class="product-card__img lazyload"
                                                            data-src="img/{{$collection->thumbnail}}"
                                                            data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                                                            data-aspectratio="0.75"
                                                            data-ratio="0.75"
                                                            data-sizes="auto" alt=""/>
                                                </div>
                                                <p>{{$collection->title}}</p>
                                                <div
                                                    class="placeholder-background placeholder-background--animation"
                                                    data-image-placeholder></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                      