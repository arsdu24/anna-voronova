

@include('components.heading-group',['title'=>'From Our Blog','subtitle'=>'Commodo sociosqu venenatis cras dolor sagittis integer luctus sem primis eget'])

                        <div class="velaContent">
                            <div class="velaOwlRow owlCarouselPlay">
                                <div class="owl-carousel" data-nav="true" data-loop="false" data-dots="false"
                                     data-autoplay="false" data-autoplaytimeout="10000" data-columnone="3"
                                     data-columntwo="3" data-columnthree="2" data-columnfour="2" data-columnfive="1">



                                     @foreach($blogs as $article)
                                     <div class="blogArticle mb20 pb-md-30">
                                        <div class="articleImage">
                                            <a href="/blogs/news/{{$article->id}}">  
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
                        <div >
                            <ul class="blogTagsList list-inline">
                                @foreach($article->tags->take(5) as $tag)
                                <li><a href="/blogs/tagged/{{$tag->slug}}" title="Show articles tagged {{strtoupper($tag->name)}}">{{strtoupper($tag->name)}}</a></li>
                             @endforeach
                            </ul>
                        </div>
                        <div class="articleMeta d-flex">
                            <span class="articleAuthor">{{$article->author}}</span>
                            <span class="articlePublish pull-left">{{$article->created_at->format('j F Y')}}</span> 
                        </div>
                        <h3 class="articleTitle">
                            <a href="/blogs/news/{{$article->id}}">
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
                        @include('components.read-more',['href'=>$article->id])
                    </div>
                </div>

                                    @endforeach
                            

                                    

                                </div>
                            </div>
                        </div>