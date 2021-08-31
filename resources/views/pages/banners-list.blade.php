@extends('layouts.Admin')
@section('title', 'Banners')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            banners
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">banners</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">  banners</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">
            <i class="fas fa-plus"></i>
           Create a Banner
        </button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      @if($banners->count()>0)
      <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12">
              <table id="example2" class="table table-borderless table-striped table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
        <thead>
        <tr role="row">
            <th>Thumbnail</th>
            <th>Title</th>
            <th>Excerpt</th>
            <th>Type</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($banners as $banner)
                <tr class="odd">
                <td class="dtr-control sorting_1" tabindex="0">
                    <img src="{{asset('img/'.$banner->thumbnail)}}" class="img-fluid rounded" alt="tbl">
                </td>
                <td>{{$banner->title}}</td>
                <td>{{$banner->excerpt}}</td>
                <td>
                   @if($banner->is_slide)
                    Slide
                  @else Banner
                  @endif
                </td>
                <td>
                    <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="{{'#Edit'.$banner->id}}">
                      <i class="fas fa-edit"></i>
                        Edit
                    </button>
                    <a href="" title="Delete" class="btn btn-danger" onclick="event.preventDefault();
                    document.getElementById('{{$banner->id}}').submit();">
                      <i class="fas fa-trash"></i>
                      Delete
                    </a>
                    <form id="{{$banner->id}}" action="{{route('deleteBanner',['banner'=>$banner->id])}}" method="POST" style="display: none;">
                      @csrf
                    </form>
                    <div id="{{"Edit".$banner->id}}" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg" style="width:100%">
                    
                        <!-- Modal content-->
                        <div class="modal-content" >
                          <div class="modal-header">
                            <h4 class="modal-title">Edit Banner</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body">
                              <form method="POST" action="{{ route('updateBanner',['banner' => $banner->id]) }}" enctype="multipart/form-data" >
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
                                          <textarea id="name" type="text" class="form-control " name="title" required >{{$banner->title ?? ''}}</textarea>
                                      </div>
                                  </div>
                                  <div class="form-group ">
                                      <label for="excerpt" class="w-100 text-left" >Excerpt</label>
                                      <div>
                                          <textarea id="excerpt" type="text" class="form-control " name="excerpt" required >{{$banner->excerpt ?? ''}}</textarea>
                                      </div>
                                  </div>
                                  <div class="form-group ">
                                    <label for="excerpt" class="w-100 text-left" >Highlighted text</label>
                                    <div>
                                        <input id="excerpt" type="text" class="form-control " name="highlighted" value="{{$banner->highlighted ?? ''}}"  />
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label for="description" class="w-100 text-left">Is Slide ?</label>
                                    
                                    <div  class="w-100 text-left">
                                        <input type="checkbox" data-toggle="switchbutton"class="form-control float-left" @if($banner->is_slide)checked @endif name="is_slide"  data-onlabel="Yes" data-width="100" data-offlabel="No" data-onstyle="success" data-offstyle="danger">
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
                    </div>
                </td>
              </tr>
            @endforeach
                    </tbody>
      </table>
    </div></div><div class="row">
  <div class="col-sm-12 col-md-5">
    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
       Showing {{$banners->firstItem()  ?? '0'}} to {{$banners->count()}} of {{$banners->total()}} entries
    </div>
  </div>
 
    <div class="col-sm-12 col-md-7">
      <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
        {!!$banners->links()!!}
        </div></div></div></div>
</div>
@else
<div class="alert alert-info" role="alert">
  You don't have banners yet!
</div>
@endif
    <!-- /.card-body -->
  </div> 
  
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" style="width:100%">
    
        <!-- Modal content-->
        <div class="modal-content" >
          <div class="modal-header">
            <h4 class="modal-title">Create Banner</h4>
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
                            <input id="image" type="file" name="thumbnail" class="custom-file-input" id="inputGroupFile01" >
                            <label class="custom-file-label  text-left"  id="image_label">Choose file</label>
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
                      <label for="excerpt" >Excerpt</label>
                      <div>
                          <textarea id="excerpt" type="text" class="form-control " name="excerpt" required autocomplete="name"></textarea>
                      </div>
                  </div>
                  <div class="form-group ">
                    <label for="excerpt" class="w-100 text-left" >Highlighted text</label>
                    <div>
                        <input id="excerpt" type="text" class="form-control " name="highlighted" value="{{$banner->highlighted ?? ''}}"  />
                    </div>
                </div>
                  <div class="form-group">
                      <label for="description" >Is Slide ?</label>
  
                      <div class="col-md-6">
                          <input type="checkbox" data-toggle="switchbutton" name="is_slide"  data-onlabel="Yes" data-width="100" data-offlabel="No" data-onstyle="success" data-offstyle="danger">
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