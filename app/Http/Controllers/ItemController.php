<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function create(Request $request){
      
      if($request->file('image')){
          $file = $request->file('image');
          $filename= date('YmdHi').$file->getClientOriginalName();
          $file-> move(public_path('/images/'), $filename);
          
          $item = new Item();
          $item->itemname = $request->name;
          $item->category_id = $request->category;
          $item->owner_name = $request->owner;
          $item->description = $request->desc;
          $item->image_url = $filename;
          $item->schoolid = $request->school;

        if($item->save()){
          $request->session()->put('message', 'Item Successfully Added');
          return redirect('dashboard');
        }
        else{
          $request->session()->put('message', 'Something went wrong please try ag');
          return redirect()->back();
        }
      }

      

    }

    function update(Request $request){
      
        
    }
    function delete($id){
      if($item = DB::table('items')
      ->where('itemid', $id)){
        if($item->delete()){
          return redirect()->back()->with('message', "Item Deleted");
        }
      }
        
    }
    function find(Request $request){
        $searched_item = Item::where('itemname', 'like', '%'.$request->input('item').'%')
        ->orWhere('category_id', 'like', '%'.$request->input('item').'%')
        ->orWhere('owner_name', 'like', '%'.$request->input('item').'%')
        ->orWhere('description', 'like', '%'.$request->input('item').'%')
        ->get();
        return view('found',['searched_result'=>$searched_item]);
      }
    public function view($id){
      $item = Item::where('itemid',$id)
            ->join('schools', 'schools.schoolid', 'items.schoolid')
            ->get();
      return view('item', ['itemd'=>$item]);
    }

    public function viewall(){
      $items = Item::join('schools', 'items.schoolid', 'schools.schoolid')
              ->get();
      return view('viewitems',['itemss'=>$items]);
    }
}
