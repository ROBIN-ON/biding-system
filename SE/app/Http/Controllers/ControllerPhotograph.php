<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelPhotograph;

class ControllerPhotograph extends Controller
{
    //
    public function viewphotograph(){
        return view('admin/adminphotograph');
    }

    public function photographform(){
       
        // return view('admin/form/destinationform');

        $urlphotograph = url('admin/form/photographform');

        $data = compact('urlphotograph');
        return view('admin/form/photographform')->with($data);
    }

    public function postphotograph(Request $request){

        echo "<pre>";
        print_r($request->all());

        $postphotograph = new ModelPhotograph;
        $postphotograph->auction_title = $request['auction_title'];
        // $postdrawing->district = $request['district'];
        $postphotograph->location = $request['location'];
        $postphotograph->auction_date = $request['auction_date'];
        $postphotograph->auction_period = $request['auction_period'];
        $postphotograph->lot_reference_number = $request['lot_reference_number'];
        $postphotograph->lot_number = $request['lot_number'];
        $postphotograph->dop = $request['dop'];

        $postphotograph->estimate_price = $request['estimate_price'];
        $postphotograph->dimension = $request['dimension'];
        $postphotograph->framed = $request['framed'];
        $postphotograph->artist = $request['artist'];
        $postphotograph->lot_description = $request['lot_description'];
        // $postdestination->image = $request['image'];
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $name = time() . '_' . $image->getClientOriginalName();
        //     $image->storeAs('public/images', $name);
        //     $postdestination->image = $name;
        // }
    
        $postphotograph->save();

        return redirect('admin/adminphotograph');

        
    }

    public function viewphotographh(Request $request){
        $search = $request['search'] ?? "";
        if ($search != "") {
            # code...
            $postphotograph = ModelPhotograph::where('auction_title','LIKE', "%$search%")->orWhere('auction_date','LIKE',"%$search%")->get();
        }
        else{
            $postphotograph = ModelPhotograph::all();
            

        }

        // $postphotograph = ModelPhotograph::all();
         // make a variable which carry different data 
        $data = compact('postphotograph'); //compact helps to make array
   
        
         //return view('admin/adminlifestyle')->with($data);
         return view('./admin/adminphotograph')->with($data);
        
        
    }

    // --
    
    public function viewphotographpublic(Request $request){
        $search = $request['search'] ?? "";
        if ($search != "") {
            # code...
            $viewphotographpublic = ModelPhotograph::where('auction_title','LIKE', "%$search%")->orWhere('auction_date','LIKE',"%$search%")->get();
        }
        else{
            $viewphotographpublic = ModelPhotograph::all();
            

        }

        


        // make a variable which carry different data 
        $data = compact('viewphotographpublic'); //compact helps to make array
   
        
         //return view('admin/adminlifestyle')->with($data);
         return view('photograph')->with($data);
        
        
    }

    // --

    public function PhotographDelete($id){
        $valuephotograph = ModelPhotograph::find($id);
        if(!is_null($valuephotograph)){
            $valuephotograph->delete();

        }
        return redirect('./admin/adminphotograph');
    }

    // ---

    public function PhotographEdit($id){
        $valuephotograph = ModelPhotograph ::find($id);
        if (is_null($valuephotograph)) {
            return redirect('./admin/adminphotograph');
        }
        else{
            // $title = "Destination update";

            // $urldestination = url('admin/form/destinationform/update'). "/" .$id;
            // $data = compact('valuedestination', 'urldestination','title');
            $urlphotograph = url('admin/form/photographform/update'). "/" .$id;
            $data = compact('valuephotograph', 'urlphotograph');
            return view('admin/form/photographform')->with($data);

        }
    }

    // ----

    public function PhotographUpdate($id, Request $request){
        $valuephotograph = ModelPhotograph ::find($id);

        $valuephotograph->auction_title = $request['auction_title'];
        // $postdrawing->district = $request['district'];
        $valuephotograph->location = $request['location'];
        $valuephotograph->auction_date = $request['auction_date'];
        $valuephotograph->auction_period = $request['auction_period'];
        $valuephotograph->lot_reference_number = $request['lot_reference_number'];
        $valuephotograph->lot_number = $request['lot_number'];
        $valuephotograph->dop = $request['dop'];

        $valuephotograph->estimate_price = $request['estimate_price'];
        $valuephotograph->dimension = $request['dimension'];
        $valuephotograph->framed = $request['framed'];
        $valuephotograph->artist = $request['artist'];
        $valuephotograph->lot_description = $request['lot_description'];

        
        // $valuedestination->image = $request['image']->store('image');
        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('image');
        //     $valuedestination->image = $imagePath;
        //  }
        $valuephotograph->save();

        return redirect('admin/admindrawing');

    }
}
