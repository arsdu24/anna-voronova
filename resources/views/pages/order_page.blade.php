@extends('layouts.Admin')
@section('title')
Order {!!$order->id!!}
@endsection
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            Orders
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active"><a href="/admin/orders-list">Orders</a></li>
            <li class="breadcrumb-item active">Order {{$order->serial_number}}</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Order {{$order->serial_number}}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    @php
                        $address=unserialize($order->address);
                    @endphp
                    <section class="invoice">
                        <div class="row mb-4">
                            <div class="col-6">
                                <h2 class="page-header"><i class="fa fa-globe"></i> {{ $order->order_number }}</h2>
                            </div>
                            <div class="col-6">
                                <h5 class="text-right">Date: {{ $order->created_at->toFormattedDateString() }}</h5>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-4">
                                @if( $order->user)Placed By<address><strong>{{ $order->user->name }}</strong><br>Email: {{ $order->user->email }}</address>@endif
                                <div class="col-4">Contact information
                                     <strong>{{$order->contact}}</strong>
                                </div>
                            </div>
                            <div class="col-4">Ship To
                                <address><strong>{{ $address['first_name'] }} {{ $address['last_name']}}</strong><br>{{ $address['address1']}}<br>{{ $address['address2']}} {{ $address['city']}}, {{ $address['country']}}<br> {{ $address['zip']}}<br>{{ $order->phone_number }}<br></address>
                            </div>
                            <div class="col-4">
                                <b>Order ID:</b> {{ $order->serial_number }}<br>
                                <b>Amount:</b> {{ config('settings.currency_symbol') }}{{ round($order->subtotal, 2) }}<br>
                                <b>Payment Method:</b> {{ $order->payment_method }}<br>
                                <b>Payment Status:</b> {{ $order->payment_status == 1 ? 'Completed' : 'Not Completed' }}<br>
                                <b>Order Status:</b> <span id="order-status">
                              
                                    {{ $order->status }}
                                </span>
                                    <select class="select2bs4 select2-hidden-accessible" order-id="{{$order->id}}" name="status" id="status" data-placeholder="Modify status" style="width: 40%;" type="button" data-select2-id="22" tabindex="-1" aria-hidden="true">
                                          <option value="Active">Active</option>
                                          <option value="Confirmed">Confirmed</option>
                                          <option value="Canceled">Canceled</option>
                                          <option value="Pedding">Pending</option>
                                          <option value="Completed">Completed</option>
                                          <option value="Refused">Refused</option>
                                     </select><span class="select2 select2-container select2-container--bootstrap4 select2-container--below select2-container--focus" dir="ltr" data-select2-id="24" style="width: 100%;">
                               <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Product</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order->items as $item)
                                            <tr>
                                                <td>{{ $item->product->id }}</td>
                                                <td>{{ $item->product->name }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>{{ config('settings.currency_symbol') }}{{ round($item->price * $item->quantity, 2) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                <div class="row">
                    <!-- accepted payments column -->
                    <div class="col-6">
                      <p class="lead">Payment Methods:</p>
                      <img src="../../dist/img/credit/visa.png" alt="Visa">
                      <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                      <img src="../../dist/img/credit/american-express.png" alt="American Express">
                      <img src="../../dist/img/credit/paypal2.png" alt="Paypal">
    
                      <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                        plugg
                        dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                      </p>
                    </div>
                    <!-- /.col -->
                    <div class="col-6">
                      <p class="lead">Amount Due 2/22/2014</p>
    
                      <div class="table-responsive">
                        <table class="table">
                          <tbody><tr>
                            <th style="width:50%">Subtotal:</th>
                            <td>$ {{ config('settings.currency_symbol') }}{{ round($order->subtotal, 2) }}</td>
                          </tr>
                          <tr>
                            <th>Tax (9.3%)</th>
                            <td>$0</td>
                          </tr>
                          <tr>
                            <th>Shipping:</th>
                            <td>$0</td>
                          </tr>
                          <tr>
                            <th>Total:</th>
                            <td> $ {{ config('settings.currency_symbol') }}{{ round($order->subtotal, 2) }}</td>
                          </tr>
                        </tbody></table>
                      </div>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
    
                  <!-- this row will not appear when printing -->
                  <div class="row no-print">
                    <div class="col-12">
                      <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                      <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                        Payment
                      </button>
                      <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                        <i class="fas fa-download"></i> Generate PDF
                      </button>
                    </div>
                  </div>
                
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>


  
    <!-- /.card-body -->
  </div>
  
@section('scripts')
<script>
    $(document).ready(function() {
    let val={!! json_encode($order->status) !!}
    $('#status').select2().val(val);
    $('#status').trigger('change');
    $.fn.select2.defaults.set("theme", "classic");
   
    $('#status').change(function() {
        let status=$(this).find(":selected").val();
        let id=$(this).attr('order-id');
        $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: '{{route("orderStatusUpdate")}}',
        data: { 
            id: id, 
            status: status,// < note use of 'this' here
        },
        success: function(result) {
            refreshedPage = $(result);
            newstatus=refreshedPage.find('#order-status').html();
            console.log(status);
            $('#order-status').html(newstatus);
        },
        error: function(result) {
            alert('error');
        }
    });
    });
  });
</script>
@endsection
@endsection
