
 @extends('master')
@section('content')
<div class="card-header">
            <i class="fas fa-table"></i>
          Danh sách các chức vụ trong công ty  </div>
          <form action="{{route('updateDepartment',$department->ID)}}" method="get" id="nameform">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
               
                  <tr>
               
       <th>Name</th>
     
                  </tr>
                </thead>
               
                <tbody>
                
    <tr>
    <td>
    <input type="text" value="{{$department->Name}}" name="Name"> 
    <input type="hidden" value="{{$department->ID}}" name="ID">
    
    </td>
  
    
   
   </tr>  
 
  
                </tbody>
              </table>
              <button type="button" onclick="quay_lai_trang_truoc()">Cancel</button>
              <button type="submit" form="nameform" value="Submit">Submit</button>
             
              </form>
              <script>
      function quay_lai_trang_truoc(){
          history.back();
      }
  </script>
 
@stop