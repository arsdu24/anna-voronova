@extends('layouts.App')
@section('title', 'Blog')
@section('shopify-section-main')
<main class="mainContent" role="main">
    <div id="shopify-section-vela-breacrumb-image" class="shopify-section"><section class="velaBreadcrumbs hasBackgroundImage">
<div class="velaBreadcrumbsInner" style="background-color: #eaebef"><div class="velaBreadcrumbImage">
<img alt="velademo-rubix" src="//cdn.shopify.com/s/files/1/0376/9440/6700/files/bg-breacumb.jpg?v=1586848586"></div><nav class="velaBreadcrumbWrap container">       
    <div class="velaBreadcrumbsInnerWrap"><h2 class="breadcrumbHeading breadcrumbHeadingArticle">lifestyle</h2><ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a href="/" title="Back to the frontpage" itemprop="item">
                    <span itemprop="name">Home</span>
                </a>
                <meta itemprop="position" content="1">
            </li><li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="/blogs/news" title="lifestyle" itemprop="item">
                        <span itemprop="name">lifestyle</span>
                    </a>
                    <meta itemprop="position" content="2">
                </li>
                <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <span itemprop="name">Anteposuerit litterarum formas.</span>
                    <meta itemprop="position" content="3">
                </li></ol>
    </div>
</nav>
</div>
</section>
</div>
<section id="pageContent">
<div class="container">
<div class="velaArticleWrap mb30">
    <div id="shopify-section-vela-template-article" class="shopify-section"><div class="row">


<div class="col-xs-12 col-sm-8 col-md-9 mb30">
<article class="articleItem" itemscope="" itemtype="http://schema.org/Article">
    <meta itemscope="" itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage" itemid="https://google.com/article">
    <meta itemprop="headline" content="{{$article->title}}">
    <meta itemprop="author" content="{{$article->author}}">
    <meta itemprop="datePublished" content="04 Apr, 2020">
    <meta itemprop="dateModified" content="04 Apr, 2020">
    <div class="hidden" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
        <meta itemprop="url" content="http://cdn.shopify.com/s/files/1/0376/9440/6700/articles/10.jpg?v=1585986913">
        <meta itemprop="width" content="1170">
        <meta itemprop="height" content="800">
    </div>
    <div class="hidden" itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
        <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
            <meta itemprop="url" content="http://cdn.shopify.com/s/files/1/0376/9440/6700/files/logo.png?v=14864656690670566286">
        </div>
        <meta itemprop="name" content="{{$article->author}}">
    </div>
    <header class="articleHeader">
        <h1 class="velaArticleTitle">{{$article->title}}</h1><div class="articleFeaturedImage">
                    

<div class="p-relative">
<div class="product-card__image" style="padding-top:62.5%;">
<img id="ProductPhotoImg"
        class="img-responsive product-card__img"
        src="{{asset('img/'.$article->thumbnail)}}"
        alt="{{$article->title}}"/>
</div>
<div class="placeholder-background placeholder-background--animation" data-image-placeholder=""></div>
</div>


                </div><div class="blogTitle">
            <a href="/blogs/news" title="lifestyle">lifestyle</a>
        </div>
        <div class="articleMeta d-flex">
            <span class="articleAuthor">{{$article->author}} .</span>
            <span class="articlePublish pull-left">{{$article->created_at->format('j F Y')}}</span> 
        </div>
    </header>
    <div class="articleDetailContent">
        <div class="rte" itemprop="description" style="word-wrap: break-word;">
           {!!$article->excerpt!!}
           <br><br>
           {!!$article->content!!}
        </div>
<div class="articlePostBottom clearfix">
    <div class="articleTags">
    <span>Tags:</span>
  @foreach (unserialize($article->tags) as $tag)
        <a href="/blogs/news/tagged/apps">{{$tag}}</a>, 
  @endforeach
</div>



<div class="articleSocialSharing pull-left">
                    <span>Share:</span>
                    <div class="articleFacebookShare">
                        <div class="fb-share-button fb_iframe_widget" data-href="https://velademo-rubix.myshopify.com/blogs/news/anteposuerit-litterarum-formas-9" data-mobile_iframe="true" data-layout="button_count" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=0&amp;href=https%3A%2F%2Fvelademo-rubix.myshopify.com%2Fblogs%2Fnews%2Fanteposuerit-litterarum-formas-9&amp;layout=button_count&amp;locale=en_US&amp;mobile_iframe=true&amp;sdk=joey"><span style="vertical-align: bottom; width: 78px; height: 20px;"><iframe name="f2f76822ec93864" width="1000px" height="1000px" data-testid="fb:share_button Facebook Social Plugin" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://web.facebook.com/v2.12/plugins/share_button.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfa34cd6b7cf7c%26domain%3Dvelademo-rubix.myshopify.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fvelademo-rubix.myshopify.com%252Ff3226cf7cd392e8%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fvelademo-rubix.myshopify.com%2Fblogs%2Fnews%2Fanteposuerit-litterarum-formas-9&amp;layout=button_count&amp;locale=en_US&amp;mobile_iframe=true&amp;sdk=joey" style="border: none; visibility: visible; width: 78px; height: 20px;" class=""></iframe></span></div>
                    </div>
                    <div class="articleTwitterShare">
                        <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=Anteposuerit%20litterarum%20formas.&amp;url=https://velademo-rubix.myshopify.com/blogs/news/anteposuerit-litterarum-formas-9" target="_blank">
                            <i class="fa fa-twitter"></i> Tweet
                        </a>
                    </div>
    </div>
            </div>
    </div>
