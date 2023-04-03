<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NhanVien;
use App\Ward;
use App\District;
use App\Ward1;
use App\Employee;
use App\Deparment;
use App\Position;
use App\Bank;
class PageController extends Controller
{
    public function getIndex()
    {
        $table=Ward::all();
  
        return view('page.trangchu2',compact('table'));
    }
    
    public function getDetailDistrict(Request $req)
    {
        $district=District::where('province_id',$req->id)->get();
        $province=Ward::where('id',$req->id)->value('name');
      
        return view('page.detail',compact('district','province'));
    }
    public function getDetailWard(Request $req)
    {
        $ward=Ward1::where('district_id',$req->id)->get();
        $district=District::where('id',$req->id)->value('name');
        $district1=District::where('id',$req->id)->value('province_id');
        $Typedistrict=District::where('id',$req->id)->value('type');
        $province=Ward::where('id','$district->province_id')->first();
        $province=Ward::where('id',$district1)->value('name');
       
        return view('page.detail2',compact('ward','district','Typedistrict','province'));
    }
    public function getEmployee()
    {
      
        $nhanvien=Employee::join('position','employee.Position','=','position.ID')
        ->join('deparment','employee.Deparment','=','deparment.ID')
        ->select( 'position.NamePosition', 'employee.*','deparment.Name')->get();
    
        return view('page.nhanvien',compact('nhanvien'));
    }
    public function getDeparment()
    {
        $deparment=Deparment::get();
        return view('page.phongban',compact('deparment'));
    }
    public function getDetailEmployee(Request $req)
    {
        $nhanvien=Employee::join('position','employee.Position','=','position.ID')
        ->join('deparment','employee.Deparment','=','deparment.ID')
        ->where('deparment.ID','=',$req->id)
        ->select( 'position.NamePosition', 'employee.*','deparment.Name')->get();
        // $emp=Employee::where('Deparment',$req->id)->get();
         $name=Deparment::where('ID',$req->id)->value('Name');
        return view('page.nhanvienphongban',compact('nhanvien','name'));

    }
    public function getBank()
    {
        $bank=Bank::get();
        return view('page.nganhang',compact('bank'));
    }
    public function getPosition()
    {
        $position=Position::get();
        return view('page.chucvu',compact('position'));
    }
    public function editPosition($id)
    {
        $position=Position::find($id);
        return view('position.edit', compact('position'));
    }
    public function updatePosition ($id)
    {
       $id=$_GET["ID"];
       $name=$_GET["Name"];
       $position=Position::where('ID',$id)->update(['NamePosition'=>$name]);
        
        return redirect('vitri')->with('success','OK');
    }
    public function editBank($id)
    {
        $bank=Bank::find($id);
        return view('bank.edit', compact('bank'));
    }   
    public function updateBank ($id)
    {
       $id=$_GET["ID"];
       $name=$_GET["Name"];
       $bank=Bank::where('ID',$id)->update(['Name'=>$name]);
        
        return redirect('nganhang')->with('success','OK');
    }
    public function editDepartment($id)
    {
        $department=Deparment::find($id);
        return view('department.edit', compact('department'));
    }   
    public function updateDepartment ($id)
    {
       $id=$_GET["ID"];
       $name=$_GET["Name"];
       $deparment=Deparment::where('ID',$id)->update(['Name'=>$name]);
        
        return redirect('phongban')->with('success','OK');
    }    
    public function deletePosition($id)
    {   
        $check=Employee::Where('Position',$id)->get();
    
      if(strlen($check)==2)
        {
            $delete=Position::where('ID',$id)->delete();
        return redirect('vitri')->with('status', 'Success');
            
        }
        else{
            return  redirect('vitri')->with('status', 'Fail, Because we have some Employee in this position');
    }}
    public function deleteBank($id)
    {   
        $check=Employee::Where('IDBank',$id)->get();
    
      if(strlen($check)==2)
        {
            $delete=Bank::where('ID',$id)->delete();
        return redirect('nganhang')->with('status', 'Success');
            
        }
        else{
            return  redirect('nganhang')->with('status', 'Fail, Because we have some ID Bank Employee ');
    }
   
}
    public function deleteDepartment($id)
    {   
        $check=Employee::Where('Deparment',$id)->get();

    if(strlen($check)==2)
        {
            $delete=Deparment::where('ID',$id)->delete();
        return redirect('phongban')->with('status', 'Success');
            
        }
        else{
            return  redirect('phongban')->with('status', 'Fail, Because we have some Employee in this Department');
    }

    }
   public function getdetailEmployee1($id)
   { 
     $nhanvien=Employee::join('position','employee.Position','=','position.ID')
    ->join('deparment','employee.Deparment','=','deparment.ID')
    ->join('province','employee.PlaceofRegister','=','province.id')
    ->where('employee.ID','=',$id)
    ->select()->get();
    $placeofbirth=Ward::join('employee','employee.PlaceofBirth','=','province.id')
    ->where('employee.ID','=',$id)
    ->select('*')->get();
    $nativeplace=Ward::join('employee','employee.NativePlace','=','province.id')
    ->where('employee.ID','=',$id)
    ->select('*')->get();
    $PA=District::join('employee','employee.PA_District','=','district.id')
    ->where('employee.ID','=',$id)
    ->select()->get();
    $PA2=Ward1::join('employee','employee.PA_Ward','=','ward.id')
    ->where('employee.ID','=',$id)
    ->select()->get();
    $PA3=Ward::join('employee','employee.PA_Province','=','province.id')
    ->where('employee.ID','=',$id)
    ->select()->get();
    $TA=District::join('employee','employee.TA_District','=','district.id')
    ->where('employee.ID','=',$id)
    ->select()->get();
    $TA2=Ward1::join('employee','employee.TA_Ward','=','ward.id')
    ->where('employee.ID','=',$id)
    ->select()->get();
    $TA3=Ward::join('employee','employee.TA_Province','=','province.id')
    ->where('employee.ID','=',$id)
    ->select()->get();
    $Mng=Employee::join('employee as emp','emp.id','=','employee.Manager')
    ->where('employee.ID','=',$id)
    ->Select('emp.*')->get();
   
    return view('employee.detail',compact('nhanvien','placeofbirth','nativeplace','PA','PA2','PA3','Mng','TA','TA2','TA3'));

   }
}

