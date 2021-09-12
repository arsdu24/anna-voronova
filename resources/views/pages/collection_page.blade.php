@extends('layouts.Admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            Categories
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item "><a href="/admin/collections-list">Collections</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


<div class="col-12 col-lg-12">
    <div class="card card-primary card-tabs">
      <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="custom-tabs-one-home-tab" >Collection</a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
            <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
            
            <div class="container">
              <div class="row">
                      <div class="card-body">
      
                          <form method="POST" action="{{route('collectionUpdate',['collection'=>$collection])}}" id="form" enctype="multipart/form-data">
                              @csrf
                                  <div class="row">
                                  <div class="col-12 col-lg-6 form-group mt-3">
                                    <div class="col-12 image-input image-input-outline">
                                      <img src="{{asset('img/'.$collection->thumbnail)}}" class="product-image rounded" id="img" alt="Product Image">
                                      
                                    <div></div>
                                    </div>

                                    <div class="col-12 form-group ">
                                      <div >
                                          <div >
                                            <label class="w-100">
                                            <input id="image" type="file"  name="thumbnail" class="custom-file-input"  >
                                            <div id="actions" >
                                                <div class="btn-group w-100 p-15">
                                                  <span class="btn btn-success col fileinput-button dz-clickable">
                                                    <i class="fas fa-plus"></i>
                                                    <span>Change Image</span>
                                                  </span>
                                                </div>
                                          </div>
                                          </label>
                                          </div>
                                        </div>  
                                      </div>
                                    </div>
                                        <div class="col-12 col-sm-6 form-group mt-3">
                                          <div class="form-group ">
                                            <label for="name">Title</label>
                                            <input type="text" class="form-control" id="name"  name="title" value="{{$collection->title ?? '' }}  " required>
                                          </div>
                                          <div class="form-group ">
                                            <label for="excerpt">Description</label>
                                            <textarea style="height:200px"class="form-control" name="description" aria-label="With textarea" id="excerpt" required >{{$collection->description ?? '' }}</textarea>
                                          </div>
                                        </div>
                                      </div>
                                
                              <button type=”submit” class="btn btn-success btn-block m-30" id="submit-all">Save</button>
                          </form>
                        </div>
                      </div>
                  </div>
        </div>
        
      <!-- /.card -->
    </div>
  </div>
</div>
</div>
@endsection
@section('scripts')
<script>
    $('#image').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]) 
     {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#img').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }
  });
</script>
@endsection