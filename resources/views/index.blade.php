<!doctype html>
<!--[if IE 9]>
<html class="ie9 no-js" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#ba933e">
    <link rel="canonical" href="{{ route('home') }}">
    <link rel="shortcut icon" href="{{ asset('img/faviicon_32x32.jpg') }}" type="image/png">
    <title>
        velademo-rubix
    </title>

    <!-- /snippets/social-meta-tags.liquid -->
    <meta property="og:site_name" content="velademo-rubix">
    <meta property="og:url" content="{{route('home')}}">
    <meta property="og:title" content="velademo-rubix">
    <meta property="og:type" content="website">
    <meta property="og:description" content="velademo-rubix">

    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="velademo-rubix">
    <meta name="twitter:description" content="velademo-rubix">

    <link href="{{asset('css/app.css')}}"
          rel="stylesheet" type="text/css" media="all"/>

    <script src="{{asset('js/jquery-3.5.0.min.js')}}"
            type="text/javascript"></script>
    <link href="{{route('home')}}" rel="dns-prefetch">
    <script integrity="sha256-2KbxRG1nAJxSTtTmhkiAC6kILrdVSO4o4QUDMcvnuig="
            data-source-attribution="shopify.loadfeatures" defer="defer"
            src="{{asset('js/load_feature-d8a6f1446d67009c524ed4e68648800ba9082eb75548ee28e1050331cbe7ba28.js')}}"
            crossorigin="anonymous"></script>
    <script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4="
            data-source-attribution="shopify.dynamic-checkout" defer="defer"
            src="{{asset('js/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js')}}"
            crossorigin="anonymous"></script>
    <meta property="og:image"
          content="{{asset('img/logo.png')}}"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="628"/>
</head>

<body id="velademo-rubix" class="template-index  bodyPreLoading">
<div id="cartDrawer" class="drawer drawerRight">
    <div class="drawerClose">
        <span class="jsDrawerClose"></span>
    </div>
    <div class="drawerCartTitle">
        <span>Shopping cart</span>
    </div>
    <div id="cartContainer"></div>
