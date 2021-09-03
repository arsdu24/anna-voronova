<main class="mainContent" role="main">
        <!-- BEGIN content_for_index -->
        <div id="shopify-section-1551027504217" class="shopify-section velaFramework">
            <div class="banner-slideShow " style="background-color: #eaebef;  margin:0 0 60px; ">
                <div class="container-full">
                    <div class="velaSlideshow">
                        <div data-section-id="1551027504217" data-section-type="velaSlideshowSection">
                            <div class="velaSlideshowWrapper">
                            <button type="button" class="btnssPause" data-id="1551027504217">
                            <span class="btnssPauseStop">
                                <i class="fa fa-play"></i>
                                <span class="iconText">Pause slideshow</span>
                            </span>
                            <span class="btnssPausePlay">
                                <i class="fa fa-pause"></i>
                                <span class="iconText">Play slideshow</span>
                            </span>
                                </button>
                                <div id="velaSlideshows1551027504217" class="vela--slideshow velaSliderLoading"
                                     data-autoplay="false" data-speed="8000" data-navigation="true"
                                     data-pagination="true">
                                    @foreach($slides as $slide)
                                        <div class="velassSlide ">
                                        <a href="/products" class="velassLink">
                                            <div class="velassImage">
                                                <div class="p-relative">
                                                    <div class="product-card__image float-right"
                                                         style="padding-top:34.89583333333333%;">
                                                        <img class="product-card__img lazyload float-right" src="{{asset('img/'.$slide->thumbnail)}}"/>
                                                    </div>
                                                    <div
                                                        class="placeholder-background placeholder-background--animation"
                                                        data-image-placeholder></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="velassCaption captionPosition "
                                             style="background-color:rgba(0,0,0,0);">
                                            <div class="container captionWrap">
                                                <div class="velassCaptionContent text-left align-middle">
                                                    <div class="velassCaptionInner text-left w-100" style="word-wrap: break-word;">
                                                        <h2 class="velassHeading bottomtop-2" style="color:#444444; word-wrap:break-word; width:50%">
                                                            <b >{{$slide->excerpt}} <span class="text-primary">{{$slide->highlighted ?? ''}}</span></b>
                                                        </h2>
                                                        <h3 class="velassHeadingSmall bottomtop-3"
                                                            style="color:#1a1a1a;word-wrap:break-word;width:50% ">
                                                            {{$slide->title}}
                                                        </h3><a class="btn btnVelaSlider bottomtop-5"
                                                                href="/collections/all" style="border-color: #1a1a1a;
                                                                background-color: #1a1a1a;
                                                                color: #ffffff;
                                                                padding: 14px 30px; ">
                                                            Start Shopping
                                                            <i class="icons icon-arrow-right"></i>
                                                        </a></div>
                                                </div>
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
        </div>


        @include('blocks.treding-block')
        <div id="shopify-section-1585935437629" class="shopify-section velaFramework">
            <div class="velaMultiBanner mb30" style="background-color: rgba(0,0,0,0);
                                     padding:0 0 20px; ">
                <div class="container-full">
                    <div class="velaMultiBannerInner gutter20">
                        <div class="velaContent">
                            <div class="rowFlex rowFlexMargin ">

                                <div class="col-xs-12 col-sm-12">
                                    <div class="mb30 velaBanner effectFour">
                                        <a href="{{$firstBanner->link}}" title="velademo-rubix">

                                            <div class="p-relative">
                                                <div class="product-card__image"
                                                     style="padding-top:29.16666666666667%;">
                                                    <img class="product-card__img lazyload" src="{{asset('img/'.$firstBanner->thumbnail)}}" data-sizes="auto" alt=""/>
                                                </div>
                                                <div class="placeholder-background placeholder-background--animation"
                                                     data-image-placeholder></div>
                                            </div>

                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
           @include('blocks.best-seller-block')
           @include('blocks.newsletter')
        <div id="shopify-section-1585963328748" class="shopify-section velaFramework">
            <div class="velaServices mbBlockGutter" style="background-color: #f8f8f8; padding: 20px 0; ">
                <div class="container">
                @include('blocks.services-block')
                </div>
            </div>
        </div>
        <div id="shopify-section-1585935437629" class="shopify-section velaFramework">
            <div class="velaMultiBanner mb30" style="background-color: rgba(0,0,0,0);
                                     padding:0 0 20px; ">
                <div class="container-full">
                    <div class="velaMultiBannerInner gutter20">
                        <div class="velaContent">
                            <div class="rowFlex rowFlexMargin ">

                                <div class="col-xs-12 col-sm-12">
                                    <div class="mb30 velaBanner effectFour">
                                        <a href="{{$secondBanner->link}}" title="velademo-rubix">

                                            <div class="p-relative">
                                                <div class="product-card__image"
                                                     style="padding-top:29.16666666666667%;">
                                                    <img class="product-card__img lazyload" src="{{asset('img/'.$secondBanner->thumbnail)}}" data-sizes="auto" alt=""/>
                                                </div>
                                                <div class="placeholder-background placeholder-background--animation"
                                                     data-image-placeholder></div>
                                            </div>

                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="shopify-section-1575598558710" class="shopify-section velaFramework">
            <div class="velaHomeBlogs mbGutter style1" style="background-color: rgba(0,0,0,0); padding:50px 0 20px;">
                <div class="container">
                    <div class="velaHomeBlogsInner ">
                    @include('blocks.blog-posts')
                    </div>
                </div>
            </div>
        </div>
        <!-- END content_for_index -->
    </main>