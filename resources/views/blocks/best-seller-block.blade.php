  <div id="shopify-section-1585935530141" class="shopify-section velaFramework">
            <div class="productListHome velaProducts mbBlockGutter" style="background-color: rgba(0,0,0,0);
                                     padding:0 0 20px; ">
                <div class="container">
                    <div class="sectionInner ">


                         @include('components.heading-group',['title'=>'Best Seller Products', 'subtitle'=>'Top sale in this week'])


                        <div class="velaContent">
                            <div class="rowFlex rowFlexMargin">
                                @foreach($bestseller as $product)
                                <div class="col-sp-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="velaProBlock grid " data-price="39.00">
                                        <div class="velaProBlockInner">
                                            <div class="proHImage d-flex flexJustifyCenter">
                                                @if(!$product->sale_price)
                                                  @endif
                                                    <a class="proFeaturedImage" href="/products/{{$product->id}}">
                                                        <div class="wrap ">
                                                            <div class="p-relative">
                                                                <div class="product-card__image"
                                                                     style="padding-top:124.25%;">
                                                                    <img class="product-card__img lazyload" src="{{asset('img/'.unserialize($product->thumbnail)[0])}}"/>
                                                                </div>
                                                                <div
                                                                    class="placeholder-background placeholder-background--animation"
                                                                    data-image-placeholder></div>
                                                            </div>
                                                        </div>
                                                        @if(count(unserialize($product->thumbnail))>1)
                                                        <div class="hidden-sm hidden-xs proSwatch proImageSecond">
                                                            <div class="p-relative">
                                                                <div class="product-card__image"
                                                                     style="padding-top:124.25%;">
                                                                    <img class="product-card__img lazyload" src="{{asset('img/'.unserialize($product->thumbnail)[1])}}" alt="{{$product->name}}"/>
                                                                </div>
                                                                <div
                                                                    class="placeholder-background placeholder-background--animation"
                                                                    data-image-placeholder></div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </a>
                                                    <div class="productLable"></div>
                                                    @if($product->sale_price)
                                                    <div class="productLable"><span class="labelSale">Sale</span></div>
                                                  @endif
                                                   
                                                     @include('components.cart-add-btn',['value'=>'33475186819116','href'=>$product->id,'type'=>'options'])
                                                  </div>
                                                  @if(!$product->sale_price)
                                                  @include('components.pro-content',[ 'name'=>$product->name,'href'=>$product->id,'money'=>$product->price])
                                                @else
                                                @include('components.pro-content',[ 'name'=>$product->name,'href'=>$product->id,'oldmoney'=>$product->price,'price'=>2, 'money'=>$product->sale_price])
                                                @endif
                                                 </div>
                                             </div>
                                        </div>
                                 @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
