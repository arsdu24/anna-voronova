<div class="blockProMenu  col-sm-5">
    <div class="proImage proImageMenu">
        <a class="proImageLink"
            href="/products/{{$href}}"
            title=""
            style="width: 80px; display: block;">
            <div class="p-relative">
                <div class="product-card__image"
                        style="padding-top:124.25%;">
                    <img
                        class="product-card__img lazyload"
                        data-src="{{asset('img/'.$img)}}"
                        data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                        data-aspectratio="0.8048289738430584"
                        data-ratio="0.8048289738430584"
                        data-sizes="auto"
                        alt="{{$title}}"/>
                </div>
                <div
                    class="placeholder-background placeholder-background--animation"
                    data-image-placeholder></div>
            </div>
        </a>
    </div>
    <div class="proMeta proMetaMenu">
        <h5 class="proName">
            <a  href="/products/{{$href}}"
                title="">{{$title}}</a>
        </h5>
        <div class="boxProPrice">
            <span class=" proPrice"><span
                    class=money>{{$price}} $</span></span>
        </div>
    </div>
</div>
