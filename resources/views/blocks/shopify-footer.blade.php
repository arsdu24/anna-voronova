 <div id="shopify-section-vela-footer" class="shopify-section">
        <footer id="velaFooter">
            <div class="footerCenter">
                <div class="container">
                    <div class="footerCenterInner">
                        <div class="rowFlex rowFlexMargin">
                           <div class="col-xs-12 col-sm-6 col-md-3 mb30">
                                <div class="footerInfo">
                                    <div class="infoImage">
                                        <a href="/" style="width: 130px;">
                                            <div class="p-relative">
                                                <div class="product-card__image"
                                                     style="padding-top:18.461538461538463%;">
                                                    <img class="product-card__img lazyload"
                                                         data-src="{{asset('img/'.$site->full_logo)}}"
                                                         data-widths="[180,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808,3024,4320]"
                                                         data-aspectratio="5.416666666666667"
                                                         data-ratio="5.416666666666667" data-sizes="auto" alt=""/>
                                                </div>
                                                <div class="placeholder-background placeholder-background--animation"
                                                     data-image-placeholder></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="footerSocial">
                                        <div class="d-flex velaSocialFooter">
                                            @include('blocks.social')
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 mb30">
                                <div class="velaFooterMenu">
                                    <h4 class="velaFooterTitle">Information Company</h4>
                                    <div class="velaContent">
                                        <ul class="velaFooterLinks list-unstyled">

                                     @include('components.list-link',['title'=>'My Account','class'=>'' ,'href'=>'/account'])
                                     @include('components.list-link',['title'=>'Track Your Order','class'=>'active' ,'href'=>'/'])
                                     @include('components.list-link',['title'=>'FAQs','class'=>'' ,'href'=>'/pages/faqs'])
                                     @include('components.list-link',['title'=>'Payment Methods','class'=>'' ,'href'=>'/'])
                                     @include('components.list-link',['title'=>'Shipping Guide','class'=>'' ,'href'=>'/policies/shipping-policy]'])
                                     @include('components.list-link',['title'=>'Products Support','class'=>'' ,'href'=>'https://velatheme.ticksy.com/'])
                                     @include('components.list-link',['title'=>'Gift Card Balance','class'=>'' ,'href'=>'/'])

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 mb30">
                                <div class="velaFooterMenu">
                                    <h4 class="velaFooterTitle">More From Rubix</h4>
                                    <div class="velaContent">
                                        <ul class="velaFooterLinks list-unstyled">


                                             @include('components.list-link',['title'=>'About Rubix','class'=>'' ,'href'=>'/pages/about-us'])
                                             @include('components.list-link',['title'=>'Our Guarantees','class'=>'active' ,'href'=>'/policies/privacy-policy'])
                                             @include('components.list-link',['title'=>'Terms and Conditions','class'=>'' ,'href'=>'/policies/terms-of-service'])
                                             @include('components.list-link',['title'=>'Privacy Policy','class'=>'' ,'href'=>'/policies/privacy-policy'])
                                             @include('components.list-link',['title'=>'Return Policy','class'=>'' ,'href'=>'/policies/refund-policy'])
                                             @include('components.list-link',['title'=>'Delivery & Return','class'=>'' ,'href'=>'/policies/refund-policy'])
                                             @include('components.list-link',['title'=>'Sitemap','class'=>'' ,'href'=>'/'])

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 mb30">
                                <div class="footerAbout">
                                    @if($site->phone || $site->email)
                                    <h5>Let’s Talk</h5>
                                    <div class="d-flex mb30">
                                        <div><i class="icons icon-earphones-alt"></i></div>
                                        <div><a href="tel:{{$site->phone}}">{{$site->phone ?? ''}}</a><br>
                                            <u><a href="mailto:{{$site->email}}">{{$site->email ?? ''}}</a></u>
                                        </div>
                                    </div>
                                    @endif
                                    @if($site->address)
                                    <h5>Find Us</h5>
                                    <div class="d-flex">
                                        <div><i class="icons icon-location-pin"></i></div>
                                        <div><a @if($site->yandex_map)href="{{$site->yandex_map}}" @endif>{{$site->address}}</a></div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footerCopyRight">
                <div class="container">
                    <div class="footerCopyRightInner clearfix">
                        <div class="velaCopyRight pull-left">
                            <a href="/"><b>© 2020 {{$site->company_name}}.</b></a> All Rights Reserved
                        </div>
                        <div class="velaPayment pull-right hidden-xs hidden-sm">
                            <div class="vela-content">
                                <img class="img-responsive" alt=""
                                     src="//cdn.shopify.com/s/files/1/0376/9440/6700/files/payment_logo.png?v=1586356353"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
     </div>