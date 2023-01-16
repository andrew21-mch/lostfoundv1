<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function create(Request $request){
      $request->validate([
        'image'=>'required',
        'category'=>'required',
        'desc'=>'required',
        'school'=>'required'
      ]);
      
      if($request->file('image')){
        if($request->file('image')->getSize() > 2000000){
          $request->session()->put('errorss', 'Image size is too large');
          return redirect()->back();
        }else{
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

      

    }

    function update(Item $item, Request $request){

      
        
    }
    function delete($id){
      if($item = DB::table('items')
      ->where('itemid', $id)){
        if($item->delete()){
          return redirect()->back()->with('message', "Item Deleted");
        }
      }
        
    }
    function find(Item $item, Request $request){
        $searched_item = $item::where('itemname', 'like', '%'.$request->input('item').'%')
        ->orWhere('category_id', 'like', '%'.$request->input('item').'%')
        ->orWhere('owner_name', 'like', '%'.$request->input('item').'%')
        ->orWhere('description', 'like', '%'.$request->input('item').'%')
        ->get();
        return view('found',['searched_result'=>$searched_item]);
      }
    public function view(Item $item, $id){
      $items = $item::find($id)
      ->join('schools', 'schools.id', 'items.schoolid')
      ->get();
      return view('item', ['itemd'=>$items]);
    }

    public function viewall(Item $item){
      $items = $item::join('schools', 'items.schoolid', 'schools.id')
              ->get();
      return view('viewitems',['itemss'=>$items]);
    }
}
