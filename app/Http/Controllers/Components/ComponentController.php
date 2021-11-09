<?php

namespace App\Http\Controllers\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Components\Component;

class ComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('Components.component');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$validate=$request->validate([
		'component'=>['required','min:3','string'],
		'amount'=>['required','numeric'],
		'status'=>'required'
		]);
		
        $component = new Component;
	
		$component->name=$request->component;
		
		$component->amount=$request->amount;
		$component->status=$request->status;
	
		$component->user_id=auth()->user()->id;
		$component->save();
		return redirect(route('show'))->with('message', 'Successfully!');
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
		$id = auth()->user()->id;
		$components=component::where('user_id',$id)->get();
		//dd($component);
		return view('components.show_component',['components'=>$components]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //edit component data
    public function edit(Component $component,$id)
    {
        $components = component::find($id);
		//dd($components);
		return view('components.edit_component',['components'=>$components]);
		 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //update component data
    public function update(Request $request,Component $component,$id)
    {
      $validate=$request->validate([
		'component'=>['required','min:3','string'],
		'amount'=>['required','numeric'],
		'status'=>'required'
		]);
		
       $component = component::find($id);
	  // dd($component);
	   $component->name=$request->get('component');
	   $component->amount=$request->get('amount');
	   $component->status=$request->get('status');
	   $component->save();
	  // return redirect(route('show'));
	   return redirect(route('show'))->with('message', 'Update Successfully!');

	}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   //delete component data
    public function destroy(Component $component,$id)
    {
        $component = component::find($id);
		//dd($component);
        $component->delete();

		return redirect(route('show'))->with('message', 'Delete Successfully!');

    }
}
