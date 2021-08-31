<!doctype html>
<!--[if IE 9]>
<html class="ie9 no-js" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#ba933e">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="{{ route('home') }}">
    <link rel="shortcut icon" href="{{ asset('img/faviicon_32x32.jpg') }}" type="image/png">
    <title>
        @yield('title')
    </title>

    <!-- /snippets/social-meta-tags.liquid -->
    <meta property="og:site_name" content="velademo-rubix">
    <meta property="og:url" content="{{route('home')}}">
    <meta property="og:title" content="velademo-rubix">
    <meta property="og:type" content="website">
    <meta property="og:description" content="velademo-rubix">

    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="velademo-rubix">
    <meta name="twitter:description" content="velademo-rubix">

    <link href="{{asset('css/app.css')}}"
          rel="stylesheet" type="text/css" media="all"/>

    <script src="{{asset('js/jquery-3.5.0.min.js')}}"
            type="text/javascript"></script>
    <link href="{{route('home')}}" rel="dns-prefetch">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    
    <meta property="og:image"
          content="{{asset('img/logo.png')}}"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="628"/>
</head>

<body id="velademo-rubix" class="template-index  bodyPreLoading">


<div id="cartDrawer" class="drawer drawerRight">
    <div class="drawerClose">
        <span class="jsDrawerClose"></span>
    </div>
    <div class="drawerCartTitle">
        <span>Shopping cart</span>
    </div>
    
<div id="cartContainer">
    
        @if($cart)
            @if($cart->items()->count())
        <form action="/cart" method="post" novalidate="" class="cart ajaxcart">
            <div class="ajaxCartInner" id="CartItemContainer">
                       
                             @foreach($cart->items as $cartItem)
                                   <div class="ajaxCartProduct">
                                        <div class="drawerProduct ajaxCartRow" data-line="2">
                                            <div class="drawerProductImage">
                                                <a href="/products/{{$cartItem->product->id}}"><img class="img-responsive" src="{{asset('img/'.unserialize($cartItem->product->thumbnail)[0])}}" alt="{{$cartItem->product->name}}"></a>
                                            </div>
                                            <div class="drawerProductContent">
                                                <div class="drawerProductTitle">
                                                    <a href="/products/{{$cartItem->product->id}}">{{$cartItem->product->name}}</a>
                                                </div>
                                                <div class="drawerProductPrice">
                                                    <div class="priceProduct">
                                                        <span class="money" data-currency="USD">$ 
                                                       
                                                        {{$cartItem->price}}
                                                     
                                                         USD</span>
                                                    </div>
                                                </div>
                                                <div class="drawerProductQty">
                                                    <div class="velaQty">
                                                        <button type="button" data-id="{{$cartItem->id}}" data-price="{{$cartItem->price}}" class="qtyUpdate velaQtyButton velaMinus" >
                                                            <span class="txtFallback">&minus;</span>
                                                        </button>
                                                        <input type="text" name="updates[]"  data-id="{{$cartItem->id}}" class="qtyNum velaQtyText " value="{{$cartItem->quantity}}" min="0"  pattern="[0-9]*" />
                                                        <button type="button" data-id="{{$cartItem->id}}" data-price="{{$cartItem->price}}" class="qtyUpdate  velaQtyButton velaPlus" >
                                                            <span class="txtFallback">+</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="drawerProductDelete">
                                                    <div class="cartRemoveBox">
                                                        <a href="#" id="{{$cartItem->id}}" class="cartRemove btnClose remove">
                                                            <span>Remove</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                             @endforeach
                            
                            
                </div>
                
    
                
    
                    <div class="ajaxCartNote">
                        <div class="velaCartNoteButton">
                            <a class="btnCartNote collapsed" href="#velaCartNote" data-toggle="collapse">
                                <i class="fa fa-times"></i>
                                add order note
                            </a>
                        </div>
                        <div id="velaCartNote" class="velaCartNoteGroup collapse">
                            <label for="CartSpecialInstructions">Special instructions for seller</label>
                            <textarea name="note" class="form-control" id="CartSpecialInstructions" rows="4"></textarea>
                        </div>
                    </div>
    
                
    
                <div class="drawerCartFooter">
                    <div class="drawerAjaxFooter">
                        <div class="drawerSubtotal">
                            <span class="cartSubtotalHeading">Subtotal</span>
                            <span class="cartSubtotal">$<span class="money" id="cart_value"  data-currency="USD">
                           
                                {{$cart->subtotal}}
                            </span>USD</span>
                        </div>
                        <p class="drawerShipping">Shipping, taxes, and discounts will be calculated at checkout.</p>
                        <div class="drawerButton">
                            <div class="drawerButtonBox">
                                <a class="btn btnVelaCart btnViewCart" href="/cart">
                                    View Cart
                                </a>
                            </div>
                            <div class="drawerButtonBox">
                                <a href="/checkout" class="btn btnVelaCart btnCheckout" name="checkout">
                                    Check Out
                                </a>
                            </div>
                         
    
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @else
        <div class="drawerCartEmpty">Your cart is currently empty.</div>
        @endif
        @else
        <div class="drawerCartEmpty">Your cart is currently empty.</div>
        @endif
    

    
