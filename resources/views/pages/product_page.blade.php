@extends('layouts.Admin')
@section('title')
 {{$product->name}}
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
            <li class="breadcrumb-item active">Products</li>
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
          <li class="nav-item">
            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Reviews</a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
            <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
            
            <div class="container">
              <div class="row">
                      <div class="card-body">
      
                          <form method="POST" action="{{route('productUpdate',['id'=>$product->id])}}" id="form" enctype="multipart/form-data">
                              @csrf
                                <div class="row">
                                  <div class="col-12 col-lg-6"> 
                                    <div class="col-12 image-input image-input-outline">
                                      <img src="{{asset('img/'.unserialize($product->thumbnail)[0])}}" class="product-image rounded" id="img" alt="Product Image">
                                      
                                    <div></div>
                                    </div>
                                    <div class="form-group row mt-3">
                                      <div class="input-group mb-3 col-md-6">
                                          <div class="custom-file">
                                            <label>
                                            <input id="image" type="file"  name="firstThumbnail" class="custom-file-input"  >
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
                                    <div class=" row col-12 product-image-thumbs">
                                      @foreach(unserialize($product->thumbnail) as $key=>$thumbnail)
                                      @if ($key != 0)
                                      <div class="product-image-thumb col-sm-12">
                                         <img src="{{asset('img/'.$thumbnail)}}" alt="Thumbnail">
                                         <a href="" class="remove_image" name_th="{{$key}}">
                                           <span>
                                             <i class="fas fa-times"></i>
                                           </span>
                                          </a>
                                      </div>
                                    @endif
                                      @endforeach
                                    </div>
                                        <div class="dropzone" id="image-upload">
                                          <div class="dz-message btn btn-success col fileinput-button dz-clickable" data-dz-message><span>
                                            <i class="fas fa-plus"></i>
                                            <span>Add thumbnails</span>
                                          </span></div>
                                      </div>
                                  </div>
                                  <div class="col-12 col-sm-6">
                                    <div class="form-group ">
                                      <label for="name">Name</label>
                                      <input type="text" class="form-control" id="name"  name="name" value="{{$product->name ?? '' }}  " required>
                                    </div>
                                    <div class="form-group ">
                                      <label for="excerpt">Excerpt</label>
                                      <textarea style="height:200px"class="form-control" name="excerpt" aria-label="With textarea" id="excerpt" required >{{$product->excerpt ?? '' }}</textarea>
                                    </div>
                  
                                    <div class="form-group">
                                      <label for="price">Price</label>
                                      <input type="number" class="form-control" id="price" name="price" step="any"  value="{{$product->price ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                      <label for="SalePrice">Sale price</label>
                                      <input type="number" class="form-control" id="SalePrice"  name="sale_price" step="any" placeholder="Sale price" value="{{$product->sale_price ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                      <label for="sel1">Category:</label>
                                        <select class="select2bs4 select2-hidden-accessible" name="category[]" multiple="" id="category" data-placeholder="Select categories" style="width: 100%;" data-select2-id="22" tabindex="-1" aria-hidden="true">
                                         @if($categories ?? '')
                                            @foreach($categories as $option)
                                           <option value="{{$option->id}}">{{$option->title}}</option>
                                            @endforeach
                                         @endif
                                        </select><span class="select2 select2-container select2-container--bootstrap4 select2-container--below select2-container--focus" dir="ltr" data-select2-id="24" style="width: 100%;">
                                      
                                    </div>
                                    <div class="form-group">
                                      <label>Tags</label>
                                      <select class="select2bs4 select2-hidden-accessible" id="tag" multiple="" data-placeholder="Select tags" style="width: 100%;" data-select2-id="23" tabindex="-1" aria-hidden="true" name="tags[]">
                                        <option>Best Seller</option>
                                        <option>New</option>
                                        <option>Trending</option>
                                      </select><span class="select2 select2-container select2-container--bootstrap4 select2-container--below select2-container--focus" dir="ltr" data-select2-id="24" style="width: 100%;">
                                      </div>
                                    @if($product->published != 0)
                                    <input type="checkbox" data-toggle="switchbutton" name="published" checked data-onlabel="Public" data-width="100" data-offlabel="Private" data-onstyle="success" data-offstyle="danger">
                                    @else
                                    <input type="checkbox" data-toggle="switchbutton" name="published"  data-onlabel="Public" data-width="100" data-offlabel="Private" data-onstyle="success" data-offstyle="danger">
                                    @endif
                                  </div>
                              </div>
                                <div class=" mt-4">
                                  <nav class="w-100">
                                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                                      <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                                    </div>
                                  </nav>
                                  <div class="tab-content p-3" id="nav-tabContent">
                                    <div class="tab-pane fade active show" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> 
                                      <div class="form-group">
                                        <textarea class="form-control" name="content" id="summernote" >
                                          {{$product->content ?? ''}}
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
          <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12">
              <table id="example2" class="table table-borderless table-striped table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
            <thead>
            <tr role="row">
                <th>User id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Stars</th>
                <th>Action</th></tr>
            </thead>
            <tbody>
                @foreach($reviews as $review)
                <tr class="odd">
                    <td>
                        {{$review->user->id}}
                    </td>
                    <td>{{$review->title}}</td>
                    <td>{{$review->description}}</td>
                    <td class="col-md-6 text-warning">
                      
                      @for($i = 0; $i < $review->stars; $i++)
                          <i class="fas fa-star"></i>
                      @endfor
                    </td>
                    <td>
                      @if($review->published)
                        <a href="" id="unpublish" rev_id="{{$review->id}}" title="Unpublish"  class="badge badge-danger unpublish">
                          <i class="fas fa-arrow-down" ></i>
                        </a>
                        <a href="" id="publish" title="Publish" rev_id="{{$review->id}}" style="display: none" class="badge badge-success publish">
                          <i class="fas fa-arrow-up"></i>
                        </a>
                      @else
                      <a href="" id="unpublish" rev_id="{{$review->id}}" title="Unpublish" style="display: none" class="badge badge-danger unpublish">
                        <i class="fas fa-arrow-down" ></i>
                      </a>
                        <a href="" id="publish" title="Publish" rev_id="{{$review->id}}" class="badge badge-success publish">
                          <i class="fas fa-arrow-up"></i>
                        </a>
                      @endif
                        <a href="" title="Delete" class="text-danger delete" rev_id="{{$review->id}}">
                          <i class="fas fa-trash"></i>
                        </a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
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
<script type="text/javascript">
      $('#summernote').summernote({
        height: 300
      });
    $(document).ready(function() {
      let tags = {!! json_encode(unserialize($product->tags)) !!}
      let categories = {!! json_encode($product_cat) !!}
      $('#tag').select2().val(tags);
      $('#category').select2().val(categories);
      $('#category').trigger('change');
      $('#tag').trigger('change');
      $.fn.select2.defaults.set("theme", "classic");
    });
