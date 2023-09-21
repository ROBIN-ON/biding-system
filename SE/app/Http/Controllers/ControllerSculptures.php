<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelSculptures;


class ControllerSculptures extends Controller
{
    public function viewsculptures(){
        return view('admin/adminsculptures');
    }

    public function sculpturesform(){
        // return view('admin/form/sculpturesform');
        // return view('admin/form/destinationform');

        $urlsculptures = url('admin/form/sculpturesform');

        $data = compact('urlsculptures');
        return view('admin/form/sculpturesform')->with($data);
    }

    public function postsculptures(Request $request){

        echo "<pre>";
        print_r($request->all());

        $postsculptures = new ModelSculptures;
        $postsculptures->auction_title = $request['auction_title'];
        // $postdrawing->district = $request['district'];
        $postsculptures->location = $request['location'];
        $postsculptures->auction_date = $request['auction_date'];
        $postsculptures->auction_period = $request['auction_period'];
        $postsculptures->lot_reference_number = $request['lot_reference_number'];
        $postsculptures->lot_number = $request['lot_number'];
        $postsculptures->dop = $request['dop'];

        $postsculptures->estimate_price = $request['estimate_price'];
        $postsculptures->dimension = $request['dimension'];
        $postsculptures->framed = $request['framed'];
        $postsculptures->artist = $request['artist'];
        $postsculptures->lot_description = $request['lot_description'];
        // $postdestination->image = $request['image'];
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $name = time() . '_' . $image->getClientOriginalName();
        //     $image->storeAs('public/images', $name);
        //     $postdestination->image = $name;
        // }
    
        $postsculptures->save();

        return redirect('admin/adminsculptures');

        
    }

    public function viewsculpturess(Request $request){
        $search = $request['search'] ?? "";
        if ($search != "") {
            # code...
            $postsculptures = ModelSculptures::where('auction_title','LIKE', "%$search%")->orWhere('auction_date','LIKE',"%$search%")->get();
        }
        else{
            $postsculptures = ModelSculptures::all();
            

        }

        // $postsculptures = ModelSculptures::all();
         // make a variable which carry different data 
        $data = compact('postsculptures'); //compact helps to make array
   
        
         //return view('admin/adminlifestyle')->with($data);
         return view('./admin/adminsculptures')->with($data);
        
        
    }

    // --
    
    public function viewsculpturespublic(Request $request){
        $search = $request['search'] ?? "";
        if ($search != "") {
            # code...
            $viewsculpturespublic = ModelSculptures::where('auction_title','LIKE', "%$search%")->orWhere('auction_date','LIKE',"%$search%")->get();
        }
        else{
            $viewsculpturespublic = ModelSculptures::all();
            

        }

        


        // make a variable which carry different data 
        $data = compact('viewsculpturespublic'); //compact helps to make array
   
        
         //return view('admin/adminlifestyle')->with($data);
         return view('sculptures')->with($data);
        
        
    }

    // --

    public function SculpturesDelete($id){
        $valuesculptures = ModelSculptures::find($id);
        if(!is_null($valuesculptures)){
            $valuesculptures->delete();

        }
        return redirect('./admin/adminsculptures');
    }

    // ---

    public function SculpturesEdit($id){
        $valuesculptures = ModelSculptures ::find($id);
        if (is_null($valuesculptures)) {
            return redirect('./admin/adminsculptures');
        }
        else{
            // $title = "Destination update";

            // $urldestination = url('admin/form/destinationform/update'). "/" .$id;
            // $data = compact('valuedestination', 'urldestination','title');
            $urlsculptures = url('admin/form/sculpturesform/update'). "/" .$id;
            $data = compact('valuesculptures', 'urlsculptures');
            return view('admin/form/sculpturesform')->with($data);

        }
    }

    // ----

    public function SculpturesUpdate($id, Request $request){
        $valuesculptures = ModelSculptures ::find($id);

        $valuesculptures->auction_title = $request['auction_title'];
        // $postdrawing->district = $request['district'];
        $valuesculptures->location = $request['location'];
        $valuesculptures->auction_date = $request['auction_date'];
        $valuesculptures->auction_period = $request['auction_period'];
        $valuesculptures->lot_reference_number = $request['lot_reference_number'];
        $valuesculptures->lot_number = $request['lot_number'];
        $valuesculptures->dop = $request['dop'];

        $valuesculptures->estimate_price = $request['estimate_price'];
        $valuesculptures->dimension = $request['dimension'];
        $valuesculptures->framed = $request['framed'];
        $valuesculptures->artist = $request['artist'];
        $valuesculptures->lot_description = $request['lot_description'];

        
        // $valuedestination->image = $request['image']->store('image');
        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('image');
        //     $valuedestination->image = $imagePath;
        //  }
        $valuesculptures->save();

        return redirect('admin/adminsculptures');

    }
}
