<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // session()->flash('flash_message', 'You are logged in');
        return view('home');
    }

    public function list()
    {
        $users = User::all();

        return view('users', compact('users'));
    }

    public function show(User $user)
    {
        return view('user', compact('user'));

    }

    public function admin_users_list()
    {
        $users = User::all();

        return view('admin_users', compact('users'));
    }

    public function edit(User $user){

        return view('edit_user', compact('user'));
    }

    public function update(User $user, Request $request){

        $user->update([
            'name' => $request->name,
            'nationality' => $request->nationality,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        ]);

        return redirect('/admin/users');
    }

    public function delete(User $user){

        $user->delete();
        return redirect('admin/users');

    }

}
