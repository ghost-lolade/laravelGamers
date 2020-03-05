<?php

namespace App\Http\Controllers;

use App\Report;
use App\User;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\ReportResource;
use App\Http\Requests\Report as ReportRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class ReportController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return ReportResource::collection($user->report);
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
    public function store(ReportRequest $request, User $user)
    {
        $report = new Report($request->all());
       
        $user->report()->save($report);
       
        return response([
          'data' => new ReportResource($report)
        ], Response::HTTP_CREATED);//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        return new ReportResource($report);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        $report->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        $report->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