</div>
</div>
<div id="pageContainer" class="isMoved">

    @include('blocks.shopify-header')
                          
    @yield('shopify-section-main')

    @include('blocks.shopify-footer')

     <div id="shopify-section-vela-template-notification" class="shopify-section">
     </div>
     <script type="text/javascript">
        $(window).on("load", function () {
            var dateCookie = new Date();
            var minutes = 60;
            dateCookie.setTime(dateCookie.getTime() + (minutes * 60 * 1000));
            setTimeout(function () {
                if (document.body.classList.contains('template-collection') && ($("#velaNotifiCollection").length > 0) && ($.cookie('velaNotifiCollectioin') != 'closed')) {
                    $.fancybox.open({
                        src: '#velaNotifiCollection',
                        opts: {
                            padding: 0,
                            beforeLoad: function () {
                                $('#velaNotifiCollection').removeClass('hidden');
                            },
                            href: '#velaNotifiCollection',
                            helpers: {
                                overlay: true
                            },
                            afterClose: function () {
                                $('#velaNotifiCollection').addClass('hidden');
                                $.cookie('velaNotifiCollectioin', 'closed', {
                                    expires: dateCookie,
                                    path: '/'
                                });
                            }
                        }
                    });
                } else if (document.body.classList.contains('template-blog') && ($("#velaNotifiBlog").length > 0) && ($.cookie('velaNotifiBlog') != 'closed')) {
                    $.fancybox.open({
                        src: '#velaNotifiBlog',
                        opts: {
                            padding: 0,
                            beforeLoad: function () {
                                $('#velaNotifiBlog').removeClass('hidden');
                            },
                            href: '#velaNotifiBlog',
                            helpers: {
                                overlay: true
                            },
                            afterClose: function () {
                                $('#velaNotifiBlog').addClass('hidden');
                                $.cookie('velaNotifiBlog', 'closed', {
                                    expires: dateCookie,
                                    path: '/'
                                });
                            }
                        }
                    });
                } else if (document.body.classList.contains('template-product') && ($("#velaNotifiProduct").length > 0) && ($.cookie('velaNotifiProduct') != 'closed')) {
                    $.fancybox.open({
                        src: '#velaNotifiProduct',
                        opts: {
                            padding: 0,
                            beforeLoad: function () {
                                $('#velaNotifiProduct').removeClass('hidden');
                            },
                            href: '#velaNotifiProduct',
                            helpers: {
                                overlay: true
                            },
                            afterClose: function () {
                                $('#velaNotifiProduct').addClass('hidden');
                                $.cookie('velaNotifiProduct', 'closed', {
                                    expires: dateCookie,
                                    path: '/'
                                });
                            }
                        }
                    });
                } else if (document.body.classList.contains('template-page') && ($("#velaNotifiPage").length > 0) && ($.cookie('velaNotifiPage') != 'closed')) {
                    $.fancybox.open({
                        src: '#velaNotifiPage',
                        opts: {
                            padding: 0,
                            beforeLoad: function () {
                                $('#velaNotifiPage').removeClass('hidden');
                            },
                            href: '#velaNotifiPage',
                            helpers: {
                                overlay: true
                            },
                            afterClose: function () {
                                $('#velaNotifiPage').addClass('hidden');
                                $.cookie('velaNotifiPage', 'closed', {
                                    expires: dateCookie,
                                    path: '/'
                                });
                            }
                        }
                    });
                } else if (($("#velaNotifi").length > 0) && ($.cookie('velaNotifi') != 'closed')) {
                    $.fancybox.open({
                        src: '#velaNotifi',
                        opts: {
                            padding: 0,
                            beforeLoad: function () {
                                $('#velaNotifi').removeClass('hidden');
                            },
                            href: '#velaNotifi',
                            helpers: {
                                overlay: true
                            },
                            afterClose: function () {
                                $('#velaNotifi').addClass('hidden');
                                $.cookie('velaNotifi', 'closed', {
                                    expires: dateCookie,
                                    path: '/'
                                });
                            }
                        }
                    });
                }
            }, 0);
        });
      </script>
      </div>
     <script id="CartTemplate" type="text/template">
     <form action="/cart" method="post" novalidate class="cart ajaxcart">
        <div class="ajaxCartInner">
            <div class="ajaxCartProduct">
                <div class="drawerProduct ajaxCartRow">
                    <div class="drawerProductImage">
                    </div>
                    <div class="drawerProductContent">
                        <div class="drawerProductTitle">
                        </div>
                        <div class="drawerProductPrice">
                            <div class="priceProduct">
                            </div>
                        </div>
                        <div class="drawerProductQty">
                            <div class="velaQty">
                                <button type="button" class="qtyAdjust velaQtyButton velaMinus">
                                    <span class="txtFallback">&minus;</span>
                                </button>
                                <input type="text" name="updates[]" class="qtyNum velaQtyText" pattern="[0-9]*"/>
                                <button type="button" class="qtyAdjust velaQtyButton velaPlus">
                                    <span class="txtFallback">+</span>
                                </button>
                            </div>
                        </div>
                        <div class="drawerProductDelete">
                            <div class="cartRemoveBox">
                                <a href="#" class="cartRemove btnClose" onclick="return false;">
                                    <span>Remove</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ajaxCartNote">
                <div class="velaCartNoteButton">
                    <a class="btnCartNote collapsed" href="#velaCartNote" data-toggle="collapse">
                        <i class="fa fa-times"></i>
                        add order note
                    </a>
                </div>
                <div id="velaCartNote" class="velaCartNoteGroup collapse">
                    <label for="CartSpecialInstructions">Special instructions for seller</label>
                    <textarea name="note" class="form-control" id="CartSpecialInstructions"
                              rows="4"></textarea>
                </div>
            </div>
            <div class="drawerCartFooter">
                <div class="drawerAjaxFooter">
                    <div class="drawerSubtotal">
                        <span class="cartSubtotalHeading">Subtotal</span>
                        <span class="cartSubtotal">123</span>
                    </div>
                    <p class="drawerShipping">Shipping, taxes, and discounts will be calculated at checkout.</p>
                    <div class="drawerButton">
                        <div class="drawerButtonBox">
                            <a class="btn btnVelaCart btnViewCart" href="/cart">
                                View Cart
                            </a>
                        </div>
                        <div class="drawerButtonBox">
                            <button type="submit" class="btn btnVelaCart btnCheckout" name="checkout">
                                Check Out
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</script>
<script id="headerCartTemplate" type="text/template">
    <form action="/cart" method="post" novalidate class="cart ajaxcart">
        <div class="headerCartInner">
            <div class="headerCartScroll">
                <div class="ajaxCartProduct">
                    <div class="ajaxCartRow rowFlex">
                        <div class="headerCartImage">
                            <a><img class="img-responsive" alt=""/></a>
                        </div>
                        <div class="headerCartContent">
                            <div class="headerCartInfo">
                                <a href="#" class="headerCartProductName">name</a>
                                <div class="headerCartProductMeta">variation</div>
                                <div class="headerCartProductMeta">key: this</div>
                                <div class="headerCartPrice">
                                    price <span class="d-block">x itemQty</span>
                                </div>
                            </div>
                            <div class="headerCartRemoveBox">
                                <a href="#" class="cartRemove" onclick="return false;">
                                    <i class="btnClose"></i> <span>Remove</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="headerCartTotal">
                <span class="headerCartTotalTitle">Subtotal</span>
                <span class="headerCartTotalNum">totalPrice</span>
            </div>
            <div class="headerCartButton d-flex">
                <div class="headerCartButtonBox mr10">
                    <a class="btn btnVelaCart btnViewCart" href="/cart">

                        View Cart

                    </a>
                </div>
                <div class="headerCartButtonBox">
                    <button type="submit" class="btn btnVelaCart btnCheckout" name="checkout">

                        Check Out

                    </button>
                </div>
            </div>

        </div>
    </form>
