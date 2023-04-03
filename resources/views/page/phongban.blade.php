@extends('master')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
          Danh sách phòng ban</div>
          <div class="card-body">
            <div class="table-responsive">
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
                  @foreach($deparment as $dpm)  
                  <tr>        
                    <td>{{$dpm->ID}}</td>
                   
                    <td>{{$dpm->Name}}</td>
                    <td>{{$dpm->updated_at}}</td>
                    <td>
                    <a href="{{route('employees',$dpm->ID)}}"><button class="btn btn-info btn-sm">ListEmployee</button></a>     
                                    
                    <a href="{{route('editDepartment',$dpm->ID)}}"><button class="btn btn-success btn-sm">Edit</button></a>
                    <a href="{{route('deleteDepartment',$dpm->ID)}}"><button class="btn btn-danger btn-sm">Delete</button></a>
    
                    </td>
                  </tr>          
                @endforeach
                </tbody>
              </table>
            </div>
          </div>  
        </div>
      </div>
 @stop    