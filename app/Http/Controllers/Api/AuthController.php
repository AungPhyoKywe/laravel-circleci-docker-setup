<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        print_r($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    public function register(Request $request)

    {
       $validateUser= $request->validate([

            'name' => 'required|max:250',
            'email'=>'email|required|unique:users',
            'password'=>'required|confirmed',


        ]);
       $validateUser['password']=bcrypt($validateUser['password']);

        $user = User::create($validateUser);

        $accessToke=$user->createToken('authToken')->accessToken;

        return response(['user'=>$user,'access_token'=>$accessToke]);
    }

    public  function login(Request $request)
    {
        $loginData = $request->validate([

            'email'=>'email|required',
            'password'=>'required',


        ]);

        if (!auth()->attempt($loginData))
        {
            return response(['message'=>'invalid credials']);

        }

        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        return response(['user'=>auth()->user(),'access_token'=>$accessToken]);

    }
    public function getUser()
    {

        $user =Auth::user();

        //$accessToken = auth()->user()->createToken('authToken')->accessToken;

        return response(['user'=>$user,]);
    }
}
