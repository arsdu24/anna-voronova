<main class="mainContent" role="main">
            
    <div id="shopify-section-vela-breacrumb-image" class="shopify-section"><section class="velaBreadcrumbs hasBackgroundImage">
        <div class="velaBreadcrumbsInner" style="background-color: #eaebef"><div class="velaBreadcrumbImage">
    
    
    <img  alt="velademo-rubix" src="{{asset('img/slide11_1944x.png')}}" /></div><nav class="velaBreadcrumbWrap container">       
                <div class="velaBreadcrumbsInnerWrap"><h1 class="breadcrumbHeading">Products</h1><ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a href="../index.html" title="Back to the frontpage" itemprop="item">
                                <span itemprop="name">Home</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li><li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                    <span itemprop="name">Products</span>
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
                <div class="row">
                    <aside id="velaSidebar" class="filterTagFullwidthContent sidebarLeft velaSidebar">
                        <div class="filterTagFullwidthClose hidden-xl hidden-lg hidden-md hidden-xl"></div>
                        <div class="velaSidebarInner">
                            <div id="shopify-section-sidebartop" class="shopify-section"><div id="velaCategories" class="velaCategoriesSidebar velaBlock">
              <h3 class="titleSidebar">Product Categories</h3><div class="velaContent">
                    <ul class="sidebarListCategories list-unstyled">
                                @if(!isset($category) )
                                 <li class="sidebarCateItem active">
                                  <a class="active" href="/products">All Categories</a></li>
                                @else
                                    <li class="sidebarCateItem">
                                    <a class="" href="/products">All Categories</a></li>
                                @endif

                                @foreach($categories as $item)
                                    @if(isset($category) && $item->title == $category->title)
                                    <li class="sidebarCateItem active">
                                        <a href="/collections/{{$item->id}}" class="active">{{$item->title}}</a></li>
                                    @else
                                    <li class="sidebarCateItem">
                                        <a href="/collections/{{$item->id}}">{{$item->title}}</a></li>
                                    @endif
                                @endforeach
                    </ul>
                </div></div></div>
                            <div id="shopify-section-sidebarfilter" class="shopify-section"><div id="sidebarAjaxFilter" class="velaFilter velaBlock"><div class="velaContent">
                
    
                
    <div class="ajaxFilter velaBlock">
                        <h4 class="titleSidebar ajaxFilterTitle">
                            <span>Price</span>
                            <a href="javascript:void(0)" class="velaClear" style="display:none;" title="Clear"><i class="icons icon-close"></i></a>
                        </h4>
                        <ul class="listFilter  list-unstyled">
    
    <li class="filterItem" data-filter="price_-0-50">
                                                <a href="/collections/all/price_-0-50?view=list" title="Narrow selection to products matching tag Price_ $0 - $50"> $0 - $50</a>
                                            </li>
    <li class="filterItem" data-filter="price_-150-200">
                                                <a href="/collections/all/price_-150-200?view=list" title="Narrow selection to products matching tag Price_ $150 - $200"> $150 - $200</a>
                                            </li>
    <li class="filterItem" data-filter="price_-200-250">
                                                <a href="/collections/all/price_-200-250?view=list" title="Narrow selection to products matching tag Price_ $200 - $250"> $200 - $250</a>
                                            </li>
    <li class="filterItem" data-filter="price_-50-100">
                                                <a href="/collections/all/price_-50-100?view=list" title="Narrow selection to products matching tag Price_ $50 - $100"> $50 - $100</a>
                                            </li>
                        </ul>
                    </div>
                
            </div>
        </div>
        
        
    </div>
                            <div id="shopify-section-sidebarbottom" class="shopify-section"><div class="velaProductsSidebar velaBlock"><h3 class="titleSidebar">Best sellers</h3><div class="velaContent">
    <div class="productSidebar">
                        <div class="productSidebarImage">
                            <a class="d-block" href="/products/arctander-chair">
                                
                                    
    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyautosizes ls-is-cached lazyloaded" scr="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" data-widths="[1,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808]" data-aspectratio="0.8048289738430584" data-ratio="0.8048289738430584" data-sizes="auto" alt="Arctander Chair" data-srcset="//cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_1x.jpg?v=1598253084 1w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_360x.jpg?v=1598253084 360w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_540x.jpg?v=1598253084 540w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_720x.jpg?v=1598253084 720w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_900x.jpg?v=1598253084 900w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_1080x.jpg?v=1598253084 1080w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_1296x.jpg?v=1598253084 1296w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_1512x.jpg?v=1598253084 1512w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_1728x.jpg?v=1598253084 1728w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_1944x.jpg?v=1598253084 1944w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_2160x.jpg?v=1598253084 2160w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_2376x.jpg?v=1598253084 2376w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_2592x.jpg?v=1598253084 2592w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_2808x.jpg?v=1598253084 2808w" sizes="65px" srcset="//cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_1x.jpg?v=1598253084 1w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_360x.jpg?v=1598253084 360w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_540x.jpg?v=1598253084 540w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_720x.jpg?v=1598253084 720w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_900x.jpg?v=1598253084 900w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_1080x.jpg?v=1598253084 1080w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_1296x.jpg?v=1598253084 1296w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_1512x.jpg?v=1598253084 1512w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_1728x.jpg?v=1598253084 1728w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_1944x.jpg?v=1598253084 1944w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_2160x.jpg?v=1598253084 2160w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_2376x.jpg?v=1598253084 2376w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_2592x.jpg?v=1598253084 2592w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/21_1_2808x.jpg?v=1598253084 2808w">
        </div>
        <div class="placeholder-background placeholder-background--animation" data-image-placeholder=""></div>
    </div>
                            </a>
                        </div>
                        <div class="productSidebarContent">
                            <h4 class="productSidebarName">
                                <a href="/products/arctander-chair">Arctander Chair</a>
                            </h4>
                            <div class="productSidebarPrice"><div class="priceProduct "><span class="money" data-currency-usd="$39.00">$39.00</span></div>
                            </div>
                        </div>
                    </div>
                
    <div class="productSidebar">
                        <div class="productSidebarImage">
                            <a class="d-block" href="/products/stainless-steel-teapot">
                                
                                    
    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyautosizes ls-is-cached lazyloaded" scr="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" data-widths="[1,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808]" data-aspectratio="0.8048289738430584" data-ratio="0.8048289738430584" data-sizes="auto" alt="Stainless steel teapot" data-srcset="//cdn.shopify.com/s/files/1/0376/9440/6700/products/28_1x.jpg?v=1586316960 1w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_360x.jpg?v=1586316960 360w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_540x.jpg?v=1586316960 540w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_720x.jpg?v=1586316960 720w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_900x.jpg?v=1586316960 900w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_1080x.jpg?v=1586316960 1080w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_1296x.jpg?v=1586316960 1296w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_1512x.jpg?v=1586316960 1512w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_1728x.jpg?v=1586316960 1728w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_1944x.jpg?v=1586316960 1944w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_2160x.jpg?v=1586316960 2160w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_2376x.jpg?v=1586316960 2376w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_2592x.jpg?v=1586316960 2592w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_2808x.jpg?v=1586316960 2808w" sizes="65px" srcset="//cdn.shopify.com/s/files/1/0376/9440/6700/products/28_1x.jpg?v=1586316960 1w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_360x.jpg?v=1586316960 360w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_540x.jpg?v=1586316960 540w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_720x.jpg?v=1586316960 720w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_900x.jpg?v=1586316960 900w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_1080x.jpg?v=1586316960 1080w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_1296x.jpg?v=1586316960 1296w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_1512x.jpg?v=1586316960 1512w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_1728x.jpg?v=1586316960 1728w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_1944x.jpg?v=1586316960 1944w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_2160x.jpg?v=1586316960 2160w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_2376x.jpg?v=1586316960 2376w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_2592x.jpg?v=1586316960 2592w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/28_2808x.jpg?v=1586316960 2808w">
        </div>
        <div class="placeholder-background placeholder-background--animation" data-image-placeholder=""></div>
    </div>
    
    
                                
                            </a>
                        </div>
                        <div class="productSidebarContent">
                            <h4 class="productSidebarName">
                                <a href="/products/stainless-steel-teapot">Stainless steel teapot</a>
                            </h4>
                            <div class="productSidebarPrice"><div class="priceProduct priceCompare"><span class="money" data-currency-usd="$57.00">$57.00</span></div><div class="priceProduct priceSale"><span class="money" data-currency-usd="$39.00">$39.00</span></div>
                            </div>
                        </div>
                    </div>
                
    <div class="productSidebar">
                        <div class="productSidebarImage">
                            <a class="d-block" href="/products/beoplay-a1">
                                
                                    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyautosizes ls-is-cached lazyloaded" scr="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" data-widths="[1,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808]" data-aspectratio="0.8048289738430584" data-ratio="0.8048289738430584" data-sizes="auto" alt="Beoplay A1" data-srcset="//cdn.shopify.com/s/files/1/0376/9440/6700/products/29_1x.jpg?v=1586316900 1w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_360x.jpg?v=1586316900 360w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_540x.jpg?v=1586316900 540w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_720x.jpg?v=1586316900 720w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_900x.jpg?v=1586316900 900w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_1080x.jpg?v=1586316900 1080w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_1296x.jpg?v=1586316900 1296w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_1512x.jpg?v=1586316900 1512w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_1728x.jpg?v=1586316900 1728w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_1944x.jpg?v=1586316900 1944w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_2160x.jpg?v=1586316900 2160w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_2376x.jpg?v=1586316900 2376w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_2592x.jpg?v=1586316900 2592w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_2808x.jpg?v=1586316900 2808w" sizes="65px" srcset="//cdn.shopify.com/s/files/1/0376/9440/6700/products/29_1x.jpg?v=1586316900 1w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_360x.jpg?v=1586316900 360w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_540x.jpg?v=1586316900 540w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_720x.jpg?v=1586316900 720w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_900x.jpg?v=1586316900 900w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_1080x.jpg?v=1586316900 1080w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_1296x.jpg?v=1586316900 1296w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_1512x.jpg?v=1586316900 1512w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_1728x.jpg?v=1586316900 1728w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_1944x.jpg?v=1586316900 1944w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_2160x.jpg?v=1586316900 2160w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_2376x.jpg?v=1586316900 2376w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_2592x.jpg?v=1586316900 2592w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/29_2808x.jpg?v=1586316900 2808w">
        </div>
        <div class="placeholder-background placeholder-background--animation" data-image-placeholder=""></div>
    </div>
    
    
                                
                            </a>
                        </div>
                        <div class="productSidebarContent">
                            <h4 class="productSidebarName">
                                <a href="/products/beoplay-a1">Beoplay A1</a>
                            </h4>
                            <div class="productSidebarPrice"><div class="priceProduct priceCompare"><span class="money" data-currency-usd="$57.00">$57.00</span></div><div class="priceProduct priceSale"><span class="money" data-currency-usd="$39.00">$39.00</span></div>
                            </div>
                        </div>
                    </div>
                
    <div class="productSidebar">
                        <div class="productSidebarImage">
                            <a class="d-block" href="/products/turning-table">
                                
                                    
    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyautosizes ls-is-cached lazyloaded" scr="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" data-widths="[1,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808]" data-aspectratio="0.8048289738430584" data-ratio="0.8048289738430584" data-sizes="auto" alt="Turning Table" data-srcset="//cdn.shopify.com/s/files/1/0376/9440/6700/products/30_1x.jpg?v=1586316781 1w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_360x.jpg?v=1586316781 360w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_540x.jpg?v=1586316781 540w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_720x.jpg?v=1586316781 720w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_900x.jpg?v=1586316781 900w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_1080x.jpg?v=1586316781 1080w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_1296x.jpg?v=1586316781 1296w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_1512x.jpg?v=1586316781 1512w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_1728x.jpg?v=1586316781 1728w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_1944x.jpg?v=1586316781 1944w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_2160x.jpg?v=1586316781 2160w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_2376x.jpg?v=1586316781 2376w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_2592x.jpg?v=1586316781 2592w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_2808x.jpg?v=1586316781 2808w" sizes="65px" srcset="//cdn.shopify.com/s/files/1/0376/9440/6700/products/30_1x.jpg?v=1586316781 1w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_360x.jpg?v=1586316781 360w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_540x.jpg?v=1586316781 540w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_720x.jpg?v=1586316781 720w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_900x.jpg?v=1586316781 900w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_1080x.jpg?v=1586316781 1080w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_1296x.jpg?v=1586316781 1296w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_1512x.jpg?v=1586316781 1512w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_1728x.jpg?v=1586316781 1728w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_1944x.jpg?v=1586316781 1944w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_2160x.jpg?v=1586316781 2160w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_2376x.jpg?v=1586316781 2376w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_2592x.jpg?v=1586316781 2592w, //cdn.shopify.com/s/files/1/0376/9440/6700/products/30_2808x.jpg?v=1586316781 2808w">
        </div>
        <div class="placeholder-background placeholder-background--animation" data-image-placeholder=""></div>
    </div>
    
    
                                
                            </a>
                        </div>
                        <div class="productSidebarContent">
                            <h4 class="productSidebarName">
                                <a href="/products/turning-table">Turning Table</a>
                            </h4>
                            <div class="productSidebarPrice"><div class="priceProduct "><span class="money" data-currency-usd="$59.00">$59.00</span></div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div></div>
                        </div>
                    </aside>
                    <div id="proListCollection" class="velaCenterColumn velaCenterColumnFix col-xs-12 col-sm-12">
                        <div id="shopify-section-vela-template-collection" class="shopify-section">
    <div class="filterCollectionFullwidth"><div class="collBoxSort">
                    <div class="collView">

            @if(!isset( $_GET["view"]) || $_GET["view"]=='grid')
        <button 
            class="changeView changeViewGrid changeViewActive" 
            type="button" 
            title="Grid view" 
            data-view="grid">
            <span class="iconChangeView">
                <svg fill="currentColor" preserveAspectRatio="xMidYMid meet" height="16" width="16" viewBox="0 0 16 16" title="Grid" style="vertical-align:middle"><title>Grid</title><g><path d="M1,3.80447821 L1,1 L3.80447821,1 L3.80447821,3.80447821 L1,3.80447821 Z M6.5977609,3.80447821 L6.5977609,1 L9.4022391,1 L9.4022391,3.80447821 L6.5977609,3.80447821 Z M12.1955218,3.80447821 L12.1955218,1 L15,1 L15,3.80447821 L12.1955218,3.80447821 Z M1,9.4022391 L1,6.59706118 L3.80447821,6.59706118 L3.80447821,9.4022391 L1,9.4022391 Z M6.5977609,9.4022391 L6.5977609,6.5977609 L9.4022391,6.5977609 L9.4022391,9.4022391 L6.5977609,9.4022391 Z M12.1955218,9.4022391 L12.1955218,6.59706118 L15,6.59706118 L15,9.4022391 L12.1955218,9.4022391 Z M1,14.9993003 L1,12.1948221 L3.80447821,12.1948221 L3.80447821,14.9993003 L1,14.9993003 Z M6.5977609,14.9993003 L6.5977609,12.1948221 L9.4022391,12.1948221 L9.4022391,14.9993003 L6.5977609,14.9993003 Z M12.1955218,14.9993003 L12.1955218,12.1948221 L15,12.1948221 L15,14.9993003 L12.1955218,14.9993003 Z"></path></g></svg>
                <span class="hidden">Grid view</span>
            </span>
        </button>
        <button 
            class="changeView changeViewList" 
            type="button" 
            title="List view" 
            data-view="list">
            <span class="iconChangeView">
                <svg fill="currentColor" preserveAspectRatio="xMidYMid meet" height="16" width="16" viewBox="0 0 16 16" title="List" style="vertical-align:middle"><title>List</title><g><path d="M0,3 L0,1 L2,1 L2,3 L0,3 Z M0,7 L0,5 L2,5 L2,7 L0,7 Z M0,11 L0,9 L2,9 L2,11 L0,11 Z M0,15 L0,13 L2,13 L2,15 L0,15 Z M4,3 L4,1 L16,1 L16,3 L4,3 Z M4,7 L4,5 L16,5 L16,7 L4,7 Z M4,11 L4,9 L16,9 L16,11 L4,11 Z M4,15 L4,13 L16,13 L16,15 L4,15 Z"></path></g></svg>
                <span class="hidden">List view</span>
            </span>
        </button>
        @else
        <button 
            class="changeView changeViewGrid " 
            type="button" 
            title="Grid view" 
            data-view="grid">
            <span class="iconChangeView">
                <svg fill="currentColor" preserveAspectRatio="xMidYMid meet" height="16" width="16" viewBox="0 0 16 16" title="Grid" style="vertical-align:middle"><title>Grid</title><g><path d="M1,3.80447821 L1,1 L3.80447821,1 L3.80447821,3.80447821 L1,3.80447821 Z M6.5977609,3.80447821 L6.5977609,1 L9.4022391,1 L9.4022391,3.80447821 L6.5977609,3.80447821 Z M12.1955218,3.80447821 L12.1955218,1 L15,1 L15,3.80447821 L12.1955218,3.80447821 Z M1,9.4022391 L1,6.59706118 L3.80447821,6.59706118 L3.80447821,9.4022391 L1,9.4022391 Z M6.5977609,9.4022391 L6.5977609,6.5977609 L9.4022391,6.5977609 L9.4022391,9.4022391 L6.5977609,9.4022391 Z M12.1955218,9.4022391 L12.1955218,6.59706118 L15,6.59706118 L15,9.4022391 L12.1955218,9.4022391 Z M1,14.9993003 L1,12.1948221 L3.80447821,12.1948221 L3.80447821,14.9993003 L1,14.9993003 Z M6.5977609,14.9993003 L6.5977609,12.1948221 L9.4022391,12.1948221 L9.4022391,14.9993003 L6.5977609,14.9993003 Z M12.1955218,14.9993003 L12.1955218,12.1948221 L15,12.1948221 L15,14.9993003 L12.1955218,14.9993003 Z"></path></g></svg>
                <span class="hidden">Grid view</span>
            </span>
        </button>
        <button 
            class="changeView changeViewList changeViewActive" 
            type="button" 
            title="List view" 
            data-view="list">
            <span class="iconChangeView">
                <svg fill="currentColor" preserveAspectRatio="xMidYMid meet" height="16" width="16" viewBox="0 0 16 16" title="List" style="vertical-align:middle"><title>List</title><g><path d="M0,3 L0,1 L2,1 L2,3 L0,3 Z M0,7 L0,5 L2,5 L2,7 L0,7 Z M0,11 L0,9 L2,9 L2,11 L0,11 Z M0,15 L0,13 L2,13 L2,15 L0,15 Z M4,3 L4,1 L16,1 L16,3 L4,3 Z M4,7 L4,5 L16,5 L16,7 L4,7 Z M4,11 L4,9 L16,9 L16,11 L4,11 Z M4,15 L4,13 L16,13 L16,15 L4,15 Z"></path></g></svg>
                <span class="hidden">List view</span>
            </span>
        </button>
        @endif
         
    </div>
    <div class="pull-right">
        <select name="SortBy" id="SortBy" class="form-control">
            <option value="default">Default sorting</option>
            <option value="manual">Featured</option>
            <option value="best-selling">Best Selling</option>
            <option value="title-ascending">Alphabetically, A-Z</option>
            <option value="title-descending">Alphabetically, Z-A</option>
            <option value="price-ascending">Price, low to high</option>
            <option value="price-descending">Price, high to low</option>
            <option value="created-descending">Date, new to old</option>
            <option value="created-ascending">Date, old to new</option>
        </select>
    </div>
                </div>
            </div>
            
        <div class="collBoxProducts">
                <div id="velaProList" class="proList grid">
        <div class="rowFlex rowFlexMargin">
 