</script>
<script id="velaAjaxQty" type="text/template">

    <div class="velaQty">
        <button type="button" class="qtyAdjust velaQtyButton velaMinus">
            <span class="txtFallback">&minus;</span>
        </button>
        <input type="text" class="qtyNum velaQtyText" aria-label="quantity"
               pattern="[0-9]*">
        <button type="button" class="qtyAdjust velaQtyButton velaPlus">
            <span class="txtFallback">+</span>
        </button>
    </div>

</script>
<script id="velaJsQty" type="text/template">

    <div class="velaQty">
        <button type="button" class="velaQtyAdjust velaQtyButton velaMinus">
            <span class="txtFallback">&minus;</span>
        </button>
        <input type="text" class="velaQtyNum velaQtyText"/>
        <button type="button" class="velaQtyAdjust velaQtyButton velaPlus">
            <span class="txtFallback">+</span>
        </button>
    </div>

</script>

<div id="loading" style="display:none;"></div>
<div id="goToTop" class="hidden-xs hidden-sm"><span class="fa fa-angle-up"></span></div>
<div id="velaPreLoading">
    <span></span>
    <div class="velaLoading">
        <span class="velaLoadingIcon one"></span>
        <span class="velaLoadingIcon two"></span>
        <span class="velaLoadingIcon three"></span>
        <span class="velaLoadingIcon four"></span>
    </div>
