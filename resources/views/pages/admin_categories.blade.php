@extends('layouts.Admin')
@section('title', 'Product Categories')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            Product Categories
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Product  Categories</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <div class="card"><div class="card-header">
    <h3 class="card-title"> Categories</h3>
    <div class="card-tools">
      <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">
          <i class="fas fa-plus"></i>
          Add Category
      </button>
    </div>
  </div>
  <div class="card-body">
    @if(count($categories)!=0)
    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12">
   
      <table id="example2" class="table table-borderless table-striped table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
      <thead>
      <tr role="row">
          <th>Id</th>
          <th>Title</th>
          <th>Excerpt</th>
          <th>Action</th></tr>
      </thead>
      <tbody>
          @foreach($categories as $tag)
          <tr class="odd">
              <td class="dtr-control sorting_1" tabindex="0">
                  {{$tag->id}}
              </td>
              <td> {{$tag->name}}</td>
              <td> {{$tag->excerpt}}</td>
              <td class="project-actions">
                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="{{'#d'.$tag->id}}">
                  <i class="fas fa-pencil-alt">
                  </i>
                  Edit
              </button>
                <a href="" title="Delete" onclick="event.preventDefault();
                    document.getElementById('{{$tag->id}}').submit();" class="btn btn-danger btn-sm" href="#">
                    <i class="fas fa-trash">
                    </i>
                    Delete
                </a>
                <form id="{{$tag->id}}" action="{{route('deleteCategory',['category'=>$tag])}}" method="POST" style="display: none;">
                    @csrf</form>
            </td>
            </tr>
            <div id="{{'d'.$tag->id}}" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg" style="width:100%">
            
                <!-- Modal content-->
                <div class="modal-content" >
                  <div class="modal-header">
                    <h4 class="modal-title">Edit Category</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                      <form method="POST" action="{{route('updateCategory',['category'=>$tag->id])}}" enctype="multipart/form-data" >
                          @csrf
                          <div class="form-group ">
                              <label for="title" >Title</label>
                              <div>
                                  <input id="title" type="text" class="form-control " name="name" value="{{$tag->name}}" required autocomplete="name"/>
                              </div>
                            </div>
                            <div class="form-group ">
                              <label for="excerpt" >Ecxerpt</label>
                              <div>
                                  <input id="excerpt" type="text" class="form-control " name="excerpt" value="{{$tag->excerpt}}" autocomplete="name"/>
                              </div>
                            </div>
                              <div class=" modal-footer ">
                                  <button type="button" data-dismiss="modal" class="btn btn-secondary btn-sm">
                                      {{ __('Close') }}
                                  </button>
                                  <button type="submit" class="btn btn-primary btn-sm">
                                      {{ __('Save') }}
                                  </button>
                               </div>
                          
                          </div>
                      </form>
                  </div>
            
                </div>
            
              </div>
          @endforeach
      </tbody>
    </table>
  
  </div></div><div class="row">
    <div class="col-sm-12 col-md-5">
      <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
        Showing {{$categories->firstItem()  ?? '0'}} to {{$categories->count()}} of {{$categories->total()}} entries
      </div>
    </div>
          <ul class="pagination">
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {!!$categories->links() !!}
          </ul></div></div></div>
          @else
          <div class="alert alert-info" role="alert">
            You don't have Categories yet!
          </div>
          @endif
        </div>
  </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" style="width:100%">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <h4 class="modal-title">Create Category</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <form method="POST" action="{{ route('createCategory') }}" enctype="multipart/form-data" >
              @csrf
              <div class="form-group ">
                  <label for="title" >Title</label>
                  <div>
                      <input id="name" type="text" class="form-control " name="name" required autocomplete="name"/>
                  </div>
                </div>
                <div class="form-group ">
                  <label for="excerpt" >Ecxerpt</label>
                  <div>
                      <input id="excerpt" type="text" class="form-control " name="excerpt" autocomplete="name"/>
                  </div>
                </div>
                  <div class=" modal-footer ">
                      <button type="button" data-dismiss="modal" class="btn btn-secondary btn-sm">
                          {{ __('Close') }}
                      </button>
                      <button type="submit" class="btn btn-primary btn-sm">
                          {{ __('Save') }}
                      </button>
                   </div>
              
              </div>
          </form>
      </div>

    </div>

  </div>
  

@endsection
@section('scripts')
<script type="text/javascript">
    $('#summernote2').summernote({
       height: 300
     });
    let label = document.querySelector('#image_label');
let input = document.querySelector('#image');
 input.addEventListener("change",()=>{
     if(input.value!=null)label.innerHTML=input.value;
     else label.innerHTML= "Choose file"
 })
 

</script>
@endsection