@if(!isset( $_GET["view"]) || $_GET["view"]=='grid')
            @foreach($products as $product)
                
    <div class="velaProBlock grid col-xs-6 col-md-4 col-lg-3" data-price="39.00">
        <div class="velaProBlockInner">
            <div class="proHImage d-flex flexJustifyCenter">
                @if($product->sale_price)
                <div class="productLable"><span class="labelSale">Sale</span></div>
                @endif
                <a class="proFeaturedImage" href="/products/{{$product->id}}">
                    <div class="wrap proSwatch">
    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyload"
                scr="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                data-src="{{asset('img/'.unserialize($product->thumbnail)[0])}}"
                data-widths="[1,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808]"
                data-aspectratio="0.8048289738430584"
                data-ratio="0.8048289738430584"
                data-sizes="auto"
                alt=""
            />
        </div>
        <div class="placeholder-background placeholder-background--animation" data-image-placeholder></div>
    </div></div></a>
                <div class="productLable"></div><div class="proButton clearfix"><form action="https://velademo-rubix.myshopify.com/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                        <input type="hidden" name="id" value="33475186819116" /><a class="btn btnProduct btnAddToCart" href="/products/{{$product->id}}" title="Select options">
                                    <span class="icons icon-handbag"></span>
                                    <span class="select_options text">Select options</span>
                                </a></form>
                    
        <div class="productQuickView">
            <a class="btn btnProduct btnProductQuickview" href="#velaQuickView" data-handle="arctander-chair" title="Quick view">
                <span class="icons icon-magnifier"></span>
                  <span class="text">Quick view</span>
            </a>
        </div>
        </div>
    </div>

    <div class="proContent">
        <h5 class="proName">
            <a href="/products/{{$product->id}}">{{$product->name}}</a>
        </h5>

    <div class="groupPrice clearfix">
      <div class="proPrice"> 
          @if($product->sale_price != null)
          <div class="priceProduct priceCompare"><span class="money" data-currency-usd="{{$product->price}}" data-currency="USD">${{$product->price}}</span></div><div class="priceProduct priceSale"><span class="money" data-currency-usd="{{$product->sale_price}}" data-currency="USD">${{$product->sale_price}}</span></div>               
          @else        
            <div class="priceProduct "><span class=money>${{$product->price}} </span></div>
          @endif
              </div></div>
                    </div>
        </div>
    </div>
                
            
    @endforeach
