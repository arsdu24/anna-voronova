<div id="velaTopbar">
            <div class="container">
                <div class="velaTopbarInner row flexAlignCenter">
                    <div class="velaTopbarLeft hidden-xs hidden-sm hidden-md d-flex col-md-4">
                        @if($site->phone) <i  class="icons icon-call-in"></i> {{$site->phone}}<span class="ml10 mr10">|</span> @endif
                        @if($site->email)<i class="icons icon-envelope"></i>{{$site->email}}@endif
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
                               @include('blocks.social')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>