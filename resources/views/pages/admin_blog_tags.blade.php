@extends('layouts.Admin')
@section('title', 'Tags')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            Articles Tags
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active">Articles  Tags</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <div class="card"><div class="card-header">
    <h3 class="card-title"> Tags</h3>
    <button type="button" class="btn col-md-3 col-12 ml-3 p-0" >
    <form method="POST" action="{{route('blog-tag-image-set')}}" id="form-blog-image" enctype="multipart/form-data" class="form-inline">
      @csrf
          <div class="col-12 p-0">
                    <label class="list-inline w-100 p-0">
                    <div class="col-12 p-0">
                        <div class="btn-group w-100 p-15">
                          <span class="btn btn-success col-12">
                            <i class="fas fa-plus"></i>
                            <span>Change Blog Tags Image</span>
                          </span>
                      </div>
                  </div>


                  <input id="image_blog" type="file" name="image" class="custom-file-input d-none">
                  </label>
        </div>
  </form>
</button>
    <div class="card-tools col-md-2 col-12 p-0 float-md-right float-none ml-3">
      <button type="button" class="btn btn-info btn-md col-12" data-toggle="modal" data-target="#myModal">
          <i class="fas fa-plus"></i>
          Add Tag
      </button>
    </div>
  </div>
  <div class="card-body">
      @if(Session::has('errorMessage'))
          <div class="alert alert-warning w-100" role="alert">
              {!! Session::get('errorMessage') !!}
          </div>
      @endif
    @if(count($tags)!=0)
    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12 table-responsive">

      <table id="example2" class="table table-borderless table-striped table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
      <thead>
      <tr role="row">
          <th>Id</th>
          <th>Title</th>
          <th>Slug</th>
          <th>Action</th></tr>
      </thead>
      <tbody>
          @foreach($tags as $tag)
          <tr class="odd">
              <td class="dtr-control sorting_1" tabindex="0">
                  {{$tag->id}}
              </td>
              <td> {{strtoupper($tag->name)}}</td>
              <td> {{$tag->slug}}</td>
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
                <form id="{{$tag->id}}" action="{{route('deleteArticleTag',['tag'=>$tag])}}" method="POST" style="display: none;">
                    @csrf</form>
            </td>
            </tr>
            <div id="{{'d'.$tag->id}}" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg" style="width:100%">

                <!-- Modal content-->
                <div class="modal-content" >
                  <div class="modal-header">
                    <h4 class="modal-title">Edit Tag</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                      <form method="POST" action="{{route('updateArticleTag',['tag'=>$tag->id])}}" enctype="multipart/form-data" >
                          @csrf
                          <div class="form-group ">
                              <label for="title" >Title</label>
                              <div>
                                  <input id="title" type="text" class="form-control " name="name" value="{{$tag->name}}" required autocomplete="name"  style="text-transform:uppercase" />
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
        Showing {{$tags->firstItem()  ?? '0'}} to {{$tags->count()}} of {{$tags->total()}} entries
      </div>
    </div>
          <ul class="pagination">
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {!!$tags->links() !!}
          </ul></div></div></div>
          @else
          <div class="alert alert-info" role="alert">
            You don't have tags for articles yet!
          </div>
          @endif
        </div>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" style="width:100%">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <h4 class="modal-title">Create Tag</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <form method="POST" action="{{ route('createArticleTag') }}" enctype="multipart/form-data" >
              @csrf
              <div class="form-group ">
                  <label for="title" >Title</label>
                  <div>
                      <input id="name" type="text" class="form-control " maxlength="250" name="name"  style="text-transform:uppercase"  required autocomplete="name"/>
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
<script>
  $('#image_blog').change((e)=>{
    $('#form-blog-image').submit();
  })
</script>
@endsection
