<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelPainting;

class ControllerPainting extends Controller
{
    public function viewpainting(){
        return view('admin/adminpainting');
    }

    public function paintingform(){
        
        // return view('admin/form/destinationform');

        $urlpainting = url('admin/form/paintingform');
        
        $data = compact('urlpainting');
        return view('admin/form/paintingform')->with($data);
    }

    public function postpainting(Request $request){

        echo "<pre>";
        print_r($request->all());

        $postpainting = new ModelPainting;
        $postpainting->auction_title = $request['auction_title'];
        // $postdrawing->district = $request['district'];
        $postpainting->location = $request['location'];
        $postpainting->auction_date = $request['auction_date'];
        $postpainting->auction_period = $request['auction_period'];
        $postpainting->lot_reference_number = $request['lot_reference_number'];
        $postpainting->lot_number = $request['lot_number'];
        $postpainting->dop = $request['dop'];

        $postpainting->estimate_price = $request['estimate_price'];
        $postpainting->dimension = $request['dimension'];
        $postpainting->framed = $request['framed'];
        $postpainting->artist = $request['artist'];
        $postpainting->lot_description = $request['lot_description'];
        // $postdestination->image = $request['image'];
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $name = time() . '_' . $image->getClientOriginalName();
        //     $image->storeAs('public/images', $name);
        //     $postdestination->image = $name;
        // }
    
        $postpainting->save();

        return redirect('admin/adminpainting');

        
    }

    public function viewpaintingg(Request $request){
        $search = $request['search'] ?? "";
        if ($search != "") {
            # code...
            $postpainting = ModelPainting::where('auction_title','LIKE', "%$search%")->orWhere('auction_date','LIKE',"%$search%")->get();
        }
        else{
            $postpainting = ModelPainting::all();
            

        }

        // $postpainting = ModelPainting::all();
         // make a variable which carry different data 
        $data = compact('postpainting'); //compact helps to make array
   
        
         //return view('admin/adminlifestyle')->with($data);
         return view('./admin/adminpainting')->with($data);
        
        
    }

    // --
    
    public function viewpaintingpublic(Request $request){
        $search = $request['search'] ?? "";
        if ($search != "") {
            # code...
            $viewpaintingpublic = ModelPainting::where('auction_title','LIKE', "%$search%")->orWhere('auction_date','LIKE',"%$search%")->get();
        }
        else{
            $viewpaintingpublic = ModelPainting::all();
            

        }

        


        // make a variable which carry different data 
        $data = compact('viewpaintingpublic'); //compact helps to make array
   
        
         //return view('admin/adminlifestyle')->with($data);
         return view('painting')->with($data);
        
        
    }

    // --

    public function PaintingDelete($id){
        $valuepainting = ModelPainting::find($id);
        if(!is_null($valuepainting)){
            $valuepainting->delete();

        }
        return redirect('./admin/adminpainting');
    }

    // ---

    public function PaintingEdit($id){
        $valuepainting = ModelPainting ::find($id);
        if (is_null($valuepainting)) {
            return redirect('./admin/adminpainting');
        }
        else{
            // $title = "Destination update";

            // $urldestination = url('admin/form/destinationform/update'). "/" .$id;
            // $data = compact('valuedestination', 'urldestination','title');
            $urlpainting = url('admin/form/paintingform/update'). "/" .$id;
            $data = compact('valuepainting', 'urlpainting');
            return view('admin/form/paintingform')->with($data);

        }
    }

    // ----

    public function PaintingUpdate($id, Request $request){
        $valuepainting = ModelPainting ::find($id);

        $valuepainting->auction_title = $request['auction_title'];
        // $postdrawing->district = $request['district'];
        $valuepainting->location = $request['location'];
        $valuepainting->auction_date = $request['auction_date'];
        $valuepainting->auction_period = $request['auction_period'];
        $valuepainting->lot_reference_number = $request['lot_reference_number'];
        $valuepainting->lot_number = $request['lot_number'];
        $valuepainting->dop = $request['dop'];

        $valuepainting->estimate_price = $request['estimate_price'];
        $valuepainting->dimension = $request['dimension'];
        $valuepainting->framed = $request['framed'];
        $valuepainting->artist = $request['artist'];
        $valuepainting->lot_description = $request['lot_description'];

        
        // $valuedestination->image = $request['image']->store('image');
        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('image');
        //     $valuedestination->image = $imagePath;
        //  }
        $valuepainting->save();

        return redirect('admin/adminpainting');

    }
}
