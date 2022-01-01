@extends('layouts.Admin')
    
    @section('title', 'Dashboard')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

<div class="row mt-4">
    <div class="col-lg-3 col-6">
      <!-- small card -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{$data['pending']}}</h3>
          <p>Pending Orders </p>
        </div>
        <div class="icon">
          <i class="fas fa-shopping-cart"></i>
        </div>
        <a href="{{route('ordersList')}}" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small card -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$data['active']}}</h3>
          <p>Active Orders</p>
        </div>
        <div class="icon">
            <i class="fas fa-certificate"></i>
        </div>
        <a href="{{route('ordersList')}}" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small card -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{$data['ready']}}</h3>

          <p>Ready Orders</p>
        </div>
        <div class="icon">
            <i class="fas fa-check"></i>
        </div>
        <a href="{{route('ordersList')}}" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small card -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{$data['finished']}}</h3>

          <p>Finished Orders</p>
        </div>
        <div class="icon">
          <i class="fas fa-check-double"></i>
        </div>
        <a href="{{route('ordersList')}}" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
      </div>
    </div>
    <!-- ./col -->    
  </div>
  <div class="row mt-4 d-flex">
  <div class="col-lg-6 col-12">
      <div class=" card ml-2">
    <div class="card-header">
      <h3 class="card-title">Best-seller Products</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <ul class="products-list product-list-in-card pl-2 pr-2">
        @foreach($bestseller as $product)
            <li class="item">
                <div class="product-img">
                <img src="{{asset('img/'.unserialize($product->thumbnail)[0])}}" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                <a href="{{route('productPage',$product->id)}}" class="product-title">{{$product->name}}
                    
                        @if($product->sale_price) 
                        <span class="badge badge-success float-right">
                                {{$product->sale_price}} $
                        </span>
                        @else 
                        <span class="badge badge-info float-right">
                            {{$product->price}} $
                        </span>
                        @endif    
                </a>
                <span class="product-description">
                    {{$product->excerpt}}
                </span>
                </div>
            </li>
          @endforeach
      </ul>
    </div>
    <!-- /.card-body -->
    <div class="card-footer text-center">
        <a href="{{route('productList')}}" class="uppercase">View All Products</a>
    </div>
    <!-- /.card-footer -->
  </div>
  </div>
  <div class=" col-lg-6 col-12 ">
    <div class="card mr-2">
    <div class="card-header">
      <h3 class="card-title">Treding products</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <ul class="products-list product-list-in-card pl-2 pr-2">
          @foreach($treding as $product)
            <li class="item">
                <div class="product-img">
                <img src="{{asset('img/'.unserialize($product->thumbnail)[0])}}" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                <a href="{{route('productPage',$product->id)}}" class="product-title">{{$product->name}}
                    
                        @if($product->sale_price) 
                        <span class="badge badge-success float-right">
                                {{$product->sale_price}} $
                        </span>
                        @else 
                        <span class="badge badge-info float-right">
                            {{$product->price}} $
                        </span>
                        @endif    
                </a>
                <span class="product-description">
                    {{$product->excerpt}}
                </span>
                </div>
            </li>
          @endforeach
      </ul>
    </div>
    <!-- /.card-body -->
    <div class="card-footer text-center">
      <a href="{{route('productList')}}" class="uppercase">View All Products</a>
    </div>
    <!-- /.card-footer -->
  </div>
  </div>
  </div>
@endsection