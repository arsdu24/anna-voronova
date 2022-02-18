<div class="velaServicesInner hasbgGutter">
    <div class="velaContent">
        <div class="rowFlex rowFlexMargin">
            @foreach($details as $detail)
            <div class="col-xs-12 col-sm-4 mbItemGutter">
                <div class="boxService text-center">
                    <div class="boxServiceImage ">
                        <div class="serviceImage" style="width: 48px;height: 48px">
                            <div class="p-relative">
                                <i class="{{$detail->icon}}" style="font-size: 60px"></i>
                            </div>
                        </div>
                    </div>
                    <div class="boxServiceContent">
                        <h4 class="boxServiceTitle">{{$detail->title}}</h4>
                        <div class="boxServiceDesc">
                            {{$detail->subtitle}}
                        </div>
                        @include('components.learn-more-btn',['href'=>'/contact-us#policy-'.$detail->id])
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>