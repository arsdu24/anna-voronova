@extends('layouts.Admin')
@section('title', 'collections')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            Collections
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"> Collections</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>




<div class="card">
    <div class="card-header">
      <h3 class="card-title"> Collections</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">
            <i class="fas fa-plus"></i>
            Add collection
        </button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12">
      @if(count($collections)!=0)
        <table id="example2" class="table table-borderless table-striped table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
        <thead>
        <tr role="row">
            <th>Thumbnail</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($collections as $category)
            <tr class="odd">
                <td class="dtr-control sorting_1" tabindex="0">
                    <img src="{{asset('img/'.$category->thumbnail)}}" class="img-fluid rounded" alt="tbl">
                </td>
                <td>{{$category->title}}</td>
                <td>{{$category->description}}</td>
                <td>
                    <a href="collections-list/{{$category->id}}"   class="btn btn-info">
                        <i class="fas fa-edit"></i>
                        Edit
                    </a>
                    <a href="" title="Delete" class="btn btn-danger" onclick="event.preventDefault();
                    document.getElementById('{{$category->id}}').submit();">
                      <i class="fas fa-trash"></i>
                      Delete
                    </a>
                    <form id="{{$category->id}}" action="{{route('collectionDelete',['collection'=>$category])}}" method="POST" style="display: none;">
                      @csrf</form>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
    @else
    <div class="alert alert-info" role="alert">
      You don't have collections yet!
    </div>
    @endif
</div></div><div class="row">
  <div class="col-sm-12 col-md-5">
    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
      Showing {{$collections->firstItem() ?? '0'}} to {{$collections->count()}} of {{$collections->total()}} entries
    </div>
  </div>
 
    <div class="col-sm-12 col-md-7">
      <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
        {!!$collections->links()!!}
        </div></div></div></div>
</div>
    <!-- /.card-body -->
  </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Collection</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('createCollection') }}" enctype="multipart/form-data" >
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Title</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control " name="title" required autocomplete="title">
                      </div>
                </div>

                <div class="form-group row">
                  <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                  <div class="col-md-6">
                  <textarea class="form-control" name="description"  >
                  </textarea>
                </div>
                </div>


                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label text-md-right">Thumbnail </label>

                    <div class="input-group mb-3 col-md-6">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-image"></i></span>
                        </div>
                        <div class="custom-file">
                          <input id="image" type="file" name="thumbnail" class="custom-file-input" id="inputGroupFile01" >
                          <label class="custom-file-label"  id="image_label">Choose file</label>
                        </div>
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
<script>
let label = document.querySelector('#image_label');
let input = document.querySelector('#image');
 input.addEventListener("change",()=>{
     if(input.value!=null)label.innerHTML=input.value;
     else label.innerHTML= "Choose file"
 })


$('[data-dismiss=modal]').on('click', function (e) {
  let label = document.querySelector('#image_label');
    var $t = $(this),
        target = $t[0].href || $t.data("target") || $t.parents('.modal') || [];
    label.innerHTML="Choose file";
  $(target)
    .find("input,textarea,select")
       .val('')
       .end()
    .find("input[type=checkbox], input[type=radio]")
       .prop("checked", "")
       .end();
})
 </script>
@endsection