@extends('layouts.App')

@section('title', 'Collections')

@section('shopify-section-main')

<main class="mainContent" role="main">
    <div id="shopify-section-vela-breacrumb-image" class="shopify-section"><section class="velaBreadcrumbs hasBackgroundImage">
<div class="velaBreadcrumbsInner" style="background-color: #eaebef"><div class="velaBreadcrumbImage">

<img  alt="velademo-rubix" src="//cdn.shopify.com/s/files/1/0376/9440/6700/files/bg-breacumb.jpg?v=1586848586" /></div><nav class="velaBreadcrumbWrap container">       
    <div class="velaBreadcrumbsInnerWrap"><h1 class="breadcrumbHeading">Collections</h1><ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="/" title="Back to the frontpage" itemprop="item">
                    <span itemprop="name">Home</span>
                </a>
                <meta itemprop="position" content="1" />
            </li><li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <span itemprop="name">Collections</span>
                    <meta itemprop="position" content="2" />
                </li></ol>
    </div>
</nav>
</div>
</section>
</div>
<section id="pageContent">
<div class="container">
<div class="pageCollectionInner mb20 pb-md-30">
    <div id="shopify-section-vela-template-collections" class="shopify-section">
<div class="rowFlex rowFlexMargin">
@foreach($collections as $category)
<div class="col-xs-12 col-sm-6 col-md-4 col-xl-3">
    <div class="velaBoxCollection mb30 pb-md-30"><div class="velaBoxCollectionImage">
                <a href="/collections/{{$category->id}}">
<div class="p-relative">
    <div class="product-card__image" style="padding-top:100.0%;">
    <img class="product-card__img lazyload"
        scr="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
        data-src="{{asset('img/'.$category->thumbnail)}}"
        data-widths="[1,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808]"
        data-aspectratio="1.0"
        data-ratio="1.0"
        data-sizes="auto"
        alt="{{$category->title}}"
    />
    </div>
    <div class="placeholder-background placeholder-background--animation" data-image-placeholder></div>
    </div>
    </a> </div><div class="velaBoxCollectionContent">
                        <h3 class="collectionTitle">
                            <a href="/collections/{{$category->id}}" title="{{$category->title}}">{{$category->title}}</a>
                        </h3><div class="collectionProductCount">{{$category->products->where('published',1)->count()}} products</div><div class="collectionButtonDetail">
                                <a href="/collections/{{$category->id}}" title="Shop the collection">
                                    Shop the collection
                                </a>
                            </div></div>
                </div>
            </div>
@endforeach


            </div>
</div>
</div>
</div>
</section>
</main>
@endsection