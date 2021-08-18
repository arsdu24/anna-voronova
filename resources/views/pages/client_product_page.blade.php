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
                                    
    <h1>{{$product->name}}</h1><div class="proReviews">
            <span class="shopify-product-reviews-badge" data-id="4960511557676"></span>
        </div><div class="proDescription rte">
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
            <p class="proAttr productAvailability instock"><label>Availability:</label>In stock</p>
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
                            <button type="button" class="velaQtyAdjust velaQtyButton velaQtyMinus">
                                <span class="txtFallback">−</span>
                            </button>
                            <input type="text" value="1" name="quantity" id="quantity" class="velaQtyNum velaQtyText " >
                            <button type="button" class="velaQtyAdjust velaQtyButton velaQtyPlus">
                                <span class="txtFallback">+</span>
                            </button>
                        </div>


                </div>

                <button type="submit"  class="btn btnAddToCart">
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
        <a href="#proTabs2" data-toggle="tab">Shipping &amp; Return</a>
    </li><li>
        <a href="#proTabs4" data-toggle="tab">Reviews</a>
    </li></ul>
</div>
<div class="tab-content"><div class="tab-pane active" id="proTabs1">
    <div class="rte">
        {!!$product->content!!}</div>
</div><div class="tab-pane" id="proTabs2">
    <div class="rte"><h4>Returns Policy</h4><p>You may return most new, unopened items within 30 days of delivery for a full refund. We'll also pay the return shipping costs if the return is a result of our error (you received an incorrect or defective item, etc.).</p><p>You should expect to receive your refund within four weeks of giving your package to the return shipper, however, in many cases you will receive a refund more quickly. This time period includes the transit time for us to receive your return from the shipper (5 to 10 business days), the time it takes us to process your return once we receive it (3 to 5 business days), and the time it takes your bank to process our refund request (5 to 10 business days).</p><p>If you need to return an item, simply login to your account, view the order using the 'Complete Orders' link under the My Account menu and click the Return Item(s) button. We'll notify you via e-mail of your refund once we've received and processed the returned item.</p><h4 class="mt-4">Shipping</h4><p>We can ship to virtually any address in the world. Note that there are restrictions on some products, and some products cannot be shipped to international destinations.</p><p>When you place an order, we will estimate shipping and delivery dates for you based on the availability of your items and the shipping options you choose. Depending on the shipping provider you choose, shipping date estimates may appear on the shipping quotes page.</p><p>Please also note that the shipping rates for many items we sell are weight-based. The weight of any such item can be found on its detail page. To reflect the policies of the shipping companies we use, all weights will be rounded up to the next full pound.</p></div>
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
<a href="#"  class="spr-summary-actions-newreview" id="w_r">Write a review</a>
</span>
</div>
</div>

<div class="spr-content">
<div class="spr-form" id="form_4960511557676" style="display: none" >
    
    
    <form method="post" action="//productreviews.shopifycdn.com/api/reviews/create" id="new-review-form_4960511557676" class="new-review-form" onsubmit="SPR.submitForm(this);return false;"><input type="hidden" name="review[rating]"><input type="hidden" name="product_id" value="4960511557676"><h3 class="spr-form-title">Write a review</h3><fieldset class="spr-form-contact"><div class="spr-form-contact-name">
<label class="spr-form-label" for="review_author_4960511557676">Name</label>
<input class="spr-form-input spr-form-input-text " id="review_author_4960511557676" type="text" name="review[author]" value="" placeholder="Enter your name">
</div><div class="spr-form-contact-email">
<label class="spr-form-label" for="review_email_4960511557676">Email</label>
<input class="spr-form-input spr-form-input-email " id="review_email_4960511557676" type="email" name="review[email]" value="" placeholder="john.smith@example.com">
</div></fieldset>
<fieldset class="spr-form-review" id="Form">
<div class="spr-form-review-rating">
<label class="spr-form-label" for="review[rating]">Rating</label>
<div class="spr-form-input spr-starrating ">
    <a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="1" aria-label="1 of 5 stars">&nbsp;</a>
    <a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="2" aria-label="2 of 5 stars">&nbsp;</a>
    <a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="3" aria-label="3 of 5 stars">&nbsp;</a>
    <a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="4" aria-label="4 of 5 stars">&nbsp;</a>
    <a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="5" aria-label="5 of 5 stars">&nbsp;</a>
