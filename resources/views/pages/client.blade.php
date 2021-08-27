@extends('layouts.App')
    
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
                                    <h5 class="customerName">{{$user->name}}</h5>
                                    <div class="customerEmail">{{$user->email}}</div>
                                    <div class="formAccountRecover">
                                        <form method="post" action="/account/recover" accept-charset="UTF-8"><input type="hidden" name="form_type" value="recover_customer_password" /><input type="hidden" name="utf8" value="✓" />
                                            <div class="formContent"><input type="hidden" name="email" value="e2e323r32r@gmail.com">
                                                <input type="submit" class="btnRecoverPassword" value="Reset your password">
                                            </div>
                                        </form>
                                    </div>
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
                                                    <div class="orderBoxContent">
                                                     <div style="display:flex;flex-direction:row; align-items:flex-start"><div><h5>Address :</h5></div><div style="margin: 11.5px;"><strong>{{ $address['first_name'] }} {{ $address['last_name']}}</strong>|{{ $address['address2']}} |{{ $address['city']}}, {{ $address['country']}} |{{ $address['zip']}}{{ $order->phone_number }}</div></div>
                                                     <div style="display:flex;flex-direction:row;"><div><h5>Status :</h5></div><div style="padding:10px 0 0 10px">{{$order->status}}</div></div>
                                                     </div>
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