</div>
<div id="pageContainer" class="isMoved">
    <div id="shopify-section-vela-header" class="shopify-section">
        <div id="velaTopbar">
            <div class="container">
                <div class="velaTopbarInner row flexAlignCenter">
                    <div class="velaTopbarLeft hidden-xs hidden-sm hidden-md d-flex col-md-4"><i
                            class="icons icon-call-in"></i> +391 (0)35 2568 4593<span class="ml10 mr10">|</span> <i
                            class="icons icon-envelope"></i>velatheme@gmail.com
                    </div>
                    <div class="velaTopbarCenter text-center col-xs-12 col-md-12 col-lg-4">
                        Free shipping on all orders over <u>$79</u><a href="/collections/all" class="bg-primary">shop
                            Now!</a>
                    </div>
                    <div class="velaTopbarRight d-flex flexAlignEnd hidden-xs hidden-sm hidden-md d-flex col-md-4">
                        <div class="vela-currency jsvela-currency" name="currencies" data-value="USD">
                            <div class="vela-currency__title" data-toggle="dropdown">
                                <span class="vela-currency__current jsvela-currency__current">USD</span>
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <div class="dropdown-menu vela-currency__content">
                                <div class="vela-currency__item jsvela-currency__item active" data-value="USD">USD</div>
                                <div class="vela-currency__item jsvela-currency__item" data-value="INR">INR</div>
                                <div class="vela-currency__item jsvela-currency__item" data-value="GBP">GBP</div>
                                <div class="vela-currency__item jsvela-currency__item" data-value="CAD">CAD</div>
                                <div class="vela-currency__item jsvela-currency__item" data-value="AUD">AUD</div>
                                <div class="vela-currency__item jsvela-currency__item" data-value="EUR">EUR</div>
                                <div class="vela-currency__item jsvela-currency__item" data-value="JPY">JPY</div>
                            </div>
                        </div>
                        <div class="hidden-xs">
                            <div class="d-flex velaSocialTop">
                                <a target="_blank" href="https://www.facebook.com/velatheme">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a target="_blank" href="https://twitter.com/velatheme">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a target="_blank" href="https://www.instagram.com/velatheme/">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a target="_blank" href="https://www.pinterest.com/velatheme/">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header id="velaHeader" class="velaHeader">
            <section class="headerWrap">
                <div class="velaHeaderMain headerMenu">
                    <div class="container">
                        <div class="headerContent rowFlex rowFlexMargin flexAlignCenter">
                            <div class="velaHeaderMobile hidden-lg hidden-xl hidden-md col-xs-3 col-sm-3">
                                <div class="menuBtnMobile d-flex flexAlignCenter">
                                    <div id="btnMenuMobile" class="btnMenuMobile">
                                        <span class="iconMenu"></span>
                                        <span class="iconMenu"></span>
                                        <span class="iconMenu"></span>
                                        <span class="iconMenu"></span>
                                    </div>
                                    <a class="velaSearchIcon" href="#velaSearchTop" data-toggle="collapse"
                                       title="Search">
                                        <i class="icons icon-magnifier"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="velaHeaderLeft d-flex flexAlignCenter col-xs-6 col-sm-6 col-md-2 col-lg-3">
                                <h1 class="velaLogo" itemscope itemtype="http://schema.org/Organization"><a href="/"
                                                                                                            itemprop="url"
                                                                                                            class="velaLogoLink"
                                                                                                            style="width: 150px;"><span
                                            class="text-hide">velademo-rubix</span>


                                        <div class="p-relative">
                                            <div class="product-card__image" style="padding-top:18.461538461538463%;">
                                                <img class="product-card__img lazyload"/>
                                            </div>
                                            <div class="placeholder-background placeholder-background--animation"
                                                 data-image-placeholder></div>
                                        </div>


                                    </a></h1>
                            </div>
                            <div
                                class="velaHeaderCenter velaMainmenu hidden-xs hidden-sm d-flex flexJustifyCenter col-xs-6 col-sm-8 col-lg-6 p-static">
                                <section id="velaMegamenu" class="velaMegamenu">
                                    <nav class="menuContainer">
                                        <ul class="nav hidden-xs hidden-sm">
                                            <li class="hasMenuDropdown active">
                                                <a href="/" title="Home">
                                                    <span>Home</span>
                                                </a>
                                                <ul class="menuDropdown">
                                                    <li class="">
                                                        <a href="{{route('home')}}=94977327148"
                                                           title=""><span>Home 01</span></a>
                                                    </li>
                                                    <li class="">
                                                        <a href="{{route('home')}}=96445497388"
                                                           title=""><span>Home 02</span></a>
                                                    </li>
                                                    <li class="">
                                                        <a href="{{route('home')}}=96547930156"
                                                           title=""><span>Home 03</span></a>
                                                    </li>
                                                    <li class="">
                                                        <a href="{{route('home')}}=96549371948"
                                                           title=""><span>Home 04</span></a>
                                                    </li>
                                                    <li class="">
                                                        <a href="{{route('home')}}=96538427436"
                                                           title=""><span>Home 05</span></a>
                                                    </li>
                                                    <li class="">
                                                        <a href="{{route('home')}}=96540786732"
                                                           title=""><span>Home 06</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="hasMenuDropdown hasMegaMenu">
                                                <a href="/collections/all" title="">
                                                    <span>Shop</span></a>
                                                <a class="btnCaret hidden-xl hidden-lg hidden-md" data-toggle="collapse"
                                                   href="#megaDropdown21"></a>

                                                <div id="megaDropdown21" class="menuDropdown megaMenu collapse">
                                                    <div class="menuGroup row">

                                                        <div class="col-sm-5">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-4">
                                                                    <ul class="velaMenuLinks">
                                                                        <li class="menuTitle">
                                                                            <a href="/collections" title="">Catalog</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/collections/furniture" title="">Furniture</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/collections/chairs" title="">Chairs</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/collections/sofas"
                                                                               title="">Sofas</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/collections/decoration" title="">Decor
                                                                                Art</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/collections/lighting-lamp"
                                                                               title="">Lighting Lamp</a>
                                                                        </li>

                                                                    </ul>
                                                                </div>

                                                                <div class="col-xs-12 col-sm-4">
                                                                    <ul class="velaMenuLinks">
                                                                        <li class="menuTitle">
                                                                            <a href="/collections/all" title="">Shop
                                                                                pages</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/collections/all" title="">Left
                                                                                sidebar</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/collections/decoration" title="">Collection
                                                                                List</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/collections/furniture" title="">Collection
                                                                                Grid</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/collections/frontpage" title="">Full
                                                                                Width</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="/collections/sofas" title="">Fullwidth
                                                                                <sup>1</sup></a>
                                                                        </li>

                                                                    </ul>
                                                                </div>

                                                                <div class="col-xs-12 col-sm-4">
                                                                    <ul class="velaMenuLinks">
                                                                        <li class="menuTitle">
                                                                            <a href="/products/arctander-chair"
                                                                               title="">Product Pages</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://velademo-rubix.myshopify.com/products/arctander-chair/?preview_theme_id=94977327148"
                                                                               title="">Product page <sup>1</sup></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://velademo-rubix.myshopify.com/products/arctander-chair/?preview_theme_id=96445497388"
                                                                               title="">Product page <sup>2</sup></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://velademo-rubix.myshopify.com/products/arctander-chair/?preview_theme_id=96547930156"
                                                                               title="">Product page <sup>3</sup></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://velademo-rubix.myshopify.com/products/arctander-chair/?preview_theme_id=96549371948"
                                                                               title="">Product page <sup>4</sup></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://velademo-rubix.myshopify.com/products/arctander-chair/?preview_theme_id=96538427436"
                                                                               title="">Product page <sup>5</sup></a>
                                                                        </li>

                                                                    </ul>
                                                                </div>

                                                            </div>
                                                        </div>


                                                        <div class="col-sm-3">
                                                            <div class="velaMenuProducts">

                                                                <div class="menuTitle"><span>New Products</span></div>

                                                                <div class="listProduct">


                                                                    <div class="blockProMenu">
                                                                        <div class="proImage proImageMenu">
                                                                            <a class="proImageLink"
                                                                               href="/products/victo-pedant-lamp"
                                                                               title=""
                                                                               style="width: 80px; display: block;">


                                                                                <div class="p-relative">
                                                                                    <div class="product-card__image"
                                                                                         style="padding-top:124.25%;">
                                                                                        <img
                                                                                            class="product-card__img lazyload"
                                                                                            data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/products/14_{width}x.jpg?v=1586245038"
                                                                                            data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                                                                                            data-aspectratio="0.8048289738430584"
                                                                                            data-ratio="0.8048289738430584"
                                                                                            data-sizes="auto"
                                                                                            alt="Victo pedant lamp"/>
                                                                                    </div>
                                                                                    <div
                                                                                        class="placeholder-background placeholder-background--animation"
                                                                                        data-image-placeholder></div>
                                                                                </div>


                                                                            </a>
                                                                        </div>
                                                                        <div class="proMeta proMetaMenu">
                                                                            <h5 class="proName">
                                                                                <a href="/products/victo-pedant-lamp"
                                                                                   title="">Victo pedant lamp</a>
                                                                            </h5>

                                                                            <div class="boxProPrice">

                                                                                <span class=" proPrice"><span
                                                                                        class=money>$79.00</span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="blockProMenu">
                                                                        <div class="proImage proImageMenu">
                                                                            <a class="proImageLink"
                                                                               href="/products/turning-table" title=""
                                                                               style="width: 80px; display: block;">


                                                                                <div class="p-relative">
                                                                                    <div class="product-card__image"
                                                                                         style="padding-top:124.25%;">
                                                                                        <img
                                                                                            class="product-card__img lazyload"
                                                                                            data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/products/30_{width}x.jpg?v=1586316781"
                                                                                            data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                                                                                            data-aspectratio="0.8048289738430584"
                                                                                            data-ratio="0.8048289738430584"
                                                                                            data-sizes="auto"
                                                                                            alt="Turning Table"/>
                                                                                    </div>
                                                                                    <div
                                                                                        class="placeholder-background placeholder-background--animation"
                                                                                        data-image-placeholder></div>
                                                                                </div>


                                                                            </a>
                                                                        </div>
                                                                        <div class="proMeta proMetaMenu">
                                                                            <h5 class="proName">
                                                                                <a href="/products/turning-table"
                                                                                   title="">Turning Table</a>
                                                                            </h5>

                                                                            <div class="boxProPrice">

                                                                                <span class=" proPrice"><span
                                                                                        class=money>$59.00</span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

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
                                            </li>

                                            <li class="hasMenuDropdown hasMegaMenu">
                                                <a href="/collections" title="">
                                                    <span>Collections</span></a>
                                                <a class="btnCaret hidden-xl hidden-lg hidden-md" data-toggle="collapse"
                                                   href="#megaDropdown22"></a>

                                                <div id="megaDropdown22" class="menuDropdown megaMenu collapse">
                                                    <div class="menuGroup row">

                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-12">
                                                            <div class="velaMenuListCollection">

                                                                <div class="velaMenuListContent rowFlex">


                                                                    <div class="coll-item" style="width: 16.6667%;">
                                                                        <div class="collImage">
                                                                            <a href="/collections/furniture">


                                                                                <div class="p-relative">
                                                                                    <div class="product-card__image"
                                                                                         style="padding-top:100.0%;">
                                                                                        <img
                                                                                            class="product-card__img lazyload"
                                                                                            data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/collections/7_{width}x.jpg?v=1587097465"
                                                                                            data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                                                                                            data-aspectratio="1.0"
                                                                                            data-ratio="1.0"
                                                                                            data-sizes="auto"
                                                                                            alt="Furniture"/>
                                                                                    </div>
                                                                                    <div
                                                                                        class="placeholder-background placeholder-background--animation"
                                                                                        data-image-placeholder></div>
                                                                                </div>


                                                                            </a>
                                                                        </div>
                                                                        <h5 class="collTitle"><a
                                                                                href="/collections/furniture"
                                                                                title="Furniture"> Furniture</a></h5>
                                                                    </div>


                                                                    <div class="coll-item" style="width: 16.6667%;">
                                                                        <div class="collImage">
                                                                            <a href="/collections/chairs">


                                                                                <div class="p-relative">
                                                                                    <div class="product-card__image"
                                                                                         style="padding-top:100.0%;">
                                                                                        <img
                                                                                            class="product-card__img lazyload"
                                                                                            data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/collections/7_0a95e6cb-4ae8-4685-894a-04c0fda3cd2c_{width}x.jpg?v=1598244162"
                                                                                            data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                                                                                            data-aspectratio="1.0"
                                                                                            data-ratio="1.0"
                                                                                            data-sizes="auto"
                                                                                            alt="Chairs"/>
                                                                                    </div>
                                                                                    <div
                                                                                        class="placeholder-background placeholder-background--animation"
                                                                                        data-image-placeholder></div>
                                                                                </div>


                                                                            </a>
                                                                        </div>
                                                                        <h5 class="collTitle"><a
                                                                                href="/collections/chairs"
                                                                                title="Chairs"> Chairs</a></h5>
                                                                    </div>


                                                                    <div class="coll-item" style="width: 16.6667%;">
                                                                        <div class="collImage">
                                                                            <a href="/collections/sofas">


                                                                                <div class="p-relative">
                                                                                    <div class="product-card__image"
                                                                                         style="padding-top:100.0%;">
                                                                                        <img
                                                                                            class="product-card__img lazyload"
                                                                                            data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/collections/22_{width}x.jpg?v=1587132940"
                                                                                            data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                                                                                            data-aspectratio="1.0"
                                                                                            data-ratio="1.0"
                                                                                            data-sizes="auto"
                                                                                            alt="Sofas"/>
                                                                                    </div>
                                                                                    <div
                                                                                        class="placeholder-background placeholder-background--animation"
                                                                                        data-image-placeholder></div>
                                                                                </div>


                                                                            </a>
                                                                        </div>
                                                                        <h5 class="collTitle"><a
                                                                                href="/collections/sofas" title="Sofas">
                                                                                Sofas</a></h5>
                                                                    </div>


                                                                    <div class="coll-item" style="width: 16.6667%;">
                                                                        <div class="collImage">
                                                                            <a href="/collections/lighting-lamp">


                                                                                <div class="p-relative">
                                                                                    <div class="product-card__image"
                                                                                         style="padding-top:100.0%;">
                                                                                        <img
                                                                                            class="product-card__img lazyload"
                                                                                            data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/collections/21_{width}x.jpg?v=1587097430"
                                                                                            data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                                                                                            data-aspectratio="1.0"
                                                                                            data-ratio="1.0"
                                                                                            data-sizes="auto"
                                                                                            alt="Lighting Lamp"/>
                                                                                    </div>
                                                                                    <div
                                                                                        class="placeholder-background placeholder-background--animation"
                                                                                        data-image-placeholder></div>
                                                                                </div>


                                                                            </a>
                                                                        </div>
                                                                        <h5 class="collTitle"><a
                                                                                href="/collections/lighting-lamp"
                                                                                title="Lighting Lamp"> Lighting Lamp</a>
                                                                        </h5>
                                                                    </div>


                                                                    <div class="coll-item" style="width: 16.6667%;">
                                                                        <div class="collImage">
                                                                            <a href="/collections/decoration">


                                                                                <div class="p-relative">
                                                                                    <div class="product-card__image"
                                                                                         style="padding-top:100.0%;">
                                                                                        <img
                                                                                            class="product-card__img lazyload"
                                                                                            data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/collections/18_{width}x.jpg?v=1587097408"
                                                                                            data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                                                                                            data-aspectratio="1.0"
                                                                                            data-ratio="1.0"
                                                                                            data-sizes="auto"
                                                                                            alt="Decor Art"/>
                                                                                    </div>
                                                                                    <div
                                                                                        class="placeholder-background placeholder-background--animation"
                                                                                        data-image-placeholder></div>
                                                                                </div>


                                                                            </a>
                                                                        </div>
                                                                        <h5 class="collTitle"><a
                                                                                href="/collections/decoration"
                                                                                title="Decor Art"> Decor Art</a></h5>
                                                                    </div>


                                                                    <div class="coll-item" style="width: 16.6667%;">
                                                                        <div class="collImage">
                                                                            <a href="/collections/frontpage">


                                                                                <div class="p-relative">
                                                                                    <div class="product-card__image"
                                                                                         style="padding-top:100.0%;">
                                                                                        <img
                                                                                            class="product-card__img lazyload"
                                                                                            data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/collections/16_{width}x.jpg?v=1587755406"
                                                                                            data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                                                                                            data-aspectratio="1.0"
                                                                                            data-ratio="1.0"
                                                                                            data-sizes="auto"
                                                                                            alt="Home page"/>
                                                                                    </div>
                                                                                    <div
                                                                                        class="placeholder-background placeholder-background--animation"
                                                                                        data-image-placeholder></div>
                                                                                </div>


                                                                            </a>
                                                                        </div>
                                                                        <h5 class="collTitle"><a
                                                                                href="/collections/frontpage"
                                                                                title="Home page"> Home page</a></h5>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>

                                            <li class="">
                                                <a href="/blogs/news" title="">
                                                    <span>Blogs</span></a>
                                            </li>
                                            <li class="">
                                                <a href="/pages/contact-us" title="">
                                                    <span>Contact Us</span></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </section>
                            </div>
                            <div class="velaHeaderRight col-xs-3 col-sm-3 col-md-2 col-lg-3">


                                <div id="velaTopLinks" class="velaTopLinks d-flex flexAlignCenter">
                                    <a href="/account">
                                        <i class="icons icon-user"></i>
                                    </a>
                                    <ul class="list-unstyled list-inline hidden-xs hidden-sm hidden-md">

                                        <li><a href="/account/login" id="customer_login_link">Login</a></li>
                                        <li><a href="/account/register" id="customer_register_link">Sign up</a></li>

                                    </ul>
                                </div>


                                <a class="velaSearchIcon hidden-xs hidden-sm" href="#velaSearchTop"
                                   data-toggle="collapse" title="Search">
                                    <i class="icons icon-magnifier"></i>
                                </a>
                                <div class="velaCartTop"><a href="/cart" class="jsDrawerOpenRight d-flex">
                                        <i class="icons icon-handbag"></i>
                                        <span class="text"><span id="CartCount">1</span></span>

                                    </a></div>
                            </div>
                            <div id="velaSearchTop" class="collapse">
                                <div class="text-center">
                                    <form id="velaSearchbox" class="formSearch" action="/search" method="get">
                                        <input type="hidden" name="type" value="product">
                                        <input class="velaSearch form-control" type="search" name="q" value=""
                                               placeholder="Enter keywords to search..." autocomplete="off"/>
                                        <button id="velaSearchButton" class="btnVelaSearch" type="submit">
                                            <i class="icons icon-magnifier"></i>
                                            <span class="btnSearchText">Search</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <div id="velaMenuMobile" class="menuMobileContainer hidden-md hidden-lg">
            <div class="menuMobileWrapper">
                <div class="memoHeader">
                    <span>Menu Mobile</span>
                    <div class="btnMenuClose">&nbsp;</div>
                </div>
                <ul class="nav memoNav">
                    <li class="hasMemoDropdown active">
                        <a href="/" title="">Home</a>
                        <span class="memoBtnDropdown collapsed" data-toggle="collapse" data-target="#memoDropdown11"><i
                                class="fa fa-angle-down"></i></span>
                        <ul id="memoDropdown11" class="memoDropdown collapse">
                            <li class="">
                                <a href="{{route('home')}}=94977327148" title="">Home
                                    01</a>
                            </li>
                            <li class="">
                                <a href="{{route('home')}}=96445497388" title="">Home
                                    02</a>
                            </li>
                            <li class="">
                                <a href="{{route('home')}}=96547930156" title="">Home
                                    03</a>
                            </li>
                            <li class="">
                                <a href="{{route('home')}}=96549371948" title="">Home
                                    04</a>
                            </li>
                            <li class="">
                                <a href="{{route('home')}}=96538427436" title="">Home
                                    05</a>
                            </li>
                            <li class="">
                                <a href="{{route('home')}}=96540786732" title="">Home
                                    06</a>
                            </li>
                        </ul>
                    </li>
                    <li class="hasMemoDropdown">
                        <a href="/collections/all" title="">Shop</a>
                        <span class="memoBtnDropdown collapsed" data-toggle="collapse" data-target="#memoDropdown12"><i
                                class="fa fa-angle-down"></i></span>
                        <ul id="memoDropdown12" class="memoDropdown collapse">
                            <li class="hasMemoDropdown">
                                <a href="/collections" title="">Catalog</a>
                                <span class="memoBtnDropdown collapsed" data-toggle="collapse"
                                      data-target="#memoDropdown221"><i class="fa fa-angle-down"></i></span>
                                <ul id="memoDropdown221" class="memoDropdown collapse">
                                    <li class="">
                                        <a href="/collections/furniture" title="">Furniture</a>
                                    </li>
                                    <li class="">
                                        <a href="/collections/chairs" title="">Chairs</a>
                                    </li>
                                    <li class="">
                                        <a href="/collections/sofas" title="">Sofas</a>
                                    </li>
                                    <li class="">
                                        <a href="/collections/decoration" title="">Decor Art</a>
                                    </li>
                                    <li class="">
                                        <a href="/collections/lighting-lamp" title="">Lighting Lamp</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="hasMemoDropdown">
                                <a href="/collections/all" title="">Shop pages</a>
                                <span class="memoBtnDropdown collapsed" data-toggle="collapse"
                                      data-target="#memoDropdown222"><i class="fa fa-angle-down"></i></span>
                                <ul id="memoDropdown222" class="memoDropdown collapse">
                                    <li class="">
                                        <a href="/collections/all" title="">Left sidebar</a>
                                    </li>
                                    <li class="">
                                        <a href="/collections/decoration" title="">Collection List</a>
                                    </li>
                                    <li class="">
                                        <a href="/collections/furniture" title="">Collection Grid</a>
                                    </li>
                                    <li class="">
                                        <a href="/collections/frontpage" title="">Full Width</a>
                                    </li>
                                    <li class="">
                                        <a href="/collections/sofas" title="">Fullwidth <sup>1</sup></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="hasMemoDropdown">
                                <a href="/products/arctander-chair" title="">Product Pages</a>
                                <span class="memoBtnDropdown collapsed" data-toggle="collapse"
                                      data-target="#memoDropdown223"><i class="fa fa-angle-down"></i></span>
                                <ul id="memoDropdown223" class="memoDropdown collapse">
                                    <li class="">
                                        <a href="{{route('home')}}=94977327148"
                                           title="">Product page <sup>1</sup></a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('home')}}=96445497388"
                                           title="">Product page <sup>2</sup></a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('home')}}=96547930156"
                                           title="">Product page <sup>3</sup></a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('home')}}=96549371948"
                                           title="">Product page <sup>4</sup></a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('home')}}=96538427436"
                                           title="">Product page <sup>5</sup></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="/collections" title="">Collections</a>
                    </li>
                    <li class="">
                        <a href="/blogs/news" title="">Blogs</a>
                    </li>
                    <li class="">
                        <a href="/pages/contact-us" title="">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="menuMobileOverlay hidden-md hidden-lg"></div>
    </div>
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


                                    <div class="velassSlide velassSlide1551027504217-0">


                                        <a href="/collections/all" class="velassLink">

                                            <div class="velassImage"
                                                 data-image="{{asset('img/slide11_1994x.png')}}">


                                                <div class="p-relative">
                                                    <div class="product-card__image"
                                                         style="padding-top:34.89583333333333%;">
                                                        <img class="product-card__img lazyload" src="{{asset('img/slide11_1994x.png')}}"/>
                                                    </div>
                                                    <div
                                                        class="placeholder-background placeholder-background--animation"
                                                        data-image-placeholder></div>
                                                </div>


                                            </div>

                                        </a>


                                        <div class="velassCaption captionPosition "
                                             style="background-color:rgba(0,0,0,0)">
                                            <div class="container captionWrap">
                                                <div class="velassCaptionContent text-left align-middle">
                                                    <div class="velassCaptionInner text-left ">
                                                        <h2 class="velassHeading leftright-2" style="color:#444444;">
                                                            <b>Quick parcel delivery, <span class="text-primary">from $25</span></b>
                                                        </h2>
                                                        <h3 class="velassHeadingSmall leftright-3"
                                                            style="color:#1a1a1a;">
                                                            Normann Copenhagen - <br>Craft salt and pepper grinder
                                                        </h3><a class="btn btnVelaSlider leftright-5"
                                                                href="/collections/all" style="border-color: #1a1a1a;
                                                                background-color: #1a1a1a;
                                                                color: #ffffff;
                                                                padding: 14px 25px; ">
                                                            Start Shopping
                                                            <i class="icons icon-arrow-right"></i>
                                                        </a></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="velassSlide velassSlide1585906051700">


                                        <a href="/collections/frontpage" class="velassLink">

                                            <div class="velassImage"
                                                 data-image="{{asset('img/slide12_1944x.png')}}">


                                                <div class="p-relative">
                                                    <div class="product-card__image"
                                                         style="padding-top:34.89583333333333%;">
                                                        <img class="product-card__img lazyload" src="{{asset('img/slide12_1944x.png')}}"/>
                                                    </div>
                                                    <div
                                                        class="placeholder-background placeholder-background--animation"
                                                        data-image-placeholder></div>
                                                </div>


                                            </div>

                                        </a>


                                        <div class="velassCaption captionPosition "
                                             style="background-color:rgba(0,0,0,0)">
                                            <div class="container captionWrap">
                                                <div class="velassCaptionContent text-left align-middle">
                                                    <div class="velassCaptionInner text-left ">
                                                        <h2 class="velassHeading bottomtop-2" style="color:#444444;">
                                                            <b>Quick parcel delivery, <span class="text-primary">from $25</span></b>
                                                        </h2>
                                                        <h3 class="velassHeadingSmall bottomtop-3"
                                                            style="color:#1a1a1a;">
                                                            Wood Minimal Office Chair<br>Extra 40% off now.
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

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="shopify-section-1576654924218" class="shopify-section velaFramework">
            <div class="productListHome velaProducts mbBlockGutter" style="background-color: rgba(0,0,0,0);
                                     padding:20px 0; ">
                <div class="container">
                    <div class="sectionInner ">
                        <div class="headingGroup pb20">
                            <h3 class="velaHomeTitle text-center">
                                Trending Products
                            </h3><span class="subTitle">Top view in this week</span></div>
                        <div class="velaContent">
                            <div class="proOwlCarousel owlCarouselPlay">
                                <div class="owl-carousel" data-nav="true" data-autoplay="false"
                                     data-autoplaytimeout="10000" data-columnone="4" data-columntwo="3"
                                     data-columnthree="2" data-columnfour="2" data-columnfive="1">

                                    <div class="item">


                                        <div class="velaProBlock grid " data-price="39.00">
                                            <div class="velaProBlockInner">
                                                <div class="proHImage d-flex flexJustifyCenter">
                                                    <a class="proFeaturedImage" href="/products/arctander-chair">
                                                        <div class="wrap ">


                                                            <div class="p-relative">
                                                                <div class="product-card__image"
                                                                     style="padding-top:124.25%;">
                                                                    <img class="product-card__img lazyload" src="{{asset('img/21_1_small.jpg')}}"/>
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
                                                                    <img class="product-card__img lazyload" src="{{asset('img/21_2_small.jpg')}}" alt="Arctander Chair"/>
                                                                </div>
                                                                <div
                                                                    class="placeholder-background placeholder-background--animation"
                                                                    data-image-placeholder></div>
                                                            </div>


                                                        </div>
                                                    </a>
                                                    <div class="productLable"></div>
                                                    <div class="proButton clearfix">
                                                        <form action="/cart/add" method="post"
                                                              enctype="multipart/form-data" class="formAddToCart">
                                                            <input type="hidden" name="id" value="33475186819116"/><a
                                                                class="btn btnProduct btnAddToCart"
                                                                href="/products/arctander-chair" title="Select options">
                                                                <span class="icons icon-handbag"></span>
                                                                <span class="select_options text">Select options</span>
                                                            </a></form>

                                                    </div>
                                                </div>
                                                <div class="proContent">
                                                    <h5 class="proName">
                                                        <a href="/products/arctander-chair">Arctander Chair</a>
                                                    </h5>
                                                    <div class="groupPrice clearfix">
                                                        <div class="proPrice">

                                                            <div class="priceProduct "><span class=money>$39.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="velaSwatchCus">

                                                            <ul class="velaSwatchProduct">

                                                                <li>
                                                                    <label
                                                                        style="background-color: yellow; background-image: url({{asset('img/21_1_small.jpg')}})"></label>
                                                                    <div class="hidden">
                                                                        <a href="{{asset('img/21_1_large.jpg')}}"></a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <label
                                                                        style="background-color: pink; background-image: url(//cdn.shopify.com/s/files/1/0376/9440/6700/products/2_1_44d927bb-269a-4f5c-be70-61963ee51dd0_small.jpg?v=1598253084)"></label>
                                                                    <div class="hidden">
                                                                        <a href="{{asset('img/2_1_44d927bb-269a-4f5c-be70-61963ee51dd0_large.jpg')}}"></a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <label
                                                                        style="background-color: black; background-image: url({{asset('img/18_2_large.jpg')}})"></label>
                                                                    <div class="hidden">
                                                                        <a href="{{asset('img/18_2_large.jpg')}}"></a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <label
                                                                        style="background-color: gold; background-image: url({{asset('img/2_2_764f9b85-a5ed-415a-8231-214d7e9ac586_small.jpg')}})"></label>
                                                                    <div class="hidden">
                                                                        <a href="{{asset('img/2_2_764f9b85-a5ed-415a-8231-214d7e9ac586_large.jpg')}}"></a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <label
                                                                        style="background-color: red; background-image: url(//cdn.shopify.com/s/files/1/0376/9440/6700/products/21_2_small.jpg?v=1598253084)"></label>
                                                                    <div class="hidden">
                                                                        <a href="{{asset('img/21_2_large.jpg')}}"></a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">


                                        <div class="velaProBlock grid " data-price="39.00">
                                            <div class="velaProBlockInner">
                                                <div class="proHImage d-flex flexJustifyCenter">
                                                    <a class="proFeaturedImage" href="/products/stainless-steel-teapot">
                                                        <div class="wrap ">


                                                            <div class="p-relative">
                                                                <div class="product-card__image"
                                                                     style="padding-top:124.25%;">
                                                                    <img class="product-card__img lazyload" src="{{asset('img/18_2_large.jpg')}}" alt=""/>
                                                                </div>
                                                                <div
                                                                    class="placeholder-background placeholder-background--animation"
                                                                    data-image-placeholder></div>
                                                            </div>


                                                        </div>
                                                    </a>
                                                    <div class="productLable"><span class="labelSale">Sale</span></div>
                                                    <div class="proButton clearfix">
                                                        <form action="/cart/add" method="post"
                                                              enctype="multipart/form-data" class="formAddToCart">
                                                            <input type="hidden" name="id" value="33475121676332"/>
                                                            <button class="btn  btnProduct btnAddToCart" type="submit"
                                                                    value="Submit" title="Add to Cart">
                                                                <span class="icons icon-handbag"></span>
                                                                <span class="text">Add to Cart</span>
                                                            </button>
                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="proContent">
                                                    <h5 class="proName">
                                                        <a href="/products/stainless-steel-teapot">Stainless steel
                                                            teapot</a>
                                                    </h5>
                                                    <div class="groupPrice clearfix">
                                                        <div class="proPrice">

                                                            <div class="priceProduct priceCompare"><span class=money>$57.00</span>
                                                            </div>
                                                            <div class="priceProduct priceSale"><span
                                                                    class=money>$39.00</span></div>
                                                        </div>
                                                        <div class="velaSwatchCus">


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">


                                        <div class="velaProBlock grid " data-price="39.00">
                                            <div class="velaProBlockInner">
                                                <div class="proHImage d-flex flexJustifyCenter">
                                                    <a class="proFeaturedImage" href="/products/beoplay-a1">
                                                        <div class="wrap ">


                                                            <div class="p-relative">
                                                                <div class="product-card__image"
                                                                     style="padding-top:124.25%;">
                                                                    <img class="product-card__img lazyload" src="{{asset('img/18_2_large.jpg')}}" alt=""/>
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
                                                                    <img class="product-card__img lazyload" src="{{asset('img/18_2_large.jpg')}}" alt="Beoplay A1"/>
                                                                </div>
                                                                <div
                                                                    class="placeholder-background placeholder-background--animation"
                                                                    data-image-placeholder></div>
                                                            </div>


                                                        </div>
                                                    </a>
                                                    <div class="productLable"><span class="labelSale">Sale</span></div>
                                                    <div class="proButton clearfix">
                                                        <form action="/cart/add" method="post"
                                                              enctype="multipart/form-data" class="formAddToCart">
                                                            <input type="hidden" name="id" value="33475100540972"/>
                                                            <button class="btn  btnProduct btnAddToCart" type="submit"
                                                                    value="Submit" title="Add to Cart">
                                                                <span class="icons icon-handbag"></span>
                                                                <span class="text">Add to Cart</span>
                                                            </button>
                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="proContent">
                                                    <h5 class="proName">
                                                        <a href="/products/beoplay-a1">Beoplay A1</a>
                                                    </h5>
                                                    <div class="groupPrice clearfix">
                                                        <div class="proPrice">

                                                            <div class="priceProduct priceCompare"><span class=money>$57.00</span>
                                                            </div>
                                                            <div class="priceProduct priceSale"><span
                                                                    class=money>$39.00</span></div>
                                                        </div>
                                                        <div class="velaSwatchCus">


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">


                                        <div class="velaProBlock grid  lastItem" data-price="59.00">
                                            <div class="velaProBlockInner">
                                                <div class="proHImage d-flex flexJustifyCenter">
                                                    <a class="proFeaturedImage" href="/products/turning-table">
                                                        <div class="wrap ">


                                                            <div class="p-relative">
                                                                <div class="product-card__image"
                                                                     style="padding-top:124.25%;">
                                                                    <img class="product-card__img lazyload" src="{{asset('img/30_180x.jpg')}}" alt=""/>
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
                                                                    <img class="product-card__img lazyload" src="{{asset('img/30_180x.jpg')}}" alt="Turning Table"/>
                                                                </div>
                                                                <div
                                                                    class="placeholder-background placeholder-background--animation"
                                                                    data-image-placeholder></div>
                                                            </div>


                                                        </div>
                                                    </a>
                                                    <div class="productLable"></div>
                                                    <div class="proButton clearfix">
                                                        <form action="/cart/add" method="post"
                                                              enctype="multipart/form-data" class="formAddToCart">
                                                            <input type="hidden" name="id" value="33475052175404"/>
                                                            <button class="btn  btnProduct btnAddToCart" type="submit"
                                                                    value="Submit" title="Add to Cart">
                                                                <span class="icons icon-handbag"></span>
                                                                <span class="text">Add to Cart</span>
                                                            </button>
                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="proContent">
                                                    <h5 class="proName">
                                                        <a href="/products/turning-table">Turning Table</a>
                                                    </h5>
                                                    <div class="groupPrice clearfix">
                                                        <div class="proPrice">

                                                            <div class="priceProduct "><span class=money>$59.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="velaSwatchCus">


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
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
                                        <a href="/collections/frontpage" title="velademo-rubix">

                                            <div class="p-relative">
                                                <div class="product-card__image"
                                                     style="padding-top:29.16666666666667%;">
                                                    <img class="product-card__img lazyload" src="{{asset('img/banner3_360x.jpg')}}" data-sizes="auto" alt=""/>
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
        <div id="shopify-section-1585935530141" class="shopify-section velaFramework">
            <div class="productListHome velaProducts mbBlockGutter" style="background-color: rgba(0,0,0,0);
                                     padding:0 0 20px; ">
                <div class="container">
                    <div class="sectionInner ">
                        <div class="headingGroup pb20">
                            <h3 class="velaHomeTitle text-center">
                                Best Seller Products
                            </h3><span class="subTitle">Top sale in this week</span></div>
                        <div class="velaContent">
                            <div class="rowFlex rowFlexMargin">

                                <div class="col-sp-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">


                                    <div class="velaProBlock grid " data-price="39.00">
                                        <div class="velaProBlockInner">
                                            <div class="proHImage d-flex flexJustifyCenter">
                                                <a class="proFeaturedImage" href="/products/arctander-chair">
                                                    <div class="wrap ">


                                                        <div class="p-relative">
                                                            <div class="product-card__image"
                                                                 style="padding-top:124.25%;">
                                                                <img class="product-card__img lazyload" src="{{asset('img/21_2_large.jpg')}}"
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
                                                                <img class="product-card__img lazyload" src="{{asset('img/21_2_small.jpg')}}"
                                                                     alt="Arctander Chair"/>
                                                            </div>
                                                            <div
                                                                class="placeholder-background placeholder-background--animation"
                                                                data-image-placeholder></div>
                                                        </div>


                                                    </div>
                                                </a>
                                                <div class="productLable"></div>
                                                <div class="proButton clearfix">
                                                    <form action="/cart/add" method="post" enctype="multipart/form-data"
                                                          class="formAddToCart">
                                                        <input type="hidden" name="id" value="33475186819116"/><a
                                                            class="btn btnProduct btnAddToCart"
                                                            href="/products/arctander-chair" title="Select options">
                                                            <span class="icons icon-handbag"></span>
                                                            <span class="select_options text">Select options</span>
                                                        </a></form>

                                                </div>
                                            </div>
                                            <div class="proContent">
                                                <h5 class="proName">
                                                    <a href="/products/arctander-chair">Arctander Chair</a>
                                                </h5>
                                                <div class="groupPrice clearfix">
                                                    <div class="proPrice">

                                                        <div class="priceProduct "><span class=money>$39.00</span></div>
                                                    </div>
                                                    <div class="velaSwatchCus">

                                                        <ul class="velaSwatchProduct">

                                                            <li>
                                                                <label
                                                                    style="background-color: yellow; background-image: url({{asset('img/21_1_small.jpg')}})"></label>
                                                                <div class="hidden">
                                                                    <a href="{{asset('img/21_1_small.jpg')}}"></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label
                                                                    style="background-color: pink; background-image: url(//cdn.shopify.com/s/files/1/0376/9440/6700/products/2_1_44d927bb-269a-4f5c-be70-61963ee51dd0_small.jpg?v=1598253084)"></label>
                                                                <div class="hidden">
                                                                    <a href="{{asset('img/2_1_44d927bb-269a-4f5c-be70-61963ee51dd0_large.jpg')}}"></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label
                                                                    style="background-color: black; background-image: url(//cdn.shopify.com/s/files/1/0376/9440/6700/products/18_2_small.jpg?v=1598253084)"></label>
                                                                <div class="hidden">
                                                                    <a href="//cdn.shopify.com/s/files/1/0376/9440/6700/products/18_2_large.jpg?v=1598253084"></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label
                                                                    style="background-color: gold; background-image: url(//cdn.shopify.com/s/files/1/0376/9440/6700/products/2_2_764f9b85-a5ed-415a-8231-214d7e9ac586_small.jpg?v=1598253084)"></label>
                                                                <div class="hidden">
                                                                    <a href="//cdn.shopify.com/s/files/1/0376/9440/6700/products/2_2_764f9b85-a5ed-415a-8231-214d7e9ac586_large.jpg?v=1598253084"></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label
                                                                    style="background-color: red; background-image: url(//cdn.shopify.com/s/files/1/0376/9440/6700/products/21_2_small.jpg?v=1598253084)"></label>
                                                                <div class="hidden">
                                                                    <a href="//cdn.shopify.com/s/files/1/0376/9440/6700/products/21_2_large.jpg?v=1598253084"></a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sp-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">


                                    <div class="velaProBlock grid " data-price="39.00">
                                        <div class="velaProBlockInner">
                                            <div class="proHImage d-flex flexJustifyCenter">
                                                <a class="proFeaturedImage" href="/products/stainless-steel-teapot">
                                                    <div class="wrap ">


                                                        <div class="p-relative">
                                                            <div class="product-card__image"
                                                                 style="padding-top:124.25%;">
                                                                <img class="product-card__img lazyload"
                                                                     data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/products/28_{width}x.jpg?v=1586316960"
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
                                                </a>
                                                <div class="productLable"><span class="labelSale">Sale</span></div>
                                                <div class="proButton clearfix">
                                                    <form action="/cart/add" method="post" enctype="multipart/form-data"
                                                          class="formAddToCart">
                                                        <input type="hidden" name="id" value="33475121676332"/>
                                                        <button class="btn  btnProduct btnAddToCart" type="submit"
                                                                value="Submit" title="Add to Cart">
                                                            <span class="icons icon-handbag"></span>
                                                            <span class="text">Add to Cart</span>
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>
                                            <div class="proContent">
                                                <h5 class="proName">
                                                    <a href="/products/stainless-steel-teapot">Stainless steel
                                                        teapot</a>
                                                </h5>
                                                <div class="groupPrice clearfix">
                                                    <div class="proPrice">

                                                        <div class="priceProduct priceCompare"><span
                                                                class=money>$57.00</span></div>
                                                        <div class="priceProduct priceSale"><span
                                                                class=money>$39.00</span></div>
                                                    </div>
                                                    <div class="velaSwatchCus">


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sp-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">


                                    <div class="velaProBlock grid " data-price="39.00">
                                        <div class="velaProBlockInner">
                                            <div class="proHImage d-flex flexJustifyCenter">
                                                <a class="proFeaturedImage" href="/products/beoplay-a1">
                                                    <div class="wrap ">


                                                        <div class="p-relative">
                                                            <div class="product-card__image"
                                                                 style="padding-top:124.25%;">
                                                                <img class="product-card__img lazyload"
                                                                     data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/products/29_{width}x.jpg?v=1586316900"
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
                                                                     data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/products/29_2_{width}x.jpg?v=1586316900"
                                                                     data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                                                                     data-aspectratio="0.8048289738430584"
                                                                     data-ratio="0.8048289738430584" data-sizes="auto"
                                                                     alt="Beoplay A1"/>
                                                            </div>
                                                            <div
                                                                class="placeholder-background placeholder-background--animation"
                                                                data-image-placeholder></div>
                                                        </div>


                                                    </div>
                                                </a>
                                                <div class="productLable"><span class="labelSale">Sale</span></div>
                                                <div class="proButton clearfix">
                                                    <form action="/cart/add" method="post" enctype="multipart/form-data"
                                                          class="formAddToCart">
                                                        <input type="hidden" name="id" value="33475100540972"/>
                                                        <button class="btn  btnProduct btnAddToCart" type="submit"
                                                                value="Submit" title="Add to Cart">
                                                            <span class="icons icon-handbag"></span>
                                                            <span class="text">Add to Cart</span>
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>
                                            <div class="proContent">
                                                <h5 class="proName">
                                                    <a href="/products/beoplay-a1">Beoplay A1</a>
                                                </h5>
                                                <div class="groupPrice clearfix">
                                                    <div class="proPrice">

                                                        <div class="priceProduct priceCompare"><span
                                                                class=money>$57.00</span></div>
                                                        <div class="priceProduct priceSale"><span
                                                                class=money>$39.00</span></div>
                                                    </div>
                                                    <div class="velaSwatchCus">


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sp-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">


                                    <div class="velaProBlock grid  lastItem" data-price="59.00">
                                        <div class="velaProBlockInner">
                                            <div class="proHImage d-flex flexJustifyCenter">
                                                <a class="proFeaturedImage" href="/products/turning-table">
                                                    <div class="wrap ">


                                                        <div class="p-relative">
                                                            <div class="product-card__image"
                                                                 style="padding-top:124.25%;">
                                                                <img class="product-card__img lazyload"
                                                                     data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/products/30_{width}x.jpg?v=1586316781"
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
                                                                     data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/products/30_1_{width}x.jpg?v=1586316781"
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
                                                <div class="productLable"></div>
                                                <div class="proButton clearfix">
                                                    <form action="/cart/add" method="post" enctype="multipart/form-data"
                                                          class="formAddToCart">
                                                        <input type="hidden" name="id" value="33475052175404"/>
                                                        <button class="btn  btnProduct btnAddToCart" type="submit"
                                                                value="Submit" title="Add to Cart">
                                                            <span class="icons icon-handbag"></span>
                                                            <span class="text">Add to Cart</span>
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>
                                            <div class="proContent">
                                                <h5 class="proName">
                                                    <a href="/products/turning-table">Turning Table</a>
                                                </h5>
                                                <div class="groupPrice clearfix">
                                                    <div class="proPrice">

                                                        <div class="priceProduct "><span class=money>$59.00</span></div>
                                                    </div>
                                                    <div class="velaSwatchCus">


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="shopify-section-1585674376666" class="shopify-section velaFramework">
            <div class="velaNewsletter hasBg" style="
        background-image: url(//cdn.shopify.com/s/files/1/0376/9440/6700/files/newsletter-bg.jpg?v=1585674408);
    ">
                <div class="container">
                    <div class="velaNewsletterInner text-center clearfix">
                        <div class="wrap">
                            <div class="headingGroup pb20">
                                <h3 class="velaHomeTitle text-center">
                                    Subcribe To Our Newsletter
                                </h3><span class="subTitle">Sign up for the weekly newsletter and build better ecommerce stores.</span>
                            </div>
                            <div class="velaContent">
                                <form method="post" action="/contact#contact_form" id="contact_form"
                                      accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type"
                                                                                         value="customer"/><input
                                        type="hidden" name="utf8" value="✓"/>


                                    <div class="form-group input-group">
                                        <input class="form-control" type="email" name="contact[email]"
                                               placeholder="Your email address...">
                                        <span class="input-group-btn">
                                        <button class="btnNewsletter btnVelaOne" type="submit">
                                            <span>Subscribe</span>
                                            </button>
                                            </span>
                                        <input type="hidden" name="action" value="0">
                                    </div>

                                </form>
                                <div class="newsletterDescription">We respect your privacy, so we never share your
                                    info.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="shopify-section-1585963328748" class="shopify-section velaFramework">
            <div class="velaServices mbBlockGutter" style="
        background-color: #f8f8f8;

        padding: 20px 0;
    ">
                <div class="container">
                    <div class="velaServicesInner hasbgGutter">
                        <div class="velaContent">
                            <div class="rowFlex rowFlexMargin">

                                <div class="col-xs-12 col-sm-4 mbItemGutter">
                                    <div class="boxService text-center">
                                        <div class="boxServiceImage ">
                                            <div class="serviceImage" style="width: 48px;height: 48px">


                                                <div class="p-relative">
                                                    <div class="product-card__image" style="padding-top:100.0%;">
                                                        <img class="product-card__img lazyload"
                                                             data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/files/our-1_{width}x.png?v=1585963349"
                                                             data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                                                             data-aspectratio="1.0" data-ratio="1.0"
                                                             data-sizes="auto" alt=""/>
                                                    </div>
                                                    <div
                                                        class="placeholder-background placeholder-background--animation"
                                                        data-image-placeholder></div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="boxServiceContent">
                                            <h4 class="boxServiceTitle">Free Worldwide Shipping</h4>
                                            <div class="boxServiceDesc">
                                                On all orders over $75.00
                                            </div>
                                            <a href="/policies/shipping-policy" title="block.settings.box_text_link">Learn
                                                More<span class="icons icon-arrow-right"></span></a></div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-4 mbItemGutter">
                                    <div class="boxService text-center">
                                        <div class="boxServiceImage ">
                                            <div class="serviceImage" style="width: 48px;height: 48px">


                                                <div class="p-relative">
                                                    <div class="product-card__image" style="padding-top:100.0%;">
                                                        <img class="product-card__img lazyload"
                                                             data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/files/our-2_{width}x.png?v=1585963397"
                                                             data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                                                             data-aspectratio="1.0" data-ratio="1.0"
                                                             data-sizes="auto" alt=""/>
                                                    </div>
                                                    <div
                                                        class="placeholder-background placeholder-background--animation"
                                                        data-image-placeholder></div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="boxServiceContent">
                                            <h4 class="boxServiceTitle">100% Payment Secure</h4>
                                            <div class="boxServiceDesc">
                                                We ensure secure payment with PEV
                                            </div>
                                            <a href="/policies/privacy-policy" title="block.settings.box_text_link">Learn
                                                More<span class="icons icon-arrow-right"></span></a></div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-4 mbItemGutter">
                                    <div class="boxService text-center">
                                        <div class="boxServiceImage ">
                                            <div class="serviceImage" style="width: 48px;height: 48px">


                                                <div class="p-relative">
                                                    <div class="product-card__image" style="padding-top:100.0%;">
                                                        <img class="product-card__img lazyload"
                                                             data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/files/our-3_{width}x.png?v=1585963892"
                                                             data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                                                             data-aspectratio="1.0" data-ratio="1.0"
                                                             data-sizes="auto" alt=""/>
                                                    </div>
                                                    <div
                                                        class="placeholder-background placeholder-background--animation"
                                                        data-image-placeholder></div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="boxServiceContent">
                                            <h4 class="boxServiceTitle">30 Days Return</h4>
                                            <div class="boxServiceDesc">
                                                Return it within 20 day for an exchange
                                            </div>
                                            <a href="/policies/refund-policy" title="block.settings.box_text_link">Learn
                                                More<span class="icons icon-arrow-right"></span></a></div>
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
                        <div class="headingGroup pb20">
                            <h3 class="velaHomeTitle text-center">
                                From Our Blog
                            </h3><span class="subTitle">Commodo sociosqu venenatis cras dolor sagittis integer luctus sem primis eget</span>
                        </div>
                        <div class="velaContent">
                            <div class="velaOwlRow owlCarouselPlay">
                                <div class="owl-carousel" data-nav="true" data-loop="false" data-dots="false"
                                     data-autoplay="false" data-autoplaytimeout="10000" data-columnone="3"
                                     data-columntwo="3" data-columnthree="2" data-columnfour="2" data-columnfive="1">

                                    <div class="velaBlogItem ">


                                        <div class="blogPostImage">
                                            <a href="/blogs/news/anteposuerit-litterarum-formas-7"
                                               title="Anteposuerit litterarum formas.">


                                                <div class="p-relative">
                                                    <div class="product-card__image" style="padding-top:62.5%;">
                                                        <img class="product-card__img lazyload"
                                                             data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/articles/8_{width}x.jpg?v=1585986872"
                                                             data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                                                             data-aspectratio="1.6" data-ratio="1.6"
                                                             data-sizes="auto" alt="Anteposuerit litterarum formas."/>
                                                    </div>
                                                    <div
                                                        class="placeholder-background placeholder-background--animation"
                                                        data-image-placeholder></div>
                                                </div>


                                            </a>
                                        </div>


                                        <div class="blogPostContent">
                                            <div class="blogTitle">
                                                <a href="/blogs/news" title="lifestyle">lifestyle</a>
                                            </div>
                                            <div class="articleMeta d-flex">
                                                <span class="articleAuthor">Mr Vela .</span>
                                                <span class="articlePublish pull-left">Apr 04, 2020</span>
                                            </div>
                                            <h4 class="blogPostTitle"><a
                                                    href="/blogs/news/anteposuerit-litterarum-formas-7"
                                                    title="Anteposuerit litterarum formas.">Anteposuerit litterarum
                                                    formas.</a></h4>

                                            <div class="blogPostShortdesc rte">

                                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                                inceptos himenaeos. Sed luctus, dui eu sagittis sodales, nulla nibh
                                                sagittis augue

                                            </div>
                                            <a class="btnBlogReadMore"
                                               href="/blogs/news/anteposuerit-litterarum-formas-7" title="Read More">
                                                Read More<span class="icons icon-arrow-right"></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="velaBlogItem ">


                                        <div class="blogPostImage">
                                            <a href="/blogs/news/anteposuerit-litterarum-formas-9"
                                               title="Anteposuerit litterarum formas.">


                                                <div class="p-relative">
                                                    <div class="product-card__image" style="padding-top:62.5%;">
                                                        <img class="product-card__img lazyload"
                                                             data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/articles/10_{width}x.jpg?v=1585986913"
                                                             data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                                                             data-aspectratio="1.6" data-ratio="1.6"
                                                             data-sizes="auto" alt="Anteposuerit litterarum formas."/>
                                                    </div>
                                                    <div
                                                        class="placeholder-background placeholder-background--animation"
                                                        data-image-placeholder></div>
                                                </div>


                                            </a>
                                        </div>


                                        <div class="blogPostContent">
                                            <div class="blogTitle">
                                                <a href="/blogs/news" title="lifestyle">lifestyle</a>
                                            </div>
                                            <div class="articleMeta d-flex">
                                                <span class="articleAuthor">Mr Vela .</span>
                                                <span class="articlePublish pull-left">Apr 04, 2020</span>
                                            </div>
                                            <h4 class="blogPostTitle"><a
                                                    href="/blogs/news/anteposuerit-litterarum-formas-9"
                                                    title="Anteposuerit litterarum formas.">Anteposuerit litterarum
                                                    formas.</a></h4>

                                            <div class="blogPostShortdesc rte">

                                                <p>Diga, Koma and Torus are three kitchen utensils designed for Ommo, a
                                                    new design-oriented brand introduced at the Ambiente show in
                                                    February...</p>

                                            </div>
                                            <a class="btnBlogReadMore"
                                               href="/blogs/news/anteposuerit-litterarum-formas-9" title="Read More">
                                                Read More<span class="icons icon-arrow-right"></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="velaBlogItem ">


                                        <div class="blogPostImage">
                                            <a href="/blogs/news/anteposuerit-litterarum-formas-8"
                                               title="Anteposuerit litterarum formas.">


                                                <div class="p-relative">
                                                    <div class="product-card__image" style="padding-top:62.5%;">
                                                        <img class="product-card__img lazyload"
                                                             data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/articles/9_{width}x.jpg?v=1585986892"
                                                             data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                                                             data-aspectratio="1.6" data-ratio="1.6"
                                                             data-sizes="auto" alt="Anteposuerit litterarum formas."/>
                                                    </div>
                                                    <div
                                                        class="placeholder-background placeholder-background--animation"
                                                        data-image-placeholder></div>
                                                </div>


                                            </a>
                                        </div>


                                        <div class="blogPostContent">
                                            <div class="blogTitle">
                                                <a href="/blogs/news" title="lifestyle">lifestyle</a>
                                            </div>
                                            <div class="articleMeta d-flex">
                                                <span class="articleAuthor">Mr Vela .</span>
                                                <span class="articlePublish pull-left">Apr 04, 2020</span>
                                            </div>
                                            <h4 class="blogPostTitle"><a
                                                    href="/blogs/news/anteposuerit-litterarum-formas-8"
                                                    title="Anteposuerit litterarum formas.">Anteposuerit litterarum
                                                    formas.</a></h4>

                                            <div class="blogPostShortdesc rte">

                                                <p>Diga, Koma and Torus are three kitchen utensils designed for Ommo, a
                                                    new design-oriented brand introduced at the Ambiente show in
                                                    February...</p>

                                            </div>
                                            <a class="btnBlogReadMore"
                                               href="/blogs/news/anteposuerit-litterarum-formas-8" title="Read More">
                                                Read More<span class="icons icon-arrow-right"></span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END content_for_index -->

    </main>
    <div id="shopify-section-vela-footer" class="shopify-section">
        <footer id="velaFooter">
            <div class="footerCenter">
                <div class="container">
                    <div class="footerCenterInner">
                        <div class="rowFlex rowFlexMargin">
                            <div class="col-xs-12 col-sm-6 col-md-3 mb30">
                                <div class="footerInfo">
                                    <div class="infoImage">
                                        <a href="/" style="width: 130px;">


                                            <div class="p-relative">
                                                <div class="product-card__image"
                                                     style="padding-top:18.461538461538463%;">
                                                    <img class="product-card__img lazyload"
                                                         data-src="//cdn.shopify.com/s/files/1/0376/9440/6700/files/footer_logo_{width}x.png?v=1586356142"
                                                         data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                                                         data-aspectratio="5.416666666666667"
                                                         data-ratio="5.416666666666667" data-sizes="auto" alt=""/>
                                                </div>
                                                <div class="placeholder-background placeholder-background--animation"
                                                     data-image-placeholder></div>
                                            </div>


                                        </a>
                                    </div>
                                    <div class="footerSocial">
                                        <div class="d-flex velaSocialFooter">
                                            <a target="_blank" href="https://www.facebook.com/velatheme">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/velatheme">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/velatheme/">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://www.pinterest.com/velatheme/">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                            <a target="_blank" href="https://velatheme.com">
                                                <i class="fa fa-youtube-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 mb30">
                                <div class="velaFooterMenu">
                                    <h4 class="velaFooterTitle">Information Company</h4>

                                    <div class="velaContent">
                                        <ul class="velaFooterLinks list-unstyled">

                                            <li class="">
                                                <a href="/account" title="">My Account</a>
                                            </li>

                                            <li class="active">
                                                <a href="/" title="">Track Your Order</a>
                                            </li>

                                            <li class="">
                                                <a href="/pages/faqs" title="">FAQs</a>
                                            </li>

                                            <li class="active">
                                                <a href="/" title="">Payment Methods</a>
                                            </li>

                                            <li class="">
                                                <a href="/policies/shipping-policy" title="">Shipping Guide</a>
                                            </li>

                                            <li class="">
                                                <a href="https://velatheme.ticksy.com/" title="">Products Support</a>
                                            </li>

                                            <li class="active">
                                                <a href="/" title="">Gift Card Balance</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 mb30">
                                <div class="velaFooterMenu">
                                    <h4 class="velaFooterTitle">More From Rubix</h4>

                                    <div class="velaContent">
                                        <ul class="velaFooterLinks list-unstyled">

                                            <li class="">
                                                <a href="/pages/about-us" title="">About Rubix</a>
                                            </li>

                                            <li class="">
                                                <a href="/policies/privacy-policy" title="">Our Guarantees</a>
                                            </li>

                                            <li class="">
                                                <a href="/policies/terms-of-service" title="">Terms and Conditions</a>
                                            </li>

                                            <li class="">
                                                <a href="/policies/privacy-policy" title="">Privacy Policy</a>
                                            </li>

                                            <li class="">
                                                <a href="/policies/refund-policy" title="">Return Policy</a>
                                            </li>

                                            <li class="">
                                                <a href="/policies/refund-policy" title="">Delivery & Return</a>
                                            </li>

                                            <li class="active">
                                                <a href="/" title="">Sitemap</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 mb30">
                                <div class="footerAbout">
                                    <h5>Let’s Talk</h5>
                                    <div class="d-flex mb30">
                                        <div><i class="icons icon-earphones-alt"></i></div>
                                        <div>+391 (0)35 2568 4593 <br><u>hello@domain.com</u>
                                        </div>
                                    </div>
                                    <h5>Find Us</h5>
                                    <div class="d-flex">
                                        <div><i class="icons icon-location-pin"></i></div>
                                        <div>502 New Design Str<br>Melbourne, Australia</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footerCopyRight">
                <div class="container">
                    <div class="footerCopyRightInner clearfix">
                        <div class="velaCopyRight pull-left">
                            <a href="/"><b>© 2020 Rubix.</b></a> All Rights Reserved
                        </div>
                        <div class="velaPayment pull-right hidden-xs hidden-sm">
                            <div class="vela-content">
                                <img class="img-responsive" alt=""
                                     src="//cdn.shopify.com/s/files/1/0376/9440/6700/files/payment_logo.png?v=1586356353"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div id="shopify-section-vela-template-notification" class="shopify-section">
    </div>
    <script type="text/javascript">
        $(window).on("load", function () {
            var dateCookie = new Date();
            var minutes = 60;
            dateCookie.setTime(dateCookie.getTime() + (minutes * 60 * 1000));
            setTimeout(function () {
                if (document.body.classList.contains('template-collection') && ($("#velaNotifiCollection").length > 0) && ($.cookie('velaNotifiCollectioin') != 'closed')) {
                    $.fancybox.open({
                        src: '#velaNotifiCollection',
                        opts: {
                            padding: 0,
                            beforeLoad: function () {
                                $('#velaNotifiCollection').removeClass('hidden');
                            },
                            href: '#velaNotifiCollection',
                            helpers: {
                                overlay: true
                            },
                            afterClose: function () {
                                $('#velaNotifiCollection').addClass('hidden');
                                $.cookie('velaNotifiCollectioin', 'closed', {
                                    expires: dateCookie,
                                    path: '/'
                                });
                            }
                        }
                    });
                } else if (document.body.classList.contains('template-blog') && ($("#velaNotifiBlog").length > 0) && ($.cookie('velaNotifiBlog') != 'closed')) {
                    $.fancybox.open({
                        src: '#velaNotifiBlog',
                        opts: {
                            padding: 0,
                            beforeLoad: function () {
                                $('#velaNotifiBlog').removeClass('hidden');
                            },
                            href: '#velaNotifiBlog',
                            helpers: {
                                overlay: true
                            },
                            afterClose: function () {
                                $('#velaNotifiBlog').addClass('hidden');
                                $.cookie('velaNotifiBlog', 'closed', {
                                    expires: dateCookie,
                                    path: '/'
                                });
                            }
                        }
                    });
                } else if (document.body.classList.contains('template-product') && ($("#velaNotifiProduct").length > 0) && ($.cookie('velaNotifiProduct') != 'closed')) {
                    $.fancybox.open({
                        src: '#velaNotifiProduct',
                        opts: {
                            padding: 0,
                            beforeLoad: function () {
                                $('#velaNotifiProduct').removeClass('hidden');
                            },
                            href: '#velaNotifiProduct',
                            helpers: {
                                overlay: true
                            },
                            afterClose: function () {
                                $('#velaNotifiProduct').addClass('hidden');
                                $.cookie('velaNotifiProduct', 'closed', {
                                    expires: dateCookie,
                                    path: '/'
                                });
                            }
                        }
                    });
                } else if (document.body.classList.contains('template-page') && ($("#velaNotifiPage").length > 0) && ($.cookie('velaNotifiPage') != 'closed')) {
                    $.fancybox.open({
                        src: '#velaNotifiPage',
                        opts: {
                            padding: 0,
                            beforeLoad: function () {
                                $('#velaNotifiPage').removeClass('hidden');
                            },
                            href: '#velaNotifiPage',
                            helpers: {
                                overlay: true
                            },
                            afterClose: function () {
                                $('#velaNotifiPage').addClass('hidden');
                                $.cookie('velaNotifiPage', 'closed', {
                                    expires: dateCookie,
                                    path: '/'
                                });
                            }
                        }
                    });
                } else if (($("#velaNotifi").length > 0) && ($.cookie('velaNotifi') != 'closed')) {
                    $.fancybox.open({
                        src: '#velaNotifi',
                        opts: {
                            padding: 0,
                            beforeLoad: function () {
                                $('#velaNotifi').removeClass('hidden');
                            },
                            href: '#velaNotifi',
                            helpers: {
                                overlay: true
                            },
                            afterClose: function () {
                                $('#velaNotifi').addClass('hidden');
                                $.cookie('velaNotifi', 'closed', {
                                    expires: dateCookie,
                                    path: '/'
                                });
                            }
                        }
                    });
                }

            }, 0);
        });
    </script>
</div>
<script id="CartTemplate" type="text/template">
    <form action="/cart" method="post" novalidate class="cart ajaxcart">
        <div class="ajaxCartInner">
            <div class="ajaxCartProduct">
                <div class="drawerProduct ajaxCartRow">
                    <div class="drawerProductImage">
                    </div>
                    <div class="drawerProductContent">
                        <div class="drawerProductTitle">
                        </div>
                        <div class="drawerProductPrice">
                            <div class="priceProduct">
                            </div>
                        </div>
                        <div class="drawerProductQty">
                            <div class="velaQty">
                                <button type="button" class="qtyAdjust velaQtyButton velaQtyMinus">
                                    <span class="txtFallback">&minus;</span>
                                </button>
                                <input type="text" name="updates[]" class="qtyNum velaQtyText" pattern="[0-9]*"/>
                                <button type="button" class="qtyAdjust velaQtyButton velaQtyPlus">
                                    <span class="txtFallback">+</span>
                                </button>
                            </div>
                        </div>
                        <div class="drawerProductDelete">
                            <div class="cartRemoveBox">
                                <a href="#" class="cartRemove btnClose" onclick="return false;">
                                    <span>Remove</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ajaxCartNote">
                <div class="velaCartNoteButton">
                    <a class="btnCartNote collapsed" href="#velaCartNote" data-toggle="collapse">
                        <i class="fa fa-times"></i>
                        add order note
                    </a>
                </div>
                <div id="velaCartNote" class="velaCartNoteGroup collapse">
                    <label for="CartSpecialInstructions">Special instructions for seller</label>
                    <textarea name="note" class="form-control" id="CartSpecialInstructions"
                              rows="4"></textarea>
                </div>
            </div>
            <div class="drawerCartFooter">
                <div class="drawerAjaxFooter">
                    <div class="drawerSubtotal">
                        <span class="cartSubtotalHeading">Subtotal</span>
                        <span class="cartSubtotal">123</span>
                    </div>
                    <p class="drawerShipping">Shipping, taxes, and discounts will be calculated at checkout.</p>
                    <div class="drawerButton">
                        <div class="drawerButtonBox">
                            <a class="btn btnVelaCart btnViewCart" href="/cart">
                                View Cart
                            </a>
                        </div>
                        <div class="drawerButtonBox">
                            <button type="submit" class="btn btnVelaCart btnCheckout" name="checkout">
                                Check Out
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</script>
<script id="headerCartTemplate" type="text/template">
    <form action="/cart" method="post" novalidate class="cart ajaxcart">
        <div class="headerCartInner">
            <div class="headerCartScroll">
                <div class="ajaxCartProduct">
                    <div class="ajaxCartRow rowFlex">
                        <div class="headerCartImage">
                            <a><img class="img-responsive" alt=""/></a>
                        </div>
                        <div class="headerCartContent">
                            <div class="headerCartInfo">
                                <a href="#" class="headerCartProductName">name</a>
                                <div class="headerCartProductMeta">variation</div>
                                <div class="headerCartProductMeta">key: this</div>
                                <div class="headerCartPrice">
                                    price <span class="d-block">x itemQty</span>
                                </div>
                            </div>
                            <div class="headerCartRemoveBox">
                                <a href="#" class="cartRemove" onclick="return false;">
                                    <i class="btnClose"></i> <span>Remove</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="headerCartTotal">
                <span class="headerCartTotalTitle">Subtotal</span>
                <span class="headerCartTotalNum">totalPrice</span>
            </div>
            <div class="headerCartButton d-flex">
                <div class="headerCartButtonBox mr10">
                    <a class="btn btnVelaCart btnViewCart" href="/cart">

                        View Cart

                    </a>
                </div>
                <div class="headerCartButtonBox">
                    <button type="submit" class="btn btnVelaCart btnCheckout" name="checkout">

                        Check Out

                    </button>
                </div>
            </div>

        </div>
    </form>
</script>
<script id="velaAjaxQty" type="text/template">

    <div class="velaQty">
        <button type="button" class="qtyAdjust velaQtyButton velaQtyMinus">
            <span class="txtFallback">&minus;</span>
        </button>
        <input type="text" class="qtyNum velaQtyText" aria-label="quantity"
               pattern="[0-9]*">
        <button type="button" class="qtyAdjust velaQtyButton velaQtyPlus">
            <span class="txtFallback">+</span>
        </button>
    </div>

</script>
<script id="velaJsQty" type="text/template">

    <div class="velaQty">
        <button type="button" class="velaQtyAdjust velaQtyButton velaQtyMinus">
            <span class="txtFallback">&minus;</span>
        </button>
        <input type="text" class="velaQtyNum velaQtyText"/>
        <button type="button" class="velaQtyAdjust velaQtyButton velaQtyPlus">
            <span class="txtFallback">+</span>
        </button>
    </div>

</script>
<div id="loading" style="display:none;"></div>
<div id="goToTop" class="hidden-xs hidden-sm"><span class="fa fa-angle-up"></span></div>
<div id="velaPreLoading">
    <span></span>
    <div class="velaLoading">
        <span class="velaLoadingIcon one"></span>
        <span class="velaLoadingIcon two"></span>
        <span class="velaLoadingIcon three"></span>
        <span class="velaLoadingIcon four"></span>
    </div>
</div>
<div id="velaNewsletterModal" class="hidden">
    <div class="newsletterModal">
        <div class="velaNewsletterModal text-center">
            <h3 class="velaTitle">Get Our Email Letter</h3>
            <div class="velaContent">
                <div class="newsletterDescription">Subscribe to the Complex mailing list to receive updates on new
                    arrivals, special offers and other discount information.
                </div>
                <form
                    action="https://velatheme.us13.list-manage.com/subscribe/post-json?u=4d8c80acdd82f3c48d27467f6&amp;id=d52e6e4f14&amp;c=?"
                    method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank"
                    class="js-vela-newsletter formNewsletter clearfix">
                    <div class="input-group">
                        <input type="email" value="" placeholder="Your email address..." name="EMAIL" id="mail"
                               class="js-input-newsletter form-control" aria-label="Your email address...">
                        <span class="input-group-addon">
                                        <button id="subscribe" class="btn btnNewsletter" type="submit">
                                            <i class="pe-7s-paper-plane"></i>
                                            <span>Subscribe</span>
                            </button>
                            </span>
                    </div>
                </form>
                <div class="checkbox checkGroup">
                    <input id="chkNewsletterModal" name="show-again" type="checkbox"><label for="chkNewsletterModal">
                        Don't show this popup again</label>
                </div>
            </div>
        </div>
    </div>
</div>
<script
    src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js"
    type="text/javascript"></script>
<script
    src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js"
    type="text/javascript"></script>
<script src="//cdn.shopify.com/s/javascripts/currencies.js" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/0376/9440/6700/t/10/assets/vendor.js?v=13878651640065809907"
        type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/0376/9440/6700/t/10/assets/vela_ajaxcart.js?v=7288850833425201504"
        type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/0376/9440/6700/t/10/assets/lazysizes.min.js?v=15377268347072223862"
        async="async"></script>
<script src="//cdn.shopify.com/s/files/1/0376/9440/6700/t/10/assets/vela.js?v=1594961584149084290"
        type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/0376/9440/6700/t/10/assets/jquery.cookie.js?v=7236575574540404818"
        type="text/javascript"></script>
</body>

</html>
