<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Http\Requests\UserRequest;
use App\Http\Requests\EditRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('email', 'DESC')->paginate();
        return view('Users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
      $user  = new User;

      $role_user = Role::where('name', 'user')->first();
      $user->name      = $request->name;
      $user->email     = $request->email;
      $user->Latitude  = $request->Latitude;
      $user->Longitude = $request->Longitude;
      $user->password  = $request->password;

      $user->save();
      $user->roles()->attach($role_user);

      return redirect()->route('users.index')->with('info', 'User created succesfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view("Users.show", compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::find($id);
      return view("Users.edit", compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $id)
    {
      $user  = User::find($id);

      $user->name      = $request->name;
      $user->email     = $request->email;
      $user->Latitude  = $request->Latitude;
      $user->Longitude = $request->Longitude;

      $user->save();

      return redirect()->route('users.index')->with('info', 'User updated succesfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('info', 'User deleted succesfully.');
    }
}
