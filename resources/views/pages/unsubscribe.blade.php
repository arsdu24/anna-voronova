@extends('layouts.App')
@section('title', "We`re sad")
@section('shopify-section-main')
<div class="container-fluid" style="margin-top:20rem">
    <div class="row" style="margin-bottom:20rem">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body cart">
                    <div class="col-sm-12 empty-cart-cls text-center"> 
                        <h2 style="margin-top:5rem;color:#ba933e"><strong>We're Sad To See You Go! </strong></h3>
                        <h4>You have successfully unsubscribed, you will no longer receive this type of email.</h4> 
                        <h6>If you've unsubscribed by mistake, please <a href="/#newsletter-subscribe" style="color:#9c7622">subscribe back</a></h6>
                        <a href="/" class="btn btn-primary cart-btn-transform m-3" style="margin-top:5rem;" data-abc="true">Go Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection