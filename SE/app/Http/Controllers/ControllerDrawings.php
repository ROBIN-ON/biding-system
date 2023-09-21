<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelDrawing;

class ControllerDrawings extends Controller
{
    
    public function viewdrawing(){
        return view('admin/admindrawing');
    }

    public function drawingform(){
        
        // return view('admin/form/destinationform');

        // $urldestination = url('admin/form/destinationform');
        // $title = "Destination Creation";
        // $data = compact('urldestination' , 'title');
        // return view('admin/form/destinationform')->with($data);

        $urldrawing = url('admin/form/drawingform');
        
        $data = compact('urldrawing');
        return view('admin/form/drawingform')->with($data);
    }

    public function postdrawing(Request $request){

        echo "<pre>";
        print_r($request->all());

        $postdrawing = new ModelDrawing;
        $postdrawing->auction_title = $request['auction_title'];
        // $postdrawing->district = $request['district'];
        $postdrawing->location = $request['location'];
        $postdrawing->auction_date = $request['auction_date'];
        $postdrawing->auction_period = $request['auction_period'];
        $postdrawing->lot_reference_number = $request['lot_reference_number'];
        $postdrawing->lot_number = $request['lot_number'];
        $postdrawing->dop = $request['dop'];

        $postdrawing->estimate_price = $request['estimate_price'];
        $postdrawing->dimension = $request['dimension'];
        $postdrawing->framed = $request['framed'];
        $postdrawing->artist = $request['artist'];
        $postdrawing->lot_description = $request['lot_description'];
        // $postdestination->image = $request['image'];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $name);
            $postdrawing->image = $name;
        }
    
        $postdrawing->save();

        return redirect('admin/admindrawing');

        
    }

    public function viewdrawingg(Request $request){
        $search = $request['search'] ?? "";
        if ($search != "") {
            # code...
            $postdrawing = ModelDrawing::where('auction_title','LIKE', "%$search%")->orWhere('auction_date','LIKE',"%$search%")->get();
        }
        else{
            $postdrawing = ModelDrawing::all();
            

        }

        // $postdrawing = ModelDrawing::all();
         // make a variable which carry different data 
        $data = compact('postdrawing'); //compact helps to make array
   
        
         //return view('admin/adminlifestyle')->with($data);
         return view('./admin/admindrawing')->with($data);
        
        
    }

    // --
    
    public function viewdrawingpublic(Request $request){
        $search = $request['search'] ?? "";
        if ($search != "") {
            # code...
            $viewddrawingpublic = ModelDrawing::where('auction_title','LIKE', "%$search%")->orWhere('auction_date','LIKE',"%$search%")->get();
        }
        else{
            // make a variable which carry different data 
            $viewddrawingpublic = ModelDrawing::all();
            

        }
        
        $data = compact('viewddrawingpublic'); //compact helps to make array
   
        
         //return view('admin/adminlifestyle')->with($data);
         return view('drawing')->with($data);
        
        
    }

    // --

    public function DrawingDelete($id){
        $valuedrawing = ModelDrawing::find($id);
        if(!is_null($valuedrawing)){
            $valuedrawing->delete();

        }
        return redirect('./admin/admindrawing');
    }

    // ---

    public function DrawingEdit($id){
        $valuedrawing = ModelDrawing ::find($id);
        if (is_null($valuedrawing)) {
            return redirect('./admin/admindrawing');
        }
        else{
            // $title = "Destination update";

            // $urldestination = url('admin/form/destinationform/update'). "/" .$id;
            // $data = compact('valuedestination', 'urldestination','title');
            $urldrawing = url('admin/form/drawingform/update'). "/" .$id;
            $data = compact('valuedrawing', 'urldrawing');
            return view('admin/form/drawingform')->with($data);

        }
    }

    // ----

    public function DrawingUpdate($id, Request $request){
        $valuedrawing = ModelDrawing ::find($id);

        $valuedrawing->auction_title = $request['auction_title'];
        // $postdrawing->district = $request['district'];
        $valuedrawing->location = $request['location'];
        $valuedrawing->auction_date = $request['auction_date'];
        $valuedrawing->auction_period = $request['auction_period'];
        $valuedrawing->lot_reference_number = $request['lot_reference_number'];
        $valuedrawing->lot_number = $request['lot_number'];
        $valuedrawing->dop = $request['dop'];

        $valuedrawing->estimate_price = $request['estimate_price'];
        $valuedrawing->dimension = $request['dimension'];
        $valuedrawing->framed = $request['framed'];
        $valuedrawing->artist = $request['artist'];
        $valuedrawing->lot_description = $request['lot_description'];

        
        // $valuedestination->image = $request['image']->store('image');
        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('image');
        //     $valuedestination->image = $imagePath;
        //  }
        $valuedrawing->save();

        return redirect('admin/admindrawing');

    }
}
