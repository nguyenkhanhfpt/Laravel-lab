<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\GroupChat\GroupChatRequest;
use App\Services\GroupChatService;
use Illuminate\Http\Request;

class GroupChatController extends ApiController
{
    protected $groupChatService;

    /**
     * GroupChatController constructor.
     * @param GroupChatService $groupChatService
     */
    public function __construct(
        GroupChatService $groupChatService
    ) {
        $this->groupChatService = $groupChatService;
    }

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
        //
    }

    /**
     * @param GroupChatRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(GroupChatRequest $request)
    {
        $result = $this->groupChatService->storeGroupChat($request->validated());

        return $result
            ? $this->jsonResponse(message: 'Success')
            : $this->jsonResponse(status: 500, message: 'Failed');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
}