</script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    Dropzone.autoDiscover = false;
    var form = document.querySelector('#form');
    var imageUpload =  new Dropzone("div#image-upload", { 
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '{{route('productUpdate',["id"=>$product->id])}}', 
        autoProcessQueue:true,
        parallelUploads: 10,
        uploadMultiple: true,
        maxFilesize:20000,
        maxFiles:20,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",

        init: function() {
            let submitButton = document.querySelector("#submit-all")
            submitButton.addEventListener("click", function(e) {
                e.stopPropagation();
                imageUpload.processQueue();
            });
        }
    })
</script>
<script>
      $('.remove_image').on('click', function(e){
        e.preventDefault();
        let name = $(this).attr('name_th');
        let id = {{$product->id}};
        $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          type : 'POST',
          url : '{{route("imageDelete")}}',
          data : {
              id : id,
              name : name,
          },
          success : function(response){
              if(response){
                $(this).parents('.product-image-thumb').remove();
              }}.bind(this)
      })
         });
</script>
<script>
  $(".publish").click(function(e) {
    e.preventDefault();
    let id = $(this).attr('rev_id');
    let el =  $(this)
    $.ajax({
        type: "POST",
        url: '{{route("reviewPublish")}}',
        data: { 
            id: id, // < note use of 'this' here
        },
        success: function(result) {
          el.hide();
          el.parent().children('#unpublish').show();
        },
        error: function(result) {
            alert('error');
        }
    });
});
$(".unpublish").click(function(e) {
    e.preventDefault();
    let id = $(this).attr('rev_id');
    let el =  $(this)
    $.ajax({
        type: "POST",
        url: '{{route("reviewUnpublish")}}',
        data: { 
            id: id, // < note use of 'this' here
        },
        success: function(result) {
          el.hide();
          el.parent().children('#publish').show();
        },
        error: function(result) {
            alert('error');
        }
    });
});
$(".delete").click(function(e) {
    e.preventDefault();
    let id = $(this).attr('rev_id');
    let el =  $(this);
    $.ajax({
        type: "POST",
        url: '{{route("reviewDelete")}}',
        data: { 
            id: id, // < note use of 'this' here
        },
        success: function(result) {
           el.parent().parents('tr').remove()
        },
        error: function(result) {
            alert('error');
        }
    });
});
</script>

@endsection
