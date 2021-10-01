@extends('layouts.App')
@section('title', 'Cart')

@section('shopify-section-main')

<header class="banner" data-header role="banner">
<div class="wrap">
<h1 class="visually-hidden">
Information
</h1>
</div>
</header>
<section id="pageContent">
    @if($cart->items()->count()!=0)
    <div class="container">
        <div id="shopify-section-vela-template-cart" class="shopify-section"><div class="cartContainer">
    <h1 class="cartTitle">Shopping cart</h1>
    <div class="cartContent" id="Cart">
            <form action="/cart" method="post" novalidate="" class="cartForm">
                <div class="cartTable">
                    <div class="row noGutter cartHeaderLabels">
                        <div class="col-xs-3 col-sm-2">Image</div>
                        <div class="col-xs-9 col-sm-8">Product</div>
                        <div class="col-xs-12 col-sm-2 hidden-xs text-right">Total</div>
                    </div>
                    <div class="cartItemWrap">
                               @foreach($cart->items as $data)
                                   
                            <div class="flexRow noGutter">
                                <div class="productImage col-xs-3 col-sm-2" data-label="Product">
                                    <a href="/products/{{$data->product_id}}" class="cartImage">
                                      <img class="img-responsive" src="{{asset('img/'.unserialize($data->product->thumbnail)[0])}}" alt="{{$data->product->name}}">
                                    </a>
                                </div>
                                <div class="productInfo col-xs-9 col-sm-8">
                                    <a href="/products/hanging-egg-chair?variant=33435010727980" class="productName">
                                        {{$data->product->name}}
                                    </a>
                                    
                                        <br>
                                    <div data-label="Price">
                                        <span class="priceProduct">
                                            <span class="money" >{{$data->price}}</span>
                                        </span>
                                    </div>
                                    <div class="flexRow cartGroup flexAlignCenter" data-label="Quantity">
                                        <div class="proQuantity">
                        
                                        <div class="drawerProductQty">
                                            <div class="velaQty">
                                                <button type="button" data-id="{{$data->id}}"  class="qtyUpdate velaQtyButton velaMinus" >
                                                    <span class="txtFallback">&minus;</span>
                                                </button>
                                                <input type="text" name="updates[]" data-id="{{$data->id}}" class="qtyNum velaQtyText" value="{{$data->quantity}}" min="0"  pattern="[0-9]*" />
                                                <button type="button" data-id="{{$data->id}}"  class="qtyUpdate velaQtyButton velaPlus" @if($data->product->stock-$data->quantity==0)disabled  @endif  >
                                                    <span class="txtFallback">+</span>
                                                </button>
                                            </div>
                                        </div>
                                        </div>
                                        <a href="" id="{{$data->id}}" item-total="{{$data->price * $data->quantity}}" class="cartRemove remove" title="Remove">
                                            Remove
                                        </a>
                                    </div>
                                </div>
                                <div class="text-right col-xs-12 col-sm-2 hidden-xs" data-label="Total">
                                    <span class="h3 cartSubtotal priceProduct">
                                        @php
                                            $item_total=$data->price* $data->quantity;
                                        @endphp
                                        <span class="money" data-currency-usd="$630.00">$ {{ $item_total}}</span>
                                    </span>
                                </div>
                            </div>
                               @endforeach
                            
                        
                    </div>
                </div>
                <div class="functionCart flexRow"><div class="col-xs-12 col-md-7">
                    
                        </div><div class="text-right col-xs-12 col-md-5">
                        <div class="cartBoxSubtotal">
                            <span class="cartSubtotalTitle">Subtotal: </span> 
                            <span class="cartSubtotal"><span class="money" data-currency-usd="$669.00">
                                <span >
                                   
                                    $ {{$cart->subtotal}}
                                </span></span></span>
                        </div>
                        <p class="cartShipping">Shipping, taxes, and discounts will be calculated at checkout.</p>
                        <div class="functionCartButton">
                            <a href="/checkout" type="submit" class="btn btnCheckout" >Check Out</a>
                        </div>
                      	
                    </div>
                </div>
            </form>
        
    </div>
</div>
</div>
    </div>
</section>
@else
<aside role="complementary">
  <div class="container-fluid mt-100">
    <div class="row "style="margin:20rem">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body cart">
                    <div class="col-sm-12 empty-cart-cls text-center"> 
                        <img src="https://i.pinimg.com/originals/bc/bd/99/bcbd99c43aea08b85d3c3a6b80a47b56.png" width="400" height="300" class="img-fluid mb-4 mr-3">
                        <h2 style="margin-top:5rem"><strong>Your Cart is Empty</strong></h3>
                        <h4>Before proceed to checkout you must add some products to your shopping cart. You will find a lot of interesting products on our "Shop" page.</h4> 
                        <a href="/products" class="btn btn-primary cart-btn-transform m-3" style="margin-top:5rem" data-abc="true">Start shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</aside>
@endif
</div>
</div>

<link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
<link rel="stylesheet" href="//cdn.shopify.com/app/services/37694406700/assets/120258330668/checkout_stylesheet/v2-ltr-edge-6281406ce40a9853ec2f98b57d76bbfd-5223" media="all" />
<script>
 document.querySelector('#cartTop').style.display='none';
</script>
@endsection
