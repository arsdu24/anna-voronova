@extends('layouts.App')
@section('title', 'Blog')
@section('shopify-section-main')
<main class="mainContent" role="main">
    <div id="shopify-section-vela-breacrumb-image" class="shopify-section"><section class="velaBreadcrumbs hasBackgroundImage">
<div class="velaBreadcrumbsInner" style="background-color: #eaebef"><div class="velaBreadcrumbImage">
<img alt="{{$site->company_name}}" src="{{asset('img/'.$site->blog_image)}}"></div><nav class="velaBreadcrumbWrap container">       
    <div class="velaBreadcrumbsInnerWrap"><h2 class="breadcrumbHeading breadcrumbHeadingArticle">{{ucfirst($article->title)}}</h2><ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a href="/" title="Back to the frontpage" itemprop="item">
                    <span itemprop="name">Home</span>
                </a>
                <meta itemprop="position" content="1">
            </li><li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="/blog" title="lifestyle" itemprop="item">
                        <span itemprop="name">Blog</span>
                    </a>
                    <meta itemprop="position" content="2">
                </li>
                <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <span itemprop="name">{{$article->title}}</span>
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
    @foreach ($article->tags as $tag)
    <a href="/blog/tag/{{$tag->slug}}" >{{strtoupper($tag->name)}}</a>, 
@endforeach
</div>



<div class="articleSocialSharing pull-left">
                    <span>Share:</span>
                    <div class="articleFacebookShare">
                        <div class="fb-share-button fb_iframe_widget" data-href="https://velademo-rubix.myshopify.com/blog/anteposuerit-litterarum-formas-9" data-mobile_iframe="true" data-layout="button_count" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=0&amp;href=https%3A%2F%2Fvelademo-rubix.myshopify.com%2Fblogs%2Fnews%2Fanteposuerit-litterarum-formas-9&amp;layout=button_count&amp;locale=en_US&amp;mobile_iframe=true&amp;sdk=joey"><span style="vertical-align: bottom; width: 78px; height: 20px;"><iframe name="f2f76822ec93864" width="1000px" height="1000px" data-testid="fb:share_button Facebook Social Plugin" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://web.facebook.com/v2.12/plugins/share_button.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfa34cd6b7cf7c%26domain%3Dvelademo-rubix.myshopify.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fvelademo-rubix.myshopify.com%252Ff3226cf7cd392e8%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fvelademo-rubix.myshopify.com%2Fblogs%2Fnews%2Fanteposuerit-litterarum-formas-9&amp;layout=button_count&amp;locale=en_US&amp;mobile_iframe=true&amp;sdk=joey" style="border: none; visibility: visible; width: 78px; height: 20px;" class=""></iframe></span></div>
                    </div>
                    <div class="articleTwitterShare">
                        <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=Anteposuerit%20litterarum%20formas.&amp;url=https://velademo-rubix.myshopify.com/blog/anteposuerit-litterarum-formas-9" target="_blank">
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
        <input type="hidden" name="type" value="blog">
        <div class="input-group">
            <input name="q" value="" placeholder="Search our blogs" autocomplete="off" class="formSearchPageInput form-control">                      
            <button type="submit" class="formSearchPageButton">
                <i class="icons icon-magnifier"></i>
            </button>
        </div>
        <ul class="blogSearch" style="display: none;"></ul></form>
</div>
</div><div class="blogSidebar">
<h4 class="titleSidebar">Recent Articles</h4>
<div class="velaContent" style="">
    <ul class="listSidebarBlog list-unstyled">
            @foreach($recent_articles as $article)
            <li>
                <a class="titleBlogsidebar" href="/blog/article/{{$article->slug}}" title="{{$article->title}}">
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
      <a class="active" href="{{route('categoryShow',['category'=>$category->slug])}}">{{$category->name}}</a></li>
@endforeach
        </ul>
    </div></div><div class="blogSidebar">
    <h4 class="titleSidebar">Articles Tags</h4>
    <div class="velaContent" style="">
        <ul class="blogTagsList list-inline">
            @foreach($tags as $tag)
            <li><a href="/blog/tag/{{$tag->slug}}" title="Show articles tagged {{$tag->name}}">{{$tag->name}}</a></li>
            @endforeach
        </ul>
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