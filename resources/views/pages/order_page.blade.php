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
  @switch($order->status)
    @case('Canceled')
      <div class="col-12 btn btn-danger no-print"></div>
    @break
    @case('Finished')
     <div class="col-12 btn btn-success no-print"></div>
    @break
@endswitch
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
                                <h5 class="text-right">Date: {{ $order->created_at->format('d-m-y, H:i') }}</h5>
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
                                <b>Order Status:</b>  {{$order->status}} <br>
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
                                
                <div class="row d-flex justify-content-end">
                    <!-- accepted payments column -->
                    
                    <!-- /.col -->
                    <div class="col-6">
                      <p class="lead">Amount Due {{ $order->created_at->format('d/m/y') }}</p>
    
                      <div class="table-responsive">
                        <table class="table">
                          <tbody>
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
                    <div class="col-12 d-flex ">
                      <div class="col-6">
                        <button class="btn btn-default" onclick="window.print();return false;"><i class="fas fa-print"></i> Print</button>
                      </div>
                     <div class="col-6 d-flex justify-content-end">
                       @switch($order->status)
                            @case('Pending')
                              <button class="btn btn-danger m-1 status" value="Canceled"><i class="fas fa-times"></i> Cancel</button>
                              <button class="btn btn-primary m-1 status" value="Active">Confirm</button>
                             @break
                            @case('Active')
                              <button class="btn btn-info m-1 status" value="Ready"><i class="fas fa-check"></i> Ready</button>
                              <button class="btn btn-success m-1 status" value="Finished"><i class="fas fa-check-double"></i> Done</button>
                            @break
                            @case('Ready')
                              <button class="btn btn-success m-1 status" value="Finished"><i class="fas fa-check-double"></i> Done</button>
                            @break
                        @endswitch
                     </div>
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
   
    $('.status').click(function() {
        let status=$(this).val();
        $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: '{{route("orderStatusUpdate")}}',
        data: { 
            id: {!!json_encode($order->id)!!}, 
            status: status,
            user: {!!json_encode($order->contact)!!},
        },
        success: function(result) {
          location.reload();
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
