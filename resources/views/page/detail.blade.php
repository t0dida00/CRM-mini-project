
 @extends('master')
@section('content')
<div class="card-header">
            <i class="fas fa-table"></i>
          Danh sách tỉnh thành của {{$province}}  </div>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th>ID</th>
       <th>Code</th>
       <th>Name</th>
       <th>Type</th>
                  </tr>
                </thead>
               
                <tbody>
                @foreach($district as $dst)
    <tr>
    
    <td>
    {{$dst->id}}
    </td>
    <td>
    {{$dst->code}}
    </td>
    <td> {{$dst->name}}
    </td>
    <td>
    {{$dst->type}}</td>
    <td>
    <a href="{{route('show2',$dst->id)}}"><button class="btn btn-info btn-sm">Show</button></a>
    </td>
   </tr>  
   @endforeach()
                </tbody>
              </table>
@stop