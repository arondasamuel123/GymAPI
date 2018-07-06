<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GymLocation92448;

class GymLocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gyms = GymLocation92448::all();

         return array('error' => false, 'message'=> 'Gym Locations retrieved','gyms' => $gyms);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gym');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'lat' => 'required',
            'long' => 'required'
        ]);

        $gymloc = GymLocation92448::create(request(['name', 'lat', 'long']));

       return array('error' => true, 'gymloc' => $gymloc);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(GymLocation92448 $gym)
    {
        return array('error' => true, 'message'=> 'Gym Locations retrieved','gym' => $gym);
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
        //
    }
}
