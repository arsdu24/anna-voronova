@extends('layouts.Admin')
@section('title', 'Sliders')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            Sliders
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active">Sliders</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">  Sliders</h3>
      @if($sliders->count()<10)
      <div class="card-tools col-md-2 col-12 p-0 float-md-right float-none ml-3">
        <button type="button" class="btn btn-info btn-md col-12" data-toggle="modal" data-target="#myModal">
            <i class="fas fa-plus"></i>
           Create a Slider
        </button>
      </div>
      @else
      <div class="card-tools">
        <h5>Max sliders count : 10</h5>
      </div>
      @endif
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      @if($sliders->count()>0)
      <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="table-responsive-md">
              <table id="example2" class="table table-borderless table-striped table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
        <thead>
        <tr role="row">
            <th>Thumbnail</th>
            <th>Title</th>
            <th>Excerpt</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($sliders as $slider)
                <tr class="odd">
                <td class="dtr-control sorting_1" tabindex="0">
                    <img src="{{asset('img/'.$slider->thumbnail)}}" class="img-fluid rounded" alt="tbl">
                </td>
                <td>{{$slider->title}}</td>
                <td>{{$slider->excerpt}}</td>
                <td>
                    <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="{{'#Edit'.$slider->id}}">
                      <i class="fas fa-edit"></i>
                        Edit
                    </button>
                    <a href="" title="Delete" class="btn btn-danger" onclick="event.preventDefault();
                    document.getElementById('{{$slider->id}}').submit();">
                      <i class="fas fa-trash"></i>
                      Delete
                    </a>
                    <form id="{{$slider->id}}" action="{{route('deleteBanner',['banner'=>$slider->id])}}" method="POST" style="display: none;">
                      @csrf
                    </form>
                    <div id="{{"Edit".$slider->id}}" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg" style="width:100%">
                    
                        <!-- Modal content-->
                        <div class="modal-content" >
                          <div class="modal-header">
                            <h4 class="modal-title">Edit Slider</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body">
                              <form method="POST" action="{{ route('updateBanner',['banner' => $slider->id]) }}" enctype="multipart/form-data" >
                                  @csrf
                                  <div class="form-group">
                                      <label for="image" class="w-100 text-left" >Thumbnail </label>
                  
                                      <div class="input-group mb-3 col-md-6">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-image"></i></span>
                                          </div>
                                          <div class="custom-file">
                                            <input id="image" type="file" name="thumbnail" class="custom-file-input" id="inputGroupFile01" >
                                            <label class="custom-file-label text-left"  id="image_label">Choose file</label>
                                          </div>
                                        </div>
                                  </div>
                                  <div class="form-group ">
                                      <label for="title"  class="w-100 text-left">Title</label>
                                      <div>
                                          <textarea id="name" type="text" maxlength="100" class="form-control " name="title" required >{{$slider->title ?? ''}}</textarea>
                                      </div>
                                  </div>
                                  <div class="form-group ">
                                      <label for="excerpt" class="w-100 text-left" >Excerpt</label>
                                      <div>
                                          <textarea id="excerpt" type="text" maxlength="50" class="form-control " name="excerpt" required >{{$slider->excerpt ?? ''}}</textarea>
                                      </div>
                                  </div>
                                  <div class="form-group ">
                                    <label for="excerpt" class="w-100 text-left" >Highlighted text</label>
                                    <div>
                                        <input id="excerpt" type="text" class="form-control " maxlength="50" name="highlighted" value="{{$slider->highlighted ?? ''}}"  />
                                    </div>
                                  </div>
                                  <div class="form-group ">
                                    <label for="link"  class="w-100 text-left">Link</label>
                                    <div>
                                        <input id="link" type="text" class="form-control "  value="{{$slider->link ?? ''}}" name="link" >
                                    </div>
                                  </div>
                                    <input type="hidden" name="is_slide" value="1">
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
                    </div>
                </td>
              </tr>
            @endforeach
                    </tbody>
      </table>
    </div></div><div class="row">
  <div class="col-sm-12 col-md-5">
    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
       Showing {{$sliders->firstItem()  ?? '0'}} to {{$sliders->count()}} of {{$sliders->total()}} entries
    </div>
  </div>
 
    <div class="col-sm-12 col-md-7">
      <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
        {!!$sliders->links()!!}
        </div></div></div></div>
</div>
@else
<div class="alert alert-info" role="alert">
  You don't have sliders yet!
</div>
@endif
    <!-- /.card-body -->
  </div> 
  
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" style="width:100%">
    
        <!-- Modal content-->
        <div class="modal-content" >
          <div class="modal-header">
            <h4 class="modal-title">Create Slider</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
              <form method="POST" action="{{ route('createBanner') }}" enctype="multipart/form-data" >
                  @csrf
                  <div class="form-group ">
                      <label for="image" >Thumbnail </label>
  
                      <div class="input-group mb-3 col-md-6">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-image"></i></span>
                          </div>
                          <div class="custom-file">
                            <input id="image" type="file" name="thumbnail" class="custom-file-input" id="inputGroupFile01" required>
                            <label class="custom-file-label  text-left"  id="image_label">Choose file</label>
                          </div>
                        </div>
                  </div>
                  <div class="form-group ">
                      <label for="title" >Title</label>
                      <div>
                          <textarea id="name" type="text" maxlength="100" class="form-control " name="title" required ></textarea>
                      </div>
                  </div>
                  <div class="form-group ">
                      <label for="excerpt" >Excerpt</label>
                      <div>
                          <textarea id="excerpt" type="text" class="form-control " maxlength="50"name="excerpt" required ></textarea>
                      </div>
                  </div>
                  <div class="form-group ">
                    <label for="excerpt" class="w-100 text-left" >Highlighted text</label>
                    <div>
                        <input id="excerpt" type="text" class="form-control "maxlength="50" name="highlighted" value=""  />
                    </div>
                </div>
                <div class="form-group ">
                  <label for="link"  class="w-100 text-left">Link</label>
                  <div>
                      <input id="link" type="text" class="form-control " maxlength="250" value="" name="link" required >
                  </div>
              </div>
                  <input type="hidden" name="is_slide" value="1">
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