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
                <div class="row"><div id="proListCollection" class="velaCenterColumn  col-xs-12 col-sm-12">
                        <div id="shopify-section-vela-template-collection" class="shopify-section">
    <div class="filterCollectionFullwidth"><div class="collBoxSort">
                    <div class="collView">
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
    </div>
    <div class="collSortBy  pull-right">
    <!-- <label for="SortBy">Default sorting</label> -->
        <select name="SortBy" id="SortBy" class="form-control">
            <option value="">Default sorting</option>
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
            

            @foreach($products as $product)
                
    
    <div class="velaProBlock grid col-xs-6 col-md-4 col-lg-3" data-price="39.00">
        <div class="velaProBlockInner">
            <div class="proHImage d-flex flexJustifyCenter">
                <a class="proFeaturedImage" href="../products/arctander-chair.html">
                    <div class="wrap proSwatch">
                        
                            
    
    <div class="p-relative">
        <div class="product-card__image" style="padding-top:124.25%;">
            <img class="product-card__img lazyload"
                scr="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                data-src="{{asset('img/'.$product->image)}}"
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
                <div class="productLable"></div><div class="proButton clearfix"><form action="https://velademo-rubix.myshopify.com/cart/add" method="post" enctype="multipart/form-data" class="formAddToCart">
                        <input type="hidden" name="id" value="33475186819116" /><a class="btn btnProduct btnAddToCart" href="../products/arctander-chair.html" title="Select options">
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
            <a href="../products/arctander-chair.html">{{$product->name}}</a>
        </h5>

    <div class="groupPrice clearfix">
      <div class="proPrice">         
            <div class="priceProduct "><span class=money>$39.00</span></div>               
                            </div></div>
                    </div>
        </div>
    </div>
                
            
    @endforeach
        </div>
        
            <div id="collPagination" class="velaPaginationWrap clearfix">
                <nav class="velaPagination  pull-left">
        <ul class="pagination">
            
                <li class="disabled">
                    <span><i class="fa fa-angle-double-left"></i><!-- <span>Prev</span> --></span>
                </li>
                        <li class="active"><span>1</span></li>
                    <li>
                        <a href="all4658.html?page=2" title="">2</a>
                    </li>
                <li class="pagiNext">
                    <a href="all4658.html?page=2" title="Next">
                        <!-- <span>Next</span> --><i class="fa fa-angle-double-right"></i>
                    </a>
                </li>
            
        </ul>
    </nav>
                <div class="collProductCount itemPaginate pull-right hidden-xs hidden-sm"><span>Showing 1-12</span> of 17 Results</div>
            </div>
        
    
    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            </main>