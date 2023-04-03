@extends('master')
@section('content')
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
          Danh sách tỉnh thành</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Number</th>
                    <th>Code</th>
                    <th>Name</th>
                  
                    <th>type</th>
                    <th>Active</th>
                  </tr>
                </thead> 
                <tbody>
                  @foreach($table as $w)  
                  <tr>        
                    <td>{{$w->id}}</td>
                    <td>{{$w->code}}</td>
                    <td>{{$w->name}}</td>
                    
                    <td>{{$w->type}}</td>
                    <td>
                    <a href="{{route('show',$w->id)}}"><button class="btn btn-info btn-sm">Show</button></a>     
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