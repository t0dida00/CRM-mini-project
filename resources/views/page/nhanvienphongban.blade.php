
@extends('master')
@section('content')
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
         
          Danh sách nhân viên phòng {{$name}}
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>IMG</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Phone</th>
                 
                    <th>Active</th>
                  </tr>
                </thead> 
                <tbody>
                  @foreach($nhanvien as $nv)  
                  <tr>        
                    <td>{{$nv->ID}}</td>
                    <td><img src="source/img/{{$nv->Image}}" alt="" height="100px" width="100px"></td>
                    <td>{{$nv->First_Name}} {{$nv->Middle_Name}} {{$nv->Last_Name}}</td> 
                    <td>{{$nv->NamePosition}}
                    </td>

                    <td>{{$nv->Phone}}</td>
                   
                    <td>
                    <a href="{{route('detailEmployee',$nv->ID)}}"><button class="btn btn-info btn-sm">Detail</button></a>                   
                    <a href="#"><button class="btn btn-info btn-sm">Edit</button></a>
                    <a href="#"><button class="btn btn-danger btn-sm">Delete</button></a>
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