<div class="proContent">
    <h5 class="proName">
        <a href="/products/{{$href}}">{{$name}}</a>
    </h5>
    <div class="groupPrice clearfix">
        <div class="proPrice">
            @if($price=="2")
            <div class="priceProduct priceCompare"><span
                    class=money>{{$oldmoney}}</span></div>
            <div class="priceProduct priceSale"><span
                    class=money>{{$money}}</span></div>
            @else            
                <div class="priceProduct "><span
                    class=money>{{$money}}</span></div>      
            @endif                               
            </div>
        <div class="velaSwatchCus">
         {{$slot}}
        </div>
    </div>
</div>
