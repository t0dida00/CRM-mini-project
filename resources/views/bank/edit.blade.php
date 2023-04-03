
 @extends('master')
@section('content')
<div class="card-header">
            <i class="fas fa-table"></i>
          Danh sách ngân hàng  </div>
          <form action="{{route('updateBank',$bank->ID)}}" method="get" id="nameform">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
               
                  <tr>
               
       <th>Name</th>
     
                  </tr>
                </thead>
               
                <tbody>
                
    <tr>
    <td>
    <input type="text" value="{{$bank->Name}}" name="Name" size="30px"> 
    <input type="hidden" value="{{$bank->ID}}" name="ID">
    
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