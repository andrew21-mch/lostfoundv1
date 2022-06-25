<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Request $request){
        //validate request
        $request->validate([
            'name'=>'required',
        ]);

        $categrory = new Category();
        $categrory->name = $request->name;
        if($categrory->save()){
            $request->session()->put('message',"Category Added");
            return redirect('dashboard');
        }
        else{
            $request->session()->put('message',"Error Occured");
            return redirect('create/category');
        }

    }
}