</div>
<div id="velaNewsletterModal" class="hidden">
    <div class="newsletterModal">
        <div class="velaNewsletterModal text-center">
            <h3 class="velaTitle">Get Our Email Letter</h3>
            <div class="velaContent">
                <div class="newsletterDescription">Subscribe to the Complex mailing list to receive updates on new
                    arrivals, special offers and other discount information.
                </div>
                <form
                    action="https://velatheme.us13.list-manage.com/subscribe/post-json?u=4d8c80acdd82f3c48d27467f6&amp;id=d52e6e4f14&amp;c=?"
                    method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank"
                    class="js-vela-newsletter formNewsletter clearfix">
                    <div class="input-group">
                        <input type="email" value="" placeholder="Your email address..." name="EMAIL" id="mail"
                               class="js-input-newsletter form-control" aria-label="Your email address...">
                        <span class="input-group-addon">
                                        <button id="subscribe" class="btn btnNewsletter" type="submit">
                                            <i class="pe-7s-paper-plane"></i>
                                            <span>Subscribe</span>
                            </button>
                            </span>
                    </div>
                </form>
                <div class="checkbox checkGroup">
                    <input id="chkNewsletterModal" name="show-again" type="checkbox"><label for="chkNewsletterModal">
                        Don't show this popup again</label>
                </div>
            </div>
        </div>
    </div>
</div>

<script
    src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js"
    type="text/javascript"></script>
<script
    src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js"
    type="text/javascript"></script>
