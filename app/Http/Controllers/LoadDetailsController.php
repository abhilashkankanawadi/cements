<?php

namespace App\Http\Controllers;
use App\NewLoad;
use Auth;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

use Illuminate\Http\Request;

class LoadDetailsController extends Controller
{
	public function index(){
		$showdata	=	NewLoad::all();
		 return view('admin.allLoads',['showdata'=>$showdata])->with([$i=0]);
		 //return Datatables::of($showdata)->make();
		//return view('datatables.index');
	}

	// public function show(){
	// 	$showdata	=	NewLoad::all();
	// 	return view('admin.allLoads', ['showdata'=>$showdata]);
	// }

    public function create(){
    	return view('admin.NewLoad');
    }

    public function store(Request $request){

    	$valids = request()->validate([
    		'date'	=> 'required|date|unique:new_loads'
    	],[

                'date.required' => 'Date is required'

            ]);
    	$add					=	new NewLoad;
    	$add->date 				= $request->date;
    	$add->bags 				= $request->bags;
    	$add->previous_bags 	= $request->previous_bags;
    	$add->bill_paid 		= $request->bill_paid;
    	$add->bag_rate 			= $request->bag_rate;
    	$add->unload_charge 	= $request->unload_charge;
    	$add->invoice_number 	= $request->invoice_number;
    	$add->vehicle_number 	= $request->vehicle_number;
    	if ($request->hasFile('bill_image')) {
    		$img = $request->file('bill_image')->store('public/images');
    		$add->bill_image	= str_replace('public/images', '', $img);
    	}
    	//$add->bill_image 		= $request->bill_image;
    	$add->receiver_name 	= $request->receiver_name;
    	$add->user_id			= Auth::user()->id;
    	$add->save();
    	 return redirect('newLoad')->with('status','data saved successfully');
    }
    public function delete(Request $request,$id){
    	$test = $request->id;
    	 $remove = NewLoad::where('id',$test)->delete();
    	 return redirect()->action('LoadDetailsController@index');
    }
}
