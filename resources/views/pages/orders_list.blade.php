@extends('layouts.Admin')
@section('title', 'Orders')
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
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Orders</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>




<div class="card">
    <div class="card-header">
      <h3 class="card-title">Orders</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12">
      @if(count($orders)!=0)
        <table id="example2" class="table table-borderless table-striped table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
        <thead>
        <tr role="row">
            <th>Order No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            @if($order->user)
            <tr class="odd">
                <td class="dtr-control sorting_1" tabindex="0">
                  {{$order->serial_number}}
                </td>
                <td>{{$order->user->name}}</td>
                <td>{{$order->user->email}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->subtotal}}</td>
                <td>{{$order->status}}</td>
                <td>
                    <a href="{{route('orderPage',[$order])}}" title="View" class="text-primary" >
                       <i class="far fa-eye"></i>
                      </a>
                    <a href="{{route('orderDelete',['id'=>$order->id])}}" title="Delete" class="text-danger" onclick="event.preventDefault();
                    document.getElementById('{{$order->id}}').submit();">
                      <i class="fas fa-trash"></i>
                    </a>
                    <form id="{{$order->id}}" action="{{route('orderDelete',['id'=>$order->id])}}" method="POST" style="display: none;">
                      @csrf</form>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
      </table>
    @else
    <div class="alert alert-info" role="alert">
      You don't have Orders yet!
    </div>
    @endif
    </div></div><div class="row">
      <div class="col-sm-12 col-md-5">
        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
          Showing {{$orders->firstItem()  ?? '0'}} to {{$orders->count()}} of {{$orders->total()}} entries
        </div>
      </div>
     
        <div class="col-sm-12 col-md-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            <ul class="pagination">
              {!!$orders->links() !!}
            </ul></div></div></div></div>
    </div>
    <!-- /.card-body -->
  </div>
</div>
@endsection
