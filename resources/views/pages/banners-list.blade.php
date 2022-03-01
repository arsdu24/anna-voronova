@extends('layouts.Admin')
@section('title', 'Banners')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            Banners
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active">Banners</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">  Banners</h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @if(Session::has('errorMessage'))
            <div class="alert alert-warning w-100" role="alert">
                {!! Session::get('errorMessage') !!}
            </div>
        @endif
      @if($banners->count()>0)
      <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="table-responsive">
              <table id="example2" class="table table-borderless table-striped table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
        <thead>
        <tr role="row">
            <th>Thumbnail</th>
            <th>Title</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
            @foreach($banners as $banner)
                <tr class="odd">
                <td class="dtr-control sorting_1" tabindex="0">
                    <img src="{{asset('img/'.$banner->thumbnail)}}" class="img-fluid rounded" alt="tbl">
                </td>
                <td>{{$banner->title}}</td>
                <td>
                    <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="{{'#Edit'.$banner->id}}">
                      <i class="fas fa-edit"></i>
                        Edit
                    </button>
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
                                            <input id="image" type="file" name="thumbnail" class="custom-file-input" id="inputGroupFile01" required >
                                            <label class="custom-file-label text-left"  id="image_label">Choose file</label>
                                          </div>
                                        </div>
                                  </div>
                                  <div class="form-group ">
                                      <label for="link"  class="w-100 text-left">Link</label>
                                      <div>
                                          <input id="link" type="text" class="form-control "  value="{{$banner->link ?? ''}}" name="link" >
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
       Showing {{$banners->firstItem()  ?? '0'}} to {{$banners->lastItem()}} of {{$banners->total()}} entries
    </div>
  </div>

    <div class="col-sm-12 col-md-7">
      <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
        {!!$banners->links()!!}
        </div></div></div></div>
</div>
@else
<div class="alert alert-info" role="alert">
  You don't have Banners yet!
</div>
@endif
    <!-- /.card-body -->
  </div>
@endsection
