<?php

namespace App\Http\Controllers;

use App\Models\School;
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
            'description'=>'required'
        ]);
        
        if($valid){
            $school = new School();
            $school->name = $request->name;
            $school->office_location = $request->description;

            if($school->save()){
                return redirect('dashboard', 201);
            }
            else{
                return redirect('create/school');
            }
            return $request->input();
        }
        else{
            return "Sorry";
        }
        
    }

    public function find(Request $request){
        $school = School::where('name','like','%'.$request->input('item').'%')->first();
        return view('viewschools',['foundschool'=>$school]);
    }
}