@else
@foreach($products as $product)
<div class="velaProBlock list col-xs-12" data-price="39.00">
    <div class="velaProBlockInner">
        <div class="rowFlex rowFlexMargin">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="proHImage">
                    @if($product->sale_price)
                    <div class="productLable"><span class="labelSale">Sale</span></div>
                    @endif
                    <a class="proFeaturedImage" href="/products/{{$product->id}}">
                        <div class="wrap proSwatch">
<div class="p-relative">
    <div class="product-card__image" style="padding-top:124.25%;">
        <img class="product-card__img lazyload"
                scr="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                data-src="{{asset('img/'.unserialize($product->thumbnail)[0])}}"
                data-widths="[1,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808]"
                data-aspectratio="0.8048289738430584"
                data-ratio="0.8048289738430584"
                data-sizes="auto"
                alt=""
            />
    </div>
    <div class="placeholder-background placeholder-background--animation" data-image-placeholder=""></div>
</div>
                        </div></a>
                    <div class="productLable"></div></div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-6 col-lg-7">
                <div class="proContent"><h4 class="proName">
                        <a href="/products/{{$product->id}}">{{$product->name}}</a>
                    </h4>
                    <div class="proPrice">
                        @if($product->sale_price != null)
                        <div class="priceProduct priceCompare"><span class="money" data-currency-usd="{{$product->price}}" data-currency="USD">${{$product->price}}</span></div><div class="priceProduct priceSale"><span class="money" data-currency-usd="{{$product->sale_price}}" data-currency="USD">${{$product->sale_price}}</span></div>               
                        @else 
                        <div class="priceProduct "><span class="money">{{$product->price}} $</span></div>     
                        @endif          
                    </div><div class="proDescription"><p>{{$product->excerpt}}</p>
<p></p></div></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 rowFlex flexAlignCenter">
                <div class="proButton text-center"><form action="/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                        <input type="hidden" name="id" value="33475186819116"><a class="btn btnProduct btnAddToCart" href="/products/{{$product->id}}" title="Select options">
                                    <span class="icons icon-handbag"></span>
                                    <span class="text select_options">Select options</span>
                                </a></form>
    <div class="productQuickView">
        <a class="btn btnProduct btnProductQuickview" href="#velaQuickView" data-handle="arctander-chair" title="Quick view">
            <span class="icons icon-magnifier"></span>
          	<span class="text">Quick view</span>
        </a>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endforeach
@endif    
</div>
            <div id="collPagination" class="velaPaginationWrap clearfix">
                <nav class="velaPagination  pull-left">
        <ul class="pagination">
           {!!$products->links()!!}
        </ul>
    </nav>
                <div class="collProductCount itemPaginate pull-right hidden-xs hidden-sm">
                    Showing {{$products->firstItem()}} to {{$products->count()}} of {{$products->total()}} entries
                </div>
            </div>
        
    
    </div>
                    </div>
                </div>
            </div>
        </div>
    </section> </main>