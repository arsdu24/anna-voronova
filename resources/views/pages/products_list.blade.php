@extends('layouts.Admin')
@section('title', 'Products')
@section('main-content')
  <!-- Main-body start -->
  <div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Product List</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Products</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Product list card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Product List</h5>
                                <button type="button" onclick="addProduct()" class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger" id="addProduct" data-modal="modal-13"> <i class="icofont icofont-plus m-r-5"></i> Add Product
        </button>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <div class="table-content">
                                        <div class="project-table">
                                            <table id="e-product-list" class="table table-striped dt-responsive nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Product Name</th>
                                                        <th>Description</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($products as $product)
                                                    <tr>
                                                        <td class="pro-list-img">
                                                            <img src="{{asset('img/'.$product->image)}}" class="img-fluid" alt="tbl">
                                                        </td>
                                                        <td class="pro-name">
                                                            <h6>{{$product->name}}</h6>
                                                        </td>
                                                        <td>
                                                            <h6 >{{$product->description}}</h6>
                                                        </td>
                                                        <td class="action-icon">
                                                            <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                            <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product list card end -->
                    </div>
                </div>
               
                <div class="md-modal addcontact" id="modal-13">
                    <div class="md-content">
                        <h3 class="f-26">Add Product</h3>
                        <div>
                            <form method="POST" action="{{ route('createPdroduct') }}" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control " name="name" required autocomplete="name">
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
        
                                    <div class="col-md-6">
                                        <input id="description" type="text" class="form-control" name="description"  required autocomplete="description">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>
        
                                    <div class="col-md-6">
                                        <input id="image" type="file" class="form-control " name="image" required >
                                    </div>
                                </div>
        

                                <div class=" row ">
                                    <div class="col-md-6">
                                        <button type="button" onclick="closeForm()" class="btn btn-primary">
                                            {{ __('Close') }}
                                        </button>
                                    </div>
                                    <div class="col-md-6 ">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Save') }}
                                        </button>
                                    </div>
                                    
                                </div>
                                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="md-overlay"></div>
                <!-- Add Contact Ends Model end-->
            </div>
            <!-- Page body end -->
        </div>
    </div>
    <!-- Main-body end -->
@endsection

@section('scripts')
<script>
    let element = document.querySelector('#modal-13');
    function addProduct(){
        element.className="md-modal addcontact md-show";
    };
    function closeForm(){
        document.querySelector('#image').value='';
        document.querySelector('#description').value='';
        document.querySelector('#name').value='';
        element.className="md-modal addcontact";

    }
 </script>
@endsection