<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User_92448;

class LoginController extends Controller
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
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //$user = User_92448::where('email', $request->input('email'))->first();
       $user = Auth::user();
        if (Auth::attempt(request(['email', 'password'])) == false) {

            return array('error' => true, 'message' => 'Invalid password');

         }else {
            \Log::info("ii ndo info");
        \Log::info($user);

            return array('error' => false, 'message' => $user);

             
         }

    }
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User_92448 $user)
    {
        return array('error' => true, 'message'=> 'Users retrieved','user' => $user);
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
        auth()->logout();
    }
}
