<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_email = User::where('email', $request->email)->value('email');
        if ($user_email) {
            flash()->error('User with Similar email Exists!');
            return redirect('admin-users');
        } else {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role = $request->role;
            $password = str_replace(' ', '', $request->name) . '@_' . date('Y');
            $user->password = bcrypt($password);
            $user->save();
            flash('User Added Successfully')->success();
            return redirect('admin-users');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show', compact($user));
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
        return view('admin.users.edit')
            ->with('user', $user);
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
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        $password = $request->password;
        $confirm_password = $request->confirm_password;

        if ($password != $confirm_password) {
            return back();
        } else {
            $user->password = bcrypt($request->password);
        }

        $user->save();
        flash()->success('Update Successful');
        return redirect('admin-users');
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
        flash()->success('User Deleted Successfully');
        return redirect('admin-users');
    }
}
