<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cake as Cake;
use Illuminate\Support\Facades\View;


class CakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cakes = Cake::all();
        return View::make('cake.index')->with('cakes',$cakes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View::make('cake.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'Name'=>'required',
            'Price'=> 'numeric',
            'Storage'=>'integer'
            
        ]);
        $cake = new Cake;
        $cake->Name=$request->input('Name');
        $cake->Price=$request->input('Price');
        $cake->Storage = $request->input('Storage');
        $cake->save();

        return redirect('/cakes')->with('success','Cake created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cake = Cake::find($id);
        return view('cake.show')->with('cake',$cake);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cake = Cake::find($id);
        return view('cake.edit')->with('cake',$cake);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'Name'=>'required',
            'Price'=> 'numeric',
            'Storage'=>'integer'
            
        ]);
        $cake = Cake::find($id);
        $cake->Name=$request->input('Name');
        $cake->Price=$request->input('Price');
        $cake->Storage = $request->input('Storage');
        $cake->save();

        return redirect('/cakes')->with('success','Cake updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $cake=Cake::find($id);
        $cake->delete();
        return redirect('/cakes')->with('success','Cake deleted');
    }
}
