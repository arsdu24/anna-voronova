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
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active">Product  Categories</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <div class="card"><div class="card-header">
    <h3 class="card-title"> Categories</h3>
    <button type="button" class="btn btn-info btn-md ml-3 col-md-2 col-12" data-toggle="modal" data-target="#inMenu">
      <i class="fas fa-edit"></i>
      Categories in menu
    </button>
    <div class="card-tools col-md-2 col-12 p-0 float-md-right float-none ml-3">
      <button type="button" class="btn btn-info btn-md col-12" data-toggle="modal" data-target="#myModal">
          <i class="fas fa-plus"></i>
          Add Category
      </button>
    </div>
  </div>
  <div class="card-body">
    @if(count($categories)!=0)
    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="table-responsive">

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
                                  <input id="title" type="text" class="form-control " maxlength="250" name="name" value="{{$tag->name}}" required autocomplete="name"/>
                              </div>
                            </div>
                            <div class="form-group ">
                              <label for="excerpt" >Ecxerpt</label>
                              <div>
                                  <input id="excerpt" type="text" class="form-control " name="excerpt" maxlength="250" value="{{$tag->excerpt}}" autocomplete="name"/>
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
  <div id="inMenu" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">In Menu</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="container" id="inMenu_content">
            <div class="row">
                    <div class="card-body">
                       @if($menu_categories->count()>0)
                       <hr class="my-12"/>
                       <label class="form-check-label">
                         <p><b>The selectet in menu products</b></p>
                       </label>
                       <div class="filter-container p-0 row" style="padding: 3px; position: relative; width: 100%; display: flex; flex-wrap: wrap;">
                       @foreach($menu_categories as $item)
                            <div class="filtr-item col-sm-2 deleteMenu" data-id="{{$item->id}}" >
                              <a href="#" data-toggle="lightbox" style="color:black;">
                                <p>{{$item->name}}</p>
                              </a>
                            </div>
                       @endforeach
                      </div>
                      @endif
                      <div
                      @if($menu_categories->count()>=5)
                        class="disabled"
                      @endif>
                        <hr class="my-12"/>
                        <div class="filter-container p-0 row" style="padding: 3px; position: relative; width: 100%; display: flex; flex-wrap: wrap;">
                        @foreach($modal_categories as $item)
                        <div class="filtr-item col-sm-2 addMenu" data-id="{{$item->id}}">
                          <a href="#" style="color:black;">
                            <p>{{$item->name}}</p>
                          </a>
                        </div>
                        @endforeach
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                          Showing {{$modal_categories->firstItem()  ?? '0'}} to {{$modal_categories->count()}} of {{$modal_categories->total()}} entries
                        </div></div>
                          <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                              <ul class="pagination">
                                {!!$modal_categories->links() !!}
                              </ul>
                            </div></div></div>
                </div>
        </div>

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
 if(input)input.addEventListener("change",()=>{
     if(input.value!=null)label.innerHTML=input.value;
     else label.innerHTML= "Choose file"
 })

 function add(){
  $(".addMenu").off("click").click(function(e){
    e.preventDefault();
    let data_id = $(this).attr('data-id');
    $.ajax({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: '{{route("InMenuCategory")}}',
        data: {
            data_id: data_id,
        },
        success: function(result) {
          let content = $(result).find('#inMenu_content').html();
           $('#inMenu_content').html(content);
           add();
           delete_i();
        },
        error: function(result) {
          console.log(result.responseText);
        }
    });
});
}
function delete_i(){
  $(".deleteMenu").off("click").click(function(e){
    let data_id = $(this).attr('data-id');
    e.preventDefault();
    $.ajax({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: '{{route("downFromMenuCategory")}}',
        data: {
            data_id: data_id,
        },
        success: function(result) {
          let content = $(result).find('#inMenu_content').html();
           $('#inMenu_content').html(content);
           add();
           delete_i();
        },
        error: function(result) {
          console.log(result.responseText);
        }
    });
});
}
add();
delete_i();
</script>
@endsection
