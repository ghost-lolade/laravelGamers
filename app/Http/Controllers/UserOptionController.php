<?php

namespace App\Http\Controllers;

use App\UserOption;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\UserOptionResource;
use App\Http\Requests\UserOption as UserOptionRequest;

class UserOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return UserOptionResource::collection($user->user_option);
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
    public function store(UserOptionRequest $request, User $user)
    {
        $userOption = new UserOption($request->all());
       
        $user->user_option()->save($userOption);
       
        return response([
          'data' => new UserOptionResource($userOption)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserOption  $userOption
     * @return \Illuminate\Http\Response
     */
    public function show(UserOption $userOption)
    {
        return new UserOptionResource($userOption);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserOption  $userOption
     * @return \Illuminate\Http\Response
     */
    public function edit(UserOption $userOption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserOption  $userOption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserOption $userOption)
    {
        $userOption->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserOption  $userOption
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserOption $userOption)
    {
        $userOption->delete();
        return response(null,Response::HTTP_NO_CONTENT);//
    }
}