</article>

</div>

<aside class="velaSidebar velaBlogSidebar col-xs-12 col-sm-4 col-md-3 mb30">
    <div class="blogSidebar velaSearchSidebar"><div class="velaContentSearch">
    <form class="formSearchPage formSearchBlogPage" action="/search" method="get">
        <input type="hidden" name="view" value="blog">
        <input type="hidden" name="type" value="article">
        <div class="input-group">
            <input type="search" name="q" value="" placeholder="Search our blogs" class="formSearchPageInput form-control">                      
            <button type="submit" class="formSearchPageButton">
                <i class="icons icon-magnifier"></i>
            </button>
        </div>
    <ul class="velaAjaxSearch" style="display: none;"></ul></form>
</div>
</div><div class="blogSidebar">
<h4 class="titleSidebar">Recent Articles</h4>
<div class="velaContent" style="">
    <ul class="listSidebarBlog list-unstyled">
            @foreach($recent_articles as $article)
            <li>
                <a class="titleBlogsidebar" href="/blogs/news/anteposuerit-litterarum-formas-9" title="Anteposuerit litterarum formas.">
                    {{$article->title}}
                </a>
                <time datetime="2020-04-04">{{$article->created_at->format('j F Y')}}</time>
            </li>
            @endforeach
    </ul>
</div>
</div><div class="velaCategoriesBlogSidebar velaBlock">
  <h3 class="titleSidebar">Categories</h3><div class="velaContent" style="">
        <ul class="sidebarListCategories list-unstyled">
@foreach($categories as $category)
    <li class="sidebarBlogCateItem active">
      <a class="active" href="/blogs/news">{{$category->name}}</a></li>
@endforeach
        </ul>
    </div></div><div class="blogSidebar">
    <h4 class="titleSidebar">Articles Tags</h4>
    <div class="velaContent" style="">
        <ul class="blogTagsList list-inline">
            <li><a href="/blogs/news/tagged/apps" title="Show articles tagged Apps">Apps</a></li>
            <li><a href="/blogs/news/tagged/conference" title="Show articles tagged Conference">Conference</a></li>
            <li><a href="/blogs/news/tagged/developers" title="Show articles tagged Developers">Developers</a></li>
            <li><a href="/blogs/news/tagged/enterprise" title="Show articles tagged Enterprise">Enterprise</a></li>
            <li><a href="/blogs/news/tagged/startups" title="Show articles tagged Startups">Startups</a></li>
        </ul>
    </div>
</div><div class="blogSidebar blogBannerSidebar hidden-xs hidden-sm">
<div class="effectOne">
    <a href="/collections/decoration" title="velademo-rubix">
<div class="p-relative">
<div class="product-card__image" style="padding-top:63.76811594202898%;">
<img class="product-card__img lazyautosizes ls-is-cached lazyloaded" scr="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" data-widths="[1,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808]" data-aspectratio="1.5681818181818181" data-ratio="1.5681818181818181" data-sizes="auto" alt="" data-srcset="//cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_1x.jpg?v=1629543118 1w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_360x.jpg?v=1629543118 360w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_540x.jpg?v=1629543118 540w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_720x.jpg?v=1629543118 720w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_900x.jpg?v=1629543118 900w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_1080x.jpg?v=1629543118 1080w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_1296x.jpg?v=1629543118 1296w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_1512x.jpg?v=1629543118 1512w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_1728x.jpg?v=1629543118 1728w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_1944x.jpg?v=1629543118 1944w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_2160x.jpg?v=1629543118 2160w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_2376x.jpg?v=1629543118 2376w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_2592x.jpg?v=1629543118 2592w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_2808x.jpg?v=1629543118 2808w" sizes="217.97727272727272px" srcset="//cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_1x.jpg?v=1629543118 1w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_360x.jpg?v=1629543118 360w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_540x.jpg?v=1629543118 540w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_720x.jpg?v=1629543118 720w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_900x.jpg?v=1629543118 900w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_1080x.jpg?v=1629543118 1080w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_1296x.jpg?v=1629543118 1296w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_1512x.jpg?v=1629543118 1512w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_1728x.jpg?v=1629543118 1728w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_1944x.jpg?v=1629543118 1944w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_2160x.jpg?v=1629543118 2160w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_2376x.jpg?v=1629543118 2376w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_2592x.jpg?v=1629543118 2592w, //cdn.shopify.com/s/files/1/0376/9440/6700/files/banner1_2808x.jpg?v=1629543118 2808w">
</div>
<div class="placeholder-background placeholder-background--animation" data-image-placeholder=""></div>
</div>


    </a>
</div>
</div>
</aside>

</div>

<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div>
</div>
</div>
</div>
</section>
</main>
@endsection