<script src="//cdn.shopify.com/s/javascripts/currencies.js" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/0376/9440/6700/t/10/assets/vendor.js?v=13878651640065809907"
        type="text/javascript"></script>
        <script src="//cdn.shopify.com/s/files/1/0376/9440/6700/t/10/assets/vela_ajaxcart.js?v=7288850833425201504"
        type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/0376/9440/6700/t/10/assets/lazysizes.min.js?v=15377268347072223862"
        async="async"></script>
<script src="{{asset('js/vela.js')}}"  type="text/javascript"></script>
<script src="{{asset('js/jquery.cookie.js')}}"
        type="text/javascript"></script>
<script>
 $(document).ready(function () {
    ajust();
    remove();
    change()
});

function remove(){
    $('.remove').click(function (e) {
        e.preventDefault();
        var id = $(this).attr('id');
        var data = {
            "_token": "{{ csrf_token() }}",
            "id": id,
        };

        $.ajax({
            url: '{{route("cartItemDelete")}}',
            type: 'POST',
            data: data,
            success: function (result) {
             let document=$(result);
             let cart_value = document.find('#cartContainer').html();
             let cart_count = document.find('#CartCount').html();
             let cart_content = document.find('#Cart').html();
             if(cart_content)$('#Cart').html(cart_content);
             $('#CartCount').html(cart_count);
             $('#cartContainer').html(cart_value);
             ajust();
             remove();
             change()
            },
            error: function (result) {
               console.log(result);
            }
        });
    });
}

    function ajust(){
    $('.qtyUpdate').off('click').click(function ajust_qty(e) {
    e.preventDefault();
    var quantity = $(this).closest(".velaQty").find('.velaQtyText').val();
    var product_id = $(this).attr('data-id');
    if($(this).hasClass('velaMinus')){
            $(this).closest(".velaQty").find('.velaQtyText').val(--quantity);
            $(this).closest(".velaQty").find('.velaQtyText').trigger('change');
    }
    else if($(this).hasClass('velaPlus')){
            $(this).closest(".velaQty").find('.velaQtyText').val(++quantity)
            $(this).closest(".velaQty").find('.velaQtyText').trigger('change');
    }
});
}

function change(){$('.velaQty').change(function ajust_qty(e) {
    e.preventDefault();
    var quantity = e.target.value;
    console.log(quantity);
    var product_id =e.target.getAttribute('data-id');
    var data = {
        "_token": "{{ csrf_token() }}",
        'quantity':quantity,
        'id':product_id,
    };

    $.ajax({
        url: '{{route("qtyUpdate")}}',
        type: 'POST',
        data: data,
        success: function (result) {
             let document=$(result);
             let cart_value = document.find('#cartContainer').html();
             let cart_count = document.find('#CartCount').html();
             let cart_content = document.find('#Cart').html();
             if(cart_content)$('#Cart').html(cart_content);
             $('#CartCount').html(cart_count);
             $('#cartContainer').html(cart_value);
             ajust();
             remove();
             change()
        },
        error: function (response) {
               console.log(response);
            }
    });
});
}
</script>
@yield('scripts')
<script>
    $('.velaSearch').on('keyup focus',function (e) {
    e.preventDefault();
    let q = $(this).val();
    var data = {
        "_token": "{{ csrf_token() }}",
        'type':'product',
        'q': q,
    };
    $.ajax({
        url: '{{route("search")}}',
        type: 'GET',
        data: data,
        success: function (result) {
             let document=$(result);
             let search_value = document.find('.velaAjaxSearch').html();
             $('.velaAjaxSearch').html(search_value);
             $('.velaAjaxSearch').show();
        },
        error: function (response) {
               console.log(response);
            }
    });
});
$('.formSearchPageInput').on('keyup focus',function (e) {
    e.preventDefault();
    let q = $(this).val();
    var data = {
        "_token": "{{ csrf_token() }}",
        'type':'blog',
        'q': q,
    };
    $.ajax({
        url: '{{route("search")}}',
        type: 'GET',
        data: data,
        success: function (result) {
             let document=$(result);
             let search_value = document.find('.velaAjaxSearch').html();
             $('.blogSearch').html(search_value);
             $('.blogSearch').show();
        },
        error: function (response) {
               console.log(response);
            }
    });
});

</script>

</body>
</html>