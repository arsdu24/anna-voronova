@extends('layouts.App')
@section('title', 'Account')
    @section('shopify-section-main')
       <main class="mainContent" role="main">
            <section id="pageContent">
    <div class="container">
        <div id="velaAccount" class="velaAccountContainer">
            <div class="velaPageAccount">
                <h1 class="velaAccountTitle">
                    <span>My Account</span>
                </h1>
                <div class="pageAccountContent">
                    <div class="rowFlex rowFlexMargin">
                        <div class="col-xs-12 col-sm-6">
                            <div class="boxAccount accountInfo">
                                <h4 class="accountHeading">Account Details</h4>
                                <div class="accountContent">
                                    @if($user->role==2)
                                        <h5 class="customerName">{{$user->name}}</h5>
                                        <div class="customerEmail">{{$user->email}}</div>
                                        <div class="formAccountRecover">
                                            <a class="btnRecoverPassword" href="{{route('password.request')}}">Reset your password</a>
                                        </div>
                                    @else
                                        <h5 class="customerName">You are not logged in, to see the account details please log in.</h5>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="boxAccount accountAddress">
                                <h4 class="accountHeading">Your Addresses</h4>
                                <div class="accountContent">
                                    <h5 class="customerName">{{$user->name}}</h5><div class="noAccountInfo">
                                            <p>There are no addresses in your address book</p>
                                            <div class="accountButton">
                                                <a href="/account/addresses">Add address</a>
                                            </div>
                                        </div></div>
                            </div>
                        </div>
                    </div>
                    <div class="accountOrderBox">
                        <h4 class="accountHeading">Order History</h4>
                        <div class="orderBoxContent">
                                      @foreach($orders as $order)
                                                        @php
                                                            $address = unserialize($order->address);
                                                        @endphp
                                                <div class="accountOrderBox">
                                                    <div class="orderBoxContent" style="display:flex;flex-direction:row; justify-content: space-between; flex-wrap: wrap;">
                                                     <div style="display:flex;flex-direction:row; align-items:flex-stat; ">
                                                            <div><h5>Address :</h5></div>
                                                            <div style="display:flex;flex-direction:column; align-items:flex-stat">
                                                                <div style="margin: 11.5px;">
                                                                <div><strong>{{ $address['first_name'] }} {{ $address['last_name']}}</strong></div>
                                                                <div>{{ $order->contact }}</div>
                                                                <div>{{ $address['address2']}} |{{ $address['city']}},</div>
                                                                <div> {{ $address['country']}} </div>
                                                                <div>{{ $address['zip']}}{{ $order->phone_number }}</div>
                                                            </div></div></div>
                                                     <div class="d-flex flex-row " ><div><h5>Amount :</h5></div><div style="padding:10px 0 0 10px">{{count($order->items)}} </div></div>
                                                     <div  class="d-flex flex-row"><div><h5>Date :</h5></div><div style="padding:10px 0 0 10px">{{$order->created_at->format('d-m-y, H:i')}} </div></div>
                                                     <div  class="d-flex flex-row"><div><h5>Status :</h5></div><div style="padding:10px 0 0 10px">{{$order->status}}</div></div>
                                                     <div  class="d-flex flex-row"><div><h5>Number :</h5></div><div style="padding:10px 0 0 10px">{{$order->serial_number}}</div></div>
                                                     </div>
                                                     <div><h5>Products :</h5></div>
                                                     <div>
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                  <th scope="col">Product</th>
                                                                  <th scope="col">Name</th>
                                                                  <th scope="col">Price</th>
                                                                  <th scope="col">Quantity</th>
                                                                  <th scope="col">Subtotal</th>
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                
                                                         @foreach($order->items as $item)
                                                            <tr>
                                                                <td>
                                                                    <a href="/products/{{$item->product->id}}">
                                                                    <div class="product-card__image" style="padding-top:25%;">
                                                                        <img class="product-card__img lazyload"
                                                                            scr="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                                            data-src="{{asset('img/'.unserialize($item->product->thumbnail)[0])}}"
                                                                            data-widths="[1,360,540,720,900,1080,1296,1512,1728,1944,2160,2376,2592,2808]"
                                                                            data-aspectratio="0.8048289738430584"
                                                                            data-ratio="0.8048289738430584"
                                                                            data-sizes="auto"
                                                                            alt=""
                                                                        />
                                                                    </div>
                                                                    </a>
                                                                </td>
                                                                <td> <a href="/products/{{$item->product->id}}">{{$item->product->name}}</a></td>
                                                                <td>{{$item->price}}</td>
                                                                <td>{{$item->quantity}}</td>
                                                                <td>{{$item->price * $item->quantity}} $</td>
                                                                </a>    
                                                            </tr>
                                                         @endforeach
                                                        </table>
                                                     </div>
                                                     <div style="display:flex;flex-direction:row; justify-content:flex-end"><div><h5>Total :</h5></div><div style="padding:10px 0 0 10px">{{$order->subtotal}} $</div></div>
                                                </div>
                                    @endforeach
                                    @if($orders ==null){
                                    <div class="noAccountInfo">
                                        <p>You haven&#39;t placed any orders yet.</p>
                                    </div>
                                    }
                                    @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        </main>
    @endsection