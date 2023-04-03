@extends('master')
@section('content')
<div class="card-header">
            <i class="fas fa-table"></i>
          Danh sách xã/thị trấn của  {{$Typedistrict}} {{$district}}---{{$province}} </div>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <tr >
       <th>ID</th>
       <th>Code</th>
       <th>Name</th>
       <th>Type</th>
      
    </tr>
    @foreach($ward as $w)
    <tr>
    
    <td>
    {{$w->id}}
    </td>
    <td>
    {{$w->code}}
    </td>
    <td> {{$w->name}}
    </td>
    <td>
    {{$w->type}}</td>
    
   </tr>  
   @endforeach()
   
</table>
@stop