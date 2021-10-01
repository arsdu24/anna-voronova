<div id="velaTopbar">
            <div class="container">
                <div class="velaTopbarInner row flexAlignCenter">
                    @if($site->phone || $site->email)
                    <div class="velaTopbarLeft hidden-xs hidden-sm hidden-md d-flex col-md-4">
                        @if($site->phone) <i  class="icons icon-call-in"></i> <a href="tel:{{$site->phone}}">{{$site->phone}}</a><span class="ml10 mr10">|</span> @endif
                        @if($site->email)<i class="icons icon-envelope"></i><a href="mailto:{{$site->email}}">{{$site->email}}</a>@endif
                    </div>
                    @endif
                    <div class="velaTopbarRight d-flex flexAlignEnd hidden-xs hidden-sm hidden-md d-flex col-md-8">
                        <div class="hidden-xs">
                            <div class="d-flex velaSocialTop">
                                @include('blocks.social')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>