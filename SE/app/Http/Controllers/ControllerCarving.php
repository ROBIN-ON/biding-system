<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelCarving;

class ControllerCarving extends Controller
{
    //
    public function viewcarving(){
        return view('admin/admincarving');
    }

    public function carvingform(){
        
        // return view('admin/form/destinationform');

        $urlcarving = url('admin/form/carvingform');
        
        $data = compact('urlcarving');
        return view('admin/form/carvingform')->with($data);
    }

    public function postcarving(Request $request){

        echo "<pre>";
        print_r($request->all());

        $postcarving = new ModelCarving;
        $postcarving->auction_title = $request['auction_title'];
        // $postdrawing->district = $request['district'];
        $postcarving->location = $request['location'];
        $postcarving->auction_date = $request['auction_date'];
        $postcarving->auction_period = $request['auction_period'];
        $postcarving->lot_reference_number = $request['lot_reference_number'];
        $postcarving->lot_number = $request['lot_number'];
        $postcarving->dop = $request['dop'];

        $postcarving->estimate_price = $request['estimate_price'];
        $postcarving->dimension = $request['dimension'];
        $postcarving->framed = $request['framed'];
        $postcarving->artist = $request['artist'];
        $postcarving->lot_description = $request['lot_description'];
        // $postdestination->image = $request['image'];
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $name = time() . '_' . $image->getClientOriginalName();
        //     $image->storeAs('public/images', $name);
        //     $postdestination->image = $name;
        // }
    
        $postcarving->save();

        return redirect('admin/admincarving');

        
    }

    public function viewcarvingg(Request $request){
        $search = $request['search'] ?? "";
        if ($search != "") {
            # code...
            $postcarving = ModelCarving::where('auction_title','LIKE', "%$search%")->orWhere('auction_date','LIKE',"%$search%")->get();
        }
        else{
            $postcarving = ModelCarving::all();
            

        }

        // $postcarving = ModelCarving::all();
         // make a variable which carry different data 
        $data = compact('postcarving'); //compact helps to make array
   
        
         //return view('admin/adminlifestyle')->with($data);
         return view('./admin/admincarving')->with($data);
        
        
    }

    // --
    
    public function viewcarvingpublic(Request $request){
        $search = $request['search'] ?? "";
        if ($search != "") {
            # code...
            $viewcarvingpublic = ModelCarving::where('auction_title','LIKE', "%$search%")->orWhere('auction_date','LIKE',"%$search%")->get();
        }
        else{
            $viewcarvingpublic = ModelCarving::all();
            

        }

        


        // make a variable which carry different data 
        $data = compact('viewcarvingpublic'); //compact helps to make array
   
        
         //return view('admin/adminlifestyle')->with($data);
         return view('carving')->with($data);
        
        
    }

    // --

    public function CarvingDelete($id){
        $valuecarving = ModelCarving::find($id);
        if(!is_null($valuecarving)){
            $valuecarving->delete();

        }
        return redirect('./admin/admincarving');
    }

    // ---

    public function CarvingEdit($id){
        $valuecarving = ModelCarving ::find($id);
        if (is_null($valuecarving)) {
            return redirect('./admin/admincarving');
        }
        else{
            // $title = "Destination update";

            // $urldestination = url('admin/form/destinationform/update'). "/" .$id;
            // $data = compact('valuedestination', 'urldestination','title');
            $urlcarving = url('admin/form/carvingform/update'). "/" .$id;
            $data = compact('valuecarving', 'urlcarving');
            return view('admin/form/carvingform')->with($data);

        }
    }

    // ----

    public function CarvingUpdate($id, Request $request){
        $valuecarving = ModelCarving ::find($id);

        $valuecarving->auction_title = $request['auction_title'];
        // $postdrawing->district = $request['district'];
        $valuecarving->location = $request['location'];
        $valuecarving->auction_date = $request['auction_date'];
        $valuecarving->auction_period = $request['auction_period'];
        $valuecarving->lot_reference_number = $request['lot_reference_number'];
        $valuecarving->lot_number = $request['lot_number'];
        $valuecarving->dop = $request['dop'];

        $valuecarving->estimate_price = $request['estimate_price'];
        $valuecarving->dimension = $request['dimension'];
        $valuecarving->framed = $request['framed'];
        $valuecarving->artist = $request['artist'];
        $valuecarving->lot_description = $request['lot_description'];

        
        // $valuedestination->image = $request['image']->store('image');
        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('image');
        //     $valuedestination->image = $imagePath;
        //  }
        $valuecarving->save();

        return redirect('admin/admincarving');

    }
}
