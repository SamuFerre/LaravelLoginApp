<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class EditController extends Controller {
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::find($id);
       return view('auth.edit',compact('user'));
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
         $user= User::find($id);
         $user->fill($request->all());
         $user->save();
        return redirect::to('/home');
         
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit(User $id)
    // {
    
    //     return view('auth.edit');
    // }
}




?>