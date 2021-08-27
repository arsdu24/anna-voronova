@extends('layouts.Admin')
@section('title','Blog')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            Articles
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Articles</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">  Articles</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">
            <i class="fas fa-plus"></i>
           Write an article
        </button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      @if($articles->count()>0)
      <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12">
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
            @foreach($articles as $article)
                <tr class="odd">
                <td class="dtr-control sorting_1" tabindex="0">
                    <img src="{{asset('img/'.$article->thumbnail)}}" class="img-fluid rounded" alt="tbl">
                </td>
                <td>{{$article->title}}</td>
                <td>{{$article->excerpt}}</td>
                <td>
                    <a href="blogs/{{$article->id}}" class="btn btn-info">
                        <i class="fas fa-edit"></i>
                        Edit
                    </a>
                    <a href="" title="Delete" class="btn btn-danger" onclick="event.preventDefault();
                    document.getElementById('{{$article->id}}').submit();">
                      <i class="fas fa-trash"></i>
                      Delete
                    </a>
                    <form id="{{$article->id}}" action="{{route('articleDelete',['article'=>$article->id])}}" method="POST" style="display: none;">
                      @csrf
                    </form>
                </td>
              </tr>
            @endforeach
                    </tbody>
      </table>
    </div></div><div class="row">
  <div class="col-sm-12 col-md-5">
    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
       Showing {{$articles->firstItem()  ?? '0'}} to {{$articles->count()}} of {{$articles->total()}} entries
    </div>
  </div>
 
    <div class="col-sm-12 col-md-7">
      <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
        {!!$articles->links()!!}
        </div></div></div></div>
</div>
@else
<div class="alert alert-info" role="alert">
  You don't have articles yet!
</div>
@endif
    <!-- /.card-body -->
  </div> 
  
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" style="width:100%">
    
        <!-- Modal content-->
        <div class="modal-content" >
          <div class="modal-header">
            <h4 class="modal-title">Create Article</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
              <form method="POST" action="{{ route('createArticle') }}" enctype="multipart/form-data" >
                  @csrf
                  <div class="form-group ">
                      <label for="image" >Thumbnail </label>
  
                      <div class="input-group mb-3 col-md-6">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-image"></i></span>
                          </div>
                          <div class="custom-file">
                            <input id="image" type="file" name="image" class="custom-file-input" id="inputGroupFile01" >
                            <label class="custom-file-label"  id="image_label">Choose file</label>
                          </div>
                        </div>
                  </div>
                  <div class="form-group ">
                      <label for="title" >Title</label>
                      <div>
                          <textarea id="name" type="text" class="form-control " name="title" required autocomplete="name"></textarea>
                      </div>
                  </div>
                  <div class="form-group ">
                    <label for="author">Author</label>
                    <input type="text" class="form-control"   name="author" required value="{{$article->author ?? '' }}"/>
                  </div>
                  <div class="form-group ">
                      <label for="excerpt" >Excerpt</label>
                      <div>
                          <textarea id="excerpt" type="text" class="form-control " name="excerpt" required autocomplete="name"></textarea>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="content" >Content  </label>
                      <div>
                          <textarea class="form-control" name="content" id="summernote2" >
                            {{$article->content ?? ''}}
                          </textarea>
                      </div>
                
                  </div>
                  <div class="form-group">
                      <label for="sel1">Category:</label>
                          <select class="select2bs4 select2-hidden-accessible" name="category[]" multiple="" id="category" data-placeholder="Select categories" style="width: 100%;" data-select2-id="22" tabindex="-1" aria-hidden="true">
                              @if($categories ?? '')
                              @foreach($categories as $option)
                              <option value="{{$option->id}}">{{$option->name}}</option>
                              @endforeach
                              @endif
                          </select>
                      <span class="select2 select2-container select2-container--bootstrap4 select2-container--below select2-container--focus" dir="ltr" data-select2-id="24" style="width: 100%;">
                  </div>
                  <div class="form-group">
                      <label>Tags</label>
                          <select class="select2bs4 select2-hidden-accessible" id="tag" multiple="" data-placeholder="Select tags" style="width: 100%;" data-select2-id="23" tabindex="-1" aria-hidden="true" name="tags[]">

                            @if($tags ?? '')
                            @foreach($tags as $option)
                            <option value="{{$option->id}}">{{$option->name}}</option>
                            @endforeach
                            @endif
                          </select>
                      <span class="select2 select2-container select2-container--bootstrap4 select2-container--below select2-container--focus" dir="ltr" data-select2-id="24" style="width: 100%;">
                  </div>
                  <div class="form-group row">
                      <label for="description" class="col-md-4 col-form-label text-md-right">Publish</label>
  
                      <div class="col-md-6">
                          <input type="checkbox" data-toggle="switchbutton" name="published"  data-onlabel="Public" data-width="100" data-offlabel="Private" data-onstyle="success" data-offstyle="danger">
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
     $(document).ready(function() {
      $('#tag').select2();
      $('#category').select2();
     
      $.fn.select2.defaults.set("theme", "classic");
    });
    
</script>
@endsection