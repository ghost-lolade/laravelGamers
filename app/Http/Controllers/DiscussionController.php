<?php

namespace App\Http\Controllers;

use App\Discussion;
use Illuminate\Http\Request;
//use App\Http\Controllers\API\BaseController as BaseController;

class DiscussionController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth:api')->except('index', 'show');
    }

    /**
     *
     */
    public function index()
    {
        return Discussion::all();
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
    public function store(Discussion $discussion, Request $request)
    {
        $discussion = new Discussion;
        $discussion->user_id = $request->user_id;
        $discussion->topic = $request->topic;
        $discussion->details = $request->details;
        $discussion->option_a = $request->option_a;
        $discussion->option_b = $request->option_b;
        $discussion->option_c = $request->option_c;
        $discussion->option_d = $request->option_d;
        $discussion->status = $request->status;
        $discussion->answer = $request->answer;
        $discussion->winner_id = $request->winner_id;
        $discussion->amount = $request->amount;
        $discussion->referee = $request->referee;


        $discussion->save();

        return response([

            'data' => new DiscussionResource($discussion)

        ], 'Discussion created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Discussion  $discussion
     * @return \Illuminate\Http\Response
     */
    public function show(Discussion $discussion)
    {
        return new DiscussionResource($discussion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Discussion  $discussion
     * @return \Illuminate\Http\Response
     */
    public function edit(Discussion $discussion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Discussion  $discussion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discussion $discussion)
    {
        $this->userAuthorize($discussion);

        $request['Winner'] = $request->winner_id;

        unset($request['winner_id']);

        $discussion->update($request->all());

       return response([

         'data' => new Discussion($discussion)

       ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discussion  $discussion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discussion $discussion)
    {
        $discussion->delete();

        return response(null, 'Discussion deleted');
    }

    public function userAuthorize($discussion){
        if(Auth::user()->id != $discussion->user_id){

        }
    }
}
