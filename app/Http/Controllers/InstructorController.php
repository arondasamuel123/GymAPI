<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor92448;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructors = Instructor92448::all();
       return array('error' => false, 'instructors' => $instructors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instructor');
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

            'name'=> 'required',
            'email' => 'required',
            'gender' => 'required',
            'phoneno' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $instructor = new Instructor92448;

        if ($request->hasFile('image')) {

            $file = $request->file('image') ;
            
            $fileName = $file->getClientOriginalName() ;

            $destinationPath = public_path().'/images/';
            $file->move($destinationPath,$fileName);
            $instructor->image = $fileName ;

             
          }  
          $instructor->name = request('name');
          $instructor->email = request('email');
          $instructor->gender = request('gender');
          $instructor->phoneno = request('phoneno');
          $instructor->save();

          return array('error' => false, 'message'=> 'Instructor created' , 'instructor' => $instructor);
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