</div>
</div>
<div class="spr-form-review-title">
<label class="spr-form-label" for="review_title_4960511557676">Review Title</label>
<input class="spr-form-input spr-form-input-text " id="review_title_4960511557676" type="text" name="review[title]" value="" placeholder="Give your review a title">
</div>
<div class="spr-form-review-body">
<label class="spr-form-label" for="review_body_4960511557676">
Body of Review
<span role="status" aria-live="polite" aria-atomic="true">
<span class="spr-form-review-body-charactersremaining">(1500)</span>
<span class="visuallyhidden">characters remaining</span>
</span>
</label>
<div class="spr-form-input">
<textarea class="spr-form-input spr-form-input-textarea " id="review_body_4960511557676" data-product-id="4960511557676" name="review[body]" rows="10" placeholder="Write your comments here"></textarea>
</div>
</div>
</fieldset>
<fieldset class="spr-form-actions">
<input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
</fieldset></form></div>
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
                                
                                    
                                        <div class="item">
                                            
    
    
    
    <div class="velaProBlock grid " data-price="79.00">
        <div class="velaProBlockInner">
            <div class="proHImage d-flex flexJustifyCenter">
                <a class="proFeaturedImage" href="victo-pedant-lamp.html">
                    <div class="wrap ">
                        
                            
    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyload"
               
                data-src="../../cdn.shopify.com/s/files/1/0376/9440/6700/products/14_%7bwidth%7dxd379.html?v=1586245038"
                data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                data-aspectratio="0.8048289738430584"
                data-ratio="0.8048289738430584"
                data-sizes="auto"
                alt=""
                
            />
        </div>
        <div class="placeholder-background placeholder-background--animation" data-image-placeholder></div>
    </div>
    
    
                        
                    </div></a>
                <div class="productLable"></div><div class="proButton clearfix">
                <form action="{{route('addToCart')}}" method="post" enctype="multipart/form-data" class="formAddToCart">
                        <input type="hidden" name="id" value="{{$product->id}}" /><button class="btn  btnProduct btnAddToCart" type="submit" value="Submit" title="Add to Cart">
                                    <span class="icons icon-handbag"></span>
                                    <span class="text">Add to Cart</span>
                                </button>
                </form>
                    
        <div class="productQuickView">
            <a class="btn btnProduct btnProductQuickview" href="#velaQuickView" data-handle="victo-pedant-lamp" title="Quick view">
                <span class="icons icon-magnifier"></span>
                  <span class="text">Quick view</span>
            </a>
        </div>
    
                </div>
            </div>
            <div class="proContent"><h5 class="proName">
                    <a href="victo-pedant-lamp.html">Victo pedant lamp</a>
                </h5><div class="groupPrice clearfix">
                    <div class="proPrice">
                        
    <div class="priceProduct "><span class=money>$79.00</span></div>               
                    </div><div class="velaSwatchCus">
                            
    
                        </div></div>
            </div>
        </div>
    </div>
                                        </div>
                                    
                                
                                    
                                        <div class="item">
                                            
    
    
    
    <div class="velaProBlock grid " data-price="59.00">
        <div class="velaProBlockInner">
            <div class="proHImage d-flex flexJustifyCenter">
                <a class="proFeaturedImage" href="turning-table.html">
                    <div class="wrap ">
                        
                            
    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyload"
               
                data-src="../../cdn.shopify.com/s/files/1/0376/9440/6700/products/30_%7bwidth%7dx96d6.html?v=1586316781"
                data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                data-aspectratio="0.8048289738430584"
                data-ratio="0.8048289738430584"
                data-sizes="auto"
                alt=""
                
            />
        </div>
        <div class="placeholder-background placeholder-background--animation" data-image-placeholder></div>
    </div>
    
    
                        
                    </div><div class="hidden-sm hidden-xs proSwatch proImageSecond">
                            
    
    
    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyload"
               
                data-src="../../cdn.shopify.com/s/files/1/0376/9440/6700/products/30_1_%7bwidth%7dx96d6.html?v=1586316781"
                data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                data-aspectratio="0.8048289738430584"
                data-ratio="0.8048289738430584"
                data-sizes="auto"
                alt="Turning Table"
                
            />
        </div>
        <div class="placeholder-background placeholder-background--animation" data-image-placeholder></div>
    </div>
    
    
                                    
                        </div></a>
                <div class="productLable"></div><div class="proButton clearfix"><form action="https://velademo-rubix.myshopify.com/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                        <input type="hidden" name="id" value="33475052175404" /><button class="btn  btnProduct btnAddToCart" type="submit" value="Submit" title="Add to Cart">
                                    <span class="icons icon-handbag"></span>
                                    <span class="text">Add to Cart</span>
                                </button></form>
                    
        <div class="productQuickView">
            <a class="btn btnProduct btnProductQuickview" href="#velaQuickView" data-handle="turning-table" title="Quick view">
                <span class="icons icon-magnifier"></span>
                  <span class="text">Quick view</span>
            </a>
        </div>
    
                </div>
            </div>
            <div class="proContent"><h5 class="proName">
                    <a href="turning-table.html">Turning Table</a>
                </h5><div class="groupPrice clearfix">
                    <div class="proPrice">
                        
    <div class="priceProduct "><span class=money>$59.00</span></div>               
                    </div><div class="velaSwatchCus">
                            
    
                        </div></div>
            </div>
        </div>
    </div>
                                        </div>
                                    
                                
                                    
                                        <div class="item">
                                            
    
    
    
    <div class="velaProBlock grid " data-price="49.00">
        <div class="velaProBlockInner">
            <div class="proHImage d-flex flexJustifyCenter">
                <a class="proFeaturedImage" href="sweeper-and-funnel.html">
                    <div class="wrap ">
                        
                            
    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyload"
               
                data-src="../../cdn.shopify.com/s/files/1/0376/9440/6700/products/11_1_%7bwidth%7dxb82d.html?v=1586223968"
                data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                data-aspectratio="0.8048289738430584"
                data-ratio="0.8048289738430584"
                data-sizes="auto"
                alt=""
                
            />
        </div>
        <div class="placeholder-background placeholder-background--animation" data-image-placeholder></div>
    </div>
    
    
                        
                    </div><div class="hidden-sm hidden-xs proSwatch proImageSecond">
                            
    
    
    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyload"
               
                data-src="../../cdn.shopify.com/s/files/1/0376/9440/6700/products/11_4_%7bwidth%7dx00e2.html?v=1598084962"
                data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                data-aspectratio="0.8048289738430584"
                data-ratio="0.8048289738430584"
                data-sizes="auto"
                alt="Sweeper and Funnel"
                
            />
        </div>
        <div class="placeholder-background placeholder-background--animation" data-image-placeholder></div>
    </div>
    
    
                                    
                        </div></a>
                <div class="productLable"></div><div class="proButton clearfix"><form action="https://velademo-rubix.myshopify.com/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                        <input type="hidden" name="id" value="33672952807468" /><a class="btn btnProduct btnAddToCart" href="sweeper-and-funnel.html" title="Select options">
                                    <span class="icons icon-handbag"></span>
                                    <span class="select_options text">Select options</span>
                                </a></form>
                    
        <div class="productQuickView">
            <a class="btn btnProduct btnProductQuickview" href="#velaQuickView" data-handle="sweeper-and-funnel" title="Quick view">
                <span class="icons icon-magnifier"></span>
                  <span class="text">Quick view</span>
            </a>
        </div>
    
                </div>
            </div>
            <div class="proContent"><h5 class="proName">
                    <a href="sweeper-and-funnel.html">Sweeper and Funnel</a>
                </h5><div class="groupPrice clearfix">
                    <div class="proPrice">
                        
    <div class="priceProduct "><span class=money>$49.00</span></div>               
                    </div><div class="velaSwatchCus">
                            
    <ul class="velaSwatchProduct">
                                            
    <li>
                                                        <label style="background-color: black; background-image: url(../../cdn.shopify.com/s/files/1/0376/9440/6700/products/11_1_small00e2.jpg?v=1598084962)"></label>
                                                        <div class="hidden">
                                                            <a href="../../cdn.shopify.com/s/files/1/0376/9440/6700/products/11_1_large00e2.jpg?v=1598084962"></a>
                                                        </div>
                                                    </li>
    <li>
                                                        <label style="background-color: white; background-image: url(../../cdn.shopify.com/s/files/1/0376/9440/6700/products/11_2_small00e2.jpg?v=1598084962)"></label>
                                                        <div class="hidden">
                                                            <a href="../../cdn.shopify.com/s/files/1/0376/9440/6700/products/11_2_large00e2.jpg?v=1598084962"></a>
                                                        </div>
                                                    </li>
                                        </ul>
                        </div></div>
            </div>
        </div>
    </div>
                                        </div>
                                    
                                
                                    
                                        <div class="item">
                                            
    
    
    
    <div class="velaProBlock grid " data-price="27.00">
        <div class="velaProBlockInner">
            <div class="proHImage d-flex flexJustifyCenter">
                <a class="proFeaturedImage" href="storm-small-jug.html">
                    <div class="wrap ">
                        
                            
    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyload"
               
                data-src="../../cdn.shopify.com/s/files/1/0376/9440/6700/products/1_1_%7bwidth%7dxa8f8.html?v=1586244535"
                data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                data-aspectratio="0.8048289738430584"
                data-ratio="0.8048289738430584"
                data-sizes="auto"
                alt=""
                
            />
        </div>
        <div class="placeholder-background placeholder-background--animation" data-image-placeholder></div>
    </div>
    
    
                        
                    </div><div class="hidden-sm hidden-xs proSwatch proImageSecond">
                            
    
    
    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyload"
               
                data-src="../../cdn.shopify.com/s/files/1/0376/9440/6700/products/1_2_%7bwidth%7dxb238.html?v=1586244828"
                data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                data-aspectratio="0.8048289738430584"
                data-ratio="0.8048289738430584"
                data-sizes="auto"
                alt="Storm Small Jug"
                
            />
        </div>
        <div class="placeholder-background placeholder-background--animation" data-image-placeholder></div>
    </div>
    
    
                                    
                        </div></a>
                <div class="productLable"></div><div class="proButton clearfix"><form action="https://velademo-rubix.myshopify.com/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                        <input type="hidden" name="id" value="33452256493612" /><a class="btn btnProduct btnAddToCart" href="storm-small-jug.html" title="Select options">
                                    <span class="icons icon-handbag"></span>
                                    <span class="select_options text">Select options</span>
                                </a></form>
                    
        <div class="productQuickView">
            <a class="btn btnProduct btnProductQuickview" href="#velaQuickView" data-handle="storm-small-jug" title="Quick view">
                <span class="icons icon-magnifier"></span>
                  <span class="text">Quick view</span>
            </a>
        </div>
    
                </div>
            </div>
            <div class="proContent"><h5 class="proName">
                    <a href="storm-small-jug.html">Storm Small Jug</a>
                </h5><div class="groupPrice clearfix">
                    <div class="proPrice">
                        <span class="text-color-banner mr5">From:</span>
    <div class="priceProduct "><span class=money>$27.00</span></div>               
                    </div><div class="velaSwatchCus">
                            
    <ul class="velaSwatchProduct">
                                            
    <li>
                                                        <label style="background-color: white; background-image: url(../../cdn.shopify.com/s/files/1/0376/9440/6700/products/1_2_smallb238.jpg?v=1586244828)"></label>
                                                        <div class="hidden">
                                                            <a href="../../cdn.shopify.com/s/files/1/0376/9440/6700/products/1_2_largeb238.jpg?v=1586244828"></a>
                                                        </div>
                                                    </li>
    <li>
                                                        <label style="background-color: black; background-image: url(../../cdn.shopify.com/s/files/1/0376/9440/6700/products/1_1_smallb238.jpg?v=1586244828)"></label>
                                                        <div class="hidden">
                                                            <a href="../../cdn.shopify.com/s/files/1/0376/9440/6700/products/1_1_largeb238.jpg?v=1586244828"></a>
                                                        </div>
                                                    </li>
    <li>
                                                        <label style="background-color: blue; background-image: url(../../cdn.shopify.com/s/files/1/0376/9440/6700/products/1_3_smallb238.jpg?v=1586244828)"></label>
                                                        <div class="hidden">
                                                            <a href="../../cdn.shopify.com/s/files/1/0376/9440/6700/products/1_3_largeb238.jpg?v=1586244828"></a>
                                                        </div>
                                                    </li>
                                        </ul>
                        </div></div>
            </div>
        </div>
    </div>
                                        </div>
                                    
                                
                                    
                                        <div class="item">
                                            
    
    
    
    <div class="velaProBlock grid " data-price="39.00">
        <div class="velaProBlockInner">
            <div class="proHImage d-flex flexJustifyCenter">
                <a class="proFeaturedImage" href="stainless-steel-teapot.html">
                    <div class="wrap ">
                        
                            
    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyload"
               
                data-src="../../cdn.shopify.com/s/files/1/0376/9440/6700/products/28_%7bwidth%7dx7041.html?v=1586316960"
                data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                data-aspectratio="0.8048289738430584"
                data-ratio="0.8048289738430584"
                data-sizes="auto"
                alt=""
                
            />
        </div>
        <div class="placeholder-background placeholder-background--animation" data-image-placeholder></div>
    </div>
    
    
                        
                    </div></a>
                <div class="productLable"><span class="labelSale">Sale</span></div><div class="proButton clearfix"><form action="https://velademo-rubix.myshopify.com/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                        <input type="hidden" name="id" value="33475121676332" /><button class="btn  btnProduct btnAddToCart" type="submit" value="Submit" title="Add to Cart">
                                    <span class="icons icon-handbag"></span>
                                    <span class="text">Add to Cart</span>
                                </button></form>
                    
        <div class="productQuickView">
            <a class="btn btnProduct btnProductQuickview" href="#velaQuickView" data-handle="stainless-steel-teapot" title="Quick view">
                <span class="icons icon-magnifier"></span>
                  <span class="text">Quick view</span>
            </a>
        </div>
    
                </div>
            </div>
            <div class="proContent"><h5 class="proName">
                    <a href="stainless-steel-teapot.html">Stainless steel teapot</a>
                </h5><div class="groupPrice clearfix">
                    <div class="proPrice">
                        
    <div class="priceProduct priceCompare"><span class=money>$57.00</span></div><div class="priceProduct priceSale"><span class=money>$39.00</span></div>               
                    </div><div class="velaSwatchCus">
                            
    
                        </div></div>
            </div>
        </div>
    </div>
                                        </div>
                                    
                                
                                    
                                        <div class="item">
                                            
    
    
    
    <div class="velaProBlock grid " data-price="59.00">
        <div class="velaProBlockInner">
            <div class="proHImage d-flex flexJustifyCenter">
                <a class="proFeaturedImage" href="side-table.html">
                    <div class="wrap ">
                        
                            
    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyload"
               
                data-src="../../cdn.shopify.com/s/files/1/0376/9440/6700/products/3_1_%7bwidth%7dx6400.html?v=1586316386"
                data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                data-aspectratio="0.8048289738430584"
                data-ratio="0.8048289738430584"
                data-sizes="auto"
                alt=""
                
            />
        </div>
        <div class="placeholder-background placeholder-background--animation" data-image-placeholder></div>
    </div>
    
    
                        
                    </div><div class="hidden-sm hidden-xs proSwatch proImageSecond">
                            
    
    
    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyload"
               
                data-src="../../cdn.shopify.com/s/files/1/0376/9440/6700/products/3_2_%7bwidth%7dx6400.html?v=1586316386"
                data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                data-aspectratio="0.8048289738430584"
                data-ratio="0.8048289738430584"
                data-sizes="auto"
                alt="Side Table"
                
            />
        </div>
        <div class="placeholder-background placeholder-background--animation" data-image-placeholder></div>
    </div>
    
    
                                    
                        </div></a>
                <div class="productLable"></div><div class="proButton clearfix"><form action="https://velademo-rubix.myshopify.com/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                        <input type="hidden" name="id" value="33474941288492" /><button class="btn  btnProduct btnAddToCart" type="submit" value="Submit" title="Add to Cart">
                                    <span class="icons icon-handbag"></span>
                                    <span class="text">Add to Cart</span>
                                </button></form>
                    
        <div class="productQuickView">
            <a class="btn btnProduct btnProductQuickview" href="#velaQuickView" data-handle="side-table" title="Quick view">
                <span class="icons icon-magnifier"></span>
                  <span class="text">Quick view</span>
            </a>
        </div>
    
                </div>
            </div>
            <div class="proContent"><h5 class="proName">
                    <a href="side-table.html">Side Table</a>
                </h5><div class="groupPrice clearfix">
                    <div class="proPrice">
                        
    <div class="priceProduct "><span class=money>$59.00</span></div>               
                    </div><div class="velaSwatchCus">
                            
    
                        </div></div>
            </div>
        </div>
    </div>
                                        </div>
                                    
                                
                                    
                                        <div class="item">
                                            
    
    
    
    <div class="velaProBlock grid " data-price="59.00">
        <div class="velaProBlockInner">
            <div class="proHImage d-flex flexJustifyCenter">
                <a class="proFeaturedImage" href="pia-chair.html">
                    <div class="wrap ">
                        
                            
    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyload"
               
                data-src="../../cdn.shopify.com/s/files/1/0376/9440/6700/products/20_1_%7bwidth%7dx2675.html?v=1586314636"
                data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                data-aspectratio="0.8048289738430584"
                data-ratio="0.8048289738430584"
                data-sizes="auto"
                alt=""
                
            />
        </div>
        <div class="placeholder-background placeholder-background--animation" data-image-placeholder></div>
    </div>
    
    
                        
                    </div><div class="hidden-sm hidden-xs proSwatch proImageSecond">
                            
    
    
    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyload"
               
                data-src="../../cdn.shopify.com/s/files/1/0376/9440/6700/products/20_2_%7bwidth%7dx2675.html?v=1586314636"
                data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                data-aspectratio="0.8048289738430584"
                data-ratio="0.8048289738430584"
                data-sizes="auto"
                alt="Pia Chair"
                
            />
        </div>
        <div class="placeholder-background placeholder-background--animation" data-image-placeholder></div>
    </div>
    
    
                                    
                        </div></a>
                <div class="productLable"></div><div class="proButton clearfix"><form action="https://velademo-rubix.myshopify.com/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                        <input type="hidden" name="id" value="33474340356140" /><button class="btn  btnProduct btnAddToCart" type="submit" value="Submit" title="Add to Cart">
                                    <span class="icons icon-handbag"></span>
                                    <span class="text">Add to Cart</span>
                                </button></form>
                    
        <div class="productQuickView">
            <a class="btn btnProduct btnProductQuickview" href="#velaQuickView" data-handle="pia-chair" title="Quick view">
                <span class="icons icon-magnifier"></span>
                  <span class="text">Quick view</span>
            </a>
        </div>
    
                </div>
            </div>
            <div class="proContent"><h5 class="proName">
                    <a href="pia-chair.html">Pia Chair</a>
                </h5><div class="groupPrice clearfix">
                    <div class="proPrice">
                        
    <div class="priceProduct "><span class=money>$59.00</span></div>               
                    </div><div class="velaSwatchCus">
                            
    
                        </div></div>
            </div>
        </div>
    </div>
                                        </div>
                                    
                                
                                    
                                        <div class="item">
                                            
    
    
    
    <div class="velaProBlock grid  lastItem" data-price="59.00">
        <div class="velaProBlockInner">
            <div class="proHImage d-flex flexJustifyCenter">
                <a class="proFeaturedImage" href="outdoor-dining-table.html">
                    <div class="wrap ">
                        
                            
    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyload"
               
                data-src="../../cdn.shopify.com/s/files/1/0376/9440/6700/products/2_1_%7bwidth%7dx453a.html?v=1586245114"
                data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                data-aspectratio="0.8048289738430584"
                data-ratio="0.8048289738430584"
                data-sizes="auto"
                alt=""
                
            />
        </div>
        <div class="placeholder-background placeholder-background--animation" data-image-placeholder></div>
    </div>
    
    
                        
                    </div><div class="hidden-sm hidden-xs proSwatch proImageSecond">
                            
    
    
    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyload"
               
                data-src="../../cdn.shopify.com/s/files/1/0376/9440/6700/products/2_2_%7bwidth%7dx453a.html?v=1586245114"
                data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                data-aspectratio="0.8048289738430584"
                data-ratio="0.8048289738430584"
                data-sizes="auto"
                alt="Outdoor Dining Table"
                
            />
        </div>
        <div class="placeholder-background placeholder-background--animation" data-image-placeholder></div>
    </div>
    
    
                                    
                        </div></a>
                <div class="productLable"></div><div class="proButton clearfix"><form action="https://velademo-rubix.myshopify.com/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                        <input type="hidden" name="id" value="33452411158572" /><button class="btn  btnProduct btnAddToCart" type="submit" value="Submit" title="Add to Cart">
                                    <span class="icons icon-handbag"></span>
                                    <span class="text">Add to Cart</span>
                                </button></form>
                    
        <div class="productQuickView">
            <a class="btn btnProduct btnProductQuickview" href="#velaQuickView" data-handle="outdoor-dining-table" title="Quick view">
                <span class="icons icon-magnifier"></span>
                  <span class="text">Quick view</span>
            </a>
        </div>
    
                </div>
            </div>
            <div class="proContent"><h5 class="proName">
                    <a href="outdoor-dining-table.html">Outdoor Dining Table</a>
                </h5><div class="groupPrice clearfix">
                    <div class="proPrice">
                        
    <div class="priceProduct "><span class=money>$59.00</span></div>               
                    </div><div class="velaSwatchCus">
                            
    
                        </div></div>
            </div>
        </div>
    </div>
                                        </div>
                                    
                                
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
    <script>
        var selectCallback = function(variant, selector) {
            vela.productPage({
                variant: variant,
                selector: selector
            });
        };
        $(window).load(function() {
            new Shopify.OptionSelectors('productSelect', {
                product: {"id":4960511557676,"title":"Arctander Chair","handle":"arctander-chair","description":"\u003cp\u003eMost of us are familiar with the iconic design of the egg shaped chair floating in the air. The Hanging Egg Chair is a critically acclaimed design that has enjoyed praise worldwide ever since the distinctive sculptural shape was created.\u003c\/p\u003e\n\u003cp\u003e[SHORTDESCRIPTION]\u003c\/p\u003e\n\n\u003cp\u003eMost of us are familiar with the iconic design of the egg shaped chair floating in the air. The Hanging Egg Chair is a critically acclaimed design that has enjoyed praise worldwide ever since the distinctive sculptural shape was created by Nanna \u0026amp; Jørgen Ditzel in 1959.\u003c\/p\u003e\n\u003cp\u003eThe design of the Hanging Egg Chair has long since been dubbed timeless whereas the material rattan had its golden age in the 1960s when skilled wicker makers and architects crafted beautifully sculptured furniture out of the challenging material. However, at the moment rattan is becoming more and more popular concurrent with consumer demands for sustainable products.\u003c\/p\u003e\n\u003cp\u003e\u003cstrong\u003eDimensions: \u003c\/strong\u003e\u003cbr\u003e Chair: W:85 x D:75 x H:125cm Stand: W:104 x D:109 x H:207cm (seat height:45cm)\u003c\/p\u003e\n\u003cp\u003e\u003cstrong\u003eMaterials: \u003c\/strong\u003e\u003cbr\u003e Indoor chair: natural fiber (rattan) Outdoor chair: synthetic fiber Stand: powder coated iron (only for indoor use)\u003c\/p\u003e","published_at":"2020-04-07T23:37:39-04:00","created_at":"2020-04-07T23:37:39-04:00","vendor":"Demo Vender","type":"Demo Type","tags":["Color_Grey","Color_Yellow","Price_ $0 - $50"],"price":3900,"price_min":3900,"price_max":3900,"available":true,"price_varies":false,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":33475186819116,"title":"Yellow","option1":"Yellow","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":15541357805612,"product_id":4960511557676,"position":1,"created_at":"2020-04-07T23:37:58-04:00","updated_at":"2020-08-24T03:11:24-04:00","alt":null,"width":800,"height":994,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/21_1.jpg?v=1598253084","variant_ids":[33475186819116]},"available":true,"name":"Arctander Chair - Yellow","public_title":"Yellow","options":["Yellow"],"price":3900,"weight":0,"compare_at_price":null,"inventory_management":"shopify","barcode":"","featured_media":{"alt":null,"id":7714817867820,"position":1,"preview_image":{"aspect_ratio":0.805,"height":994,"width":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/21_1.jpg?v=1586317078"}}},{"id":34509125615660,"title":"Pink","option1":"Pink","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":16890301677612,"product_id":4960511557676,"position":3,"created_at":"2020-08-03T22:02:27-04:00","updated_at":"2020-08-24T03:11:24-04:00","alt":null,"width":800,"height":994,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/2_1_44d927bb-269a-4f5c-be70-61963ee51dd0.jpg?v=1598253084","variant_ids":[34509125615660]},"available":true,"name":"Arctander Chair - Pink","public_title":"Pink","options":["Pink"],"price":3900,"weight":0,"compare_at_price":null,"inventory_management":"shopify","barcode":"","featured_media":{"alt":null,"id":9064510226476,"position":3,"preview_image":{"aspect_ratio":0.805,"height":994,"width":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/2_1_44d927bb-269a-4f5c-be70-61963ee51dd0.jpg?v=1596506547"}}},{"id":34531170123820,"title":"Black","option1":"Black","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":16890301644844,"product_id":4960511557676,"position":5,"created_at":"2020-08-03T22:02:27-04:00","updated_at":"2020-08-24T03:11:24-04:00","alt":null,"width":800,"height":994,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/18_2.jpg?v=1598253084","variant_ids":[34531170123820]},"available":true,"name":"Arctander Chair - Black","public_title":"Black","options":["Black"],"price":3900,"weight":0,"compare_at_price":null,"inventory_management":"shopify","barcode":"","featured_media":{"alt":null,"id":9064510193708,"position":7,"preview_image":{"aspect_ratio":0.805,"height":994,"width":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/18_2.jpg?v=1596506547"}}},{"id":34557512155180,"title":"gold","option1":"gold","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":16890301546540,"product_id":4960511557676,"position":4,"created_at":"2020-08-03T22:02:27-04:00","updated_at":"2020-08-24T03:11:24-04:00","alt":null,"width":800,"height":994,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/2_2_764f9b85-a5ed-415a-8231-214d7e9ac586.jpg?v=1598253084","variant_ids":[34557512155180]},"available":true,"name":"Arctander Chair - gold","public_title":"gold","options":["gold"],"price":3900,"weight":0,"compare_at_price":null,"inventory_management":"shopify","barcode":"","featured_media":{"alt":null,"id":9064510259244,"position":4,"preview_image":{"aspect_ratio":0.805,"height":994,"width":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/2_2_764f9b85-a5ed-415a-8231-214d7e9ac586.jpg?v=1596506547"}}},{"id":34557512187948,"title":"red","option1":"red","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":15541357903916,"product_id":4960511557676,"position":2,"created_at":"2020-04-07T23:37:58-04:00","updated_at":"2020-08-24T03:11:24-04:00","alt":null,"width":800,"height":994,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/21_2.jpg?v=1598253084","variant_ids":[34557512187948]},"available":true,"name":"Arctander Chair - red","public_title":"red","options":["red"],"price":3900,"weight":0,"compare_at_price":null,"inventory_management":"shopify","barcode":"","featured_media":{"alt":null,"id":7714817900588,"position":2,"preview_image":{"aspect_ratio":0.805,"height":994,"width":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/21_2.jpg?v=1586317078"}}}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/21_1.jpg?v=1598253084","#\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/21_2.jpg?v=1598253084","#\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/2_1_44d927bb-269a-4f5c-be70-61963ee51dd0.jpg?v=1598253084","#\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/2_2_764f9b85-a5ed-415a-8231-214d7e9ac586.jpg?v=1598253084","#\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/18_2.jpg?v=1598253084","\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/18_1.jpg?v=1598253084"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/21_1.jpg?v=1598253084","options":["Color"],"media":[{"alt":null,"id":7714817867820,"position":1,"preview_image":{"aspect_ratio":0.805,"height":994,"width":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/21_1.jpg?v=1586317078"},"aspect_ratio":0.805,"height":994,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/21_1.jpg?v=1586317078","width":800},{"alt":null,"id":7714817900588,"position":2,"preview_image":{"aspect_ratio":0.805,"height":994,"width":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/21_2.jpg?v=1586317078"},"aspect_ratio":0.805,"height":994,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/21_2.jpg?v=1586317078","width":800},{"alt":null,"id":9064510226476,"position":3,"preview_image":{"aspect_ratio":0.805,"height":994,"width":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/2_1_44d927bb-269a-4f5c-be70-61963ee51dd0.jpg?v=1596506547"},"aspect_ratio":0.805,"height":994,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/2_1_44d927bb-269a-4f5c-be70-61963ee51dd0.jpg?v=1596506547","width":800},{"alt":null,"id":9064510259244,"position":4,"preview_image":{"aspect_ratio":0.805,"height":994,"width":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/2_2_764f9b85-a5ed-415a-8231-214d7e9ac586.jpg?v=1596506547"},"aspect_ratio":0.805,"height":994,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/2_2_764f9b85-a5ed-415a-8231-214d7e9ac586.jpg?v=1596506547","width":800},{"alt":null,"id":9125628280876,"position":5,"preview_image":{"aspect_ratio":0.805,"height":497,"width":400,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/thumbnail.jpg?v=1598253040"},"aspect_ratio":1.779,"duration":30030,"media_type":"video","sources":[{"format":"mp4","height":480,"mime_type":"video\/mp4","url":"https:\/\/cdn.shopify.com\/videos\/c\/vp\/792e483c29264a1ea2db3e126ca94da1\/792e483c29264a1ea2db3e126ca94da1.SD-480p-1.5Mbps.mp4","width":854},{"format":"mp4","height":720,"mime_type":"video\/mp4","url":"https:\/\/cdn.shopify.com\/videos\/c\/vp\/792e483c29264a1ea2db3e126ca94da1\/792e483c29264a1ea2db3e126ca94da1.HD-720p-4.5Mbps.mp4","width":1280},{"format":"m3u8","height":720,"mime_type":"application\/x-mpegURL","url":"https:\/\/cdn.shopify.com\/videos\/c\/vp\/792e483c29264a1ea2db3e126ca94da1\/792e483c29264a1ea2db3e126ca94da1.hls.m3u8","width":1280}]},{"alt":null,"id":9113550323756,"position":6,"preview_image":{"aspect_ratio":1.0,"height":1024,"width":1024,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/Untitled1.jpg?v=1597655362"},"media_type":"model","sources":[{"format":"glb","mime_type":"model\/gltf-binary","url":"https:\/\/model3d.shopifycdn.com\/models\/o\/198ad910c0ebd074\/Untitled1.glb"},{"format":"usdz","mime_type":"model\/vnd.usdz+zip","url":"https:\/\/model3d.shopifycdn.com\/models\/o\/963a6649b2b4ecd6\/Untitled1.usdz"}]},{"alt":null,"id":9064510193708,"position":7,"preview_image":{"aspect_ratio":0.805,"height":994,"width":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/18_2.jpg?v=1596506547"},"aspect_ratio":0.805,"height":994,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/18_2.jpg?v=1596506547","width":800},{"alt":null,"id":9064510160940,"position":8,"preview_image":{"aspect_ratio":0.805,"height":994,"width":800,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/18_1.jpg?v=1596506547"},"aspect_ratio":0.805,"height":994,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0376\/9440\/6700\/products\/18_1.jpg?v=1596506547","width":800}],"content":"\u003cp\u003eMost of us are familiar with the iconic design of the egg shaped chair floating in the air. The Hanging Egg Chair is a critically acclaimed design that has enjoyed praise worldwide ever since the distinctive sculptural shape was created.\u003c\/p\u003e\n\u003cp\u003e[SHORTDESCRIPTION]\u003c\/p\u003e\n\n\u003cp\u003eMost of us are familiar with the iconic design of the egg shaped chair floating in the air. The Hanging Egg Chair is a critically acclaimed design that has enjoyed praise worldwide ever since the distinctive sculptural shape was created by Nanna \u0026amp; Jørgen Ditzel in 1959.\u003c\/p\u003e\n\u003cp\u003eThe design of the Hanging Egg Chair has long since been dubbed timeless whereas the material rattan had its golden age in the 1960s when skilled wicker makers and architects crafted beautifully sculptured furniture out of the challenging material. However, at the moment rattan is becoming more and more popular concurrent with consumer demands for sustainable products.\u003c\/p\u003e\n\u003cp\u003e\u003cstrong\u003eDimensions: \u003c\/strong\u003e\u003cbr\u003e Chair: W:85 x D:75 x H:125cm Stand: W:104 x D:109 x H:207cm (seat height:45cm)\u003c\/p\u003e\n\u003cp\u003e\u003cstrong\u003eMaterials: \u003c\/strong\u003e\u003cbr\u003e Indoor chair: natural fiber (rattan) Outdoor chair: synthetic fiber Stand: powder coated iron (only for indoor use)\u003c\/p\u003e"},
                onVariantSelected: selectCallback,
                enableHistoryState: true
            });
            
            
                $('.selector-wrapper:eq(0)').prepend('<label for="productSelect-option-0">Color</label>');
            
            
            $('.velaProductNavTabs li:first, .proDetailInfo .tab-content .tab-pane:first').addClass('active');
            $('.proDetailInfo .velaPanel:first .panel-collapse').addClass('in');
        });
    </script>
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
   $('.btnAddToCart').click($('#cartTop').trigger( "click" ));
   
</script>

@endsection