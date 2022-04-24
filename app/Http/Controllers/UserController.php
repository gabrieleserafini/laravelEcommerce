<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\{SignupUserRequest, LoginRequest};
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash};


class UserController extends Controller
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
        return view('user.signup');
    }

    public function login(LoginRequest $request)
    {
        if ($request->isMethod('get')) {
            return view('user.login', [
                'error' => false
            ]);
        }

        $isLogged = Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        return $isLogged ? redirect('/dashboard') : view('user.login', [
            'error' => true
        ]);

        /* 
        $user = User::findByEmail($request->input('email'));

        if (!$user) {
            return view('user.login');
        }

        if (Hash::check($request->input('password'), $user->password)) {
            Auth::user($user);
        } 
        */
    }

    public function signup(SignupUserRequest $request)
    {
        $user = new User();
        $user->email =$request->input('email');
        $user->name =$request->input('name');
        $user->password =Hash::make( $request->input('password'));


        $user->save();

        return view('user.signup-success');

         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
