@extends('layouts.App')
@section('title')
{{$product->name}}
@endsection
@section('shopify-section-main')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css" integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<main class="mainContent" role="main">
            
    <div id="shopify-section-vela-breacrumb-image" class="shopify-section"><section class="velaBreadcrumbs hasBackgroundImage">
        <div class="velaBreadcrumbsInner" style="background-color: #eaebef"><div class="velaBreadcrumbImage">
    
    
    
    
    
    
    
    <img  alt="velademo-rubix" src="{{asset('img/slide11_1944x.png')}}" /></div><nav class="velaBreadcrumbWrap container">       
                <div class="velaBreadcrumbsInnerWrap"><h2 class="breadcrumbHeading breadcrumbHeadingProduct">{{$product->name}}</h2><ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a href="/" title="Back to the frontpage" itemprop="item">
                                <span itemprop="name">Home</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                        <a href="/products" title="Chairs" itemprop="item">
                                            <span itemprop="name">Products</span>
                                        </a>
                                        <meta itemprop="position" content="2" />
                                    </li><li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <span itemprop="name">{{$product->name}}</span>
                                        <meta itemprop="position" content="3" />
                                    
    </li></ol>
                </div>
            </nav>
        </div>
    </section>
    </div>
    <section id="pageContent">
        <div id="shopify-section-vela-template-product" class="shopify-section">.
    
    <div class="container">
        <div class="pageCollectionInner detail_default">
            <div class="productBox">
                <div class="proBoxPrimary" id="ProductSection-vela-template-product" data-section-id="vela-template-product" data-section-type="product">
                    <div class="row mb30">
                            <div class="proBoxImage col-xs-12 col-md-6  mb30">
                                
    
        <div id="proFeaturedImage" class="proFeaturedImage "><div id="groupMedia" style=" display: none"  data-product-single-media-group>
                    
                            <div id="FeaturedMedia-vela-template-product-9125628280876-wrapper"
                            class="product-single__media-wrapper  hide"
                             data-product-media-type-video data-enable-video-looping="false" 
                            
                            
                            data-product-single-media-wrapper
                            data-media-id="vela-template-product-9125628280876" tabindex="1"
                            >
                                <div data-promedia= 9125628280876 class="product-single__media  product-single__media--9125628280876" style="padding-top: 56.21135469364812%;">
                                </div>
                            </div>
                            <div id="FeaturedMedia-vela-template-product-9113550323756-wrapper" 
                            class="product-single__media-wrapper  hide"
                            
                             data-product-media-type-model
                            
                            data-product-single-media-wrapper
                            data-media-id="vela-template-product-9113550323756" tabindex="1"
                            >
                                <div data-promedia= 9113550323756 class="product-single__media" style="padding-top: 100%">
                                    <model-viewer reveal="interaction" toggleable="true" data-model-id="9113550323756" src="https://model3d.shopifycdn.com/models/o/198ad910c0ebd074/Untitled1.glb" camera-controls="true" data-shopify-feature="1.2" alt="Arctander Chair" poster="../../cdn.shopify.com/s/files/1/0376/9440/6700/products/Untitled1_800x8001b54.jpg?v=1597655362"></model-viewer>
                                </div>
                                <button
                                aria-label="View in your space, loads item in augmented reality window"
                                class="product-single__view-in-space"
                                data-shopify-xr
                                data-shopify-model3d-id="9113550323756"
                                data-shopify-title="{{$product->name}}"
                                data-shopify-xr-hidden
                                >
                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon--full-color icon-3d-badge-full-color" viewBox="0 0 26 26"><path d="M1 25h24V1H1z"/><path class="icon-3d-badge-full-color-outline" d="M.5 25v.5h25V.5H.5z" fill="none"/><path class="icon-3d-badge-full-color-element" d="M19.13 8.28L14 5.32a2 2 0 0 0-2 0l-5.12 3a2 2 0 0 0-1 1.76V16a2 2 0 0 0 1 1.76l5.12 3a2 2 0 0 0 2 0l5.12-3a2 2 0 0 0 1-1.76v-6a2 2 0 0 0-.99-1.72zm-6.4 11.1l-5.12-3a.53.53 0 0 1-.26-.38v-6a.53.53 0 0 1 .27-.46l5.12-3a.53.53 0 0 1 .53 0l5.12 3-4.72 2.68a1.33 1.33 0 0 0-.67 1.2v6a.53.53 0 0 1-.26 0z" opacity=".6" style="isolation:isolate"/></svg><span class='product-single__view-in-space-text'>View in your space</span>
                                </button>
                            </div>
                              
                    
                    
    </div>
            <div id="groupProImage" >
                @if($product->sale_price)
                <div class="productLable "><span class="labelSale">Sale</span></div>
                @endif
                <img id="ProductPhotoImg"
                    class="img-responsive"
                    src="{{asset('img/'.unserialize($product->thumbnail)[0])}}"
                    alt="{{$product->name}}"
                    data-zoom-enable="true" 
                    data-zoom-image="{{asset('img/'.unserialize($product->thumbnail)[0])}}" 
                    data-zoom-scroll="true" 
                    data-zoom-type="window" 
                    data-zoom-width="300" 
                    data-zoom-height="300" 
                    data-zoom-lens="100" 
                    data-lens-shape="square"
                    /></div>
        </div><div id="productThumbs" class="proThumbnails thumbnails-wrapper">
                <div class="owl-thumblist">
                        <div class="owl-carousel product-single__thumbnails product-single__thumbnails-vela-template-product" data-item = "5" data-vertical = "false" >
                                
                            @foreach(unserialize($product->thumbnail) as $image)

                                <div class="thumbItem product-single__thumbnails-item" name="ss">
                                    <a  href="" 
                                        name="ss"
                                        class="product-single__thumbnail images product-single__thumbnail--vela-template-product " 
                                        data-stype="image"
                                        data-image="{{asset('img/'.$image)}}" 
                                        data-zoom-image="{{asset('img/'.$image)}}">
                                            <img class="img-responsive"  name="ss" src="{{asset('img/'.$image)}}" alt="{{$product->name}}"/>
                                            </a>
                                </div>

                                @endforeach
                                </div>
                </div>
            </div>
                            </div>
                            <div class="col-xs-12 col-md-6 mb30">
                                <div class="proBoxInfo">
                                    
    <h1>{{$product->name}}</h1>
    <div class="proReviews">
        <span class="spr-badge" id="spr_badge_4960484327468" data-rating="5.0">
            <span class="spr-starrating spr-badge-starrating">
                @for($i = 0; $i < $rating; $i++)
                     <i class="spr-icon spr-icon-star"></i>
                @endfor
              </span>
       @if($reviews->count())<span class="spr-badge-caption">{{$reviews->count()}} review</span>
    @endif
    </span>

    </div>
    <div class="proReviews">
            <span class="shopify-product-reviews-badge" data-id="4960511557676"></span>
        </div
        
        ><div class="proDescription rte">
            <p>{{$product->excerpt}}</p>
        </div><div class="wrapper">
    
     <form method="post" action="{{route('addToCart')}}" accept-charset="UTF-8" enctype="multipart/form-data">
             @csrf
             <div class="proVariants">
    <style rel="stylesheet" type="text/css" >
                      .proVariants .selector-wrapper:nth-child(1){display: none;}
                </style>
        
       
            <div class="proPrice flexRow flexAlignCenter">
                @if($product->sale_price != null)
                <div class="priceProduct priceCompare"><span class="money" data-currency-usd="{{$product->price}}" data-currency="USD">${{$product->price}}</span></div><div class="priceProduct priceSale"><span class="money" data-currency-usd="{{$product->sale_price}}" data-currency="USD">${{$product->sale_price}}</span></div>               
                @else 
                <div class="priceProduct "><span class="money">{{$product->price}} $</span></div>     
                @endif
            </div>
            @if($product->stock>0)<p class="proAttr productAvailability instock"><label>Availability:</label>In stock</p>
            @else <p class="proAttr productAvailability outstock"><label>Availability:</label>Out of stock</p>
            @endif
            <div class="velaGroup clearfix mb20">
    </div>
    </div>
                <input type="hidden" name="form_type" value="product" />
                <input type="hidden" name="product" value="{{$product->id}}" />
                <input type="hidden" name="utf8" value="✓" />
                <div class="proQuantity">
                    <!-- <label for="Quantity" class="qtySelector">Quantity:</label> -->
                    <div style="display:none"><input type="number"></div>     
                        <div class="velaQty">
                            <button type="button" class="velaQtyAdjust velaQtyButton velaQtyMinus" @if($product->stock==0)disabled  @endif>
                                <span class="txtFallback">−</span>
                            </button>
                            <input type="text" value="1" name="quantity" id="quantity" class="velaQtyNum velaQtyText " >
                            <button type="button" class="velaQtyAdjust velaQtyButton velaQtyPlus" @if($product->stock==0)disabled  @endif>
                                <span class="txtFallback">+</span>
                            </button>
                        </div>


                </div>

                <button type="submit"  class="btn btnAddToCart" @if($product->stock==0)disabled  @endif>
                    <i class="icons icon-handbag"></i>
                    <span id="AddToCartText">Add to Cart</span>
                </button>
                
                <div class="velaBuyNow">
                </div>
        </form>
        
   <p class="proAttr productAvailability instock"><label></label></p>
   
    <div class="mb30 pt-md-30">
        <section class="proDetailInfo"><div class="proTabHeading">
