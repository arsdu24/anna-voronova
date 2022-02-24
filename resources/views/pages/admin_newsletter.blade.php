@extends('layouts.Admin')
@section('title','Newsletter')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            Newsletter
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item ">Newsletter</li>
          </ol>
        </div>
      </div>
    </div>
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
          @if(Session::has('errorMessage'))
              <div class="alert alert-warning w-100" role="alert">
                  {!! Session::get('errorMessage') !!}
              </div>
          @endif
        <div class="tab-content" id="custom-tabs-one-tabContent">
            <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">

            <div class="container">
              <div class="row">
                      <div class="card-body">

                          <form method="POST" action="{{route('NewsletterPost')}}" id="form" enctype="multipart/form-data">
                              @csrf
                                <div class="row">
                                  <div class="col-12 col-lg-6">
                                    <div class="col-12 image-input image-input-outline">
                                      <img src="{{asset('img/'.$newsletter['thumbnail'])}}" class="product-image rounded" id="img" alt="Thumbnail">
                                    </div>
                                    <div class="form-group row mt-3">
                                      <div class="input-group mb-3 col-md-6">
                                          <div class="custom-file">
                                            <label>
                                            <input id="image" type="file"  name="thumbnail" class="custom-file-input"  >
                                            <div class="card-body">
                                            <div id="actions" class="row">
                                              <div class="col-lg-12">
                                                <div class="btn-group w-100 p-15">
                                                  <span class="btn btn-success col fileinput-button dz-clickable">
                                                    <i class="fas fa-plus"></i>
                                                    <span>Change thumbnail</span>
                                                  </span>
                                                </div>
                                              </div>
                                          </div>
                                        </div>
                                          </label>
                                          </div>

                                          </div>

                                        </div>
                                  </div>
                                  <div class="col-12 col-sm-6">
                                    <div class="form-group ">
                                      <label for="title">Title</label>
                                      <textarea type="text" class="form-control" id="title"  name="title" required maxlength="75">{{$newsletter['title'] ?? '' }}</textarea>
                                    </div>
                                    <div class="form-group ">
                                      <label for="subtitle">Subtitle</label>
                                      <textarea type="text" class="form-control" id="subtitle"  name="subtitle" required maxlength="75">{{$newsletter['subtitle']  ?? '' }}</textarea>
                                    </div>
                                    <div class="form-group ">
                                      <label for="placeholder">Input placeholder</label>
                                      <textarea type="text" class="form-control" id="placeholder"  name="placeholder" required maxlength="75">{{$newsletter['placeholder']  ?? '' }}</textarea>
                                    </div>
                                    <div class="form-group ">
                                      <label for="bText">Button text</label>
                                      <textarea type="text" class="form-control" id="bText"  name="buttonText" required maxlength="75">{{$newsletter['buttonText']  ?? '' }}</textarea>
                                    </div>
                                    <div class="form-group ">
                                      <label for="footer">Footer</label>
                                      <textarea type="text" class="form-control" id="footer"  name="footer" maxlength="75">{{$newsletter['footer']  ?? '' }}</textarea>
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
