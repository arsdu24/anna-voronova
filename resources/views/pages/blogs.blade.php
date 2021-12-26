@extends('layouts.App')
@section('title','Blog')
@section('shopify-section-main')
<main class="mainContent" role="main">
    <div id="shopify-section-vela-breacrumb-image" class="shopify-section"><section class="velaBreadcrumbs hasBackgroundImage">
<div class="velaBreadcrumbsInner" style="background-color: #eaebef"><div class="velaBreadcrumbImage">

<img alt="{{$site->company_name}}" src="{{asset('img/'.$site->blog_image)}}"></div><nav class="velaBreadcrumbWrap container">       
    <div class="velaBreadcrumbsInnerWrap">
        @if(isset($tag))
            <h1 class="breadcrumbHeading">{{ucfirst(strtolower($tag->name))}}</h1>
        @else
            <h1 class="breadcrumbHeading">Blog</h1>
        @endif
            
<ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a href="/" title="Back to the frontpage" itemprop="item">
                    <span itemprop="name">Home</span>
                </a>
                <meta itemprop="position" content="1">
            </li><li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                @if(isset($tag))
                    <span itemprop="name">{{ucfirst(strtolower($tag->name))}}</span>
                @else
                    <span itemprop="name">Blog</span>
                 @endif
                    <meta itemprop="position" content="2">
              </li></ol>
    </div>
</nav>
</div>
</section>
</div>
<section id="pageContent" class="pageBlogContent mb30">
<div class="container">
<div class="velaBlogWrap">

    <div id="shopify-section-vela-template-blog" class="shopify-section">
<div class="row" style="min-height: 50rem">
    @if($articles->count()>0)
            <div class="col-xs-12 col-sm-8 col-md-9">
<div class="blogContainer 
    blogContainerSidebar 
    "><h1 class="velaBlogTitle"></h1>
    
    <div class="blogListArticle blogGridTemplate">
                <div class="rowFlexMargin rowFlex">

    @foreach($articles as $article)
         <div class="col-sp-12 col-xs-6">
                            <div class="blogArticle mb20 pb-md-30">
                                    <div class="articleImage">
                                        <a href="/blog/article/{{$article->slug}}">  
<div class="p-relative">
            <div class="product-card__image" style="padding-top:62.5%;">
                <img id="ProductPhotoImg"
                class="img-responsive product-card__img"
                src="{{asset('img/'.$article->thumbnail)}}"
                alt="{{$article->title}}"/>
            </div>
            <div class="placeholder-background placeholder-background--animation" data-image-placeholder=""></div>
            </div> </a>
            </div>
                <div class="articleContent">
                    <div>
                        <ul class="blogTagsList cardList list-inline">
                            @foreach($article->tags->take(5) as $tag)
                            <li><a href="/blog/tag/{{$tag->slug}}" title="Show articles tagged {{strtoupper($tag->name)}}">{{strtoupper($tag->name)}}</a></li>
                         @endforeach
                        </ul>
                    </div>
                    <div class="articleMeta d-flex">
                        <span class="articleAuthor">{{$article->author}}</span>
                        <span class="articlePublish pull-left">{{$article->created_at->format('j F Y')}}</span> 
                    </div>
                    <h3 class="articleTitle">
                        <a href="/blog/article/{{$article->slug}}">
                            @if(strlen($article->excerpt)<=50)
                                    {{$article->title}}
                            @else {{substr($article->title, 0, 50).'...'}}
                            @endif</a>
                    </h3>
                    <div class="articleDesc" style="word-wrap: break-word;">
                            @if(strlen($article->excerpt)<=180)
                                {{$article->excerpt}}
                            @else {{substr($article->excerpt, 0, 180).'...'}}
                            @endif
                    </div>
                    @include('components.read-more',['href'=>$article->slug])
                </div>
            </div>
        </div>

        @endforeach
                </div><div class="velaPaginationWrap clearfix">
                    {!!$articles->links()!!}
                        <div class="itemPaginate pull-right"> Showing {{$articles->firstItem()}} to {{$articles->count()}} of {{$articles->total()}} entries</div>
                    </div>
        </div>
    </div>
</div>
<aside class="velaSidebar velaBlogSidebar col-xs-12 col-sm-4 col-md-3 mb30">
    <div class="blogSidebar velaSearchSidebar"><div class="velaContentSearch">
    <form class="formSearchPage formSearchBlogPage"  action="/search" method="get">
        <input type="hidden" name="type" value="blog">
        <div class="input-group">
            <input  name="q" value="" placeholder="Search our blogs"  autocomplete="off"class="formSearchPageInput form-control">                      
            <button type="submit" class="formSearchPageButton">
                <i class="icons icon-magnifier"></i>
            </button>
        </div>
        <div class="searchlist">
        <ul class="blogSearch" style="display: none;"></ul>
        <div>
    </form>
   
</div>
</div>
<div class="blogSidebar">
<h4 class="titleSidebar">Recent Articles</h4>
<div class="velaContent" >
    <ul class="listSidebarBlog list-unstyled">
        @foreach($recent_articles as $article)
        <li>
            <a class="titleBlogsidebar" href="/blog/article/{{$article->slug}}" title="{{$article->title}}">
                @if(strlen($article->excerpt)<=50)
                {{$article->title}}
                @else {{substr($article->title, 0, 50).'...'}}
                @endif
            </a>
            <time datetime="2020-04-04">{{$article->created_at->format('j F Y')}}</time>
        </li>
        @endforeach
</ul>
</div>
</div><div class="velaCategoriesBlogSidebar velaBlock">
  <h3 class="titleSidebar">Categories</h3><div class="velaContent">
        <ul class="sidebarListCategories list-unstyled">
@foreach($category as $item)
    <li class="sidebarBlogCateItem active">
      <a class="active" href="{{route('categoryShow',['category'=>$item->slug])}}">{{$item->name}}</a></li>
@endforeach
        </ul>
    </div></div><div class="blogSidebar">
    <h4 class="titleSidebar">Articles Tags</h4>
    <div class="velaContent">
        <ul class="blogTagsList list-inline">
            @foreach($tags as $tag)
            <li><a href="/blog/tag/{{$tag->slug}}" title="Show articles tagged {{strtoupper($tag->name)}}">{{strtoupper($tag->name)}}</a></li>
         @endforeach
            
           
        </ul>
    </div>
</div>
</aside>
@else
<div class="col-md-12">
    <div class="card">
        <div class="card-body cart">
            <div class="col-sm-12  text-center"> 
                <h2 class="articleTitle">
                    <div class="alert alert-warning text-center  mt-5" style="padding:3rem">Sorry for the inconvenience, there are no articles to display !
                        <a href="/blog"  style="margin-top:1rem" data-abc="true">Go Back</a>
            </div>
        </div>
    </div>
</div>

@endif
</div>
</div>
</div>
</div>
</section>
</main>
@endsection