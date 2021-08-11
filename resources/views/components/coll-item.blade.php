
     <div class="coll-item" style="width: 16.6667%;">
        <div class="collImage">

            <a href="{{route('categoryShow',['category'=>$category])}}">


                <div class="p-relative">
                    <div class="product-card__image"
                            style="padding-top:100.0%;">
                        <img
                            class="product-card__img lazyload"
                            data-src="{{asset('img/'.$category->thumbnail)}}"
                            data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                            data-aspectratio="1.0"
                            data-ratio="1.0"
                            data-sizes="auto"
                            alt="{{$category->title}}"/>
                    </div>
                    <div
                        class="placeholder-background placeholder-background--animation"
                        data-image-placeholder></div>
                </div>


            </a>
        </div>
        <h5 class="collTitle"><a
            href="{{route('categoryShow',['category'=>$category])}}"
                title="{{$category->title}}">{{$category->title}}</a></h5>
    </div>                      
