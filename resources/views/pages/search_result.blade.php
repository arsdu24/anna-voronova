@extends('layouts.App')
@section('title')
 Search: {{$results->count()}} result foud for {{$q}}.
@endsection
@section('shopify-section-main')
<div class="container">
<div class="velaSearchContainer mb20 pb-md-30">

@if($results->count()>0)<h1 class="velaSearchTitle">Your search for "{{$q}}" revealed the following:</h1>
@else <h1 class="velaSearchTitle">Your search for "{{$q}}" did not yield any results.</h1>
@endif
@if($_GET['type']== 'blog')
<form class="formSearchPage" action="/search" method="get">
                <div class="input-group">
                    <input type="search" name="q" value="{{$q}}" placeholder="Search our blogs" class="formSearchPageInput form-control">

                    <button type="submit" class="formSearchPageButton">
                        <span class="searchPageButtonText">Search</span>
                        <i class="icons icon-magnifier"></i>
                    </button>
                </div>
                <input type="hidden" name="type" value="blog">
            <ul class="velaAjaxSearch" style="display: none;"></ul>
</form>
@else
<form class="formSearchPage" action="/search" method="get">
    <div class="input-group">
        <input type="search" name="q" value="{{$q}}" placeholder="Search our products" class="formSearchPageInput form-control">

        <button type="submit" class="formSearchPageButton">
            <span class="searchPageButtonText">Search</span>
            <i class="icons icon-magnifier"></i>
        </button>
    </div>
    <input type="hidden" name="type" value="product">
<ul class="velaAjaxSearch" style="display: none;"></ul>
</form>
@endif
@if($results->count() >0)
@if($_GET['type']== 'blog')
<div class="searchArticleResults">
                    @foreach ($results as $result)
                        <div class="articleItemSearch"><div class="articleItemSearchImage">
                                    <a href="/blog/article/{{$result->slug}}">
                                        <img class="img-responsive" src="{{asset('img/'.$result->thumbnail)}}" alt="{{$result->title}}">
                                    </a>
                                </div><div class="articleItemSearchContent">
                                <h3 class="articleItemSearchTitle">
                                    <a href="/blog/article/{{$result->id}}">{{$result->title}}</a>
                                </h3>
                                <div class="articleMeta">
                                    <span class="articlePublish">{{$result->created_at->format('d M, Y')}}</span>
                                    <span class="articleAuthor">{{$result->author}}</span></div>
                                <div class="articleItemSearchDesc">
                                    {{$result->excerpt}}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
@elseif($_GET['type']== 'product')
<div class="proList grid">
    <div class="velaFlexRow flexRow">




        @foreach ($results as $result)
<div class="velaProBlock grid col-xs-12 col-sm-6 col-md-3" data-price="39.00">
<div class="velaProBlockInner">
<div class="proHImage d-flex flexJustifyCenter">
    @if($result->sale_price)
    <div class="productLable"><span class="labelSale">Sale</span></div>
    @endif
    @if(count(unserialize($result->thumbnail))<2)
    <a class="proFeaturedImage" href="/products/{{$result->id}}">
        <div class="wrap proSwatch">

<div class="p-relative">
<div class="product-card__image" style="padding-top:124.25%;">
<img class="product-card__img lazyload"
    scr="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
    data-src="{{asset('img/'.unserialize($result->thumbnail)[0])}}"
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
<a class="proFeaturedImage" href="/products/{{$result->id}}">
<div class="wrap ">
  <div class="p-relative">
      <div class="product-card__image"
           style="padding-top:124.25%;">
          <img class="product-card__img lazyload"
               data-src="{{asset('img/'.unserialize($result->thumbnail)[0])}}"
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
               data-src="{{asset('img/'.unserialize($result->thumbnail)[1])}}"
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
<div class="productLable"></div><div class="proButton clearfix"><form action="/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
    <input type="hidden" name="id" value="33475186819116" />
    <a class="btn btnProduct btnAddToCart" href="/products/{{$result->id}}" title="Select options">
                <span class="icons icon-handbag"></span>
                <span class="select_options text">Select options</span>
            </a>
