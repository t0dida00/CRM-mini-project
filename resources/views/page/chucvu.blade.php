
 @extends('master')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="card-header">
            <i class="fas fa-table"></i>
          Danh sách các chức vụ trong công ty  </div>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th>ID</th>
       <th>Name</th>
       <th>Created_at</th>
       <th>Created_by</th>
       <th>Updated_at</th>
       <th>Modified_by</th>
       <th>Active</th>
                  </tr>
                </thead>
               
                <tbody>
                @foreach($position as $pst)
    <tr>
    
    <td>
    {{$pst->ID}}
    </td>
    <td>
    {{$pst->NamePosition}}
    </td>
    <td> {{$pst->Created_at}}
    </td>
    <td>
    {{$pst->Created_by}}</td>
    <td>
    {{$pst->updated_at}}</td>
    <td>
    {{$pst->Modified_by}}</td>
    <td>
    <a href="{{route('edit',$pst->ID)}}"><button class="btn btn-info btn-sm">Edit</button></a>
    <a href="{{route('deletePosition',$pst->ID)}}"><button class="btn btn-danger btn-sm">Delete</button></a>
    </td>
   </tr>  
   @endforeach()
                </tbody>
              </table>
              
@stop