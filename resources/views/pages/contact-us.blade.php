@extends('layouts.app')
@section('title','Contact Us')
@section('shopify-section-main')
<main class="mainContent" role="main">
<div class="pageContactInfo mb30">
<div class="container">
    <div class="rowFlex rowFlexMargin">
        <div class="col-xs-12 col-md-5 mb30">
            <div class="pageContactLeft">
                <h1 class="velaContactTitle">Contact Us</h1>
                <div class="rowFlex rowFlexMargin"><div class="col-xs-12"><div class="contactDetail">
                                        <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain.no annoying consequences.<br><br></p>
<p></p>
<p><strong>{{$site->company_name}}</strong> </p>
<p><strong>Phone:</strong>&nbsp; {{$site->phone}}</p>
<p><strong>Email:&nbsp;</strong> {{$site->email}}</p>
<p></p>
                                    </div></div></div>
            </div>
        </div>
        <div class="col-xs-12 col-md-7 mb20">
            <div class="pageContactRight">
                <div class="formContactUs">
                    <form method="post" action="{{route('sendEmail')}}" id="contact_form" accept-charset="UTF-8" class="contact-form" >
                        @csrf
                        <div class="formContent">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        
                                        <label for="ContactFormName" class="hidden">Name <sup>*</sup></label>
                                        <input type="text" id="ContactFormName" class="form-control" placeholder="Name" name="name" autocapitalize="words" value="">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="ContactFormEmail" class="hidden">Email <sup>*</sup></label>
                                        <input type="email" id="ContactFormEmail" class="form-control" placeholder="Email" name="from" autocorrect="off" autocomplete="email" autocapitalize="off" value="">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="ContactFormMessage" class="hidden">Message<sup>*</sup></label>
                                        <textarea rows="6" id="ContactFormMessage" class="form-control" placeholder="Message" name="message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-button">
                                <input type="submit" class="btn btnContact" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div><script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqstP8RWMwkuJYsaWQ29dZFim3506MteA&amp;callback=initMap"></script></div>
</main>
@endsection