<ul class="nav velaProductNavTabs nav-tabs"><li class="active">
        <a href="#proTabs1" data-toggle="tab">Details</a>
    </li><li>
        <a href="#proTabs4" data-toggle="tab">Reviews</a>
    </li></ul>
</div>
<div class="tab-content"><div class="tab-pane active" id="proTabs1">
    <div class="rte">
        {!!$product->content!!}</div>
</div><div class="tab-pane" id="proTabs4"><div id="shopify-product-reviews" data-id="4960511557676"><style scoped="">.spr-container {
padding: 24px;
border-color: #ECECEC;}
.spr-review, .spr-form {
border-color: #ECECEC;
}
</style>

<div class="spr-container">
<div class="spr-header">
<h2 class="spr-header-title">Customer Reviews</h2><div class="spr-summary">

<span class="spr-starrating spr-summary-starrating">
@for($i = 0 ;$i < $rating; $i++)   
<i class="spr-icon spr-icon-star"></i>
@endfor
</span>
<span class="spr-summary-caption">
    @if($reviews->count()>0)<span class="spr-summary-actions-togglereviews">Based on {{$reviews->count()}} reviews</span>@endif
</span><span class="spr-summary-actions">
@if($user->role == 2)
    <a href="#"  class="spr-summary-actions-newreview" id="w_r">Write a review</a>
@else
    <div class="spr-summary-actions-newreview">To write a review please <a href="/register/client" id="customer_register_link"> Sign up</a> or <a href="/login" id="customer_register_link"> Log in</a></div>
@endif
</span>
</div>
</div>

<div class="spr-content">
<div class="spr-form" id="form_4960511557676" style="display: none" >
    <form method="post" action="{{route('createReview')}}" id="new-review-form" class="new-review-form" onsubmit="">
        <h3 class="spr-form-title">Write a review</h3>
            @csrf
            <fieldset class="spr-form-review" id="Form">
            <div class="spr-form-review-rating">
            <label class="spr-form-label" for="rating">Rating</label>
            <input type="hidden" name="rating" id="rating_input">
            <input type="hidden" name="product" value="{{$product->id}}">
            <div class="spr-form-input spr-starrating " id="stars">
                <a href="#" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="1" aria-label="1 of 5 stars">&nbsp;</a>
                <a href="#" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="2" aria-label="2 of 5 stars">&nbsp;</a>
                <a href="#" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="3" aria-label="3 of 5 stars">&nbsp;</a>
                <a href="#" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="4" aria-label="4 of 5 stars">&nbsp;</a>
                <a href="#" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="5" aria-label="5 of 5 stars">&nbsp;</a>
            </div>
            </div>
            <div class="spr-form-review-title">
            <label class="spr-form-label" for="review_title">Review Title</label>
            <input class="spr-form-input spr-form-input-text " id="review_title" type="text" name="title" value="" placeholder="Give your review a title">
            </div>
            <div class="spr-form-review-body">
            <label class="spr-form-label" for="review_body">
            Body of Review
            <span role="status" aria-live="polite" aria-atomic="true">
            <span class="spr-form-review-body-charactersremaining">(1500)</span>
            <span class="visuallyhidden">characters remaining</span>
            </span>
            </label>
            <div class="spr-form-input">
            <textarea class="spr-form-input spr-form-input-textarea " id="review_body" data-product-id="4960511557676" name="body" rows="10" placeholder="Write your comments here"></textarea>
            </div>
            </div>
            </fieldset>
            <fieldset class="spr-form-actions">
            <input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
            </fieldset>
</form>
</div>
<div class="spr-reviews">
@foreach($reviews as $review)
<div class="spr-review" id="spr-review-115784653">
<div class="spr-review-header">
<span class="spr-starratings spr-review-header-starratings"  role="img">
  @for($i = 0; $i < $review->stars; $i++)
    <i class="spr-icon spr-icon-star"></i>
  @endfor
</span>
<h3 class="spr-review-header-title">{{$review->title}}</h3>
<span class="spr-review-header-byline"><strong>{{$review->user->name}}</strong> on <strong>{{$review->created_at->format('j F Y')}}</strong></span>
</div>

<div class="spr-review-content">
<p class="spr-review-content-body">{{$review->description}}</p>
</div><div class="spr-review-footer">

</div>
</div>
@endforeach

</div>
</div>

</div></div></div></div></section>
    </div>  

    </div>
                                    <div class="mt30">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
@if(count(unserialize($product->mightLike))>1)
                        <section class="proRelated mb30">
                <div id="relatedProducts" class="velaProducts"><div class="headingGroup pb20">
                            <h3 class="velaTitle velaHomeTitle">
                                Maybe You Like
                            </h3>
                            
                                <span class="subTitle">
                                    Mirum est notare quam littera gothica quam nunc putamus parum claram!
                                </span></div><div class="velaContent">
                        <div class="proOwlCarousel owlCarouselPlay">
                            <div class="owl-carousel" 
                                data-nav="true" 
                                data-margin="30" 
                                data-columnone="4" 
                                data-columntwo="4" 
                                data-columnthree="3" 
                                data-columnfour="2" 
                                data-columnfive="1">
                                
@foreach($myl as $elem)
    
                          <div class="item">
                                            
    
    
    
    <div class="velaProBlock grid " data-price="79.00">
        <div class="velaProBlockInner">
            <div class="proHImage d-flex flexJustifyCenter">
                @if($elem->sale_price)
                <div class="productLable"><span class="labelSale">Sale</span></div>
                @endif
                @if(count(unserialize($elem->thumbnail))<2)
                <a class="proFeaturedImage" href="/products/{{$elem->id}}">
                    <div class="wrap proSwatch">
    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyload"
                scr="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                data-src="{{asset('img/'.unserialize($elem->thumbnail)[0])}}"
                data-widths="[1,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808]"
                data-aspectratio="0.8048289738430584"
                data-ratio="0.8048289738430584"
                data-sizes="auto"
                alt=""
            />
        </div>
        <div class="placeholder-background placeholder-background--animation" data-image-placeholder></div>
    </div>


</div></a>
@else
<a class="proFeaturedImage" href="/products/{{$elem->id}}">
    <div class="wrap ">
              <div class="p-relative">
                  <div class="product-card__image"
                       style="padding-top:124.25%;">
                      <img class="product-card__img lazyload"
                           data-src="{{asset('img/'.unserialize($elem->thumbnail)[0])}}"
                           data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                           data-aspectratio="0.8048289738430584"
                           data-ratio="0.8048289738430584" data-sizes="auto"
                           alt=""/>
                  </div>
                  <div
                      class="placeholder-background placeholder-background--animation"
                      data-image-placeholder></div>
              </div>
          </div>
          <div class="hidden-sm hidden-xs proSwatch proImageSecond">
              <div class="p-relative">
                  <div class="product-card__image"
                       style="padding-top:124.25%;">
                      <img class="product-card__img lazyload"
                           data-src="{{asset('img/'.unserialize($elem->thumbnail)[1])}}"
                           data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                           data-aspectratio="0.8048289738430584"
                           data-ratio="0.8048289738430584" data-sizes="auto"
                           alt="Turning Table"/>
                  </div>
                  <div
                      class="placeholder-background placeholder-background--animation"
                      data-image-placeholder></div>
              </div>
          </div>
</a>
@endif



                <div class="productLable"></div><div class="proButton clearfix">
                    <form action="/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                        <input type="hidden" name="id" value="33475186819116" />
                       
                    </form>
                    
                    <div class="productQuickView"  data-toggle="modal" data-target="{{"#Product".$elem->id}}">
                        <a class="btn btnProduct btnProductQuickview" href="#velaQuickView" data-handle="arctander-chair" title="Quick view">
                            <span class="icons icon-magnifier"></span>
                              <span class="text">Quick view</span>
                        </a>
                    </div>
        </div>
    </div>
    <div class="proContent">
    <h5 class="proName">
        <a href="/products/{{$elem->id}}">{{$elem->name}}</a>
    </h5>

<div class="groupPrice clearfix">
  <div class="proPrice"> 
      @if($elem->sale_price != null)
      <div class="priceProduct priceCompare"><span class="money" data-currency-usd="{{$elem->price}}" data-currency="USD">${{$elem->price}}</span></div><div class="priceProduct priceSale"><span class="money" data-currency-usd="{{$elem->sale_price}}" data-currency="USD">${{$elem->sale_price}}</span></div>               
      @else        
        <div class="priceProduct "><span class=money>${{$elem->price}} </span></div>
      @endif
          </div></div>
                </div>
        </div>
    </div>
                                        </div>
                                        @endforeach
              
                   
                                        
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                </div>
            </div>
        </div>
    </div>
    
     
    
    </div>
    @foreach($myl as $item)
    <div class="modal fade" id="Product{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered modal-lg " >
       <div class="modal-content">
           <div class="modal-body">
               <div class="w-100 text-right">
                   <a title="Close" class="quickviewClose btnClose text-right w-100" style="right: 0;" data-dismiss="modal" href="javascript:void(0);"></a>
               </div>
               <div class="proBoxPrimary row">
                   <div class="proBoxImage col-xs-12 col-sm-12 col-md-5">
                       <div class="proFeaturedImage">
                           <a class="proImage" title="" href="/products/{{$item->id}}">
                               <img class="img-responsive proImageQuickview" src="{{asset('img/'.unserialize($item->thumbnail)[0])}}" alt="Quickview">
                               <span class="loadingImage" style="display: none;"></span>
                           </a>
                       </div>
                       <div class="proThumbnails proThumbnailsQuickview clearfix">
                           <div class="owl-thumblist">
                               <div class="owl-carousel owl-loaded" style="visibility: visible;">
   
                               <div class="owl-stage-outer">
                                   <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 172px;">
                                       @foreach(unserialize($item->thumbnail) as $image)
                                      
                                       <div class="owl-item " style="width: 85.75px;"><div
                                   class="thumbItem">
                                   <a href="javascript:void(0)" class="imgs" data-index="0" data-imageid="7714764259372" data-image="{{asset('img/'.$image)}}">
                                       <img src="{{asset('img/'.$image)}}" alt="undefined">
                                   </a>
                                   
                               </div>
                               
                           </div>
                           @endforeach
                           </div></div><div class="owl-nav disabled"><div class="owl-prev disabled">prev</div><div class="owl-next disabled">next</div></div><div class="owl-dots disabled"></div></div>
                           </div>
                       </div>
                       
                   </div>
                   <div class="proBoxInfo col-xs-12 col-sm-12 col-md-7" id="product-4948426817580">
                       <h3 class="quickviewName mb20 text-left"><a href="/products/{{$item->id}}" class="w-100 text-left">{{$item->name}}</a></h3>
                       <div class="proShortDescription rte text-left"><p>{{$item->excerpt}}</p>
   <p></p></div>
                       
                   <form method="post" action="{{route('addToCart')}}" accept-charset="UTF-8" enctype="multipart/form-data">  
                       @csrf                    
                           <div class="proVariantsQuickview"></div>
                           <input type="hidden" value="{{$item->id}}" name="product"/>
                           <div class="proPrice clearfix">
                               @if($item->sale_price != null)
                               <div class="priceProduct priceCompare"><span class="money" data-currency-usd="{{$item->price}}" data-currency="USD">${{$item->price}}</span></div><div class="priceProduct priceSale"><span class="money" data-currency-usd="{{$item->sale_price}}" data-currency="USD">${{$item->sale_price}}</span></div>               
                               @else 
                               <div class="priceProduct "><span class="money">{{$item->price}} $</span></div>     
                               @endif
                               
                           </div>
                           <div class="velaGroup d-flex flexAlignEnd mb20">
                               <div class="proQuantity">
                                   <!-- <label for="Quantity" class="qtySelector">Quantity</label> -->
                                   
       
                                   <div style="display:none"><input type="number"></div>     
                                   <div class="velaQty">
                                       <button type="button" class="velaQtyAdjust velaQtyButton velaQtyMinus">
                                           <span class="txtFallback">−</span>
                                       </button>
                                       <input type="text" value="1" name="quantity" class="velaQtyNum velaQtyText " >
                                       <button type="button" class="velaQtyAdjust velaQtyButton velaQtyPlus">
                                           <span class="txtFallback">+</span>
                                       </button>
                                   </div>
       
   
                               </div>
                               <div class="proButton">
                                   <button type="submit" name="add" class="btn btnAddToCart">
                                       <span>Add to Cart</span>
                                   </button>
                               </div>
                           </div>
                       </form>
                       @if($item->stock>0)<p class="proAttr productAvailability instock"><label>Availability:</label>In stock</p>
                       @else <p class="proAttr productAvailability outstock"><label>Availability:</label>Out of stock</p>
                       @endif     
                   </div>
               </div>
           </div>
       </div>
       </div>
   </div>
                   </div>
               </div>
           </div>
   @endforeach 
    @endif
    <div class="zoomContainer" style="transform: translateZ(0px); position: absolute; left: 71.5px; top: 277px; height: 770px; width: 620px;">
        <div class="zoomLens" style="background-position: 0px 0px; float: right; overflow: hidden; z-index: 999; transform: translateZ(0px); opacity: 0.4; zoom: 1; width: 350.175px; height: 350.345px; background-color: white; cursor: pointer; border: 1px solid rgb(0, 0, 0); background-repeat: no-repeat; position: absolute; left: 230px; top: 84px; display: none;">
            &nbsp;
        </div>
        <div class="zoomWindowContainer" style="width: 300px;">
            <div style="overflow: hidden; background-position: -196.894px -70.925px; text-align: center; background-color: rgb(255, 255, 255); width: 300px; height: 300px; float: left; background-size: 496.894px 617.391px; z-index: 100; border: 4px solid rgb(136, 136, 136); background-repeat: no-repeat; position: absolute; background-image: url(&quot;{{asset('img/'.unserialize($product->thumbnail)[0])}}&quot;); top: 0px; left: 580px; display: none;" class="zoomWindow">
                &nbsp;
            </div>
        </div>
    </div>
    </section>
    
            </main>
            
<script>
    $(document).ready(()=>{
        document.querySelector('.images').classList.add("active-thumb");
        $('.images').on('click',(e)=>{
            e.preventDefault();
            let value =e.target.src;
            document.querySelectorAll('.images').forEach(element =>{
                   element.classList.remove("active-thumb")
            });
            e.target.parentElement.classList.add("active-thumb");
            $('#ProductPhotoImg').attr('src',value);
        })
    })
</script>
<script>
  if(document.querySelector('#w_r')){document.querySelector('#w_r').addEventListener('click',(e)=>{
        e.preventDefault();
        let el =document.querySelector('#form_4960511557676')
        if(el.style.display=="block")
         el.style.display="none";
        else el.style.display="block";
    })};
</script>
<script>
    document.querySelector('.imgs').classList.add("active");
    $('.imgs').bind('click', function (e) {
        e.preventDefault();
        let value = $(this).attr('data-image');
        let element = $(this).closest('.proBoxImage').find('.img-responsive');
        document.querySelectorAll('.imgs').forEach(element =>{
               element.classList.remove("active");
        }); 
       $(this).get(0).classList.add("active"); 
        element.attr('src',value);
        });

</script>
<script>
 $(document).ready(function(){
        /* Hover code */
        $('#stars a').on('mouseover', function(){
            var onStar = parseInt($(this).data('value'), 10);
            $(this).parent().children('a.spr-icon-star').each(function(e){
                if (e < onStar) {
                    $(this).addClass('spr-icon-star-hover');
                }
                else {
                    $(this).removeClass('spr-icon-star-hover');
                }
            });
        }).on('mouseout', function(){
            $(this).parent().children('a.spr-icon-star').each(function(e){
                $(this).removeClass('spr-icon-star-hover');
            });
        });
 $('#stars a').on('click', function(e){
            e.preventDefault();
            var onStar = parseInt($(this).data('value'), 10); // The star currently selected
            var stars = $(this).parent().children('a.spr-icon-star');
            for (i = 0; i < stars.length; i++) {
                $(stars[i]).addClass('spr-icon-star-empty');
            }
            for (i = 0; i < onStar; i++) {
                $(stars[i]).removeClass('spr-icon-star-empty');
            }
            let input = $('#rating_input');
            input.val($(this).attr('data-value'));
        });
    });
</script>

@endsection