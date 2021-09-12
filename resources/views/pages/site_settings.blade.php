@extends('layouts.Admin')
@section('title')
 {{$site->company_name}}
@endsection
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
           Site
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Site Settings</li>
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
            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Details</a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
            <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
            
            <div class="container">
              <div class="row">
                      <div class="card-body">
      
                          <form method="POST" action="{{route('settingsUpdate')}}" id="form" enctype="multipart/form-data">
                              @csrf
                                <div class="row">
                                  <div class="col-12 col-lg-6"> 
                                    <div class="col-12 image-input image-input-outline">
                                      <img src="{{asset('img/'.$site->short_logo)}}" class="product-image rounded" id="image" alt="Logo">
                                    </div>
                                    <div class="form-group row mt-3">
                                      <div class="input-group mb-3 col-md-6">
                                          <div class="custom-file">
                                            <label>
                                            <input id="img" type="file"  name="logo1" class="custom-file-input"  >
                                            <div class="card-body">
                                            <div id="actions" class="row">
                                              <div class="col-lg-12">
                                                <div class="btn-group w-100 p-15">
                                                  <span class="btn btn-success col fileinput-button dz-clickable">
                                                    <i class="fas fa-plus"></i>
                                                    <span>Change Short Logo</span>
                                                  </span>
                                                </div>
                                              </div>
                                          </div>
                                          </label>
                                          </div>
                                          </div>
                                          
                                        </div>
                                  </div>
                                        <div class="col-12 image-input image-input-outline">
                                          <img src="{{asset('img/'.$site->full_logo)}}" class="product-image rounded" id="image1" alt="Logo">
                                        </div>
                                        <div class="form-group row mt-3">
                                          <div class="input-group mb-3 col-md-6">
                                              <div class="custom-file">
                                                <label>
                                                <input id="img1" type="file"  name="logo2" class="custom-file-input"  >
                                                <div class="card-body">
                                                <div id="actions" class="row">
                                                  <div class="col-lg-12">
                                                    <div class="btn-group w-100 p-15">
                                                      <span class="btn btn-success col fileinput-button dz-clickable">
                                                        <i class="fas fa-plus"></i>
                                                        <span>Change Full Logo</span>
                                                      </span>
                                                    </div>
                                                  </div>
                                              </div>
                                              </label>
                                              </div>
                                              </div>
                                              
                                        </div>
                                  </div>
                                </div>
                                  
                                  <div class="col-12 col-sm-6">
                                    <div class="form-group ">
                                      <label for="name">Name</label>
                                      <input type="text" class="form-control" id="name"  name="company_name" placeholder="Enter name" value="{{$site->company_name ?? '' }}" required/>
                                    </div>
                                    <div class="form-group ">
                                      <label for="name">Address</label>
                                      <input type="text" class="form-control" id="name"  name="address" placeholder="Enter address" value="{{$site->address ?? '' }}"/>
                                    </div>
                                    <div class="form-group ">
                                      <label for="excerpt">Phone</label>
                                      <input class="form-control" name="phone" type ="text"aria-label="With textarea" placeholder="Enter phone" id="excerpt" value="{{$site->phone ?? ''}}"/>
                                    </div>
                                    <div class="form-group ">
                                      <label for="excerpt">Email</label>
                                      <input class="form-control" name="email" type ="email" aria-label="With textarea"  placeholder="Enter email" id="excerpt"  value="{{$site->email ?? ''}}"/>
                                    </div>
                                    <div class="form-group ">
                                      <label for="excerpt">Facebook</label>
                                      <input class="form-control" name="facebook" type ="text"aria-label="With textarea" placeholder="Enter acoount link " id="excerpt" value="{{$site->facebook ?? ''}}"/>
                                    </div>
                                    <div class="form-group ">
                                      <label for="excerpt">Instagram</label>
                                      <input class="form-control" name="instagram" type ="text"aria-label="With textarea" id="excerpt" placeholder="Enter acoount link " value="{{$site->instagram ?? ''}}"/>
                                    </div>
                                    <div class="form-group ">                       
                                      <label for="excerpt">Twitter</label>
                                      <input class="form-control" name="twitter" type ="text"aria-label="With textarea" id="excerpt" placeholder="Enter acoount link " value="{{$site->twitter ?? ''}}"/>
                                    </div>
                                    <div class="form-group ">
                                      <label for="excerpt">Youtube</label>
                                      <input class="form-control" name="youtube" type ="text"aria-label="With textarea" id="excerpt" placeholder="Enter acoount link " value="{{$site->youtube ?? ''}}"/>
                                    </div>
                                  </div>
                                </div>
                               
                              <button type=”submit” class="btn btn-success btn-block" id="submit-all">Save</button>
                          </form>
                        </div>
                      </div>
                  </div>
        </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@section('scripts')
<script>
  $('#img').change(function(){
  var input = this;
  var url = $(this).val();
  var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
  if (input.files && input.files[0]) 
   {
      var reader = new FileReader();

      reader.onload = function (e) {
         $('#image').attr('src', e.target.result);
      }
     reader.readAsDataURL(input.files[0]);
  }
});
$('#img1').change(function(){
  var input = this;
  var url = $(this).val();
  var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
  if (input.files && input.files[0]) 
   {
      var reader = new FileReader();

      reader.onload = function (e) {
         $('#image1').attr('src', e.target.result);
      }
     reader.readAsDataURL(input.files[0]);
  }
});
</script>
@endsection