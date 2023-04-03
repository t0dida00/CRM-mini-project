
 @extends('master')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="card-header">
            <i class="fas fa-table"></i>
            @foreach($nhanvien as $nv)
          Thông tin chi tiết của nhân viên {{$nv->Last_Name}} {{$nv->Middle_Name}} {{$nv->First_Name}} </div>
          @endforeach()
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th>ID</th>
       <th>Image</th>
       <th>First Name</th>
       <th>Middle Name</th>
       <th>Last Name</th>
       <th>Department</th>
      
                  </tr>
        <tr> 
        </tr>
                </thead>
               
                <tbody>
                @foreach($nhanvien as $nv)
    <tr>
    
    <td>
    {{$nv->ID}}
    </td>
    <td><img src="source/img/{{$nv->Image}}" alt="" height="100px" width="100px"></td>
    <td>
    {{$nv->First_Name}}
    </td>
    <td> {{$nv->Middle_Name}}
    </td>
    <td>
    {{$nv->Last_Name}}</td>
    <td>{{$nv->Name}}</td>
    
   
   </tr>  
  
                </tbody>
                <thead>
                
                <th>Position</th>
       <th>Contact Type</th>
       <th>Sex</th>
       <th>Date of Birth</th>
       <th>Place of Birth</th>
       <th>Native Place</th>
     
                
                </thead>

                <tbody>
             
    <tr>
    
    <td>
    {{$nv->NamePosition}}
    </td>
    <td>
    {{$nv->ContracType}}
    </td>
    <td> {{$nv->Sex}}
    </td>
    <td>
    {{$nv->DateofBirth}}</td>
    <td>
   @foreach($placeofbirth as $plc)
    {{$plc->name}}</td>
    @endforeach
    <td>
    @foreach($nativeplace as $ntp)
    {{$ntp->name}}</td>
    @endforeach
   </tr>  
 
                </tbody>
                <thead>
                
                <th>Marital Status</th>
       <th>ID Card</th>
       <th>Place of Register </th>
       <th>Degree</th>
       <th>Email</th>
       <th>Phone</th>
      
                
                </thead>

                <tbody>
              
    <tr>
    
    <td>
    {{$nv->	MaritalStatus}}
    </td>
    <td>
    {{$nv->IDCard}}
    </td>
    <td> {{$nv->name}}
    </td>
    <td>
    {{$nv->Degree}}</td>
    <td>
    {{$nv->Email}}</td>
    <td>
    {{$nv->Phone}}</td>
   
   </tr>  
   </tbody>
                <thead>
                
                <th>ID Bank</th>
       <th>Bank Ower</th>
       <th>Permanent Address</th>
       <th>Ward</th>
       <th>District</th>
       <th>Province</th>
      
                
                </thead>

                <tbody>
              
    <tr>
    
    <td>
    {{$nv->IDBank}}
    </td>
    <td>
    {{$nv->BankOwer}}
    </td>
    <td> {{$nv->PermanentAdress}}
    </td>
    <td>
    @foreach($PA2 as $war)
    {{$war->name}}</td>
    @endforeach
    <td>
    @foreach($PA as $dis)
    {{$dis->name}}</td>
    @endforeach
   
    <td>
    @foreach($PA3 as $pro)
    {{$pro->name}}</td>
    @endforeach
    
   </tr>  
   <thead>
                
                <th>Temporary Address</th>
            <th>Ward</th>
       <th>District</th>
       <th>Province</th>
       <th>Time starting work</th>
       <th>Manager</th>
      
                
                </thead>

                <tbody>
              
    <tr>
    
    <td>
    {{$nv->Temporary_Address}}
    </td>
    <td>
    @foreach($TA2 as $war)
    {{$war->name}}</td>
    @endforeach
    <td>
    @foreach($TA as $dis)
    {{$dis->name}}</td>
    @endforeach
   
    <td>
    @foreach($TA3 as $pro)
    {{$pro->name}}</td>
    @endforeach
    <td>
    {{$nv->StartWorking}}</td>
    <td>
    @foreach($Mng as $mng)
    {{$mng->Last_Name}}  {{$mng->Middle_Name}}  {{$mng->First_Name}}</td>
    @endforeach
   
   </tr>  
   <thead>
                
                
       <th>Created_at</th>
       <th>Created_by</th>
       <th>Updated_at</th>
       <th>Modified_by</th>
      
                
                </thead>

                <tbody>
              
    <tr>
   
    <td>
    <input type="text" value=" {{$nv->Created_at}}">
    </td>
    <td>
    {{$nv->Created_by}}
    </td>
    <td> {{$nv->Modified_at}}
    </td>
    <td>
    {{$nv->Modified_by}}</td>
  
   
   </tr>  
   @endforeach()
                </tbody>
              </table>
              
@stop