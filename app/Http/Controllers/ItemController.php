<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

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
          return "Saved";
        }
        else{
          return "Oops!";
        }
      }

      

    }

    function update(Request $request){
        
    }
    function delete(Request $request){
        
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
      $item = Item::find($id);
      return $item;
    }

    public function viewall(){
      $items = Item::join('schools', 'items.schoolid', 'schools.id')
              ->get();
      return view('viewitems',['itemss'=>$items]);
    }
}
