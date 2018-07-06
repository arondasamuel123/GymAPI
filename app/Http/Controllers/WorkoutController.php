<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Session92448;
use App\User_92448;
use Auth;

class WorkoutController extends Controller
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
        return view('workoutsess');
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
            'location' => 'required',
            'reps' => 'required',
            'sets' => 'required',
            'exercise_type' => 'required',
            'date'=> 'required'
        ]);

        //workout = Session92448::create(request(['location', 'reps', 'sets', 'exercise_type','date']));
     
     $user= User_92448::where('id', $request->user_id)->first();
        
        $user->sessions()->create([
             'location'=> $request->location,
                 'reps'=> $request->reps,
                 'sets'=> $request->sets,
                 'exercise_type'=> $request->exercise_type,
                 'date'=> $request->date,
                 'user_id'=>$request->user_id
                 

                ]);

        return array('error' => false, 'message'=> $user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User_92448 $user)
    {
        $user->sessions;
     return array('error' => false, 'message'=> 'User workouts retrieved','user' => $user);
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
