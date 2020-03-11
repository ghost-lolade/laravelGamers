<?php

namespace App\Http\Controllers;

use App\InviteFriend;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\InviteFriendResource;
use App\Http\Requests\InviteFriend as InviteFriendRequest;

class InviteFriendController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return InviteFriendResource::collection($user->invite_friend);
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
    public function store(InviteFriendRequest $request, User $user)
    {
        $inviteFriend = new InviteFriend($request->all());
       
        $user->InviteFriend()->save($inviteFriend);
       
        return response([
          'data' => new InviteFriendResource($inviteFriend)
        ], Response::HTTP_CREATED);//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InviteFriend  $InviteFriend
     * @return \Illuminate\Http\Response
     */
    public function show(InviteFriend $inviteFriend)
    {
        return new InviteFriendResource($inviteFriend);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InviteFriend  $InviteFriend
     * @return \Illuminate\Http\Response
     */
    public function edit(InviteFriend $inviteFriend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InviteFriend  $InviteFriend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InviteFriend $inviteFriend)
    {
        $inviteFriend->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InviteFriend  $InviteFriend
     * @return \Illuminate\Http\Response
     */
    public function destroy(InviteFriend $inviteFriend)
    {
        $inviteFriend->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
