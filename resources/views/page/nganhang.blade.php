
 @extends('master')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="card-header">
            <i class="fas fa-table"></i>
          Danh sách ngân hàng  </div>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th>ID</th>
       <th>Name</th>
       <th>Updated_at</th>
       <th>Active</th>
      
                  </tr>
                </thead>
               
                <tbody>
                @foreach($bank as $bk)
    <tr>
    
    <td>
    {{$bk->ID}}
    </td>
   
    <td> {{$bk->Name}}
    </td>
    <td>{{$bk->updated_at}}</td>
    <td>
    <a href="{{route('editBank',$bk->ID)}}"><button class="btn btn-info btn-sm">Edit</button></a>
    <a href="{{route('deleteBank',$bk->ID)}}"><button class="btn btn-danger btn-sm">Delete</button></a>
    </td>
   </tr>  
   @endforeach()
                </tbody>
              </table>
@stop