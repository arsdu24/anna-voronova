@extends('layouts.Admin')
@section('title','Subscribers')
@section('content')
@if(session()->has('success'))
  <div class="alert alert-success" id="alert" role="alert">
    {{ session()->get('success') }}
    <button type="button" class="close" onclick="document.getElementById('alert').style.display='none'" data-dismiss="modal">&times;</button>
  </div>
@endif
<section class="content-header">
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1>
        Subscribers
      </h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
        <li class="breadcrumb-item active">Subscribers</li>
      </ol>
    </div>
  </div>
</div><!-- /.container-fluid -->
</section>

<div class="card"><div class="card-header">
    <div class="card-tools col-md-2 col-12 p-0 float-md-right float-none ml-3">
      <button type="button" class="btn btn-info btn-md col-12" data-toggle="modal" data-target="#Newsletter">
          <i class="fas fa-plus"></i>
          Add Newsletter
      </button>
    </div>
  </div>
  <div class="card-body">
    @if(count($subscribers)!=0)
    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="table-responsive">
   
      <table id="example2" class="table table-borderless table-striped table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
      <thead>
      <tr role="row">
          <th>Id</th>
          <th>Email</th>
          <th>Action</th></tr>
      </thead>
      <tbody>
          @foreach($subscribers as $subscriber)
          <tr class="odd">
              <td class="dtr-control sorting_1" tabindex="0">
                  {{$subscriber->id}}
              </td>
              <td> {{$subscriber->email}}</td>
              <td class="project-actions">
                <a href="" title="Delete" onclick="event.preventDefault();
                    document.getElementById('{{$subscriber->id}}').submit();" class="btn btn-danger btn-sm" href="#">
                    <i class="fas fa-trash">
                    </i>
                    Delete
                </a>
                <form id="{{$subscriber->id}}" action="{{route('deleteNewsletter',['subscriber'=>$subscriber])}}" method="POST" style="display: none;">
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
        Showing {{$subscribers->firstItem()  ?? '0'}} to {{$subscribers->count()}} of {{$subscribers->total()}} entries
      </div>
    </div>
          <ul class="pagination">
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {!!$subscribers->links() !!}
          </ul></div></div></div>
          @else
          <div class="alert alert-info" role="alert">
            You don't have Subscribers yet!
          </div>
          @endif
        </div>
  </div>
</div>

<div id="Newsletter" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" style="width:100%">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <h4 class="modal-title">Create a Newsletter</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <h6 class="modal-title">Chose one article</h6>

          @foreach($articles as $article)
            <hr>
            <div>
              <a href="#" data-toggle="modal" data-target="#M-{{$article->id}}">
              <div class="d-flex flexRow align-items-center">
                <div class="col-2">
                    <img src="{{asset('img/'.$article->thumbnail)}}" alt="article thumbnail" width="100%">
                    @if($article->newscount)
                      <span class="badge badge-success notification">{{$article->newscount}}</span>
                    @endif
                  </div>
                {{$article->title}}
              </div>
            </a> 
            </div>
                  <div id="M-{{$article->id}}" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered " style="width:100%">
                  
                      <!-- Modal content-->
                      <div class="modal-content" >
                        <div class="modal-header bg-light ">
                          <h4 class="modal-title">Confirm email</h4>
                          <button type="button" class="close" style="color: rgb(19, 19, 19)" data-toggle="modal" data-target="#M-{{$article->id}}" >&times;</button>
                        </div>
                        <div class="modal-body">
                          <h3>Are you sure you want to send this article?</h3><hr>
                          <div class="d-flex flexRow align-items-center">
                            <div class="col-2">
                                <img src="{{asset('img/'.$article->thumbnail)}}" alt="article thumbnail" width="100%">
                            </div>
                            {{$article->title}}
                          </div>
                        </div>
                        <div class=" modal-footer ">
                          <a href="#" class="btn btn-primary" onclick="event.preventDefault();
                            document.getElementById('A-{{$article->id}}').submit();"> Confirm</a>
                          <form method="POST" action="{{ route('sendNewsLetter',['article'=>$article])}}" id="A-{{$article->id}}" enctype="multipart/form-data" >
                            @csrf
                          </form>
                        </div>
                        </div>
                      </div>
                    </div>
            
          @endforeach
                </div>
                  <div class=" modal-footer ">
                      <button type="button" data-dismiss="modal" class="btn btn-secondary btn-sm">
                          {{ __('Close') }}
                      </button>
                   </div>
      </div>

    </div>

  </div>
  
@endsection