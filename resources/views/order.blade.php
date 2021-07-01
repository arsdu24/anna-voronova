@extends('layouts.App')

@section('shopify-section-main')
<div class="container" style="margin-bottom:200px;">
    <div class="row justify-content-center">
        <div class="col-md-8" style="width:100%">
            <div class="card">
                <div class="card-header"  style="margin: 150px 0 100px 0;text-align:center"><strong>{{ isset($url) ? ucwords($url) : ""}} {{ __('Order Details') }}</strong></div>

                <div class="card-body">
                   
                        <form method="POST" action="{{ route('create_order') }}" ">
                        @csrf

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="name" autofocus>

                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
