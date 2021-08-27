@extends('layouts.Admin')
@section('title')
 {{$article->name}}
@endsection
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            Products
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item "><a href="/admin/blogs">Articles</a></li>
            <li class="breadcrumb-item active">{{$article->title}}</li>
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
      
                          <form method="POST" action="{{route('articleUpdate',['article'=>$article->id])}}" id="form" enctype="multipart/form-data">
                              @csrf
                                <div class="row">
                                  <div class="col-12 col-lg-6"> 
                                    <div class="col-12 image-input image-input-outline">
                                      <img src="{{asset('img/'.$article->thumbnail)}}" class="product-image rounded" id="img" alt="Product Image">
                                      
                                    <div></div>
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
                                                    <span>Change Image</span>
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
                                      <label for="name">Title</label>
                                      <textarea type="text" class="form-control" id="name"  name="title" required>{{$article->title ?? '' }}</textarea>
                                    </div>
                                    <div class="form-group ">
                                      <label for="name">Author</label>
                                      <input type="text" class="form-control" id="name"  name="author" required value="{{$article->author ?? '' }}"/>
                                    </div>
                                    <div class="form-group ">
                                      <label for="excerpt">Excerpt</label>
                                      <textarea style="height:200px"class="form-control" name="excerpt" aria-label="With textarea" id="excerpt" required >{{$article->excerpt ?? '' }}</textarea>
                                    </div>
                                    <div class="form-group">
                                      <label for="sel1">Category:</label>
                                        <select class="select2bs4 select2-hidden-accessible" name="category[]" multiple="" id="category" data-placeholder="Select categories" style="width: 100%;" data-select2-id="22" tabindex="-1" aria-hidden="true">
                                         @if($categories ?? '')
                                            @foreach($categories as $option)
                                           <option value="{{$option->id}}">{{$option->name}}</option>
                                            @endforeach
                                         @endif
                                        </select><span class="select2 select2-container select2-container--bootstrap4 select2-container--below select2-container--focus" dir="ltr" data-select2-id="24" style="width: 100%;">
                                      
                                    </div>
                                    <div class="form-group">
                                      <label>Tags</label>
                                      <select class="select2bs4 select2-hidden-accessible" id="tag" multiple="" data-placeholder="Select tags" style="width: 100%;" data-select2-id="23" tabindex="-1" aria-hidden="true" name="tags[]">
                                        @foreach($blog_tags as $tag)
                                          <option value="{{$tag->id}}">{{$tag->name}}</option>
                                        @endforeach

                                      </select><span class="select2 select2-container select2-container--bootstrap4 select2-container--below select2-container--focus" dir="ltr" data-select2-id="24" style="width: 100%;">
                                      </div>
                                    @if($article->published != 0)
                                    <input type="checkbox" data-toggle="switchbutton" name="published" checked data-onlabel="Public" data-width="100" data-offlabel="Private" data-onstyle="success" data-offstyle="danger">
                                    @else
                                    <input type="checkbox" data-toggle="switchbutton" name="published"  data-onlabel="Public" data-width="100" data-offlabel="Private" data-onstyle="success" data-offstyle="danger">
                                    @endif
                                  </div>
                              </div>
                                <div class=" mt-4">
                                  <nav class="w-100">
                                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                                      <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Content</a>
                                    </div>
                                  </nav>
                                  <div class="tab-content p-3" id="nav-tabContent">
                                    <div class="tab-pane fade active show" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> 
                                      <div class="form-group">
                                        <textarea class="form-control" name="content" id="summernote" >
                                          {{$article->content ?? ''}}
                                        </textarea>
                                    </div>
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
<script type="text/javascript">
    $('#summernote').summernote({
      height: 300
    });
  $(document).ready(function() {
    let tags = {!! json_encode($tags) !!}

    let category = {!! json_encode($cat) !!}
    $('#tag').select2().val(tags);
    $('#category').select2().val(category);
    $('#category').trigger('change');
    $('#tag').trigger('change');
    $.fn.select2.defaults.set("theme", "classic");
  });
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
