<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class SchoolController extends Controller
{
    //
    public function getSchools(){
        $schools = School::paginate(3);
        return view('viewschools',['schoolss'=>$schools]);
    }

    public function create(Request $request){
        $valid = $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'contact'=>'required'
        ]);
        
        if($valid){
            $school = new School();
            $school->schoolname = $request->name;
            $school->office_location = $request->desc;
            $school->contact = $request->contact;

            if($school->save()){
                $request->session()->put('message','School created successfully');
                return redirect('dashboard');
            }
            else{
                $request->session()->put('message','School creation failed');
                return redirect('create/school');
            }
        }
        else{
            return "Sorry";
        }
        
    }

    public function find(Request $request){
        $school = School::where('name','like','%'.$request->input('item').'%')->first();
        return view('viewschools',['foundschool'=>$school]);
    }

    public function delete($id)
    {
        $school = School::where('schools.schoolid' , $id);
        if($school){
            
            if($school->delete()){
                Session::put('message','School deleted successfully');
                return redirect('viewschools');
            }
            else{
                Session::put('message','School deletion failed');
                return redirect('viewschools');
            }
        }
        else{
            Session::put('message','School not found');
            return redirect('viewschools');
        }
        
    }
}