</form>

    <div class="productQuickView"  data-toggle="modal" data-target="{{"#Product".$result->id}}">
        <a class="btn btnProduct btnProductQuickview" title="Quick view">
            <span class="icons icon-magnifier"></span>
              <span class="text">Quick view</span>
        </a>
    </div>

</div>
</div>
<div class="proContent"><h5 class="proName">
<a href="/products/{{$result->id}}">{{$result->name}}</a>
</h5><div class="groupPrice clearfix">
<div class="proPrice">

    @if($result->sale_price != null)
    <div class="priceProduct priceCompare"><span class="money" data-currency-usd="{{$result->price}}" data-currency="USD">${{$result->price}}</span></div><div class="priceProduct priceSale"><span class="money" data-currency-usd="{{$result->sale_price}}" data-currency="USD">${{$result->sale_price}}</span></div>
    @else
      <div class="priceProduct "><span class=money>${{$result->price}} </span></div>
    @endif
</div></div>
</div>
</div>
</div>
<div class="modal fade" id="Product{{$result->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg " >
      <div class="modal-content">
        <div class="modal-body">
            <div class="w-100 text-right">
                <a title="Close" class="quickviewClose btnClose text-right w-100" style="right: 0;" data-dismiss="modal" href="javascript:void(0);"></a>
            </div>
            <div class="proBoxPrimary row">
                <div class="proBoxImage col-xs-12 col-sm-12 col-md-5">
                    <div class="proFeaturedImage">
                        <a class="proImage" title="" href="/products/{{$result->id}}">
                            <img class="img-responsive proImageQuickview" src="{{asset('img/'.unserialize($result->thumbnail)[0])}}" alt="Quickview">
                            <span class="loadingImage" style="display: none;"></span>
                        </a>
                    </div>
                    <div class="proThumbnails proThumbnailsQuickview clearfix">
                        <div class="owl-thumblist">
                            <div class="owl-carousel owl-loaded" style="visibility: visible;">

                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 172px;">
                                    @foreach(unserialize($result->thumbnail) as $image)
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
                    <h3 class="quickviewName mb20 text-left"><a href="/products/{{$result->id}}" class="w-100 text-left">{{$result->name}}</a></h3>
                    <div class="proShortDescription rte text-left"><p>{{$result->excerpt}}</p>
   <p></p></div>

                <form method="post" action="{{route('addToCart')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                        <div class="proVariantsQuickview"></div>
                        <input type="hidden" value="{{$result->id}}" name="product"/>
                        <div class="proPrice clearfix">
                            @if($result->sale_price != null)
                            <div class="priceProduct priceCompare"><span class="money" data-currency-usd="{{$result->price}}" data-currency="USD">${{$result->price}}</span></div><div class="priceProduct priceSale"><span class="money" data-currency-usd="{{$result->sale_price}}" data-currency="USD">${{$result->sale_price}}</span></div>
                            @else
                            <div class="priceProduct "><span class="money">{{$result->price}} $</span></div>
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
                                <button type="submit" name="add" @if($result->stock==0) disabled @endif class="btn btnAddToCart">
                                    <span>Add to Cart</span>
                                </button>
                            </div>
                        </div>
                    </form>
                    @if($result->stock>0)<p class="proAttr productAvailability instock"><label>Availability:</label>In stock</p>
                    @else <p class="proAttr productAvailability outstock"><label>Availability:</label>Out of stock</p>
                    @endif
                </div>
            </div>
        </div>
      </div>
    </div>
   </div>


@endforeach
</div></div>

@endif

                <div class="searchPagination">
                    <nav class="velaPagination  pull-left">
                <ul class="pagination">
                    {!!$results->links()!!}
                </ul>
                </nav>
                </div>
@endif
    </div>
</div>
</div>
@endsection
@section('scripts')
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
@endsection
