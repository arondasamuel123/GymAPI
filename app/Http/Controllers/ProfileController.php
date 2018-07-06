<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User_92448;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile');
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
            'workout_location' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'weight' => 'required',
            't_weight' => 'required'
        ]);

         $user= Auth::user();
        $user->details()->create([
             'workout_location'=> $request->workout_location,
                 'age'=> $request->age,
                 'gender'=> $request->gender,
                 'weight'=> $request->weight,
                 't_weight'=> $request->t_weight,
                 

                ]);

         return array('error' => false,'message'=> 'Profile created' , 'user' => $user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( User_92448 $user)
    {
        $user->details;
        return $user;
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
