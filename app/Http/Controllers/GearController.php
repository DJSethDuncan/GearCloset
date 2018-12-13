<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Gear;

class GearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$user_id = auth()->user()->id;
			$user = User::find($user_id);
			return view('gear.index')->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('gear.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			$this->validate($request, [
				'name' => 'required'
			]);
			// Create Post
			$gear = new Gear;
			$gear->name = $request->input('name');
			$gear->nickname = $request->input('nickname');
			$gear->user_id = auth()->user()->id;
			$gear->save();

			return redirect('/gear')->with('success', 'Gear added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gear = Gear::find($id);
				return view('gear.show')->with('gear',$gear);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gear = Gear::find($id);
				return view('gear.edit')->with('gear',$gear);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
			$gear = Gear::find($id);
			$gear->delete();
			return redirect('/gear')->with('success', 'Gear Removed');
    }
}
